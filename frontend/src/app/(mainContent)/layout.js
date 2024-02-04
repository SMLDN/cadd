import SideBar from "@/components/(mainContent)/SideBar";
import './mainContent.css'

export default function MainContentLayout({ children }) {
    return (<div className="main-container">
        <SideBar />
        {children}
    </div>);
}