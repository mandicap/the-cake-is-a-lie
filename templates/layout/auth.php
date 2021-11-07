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
                <div class="mb-8">
                    <svg viewBox="0 0 256 200" fill="currentColor" class="mx-auto h-16 w-auto text-cake-red">
                        <path d="M0,119.882843 C0,141.938825 57.2937323,159.841092 127.979753,159.841092 L127.979753,159.841092 L127.979753,199.783147 C57.2937323,199.783147 0,181.897074 0,159.841092 L0,159.841092 Z M255.999995,119.882843 L255.999995,159.832995 C255.999995,169.249701 245.530687,177.889104 228.09804,184.722895 L228.09804,184.722895 L127.971656,159.832995 L127.971656,119.882843 L228.09804,144.764647 C245.530687,137.938952 256.008088,129.299549 255.999995,119.882843 L255.999995,119.882843 Z M127.979753,0 C198.673871,0 256,17.9184609 256,39.9582488 L256,39.9582488 L256,79.9407884 C256,89.3251066 245.530687,97.9968968 228.106137,104.798301 L228.106137,104.798301 L127.979753,79.9407884 L127.979753,119.882843 C57.2937323,119.882843 0,101.988673 0,79.9407884 L0,79.9407884 L0,39.9582488 C0,17.9184609 57.2937323,0 127.979753,0 Z" />
                    </svg>
                </div>

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
