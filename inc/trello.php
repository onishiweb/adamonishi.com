<?php

function ao_is_proposal_complete( $labels ) {
	if( empty($labels) ) {
		return false;
	}

	foreach( $labels as $label ) {
		if( 'Complete' === $label->name ) {
			return true;
		}			
	}

	return false;
}

function ao_get_speaking_proposals() {
	$cache = get_transient( 'trello_proposals' );

	if( $cache !== false ) {
		return $cache;
	}

	if( ! defined('TRELLO_KEY') ) {
		return;
	}

	$proposals = array();
	$list_id = '553b97c908d995b0206b78e4';

	$url = 'https://api.trello.com/1/lists/' . $list_id . '/cards?';

	$api_key = array(
		'key' => TRELLO_KEY,
		'token' => TRELLO_TOKEN,
	);

	$url.= build_query( $api_key );

	$response = wp_remote_get( $url );
	$cards_json = wp_remote_retrieve_body($response);
	
	$cards = json_decode( $cards_json );

	if( empty($cards) ) {
		return;
	}

	foreach( $cards as $proposal ) {

		if( ao_is_proposal_complete($proposal->labels) ) {

			$proposals[] = array(
				'title'       => $proposal->name,
				'description' => $proposal->desc,
			);

		}
	}

	set_transient( 'trello_proposals', $proposals, 3*HOUR_IN_SECONDS );

	return $proposals;
}
