<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/style1.css">
        <title>Rentcar - Login </title>
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
                            <a href="/" class="nav__link">Home</a>
                        </li>

                        <li class="nav__item">
                            <a href="/#about" class="nav__link">About</a>
                        </li>

                        <li class="nav__item">
                            <a href="/#popular" class="nav__link">Popular</a>
                        </li>

                        <li class="nav__item">
                            <a href="/login" class="nav__link active-link">Login</a>
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
                <div class="container1">
                    <div class="box form-box">
                        
                        
                        <header>Se connecter</header>
                        <form action="{{ route('loginD')}}" method="post">
                            @csrf
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="field input">
                                
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{old('email')}}" required>
                                
                            </div>
            
                            <div class="field input">
                                <label for="password">Mot de passe</label>
                                <input type="password" name="password" required>
                            </div>
            
                            <div class="d-grid">
                                
                                <button class="btn btn-primary">Se connecter</button>
                            </div>
                        </form>
                    </div>
                  </div>
                
            </section>

           
           
        </main>

       
    </body>
</html>