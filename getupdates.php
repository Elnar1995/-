<?php
const TOKEN = '1787466312:AAGu22js-SXHu24i7PN5dQKUao7s7RE3K9U';

$url = 'https://api.telegram.org/bot' . TOKEN . '/getUpdates';

$response = file_get_contents($url);

var_dump($response);

