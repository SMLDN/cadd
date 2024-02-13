"use client";
import { useSelector } from "@/lib/store";

export default function NoiCongInfo({ initInner }) {
  const selectedNoiCong = useSelector((state) => state.noiCong.selectedNoiCong);
  const getInner = () => {
    return selectedNoiCong != null ? selectedNoiCong : initInner;
  };
  const inner = getInner();
  return <div>{inner.desc}</div>;
}
