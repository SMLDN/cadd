"use client";
import Image from "next/image";
import VoCongNavigation from "./VoCongNavigation";
import { useSelector } from "@/lib/store";
import "./voCongDetail.css";

export default function VoCongDetail({ initSkillDetail }) {
  const selectedSkill = useSelector((state) => state.voCong.selectedSkill);

  const skill = selectedSkill != null ? selectedSkill : initSkillDetail;
  const { detail } = skill;

  const satThuongVuKhiMin = useSelector(
    (state) => state.userProp.satThuongVuKhiMin
  );
  const satThuongVuKhiMax = useSelector(
    (state) => state.userProp.satThuongVuKhiMax
  );
  const satThuongXaKichMin = useSelector(
    (state) => state.userProp.satThuongXaKichMin
  );
  const satThuongXaKichMax = useSelector(
    (state) => state.userProp.satThuongXaKichMax
  );
  const uyLucCanThan = useSelector((state) => state.userProp.uyLucCanThan);
  const uyLucNoiCong = useSelector((state) => state.userProp.uyLucNoiCong);
  const uyLucTamXa = useSelector((state) => state.userProp.uyLucTamXa);
  const binhLuc = useSelector((state) => state.userProp.binhLuc);

  const dmgTypeText = {
    PhyDamage: "Ngoại công",
  };

  const getFormulaJson = () => {
    const dmgFormula = detail.dmgFormula;
    if (dmgFormula == null) {
      return null;
    }
    return JSON.parse(dmgFormula);
  };

  let formula = getFormulaJson();

  const getDesc = () => {
    const desc = detail.desc;
    if (formula == null) {
      return desc;
    }
    const propValue = {
      MinMeleeDamage: satThuongVuKhiMin,
      MaxMeleeDamage: satThuongVuKhiMax,
      MinShotDamage: satThuongXaKichMin,
      MaxShotDamage: satThuongXaKichMax,
      MagicPower: uyLucNoiCong,
      MagicPowerAdd: 0,
      MeleePower: uyLucCanThan,
      MeleePowerAdd: 0,
      ShotPower: uyLucTamXa,
      ShotPowerAdd: 0,
    };
    const argv = [0, formula.baseDmg, formula.multiplier, formula.hitCount];
    const prop = [0];
    for (let i = 1; i < 12; i++) {
      if (formula["prop" + i] != null) {
        prop[i] = propValue[formula["prop" + i]];
      } else {
        prop[i] = 0;
      }
    }

    const minDmg = Math.floor(eval(formula["minDmgFormula"]));
    const maxDmg = Math.floor(eval(formula["maxDmgFormula"]));

    const getAddedDmgColor = (f) => {
      for (let i = 1; i < 12; i++) {
        const propText = formula["prop" + i];
        if (propText == null) {
          continue;
        }

        const p = f.indexOf("prop[" + i + "]");
        if (p < 0) {
          continue;
        }

        if (propText === "MeleePower") {
          return "#ff0000";
        }
        if (propText === "MagicPower") {
          return "#00ffff";
        }
        if (propText === "ShotPower") {
          return "#00ff00";
        }
      }
    };
    let addedDmgTotal = 0;

    const getAddedDmgStr = () => {
      let ret = "";
      let cnt = 1;
      while (true) {
        const f = formula["addedDmgFormula" + cnt];
        if (f == null) {
          break;
        }
        cnt += 1;
        const addedDmg = Math.floor(eval(f));
        addedDmgTotal += addedDmg;
        ret += `<font color="${getAddedDmgColor(f)}">(+${addedDmg})</font>`;
      }
      return ret;
    };

    const getWeaponDmgStr = () => {
      if (formula["minDmgFormula"] === formula["maxDmgFormula"]) {
        return `${minDmg}`;
      }
      return `${minDmg}~${maxDmg}`;
    };

    const normalizeDmg = () => {
      let weaponDmg = 0;
      if (formula["minDmgFormula"] === formula["maxDmgFormula"]) {
        weaponDmg = minDmg;
      } else {
        weaponDmg = (minDmg + maxDmg) / 2;
      }
      const dmg = weaponDmg + addedDmgTotal + binhLuc;
      return Math.round(dmg / formula.hitCount);
    };

    const dmgStr = `<font color="#ffff00">(${getWeaponDmgStr()})</font>${getAddedDmgStr()}<font color="#f728ff">(+${binhLuc})</font> ${
      dmgTypeText[formula.damageType]
    } sát thương (tổng <font color="#ffff00">${
      formula.hitCount
    }</font>, mỗi đòn <font color="#ffff00">${normalizeDmg()}</font> sát thương)`;

    return desc.replace("__ZDN_DMG__", dmgStr);
  };

  const getTotalDmg = () => {
    if (formula == null) {
      return 0;
    }
    const propValue = {
      MinMeleeDamage: satThuongVuKhiMin,
      MaxMeleeDamage: satThuongVuKhiMax,
      MinShotDamage: satThuongXaKichMin,
      MaxShotDamage: satThuongXaKichMax,
      MagicPower: uyLucNoiCong,
      MagicPowerAdd: 0,
      MeleePower: uyLucCanThan,
      MeleePowerAdd: 0,
      ShotPower: uyLucTamXa,
      ShotPowerAdd: 0,
    };
    const argv = [0, formula.baseDmg, formula.multiplier, formula.hitCount];
    const prop = [0];
    for (let i = 1; i < 12; i++) {
      if (formula["prop" + i] != null) {
        prop[i] = propValue[formula["prop" + i]];
      } else {
        prop[i] = 0;
      }
    }

    const minDmg = Math.floor(eval(formula["minDmgFormula"]));
    const maxDmg = Math.floor(eval(formula["maxDmgFormula"]));

    let weaponDmg = 0;
    if (formula["minDmgFormula"] === formula["maxDmgFormula"]) {
      weaponDmg = minDmg;
    } else {
      weaponDmg = (minDmg + maxDmg) / 2;
    }

    let addedDmgTotal = 0;

    let cnt = 1;
    while (true) {
      const f = formula["addedDmgFormula" + cnt];
      if (f == null) {
        break;
      }
      cnt += 1;
      const addedDmg = Math.floor(eval(f));
      addedDmgTotal += addedDmg;
    }

    return Math.floor(weaponDmg + addedDmgTotal + binhLuc);
  };

  const getChiSoChinh = () => {
    let power = skill.power;
    let ret = "";
    let divide = Math.floor(power / 2);

    for (let i = 0; i < divide; i++) {
      ret += "★";
    }

    if (power % 2 != 0) {
      ret += "☆";
    }
    return ret;
  };

  const getPhanLoai = () => {
    if (skill.effectType === "0") {
      return "Khí chiêu";
    }
    if (skill.effectType === "1") {
      return "Thực chiêu";
    }
    if (skill.effectType === "2") {
      return "Hư chiêu(phá thủ)";
    }
    if (skill.effectType === "3") {
      return "Giá chiêu";
    }
  };

  return (
    <div className="detail">
      {/* inner name */}
      <h1 className="detail-header">{skill.name}</h1>
      {/* prop box */}
      <div className="propBox font-medium mb-3 mt-2" style={{}}>
        <div className="inner-bg">
          <Image
            width={60}
            height={60}
            alt={`${skill.name}`}
            src={`/static/img/vo-cong/${skill.photo}`}
          />
        </div>
        <div>
          <VoCongNavigation skill={skill} />
        </div>
        <div>
          Bộ: {`${skill.set.name}`}
          <br />
          Tu vi tiến cấp:{" "}
          <span className="text-green-600">
            {detail.tuViTienCap.toLocaleString()}
          </span>
          <br />
          Chỉ số chính:{" "}
          <span className="text-amber-500">{getChiSoChinh()}</span>
        </div>
      </div>
      {/* detail box */}
      <div className="text-white bg-zinc-950 p-2 opacity-75">
        Phân loại: {getPhanLoai()}
        <br />
        {skill.lockFlg === "1" && (
          <>
            Khóa mục tiêu
            <br />
          </>
        )}
        <br />
        Cự ly tối đa: {detail.hitShapePara2.toFixed(1)} mét
        <br />
        Thời gian hồi khí: {(detail.coolDownTime / 1000).toFixed(1)} giây
        <br />
        {detail.consumeMp > 0 && (
          <>
            Nội lực mất: {detail.consumeMp}
            <br />
          </>
        )}
        {detail.consumeAp > 0 && (
          <>
            Nộ khí mất: {detail.consumeAp}
            <br />
          </>
        )}
        {formula != null && (
          <>
            Số đòn: {formula.hitCount}
            <br />
            Tổng sát thương: {getTotalDmg()}
            <br />
          </>
        )}
        <br />
        <span dangerouslySetInnerHTML={{ __html: getDesc() }}></span>
      </div>
    </div>
  );
}
