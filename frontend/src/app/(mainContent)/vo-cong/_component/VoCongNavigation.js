"use client";
import { useState } from "react";

export default function VoCongNavigation({ skill }) {
  const { detail } = skill;

  const [inputLevel, setInputLevel] = useState(detail.level);

  const onSubmit = (e) => {
    e.preventDefault();
    if (
      isNaN(inputLevel) ||
      inputLevel < 1 ||
      inputLevel > skill.maxLevel ||
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
          {detail.level > 1 ? (
            <a
              onClick={onPrev}
              href={`/vo-cong/${skill.slug}/${detail.level - 1}`}
            >
              -
            </a>
          ) : (
            <span className="text-gray-400">-</span>
          )}
        </b>
        <b className="plg-3 pr-3 text-lg">
          {detail.level < skill.maxLevel ? (
            <a
              onClick={onNext}
              href={`/vo-cong/${skill.slug}/${detail.level + 1}`}
            >
              +
            </a>
          ) : (
            <span className="text-gray-400">+</span>
          )}
        </b>

        <input
          defaultValue={`${detail.level}`}
          required
          max={`${skill.maxLevel}`}
          className="w-8 p-1 rounded-sm mr-1 outline-none border-b-2 border-gray-300"
          onInput={(e) => {
            setInputLevel(parseInt(e.target.value));
          }}
        />
        {`/${skill.maxLevel}`}
      </div>
    </form>
  );
}
