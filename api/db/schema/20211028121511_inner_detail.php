<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class InnerDetail extends AbstractMigration
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
        $table = $this->table("inner_detail");
        $table
            ->addColumn("inner_id", "integer", ["null" => true])
            ->addIndex("inner_id")
            ->addColumn("level", "integer", ["null" => true])
            ->addColumn("point", "integer", ["null" => true])
            ->addColumn("luc_tay", "integer", ["null" => true])
            ->addColumn("than_phap", "integer", ["null" => true])
            ->addColumn("noi_tuc", "integer", ["null" => true])
            ->addColumn("canh_khi", "integer", ["null" => true])
            ->addColumn("the_phach", "integer", ["null" => true])
            ->addColumn("max_parry", "integer", ["null" => true])
            ->addColumn("max_hp", "integer", ["null" => true])
            ->addColumn("max_mp", "integer", ["null" => true])
            ->addColumn("inner_def", "integer", ["null" => true])
            ->addColumn("effect_level", "smallinteger", ["null" => true])
            ->addColumn("tu_vi_tien_cap", "integer", ["null" => true])
            ->addColumn("tu_vi_tong", "integer", ["null" => true])
            ->addColumn("created_at", "timestamp", ["null" => true, "default" => "CURRENT_TIMESTAMP", "timezone" => false])
            ->addColumn("updated_at", "timestamp", ["null" => true, "timezone" => false])
            ->create();
    }
}
