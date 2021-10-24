<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');

        // Tables automatically have an id column created as the primary key
        // $table->addColumn('id', 'integer', [
        //     'autoIncrement' => true
        // ])->addPrimaryKey('id');

        $table->addColumn('email', 'string', [
            'null' => false,
            'limit' => 255
        ]);

        $table->addColumn('password', 'string', [
            'null' => false,
            'limit' => 255
        ]);

        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');

        $table->create();
    }
}
