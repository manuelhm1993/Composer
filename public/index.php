<?php

use MHenriquez\Models\Product;

// ---------------- Carga todas las clases, paquetes y componentes en vendor
require_once '../vendor/autoload.php';

// ---------------- Archivo de configuración de la BBDD
require_once '../config/database.php';

// ---------------- Obtener los productos de la BBDD
$products = Product::all();

// ---------------- Variables que especifican la ruta de los recursos
$css_path = './assets/css/app.css';
$js_path  = './assets/js/bootstrap.bundle.min.js';

// ---------------- Incluir la vista lists
include_once '../resources/views/lists.php';