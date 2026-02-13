<?php
$currentPage = 'Contact';

$errors = [];
$success = false;
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($name === '') {
        $errors[] = 'Le nom est obligatoire.';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'L\'adresse e-mail est invalide.';
    }

    if (mb_strlen($message) < 10) {
        $errors[] = 'Le message doit contenir au moins 10 caractères.';
    }

    if (!$errors) {
        $line = sprintf(
            "[%s] %s <%s>: %s%s",
            date('Y-m-d H:i:s'),
            str_replace(["\n", "\r"], ' ', $name),
            str_replace(["\n", "\r"], ' ', $email),
            str_replace(["\n", "\r"], ' ', $message),
            PHP_EOL
        );
        file_put_contents(__DIR__ . '/data/messages.txt', $line, FILE_APPEND);
        $success = true;
        $name = $email = $message = '';
    }
}

require __DIR__ . '/includes/header.php';
?>
<section class="page-header">
    <div class="container">
        <h1>Contact</h1>
        <p>Vous pouvez me contacter pour un stage, une alternance ou un projet.</p>
    </div>
</section>

<section>
    <div class="container contact-wrapper">
        <article class="card">
            <h2>Mes coordonnées</h2>
            <p><strong>Nom :</strong> Ilias Cheniki</p>
            <p><strong>E-mail professionnel :</strong> <a href="mailto:ilias.cheniki9@gmail.com">ilias.cheniki9@gmail.com</a></p>
        </article>

        <article class="card">
            <h2>Formulaire de contact</h2>

            <?php if ($success): ?>
                <p class="alert success">Votre message a bien été envoyé.</p>
            <?php endif; ?>

            <?php if ($errors): ?>
                <div class="alert error">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="post" action="contact.php" class="contact-form">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required value="<?= htmlspecialchars($name) ?>">

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required value="<?= htmlspecialchars($email) ?>">

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" required><?= htmlspecialchars($message) ?></textarea>

                <button type="submit" class="btn">Envoyer</button>
            </form>
        </article>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
