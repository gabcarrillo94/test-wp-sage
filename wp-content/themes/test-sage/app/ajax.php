<?php

namespace App;

class Ajax
{
    public function __construct()
    {
        add_action('wp_ajax_add_count', [$this, 'add_count']);
        add_action('wp_ajax_nopriv_add_count', [$this, 'add_count']);
    }

    public function add_count( $current_count = 1 )
    {
        if(isset($_POST['current_count'])) {
            $current_count = (int)$_POST['current_count'];
        }

        echo $current_count + 1;
        wp_die();
    }
}

new Ajax();