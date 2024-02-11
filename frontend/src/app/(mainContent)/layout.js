import Nav from "@/components/Nav";
import "./mainContent.css";
import Image from "next/image";

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
      </div>
    </>
  );
}
