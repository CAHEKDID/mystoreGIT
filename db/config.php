<?php
const CONN = [
    "host" => "localhost",
    "dbname" => "a0538952_PepeDog",
    "login" => "a0538952_PepeDog",
    "password" => "PepeDog",
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]
];

$validFileTypes = ['image/jpg', 'image/jpeg','image/png'];
$uploadPath = $_SERVER['DOCUMENT_ROOT'] . "/img/prod/";
