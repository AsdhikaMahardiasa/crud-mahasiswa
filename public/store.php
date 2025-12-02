<?php
require "../config/Database.php";
require "../models/MahasiswaRepository.php";

$db = new Database();
$pdo = $db->connect();
$repo = new MahasiswaRepository($pdo);

$data = [
    "nama" => $_POST["nama"],
    "nim" => $_POST["nim"],
    "prodi" => $_POST["prodi"],
    "angkatan" => $_POST["angkatan"],
    "status" => $_POST["status"]
];

$repo->create($data);