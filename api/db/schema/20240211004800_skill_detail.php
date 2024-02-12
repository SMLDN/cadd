<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class SkillDetail extends AbstractMigration
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
        $table = $this->table("skill_detail");
        $table->addColumn("skill_id", "integer", ["null" => true])
            ->addIndex("skill_id")
            ->addColumn("level", "integer", ["null" => true])
            ->addColumn("cool_down_time", "integer", ["null" => true])
            ->addColumn("hit_shape_para2", "integer", ["null" => true])
            ->addColumn("consume_mp", "integer", ["null" => true])
            ->addColumn("consume_sp", "integer", ["null" => true])
            ->addColumn("tu_vi_tien_cap", "integer", ["null" => true])
            ->addColumn("desc", "text", ["null" => true])
            ->addColumn("dmg_formula", "text", ["null" => true])

            ->addColumn("created_at", "timestamp", ["null" => true, "default" => "CURRENT_TIMESTAMP", "timezone" => false])
            ->addColumn("updated_at", "timestamp", ["null" => true, "timezone" => false])
            ->create();
    }
}
