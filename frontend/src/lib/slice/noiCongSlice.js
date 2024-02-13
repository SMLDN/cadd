import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";

export const fetchNoiCongList = createAsyncThunk(
  "voCong/fetchNoiCongList",
  async ({ slug, level }) => {
    const response = await fetch(`/api/noi-cong?slug=${slug}&level=${level}`);
    return (await response.json()).data;
  }
);

const noiCongSlice = createSlice({
  name: "noiCong",
  initialState: {},
  reducers: {
    changeSelectSchoolId(state, action) {
      state.selectedSchoolId = action.payload;
    },
  },
  extraReducers: (builder) => {
    builder.addCase(fetchNoiCongList.fulfilled, (state, action) => {
      state.selectedNoiCong = action.payload;
      state.selectedSchoolId = action.payload.school.id;
    });
  },
});

export const { changeSelectSchoolId } = noiCongSlice.actions;
export default noiCongSlice.reducer;
