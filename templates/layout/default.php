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
        <aside x-data="{ open: false }">
            <?= $this->element('common/off-canvas') ?>
            <?= $this->element('common/sidebar') ?>
        </aside>

        <header x-data class="flex flex-col mb-12 md:pl-64">
            <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200">
                <button type="button" @click="$dispatch('toggle-sidebar')" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </button>
            </div>
        </header>

        <main class="flex-grow md:pl-64">
            <div class="w-full mx-auto flex flex-col md:px-8">
                <?= $this->fetch('content') ?>
            </div>
        </main>

        <footer class="md:pl-64">
            <div class="w-full mx-auto p-4">
                Footer
            </div>
        </footer>
    </div>

    <?= $this->Html->script('scripts.js') ?>
    <?= $this->fetch('script') ?>

</body></html>
