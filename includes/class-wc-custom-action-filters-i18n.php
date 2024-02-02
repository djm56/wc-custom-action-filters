<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://anomalous.co.za
 * @since      1.0.0
 *
 * @package    Wc_Custom_Action_Filters
 * @subpackage Wc_Custom_Action_Filters/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wc_Custom_Action_Filters
 * @subpackage Wc_Custom_Action_Filters/includes
 * @author     Donovan Maidens <donovan@anomalous.co.za>
 */
class Wc_Custom_Action_Filters_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wc-custom-action-filters',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
