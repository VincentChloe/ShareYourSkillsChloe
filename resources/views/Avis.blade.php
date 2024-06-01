



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
            height: 160vh;
            background-image: url('/img/Backgroundaviss.png');
            background-size: cover;
            background-repeat: no-repeat;
            overflow-y: scroll;
            overflow-x: hidden;
            transition: background-position 0.5s ease;
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
        .position-Avis {
            position: absolute;
            top: 720px; /* ajustez la position verticale */
            left: 50%; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:90px

        } .position-text {
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
    top: 890px; /* Ajustez cette valeur pour déplacer le texte vers le bas */
    left: 50%;
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
.bubble-container {
    /* Supprimez les marges actuelles */
    margin-top: 0;
    margin-bottom: 0;
    /* Ajoutez ces propriétés pour positionner le .bubble-container en bas de la page */
    position: fixed;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    z-index: 999; /* Assurez-vous que le .bubble-container est au-dessus des autres éléments */
}


.bubble {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 10px;
    margin: 10px 0;
    max-width: 80%; /* Limiter la largeur */
}

.bubble strong {
    color: #555;
}

.comment-label {
    margin-bottom: 5px;
}

.btn-primary {
    margin-top: 20px; /* Réduire l'espace au-dessus du bouton */
}
.bubble-container {
    margin-top: 50px; /* Réduire la marge en haut */
    margin-bottom: 320px; /* Ajouter une marge en bas */
    display: flex; /* Utiliser Flexbox */
    flex-direction: column; /* Aligner les éléments verticalement */
    align-items: center; /* Centrer les éléments horizontalement */
}

.bubble {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 10px;
    margin: 10px 0;
    max-width: 80%; /* Limiter la largeur */
}

.bubble strong {
    color: #555;
}

.comment-label {
    margin-bottom: 5px;
}

.btn-primary {
    margin-top: 20px; /* Réduire l'espace au-dessus du bouton */
}

.avis {
                position: absolute;
                top: 110%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 80%;
                max-height: 80vh;
                overflow-y: auto;
                padding: 20px;
            }

            .avis .card {
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                background-color: #fff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
            }

            .avis .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .avis .card-body {
                padding: 20px;
            }

            .avis .card-title {
                font-weight: bold;
                margin-bottom: 10px;
            }
            .btn-danger {
        margin-left: 90px;
        margin-top: -65px;
    }

@media screen and (min-width: 1900px) {
    body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            height: 170vh;
            background-image: url('/img/Backgroundaviss.png');
            background-size: cover;
            background-repeat: no-repeat;
            overflow-y: scroll;
            overflow-x: hidden;
            transition: background-position 0.5s ease;
        }
       
 
        .position-text {
            position: absolute;
            top: 1600px; /* ajustez la position verticale */
            left: 500px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:500px
        }
        .position-logo {
            position: absolute;
            top: 1600px; /* ajustez la position verticale */
            left: 1400px; /* ajustez la position horizontale */
            transform: translate(-50%, -50%); /* centrage de l'image */
            height:500px
        }
        .animation-text {
    font-size: 24px;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    border-right: 2px solid #333;
    position: absolute;
    top: 115%; /* Ajustez cette valeur pour déplacer le texte vers le bas */
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
}
.bubble-container {
    margin-top: 50px; /* Réduire la marge en haut */
    margin-bottom: 50px; /* Ajouter une marge en bas */
    display: flex; /* Utiliser Flexbox */
    flex-direction: column; /* Aligner les éléments verticalement */
    align-items: center; /* Centrer les éléments horizontalement */
}

.bubble {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 10px;
    margin: 10px 0;
    max-width: 80%; /* Limiter la largeur */
}

.bubble strong {
    color: #555;
}

.comment-label {
    margin-bottom: 5px;
}

.btn-primary {
    margin-top: 20px; /* Réduire l'espace au-dessus du bouton */
}

    
.btn-danger {
        margin-left: 0px;
        margin-top: 0px;
    }

    .custom-tooltip {
        position: relative;
        display: inline-block;
    }

    .custom-tooltip .tooltiptext {
        visibility: hidden;
        width: 300px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        top: 60%; /* Position the tooltip below the text */
        left: 28%;
        margin-left: -100px; /* Use half of the width to center the tooltip */
        opacity: 0;
        transition: opacity 0.3s;
    }

    .custom-tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
    .avis {
                position: absolute;
                top: 115%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 80%;
                max-height: 80vh;
                overflow-y: auto;
                padding: 20px;
            }

            .avis .card {
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                background-color: #fff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
            }

            .avis .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .avis .card-body {
                padding: 20px;
            }

            .avis .card-title {
                font-weight: bold;
                margin-bottom: 10px;
            }
}
</style>


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
    const image = document.querySelector('.position-Avis');
    image.classList.add('fade-in');

    // Ajoutez un écouteur d'événements pour détecter la fin de l'animation de fondu
    image.addEventListener('transitionend', function() {
        image.classList.add('fade-in-complete');
    });
});
 </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Information Importante !</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenu de votre fenêtre modale -->
                <p>Bienvenue dans la section des avis. Vous êtes prié(e) de rester courtois(e) et correct(e) dans vos commentaires</p>
                <p>Nous vous remercions de votre compréhension.</p>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">j'accepte</button>
                <!-- Autres boutons si nécessaire -->
            </div>
        </div>
    </div>
