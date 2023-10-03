import HystModal from 'hystmodal';
import axios from 'axios';

function init(container = document) {

    let wpcf7Elem = document.querySelectorAll( '.wpcf7-form' );

    wpcf7Elem.forEach(function(elem) {

        elem.addEventListener( 'wpcf7mailsent', function( e ) {

            modalsForms.open('.js-modal-success');

            }, false );

    });

    const modalsForms = new HystModal({
        linkAttributeName: "data-stc-modal",
        catchFocus: true,
        waitTransitions: true,
        backscroll: true,
    });
        
}
  
export default { init }