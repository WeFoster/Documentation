<?php
/**
 * Add the code below to your WeFoster Child Theme
 */
 
function wfc_add_main_class() {
  echo 'my-custom-class ';
}
add_action( 'class_main','wfc_add_main_class' );

function wfc_add_sidebar_class() {
  echo 'my-custom-class ';
}
add_action( 'class_sidebar','wfc_add_sidebar_class' );
