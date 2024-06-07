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
			<li class="active">
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
					
					<h1>Profil {{$client->nom}} : </h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Profil</a>
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
						<h3>Modifier profil</h3>
						
					</div>
					<form  action="{{route('client.update',$client->id)}}" method="POST">
						@method('PUT')
						@csrf
						
						<div class="form-group">
							<label>CIN</label>
							<input type="text"  name="cin" value="{{$client->cin}}" required>
						</div>
						<div class="form-group">
							<label>Nom</label>
							<input type="text"  name="nom" value="{{$client->nom}}" required>
						</div>
						<div class="form-group">
							<label>Adresse</label>
							<input type="text" name="adresse" value="{{$client->adresse}}" required>
						</div>
						<div class="form-group">
							<label>Numéro de téléphone</label>
							<input type="text" name="numTel" value="{{$client->numTel}}" required>
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