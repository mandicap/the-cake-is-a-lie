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

        <header x-data class="flex flex-col md:pl-64">
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
            <div class="mb-6 p-6 bg-gray-100 border-b border-gray-200 flex items-center justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="text-2xl font-bold leading-7 text-gray-400 sm:text-3xl sm:truncate">
                        <?= $this->fetch('title') ?>
                    </h2>
                </div>

                <?php // TODO: Make this a view cell? ?>
                <?php if ($this->request->getParam('action') === 'index') : ?>
                    <div class="flex items-center">
                        <a href="<?= $this->Url->build([
                            'controller' => $this->request->getParam('controller'),
                            'action' => 'add'
                            ]) ?>" class="inline-flex items-center p-1 border border-transparent rounded-full shadow-sm text-white bg-green-600 hover:bg-green-700 hover:text-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="w-full mx-auto flex flex-col px-4 md:px-8">
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
