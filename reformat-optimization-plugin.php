<?php

/**
* Plugin Name: Reformat Optimization Plugin
* Description: This plugin adds custom optimization tweaks for WordPress to address
* Version: 1.0.0
* Author: Reformat Devs
* Author URI: https://reformat.co
*/

/* Added 27/01/2020 to address -scaled full size images which disables large banners */

add_filter( 'big_image_size_threshold', '__return_false' );