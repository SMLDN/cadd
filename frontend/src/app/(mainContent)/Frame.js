export function useFrame(sideBar, infoFrame, mainFrame) {
  return (
    <>
      <div className="grow1 w-1/4 pl-11 mt-10 mb-14 overflow-auto">
        {sideBar}
      </div>
      <div>{infoFrame}</div>
      <div>{mainFrame}</div>
    </>
  );
}
