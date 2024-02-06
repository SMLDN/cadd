import { configureStore } from "@reduxjs/toolkit";
import noiCongSlice from "./slice/noiCongSlice";
import {
  useDispatch as useAppDispatch,
  useSelector as useAppSelector,
} from "react-redux";

const store = configureStore({
  reducer: {
    noiCong: noiCongSlice,
  },
});

const useDispatch = () => useAppDispatch();
const useSelector = useAppSelector;

export { store, useSelector, useDispatch };
