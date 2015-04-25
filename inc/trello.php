<?php 
// key=2ca5a45f4024e3d67d54337f5a480fb6
// token=29d42fc0bf3ff3b7d51363583626af83005ebc2ef02224cb1a1a53d9ad2fef74

// Speaking board: 553b975c9a0359286128a942
// Proposals list: 553b97c908d995b0206b78e4

// https://api.trello.com/1/boards/553b975c9a0359286128a942/lists

// https://api.trello.com/1/lists/553b97c908d995b0206b78e4/cards?key=2ca5a45f4024e3d67d54337f5a480fb6&token=29d42fc0bf3ff3b7d51363583626af83005ebc2ef02224cb1a1a53d9ad2fef74

// ?key=2ca5a45f4024e3d67d54337f5a480fb6&token=29d42fc0bf3ff3b7d51363583626af83005ebc2ef02224cb1a1a53d9ad2fef74


function ao_get_speaking_proposals() {
	
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

	foreach( $cards as $proposal ) {

		$labels = $proposal->labels;

		if( ! empty($labels) ) {
			foreach( $labels as $label ) {
				if( 'Complete' === $label->name ) {
					$proposals[] = array(
							'name' => $proposal->name,
							'description' => $proposal->desc,
						);
				}				
			}	
		}
	}

	return $proposals;
}

$proposals = ao_get_speaking_proposals();

var_dump( $proposals );