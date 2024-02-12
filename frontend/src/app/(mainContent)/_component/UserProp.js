"use client";
import { useDispatch, useSelector } from "@/lib/store";
import {
  changeSatThuongVuKhiMin,
  changeSatThuongVuKhiMax,
  changeSatThuongXaKichMin,
  changeSatThuongXaKichMax,
  changeUyLucCanThan,
  changeUyLucNoiCong,
  changeUyLucTamXa,
  changeBinhLuc,
} from "@/lib/slice/userPropSlice";

export default function UserProp() {
  const dispatch = useDispatch();
  const satThuongVuKhiMin = useSelector(
    (state) => state.userProp.satThuongVuKhiMin
  );
  const satThuongVuKhiMax = useSelector(
    (state) => state.userProp.satThuongVuKhiMax
  );
  const satThuongXaKichMin = useSelector(
    (state) => state.userProp.satThuongXaKichMin
  );
  const satThuongXaKichMax = useSelector(
    (state) => state.userProp.satThuongXaKichMax
  );
  const uyLucCanThan = useSelector((state) => state.userProp.uyLucCanThan);
  const uyLucNoiCong = useSelector((state) => state.userProp.uyLucNoiCong);
  const uyLucTamXa = useSelector((state) => state.userProp.uyLucTamXa);
  const binhLuc = useSelector((state) => state.userProp.binhLuc);

  return (
    <table>
      <tbody>
        <tr>
          <td>Sát thương vũ khí:</td>
          <td>
            <input
              type="number"
              value={satThuongVuKhiMin}
              onChange={(e) => {
                dispatch(changeSatThuongVuKhiMin(e.target.value));
              }}
            />{" "}
            -{" "}
            <input
              type="number"
              value={satThuongVuKhiMax}
              onChange={(e) => {
                dispatch(changeSatThuongVuKhiMax(e.target.value));
              }}
            />
          </td>
        </tr>
        <tr>
          <td>Sát thương xạ kích:</td>
          <td>
            <input
              type="number"
              value={satThuongXaKichMin}
              onChange={(e) => {
                dispatch(changeSatThuongXaKichMin(e.target.value));
              }}
            />{" "}
            -{" "}
            <input
              type="number"
              value={satThuongXaKichMax}
              onChange={(e) => {
                dispatch(changeSatThuongXaKichMax(e.target.value));
              }}
            />
          </td>
        </tr>
        <tr>
          <td>Uy lực cận thân:</td>
          <td>
            <input
              type="number"
              value={uyLucCanThan}
              onChange={(e) => {
                dispatch(changeUyLucCanThan(e.target.value));
              }}
            />
          </td>
        </tr>
        <tr>
          <td>Uy lực nội công:</td>
          <td>
            <input
              type="number"
              value={uyLucNoiCong}
              onChange={(e) => {
                dispatch(changeUyLucNoiCong(e.target.value));
              }}
            />
          </td>
        </tr>
        <tr>
          <td>Uy lực tầm xa:</td>
          <td>
            <input
              type="number"
              value={uyLucTamXa}
              onChange={(e) => {
                dispatch(changeUyLucTamXa(e.target.value));
              }}
            />
          </td>
        </tr>
        <tr>
          <td>Binh lục:</td>
          <td>
            <input
              type="number"
              value={binhLuc}
              onChange={(e) => {
                dispatch(changeBinhLuc(e.target.value));
              }}
            />
          </td>
        </tr>
      </tbody>
    </table>
  );
}
