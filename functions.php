<?php

// add this to function.php
// this will remove post/pages/ if want we can customize according to our custom post types.

function my_cpt_post_types( $post_types ) {
	 
		$output = 'objects'; // names or objects
		$post_types = get_post_types( $args, $output );
	
		 foreach($post_types as $post_type){
		 $post_type = $post_type->slug;
			 if($post_type!="post" || $post_type!="page" || $post_type!="attachment" || $post_type!="revision" || $post_type!="nav_menu_item" || $post_type!="am_event" ){
			 $post_types[] = $post_type; 
			 }
		 }
			
		return $post_types;
	}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );
?>