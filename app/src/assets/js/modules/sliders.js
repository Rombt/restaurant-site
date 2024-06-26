
let swiperCooks = {};
let swiperDish = {};
let swiperToday = {};
let swiperClients = {};
let swiperFoodStep = {};



if (document.querySelector('.swiper-cooks')) {

    swiperCooks = new Swiper('.swiper-cooks', {
        direction: "horizontal",
        pagination: {
            el: '.swiper-cooks__pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">  <span class="swiper-pagination__center"> </span> </span>';
            },
        },

        speed: 700,
        autoplay: {
            delay: 5000,
        },

        slidesPerView: 4,
        spaceBetween: 35,


    });
}

if (document.querySelector('.swiper.swiper-dish')) {
    swiperDish = new Swiper('.swiper.swiper-dish', {
        direction: 'horizontal',
        speed: 1000,
        loop: true,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">  <span class="swiper-pagination__center"> </span> </span>';
            },
        },
        // mousewheel: {
        //    invert: true,
        // },
    });
}

if (document.querySelector('.swiper.swiper-today')) {
    swiperToday = new Swiper('.swiper.swiper-today', {
        direction: 'horizontal',
        loop: true,
        speed: 1000,

        autoplay: {
            delay: 5000,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">  <span class="swiper-pagination__center"> </span> </span>';
            },
        },
        // mousewheel: {
        //    invert: true,
        // },
    });
}

if (document.querySelector('.swiper.swiper-clients')) {
    swiperClients = new Swiper('.swiper.swiper-clients', {
        loop: true,
        speed: 500,

        // autoplay: {
        //     delay: 5000,
        // },

        navigation: {
            nextEl: '.swiper-clients__button-prev',
            prevEl: '.swiper-clients__button-next',
        },
    });
}

if (document.querySelector('.swiper-food-step')) {

    swiperFoodStep = new Swiper('.swiper-food-step', {
        direction: "vertical",
        slidesPerView: "auto",
        freeMode: true,
        scrollbar: {
            el: ".swiper-scrollbar",
            draggable: true,
        },
        mousewheel: true,
        speed: 500,
        autoplay: {
            delay: 5000,
        },

    });

}




export { swiperCooks, swiperDish, swiperToday, swiperClients, swiperFoodStep };