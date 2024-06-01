<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
       body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            height: 170vh;
            background-image: url('/img/BackgroundNotificationss.png');
            background-size: cover;
            background-repeat: no-repeat;
            overflow-y: scroll;
            overflow-x: hidden;
            transition: background-position 0.5s ease;
        }

        section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 5em;
            text-shadow: 3px 4px 7px rgba(81, 67, 21, 0.8);
            text-align: center;
            background-image: url('/img/');
            background-position: top, bottom;
            background-size: cover;
            background-repeat: no-repeat;
            overflow: hidden;
            position: relative; /* assure que la position absolue de l'image est relative à cette section */
        }
       

        #footer {
            color: #fff;
            text-align: center;
            position: fixed;
            bottom: -100px;
            left: 0;
            width: 100%;
            background-color: #333;
            padding: 10px 0;
            font-size: 0.8em;
            transition: bottom 0.3s;
        }

        footer p {
            margin: 0;
        }
        /* Classe pour ajuster la position de l'image */
        .position-notifications {
            position: absolute;
            top: 650px; /* ajustez la position verticale */
            left: 53%; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:90px
        }

         .position-text {
            position: absolute;
            top: 1400px; /* ajustez la position verticale */
            left: 500px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:500px
        }
        
     .position-logo {
            position: absolute;
            top: 1400px; /* ajustez la position verticale */
            left: 1100px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:500px
        }
     

        
        nav ul {
    list-style: none; /* Supprimer les puces de la liste */
    margin: 0;
    padding: 0;
}

nav li {
    display: inline; /* Afficher les éléments de la liste en ligne plutôt qu'en bloc */
    margin-right: 20px; /* Espacement entre les éléments de la liste */
}

nav a {
    text-decoration: none; /* Supprimer le soulignement des liens */
    color: #fff;
    font-weight: bold;
}
.navbar {
    background-color: transparent !important; /* Couleur de fond transparente */
    border: none !important; /* Supprimer la bordure */
    box-shadow: none !important; /* Supprimer l'ombre */
}

.navbar-collapse {
    display: none !important; /* Supprimer le contenu de la barre de navigation */
}

.animation-text {
    font-size: 24px;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    border-right: 2px solid #333;
    position: absolute;
    top: 700px; /* Ajustez cette valeur pour déplacer le texte vers le bas */
    left: 45%;
    transform: translate(-50%, -50%);
    color: black;
}


.number-animation {
    font-weight: bold;
}

        .fade-in {
    opacity: 0; /* Commencez avec une opacité de 0 */
    transition: opacity 1s ease; /* Ajoutez une transition pour l'opacité */
}
.fade-in.fade-in-complete {
    opacity: 1; /* Gardez une opacité de 1 après l'animation */
}


@media screen and (min-width: 1900px) {
    body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            height: 170vh;
            background-image: url('/img/BackgroundNotificationsss.png');
            background-size: cover;
            background-repeat: no-repeat;
            overflow-y: scroll;
            overflow-x: hidden;
            transition: background-position 0.5s ease;
        }

    
        


.position-notifications {
            position: absolute;
            top: 730px; /* ajustez la position verticale */
            left: 50%; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:90px

        }
        
    }

    </style>
</head>
<body>
<img src="/img/LogoNotifications.png" alt="Description de l'image" class="position-notifications ">
<div id="app">
<nav class="navbar navbar-expand-lg navbar-dark text-white">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Share Your Skills
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('annonces') }}">Annonces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('demandes') }}">Demandes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('credits') }}">Crédits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('avis') }}">Avis</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.show') }}">
                                {{ __('Profil') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Déconnexion') }}
                            </a>
                            

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<main class="py-4">
    @yield('content')
</main>
</div>
<section>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Inclusion de Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>


<footer id="footer">© 2024 ShareYouSkills. Tous droits réservés. Conçu avec amour par Bonnet Matthieu, Vincent Chloé.</footer>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener('scroll', function() {
            var footer = document.getElementById('footer');
            var yOffset = window.pageYOffset;
            var windowHeight = window.innerHeight;
            var documentHeight = document.body.scrollHeight;

            if (yOffset + windowHeight >= documentHeight) {
                footer.style.bottom = '0px';
            } else {
                footer.style.bottom = '-100px';
            }
        });
    });
</script>

<script>
 window.addEventListener('load', function() {
    const image = document.querySelector('.position-notifications');
    image.classList.add('fade-in');

    // Ajoutez un écouteur d'événements pour détecter la fin de l'animation de fondu
    image.addEventListener('transitionend', function() {
        image.classList.add('fade-in-complete');
    });
});
 </script>

</html>
