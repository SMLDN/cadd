"use client";
import { useState, useEffect } from "react";
import { usePathname } from "next/navigation";

const getThucLuc = (point) => {
  let thucLuc = "Bất Kham Nhất Kích";
  if (point > 5) {
    thucLuc = "Sơ Học Sạ Luyện";
  }

  if (point > 10) {
    thucLuc = "Sơ Khuy Môn Kính";
  }

  if (point > 15) {
    thucLuc = "Lực Hữu Tiểu Thành";
  }

  if (point > 20) {
    thucLuc = "Giá Khinh Tựu Thực";
  }

  if (point > 25) {
    thucLuc = "Dung Hội Quán Thông";
  }

  if (point > 30) {
    thucLuc = "Lô Hỏa Thuần Thanh";
  }

  if (point > 35) {
    thucLuc = "Kỳ Tài Xuất Chúng";
  }

  if (point > 40) {
    thucLuc = "Thần Hồ Kỳ Kỹ";
  }

  if (point > 45) {
    thucLuc = "Xuất Thần Nhập Hóa";
  }

  if (point > 50) {
    thucLuc = "Ngạo Thị Quần Hùng";
  }

  if (point > 55) {
    thucLuc = "Đăng Phong Tạo Cực";
  }

  if (point > 60) {
    thucLuc = "Vô Dữ Luận Tỉ";
  }

  if (point > 65) {
    thucLuc = "Sở Hướng Phí Mị";
  }

  if (point > 70) {
    thucLuc = "Nhất Đại Tôn Sư";
  }

  if (point > 75) {
    thucLuc = "Thần Công Cái Thế";
  }

  if (point > 80) {
    thucLuc = "Cử Thế Vô Song";
  }

  if (point > 85) {
    thucLuc = "Kinh Thế Hãi Tục";
  }

  if (point > 90) {
    thucLuc = "Kinh Thiên Động Địa";
  }

  if (point > 95) {
    thucLuc = "Chấn Cổ Thước Kim";
  }

  if (point > 100) {
    thucLuc = "Siêu Phàm Nhập Thánh";
  }

  if (point > 105) {
    thucLuc = "Uy Trấn Hoàn Vũ";
  }

  if (point > 110) {
    thucLuc = "Vô Tiền Khoáng Hậu";
  }

  if (point > 115) {
    thucLuc = "Thiên Nhân Hợp Nhất";
  }

  if (point > 120) {
    thucLuc = "Thâm Tàng Bất Lộ";
  }

  if (point > 135) {
    thucLuc = "Thâm Bất Khả Trắc";
  }

  if (point > 150) {
    thucLuc = "Phản Phác Quy Chân";
  }

  return thucLuc;
};

export default function NoiCongNavigation({ inner }) {
  const { detail, maxLevel, slug } = inner;
  const [inputLevel, setInputLevel] = useState(detail.level);
  const pathName = usePathname();

  const onSubmit = (e) => {
    e.preventDefault();
    if (
      isNaN(inputLevel) ||
      inputLevel < 1 ||
      inputLevel > maxLevel ||
      inputLevel === detail.level
    ) {
      return;
    }

    window.history.pushState(null, "", `/noi-cong/${slug}/${inputLevel}`);
  };

  const onPrev = (e) => {
    e.preventDefault();
    setInputLevel(detail.level - 1);

    window.history.pushState(null, "", `/noi-cong/${slug}/${detail.level - 1}`);
  };

  const onNext = (e) => {
    e.preventDefault();
    setInputLevel(detail.level + 1);

    window.history.pushState(null, "", `/noi-cong/${slug}/${detail.level + 1}`);
  };

  useEffect(() => {
    const paths = pathName.split("/");
    if (paths[1] != "noi-cong") {
      return;
    }
    setInputLevel(parseInt(paths[3]));
  }, [pathName]);

  return (
    <form onSubmit={onSubmit}>
      Công lực:
      <div>
        <b className="pl-3 pr-3 text-lg">
          {detail.level > 1 ? (
            <a onClick={onPrev} href={`/noi-cong/${slug}/${detail.level - 1}`}>
              -
            </a>
          ) : (
            <span className="text-gray-400">-</span>
          )}
        </b>
        <b className="plg-3 pr-3 text-lg">
          {detail.level < maxLevel ? (
            <a onClick={onNext} href={`/noi-cong/${slug}/${detail.level + 1}`}>
              +
            </a>
          ) : (
            <span className="text-gray-400">+</span>
          )}
        </b>

        <input
          value={inputLevel}
          required
          max={`${maxLevel}`}
          className="w-8 p-1 rounded-sm mr-1 outline-none border-b-2 border-gray-300"
          onInput={(e) => {
            let n = parseInt(e.target.value);
            if (isNaN(n)) {
              n = 0;
            }
            if (n > maxLevel) {
              n = maxLevel;
            }
            setInputLevel(n);
          }}
        />
        {`/${maxLevel}`}
      </div>
      Điểm nội công: {`${detail.point}`} <br />
      <b>{getThucLuc(detail.point)}</b>
    </form>
  );
}
