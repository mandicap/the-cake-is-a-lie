<?php

declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\AuthController Test Case
 *
 * @uses \App\Controller\AuthController
 */
class AuthControllerTest extends TestCase
{
    use IntegrationTestTrait;

    protected $fixtures = ['app.Users'];

    public function testLoginSucceedsFromLoginForm() : void
    {
        $users = $this->getTableLocator()->get('users');

        $user = $users->get(1);

        $this->get('auth/login');
        $this->assertResponseOk();

        if ($this->post('auth/login', $user)) {
            $this->session(['Auth' => $user]);
            $this->assertRedirect();
        }
    }

    public function testRedirectsIfAlreadyLoggedIn() : void
    {
        $this->loginUser();

        $this->get('auth/login');
        $this->assertRedirect();
    }

    public function testLoggedInUserCanLogout() : void
    {
        $this->loginUser();

        $this->get('auth/logout');
        $this->assertRedirect();
    }

    /**
     * Helper function for testing authentication
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     * @throws \Cake\Datasource\Exception\RecordNotFoundException
     * @throws \Cake\Datasource\Exception\InvalidPrimaryKeyException
     */
    protected function loginUser() : void
    {
        $users = $this->getTableLocator()->get('users');

        $user = $users->get(1);

        $this->session(['Auth' => $user]);
    }
}
