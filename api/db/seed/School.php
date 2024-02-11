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
    public function run()
    {
        $data = [
            [
                "id" => 1,
                "name" => "Thiếu Lâm",
                "type" => "0",
                "slug" => "thieu-lam",
                "order_num" => 1
            ],
            [
                "id" => 2,
                "name" => "Võ Đang",
                "type" => "0",
                "slug" => "vo-dang",
                "order_num" => 2
            ],
            [
                "id" => 3,
                "name" => "Nga My",
                "type" => "0",
                "slug" => "nga-my",
                "order_num" => 3
            ],
            [
                "id" => 4,
                "name" => "Cái Bang",
                "type" => "0",
                "slug" => "cai-bang",
                "order_num" => 4
            ],
            [
                "id" => 5,
                "name" => "Đường Môn",
                "type" => "0",
                "slug" => "duong-mon",
                "order_num" => 5
            ],
            [
                "id" => 6,
                "name" => "Cực Lạc Cốc",
                "type" => "0",
                "slug" => "cuc-lac-coc",
                "order_num" => 6
            ],
            [
                "id" => 7,
                "name" => "Cẩm Y Vệ",
                "type" => "0",
                "slug" => "cam-y-ve",
                "order_num" => 7
            ],
            [
                "id" => 8,
                "name" => "Quân Tử Đường",
                "type" => "0",
                "slug" => "quan-tu-duong",
                "order_num" => 8
            ],
            [
                "id" => 9,
                "name" => "Minh Giáo",
                "type" => "0",
                "slug" => "minh-giao",
                "order_num" => 9
            ],
            [
                "id" => 10,
                "name" => "Thiên Sơn",
                "type" => "0",
                "slug" => "thien-son",
                "order_num" => 10
            ],
            // -----
            [
                "id" => 11,
                "name" => "Kim Châm Thẩm Gia",
                "type" => "1",
                "slug" => "kim-cham-tham-gia",
                "order_num" => 11
            ],
            [
                "id" => 12,
                "name" => "Di Hoa Cung",
                "type" => "1",
                "slug" => "di-hoa-cung",
                "order_num" => 12
            ],
            [
                "id" => 13,
                "name" => "Từ Gia Trang",
                "type" => "1",
                "slug" => "tu-gia-trang",
                "order_num" => 13
            ],
            [
                "id" => 14,
                "name" => "Vô Căn Môn",
                "type" => "1",
                "slug" => "vo-can-mon",
                "order_num" => 14
            ],
            [
                "id" => 15,
                "name" => "Đào Hoa Đảo",
                "type" => "1",
                "slug" => "dao-hoa-dao",
                "order_num" => 15
            ],
            [
                "id" => 25,
                "name" => "Vạn Thú Sơn Trang",
                "type" => "1",
                "slug" => "van-thu-son-trang",
                "order_num" => 16
            ],
            // ----
            [
                "id" => 16,
                "name" => "Huyết Đao Môn",
                "type" => "2",
                "slug" => "huyet-dao-mon",
                "order_num" => 17
            ],
            [
                "id" => 17,
                "name" => "Cổ Mộ",
                "type" => "2",
                "slug" => "co-mo",
                "order_num" => 18
            ],
            [
                "id" => 18,
                "name" => "Trường Phong Tiêu Cục",
                "type" => "2",
                "slug" => "truong-phong-tieu-cuc",
                "order_num" => 19
            ],
            [
                "id" => 19,
                "name" => "Niệm La Bá",
                "type" => "2",
                "slug" => "niem-la-ba",
                "order_num" => 20
            ],
            [
                "id" => 20,
                "name" => "Thần Thủy Cung",
                "type" => "2",
                "slug" => "than-thuy-cung",
                "order_num" => 21
            ],
            [
                "id" => 21,
                "name" => "Hoa Sơn",
                "type" => "2",
                "slug" => "hoa-son",
                "order_num" => 22
            ],
            [
                "id" => 22,
                "name" => "Ngũ Tiên Giáo",
                "type" => "2",
                "slug" => "ngu-tien",
                "order_num" => 23
            ],
            [
                "id" => 23,
                "name" => "Đạt Ma",
                "type" => "2",
                "slug" => "dat-ma",
                "order_num" => 24
            ],
            [
                "id" => 24,
                "name" => "Thần Cơ Doanh",
                "type" => "2",
                "slug" => "than-co-doanh",
                "order_num" => 25
            ],
            [
                "id" => 26,
                "name" => "Tinh Miễu Các",
                "type" => "2",
                "slug" => "tinh-mieu-cac",
                "order_num" => 26
            ],
            //---
            [
                "id" => 99,
                "name" => "Giang Hồ",
                "type" => "3",
                "slug" => "giang-ho",
                "order_num" => 99
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
