<!DOCTYPE html>
<html lang="en"><head>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $this->fetch('title') ?></title>

    <?= $this->fetch('meta') ?>

    <?= $this->Html->meta('icon') ?>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:400,700">
    <?= $this->Html->css('styles.css') ?>
    <?= $this->fetch('css') ?>

</head><body>

    <div id="app">
        <header class="p-4">
            Header
        </header>

        <main class="flex-grow flex flex-col justify-center min-h-full">
            <?= $this->fetch('content') ?>
        </main>

        <footer class="p-4">
            Footer
        </footer>
    </div>

    <?= $this->Html->script('scripts.js') ?>
    <?= $this->fetch('script') ?>

</body></html>
