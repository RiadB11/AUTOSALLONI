<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>AutoSalloni</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<div class="meny">
    <a href="index.php"><img src="photos/logo.png" alt="logo"></a>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="për_ne.php">Për ne</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="veturat.php">Veturat</a></li>
        <li><a href="administrata.php">Administratë</a></li>
        <li><a href="kontakti.php">Kontakti</a></li>
        <?php if(isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin']) : ?>
            <li><a href="logout.php">Log out</a></li>
        <?php else : ?>
            <li><a href="login.php">Log in</a></li>
        <?php endif; ?> 
    </ul>

    <i class="fas fa-bars ikona"></i>
</div>

<script src="js/sidebar.js"></script>