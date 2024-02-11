import Image from "next/image";
import "./voCongInfo.css";
import Link from "next/link";

export default function VoCongInfo({ set, skillDetail }) {
  const skillComponent = (skill) => {
    return (
      <Link
        href={`/vo-cong/${skill.slug}/${skill.maxLevel}`}
        key={skill.slug}
        className="mb-5 flex flex-row space-x-1"
      >
        <div className="img-container">
          <Image
            src={`/static/img/vo-cong/${skill.photo}`}
            alt={skill.name}
            width={50}
            height={50}
          />
        </div>
        <div className="text-sm">{skill.name}</div>
      </Link>
    );
  };

  return (
    <div>{skillDetail.set.skillListAll.map((s) => skillComponent(s))}</div>
  );
}
