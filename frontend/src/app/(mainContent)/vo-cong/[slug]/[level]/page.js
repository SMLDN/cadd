import { useFrame } from "@/app/(mainContent)/Frame";
import { useSwitchTag } from "@/app/(mainContent)/SwitchTag";
import VoCongSideBar from "../../_component/VoCongSideBar";
import VoCongInfo from "../../_component/VoCongInfo";

async function getSetList() {
  const req = await fetch("http://localhost/api/set/");
  return await req.json();
}

async function getSkillDetail(slug, level) {
  const req = await fetch(`http://localhost/api/vo-cong/${slug}/${level}`);
  return await req.json();
}

export default async function NoiCongPage({ params }) {
  const [setList, skillDetail] = await Promise.all([
    getSetList(),
    getSkillDetail(params.slug, params.level),
  ]);


  const switchTag = useSwitchTag("voCong");

  const layout = useFrame(
    switchTag,
    <VoCongSideBar initSet={skillDetail.set} setList={setList}></VoCongSideBar>,
    <VoCongInfo initSkillDetail={skillDetail}></VoCongInfo>,
    <></>
  );

  return layout;
}
