import NoiCongSideBar from "@/app/(mainContent)/noi-cong/_component/NoiCongSideBar";
import NoiCongInfo from "@/app/(mainContent)/noi-cong/_component/NoiCongInfo";
import NoiCongDetail from "@/app/(mainContent)/noi-cong/_component/NoiCongDetail";
import { getFrame } from "@/app/(mainContent)/Frame";
import { useSwitchTag } from "@/app/(mainContent)/SwitchTag";
import { notFound } from "next/navigation";

async function getSchoolInnerList() {
  const req = await fetch("http://localhost:3001/api/school/");
  return await req.json();
}

async function getInnerDetail(slug, level) {
  const req = await fetch(`http://localhost:3001/api/noi-cong/${slug}/${level}`);
  return await req.json();
}

export async function generateMetadata({ params }) {
  const inner = await getInnerDetail(params.slug, params.level);

  if (inner["Error"] != null) {
    return notFound();
  }

  return {
    metadataBase: new URL("https://cuuamdaidien.com"),
    title: `${inner.name} - Cửu Âm Đại Điển`,
    description: `Thông tin nội công ${inner.name} tầng ${inner.detail.level} - Cửu Âm Đại Điển`,
    keywords: `${inner.name} tầng ${inner.detail.level}, auto cửu âm, auto 9yin, auto cack, cửu âm đại điển, cadd, cửu âm chân kinh, cửu âm, cack, nội công, kinh mạch, võ học`,
    openGraph: {
      title: `${inner.name} - Cửu Âm Đại Điển`,
    },
    alternates: {
      canonical: `https://cuuamdaidien.com/noi-cong/${inner.slug}/${inner.maxLevel}`,
    },
  };
}

export default async function NoiCongPage({ params }) {
  const [schoolList, innerDetail] = await Promise.all([
    getSchoolInnerList(),
    getInnerDetail(params.slug, params.level),
  ]);
  const switchTag = useSwitchTag("noiCong");

  if (innerDetail["Error"] != null) {
    notFound();
  }

  const initSchool = schoolList.find((school) => {
    return school.innerList.find((inner) => {
      return inner.slug === params.slug;
    });
  });

  const layout = getFrame(
    switchTag,
    <NoiCongSideBar
      initSchoolId={initSchool.id}
      initInnerSlug={params.slug}
      schoolList={schoolList}
    />,
    <NoiCongInfo initInner={innerDetail} />,
    <NoiCongDetail initInner={innerDetail} />
  );

  return layout;
}
