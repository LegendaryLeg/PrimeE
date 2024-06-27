const map = new mapgl.Map('map-container', {
    center: [76.900780, 43.258009],
    zoom: 18,
    key: 'c00db97a-a948-4548-9134-189200bb007b',
});

const marker = new mapgl.Marker(map, {
    coordinates: [76.900780, 43.258009],
});

const floor = new mapgl.FloorControl(map, {
})

// const htmlMarker = new mapgl.HtmlMarker(map, {
//     coordinates: map.getCenter(),
//     html: '<div>Ауэзова 1а, офис 1 этаж 2</div>',
// });