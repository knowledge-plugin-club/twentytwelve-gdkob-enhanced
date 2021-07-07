<?php

// add your own PHP/WordPress code //

add_filter('body_class', 'gdkob_twentytwelve_body_class');
function gdkob_twentytwelve_body_class($classes) {
    if (is_page_template('gdkob-template-home.php')) {
        $classes[] = 'full-width';
    }

    return $classes;
}
