<?php

use App\Messages;

require __DIR__.'/../vendor/autoload.php';

$messages = new Messages();

$response = http_response_code();

// Attempt read and write tests
if(!$messages->write_file() || !$messages->read_file(){
	http_response_code(500);
}

printf("<h1>%s</h1>\n", $messages->title());
printf("<p>%s</p>\n", $messages->message());
