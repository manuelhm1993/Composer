<?php

use MHenriquez\Models\Product;

use Dompdf\Dompdf;

require '../vendor/autoload.php';
require '../config/database.php';

// -------------- Activa el almacenamiento en el búfer
ob_start();

$products = Product::all();

// ---------------- Variables que especifican la ruta de los recursos
$css_path = './assets/css/app.css';
$js_path  = './assets/js/bootstrap.bundle.min.js';

// ---------------- Incluye esta vista en el búfer
include '../resources/views/lists.php';

// -------------- Crea una instancia de Dompdf
$dompdf = new Dompdf;

// -------------- Carga el documento en HTML y limpia el búfer
$dompdf->loadHtml(ob_get_clean());

// -------------- Configurar el tamaño de la hoja y la orientación
$dompdf->setPaper('A4', 'vertical');

// -------------- Renderiza el HTML como PDF
$dompdf->render();

// -------------- Devuelve el PDF generado en el navegador
$dompdf->stream();