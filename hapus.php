<?php
$pdo = require 'koneksi.php';
if (!isset($_GET['id'])) {
    header('Location: dashboardAdmin.php');
    exit;
}
require 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM materi WHERE id = $id";
$query = $pdo->prepare($sql);
$query->execute();
$materi = $query->fetch();
if (!$materi) {
    header('Location: dashboardAdmin.php');
    exit;
} else {
$sql2 = "DELETE FROM materi WHERE id = $id";
$query2 = $pdo->prepare($sql2);
$query2->execute();
header('Location: dashboardAdmin.php');
exit;
}