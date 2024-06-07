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
			<li >
				<a href="/manageClients">
					<i class='bx bxs-group' ></i>
					<span class="text">Gestion de clients</span>
				</a>
			</li>
			<li class="active">
				<a href="/manageVoitures">
					<i class='bx bxs-car'></i>
					<span class="text">Gestion de voitures</span>
				</a>
			</li>
			<li >
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
					
					<h1>Voiture: {{$voiture->marque}}  </h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Voiture</a>
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
						<h3>Modifier voiture</h3>
						
					</div>
					<form  action="{{route('voiture.update',$voiture->id)}}" method="POST">
						@method('PUT')
						@csrf
						
						<div class="form-group">
							<label>Marque</label>
							<input type="text"  name="marque" value="{{$voiture->marque}}" required>
						</div>
						<div class="form-group">
							<label>Matricule</label>
							<input type="text"  name="matricule" value="{{$voiture->matricule}}" required>
						</div>
						<div class="form-group">
							<label>Modele</label>
							<input type="text" name="modele" value="{{$voiture->modele}}" required>
						</div>
						<div class="form-group">
							<label>Carburant</label>
							<input type="text" name="carburant" value="{{$voiture->carburant}}" required>
						</div>
						<div class="form-group">
							<label>Kilométrage</label>
							<input type="number" name="kilometrage" value="{{$voiture->kilometrage}}" required>
						</div>
						<div class="form-group">
							<label>Prix par journée</label>
							<input type="number" name="prixJournee" value="{{$voiture->prixJournee}}" required>
						</div>
						<div class="form-group">
                            <label>Disponibilité</label>
                            <select name="statut" required>
                                <option value="">Disponibilité</option>
                                <option value=0>Disponible</option>
                                <option value=1>Non disponible</option>
                            </select>
                        </div>
						<button type="submit" class="btn">Modifier</button>
					</form>	
				
						
				</div>
			</div>	
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script src="../../Style/script.js"></script>
</body>
</html>