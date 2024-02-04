import "./schoolInnerItem.css";

export default function SchoolInnerItem({ school, show }) {
    const { name, innerList } = school;
    return <div>
        <div className="inner-header">{name}</div>
        {show ? innerList.map((inner) => {
            return <div className="inner-item">{inner.name}</div>
        }) : null }
    </div>
}