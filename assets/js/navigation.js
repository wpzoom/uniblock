/**
 * Mobile overlay menu accordion.
 */

// Mobile overlay menu: collapsible submenus (accordion).
// Since WP 7.1 the core navigation script reports aria-expanded="true" on every submenu
// toggle while the overlay is open, so the theme tracks the open/closed state itself with
// the .wpz-submenu-open class (see the "Mobile overlay menu" rules in style.css).
( function() {
	var OPEN_CLASS   = 'wpz-submenu-open';
	var OVERLAY_OPEN = '.wp-block-navigation__responsive-container.is-menu-open';
	var TOGGLE       = '.wp-block-navigation-submenu__toggle';
	var ITEM         = '.wp-block-navigation-item.has-child';

	if ( ! ( 'closest' in Element.prototype ) || ! ( 'MutationObserver' in window ) ) {
		return;
	}

	function isAccordionItem( item ) {
		return item && ! item.classList.contains( 'open-always' );
	}

	function toggleOf( item ) {
		var child = item.firstElementChild;
		while ( child ) {
			if ( child.matches( TOGGLE ) ) {
				return child;
			}
			child = child.nextElementSibling;
		}
		return null;
	}

	function setOpen( item, open ) {
		item.classList.toggle( OPEN_CLASS, open );
		var toggle = toggleOf( item );
		if ( toggle && toggle.getAttribute( 'aria-expanded' ) !== String( open ) ) {
			toggle.setAttribute( 'aria-expanded', open ? 'true' : 'false' );
		}
	}

	// Collapse every submenu except the branch that holds the current page.
	function resetOverlay( container ) {
		container.querySelectorAll( ITEM ).forEach( function( item ) {
			if ( isAccordionItem( item ) ) {
				setOpen( item, !! item.querySelector( '.current-menu-item, [aria-current]' ) );
			}
		} );
	}

	// Core re-applies aria-expanded="true" on re-renders; keep it in sync with our state.
	function syncToggle( toggle ) {
		var item = toggle.closest( ITEM );
		if ( isAccordionItem( item ) ) {
			setOpen( item, item.classList.contains( OPEN_CLASS ) );
		}
	}

	document.addEventListener( 'click', function( event ) {
		var toggle = event.target.closest( TOGGLE );
		if ( ! toggle || ! toggle.closest( OVERLAY_OPEN ) ) {
			return;
		}
		var item = toggle.closest( ITEM );
		if ( ! isAccordionItem( item ) ) {
			return;
		}
		// Handled here; keep the core interactivity handler out of it.
		event.preventDefault();
		event.stopPropagation();
		setOpen( item, ! item.classList.contains( OPEN_CLASS ) );
	}, true );

	document.querySelectorAll( '.wp-block-navigation__responsive-container' ).forEach( function( container ) {
		var wasOpen = container.classList.contains( 'is-menu-open' );

		new MutationObserver( function( records ) {
			var isOpen = container.classList.contains( 'is-menu-open' );

			if ( isOpen && ! wasOpen ) {
				// Wait for the core script to finish its own render before overriding it.
				window.requestAnimationFrame( function() {
					resetOverlay( container );
				} );
			} else if ( isOpen ) {
				records.forEach( function( record ) {
					if ( record.attributeName === 'aria-expanded' && record.target.matches( TOGGLE ) ) {
						syncToggle( record.target );
					}
				} );
			}
			wasOpen = isOpen;
		} ).observe( container, { attributes: true, subtree: true, attributeFilter: [ 'class', 'aria-expanded' ] } );
	} );
} )();
