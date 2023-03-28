import { isWebp } from "./modules/isWebp.js"; // проверяет поддерживает ли браузер формат webp
import { swiperDish, swiperToday, swiperClients } from "./modules/sliders.js";
import { Burger } from "./modules/burger.js";



window.onload = function () {


    isWebp(); // проверяет поддерживает ли браузер формат webp

    let params_headerMenuBurger = {

        conteiner: 'heder-menu',
        menuList: 'menu__list',
        classActive: 'menu__sm',
        burgerOpen: 'heder-menu__burger',
        burgerClose: 'heder-menu__burger-close',

    }
    const headerMenuBurger = new Burger(params_headerMenuBurger);
    headerMenuBurger.init();



    let params_foodMenuBurger = {

        conteiner: 'food-menu',
        menuList: 'food-menu__list',
        classActive: 'active',
        burgerOpen: 'burger-open',
        burgerClose: 'burger-close',

    }
    const foodMenuBurger = new Burger(params_foodMenuBurger);
    foodMenuBurger.init();

    let params_recipiesTitleNavBurger = {

        conteiner: 'recipies-title-nav',
        menuList: 'recipies-title-nav__list',
        classActive: 'recipies-title-nav__brows-recipes-active',
        // burgerOpen: 'heder-menu__burger',
        // burgerClose: 'heder-menu__burger-close',

    }
    const recipiesTitleNavBurger = new Burger(params_recipiesTitleNavBurger);
    recipiesTitleNavBurger.init();












}