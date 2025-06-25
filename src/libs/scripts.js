import gsap from 'gsap';
import modalForm from '../libs/modules/modal.js';
import phoneMask from '../libs/modules/phone-mask';
import fancybox from '../libs/modules/fancybox';
import cases from '../libs/modules/cases';
import functionalityCasesSliders from "./modules/slider-cases-functionality";
import picCasesSliders from "./modules/slider-cases-pic";

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        // force3D: true
    });

    const casesTrue = document.querySelector('.js-cases');

    modalForm.init();
    phoneMask.init();
    fancybox.init();
    functionalityCasesSliders();
    picCasesSliders();
    casesTrue ? cases.init() : false;

});