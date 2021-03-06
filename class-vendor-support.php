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
		 */
		protected static $scripts = array();

		/**
		 * @var array
		 */
		protected static $styles = array();

		/**
		 * Stores All Basic Information.
		 */
		public static function init() {
			/**
			 * Scripts.
			 */
			self::$scripts['chosen']             = self::url( 'vendors/chosen/chosen.jquery.min.js' );
			self::$scripts['wponion-datepicker'] = self::url( 'vendors/flatpickr/script.js' );
			self::$scripts['select2']            = self::url( 'vendors/select2/select2.full.min.js' );
			self::$scripts['selectize']          = self::url( 'vendors/selectize/selectize.js' );
			self::$scripts['wponion-inputmask']  = self::url( 'vendors/inputmask/jquery.inputmask.bundle.min.js' );
			self::$scripts['wponion-pickr']      = self::url( 'vendors/pickr/pickr.es5.min.js' );

			/**
			 * Styles.
			 */
			self::$styles['chosen']             = self::url( 'vendors/chosen/chosen.min.css' );
			self::$styles['wponion-datepicker'] = self::url( 'vendors/flatpickr/style.css' );
			self::$styles['wponion-pickr']      = self::url( 'vendors/pickr/pickr.css' );
			self::$styles['select2']            = self::url( 'vendors/select2/select2.min.css' );
			self::$styles['selectize']          = self::url( 'vendors/selectize/selectize.css' );
		}

		/**
		 * Adds Extra URL.
		 *
		 * @param $extra
		 *
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
		 * @return bool|mixed
		 */
		public static function style( $key ) {
			return ( isset( self::$styles[ $key ] ) ) ? self::$styles[ $key ] : false;
		}
	}
}

WPOnion_Vendor_Support::init();
