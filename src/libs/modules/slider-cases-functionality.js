import Splide from '@splidejs/splide';

function functionalityCasesSliders() {

    const allSliders = document.querySelectorAll('.js-functionality-sliders');
    if (allSliders) {

        allSliders.forEach((sliders) => {

            let picSlider = sliders.querySelector('.js-splide-functionality-pic');
            let textSlider = sliders.querySelector('.js-splide-functionality-text');

            if (picSlider && textSlider) {

                let pic = new Splide(picSlider, {
                    type: 'slide',
                    speed: 1200,
                    gap: 40,
                    rewind: true,
                    keyboard: true,
                    pagination: false,
                    arrows: true,
                    // isNavigation: true,
                    classes: {
                        arrows: 'splide__arrows slider-nav__splide-arrows',
                        arrow : 'splide__arrow slider-nav__splide-arrow',
                        prev  : 'splide__arrow--prev slider-nav__splide-arrow--prev',
                        next  : 'splide__arrow--next slider-nav__splide-arrow--next',
                    }
                });
                let text = new Splide(textSlider, {
                    type: 'fade',
                    rewind: true,
                    keyboard: true,
                    pagination: false,
                    arrows: false,
                    isNavigation: true,
                    // breakpoints: {
                    //     768: {
                    //         fixedWidth: false,
                    //         perPage: 3,
                    //     }
                    // }
                });
                pic.sync(text);
                pic.mount();
                text.mount();

            }

        })

    }

}

export default functionalityCasesSliders;