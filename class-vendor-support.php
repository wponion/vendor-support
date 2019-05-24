<?php

if ( ! class_exists( 'WPOnion_Vendor_Support' ) ) {
	/**
	 * Class WPOnion_Vendor_Support
	 *
	 * @author Varun Sridharan <varunsridharan23@gmail.com>
	 * @since 1.0
	 */
	final class WPOnion_Vendor_Support {
		/**
		 * Stores All Script Informations.
		 *
		 * @var array
		 * @access
		 * @static
		 */
		protected static $scripts = array();

		/**
		 * @var array
		 * @access
		 * @static
		 */
		protected static $styles = array();

		/**
		 * Stores All Basic Information.
		 *
		 * @static
		 */
		public static function init() {
			/**
			 * Scripts.
			 */
			self::$scripts['chosen']    = self::url( 'vendors/chosen/chosen.jquery.min.js' );
			self::$scripts['flatpickr'] = self::url( 'vendors/flatpickr/script.js' );
			self::$scripts['select2']   = self::url( 'vendors/select2/select2.full.min.js' );
			self::$scripts['selectize'] = self::url( 'vendors/selectize/selectize.js' );
			self::$scripts['inputmask'] = self::url( 'vendors/inputmask/jquery.inputmask.bundle.min.js' );

			/**
			 * Styles.
			 */
			self::$scripts['chosen']    = self::url( 'vendors/chosen/chosen.min.css' );
			self::$scripts['flatpickr'] = self::url( 'vendors/flatpickr/style.css' );
			self::$scripts['select2']   = self::url( 'vendors/select2/select2.min.css' );
			self::$scripts['selectize'] = self::url( 'vendors/selectize/selectize.css' );
		}

		/**
		 * Adds Extra URL.
		 *
		 * @param $extra
		 *
		 * @static
		 * @return string
		 */
		protected static function url( $extra ) {
			return plugin_dir_url( __FILE__ ) . $extra;
		}

		/**
		 * Returns Script Info
		 *
		 * @param $key
		 *
		 * @static
		 * @return bool|mixed
		 */
		public static function script( $key ) {
			return ( isset( self::$scripts[ $key ] ) ) ? self::$scripts[ $key ] : false;
		}

		/**
		 * Returns Script Info
		 *
		 * @param $key
		 *
		 * @static
		 * @return bool|mixed
		 */
		public static function style( $key ) {
			return ( isset( self::$styles[ $key ] ) ) ? self::$styles[ $key ] : false;
		}
	}
}

WPOnion_Vendor_Support::init();
