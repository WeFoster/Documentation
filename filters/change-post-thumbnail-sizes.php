<?php
/**
 * Add the code below to your WeFoster Child Theme
 */
function wfc_child_thumb_sizes( $sizes ){ 
  return array( 
  'width' => 1000, 
  'height' => 300, 
  'width_full' => 1500, 
  'height_full' => 450 
); 
}
add_filter( 'wff_post_thumbnail_sizes', 'child_thumb_sizes' );
