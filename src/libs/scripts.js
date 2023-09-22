import gsap from 'gsap';
import fancybox from '../libs/modules/fancybox';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        // force3D: true
    });

    fancybox.init();

});