<?php
global $site;
?>

<nav class="navbar fixed-top gentleman-navbar" id="mainNav">
    <div class="container gentleman-nav-shell">
        <a class="navbar-brand gentleman-brand" href="#page-top" aria-label="<?php echo esc_attr($site['brand'] ?? 'The Gentleman Barber House'); ?>">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-gentleman.svg"
                alt="Logo The Gentleman Barber House"
                class="nav-logo"
            >
            <span class="gentleman-brand-copy d-none d-lg-flex">
                <strong>The Gentleman</strong>
                <small>Barber House</small>
            </span>
        </a>

        <button class="navbar-toggler gentleman-nav-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#gentlemanNavLinks" aria-controls="gentlemanNavLinks" aria-expanded="false" aria-label="Alternar navegacion">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse gentleman-nav-collapse" id="gentlemanNavLinks">
            <ul class="navbar-nav gentleman-nav-links ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">La Casa</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Rituales</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Reservas</a></li>
            </ul>
            <a class="gentleman-nav-cta" href="#contact">Book an Appointment</a>
        </div>
    </div>
</nav>
