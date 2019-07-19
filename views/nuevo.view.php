<?php require '../views/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../new/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../new/css/util.css">
    <link rel="stylesheet" type="text/css" href="../new/css/main.css">
    <!--===============================================================================================-->
</head>

<body>


    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <span class="contact100-form-title">
                    Nuevo Producto
                </span>
                <div class="wrap-input100 input100-select">
                    <div>
                        <span class="label-input100">Categoría</span>
                        <select class="selection-2" name="categoria">
                            <option selected disabled>Categoría de articulo</option>
                            <option value="ABRASIVOS">ABRASIVOS</option>
                            <option value="SIDERURGICA">SIDERURGICA</option>
                            <option value="ELECTRICIDAD">ELECTRICIDAD</option>
                            <option value="HERRAMIENTAS_MANUALES">HERRAMIENTAS MANUALES</option>
                            <option value="HERRERIA">HERRERÍA</option>
                            <option value="CERRADURA">CERRADURA</option>
                            <option value="JARDINERIA">JARDINERÍA</option>
                            <option value="PLOMERIA">PLOMERÍA</option>
                            <option value="INSUMOS">INSUMOS</option>
                        </select>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Nombre</span>
                    <input class="input100" type="text" name="nombre" placeholder="Nombre del Articulo" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">SKU del Articulo</span>
                    <input class="input100" type="text" name="sku" placeholder="SKU del Articulo" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <span class="label-input100">Descripcion del articulo</span>
                    <textarea class="input100" name="texto" placeholder="" required></textarea>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <span class="label-input100">Imagen del producto</span>
                    <input type="file" name="thumb" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn">
                            <span>
                                Crear Articulo
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>

            </form>
            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn-back"></div>
                    <a href="<?php echo RUTA ?>/admin/" class="contact100-form-btn-back">
                        <span>
                            <i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>
                            Volver a productos
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div id="dropDownSelect1"></div>



    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <script src="../new/js/main.js"></script>

</body>

</html>
