<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Reservation;
use App\Models\Voiture;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class Manager extends Controller
{
    public function index()
    {
        $nbClients = Client::count();
        $nbVoitures = Voiture::where('statut', 0)->count();
        $nbReservations = Reservation::where('statut', 1)->count();
        return view("manager.dashboard", compact('nbReservations', 'nbVoitures', 'nbClients'));
    }
    public function clients()
    {
        $clients = Client::paginate(4);
        return view("manager.clients", compact('clients'));
    }
    public function rechercherClient(Request $request)
    {
        $query = $request->query('query');

        $clients = Client::where('cin', 'like', "%{$query}%")
            ->orWhere('nom', 'like', "%{$query}%")
            ->paginate(4);

        return view('manager.clients', compact('clients'));

    }
    public function editClient(Client $client)
    {
        return view("manager.clientEdit", compact('client'));
    }
    public function updateClient(Request $request, Client $client)
    {
        // Validation

        $formFields = $request->validate([
            'cin' => 'required',
            'nom' => 'required',
            'adresse' => 'required',
            'numTel' => 'required',
        ]);
        $client->fill($formFields)->save();
        return redirect('/manageClients')->with('success', 'Client ' . $client->nom . ' a été bien modifié !');
    }
    public function destroyC(Client $client)
    {
        $id = $client->id;
        $client->delete();
        return redirect("/manageClients")->with('success', "Le client: " . $client->nom . " a été bien  supprimé.");
    }



    public function addClient()
    {
        return view("manager.addClient");
    }
    public function storeAddClient(Request $request)
    {
        // Validation
        $formFields = $request->validate([
            'cin' => 'required',
            'nom' => 'required',
            'adresse' => 'required',
            'numTel' => 'required',
        ]);
        Client::create($formFields);
        return redirect('/manageClients')->with('success', 'Client ' . $request->nom . ' ajouté avec succes !');

    }




    public function voitures()
    {
        $voitures = Voiture::where('statut', 0)->paginate(4);
        return view("manager.voitures", compact('voitures'));
    }
    public function rechercherVoiture(Request $request)
    {
        $query = $request->query('query');

        $voitures = Voiture::where('statut', 0)
            ->where(function ($q) use ($query) {
                $q->where('marque', 'like', "%{$query}%")
                    ->orWhere('prixJournee', 'like', "%{$query}%");
            })
            ->paginate(4);


        return view('manager.voitures', compact('voitures'));

    }
    public function editVoiture(Voiture $voiture)
    {
        return view("manager.voitureEdit", compact('voiture'));
    }
    public function updateVoiture(Request $request, Voiture $voiture)
    {
        // Validation

        $formFields = $request->validate([
            'marque' => 'required',
            'matricule' => 'required',
            'modele' => 'required',
            'carburant' => 'required',
            'kilometrage' => 'required',
            'prixJournee' => 'required',
            'statut' => 'required|numeric|in:0,1',
        ]);
        $formFields['statut'] = intval($request->input('statut'));

        $voiture->fill($formFields)->save();
        return redirect('/manageVoitures')->with('success', 'Voiture ' . $voiture->marque . ' a été bien modifié !');
    }
    public function destroyV(Voiture $voiture)
    {
        $id = $voiture->id;
        $voiture->delete();
        return redirect("/allVoitures")->with('success', "La voiture: " . $voiture->marque . " a été bien supprimé.");
    }



    public function addCar()
    {
        return view("manager.addCar");
    }
    public function storeAddVoiture(Request $request)
    {
        // Validation
        $formFields = $request->validate([
            'marque' => 'required',
            'matricule' => 'required',
            'modele' => 'required',
            'carburant' => 'required',
            'photo' => 'required|image',
            'kilometrage' => 'required',
            'prixJournee' => 'required',
        ]);
        $formFields['statut'] = 0;
        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('voiture_photos', 'public');
        }
        Voiture::create($formFields);
        return redirect('/manageVoitures')->with('success', 'Voiture ' . $request->marque . ' ajoutée avec succes !');

    }




    public function allCars()
    {
        $voitures = Voiture::paginate(4);
        return view("manager.allCars", compact('voitures'));
    }
    public function rechercherAllVoiture(Request $request)
    {
        $query = $request->query('query');

        $voitures = Voiture::where('marque', 'like', "%{$query}%")
            ->orWhere('prixJournee', 'like', "%{$query}%")
            ->paginate(4);

        return view('manager.allCars', compact('voitures'));

    }





    public function reservations()
    {
        $reservations = Reservation::where('statut', 0)->paginate(4);
        return view("manager.reservations", compact('reservations'));
    }
    public function rechercherReservation(Request $request)
    {
        $query = $request->query('query');


        $clientIds = Client::where('nom', 'like', "%{$query}%")->pluck('_id')->all();

        $reservations = Reservation::whereIn('Client_ID', $clientIds)
            ->where('statut', 0)
            ->with(['voiture', 'client'])
            ->paginate(4);

        return view('manager.reservations', compact('reservations'));

    }


    public function addReservation()
    {
        $voitures = Voiture::where('statut', 0)->get();
        $clients = Client::all();
        return view('manager.addReservation', compact('voitures', 'clients'));
    }
    public function storeAddReservation(Request $request)
    {
        // Validation
        $formFields = $request->validate([
            'Client_ID' => 'required',
            'Voiture_ID' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'montant_ht' => 'required|numeric',
            'montant_ttc' => 'required|numeric',
        ]);
        $formFields['tva'] = 0.20;
        $formFields['statut'] = 0;
        Reservation::create($formFields);
        return redirect('/manageReservations')->with('success', 'La réservation a été ajoutée avec succes !');

    }
    public function historique()
    {
        $reservations = Reservation::where('statut', 1)->whereHas('voiture')->paginate(4);
        return view("manager.historique", compact('reservations'));
    }
    public function rechercherAllReservation(Request $request)
    {
        $query = $request->query('query');


        $clientIds = Client::where('nom', 'like', "%{$query}%")->pluck('_id')->all();

        $reservations = Reservation::whereIn('Client_ID', $clientIds)
            ->where('statut', 1)
            ->with(['voiture', 'client'])
            ->paginate(4);

        return view('manager.historique', compact('reservations'));

    }

    public function detailsReservation(Request $request)
    {

        $id = $request->id;
        $reservation = Reservation::findOrFail($id);
        return view('manager.detailsReservation', compact('reservation'));

    }
    public function generateInvoice($id)
    {
        $reservation = Reservation::with(['voiture', 'client'])->find($id);
        if (!$reservation) {
            return abort(404);
        }

        $pdf = Pdf::loadView('invoices.invoice', compact('reservation'));
        return $pdf->stream('invoice.pdf'); 
    }
    public function accept($id)
    {
        $reservation = Reservation::find($id);
        if ($reservation) {
            $reservation->update(['statut' => 1]);
            return redirect('/historiqueReservation')->with('success', 'La réservation a été acceptée avec succés !');
        }
        return redirect()->back()->with('error', 'Reservation not found.');
    }

    public function refuse($id)
    {
        $reservation = Reservation::find($id);
        if ($reservation) {
            $reservation->delete();
            return redirect('/manageReservations')->with('danger', 'La réservation a été refusée et supprimée avec succés !');
        }
        return redirect()->back()->with('error', 'Reservation not found.');
    }





    public function profilManager()
    {
        $id = auth()->user()->id;
        return view("manager.profilManager", compact('id'));
    }
    public function editManager(\App\Models\Manager $manager)
    {
        return view("manager.editProfil", compact('manager'));
    }
    public function updateManager(Request $request, \App\Models\Manager $manager)
    {
        // Validation
        $formFields = $request->validate([
            'cin' => 'required',
            'email' => 'required|email',
            'nom' => 'required',
        ]);
        $manager->fill($formFields)->save();
        return redirect('/profilManager')->with('success', 'Votre profil a été bien modifié !');
    }
}
