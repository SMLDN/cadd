<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Skill extends AbstractMigration
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
        $table = $this->table("skill");
        $table->addColumn("set_id", "integer", ["null" => true])
            ->addIndex("set_id")
            ->addColumn("slug", "string", ["null" => true, "limit" => 256])
            ->addColumn("name", "string", ["null" => true, "limit" => 256])
            ->addColumn("effect_type", "string", ["null" => true, "limit" => 1])
            ->addColumn("lock_flg", "string", ["null" => true, "limit" => 1])
            ->addColumn("max_level", "integer", ["null" => true])
            ->addColumn("power", "integer", ["null" => true])
            ->addColumn("photo", "string", ["null" => true, "limit" => 256])

            ->addColumn("created_at", "timestamp", ["null" => true, "default" => "CURRENT_TIMESTAMP", "timezone" => false])
            ->addColumn("updated_at", "timestamp", ["null" => true, "timezone" => false])
            ->create();
    }
}
