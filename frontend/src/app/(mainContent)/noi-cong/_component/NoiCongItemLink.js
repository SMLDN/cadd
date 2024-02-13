"use client";
import { useSelector } from "@/lib/store";
import "./itemLink.css";

export default function NoiCongItemLink({ activedFlg, slug, maxLevel, label }) {
  const selectedNoiCongSlug = useSelector(
    (state) => state.noiCong.selectedNoiCong?.slug
  );

  const onLinkClick = (e) => {
    e.preventDefault();
    if (selectedNoiCongSlug === slug) {
      return;
    }
    window.history.pushState(null, "", `/noi-cong/${slug}/${maxLevel}`);
  };

  const getActiveFlg = () => {
    if (selectedNoiCongSlug == null) {
      return activedFlg;
    }
    return selectedNoiCongSlug === slug;
  };

  return (
    <a
      onClick={onLinkClick}
      key={slug}
      className={"inner-item block" + (getActiveFlg() ? " actived" : "")}
      href={`/noi-cong/${slug}/${maxLevel}`}
    >
      {label}
    </a>
  );
}
