import gsap from 'gsap';
import modal from '../libs/modules/modal.js';
import fakeInput from '../libs/modules/fake-input.js'
import fancybox from '../libs/modules/fancybox';

document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        // force3D: true
    });

    modal.init();
    fakeInput.init();
    fancybox.init();

});