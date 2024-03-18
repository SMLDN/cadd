"use client";
import { useSelector } from "@/lib/store";
import SchoolInnerItem from "@/app/(mainContent)/noi-cong/_component/SchoolInnerItem";
import { usePathname } from "next/navigation";
import { useEffect } from "react";
import { useDispatch } from "@/lib/store";
import { fetchNoiCongList } from "@/lib/slice/noiCongSlice";
import useInnerSideBar from "../_hook/GetInnerSideBar";

export default function NoiCongSideBar({
  initSchoolId,
  initInnerSlug,
  schoolList,
}) {
  const { schoolId } = useInnerSideBar({ initSchoolId });
  const pathName = usePathname();
  const dispatch = useDispatch();

  const slug = useSelector((state) => state.noiCong.selectedNoiCong?.slug);
  const level = useSelector(
    (state) => state.noiCong.selectedNoiCong?.detail.level
  );

  useEffect(() => {
    const paths = pathName.split("/");
    if (paths[1] != "noi-cong") {
      return;
    }
    if (paths[2] === slug && paths[3] === level) {
      return;
    }
    dispatch(fetchNoiCongList({ slug: paths[2], level: paths[3] }));
  }, [pathName]);

  return (
    <>
      {schoolList.map((school) => {
        return (
          <SchoolInnerItem
            key={school.slug}
            school={school}
            initShowFlg={school.id === schoolId}
            initInnerSlug={initInnerSlug}
          />
        );
      })}
    </>
  );
}
