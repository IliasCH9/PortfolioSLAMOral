<?php
$currentPage = 'Projets';
require __DIR__ . '/includes/header.php';

$projects = [
    [
        'title' => 'Jeu du pendu en Python',
        'description' => 'Développement d\'un jeu du pendu en console avec gestion des essais, des mots à deviner et de l\'affichage de progression.',
        'stack' => ['Python']
    ],
    [
        'title' => 'Portfolio BTS SIO SLAM',
        'description' => 'Conception d\'un site portfolio multi-pages pour présenter mon parcours, mes compétences et mes réalisations.',
        'stack' => ['HTML', 'CSS', 'JavaScript', 'PHP']
    ],
    [
        'title' => 'Missions web en stage (Canada)',
        'description' => 'Participation à des tâches de développement web lors de mon stage de 6 mois dans un contexte freelance.',
        'stack' => ['HTML', 'CSS', 'Bases PHP']
    ],
];
?>
<section class="page-header">
    <div class="container">
        <h1>Mes projets</h1>
        <p>Voici des projets représentatifs de mon niveau actuel et de ma progression.</p>
    </div>
</section>

<section>
    <div class="container project-list">
        <?php foreach ($projects as $project): ?>
            <article class="card project-card">
                <h2><?= htmlspecialchars($project['title']) ?></h2>
                <p><?= htmlspecialchars($project['description']) ?></p>
                <p><strong>Technologies :</strong> <?= htmlspecialchars(implode(', ', $project['stack'])) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
