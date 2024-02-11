"use client";
import Image from "next/image";
import { useSelector } from "@/lib/store";
import "./voCongInfo.css";
import VoCongInfoLink from "./VoCongInfoLink";

export default function VoCongInfo({ initSkillDetail }) {
  const skillList = useSelector(
    (state) => state.voCong.selectedSkill?.set.skillListAll
  );

  const skillComponent = (skill) => {
    return <VoCongInfoLink key={skill.slug} skill={skill} />;
  };

  return (
    <div>
      {skillList
        ? skillList.map((s) => skillComponent(s))
        : initSkillDetail.set.skillListAll.map((s) => skillComponent(s))}
    </div>
  );
}
