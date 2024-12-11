<?php
include '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        try {
            $pdo = getPDOConnection();
            $stmt = $pdo->prepare('INSERT INTO newsletter_subscribers (email) VALUES (:email)');
            $stmt->execute(['email' => $email]);

            // Redirection avec un message de succès
            header('Location: ../index.php?success=1');
            exit;
        } catch (PDOException $e) {
            if ($e->getCode() === '23000') { // E-mail déjà existant
                header('Location: ../index.php?error=exists');
            } else {
                header('Location: ../index.php?error=database');
            }
            exit;
        }
    } else {
        // Redirection avec une erreur d'e-mail invalide
        header('Location: ../index.php?error=invalid_email');
        exit;
    }
}
?>
