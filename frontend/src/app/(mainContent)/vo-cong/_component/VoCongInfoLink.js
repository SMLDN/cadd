"use client";
import { useSelector } from "@/lib/store";
import Image from "next/image";

export default function VoCongInfoLink({ skill }) {
  const { slug, maxLevel, name, photo } = skill;

  let className = "mb-5 flex flex-row space-x-1";

  const selectedSkillSlug = useSelector(
    (state) => state.voCong.selectedSkill?.slug
  );

  if (selectedSkillSlug === slug) {
    className =
      "mb-5 flex flex-row space-x-1 bg-zinc-950 bg-opacity-70 text-yellow-50 rounded-sm";
  }

  // console.log(selectedSkillSlug);

  const selectedSet = useSelector(
    (state) => state.voCong.selectedSkill?.set.id
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
      href={`/vo-cong/${slug}/${maxLevel}`}
      className={className}
      onClick={onClick}
    >
      <div className="img-container">
        <Image
          src={`/static/img/icon/${photo}`}
          alt={name}
          width={50}
          height={50}
        />
      </div>
      <div className="text-sm">{name}</div>
    </a>
  );
}
