<header class="wrapper bg-soft-primary">
    <nav class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{ route('public.pages.home') }}" class="link-dark fw-bold display-6">
                    {{ config('app.name') }}
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">{{ config('app.name') }}</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Témoignages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Entreprise</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Secteur d'activité</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        @if (auth()->check())
                            <li class="nav-item dropdown d-block d-md-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Compte</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="#">
                                            <i class="uil uil-user"></i>
                                            Profil
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="#"
                                            onclick="logout(event, '{{ route('public.logout') }}', '{{ csrf_token() }}')">
                                            <i class="uil uil-power"></i>
                                            Déconnexion
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item d-block d-md-none d-flex mt-5">
                                <a href="{{ route('public.login') }}"
                                    class="btn btn-sm btn-outline-primary rounded-pill display-6 ms-2">Connexion</a>
                            </li>
                        @endif
                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                            <br /> 00 (123) 456 78 90 <br />
                            <nav class="nav social social-white mt-4">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                    <li class="nav-item d-none d-md-block">
                        <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Partager votre
                            expérience</a>
                    </li>
                    @if (auth()->check())
                        <li class="nav-item d-none d-md-block dropdown">
                            <img class="avatar w-10 dropdown-toggle" data-bs-toggle="dropdown"
                                src="{{ 'https://dummyimage.com/50x50/ced4da/6c757d.jpg' }}" alt="Avatar" />
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="dropdown-item" href="#">
                                        <i class="uil uil-user"></i>
                                        Profil
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="#">
                                        <i class="uil uil-user"></i>
                                        Notifications
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="#"
                                        onclick="logout(event, '{{ route('public.logout') }}', '{{ csrf_token() }}')">
                                        <i class="uil uil-power"></i>
                                        Déconnexion
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item d-none d-md-block">
                            <a href="{{ route('public.login') }}"
                                class="btn btn-sm btn-outline-primary rounded-pill">Connexion</a>
                        </li>
                    @endif
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
    <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
            <form class="search-form w-100">
                <input id="search-form" type="text" class="form-control"
                    placeholder="Type keyword and hit enter">
            </form>
            <!-- /.search-form -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.offcanvas -->
</header>
