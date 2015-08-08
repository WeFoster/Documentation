<?php
/**
 * Change the default (English) BuddyPress page titles.
 */
function wf_change_activity_title($data) {
	if( $data == 'Site-Wide Activity' ) {
		$data = 'New Directory';
	}
	return $data;
}
add_filter( 'bp_get_directory_title', 'wf_change_activity_title' );

function wf_change_members_title($data) {
	if( $data == 'Members' ) {
		$data = 'Community';
	}
	return $data;
}
add_filter( 'bp_get_directory_title', 'wf_change_members_title' );

function wf_change_groups_title($data) {
	if( $data == 'Groups' ) {
		$data = 'Support Groups';
	}
	return $data;
}
add_filter( 'bp_get_directory_title', 'wf_change_groups_title' );

function wf_change_sites_title($data) {
	if( $data == 'Sites' ) {
		$data = 'Blogs';
	}
	return $data;
}
add_filter( 'bp_get_directory_title', 'wf_change_sites_title' );
