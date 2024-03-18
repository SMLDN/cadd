"use client";
import "./voCongInfo.css";
import VoCongInfoLink from "./VoCongInfoLink";
import useSkill from "../_hook/GetSkill";

export default function VoCongInfo({ initSkillDetail }) {
  const { skill } = useSkill({ initSkill: initSkillDetail });

  const skillComponent = (skill) => {
    return <VoCongInfoLink key={skill.slug} skill={skill} />;
  };

  return <div>{skill?.set?.skillListAll.map((s) => skillComponent(s))}</div>;
}
