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
                "name" => "Hồn Ly Túy Mộng Công",
                "type" => "cs_ks"
            ],
            [
                "id" => 46,
                "name" => "Thánh Mai Bí Quyết",
                "type" => "cs_ks"
            ],
            [
                "id" => 47,
                "name" => "Thánh Mai Bí Quyết (Cổ phổ)",
                "type" => "cs_ks"
            ],
            [
                "id" => 48,
                "name" => "Uy Linh Thoái Pháp",
                "type" => "cs_ks"
            ],
            [
                "id" => 49,
                "name" => "Tà Dương Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 50,
                "name" => "Thanh Phong Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 51,
                "name" => "Thái Cực Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 52,
                "name" => "Lạc Anh Phi Hoa Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 53,
                "name" => "Ngọc Tiêu Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 54,
                "name" => "Đoạt Mệnh Thập Tam Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 55,
                "name" => "Ngọc Nữ Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 56,
                "name" => "Lưu Sa",
                "type" => "cs_dj"
            ],
            [
                "id" => 57,
                "name" => "Tuyết Trai Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 58,
                "name" => "Độc Cô Cửu Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 59,
                "name" => "Xung Linh Kiếm Pháp (F)",
                "type" => "cs_dj"
            ],
            [
                "id" => 60,
                "name" => "Xung Linh Kiếm Pháp (F)",
                "type" => "cs_dj"
            ],
            [
                "id" => 61,
                "name" => "Mi Lai Nhãn Khứ Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 62,
                "name" => "Thần Long Bắc Võ Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 63,
                "name" => "Mặc Tử Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 64,
                "name" => "Tịch Tà Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 65,
                "name" => "Mị Ảnh Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 66,
                "name" => "Bích Hải Triều Sinh Khúc",
                "type" => "cs_dj"
            ],
            [
                "id" => 67,
                "name" => "Kim Xà Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 68,
                "name" => "Vân Tiêu Phi Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 69,
                "name" => "Tây Dương Kích Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 70,
                "name" => "Toàn Chân Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 71,
                "name" => "Thái Huyền Tương Hoa Kiếm Phổ",
                "type" => "cs_dj"
            ],
            [
                "id" => 72,
                "name" => "Ngọc Nữ Tố Tâm Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 73,
                "name" => "Cù Chi Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 74,
                "name" => "Hoa Sơn Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 75,
                "name" => "Cuồng Phong Khoái Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 76,
                "name" => "Âm Dương Đại Bi Phú",
                "type" => "cs_dj"
            ],
            [
                "id" => 77,
                "name" => "Nhiễu Chỉ Nhu Kiếm",
                "type" => "cs_dj"
            ],
            [
                "id" => 78,
                "name" => "Thiên Nhiên Lý Tâm Lưu",
                "type" => "cs_dj"
            ],
            [
                "id" => 79,
                "name" => "Húc Nhật Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 80,
                "name" => "Thiên Sơn Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 81,
                "name" => "Cửu Nghi Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 82,
                "name" => "Tiểu Thiên Tinh Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 83,
                "name" => "Phạn Hành Kiếm Pháp",
                "type" => "cs_dj"
            ],
            [
                "id" => 84,
                "name" => "Vô Nhai Kiếm Pháp",
                "type" => "cs_sj"
            ],
            [
                "id" => 85,
                "name" => "Lưu Vân Kiếm Pháp",
                "type" => "cs_sj"
            ],
            [
                "id" => 86,
                "name" => "Cửu Cung Kiếm Pháp",
                "type" => "cs_sj"
            ],
            [
                "id" => 87,
                "name" => "Thất Tinh Kiếm",
                "type" => "cs_sj"
            ],
            [
                "id" => 88,
                "name" => "Vũ Quỷ Lục",
                "type" => "cs_sj"
            ],
            [
                "id" => 89,
                "name" => "Thiên Tâm Kiếm Quyết",
                "type" => "cs_sj"
            ],
            [
                "id" => 90,
                "name" => "Tứ Tượng Kiếm Quyết",
                "type" => "cs_sj"
            ],
            [
                "id" => 91,
                "name" => "Ngũ Vĩ Kiếm Quyết",
                "type" => "cs_sj"
            ],
            [
                "id" => 92,
                "name" => "Thiên Nhạc Kiếm Pháp",
                "type" => "cs_sj"
            ],
            [
                "id" => 93,
                "name" => "Vong Xuyên Kiếm Pháp",
                "type" => "cs_sj"
            ],
            [
                "id" => 94,
                "name" => "Bàn Ẩn Kiếm Quyết",
                "type" => "cs_sj"
            ],
            [
                "id" => 95,
                "name" => "Trạc Anh Kiếm Pháp",
                "type" => "cs_sj"
            ],
            [
                "id" => 96,
                "name" => "Tật Quỷ Đao",
                "type" => "cs_dd"
            ],
            [
                "id" => 97,
                "name" => "Thất Hồn Đao Pháp",
                "type" => "cs_dd"
            ],
            [
                "id" => 98,
                "name" => "Đoạn Tình Thất Tuyệt",
                "type" => "cs_dd"
            ],
            [
                "id" => 99,
                "name" => "Viêm Dương Đao Pháp",
                "type" => "cs_dd"
            ],
            [
                "id" => 100,
                "name" => "Huyết Sát Đao Pháp",
                "type" => "cs_dd"
            ],
            [
                "id" => 101,
                "name" => "Cuồng Phong Đao Pháp",
                "type" => "cs_dd"
            ],
            [
                "id" => 102,
                "name" => "Hồ Gia Đao Pháp",
                "type" => "cs_dd"
            ],
            [
                "id" => 103,
                "name" => "Tỉnh Trung Bát Pháp",
                "type" => "cs_dd"
            ],
            [
                "id" => 104,
                "name" => "Bát Quái Đao",
                "type" => "cs_dd"
            ],
            [
                "id" => 105,
                "name" => "Viên Nguyệt Loan Đao",
                "type" => "cs_dd"
            ],
            [
                "id" => 106,
                "name" => "Khốn Thiên Đao Quyết",
                "type" => "cs_dd"
            ],
            [
                "id" => 107,
                "name" => "Huyết Hải Ma Đao Lục",
                "type" => "cs_dd"
            ],
            [
                "id" => 108,
                "name" => "Huyết Đao Quyết",
                "type" => "cs_dd"
            ],
            [
                "id" => 109,
                "name" => "Ngạo Hàn Lục Quyết",
                "type" => "cs_dd"
            ],
            [
                "id" => 110,
                "name" => "Khoáng Hải Thiên Toàn Trảm",
                "type" => "cs_dd"
            ],
            [
                "id" => 111,
                "name" => "Minh Vương Đoạn Ảnh Đao",
                "type" => "cs_dd"
            ],
            [
                "id" => 112,
                "name" => "Thiên Anh Phá Trận Đao",
                "type" => "cs_dd"
            ],
            [
                "id" => 113,
                "name" => "Đãng Khấu Đao",
                "type" => "cs_dd"
            ],
            [
                "id" => 114,
                "name" => "Quảng Võ Trưng Bá Đao",
                "type" => "cs_dd"
            ],
            [
                "id" => 115,
                "name" => "Tứ Hải Quy Đao Quyết",
                "type" => "cs_dd"
            ],
            [
                "id" => 116,
                "name" => "Kinh Hồng Đao Pháp",
                "type" => "cs_sd"
            ],
            [
                "id" => 117,
                "name" => "Uyên Ương Song Đao",
                "type" => "cs_sd"
            ],
            [
                "id" => 118,
                "name" => "Tu La Đao",
                "type" => "cs_sd"
            ],
            [
                "id" => 119,
                "name" => "Huyết Long Tà Phủ",
                "type" => "cs_sd"
            ],
            [
                "id" => 120,
                "name" => "Kim Lộc Thần Đao",
                "type" => "cs_sd"
            ],
            [
                "id" => 121,
                "name" => "Địa Ngục Nhiếp Hồn Đao",
                "type" => "cs_sd"
            ],
            [
                "id" => 122,
                "name" => "Âm Dương Đảo Loạn Đao",
                "type" => "cs_sd"
            ],
            [
                "id" => 123,
                "name" => "Bát Môn Kim Tỏa",
                "type" => "cs_sd"
            ],
            [
                "id" => 124,
                "name" => "Bát Hoang Đao Phổ",
                "type" => "cs_sd"
            ],
            [
                "id" => 125,
                "name" => "Yến Vân Loạn Trần Đao",
                "type" => "cs_sd"
            ],
            [
                "id" => 126,
                "name" => "Kim Xà Thích",
                "type" => "cs_bs"
            ],
            [
                "id" => 127,
                "name" => "Phân Quang Tróc Ảnh Thích",
                "type" => "cs_bs"
            ],
            [
                "id" => 128,
                "name" => "Câu Hồn Thất Đoạt",
                "type" => "cs_bs"
            ],
            [
                "id" => 129,
                "name" => "Đoạt Phách Câu Tâm Thích",
                "type" => "cs_bs"
            ],
            [
                "id" => 130,
                "name" => "Ô Mặc Thước Pháp",
                "type" => "cs_bs"
            ],
            [
                "id" => 131,
                "name" => "Thần Phong Quyết",
                "type" => "cs_bs"
            ],
            [
                "id" => 132,
                "name" => "Thánh Hỏa Lệnh (Cổ)",
                "type" => "cs_bs"
            ],
            [
                "id" => 133,
                "name" => "Quỷ Vương Thích",
                "type" => "cs_bs"
            ],
            [
                "id" => 134,
                "name" => "Yên Chi Huyết",
                "type" => "cs_bs"
            ],
            [
                "id" => 135,
                "name" => "Ẩn Không Nhẫn",
                "type" => "cs_bs"
            ],
            [
                "id" => 136,
                "name" => "Quang Ảnh Minh Diệt Thích",
                "type" => "cs_bs"
            ],
            [
                "id" => 137,
                "name" => "Loạn Thế Bát Mưu",
                "type" => "cs_bs"
            ],
            [
                "id" => 138,
                "name" => "Mị Khấp Thích",
                "type" => "cs_bs"
            ],
            [
                "id" => 139,
                "name" => "Thiên Tuyệt Địa Diệt Thích",
                "type" => "cs_sc"
            ],
            [
                "id" => 140,
                "name" => "Nghê Thường Động",
                "type" => "cs_sc"
            ],
            [
                "id" => 141,
                "name" => "Thiên La Vũ",
                "type" => "cs_sc"
            ],
            [
                "id" => 142,
                "name" => "Phá Liên Bát Trứ",
                "type" => "cs_sc"
            ],
            [
                "id" => 143,
                "name" => "Cô Tẩy Thích Quyết",
                "type" => "cs_sc"
            ],
            [
                "id" => 144,
                "name" => "Kinh Tuyết Thích",
                "type" => "cs_sc"
            ],
            [
                "id" => 145,
                "name" => "Khuynh Thành Thích",
                "type" => "cs_sc"
            ],
            [
                "id" => 146,
                "name" => "Cổ Nguyệt Tiên Hoàn Quyết",
                "type" => "cs_sc"
            ],
            [
                "id" => 147,
                "name" => "Thiên Ma Thích Quyết",
                "type" => "cs_sc"
            ],
            [
                "id" => 148,
                "name" => "Kim Cang Ma Ngâm Chử",
                "type" => "cs_sc"
            ],
            [
                "id" => 149,
                "name" => "Đạt Ma Côn Pháp",
                "type" => "cs_cg"
            ],
            [
                "id" => 150,
                "name" => "Ngũ Lang Bát Quái Côn",
                "type" => "cs_cg"
            ],
            [
                "id" => 151,
                "name" => "Cầu Bại Côn Pháp",
                "type" => "cs_cg"
            ],
            [
                "id" => 152,
                "name" => "Võ Thánh Côn Pháp",
                "type" => "cs_cg"
            ],
            [
                "id" => 153,
                "name" => "Bá Vương Thương Pháp",
                "type" => "cs_cg"
            ],
            [
                "id" => 154,
                "name" => "Nhạc Gia Thương Pháp",
                "type" => "cs_cg"
            ],
            [
                "id" => 155,
                "name" => "Từ Hàng Phổ Độ Côn",
                "type" => "cs_cg"
            ],
            [
                "id" => 156,
                "name" => "Phục Ma Côn Pháp",
                "type" => "cs_cg"
            ],
            [
                "id" => 157,
                "name" => "Phong Ba Côn",
                "type" => "cs_cg"
            ],
            [
                "id" => 158,
                "name" => "Nhật Nguyệt Liên Hoàn Thương",
                "type" => "cs_cg"
            ],
            [
                "id" => 159,
                "name" => "Cuồng Long Bát Tiếu",
                "type" => "cs_cg"
            ],
            [
                "id" => 160,
                "name" => "Vạn Thú Hoang Đằng Trảm",
                "type" => "cs_cg"
            ],
            [
                "id" => 161,
                "name" => "Linh Xà Bổng Pháp",
                "type" => "cs_dg"
            ],
            [
                "id" => 162,
                "name" => "Đả Cẩu Bổng Pháp (Cổ)",
                "type" => "cs_dg"
            ],
            [
                "id" => 163,
                "name" => "Phong Ma Trượng Pháp",
                "type" => "cs_dg"
            ],
            [
                "id" => 164,
                "name" => "Đả Cẩu Bổng Pháp",
                "type" => "cs_dg"
            ],
            [
                "id" => 165,
                "name" => "Phong Lôi Hàng Ma Trượng",
                "type" => "cs_dg"
            ],
            [
                "id" => 166,
                "name" => "Thập Tự Truy Hồn Côn",
                "type" => "cs_dg"
            ],
            [
                "id" => 167,
                "name" => "Nhất Dương Bi Thiếp Bổng Pháp",
                "type" => "cs_dg"
            ],
            [
                "id" => 168,
                "name" => "Xích Sát Độc Võ Côn",
                "type" => "cs_dg"
            ],
            [
                "id" => 169,
                "name" => "Thiên Ma Truy Hồn Đao",
                "type" => "cs_aq"
            ],
            [
                "id" => 170,
                "name" => "Truy Hồn Trảo",
                "type" => "cs_aq"
            ],
            [
                "id" => 171,
                "name" => "Diêm Vương Thiếp",
                "type" => "cs_aq"
            ],
            [
                "id" => 172,
                "name" => "Tam Dương Huyền Châm",
                "type" => "cs_aq"
            ],
            [
                "id" => 173,
                "name" => "Linh Lung Đầu",
                "type" => "cs_aq"
            ],
            [
                "id" => 174,
                "name" => "Thiên Địa Sưu Hồn Tỏa",
                "type" => "cs_aq"
            ],
            [
                "id" => 175,
                "name" => "Đông Phương Vô Phong Kiếm",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 176,
                "name" => "Vạn Tượng Thiên Nguyên Nhẫn",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 177,
                "name" => "Mặc Vũ Xuân Thu",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 178,
                "name" => "U Minh Tàn Hương Thức",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 179,
                "name" => "Tướng Quân Hành",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 180,
                "name" => "Cuồng Sát Phá Trận Kiếm",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 181,
                "name" => "Ngự Phong Cửu Biến",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 182,
                "name" => "Tiêu Tương Băng Vân Phổ",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 183,
                "name" => "Thiên Ma Bát Âm",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 184,
                "name" => "Lạc Nhạn Cung",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 185,
                "name" => "Thần Tiễn Cửu Sách",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 186,
                "name" => "Liệt Vân Bát Tiễn",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 187,
                "name" => "Minh Lệ Nhẫn",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 188,
                "name" => "Hàn Tuyền Tẩy Tâm Phổ",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 189,
                "name" => "Minh Nguyệt Thương Hải Quyết",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 190,
                "name" => "Tố U Lệnh",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 191,
                "name" => "Xuân Thu Thiên Viễn Quyết",
                "type" => "cs_qmtaolu"
            ],
            [
                "id" => 192,
                "name" => "Mộng Vi Bút Phổ",
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
