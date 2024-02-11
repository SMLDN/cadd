"use client";
import { useSelector } from "@/lib/store";
import SchoolInnerItem from "@/app/(mainContent)/noi-cong/_component/SchoolInnerItem";

export default function NoiCongSideBar({
  initSchoolId,
  schoolList,
  initInnerSlug,
}) {
  const schoolId = useSelector((state) => {
    return state.noiCong.selectedSchoolId;
  });

  return (
    <>
      {schoolList.map((school) => {
        let show = false;
        if (
          (schoolId == null && school.id === initSchoolId) ||
          school.id === schoolId
        ) {
          show = true;
        }
        return (
          <SchoolInnerItem
            key={school.slug}
            school={school}
            show={show}
            initInnerSlug={initInnerSlug}
          />
        );
      })}
    </>
  );
}
