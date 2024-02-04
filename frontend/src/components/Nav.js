"use client"
import "./nav.css";

export default function Nav() {
    return (
        <nav className="main-nav">
            <ul className="flex space-x-5">
                <li><a href="/">Trang Chủ</a></li>
                <li><a href="/noi-cong/thien-dinh-cong/36">Nội Công</a></li>
                <li><a href="/vo-cong">Võ Công</a></li>
                <li><a href="/kinh-mach/thu-thai-am-phe/1">Kinh Mạch</a></li>
            </ul>
        </nav>
    );
}