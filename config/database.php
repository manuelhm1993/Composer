<?php

// ---------------- Manejador de conexiones a BBDD de laravel
use Illuminate\Database\Capsule\Manager as Capsule;

// ---------------- Objeto de conexión
$capsule = new Capsule;

// ---------------- Recibe un array con los datos de conexión
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursos_php_composer',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix'    => '',
]);

// ---------------- Ejecutar la conexión
$capsule->bootEloquent();
