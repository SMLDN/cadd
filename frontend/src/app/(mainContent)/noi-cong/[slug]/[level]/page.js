import NoiCongSideBar from "@/app/(mainContent)/noi-cong/_components/NoiCongSideBar";
import NoiCongInfo from "@/app/(mainContent)/noi-cong/_components/NoiCongInfo";
import NoiCongDetail from "@/app/(mainContent)/noi-cong/_components/NoiCongDetail";
import { useFrame } from "@/app/(mainContent)/Frame";
import { useSwitchTag } from "@/app/(mainContent)/SwitchTag";

async function getSchoolInnerList() {
  const req = await fetch("http://localhost/api/school/");
  return await req.json();
}

async function getInnerDetail(slug, level) {
  const req = await fetch(`http://localhost/api/noi-cong/${slug}/${level}`);
  return await req.json();
}

export default async function NoiCongPage({ params }) {
  const schoolList = await getSchoolInnerList();
  const innerDetail = await getInnerDetail(params.slug, params.level);

  const initSchool = schoolList.find((school) => {
    return school.innerList.find((inner) => {
      return inner.slug === params.slug;
    });
  });

  const switchTag = useSwitchTag("noiCong");

  const layout = useFrame(
    switchTag,
    <NoiCongSideBar
      initSchoolId={initSchool.id}
      initInnerSlug={params.slug}
      schoolList={schoolList}
    />,
    <NoiCongInfo inner={innerDetail} />,
    <NoiCongDetail inner={innerDetail} />
  );

  return layout;
}
