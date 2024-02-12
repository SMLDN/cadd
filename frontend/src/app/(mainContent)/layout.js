import Nav from "@/components/Nav";
import "./mainContent.css";
import Image from "next/image";
import UserProp from "./_component/UserProp";

export default function MainContentLayout({ children }) {
  return (
    <>
      <Nav />
      <div className="main-container relative">
        <Image
          src="/static/img/ui/bg4.png"
          fill
          className="absolute -z-10"
          alt="cửu âm đại điển"
          sizes="(max-width: 768px) 100vw, (max-width: 1200px) 100vw"
          priority
        ></Image>
        {children}
        <div className="user-prop absolute top-4 -right-64 bg-amber-200 px-1 py-4 rounded opacity-80">
          <UserProp />
        </div>
      </div>
    </>
  );
}
