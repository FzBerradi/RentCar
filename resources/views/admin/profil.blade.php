<x-liens title="Mon profil">


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
			<li >
				<a href="/manageAdmins">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Admins</span>
				</a>
			</li>
			<li>
				<a href="/manageManagers">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Managers</span>
				</a>
			</li>
			<li >
				<a href="/ajouterUtilisateur">
					<i class='bx bxs-cog' ></i>
					<span class="text">Ajouter Utilisateur</span>
				</a>
			</li>
			
			
		</ul>
		<ul class="side-menu">
			<li class="active">
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
					<h1>Mon profil <a href="{{route('admin.edit',$id)}}"><i class='bx bxs-edit-alt' ></i></a></h1>
				</div>
				
			</div>

			<div class="table-data">
				<div class="todo">
					<div class="row my-2">
						@include('partials.flashbag')
			
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>CIN : {{auth('admin')->user()->cin}}</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Nom : {{auth('admin')->user()->nom}}</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Email : {{auth('admin')->user()->email}}</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						
					</ul>
					
					
				</div>
			</div>
				
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
</x-liens>