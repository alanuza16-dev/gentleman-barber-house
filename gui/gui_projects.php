<?php
global $site;
$theme_url = get_template_directory_uri();
?>

<section class="projects-section bg-black gentleman-services-section" id="projects">
    <div class="container px-4 px-lg-5">
        <div class="gentleman-section-heading">
            <div>
                <p class="section-kicker">Rituales insignia</p>
                <h2 class="contact-title">Servicios que se sienten como una casa de barberia de verdad</h2>
            </div>
            <p class="contact-subtitle">
                La seccion ahora se comporta como una carta de experiencias. Cada bloque comunica atmosfera, tecnica y resultado para que el usuario imagine la cita antes de reservar.
            </p>
        </div>

        <div class="gentleman-service-grid">
            <article class="gentleman-service-card" onclick="abrirModal('modal1')">
                <div class="gentleman-service-media">
                    <img src="<?php echo $theme_url; ?>/assets/img/bg2.jpg" alt="Corte clasico realizado por un barbero profesional" loading="lazy">
                </div>
                <div class="gentleman-service-copy">
                    <span class="gentleman-service-tag">Signature Cut</span>
                    <h3><?php echo $site['project_one_title']; ?></h3>
                    <p><?php echo $site['project_one_text']; ?></p>
                    <button class="gentleman-service-trigger" type="button">Descubrir el ritual</button>
                </div>
            </article>

            <article class="gentleman-service-card gentleman-service-card-offset" onclick="abrirModal('modal2')">
                <div class="gentleman-service-media">
                    <img src="<?php echo $theme_url; ?>/assets/img/bg3.jpg" alt="Herramientas de barberia para perfilado y detalle" loading="lazy">
                </div>
                <div class="gentleman-service-copy">
                    <span class="gentleman-service-tag">Beard Tailoring</span>
                    <h3><?php echo $site['project_two_title']; ?></h3>
                    <p><?php echo $site['project_two_text']; ?></p>
                    <button class="gentleman-service-trigger" type="button">Ver detalle del servicio</button>
                </div>
            </article>

            <article class="gentleman-service-card" onclick="abrirModal('modal3')">
                <div class="gentleman-service-media">
                    <img src="<?php echo $theme_url; ?>/assets/img/hot-towel.jpg" alt="Ritual clasico de hot towel shave en barberia" loading="lazy">
                </div>
                <div class="gentleman-service-copy">
                    <span class="gentleman-service-tag">House Ritual</span>
                    <h3><?php echo $site['project_three_title']; ?></h3>
                    <p><?php echo $site['project_three_text']; ?></p>
                    <button class="gentleman-service-trigger" type="button">Abrir experiencia completa</button>
                </div>
            </article>
        </div>

        <div class="modal gentleman-modal" id="modal1">
            <div class="modal-content gentleman-modal-content">
                <button class="close" type="button" onclick="cerrarModal('modal1')" aria-label="Cerrar">&times;</button>
                <div class="gentleman-modal-frame">
                    <div class="gentleman-modal-copy">
                        <span class="gentleman-modal-label">Signature Cut</span>
                        <h2><?php echo $site['project_one_title']; ?></h2>
                        <p><?php echo $site['project_one_text']; ?></p>
                        <ul class="gentleman-modal-list">
                            <li>Consulta de estilo segun rostro, textura y rutina.</li>
                            <li>Transiciones limpias, contornos precisos y acabado elegante.</li>
                            <li>Ideal para una imagen sobria y segura todos los dias.</li>
                        </ul>
                    </div>
                    <div class="gentleman-modal-media">
                        <img src="<?php echo $theme_url; ?>/assets/img/bg2.jpg" alt="Servicio de corte clasico" loading="lazy">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal gentleman-modal" id="modal2">
            <div class="modal-content gentleman-modal-content">
                <button class="close" type="button" onclick="cerrarModal('modal2')" aria-label="Cerrar">&times;</button>
                <div class="gentleman-modal-frame">
                    <div class="gentleman-modal-copy">
                        <span class="gentleman-modal-label">Beard Tailoring</span>
                        <h2><?php echo $site['project_two_title']; ?></h2>
                        <p><?php echo $site['project_two_text']; ?></p>
                        <ul class="gentleman-modal-list">
                            <li>Perfilado visualmente balanceado con la estructura facial.</li>
                            <li>Definicion de lineas, limpieza y control de volumen.</li>
                            <li>Un resultado sobrio que se nota sin verse excesivo.</li>
                        </ul>
                    </div>
                    <div class="gentleman-modal-media">
                        <img src="<?php echo $theme_url; ?>/assets/img/bg3.jpg" alt="Herramientas de barberia para perfilado" loading="lazy">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal gentleman-modal" id="modal3">
            <div class="modal-content gentleman-modal-content">
                <button class="close" type="button" onclick="cerrarModal('modal3')" aria-label="Cerrar">&times;</button>
                <div class="gentleman-modal-frame">
                    <div class="gentleman-modal-copy">
                        <span class="gentleman-modal-label">House Ritual</span>
                        <h2><?php echo $site['project_three_title']; ?></h2>
                        <p><?php echo $site['project_three_text']; ?></p>
                        <ul class="gentleman-modal-list">
                            <li>Toalla caliente, espuma rica y navaja con ritmo preciso.</li>
                            <li>Una experiencia pensada para bajar el pulso y subir la presencia.</li>
                            <li>Perfecto para quien quiere verse impecable y salir renovado.</li>
                        </ul>
                    </div>
                    <div class="gentleman-modal-media">
                        <img src="<?php echo $theme_url; ?>/assets/img/hot-towel.jpg" alt="Ritual de afeitado con toalla caliente" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
