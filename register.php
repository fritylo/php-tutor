<?php

$content = json_decode(file_get_contents(__DIR__ . '/users.json'));

var_dump($content);

array_push($content, [
    'fullname' => $_POST['fullname'],
    'id' => intval($_POST['id']),
]);

file_put_contents(__DIR__ . '/users.json', json_encode($content));

die;

//header('Location: /php-tutor/html.php?key=fullname');
header('Content-Type: application/json');