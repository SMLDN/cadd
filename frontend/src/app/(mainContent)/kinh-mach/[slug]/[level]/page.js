import { getFrame } from "@/app/(mainContent)/Frame";
import { useSwitchTag } from "@/app/(mainContent)/SwitchTag";
import KinhMachSideBar from "@/app/(mainContent)/kinh-mach/_component/KinhMachSideBar";
import KinhMachDetail from "@/app/(mainContent)/kinh-mach/_component/KinhMachDetail";
import { notFound } from "next/navigation";

async function getKinhMachList() {
  const req = await fetch("http://localhost:3001/api/kinh-mach/");
  return await req.json();
}

async function getKinhMachDetail(slug, level) {
  const req = await fetch(
    `http://localhost:3001/api/kinh-mach/${slug}/${level}`
  );
  return await req.json();
}

export async function generateMetadata({ params }) {
  const kinhMach = await getKinhMachDetail(params.slug, params.level);

  if (kinhMach["Error"] != null) {
    return notFound();
  }

  return {
    metadataBase: new URL("https://cuuamdaidien.com"),
    title: `${kinhMach.name} - Cửu Âm Đại Điển`,
    description: `Thông tin kinh mạch ${kinhMach.name} tầng ${kinhMach.detail.level} - Cửu Âm Đại Điển`,
    keywords: `${kinhMach.name} ${kinhMach.detail.level} Chu thiên, auto cửu âm, auto 9yin, auto cack, cửu âm đại điển, cadd, cửu âm chân kinh, cửu âm, cack, nội công, kinh mạch, võ học`,
    openGraph: {
      title: `${kinhMach.name} - Cửu Âm Đại Điển`,
    },
    alternates: {
      canonical: `https://cuuamdaidien.com/kinh-mach/${kinhMach.slug}/${kinhMach.maxLevel}`,
    },
  };
}

export default async function KinhMachPage({ params }) {
  const kinhMachList = await getKinhMachList();
  const kinhMachDetail = await getKinhMachDetail(params.slug, params.level);

  if (kinhMachDetail["Error"] != null) {
    notFound();
  }

  const switchTag = useSwitchTag("kinhMach");
  const layout = getFrame(
    switchTag,
    <KinhMachSideBar
      initKinhMachId={kinhMachDetail.id}
      kinhMachList={kinhMachList}
    />,
    <></>,
    <KinhMachDetail kinhMach={kinhMachDetail} />
  );

  return layout;
}
