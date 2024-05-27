const swiper = new Swiper('.swiper-slider', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 50,


    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },


});