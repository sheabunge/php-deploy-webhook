<?php

namespace Shea\DeployWebhook;

class Webhook {

	public function __construct() {
		if ( ! isset( $_POST['payload'] ) ) {
			trigger_error( 'Webhook payload not provided.', E_USER_ERROR );
		}

		json_decode( $_POST['payload'] );
	}

	public function validate_secret( $secret_token ) {
		return isset( $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ) &&
		       $_SERVER['HTTP_X_HUB_SIGNATURE_256'] === 'sha256=' . hash( 'sha256', $secret_token );
	}
}
