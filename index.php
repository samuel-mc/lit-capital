<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/lit_capital");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Inicio'));
});

Flight::route('/about', function () {
    Flight::render('about.php', array('title' => '¿Quiénes somos?'));
});

Flight::route('/soluciones', function () {
    Flight::render('soluciones.php', array('title' => 'Nuestras soluciones'));
});

Flight::route('/faq', function () {
    Flight::render('faq.php', array('title' => 'Preguntas frecuentes'));
});

Flight::route('/blog', function () {
    Flight::render('blog.php', array('title' => 'Blog'));
});

Flight::route('/blogB', function () {
    Flight::render('blogB.php', array('title' => 'Blog'));
});

Flight::route('/contacto', function () {
    Flight::render('contacto.php', array('title' => 'Contacto'));
});

Flight::route('/vacantes', function () {
    Flight::render('vacantes.php', array('title' => 'Vacantes'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
