<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class Set extends AbstractSeed
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
                "name" => "Thái Tổ Trường Quyền",
                "type" => "cs_ks"
            ],
            [
                "id" => 2,
                "name" => "La Hán Quyền",
                "type" => "cs_ks"
            ],
            [
                "id" => 3,
                "name" => "Long Trảo Thủ (Cổ)",
                "type" => "cs_ks"
            ],
            [
                "id" => 4,
                "name" => "Thái Cực Quyền (Cổ)",
                "type" => "cs_ks"
            ],
            [
                "id" => 5,
                "name" => "Kim Đỉnh Miên Chưởng",
                "type" => "cs_ks"
            ],
            [
                "id" => 6,
                "name" => "Phiêu Tuyết Xuyên Vân Chưởng",
                "type" => "cs_ks"
            ],
            [
                "id" => 7,
                "name" => "Tiêu Dao Thoái Pháp",
                "type" => "cs_ks"
            ],
            [
                "id" => 8,
                "name" => "Ưng Trảo Quyền",
                "type" => "cs_ks"
            ],
            [
                "id" => 9,
                "name" => "Liên Hoa Chưởng",
                "type" => "cs_ks"
            ],
            [
                "id" => 10,
                "name" => "Hủ Cốt Chưởng",
                "type" => "cs_ks"
            ],
            [
                "id" => 11,
                "name" => "Ma Tâm Liên Hoàn Thủ",
                "type" => "cs_ks"
            ],
            [
                "id" => 12,
                "name" => "Cửu Âm Bạch Cốt Trảo",
                "type" => "cs_ks"
            ],
            [
                "id" => 13,
                "name" => "Thiên Sơn Lục Dương Chưởng",
                "type" => "cs_ks"
            ],
            [
                "id" => 14,
                "name" => "Đường Lang Quyền",
                "type" => "cs_ks"
            ],
            [
                "id" => 15,
                "name" => "Điêu Linh",
                "type" => "cs_ks"
            ],
            [
                "id" => 16,
                "name" => "Thanh Vân Chưởng Pháp",
                "type" => "cs_ks"
            ],
            [
                "id" => 17,
                "name" => "Thái Cực Quyền",
                "type" => "cs_ks"
            ],
            [
                "id" => 18,
                "name" => "Long Trảo Thủ",
                "type" => "cs_ks"
            ],
            [
                "id" => 19,
                "name" => "Thiết Đầu Công",
                "type" => "cs_ks"
            ],
            [
                "id" => 20,
                "name" => "Hàng Long Thập Ba Chưởng",
                "type" => "cs_ks"
            ],
            [
                "id" => 21,
                "name" => "Khôi Tinh Thích Đấu",
                "type" => "cs_ks"
            ],
            [
                "id" => 22,
                "name" => "Dã Cầu Quyền",
                "type" => "cs_ks"
            ],
            [
                "id" => 23,
                "name" => "Hoa Thần Thất Thức",
                "type" => "cs_ks"
            ],
            [
                "id" => 24,
                "name" => "Túy Bát Tiên",
                "type" => "cs_ks"
            ],
            [
                "id" => 25,
                "name" => "Long Hổ Bá Vương Quyền",
                "type" => "cs_ks"
            ],
            [
                "id" => 26,
                "name" => "Can Trại Liệt Hỏa Chưởng",
                "type" => "cs_ks"
            ],
            [
                "id" => 27,
                "name" => "Toàn Phong Tảo Diệp Thoái",
                "type" => "cs_ks"
            ],
            [
                "id" => 28,
                "name" => "Hoa Thần Thất Thức(Vô Khuyết)",
                "type" => "cs_ks"
            ],
            [
                "id" => 29,
                "name" => "Phật Tâm Chưởng",
                "type" => "cs_ks"
            ],
            [
                "id" => 30,
                "name" => "Tham Hợp Chỉ",
                "type" => "cs_ks"
            ],
            [
                "id" => 31,
                "name" => "Nam Dương Quyền Pháp",
                "type" => "cs_ks"
            ],
            [
                "id" => 32,
                "name" => "Nam Nhân Kiến Bất Đắc",
                "type" => "cs_ks"
            ],
            [
                "id" => 33,
                "name" => "Diện Mục Toàn Phi Cước",
                "type" => "cs_ks"
            ],
            [
                "id" => 34,
                "name" => "Thiên Ma Vũ",
                "type" => "cs_ks"
            ],
            [
                "id" => 35,
                "name" => "Thệ Thủy Quyết",
                "type" => "cs_ks"
            ],
            [
                "id" => 36,
                "name" => "Hàng Long Chưởng Pháp",
                "type" => "cs_ks"
            ],
            [
                "id" => 37,
                "name" => "Thiên Thù Vạn Độc Thủ",
                "type" => "cs_ks"
            ],
            [
                "id" => 38,
                "name" => "Đại Từ Đại Bi Thiên Diệp Thủ",
                "type" => "cs_ks"
            ],
            [
                "id" => 39,
                "name" => "Giáng Long Thập Bát Chưởng",
                "type" => "cs_ks"
            ],
            [
                "id" => 40,
                "name" => "Hầu Quyền",
                "type" => "cs_ks"
            ],
            [
                "id" => 41,
                "name" => "Triền Hồn Cầm Nã Thủ",
                "type" => "cs_ks"
            ],
            [
                "id" => 42,
                "name" => "Cửu Dương-Tuyệt Học",
                "type" => "cs_ks"
            ],
            [
                "id" => 43,
                "name" => "Ngũ Linh Phổ",
                "type" => "cs_ks"
            ],
            [
                "id" => 44,
                "name" => "Lưu Chuyển Huyết Thần Sát",
                "type" => "cs_ks"
            ],
            [
                "id" => 45,
                "name" => "Tà Dương Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 46,
                "name" => "Thanh Phong Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 47,
                "name" => "Thái Cực Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 48,
                "name" => "Lạc Anh Phi Hoa Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 49,
                "name" => "Ngọc Tiêu Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 50,
                "name" => "Đoạt Mệnh Thập Tam Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 51,
                "name" => "Ngọc Nữ Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 52,
                "name" => "Lưu Sa",
                "type" => "cs_dj"
            ],
            [
                "id" => 53,
                "name" => "Tuyết Trai Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 54,
                "name" => "Độc Cô Cửu Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 55,
                "name" => "Xung Linh Kiếm Pháp (F)",
                "type" => "cs_dj"
            ],
            [
                "id" => 56,
                "name" => "Xung Linh Kiếm Pháp (F)",
                "type" => "cs_dj"
            ],
            [
                "id" => 57,
                "name" => "Mi Lai Nhãn Khứ Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 58,
                "name" => "Thần Long Bắc Võ Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 59,
                "name" => "Mặc Tử Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 60,
                "name" => "Tịch Tà Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 61,
                "name" => "Mị Ảnh Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 62,
                "name" => "Bích Hải Triều Sinh Khúc",
                "type" => "cs_dj"
            ],
            [
                "id" => 63,
                "name" => "Kim Xà Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 64,
                "name" => "Vân Tiêu Phi Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 65,
                "name" => "Tây Dương Kích Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 66,
                "name" => "Toàn Chân Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 67,
                "name" => "Thái Huyền Tương Hoa Kiếm Phổ",
                "type" => "cs_dj"
            ],
            [
                "id" => 68,
                "name" => "Ngọc Nữ Tố Tâm Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 69,
                "name" => "Cù Chi Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 70,
                "name" => "Hoa Sơn Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 71,
                "name" => "Cuồng Phong Khoái Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 72,
                "name" => "Âm Dương Đại Bi Phú",
                "type" => "cs_dj"
            ],
            [
                "id" => 73,
                "name" => "Nhiễu Chỉ Nhu Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 74,
                "name" => "Thiên Nhiên Lý Tâm Lưu",
                "type" => "cs_dj"
            ],
            [
                "id" => 75,
                "name" => "Húc Nhật Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 76,
                "name" => "Thiên Sơn Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 77,
                "name" => "Cửu Nghi Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 78,
                "name" => "Vô Nhai Kiếm Pháp",
                "type" => "cs_sj"
            ],
            [
                "id" => 79,
                "name" => "Lưu Vân Kiếm Pháp",
                "type" => "cs_sj"
            ],
            [
                "id" => 80,
                "name" => "Cửu Cung Kiếm Pháp",
                "type" => "cs_sj"
            ],
            [
                "id" => 81,
                "name" => "Thất Tinh Kiếm",
                "type" => "cs_sj"
            ],
            [
                "id" => 82,
                "name" => "Vũ Quỷ Lục",
                "type" => "cs_sj"
            ],
            [
                "id" => 83,
                "name" => "Thiên Tâm Kiếm Quyết",
                "type" => "cs_sj"
            ],
            [
                "id" => 84,
                "name" => "Tứ Tượng Kiếm Quyết",
                "type" => "cs_sj"
            ],
            [
                "id" => 85,
                "name" => "Ngũ Vĩ Kiếm Quyết",
                "type" => "cs_sj"
            ],
            [
                "id" => 86,
                "name" => "Thiên Nhạc Kiếm Pháp",
                "type" => "cs_sj"
            ],
            [
                "id" => 87,
                "name" => "Vong Xuyên Kiếm Pháp",
                "type" => "cs_sj"
            ],
            [
                "id" => 88,
                "name" => "Tật Quỷ Đao",
                "type" => "cs_dd"
            ],
            [
                "id" => 89,
                "name" => "Thất Hồn Đao Pháp",
                "type" => "cs_dd"
            ],
            [
                "id" => 90,
                "name" => "Đoạn Tình Thất Tuyệt",
                "type" => "cs_dd"
            ],
            [
                "id" => 91,
                "name" => "Viêm Dương Đao Pháp",
                "type" => "cs_dd"
            ],
            [
                "id" => 92,
                "name" => "Huyết Sát Đao Pháp",
                "type" => "cs_dd"
            ],
            [
                "id" => 93,
                "name" => "Cuồng Phong Đao Pháp",
                "type" => "cs_dd"
            ],
            [
                "id" => 94,
                "name" => "Hồ Gia Đao Pháp",
                "type" => "cs_dd"
            ],
            [
                "id" => 95,
                "name" => "Tỉnh Trung Bát Pháp",
                "type" => "cs_dd"
            ],
            [
                "id" => 96,
                "name" => "Bát Quái Đao",
                "type" => "cs_dd"
            ],
            [
                "id" => 97,
                "name" => "Viên Nguyệt Loan Đao",
                "type" => "cs_dd"
            ],
            [
                "id" => 98,
                "name" => "Khốn Thiên Đao Quyết",
                "type" => "cs_dd"
            ],
            [
                "id" => 99,
                "name" => "Huyết Hải Ma Đao Lục",
                "type" => "cs_dd"
            ],
            [
                "id" => 100,
                "name" => "Huyết Đao Quyết",
                "type" => "cs_dd"
            ],
            [
                "id" => 101,
                "name" => "Ngạo Hàn Lục Quyết",
                "type" => "cs_dd"
            ],
            [
                "id" => 102,
                "name" => "Khoáng Hải Thiên Toàn Trảm",
                "type" => "cs_dd"
            ],
            [
                "id" => 103,
                "name" => "Minh Vương Đoạn Ảnh Đao",
                "type" => "cs_dd"
            ],
            [
                "id" => 104,
                "name" => "Thiên Anh Phá Trận Đao",
                "type" => "cs_dd"
            ],
            [
                "id" => 105,
                "name" => "Đãng Khấu Đao",
                "type" => "cs_dd"
            ],
            [
                "id" => 106,
                "name" => "Kinh Hồng Đao Pháp",
                "type" => "cs_sd"
            ],
            [
                "id" => 107,
                "name" => "Uyên Ương Song Đao",
                "type" => "cs_sd"
            ],
            [
                "id" => 108,
                "name" => "Tu La Đao",
                "type" => "cs_sd"
            ],
            [
                "id" => 109,
                "name" => "Huyết Long Tà Phủ",
                "type" => "cs_sd"
            ],
            [
                "id" => 110,
                "name" => "Kim Lộc Thần Đao",
                "type" => "cs_sd"
            ],
            [
                "id" => 111,
                "name" => "Địa Ngục Nhiếp Hồn Đao",
                "type" => "cs_sd"
            ],
            [
                "id" => 112,
                "name" => "Âm Dương Đảo Loạn Đao",
                "type" => "cs_sd"
            ],
            [
                "id" => 113,
                "name" => "Bát Môn Kim Tỏa",
                "type" => "cs_sd"
            ],
            [
                "id" => 114,
                "name" => "Bát Hoang Đao Phổ",
                "type" => "cs_sd"
            ],
            [
                "id" => 115,
                "name" => "Yến Vân Loạn Trần Đao",
                "type" => "cs_sd"
            ],
            [
                "id" => 116,
                "name" => "Kim Xà Thích",
                "type" => "cs_bs"
            ],
            [
                "id" => 117,
                "name" => "Phân Quang Tróc Ảnh Thích",
                "type" => "cs_bs"
            ],
            [
                "id" => 118,
                "name" => "Câu Hồn Thất Đoạt",
                "type" => "cs_bs"
            ],
            [
                "id" => 119,
                "name" => "Đoạt Phách Câu Tâm Thích",
                "type" => "cs_bs"
            ],
            [
                "id" => 120,
                "name" => "Ô Mặc Thước Pháp",
                "type" => "cs_bs"
            ],
            [
                "id" => 121,
                "name" => "Thần Phong Quyết",
                "type" => "cs_bs"
            ],
            [
                "id" => 122,
                "name" => "Thánh Hỏa Lệnh (Cổ)",
                "type" => "cs_bs"
            ],
            [
                "id" => 123,
                "name" => "Quỷ Vương Thích",
                "type" => "cs_bs"
            ],
            [
                "id" => 124,
                "name" => "Yên Chi Huyết",
                "type" => "cs_bs"
            ],
            [
                "id" => 125,
                "name" => "Ẩn Không Nhẫn",
                "type" => "cs_bs"
            ],
            [
                "id" => 126,
                "name" => "Quang Ảnh Minh Diệt Thích",
                "type" => "cs_bs"
            ],
            [
                "id" => 127,
                "name" => "Loạn Thế Bát Mưu",
                "type" => "cs_bs"
            ],
            [
                "id" => 128,
                "name" => "Thiên Tuyệt Địa Diệt Thích",
                "type" => "cs_sc"
            ],
            [
                "id" => 129,
                "name" => "Nghê Thường Động",
                "type" => "cs_sc"
            ],
            [
                "id" => 130,
                "name" => "Thiên La Vũ",
                "type" => "cs_sc"
            ],
            [
                "id" => 131,
                "name" => "Phá Liên Bát Trứ",
                "type" => "cs_sc"
            ],
            [
                "id" => 132,
                "name" => "Cô Tẩy Thích Quyết",
                "type" => "cs_sc"
            ],
            [
                "id" => 133,
                "name" => "Kinh Tuyết Thích",
                "type" => "cs_sc"
            ],
            [
                "id" => 134,
                "name" => "Khuynh Thành Thích",
                "type" => "cs_sc"
            ],
            [
                "id" => 135,
                "name" => "Cổ Nguyệt Tiên Hoàn Quyết",
                "type" => "cs_sc"
            ],
            [
                "id" => 136,
                "name" => "Thiên Ma Thích Quyết",
                "type" => "cs_sc"
            ],
            [
                "id" => 137,
                "name" => "Đạt Ma Côn Pháp",
                "type" => "cs_cg"
            ],
            [
                "id" => 138,
                "name" => "Ngũ Lang Bát Quái Côn",
                "type" => "cs_cg"
            ],
            [
                "id" => 139,
                "name" => "Cầu Bại Côn Pháp",
                "type" => "cs_cg"
            ],
            [
                "id" => 140,
                "name" => "Võ Thánh Côn Pháp",
                "type" => "cs_cg"
            ],
            [
                "id" => 141,
                "name" => "Bá Vương Thương Pháp",
                "type" => "cs_cg"
            ],
            [
                "id" => 142,
                "name" => "Nhạc Gia Thương Pháp",
                "type" => "cs_cg"
            ],
            [
                "id" => 143,
                "name" => "Từ Hàng Phổ Độ Côn",
                "type" => "cs_cg"
            ],
            [
                "id" => 144,
                "name" => "Phục Ma Côn Pháp",
                "type" => "cs_cg"
            ],
            [
                "id" => 145,
                "name" => "Phong Ba Côn",
                "type" => "cs_cg"
            ],
            [
                "id" => 146,
                "name" => "Nhật Nguyệt Liên Hoàn Thương",
                "type" => "cs_cg"
            ],
            [
                "id" => 147,
                "name" => "Cuồng Long Bát Tiếu",
                "type" => "cs_cg"
            ],
            [
                "id" => 148,
                "name" => "Linh Xà Bổng Pháp",
                "type" => "cs_dg"
            ],
            [
                "id" => 149,
                "name" => "Đả Cẩu Bổng Pháp (Cổ)",
                "type" => "cs_dg"
            ],
            [
                "id" => 150,
                "name" => "Phong Ma Trượng Pháp",
                "type" => "cs_dg"
            ],
            [
                "id" => 151,
                "name" => "Đả Cẩu Bổng Pháp",
                "type" => "cs_dg"
            ],
            [
                "id" => 152,
                "name" => "Phong Lôi Hàng Ma Trượng",
                "type" => "cs_dg"
            ],
            [
                "id" => 153,
                "name" => "Thập Tự Truy Hồn Côn",
                "type" => "cs_dg"
            ],
            [
                "id" => 154,
                "name" => "Nhất Dương Bi Thiếp Bổng Pháp",
                "type" => "cs_dg"
            ],
            [
                "id" => 155,
                "name" => "Thiên Ma Truy Hồn Đao",
                "type" => "cs_aq"
            ],
            [
                "id" => 156,
                "name" => "Truy Hồn Trảo",
                "type" => "cs_aq"
            ],
            [
                "id" => 157,
                "name" => "Diêm Vương Thiếp",
                "type" => "cs_aq"
            ],
            [
                "id" => 158,
                "name" => "Tam Dương Huyền Châm",
                "type" => "cs_aq"
            ],
            [
                "id" => 159,
                "name" => "Linh Lung Đầu",
                "type" => "cs_aq"
            ],
            [
                "id" => 160,
                "name" => "Thiên Địa Sưu Hồn Tỏa",
                "type" => "cs_aq"
            ],
            [
                "id" => 161,
                "name" => "Đông Phương Vô Phong Kiếm",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 162,
                "name" => "Vạn Tượng Thiên Nguyên Nhẫn",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 163,
                "name" => "Mặc Vũ Xuân Thu",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 164,
                "name" => "U Minh Tàn Hương Thức",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 165,
                "name" => "Tướng Quân Hành",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 166,
                "name" => "Cuồng Sát Phá Trận Kiếm",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 167,
                "name" => "Ngự Phong Cửu Biến",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 168,
                "name" => "Tiêu Tương Băng Vân Phổ",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 169,
                "name" => "Thiên Ma Bát Âm",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 170,
                "name" => "Lạc Nhạn Cung",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 171,
                "name" => "Thần Tiễn Cửu Sách",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 172,
                "name" => "Liệt Vân Bát Tiễn",
                "type" => "cs_qmtaolu"
            ],

        ];

        $table = $this->table("set");
        $table->truncate();

        foreach ($data as $d) {
            $d["created_at"] = date("Y-m-d H:i:s");
            $d["updated_at"] = date("Y-m-d H:i:s");
            $table->insert($d)
                ->save();
        }
    }
}
