let swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 1000,
    navigation: {
        nextEl: '.custom-gallery-next-btn',
        prevEl: '.custom-gallery-prev-btn',
    },
    on: {
        slideChange: function () {
            console.log('Слайд изменен');
        },
    },
});
