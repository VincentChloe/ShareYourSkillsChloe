<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Paiement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .payment-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-size: 1.5em;
            margin-bottom: 20px;
        }
        .card-text {
            font-size: 1.2em;
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
        }
        .payment-icons {
            margin-top: 20px;
            text-align: center;
        }
        .payment-icons img {
            width: 50px;
            margin: 0 10px;
        }
        .info-container {
            margin-top: 20px;
        }
        .info-container h5 {
            font-size: 1.1em;
            margin-bottom: 10px;
        }
        .info-container p {
            margin: 0;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="payment-container">
        <div class="card">
            <div class="card-header">
                <h4>Confirmation de Paiement</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">Demander le service : {{ $annonce->Titre }}</h5>
                <p class="card-text">Prix : 1 crédit</p>
                <p class="card-text">Voulez-vous confirmer ce paiement et envoyer votre demande de service ?</p>

                <div class="info-container">
                    <h5>Informations sur le service</h5>
                    <p><strong>Titre :</strong> {{ $annonce->Titre }}</p>
                    <p><strong>Description :</strong> {{ $annonce->Description }}</p>
                    <p><strong>Prix :</strong> 1 crédit</p>
                </div>

                <form action="{{ route('demandes.confirm', $annonce->id) }}" method="POST">
                    @csrf
                    <div class="btn-container">
                        <button type="submit" class="btn btn-success">Confirmer le paiement</button>
                        <a href="{{ route('annonces') }}" class="btn btn-secondary">Annuler</a>
                    </div>
                </form>

                <div class="payment-icons">
                <img src="/img/Coins.png" alt="Description de l'image" class="Coins">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal">
                    <img src="/img/Coins.png" alt="Description de l'image" class="Coins">                    
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
