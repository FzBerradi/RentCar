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
			<li  class="active">
				<a href="/manageClients">
					<i class='bx bxs-group' ></i>
					<span class="text">Gestion de clients</span>
				</a>
			</li>
			<li>
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
					<h1>Clients</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="/manageClients">Clients</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a  href="/ajouterClient">Ajouter un client</a>
						</li>
					</ul>
				</div>
				
			</div>

			

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Ajouter Client</h3>
						
					</div>
					<form action="/ajouterClient/store" method="post">
						@csrf
                        <div class="form-group">
                            <label>CIN</label>
                            <input type="text" name="cin" required>
                        </div>
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label>Adresse</label>
                            <input type="text" name="adresse" required>
                        </div>
                        <div class="form-group">
                            <label>Numéro de téléphone</label>
                            <input type="text" name="numTel" required>
                        </div>
                        <button type="submit" class="btn">Ajouter</button>
                    </form>
				
					
				</div>
			</div>	
				
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
</x-managerhead>