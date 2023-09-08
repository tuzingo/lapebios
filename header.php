<!DOCTYPE html >
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <?php if (is_search()) { ?>
        <meta name="robots" content="noindex, nofollow" />
    <?php } ?>
    <title>
        <?php 	wp_title( '|', true, 'right' ); bloginfo( 'name' );   ?>
    </title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="navbar bg-body-tertiary sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src=""" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    LAPEBIOS
                </a>
            </div>
        </nav>