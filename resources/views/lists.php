<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de productos</title>

    <link rel="stylesheet" href="./assets/css/app.css">
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <h1>Listado de productos</h1>
    
                <?php 
                foreach ($products as $product) {
                    echo "
                    <span class='fw-bold'>{$product->name}</span> - {$product->description} <br>
                    ";
                }
                ?>

                <hr>

                <div>
                    <a href="./pdf.php" class="btn btn-outline-primary">Exportar en PDF</a>
                </div>
            </div>
        </div>
    </div>

    <script src="./../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>