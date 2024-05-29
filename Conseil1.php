<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page de conseils</title>
    <link href="KanimyTuto_accueil.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<header class="navbar">
		<h1>Kanimy Tuto</h1>
	

	<nav>
		<ul>
			<li><a href="KanimyTuto_accueil.php">Accueil</a></li>
			<li><a href="#about">A propos de nous</a></li>
			<li><a href="#contact">Nous contacter</a></li>
			<li><a href="Page_conseil.php">Liste de conseils</a></li>
		</ul>
	</nav>

	<nav class="align-right"> 
		<a href="#signup" class="rounded-box">S'inscrire</a>
		<a href="#login" class="rounded-box">Se connecter</a>
	</nav></br>

	 <div class="search-container">
        <form method="GET">
            <input type="search" name="s" placeholder="Rechercher un conseil" value="<?php echo isset($_GET['s']) ? htmlspecialchars($_GET['s']) : ''; ?>">
            <input type="submit" name="envoyer" value="Rechercher">
        </form>
	</div>
    </header>

        <?php
        if (isset($_GET['s']) && !empty(trim($_GET['s']))) {
            $jsonContent = file_get_contents('keywords.json');
            if ($jsonContent === false) {
                die("Erreur lors de la lecture du fichier JSON.");
            }

            $jsonData = json_decode($jsonContent, true);
            if ($jsonData === null && json_last_error() !== JSON_ERROR_NONE) {
                die("Erreur de décodage JSON : " . json_last_error_msg());
            }

            $recherche = strtolower(trim(htmlspecialchars($_GET['s'])));
            $recherche = str_replace(' ', '-', $recherche);

            if (array_key_exists($recherche, $jsonData)) {
                include($jsonData[$recherche]);
            } else {
                echo "<p>Aucun article correspondant à votre recherche n'a été trouvé.</p>";
            }
        } else {
            
        }
        ?>

    <div class="titre">
        <h1>Pousse de cheveux</h1>
    </div>
    <div class="catalogue2">
        <h3>Faire pousser ses cheveux avec des huiles essentielles</h3>
        <span>Publié le 03/05/2024 à 9h12 par Inès Ribar</span>

        <div class="center-content">

            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/EPRXtE9OLp8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
</header>
        <article class="article">
            <h1>Revitalisez vos cheveux avec les huiles essentielles</h1>
            <p>Les huiles essentielles ne sont pas seulement de merveilleux élixirs aromatiques pour relaxer l'esprit ; elles peuvent aussi jouer un rôle clé dans la santé et la beauté de vos cheveux. Riches en nutriments et en propriétés thérapeutiques, certaines huiles essentielles ont la capacité de transformer les cheveux secs, abîmés et ternes en une chevelure brillante, forte et saine.</p>
            <h2>Les Meilleures huiles essentielles pour les cheveux</h2>
            <ul>
                <li><strong>Huile essentielle de Lavande</strong>: Connue pour ses propriétés apaisantes et régénératrices, l'huile de lavande peut aider à accélérer la croissance des cheveux tout en réduisant le stress.</li>
                <li><strong>Huile essentielle de Romarin</strong>: Excellente pour la croissance des cheveux et la force générale, l'huile de romarin stimule la circulation du cuir chevelu.</li>
                <li><strong>Huile essentielle de Menthe Poivrée</strong>: Avec un effet rafraîchissant et revigorant, la menthe poivrée peut aider à revitaliser les follicules pileux.</li>
            </ul>
            <h2>Comment Utiliser les Huiles Essentielles pour Vos Cheveux</h2>
            <p>Pour intégrer les huiles essentielles dans votre routine capillaire, vous pouvez ajouter quelques gouttes à votre shampooing ou après-shampooing habituel. Une autre méthode efficace consiste à les utiliser dans un traitement d'huile chaude.</p>
            <h3>Préparation du traitement</h3>
            <p>Mélangez 3 à 5 gouttes de votre huile essentielle préférée avec une huile porteuse, comme l'huile de coco ou l'huile d'argan.</p>
            <h3>Application</h3>
            <p>Appliquez le mélange d'huiles sur vos cheveux et votre cuir chevelu en massant doucement. Enveloppez vos cheveux dans une serviette chaude pour permettre aux huiles de pénétrer profondément.</p>
            <h3>Durée</h3>
            <p>Laissez le traitement agir pendant au moins 30 minutes ou, pour de meilleurs résultats, toute la nuit.</p>
            <h3>Rinçage</h3>
            <p>Lavez vos cheveux comme d'habitude avec votre shampooing pour éliminer les huiles.</p>
            <h2>Conseils de Sécurité</h2>
            <p>Bien que bénéfiques, les huiles essentielles sont très concentrées et doivent toujours être diluées avec une huile porteuse pour éviter les réactions cutanées. Assurez-vous également de faire un petit test cutané avant de les appliquer pleinement, pour éviter toute allergie ou irritation.</p>
        </article>
    </div>

    <div class="comment-section">
        <h2>Commentaires</h2>
        <form action="submit_commentaire.php" method="POST">
            <label for="username">Nom:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="comment">Commentaire:</label><br>
            <textarea id="comment" name="comment" rows="4" required></textarea><br><br>
            <button type="submit">Soumettre</button>
        </form>
        <div id="comment-list">
            <?php
            // Lire les commentaires à partir du fichier JSON
            $comments_file = 'comments.json';
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
