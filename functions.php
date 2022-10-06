<?php

add_action('wp_enqueue_style', function () {
    die('kontol');
    wp_enqueue_style('style', get_stylesheet_uri());
});
