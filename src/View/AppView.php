<?php

declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\View;

use Cake\View\View;

/**
 * Application View
 *
 * Your application's default view class
 *
 * @link https://book.cakephp.org/4/en/views.html#the-app-view
 */
class AppView extends View
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize() : void
    {
        $this->loadHelper('Authentication.Identity');

        /**
         * This is so ugly and way more complicated than it needs to be.
         * See: comment in templates/layout/default.php where the breadcrumbs
         * are rendered.
         */
        $this->Breadcrumbs->setTemplates([
            'wrapper' =>'<nav{{attrs}}><ol>{{content}}</ol></nav>',
            'item' =>'<li{{attrs}}><a href="{{url}}"{{innerAttrs}}>{{title}}</a>{{separator}}</li>',
            'itemWithoutLink' =>'<li{{attrs}}><span{{innerAttrs}}>{{title}}</span>{{separator}}</li>',
            'separator' => '{{separator}}'
        ]);
    }
}
