// Style
import './style.scss';
import 'bootstrap/scss/bootstrap.scss';
import "@fancyapps/ui/dist/fancybox.css";
import 'bootstrap-icons/font/bootstrap-icons.scss';
// JS
window.bootstrap = require('bootstrap/dist/js/bootstrap.bundle.js');
import { Fancybox, Carousel } from "@fancyapps/ui";
import './main.js';

// init Popover Bootstrap
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
});
//init Carousel
const myCarousel = new Carousel(document.querySelector("#skillsCarousel"), {
    slidesPerPage: 1,
});

// add file to svg sprite
function requireAll(r) {
    r.keys().forEach(r);
}
requireAll(require.context('./svg/skills', true, /\.svg$/));