</div>
<div class="avis">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Avis</div>

                <div class="card-body">
                @foreach ($avis as $avisItem)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $avisItem->utilisateur->name }} - Note: {{ $avisItem->note }}/10</h5>
            <p class="card-text">{{ $avisItem->contenu_commentaire }}</p>
            <p class="card-text"><small class="text-muted">Posté le : {{ date('d/m/Y à H\hi', strtotime($avisItem->created_at)) }}</small></p>
            @if(Auth::check() && Auth::user()->id === $avisItem->id_utilisateur)
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('avis.edit', $avisItem) }}" class="btn btn-warning">Modifier</a>
                        @if(\Carbon\Carbon::now()->diffInDays($avisItem->created_at) >= 1)
                            <form action="{{ route('avis.destroy', $avisItem) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet avis?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        @else
                            <div class="custom-tooltip">
                                <button type="button" class="btn btn-danger" disabled>Supprimer</button>
                                <span class="tooltiptext">Vous pourrez supprimer cet avis demain.</span>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
@endforeach


                    {{ $avis->links('pagination::bootstrap-4') }}

                    <!-- Ajouter un bouton pour rediriger vers la page de création d'avis -->
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <a href="{{ route('avis.create') }}" class="btn btn-primary">Ajouter un avis</a>
                            @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
 <script>
    
document.addEventListener("DOMContentLoaded", function() {
    // Vérifiez si le cookie a été défini
    if (document.cookie.indexOf("avisModalDisplayed=true") === -1) {
        // Si le cookie n'existe pas, affichez la fenêtre modale
        var myModal = new bootstrap.Modal(document.getElementById('myModal'));
        myModal.show();

        // Définissez le cookie pour indiquer que la fenêtre modale a été affichée
        var expirationDate = new Date();
        expirationDate.setTime(expirationDate.getTime() + (5 * 60 * 1000)); // 5 minutes
        document.cookie = "avisModalDisplayed=true; expires=" + expirationDate.toUTCString();
    } else {
        // Si le cookie existe, vérifiez le temps écoulé depuis la dernière fois que la fenêtre modale a été affichée
        var lastModalTime = new Date(document.cookie.replace(/(?:(?:^|.*;\s*)avisModalDisplayed\s*=\s*([^;]*).*$)|^.*$/, "$1"));

        // Si la période de 5 minutes n'est pas écoulée, ne montrez pas la fenêtre modale
        if (new Date() - lastModalTime < (5 * 60 * 1000)) {
            return;
        }
    }
});
</script>



</html>
