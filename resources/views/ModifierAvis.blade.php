

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Créer une Annonce</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            height: 100vh;
            background-image: url('/img/t.png');
            background-size: cover;
            background-repeat: no-repeat;
            overflow-y: scroll;
            overflow-x: hidden;
            transition: background-position 0.5s ease;
        }

        .container {
            margin-top: 100px;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
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
    </style>
</head>
<body>
@yield('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier l'avis</div>

                <div class="card-body">
                    <h1> test</h1>
                <form method="POST" action="{{ route('avis.update', ['avis' => $avis->id]) }}">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="contenu_commentaire" class="form-label">Contenu du commentaire</label>
                            <textarea class="form-control @error('contenu_commentaire') is-invalid @enderror" id="contenu_commentaire" name="contenu_commentaire" rows="4">{{ old('contenu_commentaire', $avis->contenu_commentaire) }}</textarea>
                            @error('contenu_commentaire')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="note" class="form-label">Note</label>
                            <input type="number" class="form-control @error('note') is-invalid @enderror" id="note" name="note" value="{{ old('note', $avis->note) }}" min="1" max="10">
                            @error('note')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Modifier l'avis</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap JS et dépendances -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
