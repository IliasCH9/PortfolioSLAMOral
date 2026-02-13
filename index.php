<?php
$currentPage = 'Accueil';
require __DIR__ . '/includes/header.php';
?>
<section class="hero">
    <div class="container">
        <h1>Bonjour, je suis Ilias Cheniki</h1>
        <p>
            Étudiant en BTS SIO option SLAM, passionné par le développement logiciel et web.
            J'aime transformer des idées en applications concrètes et utiles.
        </p>
        <a href="projets.php" class="btn">Voir mes projets</a>
    </div>
</section>

<section class="intro">
    <div class="container grid-2">
        <article class="card">
            <h2>Mon parcours</h2>
            <p>
                J'ai réalisé 6 mois de stage au Canada aux côtés de mon frère, développeur web freelance,
                ce qui m'a permis de découvrir un environnement professionnel réel.
            </p>
        </article>
        <article class="card">
            <h2>Mon objectif</h2>
            <p>
                Continuer à progresser en développement full stack, avec une base solide en Python, HTML/CSS
                et une montée en compétences en PHP.
            </p>
        </article>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
