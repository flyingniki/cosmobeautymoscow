let upButton = document.querySelector('.back__to__top');

window.onscroll = function () {
    if (window.pageYOffset > 500) {
        upButton.classList.add('shown');
    } else {
        upButton.classList.remove('shown');
    }

};

upButton.onclick = function () {
    window.scrollTo(0, 0);
};