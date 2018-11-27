<?php
/*
 * Plugin Name: wordpress-xmlrpc-autop
 * Description: update the post_content to include paragraph tags
 * Author: Dan McFadden
 * License: MIT
 * */

add_filter( 'xmlrpc_prepare_post', 'cpdm_xmlrpc_methods' );

function cpdm_xmlrpc_methods( $post, $orig_post = null , $fields = null )
{
	if (isset($post['post_content'])) {
		$post['post_content'] = wpautop($post['post_content']);
	}
	return $post;
}
