<?php
#tell wordpress to allow widgets
if ( function_exists('register_sidebar') )
    #Enter number of sidebars to add
    register_sidebars(4);

/* excerpt length */
function new_excerpt_length($length) {
  return 20; /* # of words to display */
  }
  add_filter('excerpt_length', 'new_excerpt_length');

/* excerpt ending [usually '[...]'*/
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Enable Thumbnails -- used in gallery scripts //
add_theme_support( 'post-thumbnails' );
?>