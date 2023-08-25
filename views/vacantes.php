<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="mw--1440">
        <header class="w--50 text-center">
            <h2 class="text--2xl text--dark-blue text-center">Nuestras vacantes</h2>
            <p class="text--grey">
                Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.
            </p>
        </header>
        <div class="vacantes--content w-100">
            <div class="vacantes--item w-100 d-flex justify-content-between">
                <p>Nombre de la vacante</p>
                <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light btn--darkBlue">
                    Ver vacante en LinkedIn
                </a>
            </div>
            <div class="vacantes--item w-100 d-flex justify-content-between">
                <p>Nombre de la vacante</p>
                <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light btn--darkBlue">
                    Ver vacante en LinkedIn
                </a>
            </div>
            <div class="vacantes--item w-100 d-flex justify-content-between">
                <p>Nombre de la vacante</p>
                <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light btn--darkBlue">
                    Ver vacante en LinkedIn
                </a>
            </div>
            <div class="vacantes--item w-100 d-flex justify-content-between">
                <p>Nombre de la vacante</p>
                <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light btn--darkBlue">
                    Ver vacante en LinkedIn
                </a>
            </div>
        </div>
    </section>

    <?php include 'components/contactoForm.php'; ?>
</main>
<?php include 'partials/footer.php'; ?>