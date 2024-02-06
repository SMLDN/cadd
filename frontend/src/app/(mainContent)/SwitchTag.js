import Link from "next/link";
import "./switchTag.css";

export function useSwitchTag(tag) {
  return (
    <div className="flewRow mt-10">
      <div className="tag-element">
        <Link href="/noi-cong/thien-dinh-cong/36" prefetch={false}>
          <div
            className={
              tag === "noiCong" ? "noi-cong-tag actived" : "noi-cong-tag"
            }
          ></div>
        </Link>
      </div>
      <div className="tag-element">
        <Link href="/kinh-mach/thu-thai-am-phe/216" prefetch={false}>
          <div
            className={
              tag === "kinhMach" ? "kinh-mach-tag actived" : "kinh-mach-tag"
            }
          ></div>
        </Link>
      </div>
    </div>
  );
}
