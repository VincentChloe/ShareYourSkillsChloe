<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
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
        .chat-container {
            max-width: 800px;
            margin: 50px auto;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .chat-header {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
        #messages {
            list-style-type: none;
            padding: 0;
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        #messages li {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            font-size: 0.9rem;
        }
        #messages li.sender {
            background-color: #e9f7fe;
            text-align: right;
            justify-content: flex-end;
        }
        #messages li.receiver {
            background-color: #f1f1f1;
            text-align: left;
            justify-content: flex-start;
        }
        .message-content {
            max-width: 70%;
        }
        .profile-photo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .profile-photo.sender {
            margin-left: 10px;
            margin-right: 0;
        }
        #new-message {
            margin-right: 10px;
            flex: 1;
        }
        .message-input {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            Chat
        </div>
        <ul id="messages" class="list-unstyled"></ul>
        <div class="message-input">
            <input type="text" id="new-message" class="form-control" placeholder="écrit ton messsage ici !">
            <button id="send-button" class="btn btn-primary">Envoyer</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            let demandeId = {{ $demandeId }};
            let receiverId = {{ $receiverId }};
            let messagesEndpoint = `/messages/${demandeId}`;
            let sendEndpoint = `/messages/${demandeId}`;

            function loadMessages() {
                $.get(messagesEndpoint, function(data) {
                    $('#messages').empty();
                    data.forEach(function(message) {
                        let messageClass = message.sender_id === {{ Auth::id() }} ? 'sender' : 'receiver';
                        let profilePhotoUrl = message.sender.profile_photo_url;
                        let messageHtml = `
                            <li class="${messageClass}">
                                <img src="${profilePhotoUrl}" alt="Profile Photo" class="profile-photo ${messageClass}">
                                <div class="message-content"><strong>${message.sender.name}</strong>: ${message.content}</div>
                            </li>`;
                        $('#messages').append(messageHtml);
                    });
                    $('#messages').scrollTop($('#messages')[0].scrollHeight); // Scroll to the bottom
                });
            }

            $('#send-button').click(function() {
                let content = $('#new-message').val();
                if (content.trim() === '') {
                    return;
                }
                $.post(sendEndpoint, {
                    receiver_id: receiverId,
                    content: content,
                    _token: '{{ csrf_token() }}'
                }, function(data) {
                    $('#new-message').val('');
                    loadMessages();
                });
            });

            loadMessages();

            // Reload messages every 1 second
            setInterval(loadMessages, 1000);
        });
    </script>
</body>
</html>
