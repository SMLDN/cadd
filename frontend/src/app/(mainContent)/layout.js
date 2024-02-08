import Nav from "@/components/Nav";
import "./mainContent.css";
import Image from "next/image";

export default function MainContentLayout({ children }) {
  return (
    <>
      <Nav />

      <div className="main-container">
        <Image
          src="/static/img/ui/bg4.png"
          width={1113}
          height={711}
          className="absolute -z-10"
          alt="cửu âm đại điển"
        ></Image>
        {children}
      </div>
    </>
  );
}
