<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="mw--1440 position-relative">
        <img src="<?php echo __ROOT__; ?>/public/img/home/heroImg.png" class="w-100">
        <div class="position-absolute" style="bottom: 24px; left: 50%; transform: translateX(-50%);">
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light py-3 px-4">
                Quiero ser LIT <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </section>
    <section class="mw--1440 bg--light-blue p--container">
        <div class="grid--2cols align-items-center gap--24">
            <div class="text--white">
                <h2 class="text--2xl">Quienes somos</h2>
                <p class="text-sm my-3">
                    Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.
                </p>
                <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light py-3 px-4">
                    Conoce más
                </a>
            </div>
            <div class="text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/home/qSomos.png" class="w-75 mw-400">
            </div>
        </div>
    </section>
    <section class="mw--1440 bg--dark-blue p--container">
        <div class="grid--2cols align-items-center gap--24">
            <div class="text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/home/nSoluciones.png" class="w-75 mw-400">
            </div>
            <div class="text--white">
                <h2 class="text--2xl">Nuestras soluciones</h2>
                <p class="text-sm my-3">
                    Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.
                </p>
                <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light py-3 px-4">
                    Conoce más
                </a>
                <a href="<?php echo __ROOT__; ?>/contacto" class="a--white py-3 px-4">
                    Habla con un asesor <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <section class="mw--1440 bg--medium-blue p-4">
        <h2 class="text--2xl text--white text-center">Nuestra calculadora</h2>

    </section>
</main>
<?php include 'partials/footer.php'; ?>