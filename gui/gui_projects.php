<?php
global $site;
$theme_url = get_template_directory_uri();
?>

<section class="projects-section bg-black" id="projects">
    <div class="container px-4 px-lg-5">
        <div class="text-center mb-5">
            <p class="section-kicker">Servicios insignia</p>
            <h2 class="contact-title">Rituales de barberia</h2>
            <p class="contact-subtitle">
                Creamos un servicio que combina tecnica, hospitalidad y presencia. Cada cita esta pensada para que salgas impecable y con una sensacion de calma dificil de reemplazar.
            </p>
        </div>

        <section class="catalogo">
            <div class="grid">
                <div class="item" onclick="abrirModal('modal1')">
                    <img src="<?php echo $theme_url; ?>/assets/img/bg2.jpg" alt="Corte clasico realizado por un barbero profesional" loading="lazy">
                    <div class="overlay">
                        <span>+</span>
                    </div>
                    <h3 class="contact-subtitle"><?php echo $site['project_one_title']; ?></h3>
                </div>

                <div class="item" onclick="abrirModal('modal2')">
                    <img src="<?php echo $theme_url; ?>/assets/img/bg3.jpg" alt="Herramientas de barberia para perfilado y detalle" loading="lazy">
                    <div class="overlay">
                        <span>+</span>
                    </div>
                    <h3 class="contact-subtitle"><?php echo $site['project_two_title']; ?></h3>
                </div>

                <div class="item" onclick="abrirModal('modal3')">
                    <img src="<?php echo $theme_url; ?>/assets/img/hot-towel.jpg" alt="Ritual clasico de hot towel shave en barberia" loading="lazy">
                    <div class="overlay">
                        <span>+</span>
                    </div>
                    <h3 class="contact-subtitle"><?php echo $site['project_three_title']; ?></h3>
                </div>
            </div>
        </section>

        <div class="text-center mt-5">
            <p class="contact-subtitle">
                Nuestro espacio esta diseñado para que el tiempo se sienta distinto: musica sobria, materiales nobles y una atencion que prioriza el detalle sobre la prisa.
            </p>
        </div>

        <div class="modal" id="modal1">
            <div class="modal-content">
                <span class="close" onclick="cerrarModal('modal1')">&times;</span>
                <h2><?php echo $site['project_one_title']; ?></h2>
                <img src="<?php echo $theme_url; ?>/assets/img/bg2.jpg" alt="Servicio de corte clasico" loading="lazy">
                <p><?php echo $site['project_one_text']; ?></p>
            </div>
        </div>

        <div class="modal" id="modal2">
            <div class="modal-content">
                <span class="close" onclick="cerrarModal('modal2')">&times;</span>
                <h2><?php echo $site['project_two_title']; ?></h2>
                <img src="<?php echo $theme_url; ?>/assets/img/bg3.jpg" alt="Herramientas de barberia para perfilado" loading="lazy">
                <p><?php echo $site['project_two_text']; ?></p>
            </div>
        </div>

        <div class="modal" id="modal3">
            <div class="modal-content">
                <span class="close" onclick="cerrarModal('modal3')">&times;</span>
                <h2><?php echo $site['project_three_title']; ?></h2>
                <img src="<?php echo $theme_url; ?>/assets/img/hot-towel.jpg" alt="Ritual de afeitado con toalla caliente" loading="lazy">
                <p><?php echo $site['project_three_text']; ?></p>
            </div>
        </div>
    </div>
</section>
