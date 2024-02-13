import UserProp from "./_component/UserProp";
export function useFrame(
  switchTag,
  sideBar,
  infoFrame,
  mainFrame,
  userPropFlg = false
) {
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
      {userPropFlg && (
        <div className="user-prop absolute top-4 -right-64 bg-amber-200 px-1 py-4 rounded opacity-80">
          <UserProp />
        </div>
      )}
    </>
  );
}
