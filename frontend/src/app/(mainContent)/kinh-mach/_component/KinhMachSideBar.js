"use client";
import { useSelector } from "@/lib/store";
import Link from "next/link";
import "./sidebar.css";

export default function KinhMachSideBar({ initKinhMachId, kinhMachList }) {
  const selectedId = useSelector((state) => {
    return state.kinhMach.selectedId;
  });

  return (
    <div className="mt-2">
      {kinhMachList.map((km) => {
        let show = false;
        if (
          (selectedId == null && km.id === initKinhMachId) ||
          km.id === selectedId
        ) {
          show = true;
        }
        return (
          <Link
            key={`${km.slug}`}
            href={`/kinh-mach/${km.slug}/${km.maxLevel}`}
            className={"kinh-mach-item block " + (show ? " actived" : "")}
          >
            {km.name}
          </Link>
        );
      })}
    </div>
  );
}
