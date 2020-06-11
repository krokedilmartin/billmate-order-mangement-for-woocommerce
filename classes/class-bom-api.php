<?php
/**
 * API Class file.
 *
 * @package Billmate_Checkout/Classes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ACO_API class.
 *
 * Class that has functions for the Billmate communication.
 */
class BOM_API {

	/**
	 * Activate Billmate Payment.
	 *
	 * @param string $bco_transaction_id The Billmate transaction id.
	 * @return mixed
	 */
	public function request_activate_payment( $bco_transaction_id = '' ) {
		$request  = new BOM_Request_Activate_Payment();
		$response = $request->request( $bco_transaction_id );

		return $response;
	}

	/**
	 * Cancel Billmate Payment.
	 *
	 * @param string $bco_transaction_id The Billmate transaction id.
	 * @return mixed
	 */
	public function request_cancel_payment( $bco_transaction_id = '' ) {
		$request  = new BOM_Request_Cancel_Payment();
		$response = $request->request( $bco_transaction_id );

		return $response;
	}

	/**
	 * Get Billmate Payment.
	 *
	 * @param string $bco_transaction_id The Billmate transaction id.
	 * @return mixed
	 */
	public function request_get_payment( $bco_transaction_id = '' ) {
		$request  = new BOM_Request_Get_Payment();
		$response = $request->request( $bco_transaction_id );

		return $response;
	}

	/**
	 * Credit Billmate Payment.
	 *
	 * @param string $bco_transaction_id The Billmate transaction id.
	 * @param string $refund_data The refund data.
	 * @return mixed
	 */
	public function request_credit_payment( $bco_transaction_id = '', $refund_data ) {
		$request  = new BOM_Request_Credit_Payment();
		$response = $request->request( $bco_transaction_id, $refund_data );
		return $response;
	}
}
