<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

class AuthController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['login']);
        $this->Authorization->skipAuthorization();

        $this->viewBuilder()->setLayout('auth');
    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post']);

        $result = $this->Authentication->getResult();

        // Redirect if user is logged in regardless of request method
        if ($result->isValid()) {
            /**
             * Redirect to either the page the user was trying to access,
             * prior to logging in, or the users index.
             *
             * TODO: Change redirect to admin homepage
             */
            return $this->redirect($this->request->getQuery('redirect', [
                'controller' => 'Users',
                'action' => 'index'
            ]));
        }

        // Authentication failed on form submit
        if ($this->request->is('post') && ! $result->isValid()) {
            $this->Flash->error(__('Invalid username or password.'));
        }
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();

        if ($result->isValid()) {
            $this->Authentication->logout();

            return $this->redirect(['action' => 'login']);
        }
    }
}
