import SchoolInnerItem from "@/components/(mainContent)/SchoolInnerItem";

async function getSchoolInnerList() {
    const req = await fetch("http://localhost/api/school/");
    return await req.json();
}

export default async function SideBar() {
    const lst = await getSchoolInnerList();

    return <div className="grow1 w-1/4 ml-5 pl-8 mt-10 mb-14 overflow-auto">
        {lst.map((school) => {
            let show = false;
            if (school.slug == "thieu-lam"){
                show = true;
            }
            return <SchoolInnerItem school={school} show={show} />
        })}
    </div>;
}