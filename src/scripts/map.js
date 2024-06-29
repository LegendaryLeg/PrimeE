// const map = new mapgl.Map('map-container', {
//     center: [76.900780, 43.258009],
//     zoom: 20,
//     key: 'c00db97a-a948-4548-9134-189200bb007b',
// });

const map = new mapgl.Map('map-container', {
    key: 'c00db97a-a948-4548-9134-189200bb007b',
    center: [55.31878, 25.23584],
    zoom: 13,
});

const marker = new mapgl.Marker(map, {
    coordinates: [76.900780, 43.258009],
});

// const htmlMarker = new mapgl.HtmlMarker(map, {
//     coordinates: map.getCenter(),
//     html: '<div>Ауэзова 1а, офис 1 этаж 2</div>',
// });

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