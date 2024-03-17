import gsap from 'gsap';
import modalForm from '../libs/modules/modal.js';
import phoneMask from '../libs/modules/phone-mask';
import fancybox from '../libs/modules/fancybox';
import cases from '../libs/modules/cases';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        // force3D: true
    });

    const casesTrue = document.querySelector('.js-cases');

    modalForm.init();
    phoneMask.init();
    fancybox.init();
    casesTrue ? cases.init() : false;

});