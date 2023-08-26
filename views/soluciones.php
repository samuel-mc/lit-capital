<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="mw--1440 bg-white p-4">
        <h2 class="text--2xl text-center mb-2">LIT Adviser</h2>
        <div class="grid--2cols align-items-center gap--24">
            <div class="text--dark-blue">
                <p class="text-sm my-5 w--50">
                    Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.
                </p>
            </div>
            <div class="text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/home/nSoluciones.png" class="w-75 mw--280">
            </div>
        </div>
    </section>
    <section class="mw--1440 bg--dark-blue p--container">
        <div class="grid--2cols align-items-center gap--24">
            <div class="text--white">
                <h2 class="text--2xl">QTS</h2>
                <p class="text-sm my-5">
                    Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.
                </p>
                <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light py-3 px-4">
                    Descargar recursos
                </a>
            </div>
            <div class="text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/soluciones/QTS.png" class="w-75 mw--280">
            </div>
        </div>
    </section>
    <section class="mw--1440 bg--light-blue p--container">
        <div class="grid--2cols align-items-center gap--24">
            <div class="text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/soluciones/bRaices.png" class="w-75 mw--280">
            </div>
            <div class="text--white">
                <h2 class="text--2xl">Bienes Raíces</h2>
                <p class="text-sm my-5">
                    Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.
                </p>
            </div>
        </div>
    </section>
    <section class="mw--1440 bg--medium-blue p--container">
        <div class="grid--2cols align-items-center gap--24">
            <div class="text--white">
                <h2 class="text--2xl">SPACS</h2>
                <p class="text-sm my-5">
                    Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.
                </p>
            </div>
            <div class="text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/soluciones/spacs.png" class="w-75 mw--280">
            </div>
        </div>
    </section>
    <section class="mw--1440 bg--dark-blue p--container">
        <div class="grid--2cols align-items-center gap--24">
            <div class="text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/soluciones/fondos.png" class="w-75 mw--280">
            </div>
            <div class="text--white">
                <h2 class="text--2xl">FONDOS PASADOS</h2>
                <p class="text-sm my-5">
                    Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.
                </p>
            </div>
        </div>
    </section>
    
    <?php include 'components/mujerNegocios.php'; ?>
    <?php include 'components/contactoForm.php'; ?>
</main>
<?php include 'partials/footer.php'; ?>