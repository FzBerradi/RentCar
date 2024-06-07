<x-liens title="Ajouter Utilisateur">
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
			<li class="active">
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
					<h1>Gestion des utilisateurs</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Ajouter</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Utilisateur</a>
						</li>
					</ul>
				</div>
				
			</div>

			

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Ajouter utilisateur</h3>
						
					</div>
					<form action="/ajouterUtilisateur/store" method="post">
						@csrf
						@error('email')
								<div class="text-danger">{{ $message }}</div>
						@enderror
						<div class="form-group">
							<label>CIN</label>
							<input type="text"  name="cin" required>
						</div>
						<div class="form-group">
							<label>Nom</label>
							<input type="text"  name="nom" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" required>
						</div>
						<div class="form-group">
							<label >Rôle</label>
							<select  name="role" required>
								<option value="admin">Admin</option>
								<option value="manager">Manager</option>
							</select>
						</div>
						<button type="submit" class="btn">Ajouter</button>
					</form>
				
					
				</div>
			</div>	
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
</x-liens>