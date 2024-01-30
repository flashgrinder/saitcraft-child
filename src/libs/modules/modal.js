import HystModal from 'hystmodal';

function init(container = document) {

    let wpcf7Elem = document.querySelectorAll( '.wpcf7-form' );

    wpcf7Elem.forEach(function(elem) {

        elem.addEventListener( 'wpcf7mailsent', function( e ) {

            modalsForms.open('.js-modal-success');
            ym(25803377,'reachGoal','order_done');
            }, false );

    });

    const modalsForms = new HystModal({
        linkAttributeName: "data-stc-modal",
        catchFocus: true,
        waitTransitions: true,
        backscroll: false,
    });
        
}
  
export default { init }