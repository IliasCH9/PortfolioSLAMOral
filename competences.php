<?php
$currentPage = 'Compétences';
require __DIR__ . '/includes/header.php';

$skills = [
    'Langages maîtrisés' => ['Python', 'HTML5', 'CSS3'],
    'En cours d\'apprentissage' => ['PHP'],
    'Outils et environnement' => ['Git/GitHub', 'VS Code', 'Linux'],
    'Compétences transversales' => ['Autonomie', 'Rigueur', 'Travail en équipe']
];
?>
<section class="page-header">
    <div class="container">
        <h1>Mes compétences</h1>
        <p>Compétences techniques et professionnelles développées pendant ma formation et mon stage.</p>
    </div>
</section>

<section>
    <div class="container skill-grid">
        <?php foreach ($skills as $category => $items): ?>
            <article class="card">
                <h2><?= htmlspecialchars($category) ?></h2>
                <ul>
                    <?php foreach ($items as $item): ?>
                        <li><?= htmlspecialchars($item) ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
