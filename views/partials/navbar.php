<header class="d-none d-lg-block position-absolute top-0 w-100" style="z-index: 1";>
    <div class="d-flex justify-content-between mw--1440 py-4 px-5">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="img--logo">
        <nav class="my-auto px-2">
            <ul class="list--unstyled d-flex align-items-center justify-content-center flex-wrap">
                <li class="mx-2 my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Home</a>
                </li>
                <li class="mx-2 my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Quienes somos</a>
                </li>
                <li class="mx-2 my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Nuestras soluciones</a>
                </li>
                <li class="mx-2 my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Calculadora</a>
                </li>
                <li class="mx-2 my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Faq</a>
                </li>
                <li class="mx-2 my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Vacantes</a>
                </li>
                <li class="mx-2 my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Blog</a>
                </li>
                <li class="mx-2 my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Real estate</a>
                </li>
            </ul>
        </nav>

        <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light">
            Ponte en contacto
        </a>
    </div>
</header>

<header class="bg--dark-blue px-4 py-2 d-lg-none">
    <div class="d-flex justify-content-between">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="img--logo m-0 my-auto">
        <button class="btn btn-light text-2xl" onclick="toggleShowMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>
<nav class="notShowed position-fixed h-100 w-100 bg--dark-blue" id="mobileMenu" style="top: 0; z-index: 2;">
    <div class="d-flex flex-column justify-between px-4">
        <div class="d-flex justify-content-between py-2">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="img--logo m-0 my-auto">
            <button class="btn btn-light text-2xl" onclick="toggleShowMenu()">
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
        <div>
            <ul class="list--unstyled d-flex flex-column py-5">
                <li class="my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Home</a>
                </li>
                <li class="my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Quienes somos</a>
                </li>
                <li class="my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Nuestras soluciones</a>
                </li>
                <li class="my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Calculadora</a>
                </li>
                <li class="my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Faq</a>
                </li>
                <li class="my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Vacantes</a>
                </li>
                <li class="my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Blog</a>
                </li>
                <li class="my-2">
                    <a class="a--white" href="<?php echo __ROOT__; ?>">Real estate</a>
                </li>
            </ul>
        </div>

        <div class="flex flex-wrap">
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-light">
                Ponte en contacto
            </a>
        </div>

    </div>
</nav>