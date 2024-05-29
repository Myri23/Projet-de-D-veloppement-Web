<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Kanimy Tuto</title>
    <!-- Lien vers la feuille de style externe -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Section d'en-tête contenant la barre de navigation et le titre -->
    <header class="navbar">
        <img src="title.png" class="logo" width="150px" height="100px">
    
    <!-- Menu de navigation principal -->
    <nav>
        <ul>
            <li><a href="KanimyTuto_accueil.php">Accueil</a></li>
            <li><a href="KanimyTuto_accueil.php">A propos de nous</a></li>
            <li><a href="KanimyTuto_accueil.php">Nous contacter</a></li>
            <li><a href="Page_conseil.php">Liste de conseils</a></li>
        </ul>
    </nav>

    <!-- Menu de navigation secondaire pour les actions utilisateur -->
    <nav class="align-right"> 
        <a href="KanimyTuto_inscription.php" class="rounded-box">S'inscrire</a>
        <a href="KanimyTuto_connection.php" class="rounded-box">Se connecter</a>
    </nav></br>

    <!-- Formulaire de recherche -->
     <div class="search-container">
        <form action="/search" method="GET">
            <input type="search" name="query" placeholder="Rechercher..." required> 
            <button type="submit" class="rounded-box">Rechercher</button>
        </form>
    </div>
    </header>

    <div class="content">
        <section>
            <h2>Connexion</h2>
            <!-- Formulaire de connexion -->
            <form action="connection_process.php" method="POST" class="container">
                <div class="profile-info">
                    <label for="username">Nom d'utilisateur ou Email:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="profile-info">
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="submit-btn">Se connecter</button>
            </form>
        </section>
    </div>

    <footer class="center-align">
        &copy; 2024 Kanimy Tuto
    </footer>
</body>
</html>


