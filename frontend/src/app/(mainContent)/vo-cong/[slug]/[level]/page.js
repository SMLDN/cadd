import { getFrame } from "@/app/(mainContent)/Frame";
import { useSwitchTag } from "@/app/(mainContent)/SwitchTag";
import VoCongSideBar from "../../_component/VoCongSideBar";
import VoCongInfo from "../../_component/VoCongInfo";
import VoCongDetail from "../../_component/VoCongDetail";
import { notFound } from "next/navigation";

async function getSetList() {
  const req = await fetch("http://localhost:3001/api/set/");
  return await req.json();
}

async function getSkillDetail(slug, level) {
  const req = await fetch(`http://localhost:3001/api/vo-cong/${slug}/${level}`);
  return await req.json();
}

export async function generateMetadata({ params }) {
  const skillDetail = await getSkillDetail(params.slug, params.level);

  if (skillDetail["Error"] != null) {
    return notFound();
  }

  return {
    metadataBase: new URL("https://cuuamdaidien.com"),
    title: `${skillDetail.name} - Cửu Âm Đại Điển`,
    description: `Thông tin nội công ${skillDetail.name} tầng ${skillDetail.detail.level} - Cửu Âm Đại Điển`,
    keywords: `${skillDetail.name} tầng ${skillDetail.detail.level}, auto cửu âm, auto 9yin, auto cack, cửu âm đại điển, cadd, cửu âm chân kinh, cửu âm, cack, nội công, kinh mạch, võ học`,
    openGraph: {
      title: `${skillDetail.name} - Cửu Âm Đại Điển`,
    },
    alternates: {
      canonical: `https://cuuamdaidien.com/noi-cong/${skillDetail.slug}/${skillDetail.maxLevel}`,
    },
  };
}

export default async function VoCongPage({ params }) {
  const [setList, skillDetail] = await Promise.all([
    getSetList(),
    getSkillDetail(params.slug, params.level),
  ]);
  const switchTag = useSwitchTag("voCong");

  if (skillDetail["Error"] != null) {
    return notFound();
  }

  const layout = getFrame(
    switchTag,
    <VoCongSideBar initSet={skillDetail.set} setList={setList}></VoCongSideBar>,
    <VoCongInfo initSkillDetail={skillDetail}></VoCongInfo>,
    <VoCongDetail initSkillDetail={skillDetail} />,
    true
  );

  return layout;
}
