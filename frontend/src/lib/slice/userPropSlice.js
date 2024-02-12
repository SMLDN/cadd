import { createSlice } from "@reduxjs/toolkit";

const userPropSlice = createSlice({
  name: "userProp",
  initialState: {
    satThuongVuKhiMin: 0,
    satThuongVuKhiMax: 0,
    satThuongXaKichMin: 0,
    satThuongXaKichMax: 0,
    uyLucCanThan: 1000,
    uyLucNoiCong: 1000,
    uyLucTamXa: 1000,
    binhLuc: 454,
  },
  reducers: {
    changeSatThuongVuKhiMin(state, action) {
      state.satThuongVuKhiMin = parseInt(action.payload);
    },
    changeSatThuongVuKhiMax(state, action) {
      state.satThuongVuKhiMax = parseInt(action.payload);
    },
    changeSatThuongXaKichMin(state, action) {
      state.satThuongXaKichMin = parseInt(action.payload);
    },
    changeSatThuongXaKichMax(state, action) {
      state.satThuongXaKichMax = parseInt(action.payload);
    },
    changeUyLucCanThan(state, action) {
      state.uyLucCanThan = parseInt(action.payload);
    },
    changeUyLucNoiCong(state, action) {
      state.uyLucNoiCong = parseInt(action.payload);
    },
    changeUyLucTamXa(state, action) {
      state.uyLucTamXa = parseInt(action.payload);
    },
    changeBinhLuc(state, action) {
      state.binhLuc = parseInt(action.payload);
    },
  },
});

export const {
  changeSatThuongVuKhiMin,
  changeSatThuongVuKhiMax,
  changeSatThuongXaKichMin,
  changeSatThuongXaKichMax,
  changeUyLucCanThan,
  changeUyLucNoiCong,
  changeUyLucTamXa,
  changeBinhLuc,
} = userPropSlice.actions;
export default userPropSlice.reducer;
