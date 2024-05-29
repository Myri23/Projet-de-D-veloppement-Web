<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recette de Smoothie pour le Bien-être</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
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
            <input type="search" name="s" placeholder="Rechercher un conseil">
            <input type="submit" name="envoyer" value="Rechercher">
        </form>
    </div>
</header>
<body>
    <header>
        <h1>Recette de Smoothie pour le Bien-être</h1>
    </header>
    <main>
        <section>
            <h2>Introduction</h2>
            <p>
                Commencez votre journée avec un boost de vitalité grâce à cette recette de smoothie nourrissant et riche en antioxydants. Parfait pour une matinée dynamique ou un après-midi de détente!
            </p>
        </section>
        <section>
            <h2>Ingrédients</h2>
            <ul>
                <li>1 banane mûre</li>
                <li>1/2 tasse de myrtilles fraîches</li>
                <li>1/4 de tasse de graines de chia</li>
                <li>1 tasse de lait d'amande</li>
                <li>1 cuillère à soupe de miel (optionnel)</li>
                <li>Des glaçons (selon préférence)</li>
            </ul>
            <img src="images/smoothie_ingredients.jpg" alt="Ingrédients pour smoothie" class="responsive">
        </section>
        <section>
            <h2>Étape 1 : Préparation des Ingrédients</h2>
            <p>Pelez la banane et placez-la dans le blender. Ajoutez les myrtilles, les graines de chia, et les glaçons.</p>
        </section>
        <section>
            <h2>Étape 2 : Mixez le Tout</h2>
            <p>Versez le lait d'amande dans le blender, puis mixez jusqu'à obtenir une consistance lisse. Ajoutez le miel si vous souhaitez sucrer votre smoothie.</p>
        </section>
        <section>
            <h2>Étape 3 : Servez et Savourez</h2>
            <p>Versez le smoothie dans un grand verre. Vous pouvez ajouter une paille ou décorer avec quelques myrtilles sur le dessus pour un look plus appétissant.</p>
        </section>
    </main>
    <div class="comment-section">
        <h2>Commentaires</h2>
        <form action="submit_commentaire6.php" method="POST">
            <label for="username">Nom:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="comment">Commentaire:</label><br>
            <textarea id="comment" name="comment" rows="4" required></textarea><br><br>
            <button type="submit">Soumettre</button>
        </form>
        <div id="comment-list">
            <!-- Les commentaires seront insérés ici par PHP -->
        </div>
    </div>
    <section id="about">
        <h2>A propos de nous</h2>
        <p>Sur Kanimy Tuto, découvrez une multitude de conseils pour améliorer votre quotidien. Nos recettes, tutoriels et astuces sont là pour vous inspirer et enrichir votre vie. Participez et partagez vos propres expériences!</p>
    </section>
    <section id="contact">
        <h2>Nous contacter</h2>
        <p>Pour toute question ou suggestion, n'hésitez pas à nous écrire à KanimyTuto@gmail.com</p>
    </section>
    <footer class="center-align">
        &copy; 2024 Kanimy Tuto
    </footer>
</body>
</html>
