<?php
/**
 * Add the code below to your WeFoster Child Theme
 */
 
function wefoster_child_change_main_class() {

    $classes = 'col-sm-8 ';
    return $classes;

}
add_filter( 'wff_main_class', 'wefoster_child_main_class' );

function wefoster_child_change_sidebar_class() {

    $classes = 'col-sm-4 ';
    return $classes;

}
add_filter( 'wff_sidebar_class', 'wefoster_child_sidebar_class' );
