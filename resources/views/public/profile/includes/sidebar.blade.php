<aside class="col-lg-4 sidebar mt-8 mt-lg-6">
    <ul class="nav nav-tabs nav-pills flex-column">
        <!-- Gestion du Profil -->
        <li class="nav-item mb-3">
            <a @class([
                'nav-link',
                'active' => Route::currentRouteNamed('public.profile.index'),
            ]) href="{{ route('public.profile.index') }}">
                <i class="uil uil-user pe-1"></i>
                <span>Gestion du Profil</span>
            </a>
        </li>
        {{-- <li class="nav-item mb-3">
            <a class="nav-link" href="#">
                <i class="uil uil-setting pe-1"></i>
                <span>Configurer les préférences</span>
            </a>
        </li> --}}

        <!-- Gestion des Témoignages -->
        <li class="nav-item mb-3">
            <a @class([
                'nav-link',
                'active' => Route::currentRouteNamed('public.profile.testimonials'),
            ]) href="{{ route('public.profile.testimonials') }}">
                <i class="uil uil-comment-alt pe-1"></i>
                <span>Gestion des Témoignages</span>
            </a>
        </li>

        <!-- Support et Assistance -->
        <li class="nav-item mb-3">
            <a class="nav-link" href="#">
                <i class="uil uil-question-circle pe-1"></i>
                <span>Contacter le support</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a class="nav-link" href="#">
                <i class="uil uil-book-open pe-1"></i>
                <span>Consulter la FAQ</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a class="nav-link" href="#">
                <i class="uil uil-signout pe-1"></i>
                <span>Déconnexion</span>
            </a>
        </li>
    </ul>
</aside>
