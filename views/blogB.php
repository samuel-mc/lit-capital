<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">
    <section class="mw--1440 p--container bg--dark-blue">
        <h2 class="text--2xl text--white">Blog</h2>
    </section>
    <section class="mw--1440 p-4">
        <div class="blog__content">
            <main class="blog__entries">
                <div class="blog__entry">
                    <img src="<?php echo __ROOT__; ?>/public/img/blog/imgPlaceholder.png" class="w-100">
                    <div>
                        <span class="blog__entry--cat">Categoría</span>
                        <h4 class="my-3 text--md text--dark-blue">Título</h4>
                        <p class="text--sm text--grey">
                            Lorem ipsum dolor sit amet consecte tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitolm.
                        </p>
                        <div class="w-100 d-flex justify-content-end">
                            <a href="#" class="a--dark-blue">
                                <span>Leer más</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog__entry">
                    <img src="<?php echo __ROOT__; ?>/public/img/blog/imgPlaceholder.png" class="w-100">
                    <div>
                        <span class="blog__entry--cat">Categoría</span>
                        <h4 class="my-3 text--md text--dark-blue">Título</h4>
                        <p class="text--sm text--grey">
                            Lorem ipsum dolor sit amet consecte tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitolm.
                        </p>
                        <div class="w-100 d-flex justify-content-end">
                            <a href="#" class="a--dark-blue">
                                <span>Leer más</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog__entry">
                    <img src="<?php echo __ROOT__; ?>/public/img/blog/imgPlaceholder.png" class="w-100">
                    <div>
                        <span class="blog__entry--cat">Categoría</span>
                        <h4 class="my-3 text--md text--dark-blue">Título</h4>
                        <p class="text--sm text--grey">
                            Lorem ipsum dolor sit amet consecte tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitolm.
                        </p>
                        <div class="w-100 d-flex justify-content-end">
                            <a href="#" class="a--dark-blue">
                                <span>Leer más</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog__entry">
                    <img src="<?php echo __ROOT__; ?>/public/img/blog/imgPlaceholder.png" class="w-100">
                    <div>
                        <span class="blog__entry--cat">Categoría</span>
                        <h4 class="my-3 text--md text--dark-blue">Título</h4>
                        <p class="text--sm text--grey">
                            Lorem ipsum dolor sit amet consecte tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitolm.
                        </p>
                        <div class="w-100 d-flex justify-content-end">
                            <a href="#" class="a--dark-blue">
                                <span>Leer más</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </main>
            <aside class="blog__sidebar">
                <div class="my-4">
                    <h3 class="mb-3">Lo más visto</h3>
                    <div class="blog--lmv">
                        <p class="text--grey">
                            Lorem ipsum dolor sit amet consecte tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitolm.
                        </p>
                        <img src="<?php echo __ROOT__; ?>/public/img/blog/imgPlaceholder.png" class="w-100">
                    </div>
                    <div class="blog--lmv">
                        <p class="text--grey">
                            Lorem ipsum dolor sit amet consecte tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitolm.
                        </p>
                        <img src="<?php echo __ROOT__; ?>/public/img/blog/imgPlaceholder.png" class="w-100">
                    </div>
                    <div class="blog--lmv">
                        <p class="text--grey">
                            Lorem ipsum dolor sit amet consecte tur adipiscing elit semper dalaracc lacus vel facilisis volutpat est velitolm.
                        </p>
                        <img src="<?php echo __ROOT__; ?>/public/img/blog/imgPlaceholder.png" class="w-100">
                    </div>
                </div>
                <div class="my-4">
                    <h3 class="mb-3">No te lo pierdas</h3>
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/1Cnpar6QzToE3O4GMpQ2bd?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                </div>
            </aside>
        </div>
    </section>
    <?php include 'components/contactoForm.php'; ?>
</main>
<?php include 'partials/footer.php'; ?>