<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">

    <section class="mw--1440">
        <div class="text-center container">
            <h2 class="font-weight-bold">Preguntas Frecuentes</h2>
            <p class="text--grey">
                Cras tincidunt lobortis feugiat vivamus at morbi leo urna molestie atole elementum eu facilisis faucibus interdum posuere.
            </p>
            <div class="d-flex flex-row gap--24 p-4 flex-wrap">
                <button class="btn btn--darkBlue">CATEGORIA</button>
                <button class="btn btn-light">CATEGORIA</button>
                <button class="btn btn-light">CATEGORIA</button>
                <button class="btn btn-light">CATEGORIA</button>
                <button class="btn btn-light">CATEGORIA</button>
                <button class="btn btn-light">CATEGORIA</button>
                <button class="btn btn-light">CATEGORIA</button>
                <button class="btn btn-light">CATEGORIA</button>
                <button class="btn btn-light">CATEGORIA</button>
            </div>

        </div>

        <div id="accordion" class="container text--grey grid gap--24">
            <div class="card">
                <div class="card-header w-100 bg-white border-0" id="headingOne">
                    <div class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="fa-solid fa-circle-xmark fa-xl float-left p-2 collapse show" style="color: #152c44;" id="collapseOne"></i>
                        <i class="fa-solid fa-circle-plus fa-xl float-left p-2 collapse" style="color: #DCDBDB;" id="collapseOne"></i>
                        <spam class="text-dark">PREGUNTA</spam>
                    </div>
                </div>

                <div id="collapseOne" class="collapse show text--gray" aria-labelledby="headingOne">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas orci netus feugiat ut egestas ut sagittis tincidunt phasellus elit etiam cursus orci in. Id sed montes. 
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header w-100 bg-white border-0" id="headingTwo">
                    <div class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fa-solid fa-circle-xmark fa-xl float-left p-2 collapse" style="color: #152c44;" id="collapseTwo"></i>
                        <i class="fa-solid fa-circle-plus fa-xl float-left p-2 collapse show" style="color: #DCDBDB;" id="collapseTwo"></i>
                        <spam class="text-dark">PREGUNTA</spam>
                    </div>
                </div>

                <div id="collapseTwo" class="collapse text--gray" aria-labelledby="headingTwo">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas orci netus feugiat ut egestas ut sagittis tincidunt phasellus elit etiam cursus orci in. Id sed montes. 
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header w-100 bg-white border-0" id="headingThree">
                    <div class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <i class="fa-solid fa-circle-xmark fa-xl float-left p-2 collapse" style="color: #152c44;" id="collapseThree"></i>
                        <i class="fa-solid fa-circle-plus fa-xl float-left p-2 collapse show" style="color: #DCDBDB;" id="collapseThree"></i>
                        <spam class="text-dark">PREGUNTA</spam>
                    </div>
                </div>

                <div id="collapseThree" class="collapse text--gray" aria-labelledby="headingThree">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas orci netus feugiat ut egestas ut sagittis tincidunt phasellus elit etiam cursus orci in. Id sed montes. 
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header w-100 bg-white border-0" id="headingFour">
                    <div class="mb-0" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        <i class="fa-solid fa-circle-xmark fa-xl float-left p-2 collapse" style="color: #152c44;" id="collapseFour"></i>
                        <i class="fa-solid fa-circle-plus fa-xl float-left p-2 collapse show" style="color: #DCDBDB;" id="collapseFour"></i>
                        <spam class="text-dark">PREGUNTA</spam>
                    </div>
                </div>

                <div id="collapseFour" class="collapse text--gray" aria-labelledby="headingFour">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas orci netus feugiat ut egestas ut sagittis tincidunt phasellus elit etiam cursus orci in. Id sed montes. 
                    </div>
                </div>
            </div>
        </div>


    </section>
    <?php include 'components/oficinas.php'; ?>
    <?php include 'components/hombreNegocios.php'; ?>
    <?php include 'components/contactoForm.php'; ?>
</main>
<?php include 'partials/footer.php'; ?>