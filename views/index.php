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
                <p class="text-sm my-5">
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
                <p class="text-sm my-5">
                    Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.
                </p>
                <div class="d-flex flex-wrap">
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light py-3 px-4">
                        Conoce más
                    </a>
                    <a href="<?php echo __ROOT__; ?>/contacto" class="a--white py-3 px-4">
                        Habla con un asesor <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="mw--1440 bg--medium-blue p-4" id="calculadora">
        <h2 class="text--2xl text--white text-center">Nuestra calculadora</h2>
    </section>

    <section class="mw--1440 p-4" id="lineaTiempo">
        <h2 class="text--2xl text-center">Línea del tiempo</h2>
        <div id="lineaTiempo" class="carousel carousel-dark slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <a class="carousel-control-prev" style="background-color: #DBDBDB;" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <li data-target="#carouselExampleIndicators" data-slide-to="0" style="background-color: #DBDBDB;" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" style="background-color: #DBDBDB;" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" style="background-color: #DBDBDB;"></li>
                <a class="carousel-control-next" style="background-color: #DBDBDB;"  href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="grid--2cols p--container">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/2010.png" class="w-75 mw-400">
                        <p>2010Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="grid--2cols p--container">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/2010.png" class="w-75 mw-400">
                        <p>2020Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="grid--2cols p--container">
                        <img src="<?php echo __ROOT__; ?>/public/img/home/2010.png" class="w-75 mw-400">
                        <p>2023Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mw--1440 position-relative">
        <img src="<?php echo __ROOT__; ?>/public/img/home/hombreNegocios.png" class="w-100">
        <div class="position-absolute" style="top: 10%; left: 60%; transform: translateX(-10%);">
            <h2 class="text--white text--2xl ">Ponte en contacto con uno  de nuestros asesores</h2>
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light py-3 px-4">
                Ponerme en contacto <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </section>



    <section class="mw--1440 p-5 ">
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/1Cnpar6QzToE3O4GMpQ2bd?utm_source=generator&theme=0" width="100%" height="320" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
    </section>

    <section class="mw--1440 p--container">
        <h2 class="text--2xl text-center">Oficinas</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21112.7437802874!2d-103.39985272652096!3d20.700432983801974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af02a12f0407%3A0x3528adfe5a1062e6!2sLIT%20Investment%20Center!5e0!3m2!1ses-419!2smx!4v1692991209907!5m2!1ses-419!2smx" style="border:0; height:520px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>
        <div class="grid--5cols text--grey">
            <div class="p-4">
                <h2 class="text-center text-dark">Guadalajara</h2>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <spam>contacto@lit.com</spam>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <spam>(123) 456 - 789</spam>
                </div>
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <spam>1334 calle, colonia, ciudad, país</spam>
                </div>
                <div class="text-center">
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light btn--darkBlue">
                        Ver en el mapa
                    </a>
                </div>
            </div>
            <div class="p-4">
                <h2 class="text-center text-dark">CDMX</h2>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <spam>contacto@lit.com</spam>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <spam>(123) 456 - 789</spam>
                </div>
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <spam>1334 calle, colonia, ciudad, país</spam>
                </div>
                <div class="text-center">
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light btn--darkBlue">
                        Ver en el mapa
                    </a>
                </div>
            </div>
            <div class="p-4">
                <h2 class="text-center text-dark">Mérida</h2>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <spam>contacto@lit.com</spam>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <spam>(123) 456 - 789</spam>
                </div>
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <spam>1334 calle, colonia, ciudad, país</spam>
                </div>
                <div class="text-center">
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light btn--darkBlue">
                        Ver en el mapa
                    </a>
                </div>
            </div>
            <div class="p-4">
                <h2 class="text-center text-dark">Quéretaro</h2>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <spam>contacto@lit.com</spam>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <spam>(123) 456 - 789</spam>
                </div>
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <spam>1334 calle, colonia, ciudad, país</spam>
                </div>
                <div class="text-center">
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light btn--darkBlue">
                        Ver en el mapa
                    </a>
                </div>
            </div>
            <div class="p-4">
                <h2 class="text-center text-dark">Mexicalli</h2>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <spam>contacto@lit.com</spam>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <spam>(123) 456 - 789</spam>
                </div>
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <spam>1334 calle, colonia, ciudad, país</spam>
                </div>
                <div class="text-center">
                    <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light btn--darkBlue">
                        Ver en el mapa
                    </a>
                </div>
            </div>
        </div>
    </section>


    <?php include 'components/contactoForm.php'; ?>

</main>
<?php include 'partials/footer.php'; ?>