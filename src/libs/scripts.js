import gsap from 'gsap';
import modal from '../libs/modules/modal.js';
import phoneMask from '../libs/modules/phone-mask';
import fancybox from '../libs/modules/fancybox';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        // force3D: true
    });

    modal.init();
    phoneMask.init();
    fancybox.init();

});