<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class KinhMach extends AbstractMigration
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
        $table = $this->table("kinh_mach");
        $table
            ->addColumn("name", "string", ["null" => true, "limit" => 256])
            ->addColumn("slug", "string", ["null" => true, "limit" => 256])
            ->addIndex("slug")
            ->addColumn("school_id", "integer", ["null" => true])
            ->addColumn("max_level", "smallinteger", ["null" => true])
            ->addColumn("type", "string", ["null" => true, "limit" => 1]) // 0: duong, 1: cuong, 2: am, 3: nhu, 4: thai cuc
            ->addColumn("desc", "text", ["null" => true])
            ->addColumn("chi_so_tien_cu_noi", "smallinteger", ["null" => true])
            ->addColumn("chi_so_tien_cu_ngoai", "smallinteger", ["null" => true])
            ->addColumn("chi_so_them", "text", ["null" => true])
            ->addColumn("order_num", "integer", ["null" => true])
            ->addIndex("order_num")
            ->addColumn("created_at", "timestamp", ["null" => true, "default" => "CURRENT_TIMESTAMP", "timezone" => false])
            ->addColumn("updated_at", "timestamp", ["null" => true, "timezone" => false])
            ->create();
    }
}
