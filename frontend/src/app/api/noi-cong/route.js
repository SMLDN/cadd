export async function GET(request) {
    const { searchParams } = new URL(request.url);
    const slug = searchParams.get("slug");
    const level = searchParams.get("level");
    const res = await fetch(`http://localhost:3001/api/noi-cong/${slug}/${level}`, {});
    const data = await res.json();
  
    return Response.json({ data });
  }
  