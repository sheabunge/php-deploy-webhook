<?php

namespace Shea\DeployWebhook;

ini_set( 'display_errors', 'On' );

require dirname( __DIR__ ) . '/vendor/autoload.php';

if ( empty( WORKING_DIR ) || ! is_dir( WORKING_DIR ) ) {
	trigger_error( 'Could not find working directory' );
	return;
}

if ( ! isset( $_POST['action'] ) || 'push' !== $_POST['action'] ) {
	trigger_error( 'Only responds to the push action' );
	return;
}

var_dump( $_POST );
