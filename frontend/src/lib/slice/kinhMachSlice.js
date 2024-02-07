import { createSlice } from "@reduxjs/toolkit";

const kinhMachSlice = createSlice({
  name: "kinhMach",
  initialState: {},
  reducers: {
    changeSelectId(state, action) {
      state.selectedId = action.payload;
    },
  },
});

export const { changeSelectId } = kinhMachSlice.actions;
export default kinhMachSlice.reducer;
