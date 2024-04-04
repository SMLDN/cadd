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
    public function run(): void
    {
        $data = [
            [
                "id" => 1,
                "name" => "Xung",
                "slug" => "xung",
                "max_level" => 180,
                "type" => "0",
                "desc" => '<font color="#22ff22">Kích hoạt kinh mạch này, mỗi phút tiêu hao 1000 tu vi</font><br>Người tu luyện nội công cần phải mở mạch này, có thể điều tiết khí huyết của 12 kich mạch, giúp khí huyết lưu thông nhanh hơn, sử dụng nội kình càng mạnh, sát thương càng cao.',
                "photo" => 'jingmai\jm_chong.png',
            ],
            [
                "id" => 2,
                "name" => "Đới",
                "slug" => "doi",
                "max_level" => 180,
                "type" => "0",
                "desc" => '',
                "photo" => 'jingmai\jm_dai.png',
            ],
            [
                "id" => 3,
                "name" => "Khí Tụ Đan Điền",
                "slug" => "khi-tu-dan-dien",
                "max_level" => 180,
                "type" => "0",
                "desc" => 'Ngưng thần tụ khí, khí tụ đan điền.',
                "photo" => 'jingmai\jm_dantian.png',
            ],
            [
                "id" => 4,
                "name" => "Thủ Thiếu Dương Tam Tiêu",
                "slug" => "thu-thieu-duong-tam-tieu",
                "max_level" => 216,
                "type" => "0",
                "desc" => '<font color="#CD2626">[Tiến cử Cực Lạc Chủ Tu]</font><br>Mạch chính của Thủ Tam Dương, cùng có tên là Liệt Phong Kinh với Túc Thiếu Dương Đảm Kinh. Kiểm soát sức lực toàn thân, mạch này nếu bị thương sẽ dẫn đến kiệt sức, cần bảo vệ cẩn thận.<br>Tiến cử cho người chơi bộ võ nội công (sát thương Âm, Dương, Cương, Nhu) khai thông;<br>Chỉ số tiến cử cho người chơi nội công: ★★★★★  Chỉ số tiến cử cho người chơi ngoại công: ★',
                "photo" => 'jingmai\jm_shoushaoyang.png',
            ],
            [
                "id" => 5,
                "name" => "Thủ Thiếu Âm Tâm",
                "slug" => "thu-thieu-am-tam",
                "max_level" => 216,
                "type" => "1",
                "desc" => '<font color="#CD2626">[Tiến cử Côn Luân Phái Chủ Tu]</font><br>Một trong Túc Tam Âm Kinh, cùng Túc Thiếu Âm Thận hợp thành Trí Mạch. Khai thông khí huyết, trí tuệ giác ngộ, tăng nội tức cho người học võ.<br>Tiến cử bộ nội ngoại công (sát thương nội ngoại công) khai thông;<br>Chỉ số tiến cử người chơi nội công: ★★★  <br>Chỉ số tiến cử người chơi ngoại công: ★★★',
                "photo" => 'jingmai\jm_shoushaoyin.png',
            ],
            [
                "id" => 6,
                "name" => "Thủ Thiếu Âm Tâm-Nghịch",
                "slug" => "thu-thieu-am-tam-nghich",
                "max_level" => 216,
                "type" => "1",
                "desc" => 'Bắt đầu từ tim, đi vào tâm hệ, từ tâm hệ đi ra phổi, ngang ra đáy hố nách, dọc bờ trong mặt trước chi trên, dọc bờ trước ngoài ngón tay út, ra ở đầu ngón tay út (Thiếu Xung Huyệt).<br>Tiến cử bộ nội ngoại công (sát thương âm, dương, cương, nhu) khai thông;<br>Chỉ số tiến cử người chơi nội công: ★★★★  <br>Chỉ số tiến cử người chơi ngoại công: ★★★',
                "photo" => 'jingmai\jm_shoushaoyin_ni.png',
            ],
            [
                "id" => 7,
                "name" => "Thủ Thái Dương Tiểu Trường",
                "slug" => "thu-thai-duong-tieu-truong",
                "max_level" => 216,
                "type" => "0",
                "desc" => '<font color="#CD2626">[Tiến cử Cái Bang Chủ Tu]</font><br>Hợp với Tam Âm chủ mạch, giúp thể phách của người tu luyện thêm kiên cố, tăng sức chống cự.<br>Tiến cử cho người chơi bộ võ nội công (sát thương Âm, Dương, Cương, Nhu) khai thông;<br>Chỉ số tiến cử cho người chơi nội công: ★★★★  Chỉ số tiến cử cho người chơi ngoại công: ★★',
                "photo" => 'jingmai\jm_shoutaiyang.png',
            ],
            [
                "id" => 8,
                "name" => "Thủ Thái Dương Tiểu Trường-Nghịch",
                "slug" => "thu-thai-duong-tieu-truong-nghich",
                "max_level" => 216,
                "type" => "1",
                "desc" => 'Bắt đầu từ Tiểu Trạch của ngón út, men theo phía ngoài cánh tay đi lên bả vai, nhập vào Khuyết Bồn, liên hệ với tim, men theo thực quản xuống dạ dày, kết nối với ruột non, một tĩnh mạch từ xương quai xanh chạy lên má rồi đến góc mắt ngoài và thính quản.<br>Tiến cử người chơi bộ nội công (Sát thương âm, dương, cương, nhu) khai thông;<br>Chỉ số tiến cử người chơi nội công: ★★★★  <br>Chỉ số tiến cử người chơi ngoại công: ★★★',
                "photo" => 'jingmai\jm_shoutaiyang_ni.png',
            ],
            [
                "id" => 9,
                "name" => "Thủ Thái Âm Phế",
                "slug" => "thu-thai-am-phe",
                "max_level" => 216,
                "type" => "1",
                "desc" => '<font color="#CD2626">[Tiến cử Nga My Chủ Tu]</font><br>Theo [Linh Khu] ghi chép, đây là mạch chính của Thủ Tam Âm, khống chế thể chất con người. Mạch này yếu thì gầy ốm, mạnh thì cường tráng. Là mạch mà người tập võ phải luyện.<br>Tiến cử người chơi bộ võ nội công (Sát thương Âm, Dương, Cương, Nhu) khai thông;<br>Chỉ số tiến cử người chơi nội công: ★★★★  <br>Chỉ số tiến cử người chơi ngoại công: ★★★',
                "photo" => 'jingmai\jm_shoutaiyin.png',
            ],
            [
                "id" => 10,
                "name" => "Dương Khiêu",
                "slug" => "duong-khieu",
                "max_level" => 225,
                "type" => "0",
                "desc" => '<font color="#22ff22">Tu luyện kinh mạch này đến cảnh giới nhất định xong, sẽ được Dương Cương và Thái Cực Nội Công bảo vệ, chủng loại nội công càng nhiều, số tầng càng cao hiệu quả càng tốt</font><br>1 mạch dương trong bát mạch kỳ kinh, nếu thông mạch này khi xuất quyền chính xác vô cùng, rất khó né.',
                "photo" => 'jingmai\jm_yangqiao.png',
            ],
            [
                "id" => 11,
                "name" => "Dương Khiêu Mạch-Ẩn",
                "slug" => "duong-khieu-mach-an",
                "max_level" => 180,
                "type" => "0",
                "desc" => '<font color="#22ff22">Tu luyện kinh mạch này đến cảnh giới nhất định xong, sẽ được Dương Cương và Thái Cực Nội Công bảo vệ, chủng loại nội công càng nhiều, số tầng càng cao hiệu quả càng tốt</font><br>Kinh mạch này là 1 mạch âm trong bát mạch kỳ kinh, tu luyện tầng thấp đối với Dương Nghiêu Mạch thuộc bát mạch kỳ kinh, nhưng vì không thể Dung Hội Quán Thông mạch này, sức mạnh bảo vệ có giới hạn, nên được gọi là Ẩn Mạch.<br><font color="#FF0000">Không thể kích hoạt đồng thời với Dương Nghiêu Mạch</font>',
                "photo" => 'jingmai\jm_yangqiao_wei.png',
            ],
            [
                "id" => 12,
                "name" => "Dương Duy Mạch",
                "slug" => "duong-duy-mach",
                "max_level" => 180,
                "type" => "0",
                "desc" => 'Một trong song dương của bát mạch, lại là bối dương mạch, có thể tăng lực cơ bắp, võ giả luyện được sẽ khó mà gục ngã.<br><font color="#22ff22">Tu luyện kinh mạch này đến cảnh giới nhất định, sẽ khó bị đánh ngã, đánh lui. Cảnh giới tu luyện càng cao, hiệu quả càng tốt.</font>',
                "photo" => 'jingmai\jm_yangwei.png',
            ],
            [
                "id" => 13,
                "name" => "Âm Khiêu",
                "slug" => "am-khieu",
                "max_level" => 225,
                "type" => "0",
                "desc" => '<font color="#22ff22">Tu luyện kinh mạch này đến cảnh giới nhất định xong, sẽ được nội công Âm Nhu và Thái Cực bảo vệ, chủng loại nội công càng nhiều, số tầng càng cao hiệu quả càng tốt</font><br>1 trong 2 mạch âm trong bát mạch kỳ kinh, người thông mạch này 2 mắt sáng rực, khiến vật nhỏ như ruồi muỗi cũng bị nội công đánh trúng.',
                "photo" => 'jingmai\jm_yinqiao.png',
            ],
            [
                "id" => 14,
                "name" => "Âm Khiêu Mạch-Ẩn",
                "slug" => "am-khieu-mach-an",
                "max_level" => 180,
                "type" => "0",
                "desc" => '<font color="#22ff22">Tu luyện kinh mạch này đến cảnh giới nhất định xong, sẽ được Âm Nhu và Thái Cực Nội Công bảo vệ, chủng loại nội công càng nhiều, số tầng càng cao hiệu quả càng tốt</font><br>Kinh mạch này là 1 mạch âm trong bát mạch kỳ kinh, tu luyện tầng thấp đối với Âm Nghiêu Mạch thuộc bát mạch kỳ kinh, nhưng vì không thể Dung Hội Quán Thông mạch này, sức mạnh bảo vệ có giới hạn, nên được gọi là Ẩn Mạch<br><font color="#FF0000">Không thể kích hoạt đồng thời với Âm Nghiêu Mạch</font>',
                "photo" => 'jingmai\jm_yinqiao_wei.png',
            ],
            [
                "id" => 15,
                "name" => "Âm Duy Mạch",
                "slug" => "am-duy-mach",
                "max_level" => 180,
                "type" => "0",
                "desc" => '<font color="#22ff22">Kích hoạt kinh mạch này, mỗi phút tiêu hao 1000 tu vi</font><br>Âm mạch trong bát mạch điều khiển xúc giác toàn thân, thông mạch này khiến toàn thân minh mẫn nhạy cảm hơn, dù ở nơi tối đen cũng có thể dựa vào cảm giác mà thoát khỏi ám khí quanh mình.',
                "photo" => 'jingmai\jm_yinwei.png',
            ],
            [
                "id" => 16,
                "name" => "Túc Quyết Âm Can",
                "slug" => "tuc-quyet-am-can",
                "max_level" => 216,
                "type" => "3",
                "desc" => '<font color="#CD2626">[Tiến cử Quân Tử Đường Chủ Tu]</font><br>Một trong Túc Tam Âm Kinh, tương thông với Thủ Quyết Âm Kinh Dao, tăng cường khí huyết.<br>Tiến cử cho người chơi bộ võ nội công (sát thương Âm, Dương, Cương, Nhu) khai thông;<br>Chỉ số tiến cử cho người chơi nội công: ★★★★★  Chỉ số tiến cử cho người chơi ngoại công: ★',
                "photo" => 'jingmai\jm_zujueyin.png',
            ],
            [
                "id" => 17,
                "name" => "Túc Thiếu Dương Đảm",
                "slug" => "tuc-thieu-duong-dam",
                "max_level" => 216,
                "type" => "3",
                "desc" => '<font color="#CD2626">[Tiến cử Cẩm Y Vệ Chủ Tu]</font><br>Đây là chủ mạch của Tam Dương Kinh, tu luyện cùng Thủ Tam Tiêu Kinh sẽ giúp người tu luyện có sức mạnh vô song, không ai địch nổi.<br>Tiến cử người chơi bộ võ ngoại công (sát thương ngoại công) khai thông;<br>Chỉ số tiến cử cho người chơi nội công: ★★',
                "photo" => 'jingmai\jm_zushaoyang.png',
            ],
            [
                "id" => 18,
                "name" => "Túc Thiếu Dương Đảm-Nghịch",
                "slug" => "tuc-thieu-duong-dam-nghich",
                "max_level" => 216,
                "type" => "4",
                "desc" => 'Bắt đầu từ Đồng Tử Liêu Huyệt ở ngoài mắt, lên đến sau góc đầu xuống Phong Trì sau tai, từ Khuyết Bồn đi xuống nách, men theo ngực đi qua Quý Hiếp và mạch nhánh ở dưới xương lớn của xương chậu sẽ men theo mặt ngoài của bắp đùi chạy thẳng đến chân, qua Khiếu Âm  từ Lâm Khấp đến ngón thứ 4.<br>Tiến cử người chơi bộ ngoại công (Sát thương ngoại công) khai thông;<br>Chỉ số tiến cử người chơi nội công: ★★  <br>Chỉ số tiến cử người chơi ngoại công: ★★★★★',
                "photo" => 'jingmai\jm_zushaoyang_ni.png',
            ],
            [
                "id" => 19,
                "name" => "Túc Thiếu Âm Thận",
                "slug" => "tuc-thieu-am-than",
                "max_level" => 216,
                "type" => "2",
                "desc" => '<font color="#CD2626">[Tiến cử Võ Đang Chủ Tu]</font><br>Một trong Túc Tam Âm Kinh, tương thông với Thủ Thiểu Âm Tâm Kinh. Mạch thông sẽ tăng trí tuệ, nâng cao Nội Tức.<br>Tiến cử cho người chơi bộ võ nội công (sát thương Âm, Dương, Cương, Nhu) khai thông;<br>Chỉ số tiến cử cho người chơi nội công: ★★  Chỉ số tiến cử cho người chơi ngoại công: ★★',
                "photo" => 'jingmai\jm_zushaoyin.png',
            ],
            [
                "id" => 20,
                "name" => "Túc Thiếu Âm Thận-Nghịch",
                "slug" => "tuc-thieu-am-than-nghich",
                "max_level" => 216,
                "type" => "0",
                "desc" => 'Bắt đầu từ dưới ngón chân út, nghiêng hướng Sung Tuyền, từ mắt cá chân đến mặt trong cẳng chân, từ phía trong đùi men phía sau đến Trường Cường, từ cột sống vào thận, từ kinh mạch đường thẳng ở thận hướng lên qua gan và cơ hoành vào trong phổi, một mạch từ phổi ra, chụp lại ở tim, chảy vào trong ngực qua Du Phủ Huyệt.<br>Tiến cử người chơi bộ nội công (Sát thương âm, dương, cương, nhu) khai thông;<br>Chỉ số tiến cử người chơi nội công: ★★★  <br>Chỉ số tiến cử người chơi ngoại công: ★★★',
                "photo" => 'jingmai\jm_zushaoyin_ni.png',
            ],
            [
                "id" => 21,
                "name" => "Túc Thái Dương Bàng Quang",
                "slug" => "tuc-thai-duong-bang-quang",
                "max_level" => 216,
                "type" => "2",
                "desc" => '<font color="#CD2626">[Tiến cử Thiên Sơn Phái chủ tu]</font> <br>Mạch phụ trách hoạt động khí huyết, là một trong ba kinh mạch dương của bàn chân, học kinh mạch này xong có thể giúp người học võ tự do khống chế kinh mạch toàn thân, thoải mái hơn khi gặp hiểm nguy.<br>Tiến cử bộ nội ngoại công (sát thương nội ngoại công ) khai thông;<br>Chỉ số tiến cử người chơi nội công: ★★★  <br>Chỉ số tiến cử người chơi ngoại công: ★★★',
                "photo" => 'jingmai\jm_zutaiyang.png',
            ],
            [
                "id" => 22,
                "name" => "Túc Thái Dương Bàng Quang-Nghịch",
                "slug" => "tuc-thai-duong-bang-quang-nghich",
                "max_level" => 216,
                "type" => "0",
                "desc" => 'Bắt đầu từ mắt lên búi tóc, từ phía sau đầu men theo hai sườn cột sống đến cuối đường chính giữa phía sau chân, đến chí âm của sườn ngoài ngón chân nhỏ.<br>Tiến cử bộ nội ngoại công (Sát thương nội ngoại công) khai thông; <br>Chỉ số tiến cử người chơi nội công: ★★★  <br>Chỉ số tiến cử người chơi ngoại công: ★★★',
                "photo" => 'jingmai\jm_zutaiyang_ni.png',
            ],
            [
                "id" => 23,
                "name" => "Túc Thái Âm Tỳ",
                "slug" => "tuc-thai-am-ty",
                "max_level" => 216,
                "type" => "4",
                "desc" => '<font color="#CD2626">[Tiến cử Đường Môn Chủ Tu]</font><br>Đứng đầu Túc Tam Âm, mạch cốt yếu trong 12 mạch chủ, gọi là Tinh Kinh. Mạch này thông sẽ gia tăng Nội Lực, võ học sẽ tiến bộ vượt bậc.<br>Tiến cử người chơi bộ võ ngoại công (sát thương ngoại công) khai thông;<br>Chỉ số tiến cử cho người chơi nội công: ★★  Chỉ số tiến cử cho người chơi ngoại công: ★★★★★',
                "photo" => 'jingmai\jm_zutaiyin.png',
            ],
            [
                "id" => 24,
                "name" => "Túc Thái Âm Tỳ-Nghịch",
                "slug" => "tuc-thai-am-ty-nghich",
                "max_level" => 216,
                "type" => "2",
                "desc" => 'Bắt đầu từ đầu mút ngón chân cái (Ẩn Bạch Huyệt), men theo Xích Bạch Nhục Tế phía trong, đi lên mắt cá chân, men theo đường chính giữa phía trong mắt cá chân đi lên, chỗ mắt cá chân đi lên 8 tấc, trước khi giao với Túc Quyết Âm Can Kinh, đi lên men theo mặt trong bắp đùi vào phần bụng, thuộc lá lách, lạc vị<br>Tiến cử người chơi bộ ngoại công (Sát thương ngoại công) khai thông;<br>Chỉ số tiến cử người chơi nội công: ★★  <br>Chỉ số tiến cử người chơi ngoại công: ★★★★★.',
                "photo" => 'jingmai\jm_zutaiyin_ni.png',
            ],
            [
                "id" => 25,
                "name" => "Túc Dương Minh Vị",
                "slug" => "tuc-duong-minh-vi",
                "max_level" => 216,
                "type" => "4",
                "desc" => '<font color="#CD2626">[Tiến cử Thiếu Lâm Chủ Tu]</font><br>Đây là một trong những mạch của Túc Tam Dương Kinh, có công hiệu giống Đại Trường Kinh của Thủ Tam Dương, tăng độ linh hoạt của chân, giúp người tu luyện nhẹ như lông vũ, nhanh như thỏ.<br>Tiến cử người chơi bộ võ ngoại công (sát thương ngoại công) khai thông;<br>Chỉ số tiến cử cho người chơi nội công: ★★★  Chỉ số tiến cử cho người chơi ngoại công: ★★★★',
                "photo" => 'jingmai\jm_zuyangming.png',
            ],
            [
                "id" => 26,
                "name" => "Thủ Dương Minh Đại Trường",
                "slug" => "thu-duong-minh-dai-truong",
                "max_level" => 216,
                "type" => "1",
                "desc" => '<font color="#CD2626">[Tiến cử Minh Giáo Chủ Tu]</font><br>Một trong Thủ Tam Dương Kinh, nếu đồng tu với Túc Dương Minh Vị, thì có thể khiến xuất thủ như điện, hành động như gió.<br>Tiến cử người chơi bộ võ ngoại công (sát thương ngoại công) khai thông;<br>Chỉ số tiến cử cho người chơi nội công: ★★★  Chỉ số tiến cử cho người chơi ngoại công: ★★★',
                "photo" => 'jingmai\jm_shouyangming.png',
            ],
            [
                "id" => 27,
                "name" => "Thủ Dương Minh Đại Trường-Nghịch",
                "slug" => "thu-duong-minh-dai-truong-nghich",
                "max_level" => 216,
                "type" => "3",
                "desc" => 'Giờ mão bắt đầu vận hành, giờ mão là giờ sinh, bắt đầu từ Thương Dương, kết thúc ở Nghênh Hương.<br>Tiến cử người chơi bộ ngoại công (Sát thương ngoại công) khai thông;<br>Chỉ số tiến cử người chơi nội công: ★★★★  <br>Chỉ số tiến cử người chơi ngoại công: ★★★★',
                "photo" => 'jingmai\jm_shouyangming_ni.png',
            ],
            [
                "id" => 28,
                "name" => "Thủ Thiếu Dương Tam Tiêu-Nghịch",
                "slug" => "thu-thieu-duong-tam-tieu-nghich",
                "max_level" => 216,
                "type" => "0",
                "desc" => 'Bắt đầu từ Quan Xung Huyệt, men theo sườn ngoài cánh tay đi đến xương quai xanh, rải rác ở màng tim, từ trong ngực đi lên xương quai xanh đến gáy, men theo tai xong, vào trong tai, ra khỏi tai đến Ti Trúc Không ở khóe ngoài mắt.<br>Tiến cử người chơi bộ nội công (Sát thương âm, dương, cương, nhu) khai thông;<br>Chỉ số tiến cử người chơi nội công: ★★★★★  <br>Chỉ số tiến cử người chơi ngoại công: ★',
                "photo" => 'jingmai\jm_shoushaoyang_ni.png',
            ],
            [
                "id" => 29,
                "name" => "Thủ Thái Âm Phế-Nghịch",
                "slug" => "thu-thai-am-phe-nghich",
                "max_level" => 216,
                "type" => "3",
                "desc" => 'Bắt đầu từ phần phổi đoạn giữa dạ dày, trượt xuống Xích Trạch, đi đến Kinh Cừ, nhập vào Ngư Tế, đi đến Thiếu Thương của ngón cái.<br>Tiến cử người chơi bộ nội công (Sát thương âm, dương, cương, nhu) khai thông;<br>Chỉ số tiến cử người chơi nội công: ★★★★★  <br>Chỉ số tiến cử người chơi ngoại công: ★★★',
                "photo" => 'jingmai\jm_shoutaiyin_ni.png',
            ],
            [
                "id" => 30,
                "name" => "Túc Quyết Âm Can-Nghịch",
                "slug" => "tuc-quyet-am-can-nghich",
                "max_level" => 216,
                "type" => "4",
                "desc" => 'Bắt đầu từ Đại Đôn, men sau chân đến mắt cá chân, từ phía sau chân lên bụng, kẹp bên cạnh dạ dày thuộc gan túi mật, đi lên cơ hoành rồi tỏa ra sườn.<br>Tiến cử người chơi bộ nội công (Sát thương âm, dương, cương, nhu) khai thông;<br>Chỉ số tiến cử người chơi nội công: ★★★★★  <br>Chỉ số tiến cử người chơi ngoại công: ★★★★★',
                "photo" => 'jingmai\jm_zujueyin_ni.png',
            ],
            [
                "id" => 31,
                "name" => "Túc Dương Minh Vị-Nghịch",
                "slug" => "tuc-duong-minh-vi-nghich",
                "max_level" => 216,
                "type" => "2",
                "desc" => 'Bắt đầu ở Thừa Khấp chỗ cánh mũi, men theo họng xuống Đại Chùy, vào Khuyết Bồn, đi sâu vào khoang, từ môn vị chỗ dạ dày chia ra, men theo ổ bụng đến Khí Xung, xuống sườn trước bắp đùi, đến xương bánh chè, men theo xương ống đến bàn chân, vào mặt ngoài xương ngón chân (Lệ Đoái Huyệt).br>Tiến cử người chơi bộ ngoại công (Sát thương ngoại công) khai thông;<br>Chỉ số tiến cử người chơi nội công: ★★  <br>Chỉ số tiến cử người chơi ngoại công: ★★★★★',
                "photo" => 'jingmai\jm_zuyangming_ni.png',
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
