async function getNoiCongInfo(slug, level) {
    const req = await fetch(`http://localhost/api/noi-cong/${slug}/${level}`);
    return await req.json();
}

export default async function Home({ params }) {
    const { slug, level } = params;
    const noiCongInfo = await getNoiCongInfo(slug, level);
    console.log(noiCongInfo);
    return (
        <div>Nội công</div>
    );
}
