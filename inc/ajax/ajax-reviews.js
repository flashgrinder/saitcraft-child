jQuery( function ($) {

    let load_btn = $('#loadmore'),
        paged = load_btn.data( 'paged' ),
        maxPages = load_btn.data( 'max_pages' ),
        pagenum = load_btn.data( 'pagenumlink' );

    $(load_btn).click(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: saitcraft.ajaxurl, // получаем из wp_localize_script()
            data: {
                paged: paged,
                action: 'true_loadmore',
                pagenumlink: pagenum,
            },
            dataType: 'json',
            beforeSend: function( xhr ) {
                load_btn.text( 'Загружаем...' );
            },
            success: function( response ){
                paged++;
                $('.reviews__items').append(response.reviews);
                $('.js-pagination').append(response.paginations);
                load_btn.text( 'Показать ещё' );

                // если последняя страница, то удаляем кнопку
                if( paged == maxPages ) {
                    load_btn.remove();
                }

            }

        });
    })

} )