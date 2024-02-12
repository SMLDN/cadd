"use client";
import { useDispatch, useSelector } from "@/lib/store";
import { changeSelectType } from "@/lib/slice/voCongSlice";
import "./voCongItem.css";
import VoCongItemLink from "./VoCongItemLink";

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

export default function VoCongItem({ setList, setType, initSetId, show }) {
  const dispatch = useDispatch();

  const selectedType = useSelector((state) => state.voCong.selectedType);
  const selectedSkillSlug = useSelector(
    (state) => state.voCong.selectedSkill?.slug
  );

  const onClick = () => {
    if (selectedType === setType) {
      return;
    }
    dispatch(changeSelectType(setType));
  };

  const getSetSkillComponents = () => {
    const filteredSet = setList.filter((set) => {
      return set.type === setType;
    });

    return filteredSet.map((set) => {
      return (
        <VoCongItemLink
          key={set.id}
          slug={set.initSkill.slug}
          maxLevel={set.initSkill.maxLevel}
          activedFlg={
            (selectedSkillSlug == null && initSetId === set.id) ||
            selectedSkillSlug === set.initSkill.slug
          }
          label={set.name}
        />
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
