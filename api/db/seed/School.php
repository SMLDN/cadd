<?php


use Phinx\Seed\AbstractSeed;

class School extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = [
            [
                "id" => 1,
                "name" => "Thiếu Lâm",
                "type" => "0",
                "slug" => "thieu-lam",
            ],
            [
                "id" => 2,
                "name" => "Võ Đang",
                "type" => "0",
                "slug" => "vo-dang",
            ],
            [
                "id" => 3,
                "name" => "Nga My",
                "type" => "0",
                "slug" => "nga-my",
            ],
            [
                "id" => 4,
                "name" => "Cái Bang",
                "type" => "0",
                "slug" => "cai-bang",
            ],
            [
                "id" => 5,
                "name" => "Đường Môn",
                "type" => "0",
                "slug" => "duong-mon",
            ],
            [
                "id" => 6,
                "name" => "Cực Lạc Cốc",
                "type" => "0",
                "slug" => "cuc-lac-coc",
            ],
            [
                "id" => 7,
                "name" => "Cẩm Y Vệ",
                "type" => "0",
                "slug" => "cam-y-ve",
            ],
            [
                "id" => 8,
                "name" => "Quân Tử Đường",
                "type" => "0",
                "slug" => "quan-tu-duong",
            ],
            [
                "id" => 9,
                "name" => "Minh Giáo",
                "type" => "0",
                "slug" => "minh-giao",
            ],
            [
                "id" => 10,
                "name" => "Thiên Sơn",
                "type" => "0",
                "slug" => "thien-son",
            ],
            [
                "id" => 11,
                "name" => "Côn Luân",
                "type" => "0",
                "slug" => "con-luan",
            ],
            // -----
            [
                "id" => 20,
                "name" => "Kim Châm Thẩm Gia",
                "type" => "1",
                "slug" => "kim-cham-tham-gia",
            ],
            [
                "id" => 21,
                "name" => "Di Hoa Cung",
                "type" => "1",
                "slug" => "di-hoa-cung",
            ],
            [
                "id" => 22,
                "name" => "Từ Gia Trang",
                "type" => "1",
                "slug" => "tu-gia-trang",
            ],
            [
                "id" => 23,
                "name" => "Vô Căn Môn",
                "type" => "1",
                "slug" => "vo-can-mon",
            ],
            [
                "id" => 24,
                "name" => "Đào Hoa Đảo",
                "type" => "1",
                "slug" => "dao-hoa-dao",
            ],
            [
                "id" => 25,
                "name" => "Vạn Thú Sơn Trang",
                "type" => "1",
                "slug" => "van-thu-son-trang",
            ],
            // ----
            [
                "id" => 40,
                "name" => "Huyết Đao Môn",
                "type" => "2",
                "slug" => "huyet-dao-mon",
            ],
            [
                "id" => 41,
                "name" => "Cổ Mộ",
                "type" => "2",
                "slug" => "co-mo",
            ],
            [
                "id" => 42,
                "name" => "Trường Phong Tiêu Cục",
                "type" => "2",
                "slug" => "truong-phong-tieu-cuc",
            ],
            [
                "id" => 43,
                "name" => "Niệm La Bá",
                "type" => "2",
                "slug" => "niem-la-ba",
            ],
            [
                "id" => 44,
                "name" => "Thần Thủy Cung",
                "type" => "2",
                "slug" => "than-thuy-cung",
            ],
            [
                "id" => 45,
                "name" => "Hoa Sơn",
                "type" => "2",
                "slug" => "hoa-son",
            ],
            [
                "id" => 46,
                "name" => "Ngũ Tiên Giáo",
                "type" => "2",
                "slug" => "ngu-tien",
            ],
            [
                "id" => 47,
                "name" => "Đạt Ma",
                "type" => "2",
                "slug" => "dat-ma",
            ],
            [
                "id" => 48,
                "name" => "Thần Cơ Doanh",
                "type" => "2",
                "slug" => "than-co-doanh",
            ],
            [
                "id" => 49,
                "name" => "Tinh Miễu Các",
                "type" => "2",
                "slug" => "tinh-mieu-cac",
            ],
            [
                "id" => 50,
                "name" => "Thiên Nhai Hải Các",
                "type" => "2",
                "slug" => "thien-nhai-hai-cac",
            ],
            //---
            [
                "id" => 99,
                "name" => "Giang Hồ",
                "type" => "3",
                "slug" => "giang-ho",
            ],
        ];
        $table = $this->table("school");
        $table->truncate();

        foreach ($data as $d) {
            $d["created_at"] = date("Y-m-d H:i:s");
            $d["updated_at"] = date("Y-m-d H:i:s");
            $table->insert($d)
                ->save();
        }
    }
}
