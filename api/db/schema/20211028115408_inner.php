<?php
declare (strict_types = 1);

use Phinx\Migration\AbstractMigration;

final class Inner extends AbstractMigration
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
        $table = $this->table("inner");
        $table
            ->addColumn("name", "string", ["null" => true, "limit" => 256])
            ->addColumn("slug", "string", ["null" => true, "limit" => 256])
            ->addIndex("slug")
            ->addColumn("max_level", "smallinteger", ["null" => true])
            ->addColumn("rank", "smallinteger", ["null" => true])
            ->addColumn("max_rage", "smallinteger", ["null" => true])
            ->addColumn("school_id", "integer", ["null" => true])
            ->addColumn("type", "string", ["null" => true, "limit" => 1])
            ->addColumn("effect", "text", ["null" => true])
            ->addColumn("effect_ext", "text", ["null" => true])
            ->addColumn("desc", "text", ["null" => true])
            ->addColumn("created_at", "timestamp", ["null" => true, "default" => "CURRENT_TIMESTAMP", "timezone" => false])
            ->addColumn("updated_at", "timestamp", ["null" => true, "timezone" => false])
            ->create();
    }
}
