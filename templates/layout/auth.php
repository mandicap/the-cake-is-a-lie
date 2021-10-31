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
        <main class="flex-grow flex flex-col justify-center min-h-full">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <?= $this->Flash->render() ?>

                <div class="bg-white py-8 px-4 shadow sm:rounded-sm sm:px-10">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </main>
    </div>

    <?= $this->Html->script('scripts.js') ?>
    <?= $this->fetch('script') ?>

</body></html>
