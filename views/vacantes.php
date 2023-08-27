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

    <section class="w--50 px-4 py-5">
        <div class="text-center mb-5">
            <h2 class="text--2xl text--dark-blue mb-2">¡Compártenos tu perfil!</h2>
        </div>

        <form id="formulario" class="text-left p-4 rounded-lg grid gap--24">
            <div class="grid--2cols">
                <div class="input--group">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" type="text" class="rounded-sm border-0 p-2 w-100" placeholder="Nombre">
                </div>
                <div class="input--group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="rounded-sm border-0 p-2 w-100" placeholder="correo@email.com">
                </div>
            </div>
            <div class="grid--2cols">
                <div class="input--group">
                    <label for="telefono">Télefono</label>
                    <input id="telefono" type="text" class="rounded-sm border-0 p-2 w-100" placeholder="(123) 456 - 789">
                </div>
                <div class="input--group">
                    <label for="oficina">Oficina de preferecia</label>
                    <select id="oficina" class="rounded-sm border-0 p-2 w-100 bg--white-input">
                        <option selected>Nombre de oficina</option>
                        <option value="US">Guadalajara</option>
                        <option value="CA">CDMX</option>
                        <option value="FR">Querétaro</option>
                        <option value="DE">Mérida</option>
                    </select>
                </div>
            </div>
            <div class="input--group">
                <input type="text" class="rounded-sm border-0 p-2 w-100" placeholder="Rázon social">
            </div>
            <div class="input--group">
                <label for="mensaje">Mensaje</label>
                <textarea class="form-control p-2 w-100" id="mensaje" rows="4" placeholder="Escribe una breve descripción"></textarea>
            </div>
            <div class="grid--2cols">
                <a href="#" class="btn btn--darkBlue px-5 py-3 m-2 font-weight-bold">Enviar mensaje</a>
                <ul class="d-flex list--unstyled align-items-center justify-content-end p-2">
                    <li class="mr-3"><a target="_blank" href=""><i class="fa-brands fa-square-facebook fa-2xl" style="color:#8D8BA7;"></i></i></a></li>
                    <li class="mr-3"><a target="_blank" href="" class="fa-brands fa-instagram fa-2xl" style="color:#8D8BA7;"></i></a></li>
                    <li class="mr-3"><a target="_blank" href=""><i class="fa-brands fa-twitter fa-2xl" style="color:#8D8BA7;"></i></a></li>
                    <li class="mr-3"><a target="_blank" href=""><i class="fa-brands fa-linkedin fa-2xl" style="color:#8D8BA7;"></i></a></li>
                </ul>
            </div>
        </form>

    </section>

    <?php include 'components/oficinas.php'; ?>
    <?php include 'components/mujerNegocios.php'; ?>
    <?php include 'components/contactoForm.php'; ?>
</main>
<?php include 'partials/footer.php'; ?>