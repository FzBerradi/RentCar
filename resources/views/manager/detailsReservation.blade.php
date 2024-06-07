<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<!-- My CSS -->
	<link rel="stylesheet" href="../../Style/style.css">

	<title>Rentcar - Manager</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="/dashboardManager" class="brand">
			<i class="ri-steering-line"></i>
			<span class="text">Rentcar</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="/dashboardManager">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="/manageClients">
					<i class='bx bxs-group' ></i>
					<span class="text">Gestion de clients</span>
				</a>
			</li>
			<li >
				<a href="/manageVoitures">
					<i class='bx bxs-car'></i>
					<span class="text">Gestion de voitures</span>
				</a>
			</li>
			<li class="active">
				<a href="/manageReservations">
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">Gestion de réserevations</span>
				</a>
			</li>
			
			
		</ul>
		<ul class="side-menu">
			<li>
				<a href="/profilManager">
					<i class='bx bxs-cog' ></i>
					<span class="text">Profil</span>
				</a>
			</li>
			<li>
				<a href="/logout" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Déconnexion</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Détails Réservation</h1>
					<ul class="breadcrumb">
						<li>
							<a href="/manageReservations">Réservations en attente</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="{{ url()->previous() }}">Retour</a>
						</li>
						
					</ul>
				</div>
				
			</div>

            <div class="table-data">
				<div class="order">
					<div class="row my-2">
						@include('partials.flashbag')
			
					</div>
					<div class="head">
						<h3>Details</h3>
					</div>
					<div class="container py-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4 shadow-sm">
                                    <img src="{{ asset('storage/' . $reservation->voiture->photo) }}" class="card-img-top" alt="Vehicle Image">
                                    <div class="card-body">
                                        <h5 class="card-title">Vehicule réservé</h5>
                                        <p class="card-text">Marque: {{$reservation->voiture->marque}}</p>
                                        <p class="card-text">Modèle: {{$reservation->voiture->modele}}</p>
                                        <p class="card-text">Carburant: {{$reservation->voiture->carburant}}</p>
                                        <p class="card-text">Kilometrage: {{$reservation->voiture->kilometrage}} Km</p>
                                        <p class="card-text">Prix de journée: {{$reservation->voiture->prixJournee}} DH</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <form action="{{ route('reservations.accept', $reservation->id) }}" method="POST" style="margin-right: 10px;">
													@csrf
													<button type="submit" class="btn btn-sm btn-outline-success">Accepter</button>
												</form>
                                                <form action="{{ route('reservations.refuse', $reservation->id) }}" method="POST">
													@csrf
													@method('DELETE')
													<button type="submit" class="btn btn-sm btn-outline-danger">Refuser</button>
												</form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="ri-steering-line"></i>    Détails de réservation</h5>
                                        <p class="card-text">Nom Client: {{$reservation->client->nom}}</p>
                                        <p class="card-text">Date début: {{$reservation->date_debut}}</p>
                                        <p class="card-text">Date fin: {{$reservation->date_fin}}</p>
                                        <p class="card-text">Montant HT: {{$reservation->montant_ht}} DH</p>
                                        <p class="card-text">Montant TTC: {{$reservation->montant_ttc}} DH</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <button onclick="window.open('{{ route('generate.invoice', $reservation->id) }}', '_blank')" class="btn btn-primary">Générer facture</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>	
        </main>
		<!-- MAIN -->
	</section>
	
	<script src="../../Style/script.js"></script>
</body>
</html>