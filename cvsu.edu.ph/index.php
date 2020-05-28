<?php

require_once './vendor/autoload.php';
require_once './RateConversation.php';

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Middleware\ApiAi;

DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

$botman = BotManFactory::create([]);

$dialogFlow = ApiAi::create("2c655446a5a44ee580d0d6fb0400099a")->listenForAction();

$botman->middleware->received($dialogFlow);

$botman->hears('Thank you', function($bot) {
    $bot->startConversation(new RateConversation());
});

$botman->hears('ask-course', function($botman) {
    $extras = $botman->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];

    $botman->reply($apiReply);
})->middleware($dialogFlow);

$botman->hears('quiz', function($botman) {
    $extras = $botman->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];

    $botman->reply($apiReply);
})->middleware($dialogFlow);

$botman->hears('Reg-Form', function(BotMan $bot) {
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    
    $bot->reply($apiReply);
})->middleware($dialogFlow);

$botman->hears('Reg-Form.Reg-Form-yes', function(BotMan $bot) {
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    
    $bot->reply($apiReply);
})->middleware($dialogFlow);

$botman->hears('ask-support', function(BotMan $bot) {
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    
    $bot->reply($apiReply);
})->middleware($dialogFlow);

$botman->hears('get-question', function(BotMan $bot) {
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    
    $bot->reply($apiReply);
})->middleware($dialogFlow);

$botman->hears('confirm-question-yes', function(BotMan $bot) {
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    
    $bot->reply($apiReply);
})->middleware($dialogFlow);

$botman->hears('confirm-question-no', function(BotMan $bot) {
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    
    $bot->reply($apiReply);
})->middleware($dialogFlow);

$botman->hears('email', function(BotMan $bot) {
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    
    $bot->reply($apiReply);
})->middleware($dialogFlow);

$botman->hears('input.welcome', function(BotMan $bot) {
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    
    $bot->reply($apiReply);
})->middleware($dialogFlow);

$botman->hears('ask-gaby', function(BotMan $bot) {
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    
    $bot->reply($apiReply);
})->middleware($dialogFlow);

$botman->hears('input.unknown', function(BotMan $bot) {
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    
    $bot->reply($apiReply);
})->middleware($dialogFlow);

$botman->hears('single', function($botman) {
    $extras = $botman->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];

    $botman->reply($apiReply);
})->middleware($dialogFlow);

//$botman->hears('Hello I am {name}', function($botman, $name) {
//    $botman->reply('Hi ' . $name . '!');
//});

//$botman->fallback(function($bot) {
//    $bot->reply('Sorry, I did not understand these commands.');
//});

$botman->listen();

