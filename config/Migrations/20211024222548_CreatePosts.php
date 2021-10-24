<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePosts extends AbstractMigration
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
        $table = $this->table('posts');

        $table->addColumn('user_id', 'integer', [
            'null' => false
        ])->addForeignKey('user_id', 'users');

        $table->addColumn('title', 'string', [
            'null' => false,
            'limit' => 255
        ]);

        $table->addColumn('slug', 'string', [
            'null' => false,
            'limit' => 255
        ]);

        $table->addColumn('body', 'text');

        $table->addColumn('published', 'boolean', [
            'null' => false,
            'default' => false
        ]);

        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');

        $table->addIndex('slug', [
            'name' => 'UNIQUE_SLUG',
            'unique' => true
        ]);

        $table->create();
    }
}
