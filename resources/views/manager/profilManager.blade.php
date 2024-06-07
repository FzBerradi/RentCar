<x-managerhead>
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
                <li  class="active">
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
                        <h1>Mon profil <a href="{{route('managerM.edit',$id)}}"><i class='bx bxs-edit-alt' ></i></a></h1>
                    </div>
                    
                </div>
    
                <div class="table-data">
                    <div class="todo">
                        <div class="row my-2">
                            @include('partials.flashbag')
                
                        </div>
                        <ul class="todo-list">
                            <li class="completed">
                                <p>CIN : {{auth()->user()->cin}}</p>
                                <i class='bx bx-dots-vertical-rounded' ></i>
                            </li>
                            <li class="completed">
                                <p>Nom : {{auth()->user()->nom}}</p>
                                <i class='bx bx-dots-vertical-rounded' ></i>
                            </li>
                            <li class="completed">
                                <p>Email : {{auth()->user()->email}}</p>
                                <i class='bx bx-dots-vertical-rounded' ></i>
                            </li>
                            
                        </ul>
                        
                        
                    </div>
                </div>
                    
            </main>
            <!-- MAIN -->
        </section>
        
</x-managerhead>