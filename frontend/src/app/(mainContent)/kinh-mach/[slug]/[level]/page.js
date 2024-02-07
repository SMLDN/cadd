import { useFrame } from "@/app/(mainContent)/Frame";
import { useSwitchTag } from "@/app/(mainContent)/SwitchTag";
import KinhMachSideBar from "@/app/(mainContent)/kinh-mach/_component/KinhMachSideBar";
import KinhMachDetail from "@/app/(mainContent)/kinh-mach/_component/KinhMachDetail";

async function getKinhMachList() {
  const req = await fetch("http://localhost/api/kinh-mach/");
  return await req.json();
}

async function getKinhMachDetail(slug, level) {
  const req = await fetch(`http://localhost/api/kinh-mach/${slug}/${level}`);
  return await req.json();
}

export default async function KinhMachPage({ params }) {
  const kinhMachList = await getKinhMachList();
  const kinhMachDetail = await getKinhMachDetail(params.slug, params.level);
  const switchTag = useSwitchTag("kinhMach");

  const layout = useFrame(
    switchTag,
    <KinhMachSideBar
      initKinhMachId={kinhMachDetail.id}
      kinhMachList={kinhMachList}
    />,
    <div>{kinhMachDetail.desc}</div>,
    <KinhMachDetail kinhMach={kinhMachDetail} />
  );

  return layout;
}
