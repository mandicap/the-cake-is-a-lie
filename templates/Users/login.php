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

        <?= $this->Form->submit(__('Login'), ['class' => 'btn xl secondary w-full justify-center']); ?>
    </div>
<?= $this->Form->end() ?>
