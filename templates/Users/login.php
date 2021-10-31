<?php $this->layout = 'auth' ?>

<?= $this->Form->create() ?>
    <div class="space-y-6">
        <?= $this->Form->control('email', [
            'class' => 'appearance-none block w-full mt-1 px-3 py-2 border border-gray-300 rounded-sm shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm',
            'required' => true,
            'label' => ['class' => 'block text-sm font-medium text-gray-700']
        ]) ?>

        <?= $this->Form->control('password', [
            'class' => 'appearance-none block w-full mt-1 px-3 py-2 border border-gray-300 rounded-sm shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm',
            'required' => true,
            'label' => ['class' => 'block text-sm font-medium text-gray-700']
        ]) ?>

        <?= $this->Form->submit(__('Login'), [
            'class' => 'w-full flex justify-center py-2 px-4 border border-transparent rounded-sm shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
        ]); ?>
    </div>
<?= $this->Form->end() ?>
