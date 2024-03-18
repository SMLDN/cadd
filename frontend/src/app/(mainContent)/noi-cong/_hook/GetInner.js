"use client";
import { useSelector } from "@/lib/store";

export default function useInner({ initInner }) {
  const storeState = useSelector((state) => state.noiCong.selectedNoiCong);

  const getInner = () => {
    if (storeState != null) {
      return storeState;
    }
    return initInner;
  };

  return {
    inner: getInner(),
  };
}
