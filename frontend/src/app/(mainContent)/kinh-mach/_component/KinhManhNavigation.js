"use client";
import Link from "next/link";
import { useState } from "react";
import { useRouter } from "next/navigation";

export default function KinhMachNavigation({ kinhMach }) {
  const { detail } = kinhMach;
  const [inputLevel, setInputLevel] = useState(detail.level);
  const router = useRouter();

  const onSubmit = (e) => {
    e.preventDefault();
    if (
      isNaN(inputLevel) ||
      inputLevel < 1 ||
      inputLevel > kinhMach.maxLevel ||
      inputLevel === detail.level
    ) {
      return;
    }

    router.push(`/kinh-mach/${kinhMach.slug}/${inputLevel}`);
  };

  return (
    <form onSubmit={onSubmit}>
      Chu thiên:
      <div>
        <b className="pl-3 pr-3 text-lg">
          {detail.level > 1 ? (
            <Link href={`/kinh-mach/${kinhMach.slug}/${detail.level - 1}`}>
              -
            </Link>
          ) : (
            <span className="text-gray-400">-</span>
          )}
        </b>
        <b className="plg-3 pr-3 text-lg">
          {detail.level < kinhMach.maxLevel ? (
            <Link href={`/kinh-mach/${kinhMach.slug}/${detail.level + 1}`}>
              +
            </Link>
          ) : (
            <span className="text-gray-400">+</span>
          )}
        </b>

        <input
          defaultValue={`${detail.level}`}
          required
          max={`${kinhMach.maxLevel}`}
          className="w-8 p-1 rounded-sm mr-1 outline-none border-b-2 border-gray-300"
          onInput={(e) => {
            setInputLevel(parseInt(e.target.value));
          }}
        />
        {`/${kinhMach.maxLevel}`}
      </div>
    </form>
  );
}
