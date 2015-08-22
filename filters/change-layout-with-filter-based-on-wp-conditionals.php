<?php
// Apply a filter only when a condition is met. 
// https://codex.wordpress.org/Conditional_Tags

function wf_plus_edd_container_action()
{
  // Our Conditional Tags
  if ( is_singular('download') || is_tax('download_category') ) {

    function wf_plus_edd_container_filter() {
    
    	//Change our class.
    	$class = 'container-fluid';
    	
    	//Return it
    	return $class;

    }
    //Add the filter.
    add_filter( 'wff_content_wrapper_class', 'wf_plus_edd_container_filter' );
  }
}
// Hook our function at the right place.
add_action('wp', 'wf_plus_edd_container_action');
?>
