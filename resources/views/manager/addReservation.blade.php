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
					<h1>Réservations</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="/manageReservations">Réservations en attente</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a  href="/ajouterReservation">Ajouter une réservation</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="/historiqueReservation">Historique</a>
						</li>
					</ul>
				</div>
				
			</div>

			

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Ajouter Réservation</h3>
						
					</div>
					<script>
						document.addEventListener('DOMContentLoaded', function () {
							const voitureSelect = document.getElementById('voiture_id');
							const dateDebut = document.getElementById('date_debut');
							const dateFin = document.getElementById('date_fin');
							const prixJourneeDisplay = document.getElementById('prix_journee');
							const montantHTDisplay = document.getElementById('montant_ht');
							const montantTTCDisplay = document.getElementById('montant_ttc');
						
							// Function to calculate and display the total cost
							function updateTotal() {
								const prixJournee = parseFloat(prixJourneeDisplay.value);
								const startDate = new Date(dateDebut.value);
								const endDate = new Date(dateFin.value);
						
								if (!isNaN(startDate.getTime()) && !isNaN(endDate.getTime()) && !isNaN(prixJournee)) {
									const diffTime = Math.abs(endDate - startDate);
									const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); // convert time difference to days
									const montantHT = diffDays * prixJournee;
									montantHTDisplay.value = montantHT.toFixed(2); // calculate and fix to 2 decimal places
						
									// Calculate TTC
									const tva = 0.20; // 20% VAT
									const montantTTC = montantHT + (montantHT * tva);
									montantTTCDisplay.value = montantTTC.toFixed(2); // calculate total including VAT
								}
							}
						
							// Event listener for when a vehicle is selected
							voitureSelect.addEventListener('change', function() {
								const selectedOption = this.options[this.selectedIndex];
								const prixJournee = selectedOption.getAttribute('data-prix-journee');
								prixJourneeDisplay.value = prixJournee; // display daily price
								updateTotal(); // update total if dates are already selected
							});
						
							// Event listeners for date changes
							dateDebut.addEventListener('change', updateTotal);
							dateFin.addEventListener('change', updateTotal);
						});
						</script>
						
						<form action="/ajouterReservation/store" method="post">
							@csrf
							<div class="form-group">
								<label>Nom client</label>
								<select name="Client_ID" required>
									<option value="">Choisir client</option>
									@foreach($clients as $client)
										<option value="{{ $client->id }}">{{ $client->nom }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>ID Voiture</label>
								<select id="voiture_id" name="Voiture_ID" required>
									<option value="">Choisir voiture</option>
									@foreach($voitures as $voiture)
										<option value="{{ $voiture->id }}" data-prix-journee="{{ $voiture->prixJournee }}">
											{{ $voiture->marque }} - {{ $voiture->modele }}
										</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>Date début</label>
								<input type="date" id="date_debut" name="date_debut" required>
							</div>
							<div class="form-group">
								<label>Date fin</label>
								<input type="date" id="date_fin" name="date_fin" required>
							</div>
							<div class="form-group">
								<label>Prix par Journée</label>
								<input type="text" id="prix_journee" name="prixJournee" required readonly>
							</div>
							<div class="form-group">
								<label>Montant HT</label>
								<input type="number" id="montant_ht" name="montant_ht" required readonly>
							</div>
							<div class="form-group">
								<label>Montant TTC</label>
								<input type="number" id="montant_ttc" name="montant_ttc" required readonly>
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