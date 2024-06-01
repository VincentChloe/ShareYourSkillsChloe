<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regarder une publicité</title>
</head>
<body>
    <div class="popup-overlay" id="adPopup" style="display:none; justify-content: center; align-items: center;">
        <div class="popup-content">
            <video id="advertisement" controls>
                <source src="{{ asset('videos/PUB.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <script>
        document.getElementById('advertisement').addEventListener('ended', function() {
            fetch('{{ route('credits.watch-ad-credit') }}', {
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
                    window.location.reload(); // Recharger la page pour mettre à jour le nombre de crédits
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
