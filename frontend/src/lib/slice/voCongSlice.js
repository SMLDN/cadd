import { createSlice } from "@reduxjs/toolkit";

const voCongSlice = createSlice({
  name: "voCong",
  initialState: {},
  reducers: {
    changeSelectId(state, action) {
      state.selectedId = action.payload;
    },
  },
});

export const { changeSelectId } = voCongSlice.actions;
export default voCongSlice.reducer;
