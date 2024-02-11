import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";

export const fetchSkillList = createAsyncThunk(
  "voCong.fetchSkillList",
  async ({ slug, level }) => {
    const response = await fetch(`/api/vo-cong?slug=${slug}&level=${level}`);
    return (await response.json()).data;
  }
);

const voCongSlice = createSlice({
  name: "voCong",
  initialState: {},
  reducers: {
    changeSelectType(state, action) {
      state.selectedType = action.payload;
    },
  },
  extraReducers: (builder) => {
    builder.addCase(fetchSkillList.fulfilled, (state, action) => {
      state.selectedSkill = action.payload;
    });
  },
});

export const { changeSelectType } = voCongSlice.actions;
export default voCongSlice.reducer;
