<x-liens title="Dashboard">


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="/dashboardAdmin" class="brand">
			<i class="ri-steering-line"></i>
			<span class="text">Rentcar</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
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
			<li>
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
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>{{ $nbClients }}</h3>
						<p>Total clients</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>{{ $nbManagers }}</h3>
						<p>Total managers</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>{{ $nbReservations }}</h3>
						<p>Total réservations</p>
					</span>
				</li>
			</ul>


			
				
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
</x-liens>