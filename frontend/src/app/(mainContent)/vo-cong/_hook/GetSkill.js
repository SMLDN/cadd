"use client";
import { useSelector } from "@/lib/store";

export default function useSkill({ initSkill }) {
  const storeState = useSelector((state) => state.voCong.selectedSkill);

  const getSkill = () => {
    if (storeState != null) {
      return storeState;
    }
    return initSkill;
  };

  return {
    skill: getSkill(),
  };
}
