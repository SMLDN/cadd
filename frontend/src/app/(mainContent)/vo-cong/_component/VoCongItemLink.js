"use client";
import { useSelector } from "@/lib/store";

export default function VoCongItemLink({ activedFlg, slug, maxLevel, label }) {
  const selectedSkillSlug = useSelector(
    (state) => state.voCong.selectedSkill?.slug
  );

  const onClick = (e) => {
    e.preventDefault();
    if (selectedSkillSlug === slug) {
      return;
    }
    window.history.pushState(null, "", `/vo-cong/${slug}/${maxLevel}`);
  };

  return (
    <a
      className={"vo-cong-item block" + (activedFlg ? " actived" : "")}
      href={`/vo-cong/${slug}/${maxLevel}`}
      onClick={onClick}
    >
      {label}
    </a>
  );
}
