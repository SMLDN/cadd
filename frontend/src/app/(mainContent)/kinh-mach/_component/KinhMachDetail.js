import Image from "next/image";
import KinhMachNavigation from "./KinhManhNavigation";
import "./detail.css";

export default function KinhMachDetail({ kinhMach }) {
  const { detail } = kinhMach;

  const getChiSoNoi = () => {
    let ret = "";
    for (let i = 0; i < kinhMach.chiSoTienCuNoi; i++) {
      ret += "★";
    }
    return ret;
  };

  const getChiSoNgoai = () => {
    let ret = "";
    for (let i = 0; i < kinhMach.chiSoTienCuNgoai; i++) {
      ret += "★";
    }
    return ret;
  };

  const getKinhMachTypeBg = () => {
    if (kinhMach.type === "0") {
      return (
        <div>
          <Image
            src={`/static/img/ui/duong.png`}
            title="Dương"
            alt="Dương"
            width={24}
            height={24}
          />
        </div>
      );
    }
    if (kinhMach.type === "1") {
      return (
        <div>
          <Image
            src={`/static/img/ui/cuong.png`}
            title="Cương"
            alt="Cương"
            width={24}
            height={24}
          />
        </div>
      );
    }

    if (kinhMach.type === "2") {
      return (
        <div>
          <Image
            src={`/static/img/ui/am.png`}
            title="Âm"
            alt="Âm"
            width={24}
            height={24}
          />
        </div>
      );
    }

    if (kinhMach.type === "3") {
      return (
        <div>
          <Image
            src={`/static/img/ui/nhu.png`}
            title="Nhu"
            alt="Nhu"
            width={24}
            height={24}
          />
        </div>
      );
    }

    if (kinhMach.type === "4") {
      return (
        <div>
          <Image
            src={`/static/img/ui/thai-cuc.png`}
            title="Thái Cực"
            alt="Thái Cực"
            width={24}
            height={24}
          />
        </div>
      );
    }
  };

  return (
    <div className="detail">
      <h1 className="detail-header">{kinhMach.name}</h1>
      {/* prop box */}
      <div className="propBox font-medium mb-3 mt-2" style={{}}>
        <div className="inner-bg">
          <Image
            width={60}
            height={60}
            alt={`${kinhMach.name}`}
            src={`/static/img/kinh-mach/${kinhMach.slug}.png`}
          />
        </div>
        <div>
          <KinhMachNavigation kinhMach={kinhMach} />
        </div>
        <div>
          Chân khí tiến cấp:{" "}
          <span className="text-green-600">{`${detail.chanKhiTienCap?.toLocaleString()}`}</span>
          <br />
          Tổng chân khí:{" "}
          <span className="text-green-600">{`${detail.chanKhiTong?.toLocaleString()}`}</span>
          <br />
          Tiến cử Nội Công:{" "}
          <span className="text-green-600">{getChiSoNoi()}</span>
          <br />
          Tiến cử Ngoại Công:{" "}
          <span className="text-green-600">{getChiSoNgoai()}</span>
          <br />
        </div>
        <div>{getKinhMachTypeBg()}</div>
      </div>

      {/* detail box */}
      <div className="text-white bg-zinc-950 p-2 opacity-75">
        {detail.baoKichNgoai && (
          <>
            Ngoại công bạo kích: +{detail.baoKichNgoai}
            <br />
          </>
        )}

        {detail.chinhXac && (
          <>
            Chính xác ngoại công: +{detail.chinhXac}
            <br />
          </>
        )}

        {detail.phongKinh && (
          <>
            Phong Kình: +{detail.phongKinh}
            <br />
          </>
        )}

        {detail.thePhach && (
          <>
            Thể Phách: +{detail.phongKinh}
            <br />
          </>
        )}

        {detail.hoiKhiHuyet && (
          <>
            Hồi khí huyết: +{detail.hoiKhiHuyet}
            <br />
          </>
        )}

        {detail.cuongPhong && (
          <>
            Cương phòng: +{detail.cuongPhong}
            <br />
          </>
        )}

        {detail.nhuPhong && (
          <>
            Nhu phòng: +${detail.nhuPhong}
            <br />
          </>
        )}

        {detail.baoKichNoi && (
          <>
            Nội công bạo kích: +{detail.baoKichNoi}
            <br />
          </>
        )}

        {detail.chinhXacNoi && (
          <>
            Chính Xác Nội Công: +{detail.chinhXacNoi}
            <br />
          </>
        )}

        {detail.lucTay && (
          <>
            Lực tay: +{detail.lucTay}
            <br />
          </>
        )}

        {detail.neTranh && (
          <>
            Né Tránh: +{detail.neTranh}
            <br />
          </>
        )}

        {detail.thanPhap && (
          <>
            Thân Pháp: +{detail.thanPhap}
            <br />
          </>
        )}

        {detail.noiPhong && (
          <>
            Nội Phòng: +{detail.noiPhong}
            <br />
          </>
        )}

        {detail.duongPhong && (
          <>
            Dương Phòng: +{detail.duongPhong}
            <br />
          </>
        )}

        {detail.boQuaNoiPhong && (
          <>
            Bỏ qua Nội Phòng: +{detail.boQuaNoiPhong}
            <br />
          </>
        )}

        {detail.amPhong && (
          <>
            Âm phòng: +{detail.amPhong}
            <br />
          </>
        )}

        {detail.noiTuc && (
          <>
            Nội tức: +{detail.noiTuc}
            <br />
          </>
        )}

        {detail.canhKhi && (
          <>
            Canh khí: +{detail.canhKhi}
            <br />
          </>
        )}

        {detail.khiHuyet && (
          <>
            Khí Huyết: +{detail.khiHuyet}
            <br />
          </>
        )}

        {detail.noiLuc && (
          <>
            Nội Lực: +{detail.noiLuc}
            <br />
          </>
        )}

        {detail.boQuaNoiGiai && (
          <>
            Bỏ qua Nội Công Hóa Giải: +{detail.boQuaNoiGiai}
            <br />
          </>
        )}

        {detail.noiGiai && (
          <>
            Nội công hóa giải: +{detail.noiGiai}
            <br />
          </>
        )}

        {detail.satThuongBaoKichNoi && (
          <>
            Sát thương Nội công bạo kích: +{detail.satThuongBaoKichNoi}
            <br />
          </>
        )}

        {detail.satThuongBaoKichNgoai && (
          <>
            Sát thương Ngoại công bạo kích: +{detail.satThuongBaoKichNgoai}
            <br />
          </>
        )}

        {detail.noiLucCooldown && (
          <>
            Rút ngắn thời gian hồi Nội lực(%): +{detail.noiLucCooldown}
            <br />
          </>
        )}

        {detail.mgstBaoKich && (
          <>
            Giảm sát thương bạo kích(%): +{detail.mgstBaoKich}
            <br />
          </>
        )}

        {detail.khiHuyetCooldown && (
          <>
            Rút ngắn thời gian hồi Khí huyết(%): +{detail.khiHuyetCooldown}
            <br />
          </>
        )}

        {detail.tlbkGiam && (
          <>
            Xác suất bị bạo kích giảm(%): +{detail.tlbkGiam}
            <br />
          </>
        )}

        {detail.tyLeChinhXac && (
          <>
            Chính xác Ngoại công(%): +{detail.tyLeChinhXac}
            <br />
          </>
        )}

        {detail.tyLeChinhXacNoi && (
          <>
            Chính xác Nội công(%): +${detail.tyLeChinhXacNoi}
            <br />
          </>
        )}
        {detail.level === kinhMach.maxLevel && (
          <span className="text-green-600">{kinhMach.chiSoThem}</span>
        )}
        <br />
        <br />
        <span className="text-red-500">{`[Tiến cử ${kinhMach.school.name} chủ tu]`}</span>
      </div>
    </div>
  );
}
