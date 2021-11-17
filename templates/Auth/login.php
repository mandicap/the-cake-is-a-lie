<?php
/**
 * @var \App\View\AppView $this
 */

$this->assign('title', 'Login');
?>

<?= $this->Form->create() ?>
    <div class="space-y-6">
        <?= $this->Form->control('email', [
            'class' => 'mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black',
            'required' => true,
            'placeholder' => __('Email'),
            'label' => ['class' => 'sr-only']
        ]) ?>

        <?= $this->Form->control('password', [
            'class' => 'mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black',
            'required' => true,
            'placeholder' => __('Password'),
            'label' => ['class' => 'sr-only']
        ]) ?>

        <?= $this->Form->submit(__('Login'), ['class' => 'btn xl secondary w-full justify-center']); ?>
    </div>
<?= $this->Form->end() ?>
