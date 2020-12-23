<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>

<article>
    <h1><?php echo $config['title']; ?></h1>
    <?php if (isset($_SESSION['user'])) : ?>
        <p>Welcome, <?php echo $_SESSION['user']['username']; ?>!</p>
    <?php else : ?>
        <p>Welcome, guest!</p>
    <?php endif; ?>
</article>

<?php require __DIR__ . '/views/footer.php'; ?>