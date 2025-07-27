"use client";
import "./nav.css";
import SearchBox from "./SearchBox";

export default function Nav() {
  return (
    <nav className="main-nav mb-4">
      <ul className="flex space-x-5">
        <li>
          <a href="/">Trang Chủ</a>
        </li>
        <li>
          <a href="/noi-cong/thien-dinh-cong/36">Nội Công</a>
        </li>
        <li>
          <a href="/vo-cong/vu-hoa-toa-son/16">Võ Công</a>
        </li>
        <li>
          <a href="/kinh-mach/thu-thai-am-phe/216">Kinh Mạch</a>
        </li>
        <li>
          <SearchBox />
        </li>
      </ul>
    </nav>
  );
}
