const swiper = new Swiper('.swiper-slider', {
    loop: true,
    spaceBetween: 30,


    breakpoints: {
        // Когда ширина окна >= 640px
        100: {
            slidesPerView: 1,
            spaceBetween: 20
        },

        550:{
            slidesPerView: 2,
            spaceBetween: 20
        },
        // Когда ширина окна >= 768px
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // Когда ширина окна >= 1024px
        1024: {
            slidesPerView: 3,
            spaceBetween: 20
        },

        1400: {
            slidesPerView: 4,
            spaceBetween: 20
        },


        1600:{
            slidesPerView:5,
            spaceBetween: 20
        }
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },


});