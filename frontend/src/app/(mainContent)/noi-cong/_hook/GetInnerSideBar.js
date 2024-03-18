"use client";
import { useSelector } from "@/lib/store";

export default function useInnerSideBar({ initSchoolId }) {
  const storeSchoolId = useSelector((state) => {
    return state.noiCong.selectedSchoolId;
  });

  return {
    schoolId: storeSchoolId ? storeSchoolId : initSchoolId,
  };
}
