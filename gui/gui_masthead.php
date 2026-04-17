<?php
global $site;
?>

<header class="masthead gentleman-hero" id="page-top">
    <div class="container px-4 px-lg-5">
        <div class="row align-items-center g-4 g-xl-5">
            <div class="col-lg-6">
                <div class="gentleman-hero-copy">
                    <p class="hero-eyebrow">Barberia clasica refinada</p>
                    <h1 class="hero-title"><?php echo $site['hero_title'] ?? 'The Gentleman Barber House'; ?></h1>
                    <p class="hero-subtitle"><?php echo $site['hero_subtitle'] ?? ''; ?></p>
                    <div class="gentleman-hero-actions">
                        <a class="btn btn-primary" href="#contact">Reservar ahora</a>
                        <a class="gentleman-link" href="#projects">Ver rituales</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="gentleman-hero-stack">
                    <div class="gentleman-hero-card gentleman-card-main">
                        <span class="gentleman-card-badge">House Signature</span>
                        <h2>El porte clasico vuelve a sentirse actual cuando el detalle se ejecuta con calma.</h2>
                    </div>
                    <div class="gentleman-hero-grid">
                        <article class="gentleman-mini-card">
                            <span>Ritual</span>
                            <strong>Toalla caliente y navaja</strong>
                        </article>
                        <article class="gentleman-mini-card">
                            <span>Estilo</span>
                            <strong>Cortes sobrios con presencia</strong>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <div class="gentleman-marquee">
            <span>Classic Cuts</span>
            <span>Beard Tailoring</span>
            <span>Hot Towel Shave</span>
            <span>Private Grooming Experience</span>
        </div>
    </div>
</header>
