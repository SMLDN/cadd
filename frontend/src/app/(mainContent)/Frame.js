export function useFrame(switchTag, sideBar, infoFrame, mainFrame) {
  return (
    <>
      <div>{switchTag}</div>
      <div className="grow1 w-1/5 mt-10 mb-16 overflow-auto">{sideBar}</div>
      <div className="grow1 pl-7 pr-7 w-1/4 mt-12 mb-14 overflow-auto text-zinc-900 font-semibold tracking-wider">
        {infoFrame}
      </div>
      <div className="grow1 w-1/2 mt-5 mb-14 pl-11 pr-10 text-zinc-950">
        {mainFrame}
      </div>
    </>
  );
}
