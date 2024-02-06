"use client";
import { useDispatch, useSelector } from "@/lib/store";
import SchoolInnerItem from "@/app/(mainContent)/noi-cong/_components/SchoolInnerItem";
import { changeSelectSchoolId } from "@/lib/slice/noiCongSlice";

export default function NoiCongSideBar({ defaultSchoolId, schoolList }) {
  const schoolId = useSelector((state) => {
    return state.noiCong.selectedSchoolId;
  });

  return (
    <>
      {schoolList.map((school) => {
        let show = false;
        if (
          (schoolId == null && school.id === defaultSchoolId) ||
          school.id === schoolId
        ) {
          show = true;
        }
        return (
          <SchoolInnerItem key={school.slug} school={school} show={show} />
        );
      })}
    </>
  );
}
