<?php

use MHenriquez\Models\Product;

// ---------------- Carga todas las clases, paquetes y componentes en vendor
require '../vendor/autoload.php';

// ---------------- Archivo de configuración de la BBDD
require '../config/database.php';

// ---------------- Obtener los productos de la BBDD
$products = Product::all();

// ---------------- Incluir la vista lists
include '../resources/views/lists.php';