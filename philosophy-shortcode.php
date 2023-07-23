<?php

/*
 * Plugin Name:       Philosophy Shortcode
 * Plugin URI:        https://rahatulahsan.com
 * Description:       This plugin will enable shortcode for the Philosophy Theme.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rahatul Ahsan
 * Author URI:        https://rahatulahsan.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://rahatulahsan.com/philosophy-shortcode
 * Text Domain:       philosophy-shortcode
 */

// BUTTON SHORTCODE STYLE-1
function philosophy_button($attributes){

    $defaults = array(
        'type' => 'primary',
        'title' => __('Primary Button', 'philosophy'),
        'url' => ''
    );

    $button_attributes = shortcode_atts( $defaults, $attributes );

    return sprintf('<a class="btn btn--%s full-width" href="%s">%s</a>',
        $button_attributes['type'],
        $button_attributes['url'],
        $button_attributes['title']
    );
}

 add_shortcode( 'button', 'philosophy_button' );

 // BUTTON SHORTCODE STYLE-2

 function philosophy_button2($attributes, $content=''){

    $defaults = array(
        'type' => 'stroke',
        'title' => __('Primary Button', 'philosophy'),
        'url' => ''
    );

    $button_attributes = shortcode_atts( $defaults, $attributes );

    return sprintf('<a class="btn btn--%s full-width" href="%s">%s</a>',
        $button_attributes['type'],
        $button_attributes['url'],
        do_shortcode($content)
    );
}

 add_shortcode( 'button2', 'philosophy_button2' );

 // SHORTCODE TO CONVERT STRING TO UPPERCASE
function philosophy_uppercase($attributes, $content=''){
    return strtoupper(do_shortcode($content));
}
 add_shortcode('uc', 'philosophy_uppercase');

function philosophy_map($attributes){

    $defaults = array(
        'place' => 'Uttara',
        'width' => '100%',
        'height' => '100%'
    );

    $params = shortcode_atts( $defaults, $attributes );

    $map = <<<EOD
    <div style="overflow:hidden;max-width:100%;width:800px;height:500px;">
    <div id="embed-ded-map-canvas" style="height:100%; width:100%;max-width:100%;">
    <iframe style="height:{$params['height']};width:{$params['width']};border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q={$params['place']}&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
    </div><a class="from-embedmap-code" href="https://www.bootstrapskins.com/themes" id="auth-map-data">premium bootstrap themes</a>
    <style>#embed-ded-map-canvas img{max-height:none;max-width:none!important;background:none!important;}</style>
    </div>
    EOD;
    return $map;
}
 add_shortcode('gmap', 'philosophy_map');