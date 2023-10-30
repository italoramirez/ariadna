<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ariadna</title>


    <!-- Plugin CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@uvarov.frontend/vanilla-calendar/build/vanilla-calendar.min.css"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @vite('resources/css/app.css')
    @yield('styles')
</head>
<body>
<main role="main">

    <header>
        <!-- Navbar con logo y navlinks -->
        <nav>
            <a data-seo="nav-logo" ref="#">
                <img src="{{ Vite::asset('resources/images/brand-travel.svg')  }}" alt="">
            </a>
            <div class="menu-section-container">
                <div class="nav-bar-container">
                    <ul class="navbar-menu">
                        @auth
                            <li><a data-seo="nav-link" href="#login">{{ request()->user->name  }} - Logout</a></li>
                        @endauth
                        @guest
                            <li><a data-seo="nav-link" href="/login">Login</a></li>
                        @endguest
                        <li><a data-seo="nav-link" href="#nuestro-concensionariodejanos-tus-datos">About us</a></li>
                        <li><a data-seo="nav-link" href="#promocion">Our services</a></li>
                        <li><a data-seo="nav-link" href="#nuestro-concensionario">Success Cases</a></li>
                        <li><a data-seo="nav-link" href="#faq">Partners</a></li>
                        <li><a data-seo="nav-link" href="#terminos-condiciones">Certifications</a></li>
                        <li><a data-seo="nav-link" href="#terminos-condiciones">Our Team </a></li>
                        <li><a data-seo="nav-link" href="#terminos-condiciones">Contact Us</a></li>
                    </ul>
                    <form action="" class="form-multilenguaje">
                        <select name="" id="">
                            <option value="1">En</option>
                            <option value="2">Es</option>
                        </select>
                    </form>
                </div>
                <div class="navbar-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>


        </nav>
    </header>
</main>
@yield('content')
@yield('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@vite('resources/js/page.js')
@vite('resources/js/app.js')
</body>
</html>
