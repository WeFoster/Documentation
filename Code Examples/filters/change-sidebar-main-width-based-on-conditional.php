<?php
// Apply a filter only when a condition is met.
// https://codex.wordpress.org/Conditional_Tags
function wf_change_bp_profile_page_width()
{
  // Our Conditional Tags
  if ( bp_is_my_profile() ) {

    function wf_profile_main_filter() {

    	//Change our class for .main
    	$class = 'col-sm-8';

    	//Return it
    	return $class;
    }
    //Add the filter.
    add_filter( 'wff_main_class', 'wf_profile_main_filter' );

    function wf_profile_sidebar_filter() {

    	//Change our class for the sidebar
    	$class = 'col-sm-4';

    	//Return it
    	return $class;
    }
    //Add the filter.
    add_filter( 'wff_sidebar_class', 'wf_profile_sidebar_filter' );

  }
}
// Hook our function at the right place.
add_action('init', 'wf_change_bp_profile_page_width');
?>
