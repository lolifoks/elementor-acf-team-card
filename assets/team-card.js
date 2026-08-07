/**
 * Team Card widget: subtle hover interaction.
 *
 * Adds/removes an `is-hovered` class on the card element so CSS can react.
 * Uses mouseenter/mouseleave to avoid bubbling weirdness of mouseover.
 * Also supports keyboard focus for accessibility.
 */
( function () {
	'use strict';

	function bindCard( card ) {
		card.addEventListener( 'mouseenter', function () {
			card.classList.add( 'is-hovered' );
		} );

		card.addEventListener( 'mouseleave', function () {
			card.classList.remove( 'is-hovered' );
		} );

		// Keyboard focus support: if any child link is focused, treat as hovered.
		card.addEventListener( 'focusin', function () {
			card.classList.add( 'is-hovered' );
		} );

		card.addEventListener( 'focusout', function () {
			card.classList.remove( 'is-hovered' );
		} );
	}

	function init() {
		var cards = document.querySelectorAll( '.eatc-team-card' );
		cards.forEach( bindCard );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();