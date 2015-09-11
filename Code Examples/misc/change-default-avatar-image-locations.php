<?php
/**
 * Add the code below to your WeFoster Child Theme
 */

function wff_default_avatar() {
	define ( 'BP_AVATAR_DEFAULT', get_stylesheet_directory_uri() . '/your-custom-location.jpg' );
}
add_action( 'bp_init', 'wff_default_avatar' );

function wff_default_group_avatar($avatar)
{
	global $bp, $groups_template;
	if ( strpos($avatar,'group-avatars') )
	{
		return $avatar;
	}
	else {
		$custom_avatar = get_stylesheet_directory_uri() .'/your-custom-location.jpg';

		if ( $bp->current_action == "" )
		{
			return '<img width="'.BP_AVATAR_THUMB_WIDTH.'" height="'.BP_AVATAR_THUMB_HEIGHT.'" src="'.$custom_avatar.'" class="avatar" alt="' . esc_attr( $groups_template->group->name ) . '" />';
		}
		else {
			return '<img width="'.BP_AVATAR_FULL_WIDTH.'" height="'.BP_AVATAR_FULL_HEIGHT.'" src="'.$custom_avatar.'" class="avatar" alt="' . esc_attr( $groups_template->group->name ) . '" />';
		}
	}
}
add_filter( 'bp_get_group_avatar', 'wff_default_group_avatar');
add_filter( 'bp_get_new_group_avatar', 'wff_default_group_avatar' );	
