import Image from "next/image";
import NoiCongNavigation from "./NoiCongNavigation";
import "./noiCongDetail.css";
export default function NoiCongDetail({ inner }) {
  const detail = inner.detail;

  const dmgByType = (type) => {
    if (type === "0") {
      return "Dương, Cương";
    } else if (type == "1") {
      return "Âm, Nhu";
    }
    return "Thái Cực";
  };

  const dmgPropText = () => {
    return (
      <>
        Sát thương của chiêu thức mang thuộc tính{" "}
        <span className="text-pink-400">{dmgByType(inner.type)}</span> +20%
        <br />
        Sát thương của chiêu thức mang thuộc tính{" "}
        <span className="text-pink-400">
          {inner.type === "2" ? "Dương, Cương, Âm, Nhu" : "Thái Cực"}
        </span>{" "}
        +16%
      </>
    );
  };

  const effectInfoText = () => {
    if (detail.effectInfo?.length > 0) {
      return <>{`${detail.effectInfo}`}</>;
    }
    const textColor = ["first", "second", "third"];
    let cnt = 0;
    return detail.effectExtInfo.map((effect) => {
      const idx = effect.indexOf(":");
      if (idx < 0) {
        return (
          <div key={`effect${cnt++}`}>
            {effect}
            <br />
          </div>
        );
      }

      const key = effect.substring(0, idx);
      const value = effect.substring(idx, effect.length);
      const color = textColor[cnt++];
      if (color == null) {
        return (
          <div key={`effect${cnt++}`}>
            {effect}
            <br />
          </div>
        );
      }

      return (
        <div key={`effect${cnt++}`}>
          <span className={color}>{key}</span>
          {value} <br />
        </div>
      );
    });
  };

  const getInnerTypeBg = () => {
    if (inner.type === "0") {
      return (
        <div>
          <Image
            src={`/static/img/ui/duong.png`}
            title="Dương"
            alt="Dương"
            width={24}
            height={24}
          />
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
    if (inner.type === "1") {
      return (
        <div>
          <Image
            src={`/static/img/ui/am.png`}
            title="Âm"
            alt="Âm"
            width={24}
            height={24}
          />
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

    return (
      <div>
        <Image
          src={`/static/img/ui/thai-cuc.png`}
          title="Thái cực"
          alt="Thái cực"
          width={24}
          height={24}
        />
      </div>
    );
  };

  return (
    <div className="detail">
      {/* inner name */}
      <h1 className="detail-header">{inner.name}</h1>
      {/* prop box */}
      <div className="propBox font-medium mb-3 mt-2" style={{}}>
        <div className="inner-bg">
          <Image
            width={60}
            height={60}
            alt={`${inner.name}`}
            src={`/static/img/noi-cong/${inner.school.slug}-${inner.rank}.png`}
          />
        </div>
        <div>
          <NoiCongNavigation inner={inner} />
        </div>
        <div>
          Thuộc về: {`${inner.school.name}`}
          <br />
          Nộ khí tối đa: {`${inner.maxRage}`}
          <br />
          Tu vi tiến cấp:{" "}
          <span className="text-green-600">
            {detail.tuViTienCap?.toLocaleString()}
          </span>
          <br />
          Tổng tu vi:{" "}
          <span className="text-green-600">{`${detail.tuViTong.toLocaleString()}`}</span>
        </div>
        <div>{getInnerTypeBg()}</div>
      </div>
      {/* detail box */}
      <div className="text-white bg-zinc-950 p-2 opacity-75">
        Lực Tay: +{`${detail.lucTay}`}<br />
        Thân Pháp: +{`${detail.thanPhap}`}<br />
        Nội Tức: +{`${detail.noiTuc}`}<br />
        Canh Khí: +{`${detail.canhKhi}`}<br />
        Thể Phách: +{`${detail.thePhach}`}<br />
        <div className="text-yellow-400 mt-2">
          <b>Nội công phát huy tối đa thực lực trang bị</b>
          <br />
          Lực Tay: +{`${Math.floor(detail.lucTay * 1.5)}`}<br />
          Thân Pháp: +{`${Math.floor(detail.thanPhap * 1.5)}`}<br />
          Nội Tức: +{`${Math.floor(detail.noiTuc * 1.5)}`}<br />
          Canh Khí: +{`${Math.floor(detail.canhKhi * 1.5)}`}<br />
          Thể Phách: +{`${Math.floor(detail.thePhach * 1.5)}`}<br />
        </div>
        <div className="mt-2">
          <b>Vận hành kích hoạt:</b>
          <div className="text-gray-400">
            Khí huyết cực hạn +{`${detail.maxHp}`}<br />
            Nội lực tối đa +{`${detail.maxMp}`}<br />
            Sức đỡ đòn cực hạn +{`${detail.maxParry}`}<br />
            Nội công phòng +{`${detail.innerDef}`}<br />
            {dmgPropText()}
          </div>
        </div>
        {(detail.effectInfo?.length > 0 ||
          detail.effectExtInfo?.length > 0) && (
          <div className="mt-2">
            <b>Đặc hiệu:</b>
            <div className="text-gray-400">{effectInfoText()}</div>
          </div>
        )}
      </div>
    </div>
  );
}