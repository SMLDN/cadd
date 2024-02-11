<?php


use Phinx\Seed\AbstractSeed;

class KinhMach extends AbstractSeed
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
                "name" => "Thủ Thái Âm Phế",
                "slug" => "thu-thai-am-phe",
                "school_id" => 3,
                "max_level" => 216,
                "type" => "1", //cuong
                "desc" => "Theo [Linh Khu] ghi chép, đây là mạch chính của Thủ Tam Âm, khống chế thể chất con người. Mạch này yếu thì gầy ốm, mạnh thì cường tráng. Là mạch mà người tập võ phải luyện. Tiến cử người chơi bộ võ nội công (Sát thương Âm, Dương, Cương, Nhu) khai thông",
                "chi_so_tien_cu_noi" => 4,
                "chi_so_tien_cu_ngoai" => 3,
                "chi_so_them" => "Nội Lực: +200",
                "order_num" => 2
            ],
            [
                "id" => 2,
                "name" => "Thủ Thái Âm Phế-Nghịch",
                "slug" => "thu-thai-am-phe-nghich",
                "school_id" => 20,
                "max_level" => 216,
                "type" => "3", //nhu
                "desc" => "Bắt đầu từ phần phổi đoạn giữa dạ dày, trượt xuống Xích Trạch, đi đến Kinh Cừ, nhập vào Ngư Tế, đi đến Thiếu Thương của ngón cái. Tiến cử người chơi bộ nội công (Sát thương âm, dương, cương, nhu) khai thông",
                "chi_so_tien_cu_noi" => 5,
                "chi_so_tien_cu_ngoai" => 3,
                "chi_so_them" => "Nội Lực: +200",
                "order_num" => 3
            ],
            [
                "id" => 3,
                "name" => "Thủ Thiếu Dương Tam Tiêu",
                "slug" => "thu-thieu-duong-tam-tieu",
                "school_id" => 6,
                "max_level" => 216,
                "type" => "0", //duong
                "desc" => "Mạch chính của Thủ Tam Dương, cùng có tên là Liệt Phong Kinh với Túc Thiếu Dương Đảm Kinh. Kiểm soát sức lực toàn thân, mạch này nếu bị thương sẽ dẫn đến kiệt sức, cần bảo vệ cẩn thận. Tiến cử cho người chơi bộ võ nội công (sát thương Âm, Dương, Cương, Nhu) khai thông",
                "chi_so_tien_cu_noi" => 5,
                "chi_so_tien_cu_ngoai" => 1,
                "chi_so_them" => "Hồi Nội Lực: +12",
                "order_num" => 4
            ],
            [
                "id" => 4,
                "name" => "Thủ Thiếu Dương Tam Tiêu-Nghịch",
                "slug" => "thu-thieu-duong-tam-tieu-nghich",
                "school_id" => 22,
                "max_level" => 216,
                "type" => "0", //duong
                "desc" => "Mạch chính của Thủ Tam Dương, cùng có tên là Liệt Phong Kinh với Túc Thiếu Dương Đảm Kinh. Kiểm soát sức lực toàn thân, mạch này nếu bị thương sẽ dẫn đến kiệt sức, cần bảo vệ cẩn thận. Tiến cử cho người chơi bộ võ nội công (sát thương Âm, Dương, Cương, Nhu) khai thông",
                "chi_so_tien_cu_noi" => 5,
                "chi_so_tien_cu_ngoai" => 1,
                "chi_so_them" => "Hồi Nội Lực: +12",
                "order_num" => 5
            ],
            [
                "id" => 5,
                "name" => "Thủ Thái Dương Tiểu Trường",
                "slug" => "thu-thai-duong-tieu-truong",
                "school_id" => 4,
                "max_level" => 216,
                "type" => "0", //duong
                "desc" => "Hợp với Tam Âm chủ mạch, giúp thể phách của người tu luyện thêm kiên cố, tăng sức chống cự. Tiến cử cho người chơi bộ võ nội công (sát thương Âm, Dương, Cương, Nhu) khai thông",
                "chi_so_tien_cu_noi" => 4,
                "chi_so_tien_cu_ngoai" => 2,
                "chi_so_them" => "Uy lực cận thân: +50",
                "order_num" => 6
            ],
            [
                "id" => 6,
                "name" => "Thủ Thái Dương Tiểu Trường-Nghịch",
                "slug" => "thu-thai-duong-tieu-truong-nghich",
                "school_id" => 18,
                "max_level" => 216,
                "type" => "1", //cuong
                "desc" => "Bắt đầu từ Tiểu Trạch của ngón út, men theo phía ngoài cánh tay đi lên bả vai, nhập vào Khuyết Bồn, liên hệ với tim, men theo thực quản xuống dạ dày, kết nối với ruột non, một tĩnh mạch từ xương quai xanh chạy lên má rồi đến góc mắt ngoài và thính quản. Tiến cử người chơi bộ nội công (Sát thương âm, dương, cương, nhu) khai thông",
                "chi_so_tien_cu_noi" => 4,
                "chi_so_tien_cu_ngoai" => 3,
                "chi_so_them" => "Uy lực cận thân: +50",
                "order_num" => 7
            ],
            [
                "id" => 7,
                "name" => "Túc Thiếu Âm Thận",
                "slug" => "tuc-thieu-am-than",
                "school_id" => 2,
                "max_level" => 216,
                "type" => "2", //am
                "desc" => "Một trong Túc Tam Âm Kinh, tương thông với Thủ Thiểu Âm Tâm Kinh. Mạch thông sẽ tăng trí tuệ, nâng cao Nội Tức. Tiến cử cho người chơi bộ võ nội công (sát thương Âm, Dương, Cương, Nhu) khai thông",
                "chi_so_tien_cu_noi" => 2,
                "chi_so_tien_cu_ngoai" => 2,
                "chi_so_them" => "Uy lực nội công: +50",
                "order_num" => 8
            ],
            [
                "id" => 8,
                "name" => "Túc Thiếu Âm Thận-Nghịch",
                "slug" => "tuc-thieu-am-than-nghich",
                "school_id" => 17,
                "max_level" => 216,
                "type" => "0", //duong
                "desc" => "Bắt đầu từ dưới ngón chân út, nghiêng hướng Sung Tuyền, từ mắt cá chân đến mặt trong cẳng chân, từ phía trong đùi men phía sau đến Trường Cường, từ cột sống vào thận, từ kinh mạch đường thẳng ở thận hướng lên qua gan và cơ hoành vào trong phổi, một mạch từ phổi ra, chụp lại ở tim, chảy vào trong ngực qua Du Phủ Huyệt. Tiến cử người chơi bộ nội công (Sát thương âm, dương, cương, nhu) khai thông",
                "chi_so_tien_cu_noi" => 3,
                "chi_so_tien_cu_ngoai" => 3,
                "chi_so_them" => "Uy lực nội công: +50",
                "order_num" => 9
            ],
            [
                "id" => 9,
                "name" => "Túc Quyết Âm Can",
                "slug" => "tuc-quyet-am-can",
                "school_id" => 8,
                "max_level" => 216,
                "type" => "3", //nhu
                "desc" => "Một trong Túc Tam Âm Kinh, tương thông với Thủ Quyết Âm Kinh Dao, tăng cường khí huyết. Tiến cử cho người chơi bộ võ nội công (sát thương Âm, Dương, Cương, Nhu) khai thông",
                "chi_so_tien_cu_noi" => 5,
                "chi_so_tien_cu_ngoai" => 1,
                "chi_so_them" => "Hồi khí huyết: +19",
                "order_num" => 10
            ],
            [
                "id" => 10,
                "name" => "Túc Quyết Âm Can-Nghịch",
                "slug" => "tuc-quyet-am-can-nghich",
                "school_id" => 21,
                "max_level" => 216,
                "type" => "4", //thai cuc
                "desc" => "Bắt đầu từ Đại Đôn, men sau chân đến mắt cá chân, từ phía sau chân lên bụng, kẹp bên cạnh dạ dày thuộc gan túi mật, đi lên cơ hoành rồi tỏa ra sườn. Tiến cử người chơi bộ nội công (Sát thương âm, dương, cương, nhu) khai thông",
                "chi_so_tien_cu_noi" => 5,
                "chi_so_tien_cu_ngoai" => 5,
                "chi_so_them" => "Hồi khí huyết: +19",
                "order_num" => 11
            ],
            [
                "id" => 11,
                "name" => "Túc Thái Âm Tỳ",
                "slug" => "tuc-thai-am-ty",
                "school_id" => 5,
                "max_level" => 216,
                "type" => "4", //thai cuc
                "desc" => "Đứng đầu Túc Tam Âm, mạch cốt yếu trong 12 mạch chủ, gọi là Tinh Kinh. Mạch này thông sẽ gia tăng Nội Lực, võ học sẽ tiến bộ vượt bậc. Tiến cử người chơi bộ võ ngoại công (sát thương ngoại công) khai thông",
                "chi_so_tien_cu_noi" => 2,
                "chi_so_tien_cu_ngoai" => 5,
                "chi_so_them" => "Sức đỡ đòn hồi: +30",
                "order_num" => 12
            ],
            [
                "id" => 12,
                "name" => "Túc Thái Âm Tỳ-Nghịch",
                "slug" => "tuc-thai-am-ty-nghich",
                "school_id" => 19,
                "max_level" => 216,
                "type" => "2", //am
                "desc" => "Đứng đầu Túc Tam Âm, mạch cốt yếu trong 12 mạch chủ, gọi là Tinh Kinh. Mạch này thông sẽ gia tăng Nội Lực, võ học sẽ tiến bộ vượt bậc. Tiến cử người chơi bộ võ ngoại công (sát thương ngoại công) khai thông",
                "chi_so_tien_cu_noi" => 2,
                "chi_so_tien_cu_ngoai" => 5,
                "chi_so_them" => "Sức đỡ đòn hồi: +30",
                "order_num" => 13
            ],
            [
                "id" => 13,
                "name" => "Túc Thiếu Dương Đảm",
                "slug" => "tuc-thieu-duong-dam",
                "school_id" => 7,
                "max_level" => 216,
                "type" => "3", //nhu
                "desc" => "Đây là chủ mạch của Tam Dương Kinh, tu luyện cùng Thủ Tam Tiêu Kinh sẽ giúp người tu luyện có sức mạnh vô song, không ai địch nổi. Tiến cử người chơi bộ võ ngoại công (sát thương ngoại công) khai thông",
                "chi_so_tien_cu_noi" => 2,
                "chi_so_tien_cu_ngoai" => 5,
                "chi_so_them" => "Sức đỡ đòn: +600",
                "order_num" => 14
            ],
            [
                "id" => 14,
                "name" => "Túc Thiếu Dương Đảm-Nghịch",
                "slug" => "tuc-thieu-duong-dam-nghich",
                "school_id" => 16,
                "max_level" => 216,
                "type" => "4", //thai cuc
                "desc" => "Bắt đầu từ Đồng Tử Liêu Huyệt ở ngoài mắt, lên đến sau góc đầu xuống Phong Trì sau tai, từ Khuyết Bồn đi xuống nách, men theo ngực đi qua Quý Hiếp và mạch nhánh ở dưới xương lớn của xương chậu sẽ men theo mặt ngoài của bắp đùi chạy thẳng đến chân, qua Khiếu Âm  từ Lâm Khấp đến ngón thứ 4. Tiến cử người chơi bộ ngoại công (Sát thương ngoại công) khai thông",
                "chi_so_tien_cu_noi" => 2,
                "chi_so_tien_cu_ngoai" => 5,
                "chi_so_them" => "Sức đỡ đòn: +600",
                "order_num" => 15
            ],
            [
                "id" => 15,
                "name" => "Túc Dương Minh Vị",
                "slug" => "tuc-duong-minh-vi",
                "school_id" => 1,
                "max_level" => 216,
                "type" => "4", //thai cuc
                "desc" => "Đây là một trong những mạch của Túc Tam Dương Kinh, có công hiệu giống Đại Trường Kinh của Thủ Tam Dương, tăng độ linh hoạt của chân, giúp người tu luyện nhẹ như lông vũ, nhanh như thỏ.<br>Tiến cử người chơi bộ võ ngoại công (sát thương ngoại công) khai thông",
                "chi_so_tien_cu_noi" => 3,
                "chi_so_tien_cu_ngoai" => 4,
                "chi_so_them" => "Khí huyết: +300",
                "order_num" => 16
            ],
            [
                "id" => 16,
                "name" => "Túc Dương Minh Vị-Nghịch",
                "slug" => "tuc-duong-minh-vi-nghich",
                "school_id" => 23,
                "max_level" => 216,
                "type" => "2", //am
                "desc" => "Bắt đầu ở Thừa Khấp chỗ cánh mũi, men theo họng xuống Đại Chùy, vào Khuyết Bồn, đi sâu vào khoang, từ môn vị chỗ dạ dày chia ra, men theo ổ bụng đến Khí Xung, xuống sườn trước bắp đùi, đến xương bánh chè, men theo xương ống đến bàn chân, vào mặt ngoài xương ngón chân (Lệ Đoái Huyệt). Tiến cử người chơi bộ ngoại công (Sát thương ngoại công) khai thông",
                "chi_so_tien_cu_noi" => 2,
                "chi_so_tien_cu_ngoai" => 5,
                "chi_so_them" => "Khí huyết: +300",
                "order_num" => 17
            ],
            [
                "id" => 17,
                "name" => "Thủ Dương Minh Đại Trường",
                "slug" => "thu-duong-minh-dai-truong",
                "school_id" => 9,
                "max_level" => 216,
                "type" => "1", //cuong
                "desc" => "Một trong Thủ Tam Dương Kinh, nếu đồng tu với Túc Dương Minh Vị, thì có thể khiến xuất thủ như điện, hành động như gió. Tiến cử người chơi bộ võ ngoại công (sát thương ngoại công) khai thông",
                "chi_so_tien_cu_noi" => 3,
                "chi_so_tien_cu_ngoai" => 3,
                "chi_so_them" => "Khí huyết: +300",
                "order_num" => 18
            ],
            [
                "id" => 18,
                "name" => "Thủ Dương Minh Đại Trường-Nghịch",
                "slug" => "thu-duong-minh-dai-truong-nghich",
                "school_id" => 24,
                "max_level" => 216,
                "type" => "3", //nhu
                "desc" => "Giờ mão bắt đầu vận hành, giờ mão là giờ sinh, bắt đầu từ Thương Dương, kết thúc ở Nghênh Hương. Tiến cử người chơi bộ ngoại công (Sát thương ngoại công) khai thông",
                "chi_so_tien_cu_noi" => 4,
                "chi_so_tien_cu_ngoai" => 4,
                "chi_so_them" => "Khí huyết: +300",
                "order_num" => 19
            ],
            [
                "id" => 19,
                "name" => "Túc Thái Dương Bàng Quang",
                "slug" => "tuc-thai-duong-bang-quang",
                "school_id" => 10,
                "max_level" => 216,
                "type" => "2", //am
                "desc" => "Mạch phụ trách hoạt động khí huyết, là một trong ba kinh mạch dương của bàn chân, học kinh mạch này xong có thể giúp người học võ tự do khống chế kinh mạch toàn thân, thoải mái hơn khi gặp hiểm nguy. Tiến cử bộ nội ngoại công (sát thương nội ngoại công ) khai thông",
                "chi_so_tien_cu_noi" => 3,
                "chi_so_tien_cu_ngoai" => 3,
                "chi_so_them" => "Khí huyết: +300",
                "order_num" => 20
            ],
            [
                "id" => 20,
                "name" => "Túc Thái Dương Bàng Quang-Nghịch",
                "slug" => "tuc-thai-duong-bang-quang-nghich",
                "school_id" => 26,
                "max_level" => 216,
                "type" => "0", //duong
                "desc" => "Bắt đầu từ mắt lên búi tóc, từ phía sau đầu men theo hai sườn cột sống đến cuối đường chính giữa phía sau chân, đến chí âm của sườn ngoài ngón chân nhỏ. Tiến cử bộ nội ngoại công (Sát thương nội ngoại công) khai thông",
                "chi_so_tien_cu_noi" => 3,
                "chi_so_tien_cu_ngoai" => 3,
                "chi_so_them" => "Khí huyết: +300",
                "order_num" => 21
            ],

        ];
        $table = $this->table("kinh_mach");
        $table->truncate();

        foreach ($data as $d) {
            $d["created_at"] = date("Y-m-d H:i:s");
            $d["updated_at"] = date("Y-m-d H:i:s");
            $table->insert($d)
                ->save();
        }
    }
}
