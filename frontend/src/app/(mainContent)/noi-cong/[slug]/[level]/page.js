import NoiCongSideBar from "@/app/(mainContent)/noi-cong/_components/NoiCongSideBar";
import { useFrame } from "@/app/(mainContent)/Frame";

async function getSchoolInnerList() {
  const req = await fetch("http://localhost/api/school/");
  return await req.json();
}

export default async function NoiCongPage({ params }) {
  const schoolList = await getSchoolInnerList();

  const defaultSchool = schoolList.find((school) => {
    return school.innerList.find((inner) => {
      return inner.slug === params.slug;
    });
  });

  const layout = useFrame(
    <NoiCongSideBar defaultSchoolId={defaultSchool.id} schoolList={schoolList} />,
    <div>info noi con</div>,
    <div>main frame</div>
  );

  return layout;
}
