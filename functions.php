<?php
    add_filter( 'excerpt_length', function($length) {
        return 5;
    }, PHP_INT_MAX );