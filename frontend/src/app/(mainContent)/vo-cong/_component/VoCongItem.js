"use client";
import Link from "next/link";
import { useDispatch, useSelector } from "@/lib/store";
import { changeSelectId } from "@/lib/slice/voCongSlice";
import "./voCongItem.css";

export default function VoCongItem({ setList, setType, initSetId, show }) {
  const dispatch = useDispatch();
  const selectedId = useSelector((state) => state.voCong.selectedId);

  const setTypeName = {
    cs_ks: "Bộ Đồ Thủ",
    cs_dj: "Bộ Đơn Kiếm",
    cs_sj: "Bộ Song Kiếm",
    cs_dd: "Bộ Đơn Đao",
    cs_sd: "Bộ Song Đao",
    cs_bs: "Bộ Đoản Kiếm",
    cs_sc: "Bộ Song  Thích",
    cs_cg: "Bộ Trường Côn",
    cs_dg: "Bộ Đoản Côn",
    cs_aq: "Bộ Ám Khí",
    cs_qmtaolu: "Bộ Kỳ Môn",
  };

  const onClick = () => {
    if (selectedId === setType) {
      return;
    }
    dispatch(changeSelectId(setType));
  };

  const getSetSkillComponents = () => {
    const filteredSet = setList.filter((set) => {
      return set.type === setType;
    });
    return filteredSet.map((set) => {
      return (
        <Link
          key={set.id}
          className={
            "vo-cong-item block" + (initSetId === set.id ? " actived" : "")
          }
          href={`/vo-cong/${set.initSkill.slug}/${set.initSkill.maxLevel}`}
        >
          {set.name}
        </Link>
      );
    });
  };

  return (
    <div>
      <button className="vo-cong-header" onClick={onClick}>
        {setTypeName[setType]}
      </button>
      <div className={show ? null : "hidden"}>{getSetSkillComponents()}</div>
    </div>
  );
}
