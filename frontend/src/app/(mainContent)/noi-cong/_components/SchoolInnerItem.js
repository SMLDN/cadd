import { changeSelectSchoolId } from "@/lib/slice/noiCongSlice";
import { useDispatch, useSelector } from "@/lib/store";
import "./schoolInnerItem.css";

export default function SchoolInnerItem({ school, show }) {
  const { name, innerList } = school;
  const dispatch = useDispatch();
  const selectedId = useSelector((state) => state.noiCong.selectedSchoolId);

  const onClick = () => {
    if (selectedId === school.id) {
      return;
    }
    dispatch(changeSelectSchoolId(school.id));
  };

  return (
    <div>
      <button className="inner-header" onClick={onClick}>
        {name}
      </button>
      <div className={show ? null : "hidden"}>
        {innerList.map((inner) => {
          return (
            <div key={inner.slug} className="inner-item">
              {inner.name}
            </div>
          );
        })}
      </div>
    </div>
  );
}
