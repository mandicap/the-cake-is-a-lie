<?php
/**
 * Not gonna lie, this is annoying. I shouldn't have to
 * manually add a separator like this. I tried to set
 * the separator in AppView.php, in addition to, giving
 * all my html elements their proper classes. What did
 * that end up doing? Well, I had to set an empty array
 * as the 1st param of render() since all my attrs were
 * set in setTemplates(). I then had to add another
 * array with an empty string value for the 'separator'
 * key. Why? Because the render() doesn't, by default,
 * add a separator.
 *
 * Why, CakePHP? Or am I just stupid?
 */
?>
<div class="flex-1 flex">
    <?= $this->Breadcrumbs->render(['class' => 'breadcrumbs'], [
        'separator' =>
            '<svg class="flex-shrink-0 h-5 w-5 ml-4 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
            </svg>'
    ]) ?>
</div>
