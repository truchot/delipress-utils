<?php 

/*
 * Plugin Name: Delipress Utils
 * Description: Some utils functions to extends Delipress plugin
 * Version: 1.0.0
 * Author: Florian Truchot
 * Author URI: https://www.fantassin.fr
 * Text Domain: tco_delipress
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! function_exists( 'delipress_get_subscriber_id' ) ) {
	
	/**
	 * Get Subscriber ID from List ID
	 *
	 * @since 1.0.0
	 */
	function delipress_get_subscriber_id( $listId, $email, $args = array() ){

		if( ! checkDelipressPluginExist() ){
			return null;
		}

		if( empty( $email ) ){
			return array(
				"success" => false,
				"results" => array(
					"message" => __( "Email is empty", "delipress" )
				)
			);
		}

		if( empty( $listId ) ){
			return array(
				"success" => false,
				"results" => array(
					"message" => __( "List id is empty", "delipress" )
				)
			);
		}

		global $delipressPlugin;

		$listServices = $delipressPlugin->getService( "ListServices" );
		$subscriberServices = $delipressPlugin->getService( "SubscriberServices" );
		$list = $listServices->getList( $listId );

		if( ! $list ){
			return array(
				"success" => false,
				"results" => array(
					"message" => __("List not exist", "delipress")
				)
			);
		}

		$response = $subscriberServices->searchSubscriber( $listId, $email, $args );
		return $response['results']->getId();
	}
}