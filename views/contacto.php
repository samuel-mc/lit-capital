<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="mw--1440 bg--dark-blue px-4 py-5">
        <div class="grid--2cols align-items-center gap--24">
            <div class="text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/contacto/hero.png" class="w-75 mw--280">
            </div>
            <div class="text--white">
                <h2 class="text--2xl">Contacto</h2>
                <p class="text--sm text--grey my-4">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit nulla interdum tellus du.
                </p>
                <ul class="list--unstyled">
                    <li class="mb-3">
                        <a href="mailto:contacto@lit.com" class="a--grey">
                            <i class="fa-solid fa-envelope"></i> <span>contacto@lit.com</span>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="tel:+525555555555" class="a--grey">
                            <i class="fa-solid fa-phone"></i> <span>(123) 456 - 789</span>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="https://goo.gl/maps/1q2w3e4r5t6y7u8i9o" class="a--grey">
                            <i class="fa-solid fa-map-marker"></i> <span>Av. Lorem ipsum dolor sit amet consectetur nulla interdum tellus du.</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="w--50 px-4 py-5">
        <div class="text-center mb-5">
            <h2 class="text--2xl text--dark-blue mb-2">Ponte en contacto ahora</h2>
            <p class="text--grey">Lorem ipsum dolor sit amet consectetur adipiscing elit nulla adipiscing tincidunt interdum tellus du.</p>
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
                    <label for="asunto">Asunto</label>
                    <input id="asunto" type="text" class="rounded-sm border-0 p-2 w-100" placeholder="Asunto">
                </div>
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
</main>
<?php include 'partials/footer.php'; ?>