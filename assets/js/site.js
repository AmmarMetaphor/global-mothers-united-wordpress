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

// Accessible mobile navigation toggle (plain DOM APIs, no framework).
const navToggle = document.querySelector( '.nav-toggle' );
const navLinks = document.getElementById( 'primary-nav-links' );

if ( navToggle && navLinks ) {
	const closeMenu = function () {
		navToggle.setAttribute( 'aria-expanded', 'false' );
		navLinks.classList.remove( 'is-open' );
	};

	navToggle.addEventListener( 'click', function () {
		const isOpen = navToggle.getAttribute( 'aria-expanded' ) === 'true';
		navToggle.setAttribute( 'aria-expanded', String( ! isOpen ) );
		navLinks.classList.toggle( 'is-open', ! isOpen );
	} );

	navLinks.querySelectorAll( 'a' ).forEach( function ( link ) {
		link.addEventListener( 'click', closeMenu );
	} );

	document.addEventListener( 'keydown', function ( event ) {
		if ( event.key === 'Escape' ) {
			closeMenu();
		}
	} );

	document.addEventListener( 'click', function ( event ) {
		if ( ! navToggle.contains( event.target ) && ! navLinks.contains( event.target ) ) {
			closeMenu();
		}
	} );
}

// Events page category filter (plain DOM APIs, no framework).
const filterButtons = document.querySelectorAll( '.ftab[data-filter]' );
const eventCards = document.querySelectorAll( '.ev-card[data-category]' );

if ( filterButtons.length && eventCards.length ) {
	filterButtons.forEach( function ( button ) {
		button.addEventListener( 'click', function () {
			const filter = button.getAttribute( 'data-filter' );

			filterButtons.forEach( function ( btn ) {
				const isActive = btn === button;
				btn.classList.toggle( 'on', isActive );
				btn.setAttribute( 'aria-pressed', String( isActive ) );
			} );

			eventCards.forEach( function ( card ) {
				const matches = filter === 'all' || card.getAttribute( 'data-category' ) === filter;
				card.hidden = ! matches;
			} );
		} );
	} );
}
