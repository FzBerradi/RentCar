<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Rentcar</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="/" class="nav__logo">
                    <i class="ri-steering-line"></i>
                    Rentcar
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="/" class="nav__link active-link">Home</a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>

                        <li class="nav__item">
                            <a href="#popular" class="nav__link">Popular</a>
                        </li>

                        <li class="nav__item">
                            <a href="/login" class="nav__link">Login</a>
                        </li>
                    </ul>

                    
                </div>

                
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="shape shape__big"></div>
                <div class="shape shape__small"></div>

                <div class="home__container container grid">
                    
                    
                        <div class="text1">
                            <h1><span> Vous cherchez </span>  <br><span style="color: hsl(210, 34%, 47%);">à louer une<br>voiture ?</span></h1>
                            <p>Avec Rentcar - Louez l'excellence, <br>conduisez vos rêves.</p>
                            <div class="app-stores">
                                
                                <img src="assets/img/play.png"  alt="">
                            </div>
                            
                        </div>
                    
                    <!-- Image section -->
                    <div class="home__image">
                        <img src="assets/img/banner-img2.png" alt="Rental Car">
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__group">
                        <img src="assets/img/about.png" alt="" class="about__img">

                        <div class="about__card">
                            <h3 class="about__card-title">500+</h3>
                            <p class="about__card-description">
                                Clients ont fait  confiance à notre service.
                            </p>
                        </div>
                    </div>

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            À Votre Service, <br>Kilomètre Après Kilomètre
                        </h2>

                        <p class="about__description">
                            Rentcar, votre partenaire de
                            confiance pour la location de voiture. 
                            Nous vous proposons une large gamme de 
                            voitures fiables et économiques adaptées
                            à tous vos besoins. 
                        </p>

                        <a href="#" class="button">Découvrir plus</a>
                    </div>
                </div>
            </section>

            <!--==================== POPULAR ====================-->
            <section class="popular section" id="popular">
                <h2 class="section__title">
                    Top Choix des Clients
                </h2>

                <div class="popular__container container swiper">
                    <div class="swiper-wrapper">
                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>

                            <h1 class="popular__title">Honda</h1>
                            <h3 class="popular__subtitle">Fit</h3>

                            <img src="assets/img/popular1.png" alt="" class="popular__img">

                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-3-line"></i> 8.5 Sec
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-funds-box-line"></i> 120 Km/h
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i> Essence
                                </div>
                            </div>

                            <h3 class="popular__price">250 dh/jour</h3>

                            
                        </article>

                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                            
                            <h1 class="popular__title">Toyota</h1>
                            <h3 class="popular__subtitle">Yaris</h3>

                            <img src="assets/img/featured1.png" alt="" class="popular__img">

                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-3-line"></i> 3.7 Sec
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-funds-box-line"></i> 125 Km/h
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i> Essence
                                </div>
                            </div>

                            <h3 class="popular__price">200 dh/jour</h3>

                            
                        </article>

                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                            
                            <h1 class="popular__title">Ford</h1>
                            <h3 class="popular__subtitle">Fiesta</h3>

                            <img src="assets/img/featured2.png" alt="" class="popular__img">

                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-3-line"></i> 3.7 Sec
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-funds-box-line"></i> 135 Km/h
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i> Essence
                                </div>
                            </div>

                            <h3 class="popular__price">270 dh/jour</h3>

                            
                        </article>

                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                            
                            <h1 class="popular__title">Chevrolet</h1>
                            <h3 class="popular__subtitle">Sonic</h3>

                            <img src="assets/img/featured3.png" alt="" class="popular__img">

                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-3-line"></i> 4.2 Sec
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-funds-box-line"></i> 165 Km/h
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i> Essence
                                </div>
                            </div>

                            <h3 class="popular__price">450 dh/jour</h3>

                            
                        </article>

                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                            
                            <h1 class="popular__title">Hyundai</h1>
                            <h3 class="popular__subtitle">Accent</h3>

                            <img src="assets/img/popular5.png" alt="" class="popular__img">

                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-3-line"></i> 3.7 Sec
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-funds-box-line"></i> 140 Km/h
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i> Essence
                                </div>
                            </div>

                            <h3 class="popular__price">320 dh/jour</h3>

                            
                        </article>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!--==================== FEATURES ====================-->
            

            <!--==================== FEATURED ====================-->
           
            <div class="featured__content grid">
            </div>

            <!--==================== OFFER ====================-->
            <section class="offer section">
                <div class="offer__container container grid">
                    <img src="assets/img/offer-bg.png" alt="" class="offer__bg">

                    <div class="offer__data">
                        <h2 class="section__title offer__title">
                            Voulez-vous recevoir <br> de spécialie offres?
                        </h2>

                        <p class="offer__description">
                            Soyez le premier à recevoir toutes les
                            informations sur nos 
                            nouveaux véhicules par email en vous
                            abonnant à notre liste de diffusion.
                        </p>

                        <a href="#" class="button">
                            S'inscrire
                        </a>
                    </div>

                    <img src="assets/img/popular3.png" alt="" class="offer__img">
                </div>
            </section>

            
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="shape shape__big"></div>
            <div class="shape shape__small"></div>

            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <i class="ri-steering-line"></i> Rentcar
                    </a>
                    <p class="footer__description">
                        Découvrez notre sélection de<br> 
                        voitures idéales pour une<br> 
                        conduite économique.
                    </p>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        Rentcar
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">About</a>    
                        </li>
                        <li>
                            <a href="#" class="footer__link">Cars</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">History</a>
                        </li>
                        
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        Information
                    </h3>

                    <ul class="footer__links">
                        
                        <li>
                            <a href="#" class="footer__link">Contact us</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        Follow us
                    </h3>

                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </ul>
                </div>
            </div>

            <span class="footer__copy">
                &#169; Rentcar. Tous droits réservés
            </span>
        </footer>


        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MIXITUP JS ===============-->
        <script src="assets/js/mixitup.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>