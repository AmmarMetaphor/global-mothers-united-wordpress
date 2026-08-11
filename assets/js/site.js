const io = new IntersectionObserver( function ( entries ) {
	entries.forEach( function ( entry ) {
		if ( entry.isIntersecting ) {
			entry.target.classList.add( 'in' );
			io.unobserve( entry.target );
		}
	} );
}, { threshold: 0.1 } );

document.querySelectorAll( '.rv' ).forEach( function ( el ) {
	io.observe( el );
} );
