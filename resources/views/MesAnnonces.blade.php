<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            height: 200vh;
            background-image: url('/img/test3.png');
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
            position: relative;
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

        .position-Categorie {
            position: absolute;
            top: 480px;
            left: 50%;
            transform: translate(-50%, -50%);
            height:90px;
        }

        .ResultatCategorie {
            position: absolute;
            top: 680px;
            left: 20%;
            transform: translate(-50%, -50%);
            height:90px;
        }

        .fade-in {
            opacity: 0;
            transition: opacity 1s ease;
        }

        .fade-in.fade-in-complete {
            opacity: 1;
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
        .annonces {
                position: absolute;
                top: 105%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 80%;
                max-height: 80vh;
                overflow-y: auto;
                padding: 20px;
            }

            .annonces .card {
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                background-color: #fff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
            }

            .annonces .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .annonces .card-body {
                padding: 20px;
            }

            .annonces .card-title {
                font-weight: bold;
                margin-bottom: 10px;
            }

            .modal-content {
                border-radius: 20px;
                background-color: #fff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .modal-header {
                border-bottom: none;
            }

            .modal-title {
                font-weight: bold;
            }

            .modal-body {
                padding: 20px;
            }

            .user-info {
                display: flex;
                align-items: center;
            }

            .profile-image {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                overflow: hidden;
                margin-right: 10px;
            }

            .profile-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .user-details {
                display: flex;
                flex-direction: column;
            }

            .posted-by {
                color: #888;
                font-size: 14px;
            }

            .user-name {
                font-weight: bold;
            }
        .btn-danger {
            margin-left: 160px;
            margin-top:-55px;
        } 
        .alert-danger {
            margin-top : 780px;
        }


        @media screen and (min-width: 1900px) {
            body {
                height: 180vh;
                background-image: url('/img/test3.png');
                background-size: cover;
                background-repeat: no-repeat;
                overflow-y: scroll;
                overflow-x: hidden;
                transition: background-position 0.5s ease;
            }

            .position-Categorie {
                top: 620px;
                left: 50%;
                transform: translate(-50%, -50%);
                height:90px;
            }

            .annonces {
                position: absolute;
                top: 105%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 80%;
                max-height: 80vh;
                overflow-y: auto;
                padding: 20px;
            }

            .annonces .card {
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                background-color: #fff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
            }

            .annonces .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .annonces .card-body {
                padding: 20px;
            }

            .annonces .card-title {
                font-weight: bold;
                margin-bottom: 10px;
            }

            .modal-content {
                border-radius: 20px;
                background-color: #fff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .modal-header {
                border-bottom: none;
            }

            .modal-title {
                font-weight: bold;
            }

            .modal-body {
                padding: 20px;
            }

            .user-info {
                display: flex;
                align-items: center;
            }

            .profile-image {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                overflow: hidden;
                margin-right: 10px;
            }

            .profile-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .user-details {
                display: flex;
                flex-direction: column;
            }

            .posted-by {
                color: #888;
                font-size: 14px;
            }

            .user-name {
                font-weight: bold;
            }
        }
    </style>
</head>
<body>
@section('content')
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if ($myPosts)
    <div class="annonces">
        <div class="row">
        @foreach($myPosts as $annonce)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $annonce->Titre }}</h5>
                    <p class="card-text description" style="display: none;">{{ $annonce->Description }}</p>
                    @if ($annonce->user)
                    <div class="user-info">
                        <div class="profile-image">
                            @if ($annonce->user->profile_photo_url)
                            <img src="{{ $annonce->user->profile_photo_url }}" alt="Photo de profil de {{ $annonce->user->name }}">
                            @else
                            <img src="placeholder.jpg" alt="Photo de profil par défaut">
                            @endif
                        </div>
                        <div class="user-details">
                            <span class="posted-by">Posté par :</span>
                            <span class="user-name">{{ $annonce->user->name }}</span>
                        </div>
                    </div>
                    @else
                    <p>Posté par : Utilisateur inconnu</p>
                    @endif
                    <button class="btn btn-primary btn-sm popup-trigger" data-id="{{ $annonce->id }}" data-title="{{ $annonce->Titre }}" data-description="{{ $annonce->Description }}">Voir plus</button>
                    <a href="{{ route('annonces.edit', $annonce->id) }}" class="btn btn-warning btn-sm">Modifier</a>

                    <form action="{{ route('annonces.destroy', $annonce->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
        </form>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
    <p>Aucune annonce n'est disponible pour le moment.</p>
@endif

<div class="modal fade" id="annonceModal" tabindex="-1" aria-labelledby="annonceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="annonceModalLabel">Titre de l'annonce:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="annonceDescription"><strong>Description:</strong></p>
                <a id="paymentButton"></a>
            </div>
        </div>
    </div>
</div>
@endsection


<div id="app">
<nav class="navbar navbar-expand-lg navbar-dark text-white">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Share Your Skills</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto"></ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('annonces') }}">Annonces</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('demandes') }}">Demandes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('credits') }}">Crédits</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('avis') }}">Avis</a></li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('Profil') }}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main class="py-4">@yield('content')</main>
</div>

<footer id="footer">© 2024 ShareYouSkills. Tous droits réservés. Conçu avec amour par Bonnet Matthieu, Vincent Chloé.</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    window.addEventListener('load', function() {
        const image = document.querySelector('.position-Categorie');
        image.classList.add('fade-in');
        image.addEventListener('transitionend', function() {
            image.classList.add('fade-in-complete');
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const popupTriggers = document.querySelectorAll('.popup-trigger');
        const modalTitle = document.getElementById('annonceModalLabel');
        const modalDescription = document.getElementById('annonceDescription');
        const paymentButton = document.getElementById('paymentButton');

        popupTriggers.forEach(trigger => {
            trigger.addEventListener('click', function(event) {
                event.preventDefault();
                const id = this.dataset.id;
                const title = this.dataset.title;
                const description = this.dataset.description;
                modalTitle.textContent = "Titre de l'annonce: " + title;
                modalDescription.innerHTML = "<strong>Description:</strong><br>" + description;
                paymentButton.href = `/demandes/${id}/payment`;
                $('#annonceModal').modal('show');
            });
        });
    });
</script>
</body>
</html>
