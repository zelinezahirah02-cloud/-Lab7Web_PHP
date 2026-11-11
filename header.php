<?php
// Template header bersama. Set $judul sebelum require file ini.
$judul = $judul ?? "Praktikum 7 PHP";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($judul, ENT_QUOTES, "UTF-8") ?> | Praktikum 7</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="topbar">
    <div class="topbar-inner">
        <a class="brand" href="index.php"><span class="logo">&lt;/&gt;</span> Praktikum 7 &middot; PHP</a>
        <a class="back" href="index.php">&larr; Menu</a>
    </div>
</header>
<main class="container">
    <div class="page-head">
        <span class="eyebrow">Pemrograman Web</span>
        <h1><?= htmlspecialchars($judul, ENT_QUOTES, "UTF-8") ?></h1>
    </div>
    <section class="card">
