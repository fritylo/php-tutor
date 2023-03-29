<?php

$content = json_decode(file_get_contents(__DIR__ . '/users.json'));

var_dump($content);

file_put_contents(__DIR__ . '/users.json', json_encode($content));