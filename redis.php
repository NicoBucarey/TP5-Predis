<?php

// Cargamos las dependencias
require 'vendor/autoload.php';

// Creamos una nueva conexión a Redis
$client = new Predis\Client(
//     [
//     'scheme' => 'tcp',
//     'host'   => 'redis-18270.c279.us-central1-1.gce.redns.redis-cloud.com',  // Host de Redis Labs
//     'port'   => 18270,  // Puerto de Redis Labs
//     'password' => '7fYwk39pUdlB4WcWRbHrMqgNqy1Cpx0j',  // Contraseña de Redis Labs
// ]
);

