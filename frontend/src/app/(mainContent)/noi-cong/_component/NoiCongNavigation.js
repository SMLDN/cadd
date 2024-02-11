"use client";
import Link from "next/link";
import { useState } from "react";
import { useRouter } from "next/navigation";

export default function NoiCongNavigation ({ inner }) {
  const { detail } = inner;
  const getThucLuc = () => {
    let thucLuc = "Bất Kham Nhất Kích";
    if (detail.point > 5) {
      thucLuc = "Sơ Học Sạ Luyện";
    }

    if (detail.point > 10) {
      thucLuc = "Sơ Khuy Môn Kính";
    }

    if (detail.point > 15) {
      thucLuc = "Lực Hữu Tiểu Thành";
    }

    if (detail.point > 20) {
      thucLuc = "Giá Khinh Tựu Thực";
    }

    if (detail.point > 25) {
      thucLuc = "Dung Hội Quán Thông";
    }

    if (detail.point > 30) {
      thucLuc = "Lô Hỏa Thuần Thanh";
    }

    if (detail.point > 35) {
      thucLuc = "Kỳ Tài Xuất Chúng";
    }

    if (detail.point > 40) {
      thucLuc = "Thần Hồ Kỳ Kỹ";
    }

    if (detail.point > 45) {
      thucLuc = "Xuất Thần Nhập Hóa";
    }

    if (detail.point > 50) {
      thucLuc = "Ngạo Thị Quần Hùng";
    }

    if (detail.point > 55) {
      thucLuc = "Đăng Phong Tạo Cực";
    }

    if (detail.point > 60) {
      thucLuc = "Vô Dữ Luận Tỉ";
    }

    if (detail.point > 65) {
      thucLuc = "Sở Hướng Phí Mị";
    }

    if (detail.point > 70) {
      thucLuc = "Nhất Đại Tôn Sư";
    }

    if (detail.point > 75) {
      thucLuc = "Thần Công Cái Thế";
    }

    if (detail.point > 80) {
      thucLuc = "Cử Thế Vô Song";
    }

    if (detail.point > 85) {
      thucLuc = "Kinh Thế Hãi Tục";
    }

    if (detail.point > 90) {
      thucLuc = "Kinh Thiên Động Địa";
    }

    if (detail.point > 95) {
      thucLuc = "Chấn Cổ Thước Kim";
    }

    if (detail.point > 100) {
      thucLuc = "Siêu Phàm Nhập Thánh";
    }

    if (detail.point > 105) {
      thucLuc = "Uy Trấn Hoàn Vũ";
    }

    if (detail.point > 110) {
      thucLuc = "Vô Tiền Khoáng Hậu";
    }

    if (detail.point > 115) {
      thucLuc = "Thiên Nhân Hợp Nhất";
    }

    if (detail.point > 120) {
      thucLuc = "Thâm Tàng Bất Lộ";
    }

    if (detail.point > 135) {
      thucLuc = "Thâm Bất Khả Trắc";
    }

    if (detail.point > 150) {
      thucLuc = "Phản Phác Quy Chân";
    }

    return thucLuc;
  };

  const [inputLevel, setInputLevel] = useState(detail.level);
  const router = useRouter();

  const onSubmit = (e) => {
    e.preventDefault();
    if (
      isNaN(inputLevel) ||
      inputLevel < 1 ||
      inputLevel > inner.maxLevel ||
      inputLevel === detail.level
    ) {
      return;
    }

    router.push(`/noi-cong/${inner.slug}/${inputLevel}`);
  };

  return (
    <form onSubmit={onSubmit}>
      Công lực:
      <div>
        <b className="pl-3 pr-3 text-lg">
          {detail.level > 1 ? (
            <Link href={`/noi-cong/${inner.slug}/${detail.level - 1}`}>-</Link>
          ) : (
            <span className="text-gray-400">-</span>
          )}
        </b>
        <b className="plg-3 pr-3 text-lg">
          {detail.level < inner.maxLevel ? (
            <Link href={`/noi-cong/${inner.slug}/${detail.level + 1}`}>+</Link>
          ) : (
            <span className="text-gray-400">+</span>
          )}
        </b>

        <input
          defaultValue={`${detail.level}`}
          required
          max={`${inner.maxLevel}`}
          className="w-8 p-1 rounded-sm mr-1 outline-none border-b-2 border-gray-300"
          onInput={(e) => {
            setInputLevel(parseInt(e.target.value));
          }}
        />
        {`/${inner.maxLevel}`}
      </div>
      Điểm nội công: {`${detail.point}`} <br />
      <b>{getThucLuc()}</b>
    </form>
  );
}
