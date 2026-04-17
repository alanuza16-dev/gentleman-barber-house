<?php

global $site;

$site = [
    'brand' => 'The Gentleman Barber House',
    'hero_title' => 'The Gentleman Barber House',
    'hero_subtitle' => 'Cortes clasicos, afeitado con ritual y una experiencia refinada para el caballero contemporaneo.',
    'about_title' => 'La tradicion del buen arreglo',
    'about_text' => 'Somos una barberia de inspiracion clasica donde cada detalle importa: el corte preciso, el afeitado tradicional, la atencion cercana y el ambiente sobrio que invita a bajar el ritmo. Creamos una experiencia elegante para clientes que buscan estilo, presencia y cuidado impecable.',
    'project_featured_title' => 'Shoreline',
    'project_featured_text' => 'Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!',
    'project_one_title' => 'Corte Clasico',
    'project_one_text' => 'Cortes a tijera o maquina con asesoria de imagen, acabado limpio y perfilado preciso para un look atemporal.',
    'project_two_title' => 'Barba y Perfilado',
    'project_two_text' => 'Diseno y mantenimiento de barba con detalle, equilibrio y una ejecucion pensada para resaltar el rostro.',
    'project_three_title' => 'Hot Towel Shave',
    'project_three_text' => 'Toalla caliente, espuma y navaja en una experiencia relajante inspirada en la barberia tradicional.',
    'signup_title' => 'Subscribe to receive updates!',
    'address' => 'Barrio Escalante, San Jose, Costa Rica',
    'email' => 'hola@gentlemanbarberhouse.com',
    'phone1' => '(+506) 7000-1100',
    'phone2' => '(+506) 7000-2200'
];

if (file_exists(get_template_directory() . '/config/config.php')) {
    require_once get_template_directory() . '/config/config.php';
}

if (file_exists(get_template_directory() . '/functions/functions.php')) {
    require_once get_template_directory() . '/functions/functions.php';
}

function lanzah_enqueue_assets() {
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    wp_enqueue_style(
        'lanzah-styles',
        get_template_directory_uri() . '/assets/css/styles.css',
        array('bootstrap-css'),
        '1.0'
    );

    wp_enqueue_script(
        'fontawesome',
        'https://use.fontawesome.com/releases/v6.3.0/js/all.js',
        array(),
        '6.3.0',
        false
    );

    wp_enqueue_script(
        'bootstrap-bundle',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );

    wp_enqueue_script(
        'lanzah-scripts',
        get_template_directory_uri() . '/assets/js/scripts.js',
        array('bootstrap-bundle'),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'lanzah_enqueue_assets');
