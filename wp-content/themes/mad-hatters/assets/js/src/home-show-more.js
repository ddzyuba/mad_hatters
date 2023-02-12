( function( $ ) {

	$( document ).ready( function () {
		
		let page           = 1;
		let contentWrapper = $( '.home-posts__list' );

		$( '.home-posts__show-more-btn' ).click( function( event ) {
			event.preventDefault();
			++page;
			loadPosts();
		} );


		function loadPosts() {
			$.ajax( {
				dataType: 'html',
				url: madHattersData.ajaxUrl,
				type: 'post',
				data: {
					action: 'show_posts',
					page: page
				},
				success: function ( data ) { 
					if ( data ) {
						let html = $( data );
                    	$( contentWrapper ).append( html );
					} else {
						$( '.home-posts__show-more-container' ).hide();
					} 
					
				},
				error: function ( jqXHR, textStatus, errorThrown ) {
					console.log( jqXHR + " :: " + textStatus + " :: " + errorThrown );
				}
			} );
		}

	} );

}( jQuery ) );