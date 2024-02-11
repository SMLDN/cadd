"use client";
import { useSelector } from "@/lib/store";
import VoCongItem from "./VoCongItem";

export default function VoCongSideBar({ setList, initSet }) {
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
  const setId = useSelector((state) => {
    return state.voCong.selectedId;
  });

  return (
    <>
      {typeList.map((set) => {
        let show = false;
        if ((setId == null && set === initSet.type) || set === setId) {
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
