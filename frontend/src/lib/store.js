import { configureStore } from "@reduxjs/toolkit";
import noiCongSlice from "./slice/noiCongSlice";
import kinhMachSlice from "./slice/kinhMachSlice";
import voCongSlice from "./slice/voCongSlice";
import userPropSlice from "./slice/userPropSlice";
import {
  useDispatch as useAppDispatch,
  useSelector as useAppSelector,
} from "react-redux";

const store = configureStore({
  reducer: {
    noiCong: noiCongSlice,
    kinhMach: kinhMachSlice,
    voCong: voCongSlice,
    userProp: userPropSlice,
  },
});

const useDispatch = () => useAppDispatch();
const useSelector = useAppSelector;

export { store, useSelector, useDispatch };
