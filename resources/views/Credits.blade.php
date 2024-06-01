<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            height: 170vh;
            background-image: url('/img/BackgroundCredit.png');
            background-size: cover;
            background-repeat: no-repeat;
            overflow-y: scroll;
            overflow-x: hidden;
            transition: background-position 0.5s ease;
        }

        .credits-info {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .credits-box {
            background: rgba(208, 205, 213, 0.8);
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            box-shadow: 0px 4px 15px rgba(171, 135, 241, 0.8);
            margin-top: 700px;
            margin-left:25%;
        }

        .credits-box h1 {
            font-size: 3em;
            color: #333;
            margin: 0;
        }

        .credits-box p {
            font-size: 1.2em;
            color: #666;
            margin-top: 10px;
        }

        .position-notifications {
            position: absolute;
            top: 650px;
            left: 53%;
            transform: translate(-50%, -50%);
            height: 90px;
        }

        .btn-get-credits {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 350px;
            margin-left: 240px;
        }

        .btn-get-credits:hover {
            background-color: #0056b3;
        }

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            display: none;
        }

        .popup-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }

        .popup-content h2 {
            margin-bottom: 20px;
        }

        .popup-content button {
            margin: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }

        .btn-watch-ad {
            background-color: #28a745;
            color: white;
        }

        .btn-warning {
            background-color: #ffc107;
            color: white;
        }

        .close-popup {
            position: absolute;
            top: 310px;
            right: 500px;
            background: none;
            border: none;
            font-size: 1.5em;
            cursor: pointer;
            color: #333;
            z-index: 9999;
        }

        .close-popup::after {
            content: '✖';
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

        .fade-in {
            opacity: 0;
            transition: opacity 1s ease;
        }

        .fade-in.fade-in-complete {
            opacity: 1;
        }

        @media screen and (min-width: 1900px) {
            body {
                height: 180vh;
            }

            .position-notifications {
                top: 730px;
                left: 50%;
            }
        

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .navbar {
            background-color: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }

        .navbar-collapse {
            display: none !important;
        }
        .close-popup {
            position: absolute;
            top: 375px;
            right: 735px;
            background: none;
            border: none;
            font-size: 1.5em;
            cursor: pointer;
            color: #333;
            z-index: 9999;
        }

        .close-popup::after {
            content: '✖';
        }

        .btn-get-credits {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 380px;
            margin-left: 240px;
        }
    }
    </style>
</head>
<body>

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
            <ul class="navbar-nav me-auto"></ul>
            <ul class="navbar-nav ms-auto">
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
<section class="credits-info">
    <div class="credits-box">
        <h1>Vous avez {{ $nbCredits }} crédits</h1>
        <p>Merci d'utiliser Share Your Skills</p>
    </div>
    <button class="btn-get-credits" onclick="showPopup()">Avoir des crédits</button>
</section>

<div class="popup-overlay" id="popupOverlay">
    <div class="popup-content">
        <button class="close-popup" onclick="hidePopup()"></button>
        <h2>Obtenir des crédits</h2>
        <button class="btn-watch-ad" onclick="watchAd()">Regarder une pub</button>
        <a href="{{ route('avis.create') }}" class="btn btn-warning">Ajouter un avis</a>
                            @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    </div>
</div>

<div class="popup-overlay" id="adPopup" style="display:none; justify-content: center; align-items: center;">
    <div class="popup-content" style="max-width: 800px;"> <!-- Réduire la taille maximale -->
        <video id="advertisement" controls style="width: 100%;"> <!-- Assurez-vous que la vidéo occupe toute la largeur de la popup -->
            <source src="{{ asset('videos/PUB.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<footer id="footer">© 2024 ShareYourSkills. Tous droits réservés. Conçu avec amour par Bonnet Matthieu, Vincent Chloé.</footer>
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

    function showPopup() {
        document.getElementById('popupOverlay').style.display = 'flex';
    }

    function hidePopup() {
        document.getElementById('popupOverlay').style.display = 'none';
    }

    function watchAd() {
        document.getElementById('popupOverlay').style.display = 'none';
        document.getElementById('adPopup').style.display = 'flex';
        document.getElementById('advertisement').play();
    }

    //function redirectToAvisForm() {
     //   window.location.href = "{{ route('avis.create') }}";
    //}

    document.getElementById('advertisement').addEventListener('ended', function() {
        fetch('{{ route('credits.watch-ad') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message);
                hideAdPopup(); // Fermer la popup de la publicité
                window.location.reload(); // Recharger la page pour mettre à jour le nombre de crédits
            } else {
                alert(data.message); // Afficher le message d'erreur
                hideAdPopup(); // Fermer la popup de la publicité
            }
        })
        .catch(error => console.error('Error:', error));
    });

    function hideAdPopup() {
        document.getElementById('adPopup').style.display = 'none';
    }
</script>
</body>
</html>