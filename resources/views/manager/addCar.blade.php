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
							<a class="active"  href="/manageVoitures">Voitures Disponibles</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a  href="/ajouterVoiture">Ajouter une voiture</a>
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
					<div class="head">
						<h3>Ajouter Voiture</h3>
						
					</div>
					<form action="/ajouterVoiture/store" method="post" enctype="multipart/form-data">
						@csrf
                        <div class="form-group">
                            <label>Marque</label>
                            <input type="text" name="marque" required>
                        </div>
                        <div class="form-group">
                            <label>Modèle</label>
                            <input type="text" name="modele" required>
                        </div>
                        <div class="form-group">
                            <label>Matricule</label>
                            <input type="text" name="matricule" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Carburant</label>
                            <select name="carburant" required>
                                <option value="">Sélectionnez le carburant</option>
                                <option value="essence">Essence</option>
                                <option value="diesel">Diesel</option>
                                <option value="electrique">Électrique</option>
                                <option value="hybride">Hybride</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kilométrage</label>
                            <input type="number" name="kilometrage" required>
                        </div>
						<div class="form-group">
                            <label>Prix par journée</label>
                            <input type="number" name="prixJournee" required>
							<input type="file" name="photo" id="upload-photo" accept="image/*" required>
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