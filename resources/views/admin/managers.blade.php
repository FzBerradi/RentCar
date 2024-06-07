<x-liens title="Managers">

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="/dashboardAdmin" class="brand">
			<i class="ri-steering-line"></i>
			       Rentcar
		</a>
		<ul class="side-menu top">
			<li >
				<a href="/dashboardAdmin">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="/manageAdmins">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Admins</span>
				</a>
			</li>
			<li  class="active">
				<a href="/manageManagers">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Managers</span>
				</a>
			</li>
			<li>
				<a href="/ajouterUtilisateur">
					<i class='bx bxs-cog' ></i>
					<span class="text">Ajouter Utilisateur</span>
				</a>
			</li>
			
			
		</ul>
		<ul class="side-menu">
			<li>
				<a href="/monProfil">
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
					
					<h1>Managers</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Managers</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Liste</a>
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
						<h3>Liste des managers</h3>
						<form method="GET" action="/rechercheManager">
							<div class="form-input1">
								<input type="search" name="query" placeholder="Recherche par CIN ou Nom...">
								<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
							</div>
						</form>
					</div>
					<table>
						<thead>
							<tr>
								
								<th>CIN</th>
								<th>Nom</th>
								<th>Email</th>
								<th>Action</th>
								<th>Supprimer</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($managers as $manager)
							<tr>
								
								<td>{{$manager->cin}}</td>
								<td>{{$manager->nom}}</td>
								<td>{{$manager->email}}</td>
								<td><a href="{{route('manager.edit',$manager->id)}}"><span class="status completed">Modifier</span></a>
									
								</td>
								<td><form action="/manager/{{$manager->id}}" method="POST">
									@method('DELETE')
									@csrf
									<button class="status red">Supprimer</button>
								</form></td>
							</tr>
							@empty
            				<tr>
                				<td colspan="5" class="text-center">Aucun manager trouvé.</td>
            				</tr>
       						 @endforelse
    					</tbody>
					</table>
					
					<div class="custom-pagination">
						{{ $managers->links() }}
					</div>
				</div>
				
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
</x-liens>