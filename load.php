<?php
/*
Plugin Name: WP Pro Ads Remover for AMP Pages
Author: Tamal Sen
*/

add_filter( 'option_active_plugins', 'disable_wppas_plugin' );

function disable_wppas_plugin($plugins){

    if(strpos($_SERVER['REQUEST_URI'], '.*/amp/') === FALSE AND strpos($_SERVER['REQUEST_URI'], '/wp-admin/') === FALSE) {
/* 
Here ./amp/ with wildcard (*) to eliminate any url which ends with /amp/. 
You can use your own post or page
*/
        $key = array_search( 'wppas/wppas.php' , $plugins ); // wppas/wppas.php is the folder name and the php file to block

        if ( false !== $key ) {
            unset( $plugins[$key] );
        }
    }

    return $plugins;
}
