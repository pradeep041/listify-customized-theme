<?php
/**
 * Output navigation information.
 *
 * @since unknown
 * @package Customizer
 */
class
	Listify_Customizer_OutputCSS_Nav
extends
	Listify_Customizer_OutputCSS {

	public function __construct() {
		parent::__construct();
	}

	/**
	 * Add items to the CSS object that will be built and output.
	 *
	 * @since 1.5.0
	 * @return void
	 */
	public function output() {
		$menu_width = get_theme_mod( 'nav-menu-width', 'fixed' );

		if ( 'full' == $menu_width ) {
			Listify_Customizer_CSS::add(
				array(
					'selectors'    => array(
						'.primary-header .container',
						'.main-navigation .container',
					),
					'declarations' => array(
						'max-width' => 'none',
					),
					'media'        => 'screen and (min-width: 992px)',
				)
			);
		}

		$display_secondary = listify_theme_mod( 'nav-secondary', true );

		if ( ! $display_secondary ) {
			Listify_Customizer_CSS::add(
				array(
					'selectors'    => array(
						'.main-navigation',
					),
					'declarations' => array(
						'display' => 'none',
					),
					'media'        => 'screen and (min-width: 992px)',
				)
			);
		}
	}

}

new Listify_Customizer_OutputCSS_Nav();
