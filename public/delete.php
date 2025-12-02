<?php
require "../config/Database.php";
require "../models/MahasiswaRepository.php";

$db = new Database();

$pdo = $db->connect();
$repo = new MahasiswaRepository($pdo);

$repo->delete($_GET['id']);
header("Location: index.php");
exit;
