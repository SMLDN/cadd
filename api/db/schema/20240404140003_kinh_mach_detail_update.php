<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class KinhMachDetailUpdate extends AbstractMigration
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
        $table = $this->table("kinh_mach_detail");
        $table->addColumn("uy_luc_can_than", "integer", ["null" => true])
            ->addColumn("uy_luc_noi", "integer", ["null" => true])
            ->addColumn("am_sat_thuong_boi", "string", ["null" => true])
            ->addColumn("nhu_sat_thuong_boi", "string", ["null" => true])
            ->addColumn("hoi_do_don", "integer", ["null" => true])
            ->addColumn("hoi_khinh_cong", "integer", ["null" => true])
            ->addColumn("do_don", "integer", ["null" => true])
            ->addColumn("sat_thuong_ngoai", "integer", ["null" => true])
            ->addColumn("sat_thuong_xa", "integer", ["null" => true])
            ->addColumn("toc_do_khinh_cong", "integer", ["null" => true])
            ->addColumn("cu_ly_khinh_cong", "integer", ["null" => true])
            ->addColumn("toc_do_nhc", "integer", ["null" => true])
            ->addColumn("cu_ly_nhc", "integer", ["null" => true])
            ->addColumn("ty_le_do_don", "integer", ["null" => true]);
        $table->update();
    }
}
