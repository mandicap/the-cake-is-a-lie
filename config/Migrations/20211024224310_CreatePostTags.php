<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePostTags extends AbstractMigration
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
        $table = $this->table('post_tags');

        $table->addColumn('post_id', 'integer', [
            'null' => false,
        ]);

        $table->addColumn('tag_id', 'integer', [
            'null' => false,
        ]);

        $table->addForeignKey('post_id', 'posts');
        $table->addForeignKey('tag_id', 'tags');

        $table->create();
    }
}
