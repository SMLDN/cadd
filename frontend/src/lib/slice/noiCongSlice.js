import { createSlice } from "@reduxjs/toolkit";

const noiCongSlice = createSlice({
  name: "noiCong",
  initialState: {},
  reducers: {
    changeSelectSchoolId(state, action) {
      state.selectedSchoolId = action.payload;
    },
  },
});

export const { changeSelectSchoolId } = noiCongSlice.actions;
export default noiCongSlice.reducer;
