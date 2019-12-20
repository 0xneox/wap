<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://tubeace.com', // Site where EDD is hosted
		'item_name'      => 'Tube Ace Play', // Name of theme
		'theme_slug'     => 'tubeaceplay', // Theme slug
		'version'        => '1.0.10', // The current version of this theme
		'author'         => 'Tube Ace', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'tubeaceplay' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'tubeaceplay' ),
		'license-key'               => __( 'License Key', 'tubeaceplay' ),
		'license-action'            => __( 'License Action', 'tubeaceplay' ),
		'deactivate-license'        => __( 'Deactivate License', 'tubeaceplay' ),
		'activate-license'          => __( 'Activate License', 'tubeaceplay' ),
		'status-unknown'            => __( 'License status is unknown.', 'tubeaceplay' ),
		'renew'                     => __( 'Renew?', 'tubeaceplay' ),
		'unlimited'                 => __( 'unlimited', 'tubeaceplay' ),
		'license-key-is-active'     => __( 'License key is active.', 'tubeaceplay' ),
		'expires%s'                 => __( 'Expires %s.', 'tubeaceplay' ),
		'expires-never'             => __( 'Lifetime License.', 'tubeaceplay' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'tubeaceplay' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'tubeaceplay' ),
		'license-key-expired'       => __( 'License key has expired.', 'tubeaceplay' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'tubeaceplay' ),
		'license-is-inactive'       => __( 'License is inactive.', 'tubeaceplay' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'tubeaceplay' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'tubeaceplay' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'tubeaceplay' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'tubeaceplay' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'tubeaceplay' ),
	)

);
