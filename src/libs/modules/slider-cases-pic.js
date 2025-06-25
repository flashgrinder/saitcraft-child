import Splide from '@splidejs/splide';

function picCasesSliders() {

    let picSliders = document.querySelectorAll('.js-slider-pic');
    if (picSliders) {

        picSliders.forEach((slider) => {

            if (slider) {

                let pic = new Splide(slider, {
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

                pic.mount();

            }

        })

    }

}

export default picCasesSliders;