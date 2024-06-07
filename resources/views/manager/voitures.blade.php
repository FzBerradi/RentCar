<x-managerhead title="Dashboard">


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
			<li class="active">
				<a href="/manageVoitures">
					<i class='bx bxs-car'></i>
					<span class="text">Gestion de voitures</span>
				</a>
			</li>
			<li>
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
					<h1>Voitures</h1>
					<ul class="breadcrumb">
						<li>
							<a href="/manageVoitures">Voitures Disponibles</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="/ajouterVoiture">Ajouter une voiture</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="/allVoitures">Liste des voitures</a>
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
						<h3>Gestions des voitures</h3>
						
						<form method="GET" action="/rechercheVoiture">
							<div class="form-input1">
								<input type="search" name="query" placeholder="Marque ou Prix...">
								<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
							</div>
						</form>
					</div>
					<table>
						<thead>
							<tr>
								<th>Marque</th>
								<th>Modèle</th>
								<th>Carburant</th>
								<th>Kilomètrage</th>
								<th>Matricule</th>
								<th>Actions</th>
								<th>Supprimer</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($voitures as $voiture)
							<tr>
								<td>
									<img src="{{ asset('storage/' . $voiture->photo) }}">
									<p>{{$voiture->marque}}</p>
								</td>
								<td>{{$voiture->modele}}</td>
								<td>{{$voiture->carburant}}</td>
								<td>{{$voiture->kilometrage}} Km</td>
								<td>{{$voiture->matricule}}</td>
								<td><a href="{{route('voiture.edit',$voiture->id)}}"><span class="status completed">Modifier</span></a>
									
								</td>
								<td><form action="/voiture/{{$voiture->id}}" method="POST">
									@method('DELETE')
									@csrf
									<button class="status red">Supprimer</button>
								</form></td>
							</tr>
							
							@empty
            				<tr>
                				<td colspan="6" class="text-center">Aucune voiture trouvée.</td>
            				</tr>
       						 @endforelse
						</tbody>
					</table>
					<div class="custom-pagination">
						{{ $voitures->links() }}
					</div>
				</div>
				
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
</x-managerhead>