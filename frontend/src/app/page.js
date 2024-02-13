import "./home.css";

export const metadata = {
  title: "Cửu Âm Đại Điển",
  description:
    "Cửu Âm Chân Kinh Đại Từ Điển - Thông tin nội công, kinh mạch, võ học game Cửu Âm Chân Kinh |Auto cửu âm",
  keywords:
    "auto cửu âm, auto 9yin, auto cack, cửu âm đại điển, cadd, cửu âm chân kinh, cửu âm, cack, nội công, kinh mạch, võ học",
  openGraph: {
    title: "Cửu Âm Đại Điển",
    url: "https://cuuamdaidien.com",
  },
};

export default function Home() {
  return (
    <>
      <h1 className="mt-10 mb-10">Cửu Âm Đại Điển</h1>

      <div className="content-list">
        <div className="item noi-cong">
          <div>
            <a href="/noi-cong/thien-dinh-cong/36">
              <div className="noi-cong-btn"></div>
            </a>
          </div>
          <div className="text-content">
            <a href="/noi-cong/thien-dinh-cong/36">Nội Công</a>
          </div>
        </div>
        <div className="item vo-cong">
          <div>
            <a href="/vo-cong/phien-thien-phach-dia/20">
              <div className="vo-cong-btn"></div>
            </a>
          </div>
          <div className="text-content">
            <a href="/vo-cong/phien-thien-phach-dia/20">Võ Công</a>
          </div>
        </div>
        <div className="item kinh-mach">
          <div>
            <a href="/kinh-mach/thu-thai-am-phe/216">
              <div className="kinh-mach-btn"></div>
            </a>
          </div>
          <div className="text-content">
            <a href="/kinh-mach/thu-thai-am-phe/216">Kinh Mạch</a>
          </div>
        </div>
      </div>

      <div className="release-note text-white ml-10 mt-10">
        <span className="zdn-color">Release note:</span>
        <br />
        2024/02/13: Thêm thông tin Võ công.
        <br />
        2022/09/02: Thêm kinh mạch cơ bản các phái.
        <br />
        2022/07/20: Thêm nội công Tinh Miễu Các.
        <br />
        2022/04/03: Thêm nội công Phục Dưỡng Khí Công(Vạn thú sơn trang), Tạo
        Hóa Công. Thêm thực lực nội công.
        <br />
        2021/12/10: Thêm nội công giang hồ Tâm Trai Bí Triện, tự động cuộn tới
        vị trí nội công trong danh sách
        <br />
        2021/12/4: Thông tin Nội công (theo phiên bản Cửu Âm VN hiện hành)
        <br />
        <br />
        <br />
        Auto Cửu Âm Chân Kinh - ZDN{" "}
        <a
          className="underline hover:text-blue-500"
          href="https://auto.cuuamdaidien.com"
        >
          https://auto.cuuamdaidien.com
        </a>
        <br />
      </div>
    </>
  );
}
