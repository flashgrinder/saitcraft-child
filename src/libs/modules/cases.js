function init() {

    const cards = document.querySelectorAll('.js-cases-card');

    cards.forEach(card => {
        let buttonOpen = card.querySelector('.js-cases-button-open');
        let buttonBack = card.querySelector('.js-cases-button-back');
        let buttonClose = card.querySelector('.js-cases-close');

        buttonOpen.addEventListener('click', () => {
            card.classList.add('is-active');
        });
        buttonBack.addEventListener('click', () => {
            card.classList.remove('is-active');
            buttonClose.classList.remove('active');
        });
        buttonClose.addEventListener('click', () => {
            card.classList.remove('is-active');
        });
    });

}
export default { init }