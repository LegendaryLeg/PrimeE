const map = new mapgl.Map('map-container', {
    key: 'c00db97a-a948-4548-9134-189200bb007b',
    center: [76.90079012364914, 43.25799707741974],
    zoom: 20,
    style: 'c080bb6a-8134-4993-93a1-5b4d8c36a59b'
});

const marker = new mapgl.Marker(map, {
    coordinates: [76.90079012364914, 43.25799707741974],
});

const mapInfo = document.getElementById('map-info');

marker.on('mouseover', (e) => {
    const offset = 20;

    console.log(e.point);
    mapInfo.style.top = `${e.point[1] + offset}px`;
    mapInfo.style.left = `${e.point[0] + offset}px`;
    mapInfo.style.display = 'block';
})

marker.on('mouseout', (e) => {
    mapInfo.style.display = 'none'
})