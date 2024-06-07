<x-managerhead title="Dashboard">

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="/dashboardManager" class="brand">
            <i class="ri-steering-line"></i>
            <span class="text">Rentcar</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="/dashboardManager">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/manageClients">
                    <i class='bx bxs-group'></i>
                    <span class="text">Gestion de clients</span>
                </a>
            </li>
            <li>
                <a href="/manageVoitures">
                    <i class='bx bxs-car'></i>
                    <span class="text">Gestion de voitures</span>
                </a>
            </li>
            <li class="active">
                <a href="/manageReservations">
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">Gestion de réserevations</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="/profilManager">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Profil</span>
                </a>
            </li>
            <li>
                <a href="/logout" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
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
            <i class='bx bx-menu'></i>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Réservations</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="/manageReservations">Réservations en attente</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="/ajouterReservation">Ajouter une réservation</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="/historiqueReservation">Historique</a>
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
                        <h3>Gestions des réservations</h3>

                        <form method="GET" action="/rechercheReservation">
                            <div class="form-input1">
                                <input type="search" name="query" placeholder="Recherche par Nom Client">
                                <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                            </div>
                        </form>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Voiture</th>
                                <th>Client</th>
                                <th>Date début</th>
                                <th>Date fin</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($reservations as $reservation)
                                <tr>
                                    <td>
                                        @if($reservation->voiture)
                                            <img src="{{ asset('storage/' . $reservation->voiture->photo) }}">
                                        @else
                                            <img src="{{ asset('storage/default.png') }}" alt="No image available">
                                        @endif
                                    </td>
                                    <td>
                                        @if($reservation->voiture)
                                            {{ $reservation->voiture->marque }} - {{ $reservation->voiture->modele }}
                                        @else
                                            Voiture non disponible
                                        @endif
                                    </td>
                                    <td>{{ $reservation->client->nom }}</td>
                                    <td>{{ $reservation->date_debut}}</td>
                                    <td>{{ $reservation->date_fin }}</td>
                                    <td><a href="/detailsReservation/{{ $reservation->id }}"><span class="status process">Voir</span></a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Aucune réservation trouvée.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="custom-pagination">
                        {{ $reservations->links() }}
                    </div>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
</x-managerhead>
