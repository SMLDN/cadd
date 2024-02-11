"use client";
import { useDispatch, useSelector } from "@/lib/store";
import { fetchSkillList } from "@/lib/slice/voCongSlice";

export default function VoCongItemLink({ activedFlg, slug, maxLevel, label }) {
  const dispatch = useDispatch();
  const selectedSkillSlug = useSelector(
    (state) => state.voCong.selectedSkill?.slug
  );

  const onClick = (e) => {
    e.preventDefault();
    if (selectedSkillSlug === slug) {
      return;
    }
    dispatch(fetchSkillList({ slug: slug, level: maxLevel }));
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
