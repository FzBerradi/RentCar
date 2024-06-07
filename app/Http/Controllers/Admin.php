<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Manager;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Admin extends Controller
{
    public function index()
    {
        $idAdmin = auth('admin')->user()->id;
        $nbManagers = Manager::count();
        $nbClients = Client::count();
        $nbReservations = Reservation::where('statut', 1)->count();

        return view("admin.dashboard", compact('nbManagers', 'nbReservations', 'nbClients'));
    }

    public function addUser()
    {
        return view("admin.addUser");
    }
    public function storeAddUser(Request $request)
    {
        // Validation
        $formFields = $request->validate([
            'cin' => 'required',
            'nom' => 'required',
            'email' => 'required|email|unique:managers',
            'password' => 'required',
        ]);
        $password = $request->password;
        $formFields['password'] = Hash::make($password);
        if ($request->role === 'admin') {
            \App\Models\Admin::create($formFields);
            return redirect('/manageAdmins')->with('success', 'Admin ' . $request->nom . ' ajouté avec succes !');
        } elseif ($request->role == "manager") {
            Manager::create($formFields);
            return redirect('/manageManagers')->with('success', 'Manager ' . $request->nom . '  ajouté avec succes !');
        }

    }
    public function profil()
    {
        $id = auth('admin')->user()->id;
        return view("admin.profil", compact('id'));
    }
    public function edit(\App\Models\Admin $admin)
    {
        return view("admin.profilEdit", compact('admin'));
    }
    public function update(Request $request, \App\Models\Admin $admin)
    {
        // Validation
        $formFields = $request->validate([
            'cin' => 'required',
            'email' => 'required|email',
            'nom' => 'required',
        ]);
        $admin->fill($formFields)->save();
        return redirect('/monProfil')->with('success', 'Votre profil a été bien modifié !');
    }
    public function admins()
    {

        $id = auth('admin')->user()->id;
        $admins = \App\Models\Admin::where('_id', '!=', $id)->paginate(4);
        return view("admin.admins", compact('admins'));
    }


    public function managers()
    {
        $managers = Manager::paginate(4);
        return view("admin.managers", compact('managers'));
    }
    public function editManager(Manager $manager)
    {
        return view("admin.managerEdit", compact('manager'));
    }
    public function updateManager(Request $request, Manager $manager)
    {
        // Validation

        $formFields = $request->validate([
            'cin' => 'required',
            'email' => 'required|email',
            'nom' => 'required',
        ]);
        $manager->fill($formFields)->save();
        return redirect('/manageManagers')->with('success', 'Manager ' . $manager->nom . ' a été bien modifié !');
    }
    public function destroyM(Manager $manager)
    {
        $id = $manager->id;
        $manager->delete();
        return redirect("/manageManagers")->with('success', "Le manager: " . $manager->nom . " a été bien  supprimé.");
    }
    public function rechercherManager(Request $request)
    {
        $query = $request->query('query');

        $managers = Manager::where('cin', 'like', "%{$query}%")
            ->orWhere('nom', 'like', "%{$query}%")
            ->paginate(4);

        return view('admin.managers', compact('managers'));

    }
    public function rechercherAdmin(Request $request)
    {

        $query = $request->query('query');

        $admins = \App\Models\Admin::where('cin', 'like', "%{$query}%")
            ->orWhere('nom', 'like', "%{$query}%")
            ->paginate(4);

        return view('admin.admins', compact('admins'));

    }
}
