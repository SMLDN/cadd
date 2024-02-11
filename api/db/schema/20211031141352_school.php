<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class School extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table("school");
        $table->addColumn("name", "string", ["null" => true, "limit" => 256])
            ->addColumn("type", "string", ["null" => true, "limit" => 1])
            ->addColumn("slug", "string", ["null" => true, "limit" => 256])
            ->addIndex("slug")
            ->addColumn("created_at", "timestamp", ["null" => true, "default" => "CURRENT_TIMESTAMP", "timezone" => false])
            ->addColumn("updated_at", "timestamp", ["null" => true, "timezone" => false])
            ->create();
    }
}
