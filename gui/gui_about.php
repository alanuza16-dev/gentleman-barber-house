<?php
global $site;
?>

<section class="about-section gentleman-about-section" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row align-items-stretch g-4 g-xl-5">
            <div class="col-lg-5">
                <div class="gentleman-about-panel">
                    <span class="section-kicker">Since 2026</span>
                    <h2 class="contact-title"><?php echo $site['about_title'] ?? 'La tradicion del buen arreglo'; ?></h2>
                    <p class="text-white-50"><?php echo $site['about_text'] ?? ''; ?></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="gentleman-about-layout">
                    <article class="gentleman-about-card">
                        <span>Ambiente</span>
                        <p>Maderas oscuras, metal envejecido y una atmosfera serena para que cada visita se sienta como una pausa bien elegida.</p>
                    </article>
                    <article class="gentleman-about-card">
                        <span>Tecnica</span>
                        <p>Trabajamos corte, barba y perfilado con precision visual, lectura de rostro y acabados limpios.</p>
                    </article>
                    <article class="gentleman-about-card gentleman-about-card-wide">
                        <span>Experiencia</span>
                        <p>No vendemos solo un corte. Vendemos la sensacion de salir impecable, descansado y mejor presentado para cualquier mesa, reunion o evento.</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
