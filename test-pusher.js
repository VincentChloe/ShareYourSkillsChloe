const Pusher = require('pusher-js');

const pusher = new Pusher('a8bd6ec1a248a4eec300', {
    cluster: 'eu',
    encrypted: true
});

const channel = pusher.subscribe('my-channel');
channel.bind('my-event', function(data) {
    console.log('Received Pusher event:', data);
});