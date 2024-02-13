"use client";
import { useState } from "react";
import { usePathname } from "next/navigation";
import { useEffect } from "react";
import { useSelector } from "@/lib/store";

export default function VoCongNavigation({ skill }) {
  const { detail } = skill;
  const pathName = usePathname();

  const [inputLevel, setInputLevel] = useState(detail.level);
  const maxLevel = useSelector((state) => state.voCong.selectedSkill?.maxLevel);
  const storeDetail = useSelector(
    (state) => state.voCong.selectedSkill?.detail
  );

  const getDetail = () => {
    if (storeDetail != null) {
      return storeDetail;
    }
    return detail;
  };

  const getMaxLevel = () => {
    if (maxLevel != null) {
      return maxLevel;
    }
    return skill.maxLevel;
  };

  useEffect(() => {
    const paths = pathName.split("/");
    if (paths[1] != "vo-cong") {
      return;
    }
    setInputLevel(parseInt(paths[3]));
  }, [pathName]);

  const onSubmit = (e) => {
    e.preventDefault();
    if (
      isNaN(inputLevel) ||
      inputLevel < 1 ||
      inputLevel > getMaxLevel() ||
      inputLevel === detail.level
    ) {
      return;
    }

    window.history.pushState(null, "", `/vo-cong/${skill.slug}/${inputLevel}`);
  };

  const onPrev = (e) => {
    e.preventDefault();

    window.history.pushState(
      null,
      "",
      `/vo-cong/${skill.slug}/${detail.level - 1}`
    );
  };

  const onNext = (e) => {
    e.preventDefault();

    window.history.pushState(
      null,
      "",
      `/vo-cong/${skill.slug}/${detail.level + 1}`
    );
  };

  return (
    <form onSubmit={onSubmit}>
      Công lực:
      <div>
        <b className="pl-3 pr-3 text-lg">
          {getDetail().level > 1 ? (
            <a
              onClick={onPrev}
              href={`/vo-cong/${skill.slug}/${getDetail().level - 1}`}
            >
              -
            </a>
          ) : (
            <span className="text-gray-400">-</span>
          )}
        </b>
        <b className="plg-3 pr-3 text-lg">
          {getDetail().level < getMaxLevel() ? (
            <a
              onClick={onNext}
              href={`/vo-cong/${skill.slug}/${getDetail().level + 1}`}
            >
              +
            </a>
          ) : (
            <span className="text-gray-400">+</span>
          )}
        </b>

        <input
          value={inputLevel}
          required
          max={`${getMaxLevel()}`}
          className="w-8 p-1 rounded-sm mr-1 outline-none border-b-2 border-gray-300"
          onInput={(e) => {
            let n = parseInt(e.target.value);
            if (isNaN(n)) {
              n = 0;
            }
            if (n > getMaxLevel()) {
              n = getMaxLevel();
            }
            setInputLevel(n);
          }}
        />
        {`/${getMaxLevel()}`}
      </div>
    </form>
  );
}
