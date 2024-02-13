import { changeSelectSchoolId } from "@/lib/slice/noiCongSlice";
import { useDispatch, useSelector } from "@/lib/store";
import "./schoolInnerItem.css";
import NoiCongItemLink from "./NoiCongItemLink";

export default function SchoolInnerItem({
  school,
  initShowFlg,
  initInnerSlug,
}) {
  const { name, innerList } = school;
  const dispatch = useDispatch();
  const selectedId = useSelector((state) => state.noiCong.selectedSchoolId);

  const onClick = () => {
    if (selectedId === school.id) {
      return;
    }
    dispatch(changeSelectSchoolId(school.id));
  };

  const getShowFlg = () => {
    return selectedId != null ? selectedId === school.id : initShowFlg;
  };

  return (
    <div>
      <button className="inner-header" onClick={onClick}>
        {name}
      </button>
      <div className={getShowFlg() ? null : "hidden"}>
        {innerList.map((inner) => {
          return (
            <NoiCongItemLink
              key={inner.slug}
              slug={inner.slug}
              maxLevel={inner.maxLevel}
              label={inner.name}
              activedFlg={initInnerSlug === inner.slug}
            />
          );
        })}
      </div>
    </div>
  );
}
