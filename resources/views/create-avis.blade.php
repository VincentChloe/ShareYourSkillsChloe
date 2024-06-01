<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
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
<div class="container">
    <div class="form-container">
        <form action="{{ route('avis.store') }}" method="POST">
            @csrf
            <div class="form-group">
            <label for="contenu_commentaire">Quelle note donnes-tu à notre site ? Sois gentil Stp &#x1F60A;</label>

                <textarea class="form-control" name="contenu_commentaire" id="contenu_commentaire" cols="30" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="note">Note (entre 1 et 10):</label>
                <input type="number" class="form-control" name="note" id="note" min="1" max="10" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter l'avis</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
