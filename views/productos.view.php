<?php require 'views/header.php'; ?>

<img src="src/273458450_1.jpg" class="img-responsive " alt="" srcset="">


<section class="section-padding-productos">

    <center>
        <div class="container">

            <div class="row mar">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 row">
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products-less">
                            <a href="productos.php?producto_cat=ABRASIVOS">abrasivos</a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products-less">
                            <a href="productos.php?producto_cat=SIDERURGICA">siderurgica</a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products-less">
                            <a href="productos.php?producto_cat=ELECTRICIDAD">electricidad</a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products-less">
                            <a href="productos.php?producto_cat=HERRAMIENTAS_MANUALES">herramientas manuales</a>
                        </div>
                    </div>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 arriba row">
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products-less">
                            <a href="productos.php?producto_cat=HERRERIA">herrería</a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products-less">
                            <a href="productos.php?producto_cat=CERRADURA">cerradura</a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products-less">
                            <a href="productos.php?producto_cat=JARDINERIA">jardineria</a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products-less">
                            <a href="productos.php?producto_cat=PLOMERIA">plomería</a>
                        </div>
                    </div>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 arriba row">

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products-less">
                            <a href="productos.php?producto_cat=INSUMOS">insumos</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </center>


</section>

<section class="section-padding">

  <center>
    <div class="container">
      <div class="row">
        

      <?php foreach ($products as $product) : ?>
          <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
            <div class="card-producto">
              <a href="#" data-toggle="modal" data-target=".bd-example-modal-xl-<?php echo $product['producto_id'] ?>">
                <div class="card-thumb">
                  <img src="<?php echo RUTA; ?>/src/productos/<?php echo $product['producto_thumb']; ?>" alt="<?php echo $product['producto_nombre'] ?>">
                </div>
                <div class="btn-modal">
                  <p><?php echo $product['producto_nombre'] ?></p>
                </div>
              </a>
            </div>
          </div>

          <div class="modal fade bd-example-modal-xl-<?php echo $product['producto_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="container">
                  <div class="row">
                    <div class="col-12 row section-padding-us">
                      <div class="col-md-6 col-lg-6 col-xs-12">
                        <div class="card-producto">
                          <img src="<?php echo RUTA; ?>/src/productos/<?php echo $product['producto_thumb']; ?>" alt="<?php echo $product['producto_nombre'] ?>">
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6 col-xs-12">
                        <div class="container caja-de-modal">
                          <h1><?php echo $product['producto_nombre'] ?></h1>
                          <h6>CODIGO DE PRODUCTO</h6>
                          <p><?php echo $product['producto_sku'] ?></p>
                          <h6>DESCRIPCIÓN DE PRODUCTO</h6>
                          <p><?php echo $product['producto_descripcion'] ?></p>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
    <?php require 'paginacion.php'; ?>
  </center>

  <!-- <div class="col-12">
    <div class="section-title-header text-center">
      <a href="javascript:;" id="cambia" class="btn btn-common btn-mas" onclick="FbotonOn(this)">MOSTRAR MÁS</a>
    </div>
  </div> -->

</section>


<?php require 'views/footer.php'; ?>