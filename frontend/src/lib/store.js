import { configureStore } from "@reduxjs/toolkit";
import noiCongSlice from "./slice/noiCongSlice";
import kinhMachSlice from "./slice/kinhMachSlice";
import {
  useDispatch as useAppDispatch,
  useSelector as useAppSelector,
} from "react-redux";

const store = configureStore({
  reducer: {
    noiCong: noiCongSlice,
    kinhMach: kinhMachSlice,
  },
});

const useDispatch = () => useAppDispatch();
const useSelector = useAppSelector;

export { store, useSelector, useDispatch };
