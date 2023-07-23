<?php

function philosophy_google_map_ui(){
    $fields = array(
        array(
            'label' => __('Place', 'pholosophy'),
            'attr' => 'place',
            'type' => 'text'
        ),
        array(
            'label' => __('Width', 'pholosophy'),
            'attr' => 'width',
            'type' => 'text'
        ),
        array(
            'label' => __('Height', 'pholosophy'),
            'attr' => 'height',
            'type' => 'text'
        )
    );

    $settings = array(
        'label' => __('Google Map', 'philosophy'),
        'listItemImage' => 'dashicons-editor-quote',
        'post_type' => array( 'post', 'page' ),
        'attrs' => $fields
    );

    shortcode_ui_register_for_shortcode( 'gmap', $settings );
}

add_action('register_shortcode_ui', 'philosophy_google_map_ui');