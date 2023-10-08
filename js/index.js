const goback = document.getElementById('bars');
const menu = document.getElementById('menu');
const menuback = document.getElementById('menuback');
const display = document.getElementById('display');
const productbar = document.getElementById('productbar');
const filter = document.getElementById('filter');
const filtermenu = document.getElementById('filtermenu');
const displayfilter = document.getElementById('displayfilter');


document.addEventListener("click", function (event) {
    if (!goback.contains(event.target) && !menu.contains(event.target)) {
        goback.style.left = '-350px';
        menuback.style.left = '-40px';
        menuback.style.top = '34px';

        display.style.width = '0%';
        display.style.height = '0%';
    }
});

menu.addEventListener("click", function () {

    if (goback.style.left = '-350px') {
        goback.style.left = '0px';
        menuback.style.display = 'block';
        menuback.style.left = '360px';
        menuback.style.top = '34px';

        display.style.position = 'fixed';
        display.style.top = '0';
        display.style.left = '0';
        display.style.width = '100%';
        display.style.height = '100%';
        display.style.zIndex = '50';
        display.style.backgroundColor = 'rgb(0, 0, 0, 0.5)';

    }
});

menuback.addEventListener("click", function () {

    if (goback.style.left = '-350px') {
        goback.style.left = '-350px';
        menuback.style.left = '-40px';
        menuback.style.top = '34px';

        display.style.width = '0%';
        display.style.height = '0%';
    }

});


document.addEventListener("click", function (event) {
    if (!displayfilter.contains(event.target) && !filter.contains(event.target)) {
        displayfilter.style.width = '0%';
        filtermenu.style.left = '-65%';
        filtermenu.style.top = '34px';

        productbar.style.width = '0%';
        productbar.style.height = '0%';
    }
});

filter.addEventListener("click", function () {

    if (displayfilter.style.width = '0%') {
        displayfilter.style.width = '60%';
        filtermenu.style.display = 'block';
        filtermenu.style.left = '65%';
        filtermenu.style.top = '34px';

        productbar.style.position = 'fixed';
        productbar.style.top = '0';
        productbar.style.left = '0';
        productbar.style.width = '100%';
        productbar.style.height = '100%';
        productbar.style.zIndex = '50';
        productbar.style.backgroundColor = 'rgb(0, 0, 0, 0.5)';

    }
});

filtermenu.addEventListener("click", function () {

    if (displayfilter.style.width = '60%') {
        displayfilter.style.width = '0%';
        filtermenu.style.left = '-65%';
        filtermenu.style.top = '34px';

        productbar.style.width = '0%';
        productbar.style.height = '0%';
    }

});






