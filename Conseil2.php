<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="3.2" content="width=device-width">
	<title>page de conseils</title>
	<link href="style.css" rel="stylesheet" type="text/css" />

	

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
    </nav></br>	<br>

	<div class="search-container">
		<form action="/search" method="GET">
			<input type="search" name="query" placeholder="Rechercher..." required>
			<button type="submit" class="rounded-box">Rerchercher</button>
		</form>
	</div>
	</header>
<body>
    <div class="titre">
        <h1>Préparer la rentrée des classes</h1>
    </div>
    <div class="catalogue2">
        <h3>Conseils pour une rentrée scolaire réussie</h3>
        <span>Publié le 29/05/2024 à 9h12 par Jades</span>
        
        <img src="rentree.jpg" alt="Image de fournitures scolaires">

        <article class="article">
            <h1>Optimisez votre rentrée avec organisation et planification</h1>
            <p>La rentrée scolaire peut être une période stressante, mais une bonne préparation peut grandement faciliter la transition. De l'achat des fournitures à la planification de votre emploi du temps, chaque détail compte.</p>

            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/watch?v=Wap-mNSzQZs&ab_channel=Dreaminreality" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <h2>Les essentiels de la rentrée</h2>
            <ul>
                <li><strong>Fournitures scolaires</strong>: Liste complète des fournitures nécessaires classée par matière.</li>
                <li><strong>Organisation du temps</strong>: Conseils pour gérer efficacement votre emploi du temps et vos loisirs.</li>
                <li><strong>Préparation mentale</strong>: Techniques pour aborder la rentrée avec sérénité et confiance.</li>
            </ul>

            <h2>Stratégies d'organisation</h2>
            <p>Utilisez des agendas et des applications de planification pour rester organisé tout au long de l'année scolaire. La clé est de commencer tôt et de maintenir une routine stable.</p>

            <h3>Planification de votre semaine</h3>
            <p>Définissez des objectifs hebdomadaires et assurez-vous de réserver du temps pour les révisions et les activités parascolaires.</p>

            <h2>Conseils pour les parents</h2>
            <p>Impliquez-vous dans la préparation de la rentrée de vos enfants en discutant de leurs attentes et en visitant l'école en avance.</p>
        </article>
    </div>


  <div class="comment-section">
        <h2>Commentaires</h2>
        <form action="submit_commentaire2.php" method="POST">
            <label for="username">Nom:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="comment">Commentaire:</label><br>
            <textarea id="comment" name="comment" rows="4" required></textarea><br><br>
            <button type="submit">Soumettre</button>
        </form>
        <div id="comment-list">
            <?php
            // Lire les commentaires à partir du fichier JSON
            $comments_file = 'comments2.json';
            if (file_exists($comments_file)) {
                $comments_json = file_get_contents($comments_file);
                $comments = json_decode($comments_json, true);

                if (!empty($comments)) {
                    foreach ($comments as $comment) {
                        echo "<div class='comment'><p class='comment-author'>" . htmlspecialchars($comment['username']) . "</p><p>" . htmlspecialchars($comment['comment']) . "</p><p class='comment-date'>" . $comment['created_at'] . "</p></div>";
                    }
                } else {
                    echo "<p>Aucun commentaire pour le moment.</p>";
                }
            } else {
                echo "<p>Aucun commentaire pour le moment.</p>";
            }
            ?>
        </div>

		<section id="about">
		<h2>A propos de nous</h2>
		<p>Notre plateforme, Kanimy Tuto, est bien plus qu'une simple source d'informations. C'est un espace de partage où les utilisateurs peuvent non seulement découvrir une multitude de conseils pratiques dans divers domaines, mais aussi contribuer en partageant leurs propres astuces et connaissances. Que ce soit en proposant une nouvelle recette de smoothie, en partageant des conseils pour cultiver la gratitude ou en dévoilant une technique de bricolage ingénieuse, chaque utilisateur a l'opportunité d'enrichir la communauté par ses connaissances et son expérience. Venez découvrir, apprendre et partager sur Kanimy Tuto, où l'entraide et la créativité sont au cœur de notre philosophie.
		L'équipe fondatrice de Kanimy Tuto, Kanto A, Inès R et Myriam Saadi, vous souhaite la bienvenue !
		</p>
	</section>

	<section id="contact">
		<h2>Nous contacter</h2>
		<p>Vous souhaitez nous informer d'un problème sur la plateforme ? Contactez nous par mail au <a href="mailto:">KanimyTuto@gmail.com</a></p>
	</section>
</div>

	<footer class="center-align">
		&copy; 2024 Kanimy Tuto 
	</footer>

</body>

</html>
