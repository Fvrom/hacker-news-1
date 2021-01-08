<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

// In this file we delete new posts in the database.
if (loggedIn() && isset($_POST['submit'])) {
    $id = $_POST['postid'];

    $statement = $pdo->prepare('DELETE FROM posts WHERE id = :id');

    if (!$statement) {
        die(var_dump($pdo->errorInfo()));
    }

    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $_SESSION['message'] = 'Your post has been deleted.';
}
redirect('/index.php');
