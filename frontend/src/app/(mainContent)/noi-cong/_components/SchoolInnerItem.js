import { changeSelectSchoolId } from "@/lib/slice/noiCongSlice";
import { useDispatch, useSelector } from "@/lib/store";
import Link from "next/link";
import "./schoolInnerItem.css";

export default function SchoolInnerItem({ school, show, initInnerSlug }) {
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
            <div
              key={inner.slug}
              className="mb-2"
              id={initInnerSlug === inner.slug ? "selected-inner" : null}
            >
              <Link
                className={
                  "inner-item" +
                  (inner.slug === initInnerSlug ? " actived" : "")
                }
                href={`/noi-cong/${inner.slug}/${inner.maxLevel}#selected-inner`}
              >
                {inner.name}
              </Link>
            </div>
          );
        })}
      </div>
    </div>
  );
}
