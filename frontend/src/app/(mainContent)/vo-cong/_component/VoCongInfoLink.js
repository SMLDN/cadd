"use client";
import { useSelector } from "@/lib/store";
import Image from "next/image";

export default function VoCongInfoLink({ skill }) {
  const { slug, maxLevel, name, photo } = skill;

  const selectedSkillSlug = useSelector(
    (state) => state.voCong.selectedSkill?.slug
  );

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
      className="mb-5 flex flex-row space-x-1"
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
