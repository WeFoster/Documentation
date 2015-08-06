<?php
/**
 * Add the code below to your WeFoster Child Theme
 */
 
function wefoster_child_change_thumb_height() {
   $thumbheight = '300';
   return $thumbheight;
}
add_filter( 'height_thumbnail', 'wefoster_child_change_thumb_height' );

function wefoster_child_change_thumb_width() {
   $thumbheight = '300';
   return $thumbwidth;
}
add_filter( 'width_thumbnail', 'wefoster_child_change_thumb_width' );

function wefoster_child_change_thumb_height_full() {
   $thumbheight = '300';
   return $thumbheight;
}
add_filter( 'height_thumbnail_full', 'wefoster_child_change_thumb_height_full' );

function wefoster_child_change_thumb_width_full() {
   $thumbheight = '300';
   return $thumbwidth;
}
add_filter( 'width_thumbnail_full', 'wefoster_child_change_thumb_width_full' );
