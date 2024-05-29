<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: KanimyTuto_connection.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soumettre un Conseil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header class="navbar">
        <img src="title.png" class="logo" width="150px" height="100px">
    

    <nav>
        <ul>
            <li><a href="KanimyTuto_accueil.php">Accueil</a></li>
            <li><a href="KanimyTuto_accueil.php">A propos de nous</a></li>
            <li><a href="KanimyTuto_accueil.php">Nous contacter</a></li>
            <li><a href="Page_conseil.php">Liste de conseils</a></li>
        </ul>
    </nav>

    <nav class="align-right"> 
        <a href="KanimyTuto_inscription.php" class="rounded-box">S'inscrire</a>
        <a href="KanimyTuto_connection.php" class="rounded-box">Se connecter</a>
    </nav></br>

     <div class="search-container">
        <form action="/search" method="GET">
            <input type="search" name="query" placeholder="Rechercher..." required> 
            <button type="submit" class="rounded-box">Rechercher</button>
        </form>
    </div>
    </header>
    <div class="content">
        <h1>Soumettre un Conseil</h1>
        <form action="KanimyTuto_traitement_conseil.php" method="POST" class="container">
            <div class="profile-info">
                <label for="titre">Titre:</label>
                <input type="text" id="titre" name="titre" required>
            </div>
            <div class="profile-info">
                <label for="categories">Catégories:</label>
                <input type="text" id="categories" name="categories" required>
            </div>
            <div class="profile-info">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image">
            </div>
            <div class="profile-info">
                <label for="contenu">Contenu:</label>
                <textarea id="contenu" name="contenu" rows="50" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Soumettre</button>
        </form>
    </div>
</body>
</html>
