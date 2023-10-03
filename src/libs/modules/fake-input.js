function init() {

    const fakeInputs = document.querySelectorAll('input[type=file]');

    Array.from(fakeInputs).forEach(e => e.addEventListener('change',  function(){
        let file = this.files[0];
        e.closest('.js-modal-fake-file').querySelector('.js-filename').innerHTML = file.name;
    }))

}
export default { init }