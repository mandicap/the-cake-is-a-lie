<?php
declare(strict_types=1);

use Cake\Auth\DefaultPasswordHasher;
use Cake\Chronos\Date;
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'email' => 'admin@localhost',
            'password' => (new DefaultPasswordHasher())->hash('password'),
            'created' => Date::now(),
            'modified' => Date::now()
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
