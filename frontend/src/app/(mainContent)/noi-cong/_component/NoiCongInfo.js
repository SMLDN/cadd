"use client";
import useInner from "../_hook/GetInner";

export default function NoiCongInfo({ initInner }) {
  const { inner } = useInner({ initInner });
  return <div>{inner.desc}</div>;
}
