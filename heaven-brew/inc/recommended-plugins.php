<?php 

function myth_register_required_plugins() {
    $plugins = array(
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false, // true if the plugin is necessary for theme functionality
        ),
    );

    $config = array(
        'id'           => 'mytheme', 
        'menu'         => 'tgmpa-install-plugins',
        'has_notices'  => true,
    );

    tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'myth_register_required_plugins');


?>