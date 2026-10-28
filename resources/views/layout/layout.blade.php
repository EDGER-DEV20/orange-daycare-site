<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="icon" href="{{asset('images/citrus.svg')}}" />

    <!--CSS Link-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <!--Fredoka Google Font Link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Jost:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

    <!--Open Sans Google Font Link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Jost:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!--Bootstrap CSS Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!--AOS Animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <h4><img src="{{asset('images/citrus.svg')}}" /> <span>Orange</span> Daycare</h4>
            </a>
            <button class="navbar-toggler click" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link {{Route::is('index')? 'active' : ''}}" aria-current="page" href="/">Home</a>
                    <a class="nav-link {{Route::is('about')? 'active' : ''}}" href="/about">About</a>
                    <a class="nav-link {{Route::is('/#programs')? 'active' : ''}}" href="/#programs">Programs</a>
                    <a class="nav-link {{request()->routeIs('/#contacts')? 'active' : ''}}" href="{{ route('index').'#contacts' }}">Contacts</a>

                    <!-- <a class="nav-link hero-btn" href="#">Enroll Your Child</a>-->
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="/#contacts" class="nav-btn">
                        Enroll Your Child
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="footer">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col-md-6">
                    <h4><img src="{{asset('images/citrus-w.svg')}}" /> Orange Daycare</h4>
                    <p>We're a daycare school located at the heart of Dodoma city in Tanzania with experience of over 10 years with professional teachers ready to teach and raise your child well.</p>

                    <div class="footer-socials">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <h6>EXPLORE</h6>
                    <ul class="footer-links">
                        <li><i class="bi bi-dash"></i><a href="/">Home</a></li>
                        <li><i class="bi bi-dash"></i><a href="/about">About</a></li>
                        <li><i class="bi bi-dash"></i><a href="/#contacts">Contacts</a></li>
                        <li><i class="bi bi-dash"></i><a href="#">Enroll now</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6>CONTACTS</h6>
                    <div class="footer-contacts">
                        <ul class="footer-contacts-desc">
                            <li><i class="bi bi-telephone"></i> +255 777 888 999</li>
                            <li><i class="bi bi-envelope"></i> info@orangedaycare.ac.tz</li>
                            <li><i class="bi bi-geo-alt"></i> Ilazo Dodoma, Tanzania</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-end">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        &copy Copyright {{ now()->year }}. All Rights Reserved.
                    </div>
                    <div class="col">Made with <i class="bi bi-heart-fill"></i> by <a href="https://instagram.com/edger_e_m" target="_blank" rel="noopener noreferrer">Eddie IT</a></div>
                </div>
            </div>
        </div>
    </div>

    <!--Javascript Link-->
    <script src="{{asset('js/js.js')}}"></script>

    <!--Bootstrap Javascript Link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!--AOS-Animation JS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

</body>

</html>