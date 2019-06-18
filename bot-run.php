<?php

include __DIR__.'/vendor/autoload.php';
include __DIR__.'/config/config.php';

$discord = new \Discord\Discord([
    'token' => _TOKEN,
]);

$discord->on('ready', function ($discord) {
    echo "Bot is ready.", PHP_EOL;
  
    // Listen for events here
    $discord->on('message', function ($message) {
        echo "Recieved a message from {$message->author->username}: {$message->content}", PHP_EOL;
    });
});

$discord->run();