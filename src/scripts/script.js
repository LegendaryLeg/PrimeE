console.log('Script Launched');
const galleryCarousel = document.querySelector('#collectionGallery')

function scrollHandler(container){
    const items = container.querySelectorAll('[data-item]')
    let isDown = false;
    let isDragging = false;
    let startX;
    let scrollLeft;

    function enablePointerEvents(){
        items.forEach(item => {
            item.classList.remove('pointer-events-none')
        })
    }

    function disablePointerEvents(){
        items.forEach(item => {
            item.classList.add('pointer-events-none')
        })
    }

    container.addEventListener('mouseenter', () => {
        if (isDragging){
            disablePointerEvents();
        }
    })

    container.addEventListener('mousedown', (e) => {
        isDown = true;
        isDragging = true;

        startX = e.pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
    })

    container.addEventListener('mouseleave', () => {
        isDown = false;
        isDragging = false;
        enablePointerEvents();
    })
    
    container.addEventListener('mouseup', () => {
        isDown = false;
        isDragging = false;
        enablePointerEvents();
    })

    container.addEventListener('mousemove', (e) => {
        e.preventDefault();
        isDragging = true;

        if (!isDown) return;

        const x = e.pageX - container.offsetLeft;
        const walk = x - startX;
        container.scrollLeft = scrollLeft - walk;
        disablePointerEvents()
    })

    container.addEventListener('touchstart', (e) => {
        isDown = true;
        isDragging = true;

        startX = e.touches[0].pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
    })

    container.addEventListener('touchmove', (e) => {
        e.preventDefault();
        isDragging = true;

        if (!isDown) return;

        const x = e.touches[0].pageX - container.offsetLeft;
        const walk = x - startX;
        container.scrollLeft = scrollLeft - walk;
        disablePointerEvents();
    })

    container.addEventListener('touchend', () => {
        isDown = false;
        isDragging = false;
        enablePointerEvents();
    })
}

scrollHandler(galleryCarousel)