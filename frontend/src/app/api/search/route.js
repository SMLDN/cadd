export async function GET(request) {
  const { searchParams } = new URL(request.url);
  const q = searchParams.get("q");
  const res = await fetch(`http://localhost:3001/api/search?q=${q}`, {});
  const data = await res.json();

  return Response.json({ data });
}
