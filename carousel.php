<?php


/*
Plugin Name: Carousel
Description: Flexible Carousel
Version: 1.0
Author: Seweryn
*/


class CarouselPlugin{

    function __construct(){
        add_action('admin_menu', array($this, 'adminPage'));
    }

    function adminPage(){
        add_options_page('Flexible Carousel', 'Carousel', 'manage_options', 'felxible-carousel-settings', array($this, 'settingsPage'));
    }

    function settingsPage(){ ?>
        hello
        <?php
    }

}

$carouselPlugin = new CarouselPlugin();