<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
#define('__ROOT__', "http://localhost/lit_capital");
define('__ROOT__', "http://localhost:5000/Trabajo/Freelancer/Samuel/lit-capital");

Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Inicio', 'nav' => 'white'));
});

Flight::route('/about', function () {
    Flight::render('about.php', array('title' => '¿Quiénes somos?', 'nav' => 'dark-blue'));
});
Flight::route('/aboutB', function () {
    Flight::render('about.php', array('title' => '¿Quiénes somos? B', 'nav' => 'dark-blue'));
});

Flight::route('/soluciones', function () {
    Flight::render('soluciones.php', array('title' => 'Nuestras soluciones', 'nav' => 'dark-blue'));
});

Flight::route('/faq', function () {
    Flight::render('faq.php', array('title' => 'Preguntas frecuentes', 'nav' => 'dark-blue'));
});

Flight::route('/blog', function () {
    Flight::render('blog.php', array('title' => 'Blog', 'nav' => 'dark-blue'));
});

Flight::route('/blogB', function () {
    Flight::render('blogB.php', array('title' => 'Blog', 'nav' => 'dark-blue'));
});

Flight::route('/contacto', function () {
    Flight::render('contacto.php', array('title' => 'Contacto', 'nav' => 'dark-blue'));
});

Flight::route('/vacantes', function () {
    Flight::render('vacantes.php', array('title' => 'Vacantes', 'nav' => 'dark-blue'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
