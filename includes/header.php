<?php
$currentPage = $currentPage ?? '';
$siteTitle = 'Portfolio BTS SIO SLAM - Ilias Cheniki';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio d'Ilias Cheniki, étudiant BTS SIO SLAM : projets, compétences et contact.">
    <title><?= htmlspecialchars($siteTitle) ?><?= $currentPage ? ' | ' . htmlspecialchars($currentPage) : '' ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="container nav-container">
        <a class="brand" href="index.php">Ilias Cheniki - Portfolio SLAM</a>
        <button class="menu-toggle" aria-label="Ouvrir le menu">☰</button>
        <nav class="site-nav" aria-label="Navigation principale">
            <ul>
                <li><a href="index.php" class="<?= $currentPage === 'Accueil' ? 'active' : '' ?>">Accueil</a></li>
                <li><a href="projets.php" class="<?= $currentPage === 'Projets' ? 'active' : '' ?>">Projets</a></li>
                <li><a href="competences.php" class="<?= $currentPage === 'Compétences' ? 'active' : '' ?>">Compétences</a></li>
                <li><a href="contact.php" class="<?= $currentPage === 'Contact' ? 'active' : '' ?>">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
