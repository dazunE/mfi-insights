/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	wp.customize('ninteen_theme_header_logo' , function ( value ) {
		value.bind( function ( to ) {
			$('.imf-logo img').attr('src', to);
		} );

	} );

	wp.customize( 'ninteen_theme_header_title' , function ( value ) {

		value.bind( function( to ) {
			$('.mobile-header-welcome .info h2').html(to);
		});

	} );


	wp.customize( 'ninteen_theme_header_description' , function ( value ) {

		value.bind( function( to ) {
			$('.mobile-header-welcome .info p').html(to);
		});

	} );



	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
} )( jQuery );
