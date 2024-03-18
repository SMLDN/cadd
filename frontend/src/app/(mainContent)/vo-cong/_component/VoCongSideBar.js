"use client";
import { useSelector } from "@/lib/store";
import VoCongItem from "./VoCongItem";
import { fetchSkillList } from "@/lib/slice/voCongSlice";
import { usePathname } from "next/navigation";
import { useEffect } from "react";
import { useDispatch } from "@/lib/store";

const typeList = [
  "cs_ks",
  "cs_dj",
  "cs_sj",
  "cs_dd",
  "cs_sd",
  "cs_bs",
  "cs_sc",
  "cs_cg",
  "cs_dg",
  "cs_aq",
  "cs_qmtaolu",
];

export default function VoCongSideBar({ setList, initSet }) {
  const dispatch = useDispatch();
  const pathName = usePathname();

  const setType = useSelector((state) => {
    return state.voCong.selectedType;
  });

  const slug = useSelector((state) => state.voCong.selectedSkill?.slug);
  const level = useSelector(
    (state) => state.voCong.selectedSkill?.detail.level
  );

  useEffect(() => {
    const paths = pathName.split("/");
    if (paths[1] != "vo-cong") {
      return;
    }
    if (paths[2] === slug && paths[3] === level) {
      return;
    }
    dispatch(fetchSkillList({ slug: paths[2], level: paths[3] }));
  }, [pathName]);

  return (
    <>
      {typeList.map((set) => {
        let show = false;
        if ((setType == null && set === initSet.type) || set === setType) {
          show = true;
        }
        return (
          <VoCongItem
            key={set}
            setList={setList}
            initSetId={initSet.id}
            setType={set}
            show={show}
          />
        );
      })}
    </>
  );
}
