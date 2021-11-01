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
        <div x-data="{ open: false }">
            <?= $this->element('common/off-canvas') ?>
            <?= $this->element('common/sidebar') ?>
        </div>

        <main class="flex-grow md:pl-64">
            <div class="max-w-4xl mx-auto flex flex-col md:px-8 xl:px-0">
                <?= $this->fetch('content') ?>
            </div>
        </main>

        <footer class="p-4">
            Footer
        </footer>
    </div>

    <?= $this->Html->script('scripts.js') ?>
    <?= $this->fetch('script') ?>

</body></html>
