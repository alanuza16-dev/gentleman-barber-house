<?php
global $site;
$theme_url = get_template_directory_uri();
?>

<section class="about-section text-center" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8">
                <p class="section-kicker">Since 2026</p>
                <h2 class="contact-title">
                    <?php echo $site['about_title'] ?? 'La tradicion del buen arreglo'; ?>
                </h2>

                <p class="text-white-50">
                    <?php echo $site['about_text'] ?? ''; ?>
                </p>
            </div>
        </div>

        <img
            class="img-fluid d-block mx-auto about-emblem"
            src="<?php echo $theme_url; ?>/assets/img/logo-gentleman.svg"
            alt="Emblema de The Gentleman Barber House"
            loading="lazy"
        />
    </div>
</section>
