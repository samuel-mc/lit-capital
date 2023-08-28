<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="">

    <section class="mw--1440">
        <div class="text-center container">
            <h2 class="font-weight-bold">Preguntas Frecuentes</h2>
            <p class="text--grey">
                Cras tincidunt lobortis feugiat vivamus at morbi leo urna molestie atole elementum eu facilisis faucibus interdum posuere.
            </p>
            <div class="d-flex flex-row gap--24 p-4 flex-wrap" id="btnGroupCats">
                <button class="btn btn-light" id="btnCat1" onclick="showCat('1')">CATEGORIA 1</button>
                <button class="btn btn-light" id="btnCat2" onclick="showCat('2')">CATEGORIA 2</button>
                <button class="btn btn-light" id="btnCat3" onclick="showCat('3')">CATEGORIA 3</button>
                <button class="btn btn-light" id="btnCat4" onclick="showCat('4')">CATEGORIA 4</button>
                <button class="btn btn-light" id="btnCat5" onclick="showCat('5')">CATEGORIA 5</button>
                <button class="btn btn-light" id="btnCat6" onclick="showCat('6')">CATEGORIA 6</button>
                <button class="btn btn-light" id="btnCat7" onclick="showCat('7')">CATEGORIA 7</button>
                <button class="btn btn-light" id="btnCat8" onclick="showCat('8')">CATEGORIA 8</button>
                <button class="btn btn-light" id="btnCat9" onclick="showCat('9')">CATEGORIA 9</button>
            </div>

        </div>

        <div id="accordion" class="container text--grey grid gap--24">
        </div>


    </section>
    <?php include 'components/oficinas.php'; ?>
    <?php include 'components/hombreNegocios.php'; ?>
    <?php include 'components/contactoForm.php'; ?>
</main>
<?php include 'partials/footer.php'; ?>

<script>
    preguntas = { 
        'Cat1': {
            'PREGUNTA 1': "Lorem ipsum dolor sit amet, consectetur adip1",
            'PREGUNTA 2': "Lorem ipsum dolor sit amet, consectetur adip2",
            'PREGUNTA 3': "Lorem ipsum dolor sit amet, consectetur adip3",
        },
        'Cat2': {
            'PREGUNTA 3': "Lorem ipsum dolor sit amet, consectetur adip1",
            'PREGUNTA 5': "Lorem ipsum dolor sit amet, consectetur adip3",
        },
        'Cat3': {
            'PREGUNTA 2': "Lorem ipsum dolor sit amet, consectetur adip2",
            'PREGUNTA 3': "Lorem ipsum dolor sit amet, consectetur adip3",
        },
        'Cat4': {
            'PREGUNTA 3': "Lorem ipsum dolor sit amet, consectetur adip1",
            'PREGUNTA 4': "Lorem ipsum dolor sit amet, consectetur adip2",
        },
        'Cat5': {
            'PREGUNTA 1': "Lorem ipsum dolor sit amet, consectetur adip1",
            'PREGUNTA 2': "Lorem ipsum dolor sit amet, consectetur adip2",
        },
        'Cat6': {
            'PREGUNTA 3': "Lorem ipsum dolor sit amet, consectetur adip1",
            'PREGUNTA 4': "Lorem ipsum dolor sit amet, consectetur adip2",
            'PREGUNTA 5': "Lorem ipsum dolor sit amet, consectetur adip3",
        },
        'Cat7': {
            'PREGUNTA 3': "Lorem ipsum dolor sit amet, consectetur adip1",
            'PREGUNTA 5': "Lorem ipsum dolor sit amet, consectetur adip3",
        },
        'Cat8': {
            'PREGUNTA 1': "Lorem ipsum dolor sit amet, consectetur adip1",
            'PREGUNTA 2': "Lorem ipsum dolor sit amet, consectetur adip2",
            'PREGUNTA 3': "Lorem ipsum dolor sit amet, consectetur adip3",
        },
        'Cat9': {
            'PREGUNTA 3': "Lorem ipsum dolor sit amet, consectetur adip1",
            'PREGUNTA 5': "Lorem ipsum dolor sit amet, consectetur adip3",
        }
    }
    var accordion = document.getElementById("accordion");

    function showCat(catName){
        document.getElementById("btnGroupCats").querySelectorAll("button").forEach(
            button => {
                button.className = ("btn btn-light");
            }
        );
        document.getElementById("btnCat"+catName).className = "btn btn--darkBlue";
        
        preguntasMostrar = preguntas['Cat'+catName];
        let i = 1;

        accordion.innerHTML = '';
        for (const pregunta in preguntasMostrar) {
            accordion.innerHTML  +=
            `<div class="card">
                <div class="card-header w-100 bg-white border-0" id="heading_${i}">
                    <div class="mb-0" data-toggle="collapse" data-target="#collapse_${i}" aria-expanded="true" aria-controls="collapse_${i}">
                        <i class="fa-solid fa-circle-xmark fa-xl float-left p-2 collapse" style="color: #152c44;"></i>
                        <i class="fa-solid fa-circle-plus fa-xl float-left p-2 collapse show" style="color: #DCDBDB;"></i>
                        <span class="text-dark">${pregunta}</span>
                    </div>
                </div>
                <div id="collapse_${i}" class="collapse text--gray" aria-labelledby="heading_${i}">
                    <div class="card-body">
                        ${preguntasMostrar[pregunta]}
                    </div>
                </div>
            </div>`
            i++;
        }
    }
    showCat('1');
</script>