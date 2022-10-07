<?php

add_action('wp_head', function () {
?>
    <meta content="Giveaway NFT drops &amp; Giveaway NFT collection List. Drop Mint provide you with an updated list of NFT Giveaway&#x27;s. Follow the Steps to get the Giveaway drops." name="description" />
    <meta content="NFT Giveaways Drops - Drop Mint" property="og:title" />
    <meta content="Giveaway NFT drops &amp; Giveaway NFT collection List. Drop Mint provide you with an updated list of NFT Giveaway&#x27;s. Follow the Steps to get the Giveaway drops." property="og:description" />
    <meta content="NFT Giveaways Drops - Drop Mint" property="twitter:title" />
    <meta content="Giveaway NFT drops &amp; Giveaway NFT collection List. Drop Mint provide you with an updated list of NFT Giveaway&#x27;s. Follow the Steps to get the Giveaway drops." property="twitter:description" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <link rel="Shortcut Icon" type="image/x-icon" href="<?= get_bloginfo('wpurl') . '/favicon.ico' ?>" />
    <link href="https://www.dropmint.com/" rel="canonical" />
    <meta name="keywords" content="giveaway nft drops, giveaway nft projects, giveaway nft mints, giveaway nft calendar, free mint, free nft drops">
<?php
});

add_action('wp_footer', function () {
?>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
<?php
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/dropmint.css');
    wp_enqueue_script('google-webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js');
    wp_enqueue_script('header-js', get_template_directory_uri() . '/js/header.js');
    wp_enqueue_script('header-js', get_template_directory_uri() . '/js/jquery-3.5.1.min.js');
    wp_enqueue_script('header-js', get_template_directory_uri() . '/js/webflow.js');
});
