<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Kanimy Tuto</title>
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
        <form method="GET">
            <input type="search" name="s" placeholder="Rechercher un conseil" value="<?php echo isset($_GET['s']) ? htmlspecialchars($_GET['s']) : ''; ?>">
            <input type="submit" name="envoyer" value="Rechercher">
        </form>
    </div>
    </header>

    <div class="content">
        <section>
            <h2>Inscription</h2>
            <!-- Formulaire d'inscription -->
            <form action="inscription_process.php" method="POST" class="container">
                <div class="profile-info">
                    <label for="username">Nom d'utilisateur:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="profile-info">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="profile-info">
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="submit-btn">S'inscrire</button>
            </form>
        </section>
    </div>

    <footer class="center-align">
        &copy; 2024 Kanimy Tuto
    </footer>
</body>
</html>


