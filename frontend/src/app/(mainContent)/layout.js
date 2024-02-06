import Nav from "@/components/Nav";
import "./mainContent.css";

export default function MainContentLayout({ children }) {
  return (
    <>
      <Nav />
      <div className="main-container">{children}</div>
    </>
  );
}
