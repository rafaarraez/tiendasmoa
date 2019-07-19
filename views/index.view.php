<?php require 'views/header.php'; ?>

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($sliders as $slider) : ?>
                <?php if ($contDos == 0): ?>

                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $contDos; ?>" class="active"></li>
                    <?php $contDos = $contDos + 1; ?>

                <?php else : ?>

                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $contDos; ?>"></li>
                    <?php $contDos = $contDos + 1; ?>

                <?php endif; ?>
            <?php endforeach; ?>
        </ol>
        
        <div class="carousel-inner" role="listbox">
            <?php foreach ($sliders as $slider) : ?>
                <?php if ($cont == 0): ?>
                    <div class="carousel-item active" style="background-image: url('<?php echo RUTA; ?>/src/sliders/<?php echo $slider['slider_thumb']; ?>')">

                    </div>

                    <?php $cont = $cont + 1; ?>
                <?php else : ?>
                    <div class="carousel-item" style="background-image: url('<?php echo RUTA; ?>/src/sliders/<?php echo $slider['slider_thumb']; ?>')">

                    </div>
                    <?php $cont = $cont + 1; ?>
                <?php endif; ?>

            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<section class="section-padding-productos">
    <div class="col-12">
        <div class="section-title-header">
            <h1 class="section-title">NUESTROS PRODUCTOS</h1>
        </div>
    </div>

    <center>
        <div class="container">

            <div class="row mar">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 row">
                     <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products">
                            <a href="productos.php?producto_cat=ABRASIVOS">abrasivos</a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products">
                            <a href="productos.php?producto_cat=SIDERURGICA">siderurgica</a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products">
                            <a href="productos.php?producto_cat=ELECTRICIDAD">electricidad</a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products">
                            <a href="productos.php?producto_cat=HERRAMIENTAS_MANUALES">herramientas manuales</a>
                        </div>
                    </div>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 arriba row">
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products">
                            <a href="productos.php?producto_cat=HERRERIA">herrería</a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products">
                            <a href="productos.php?producto_cat=CERRADURA">cerradura</a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products">
                            <a href="productos.php?producto_cat=JARDINERIA">jardineria</a>
                        </div>
                    </div>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 arriba row">
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products-less">
                            <a href="productos.php?producto_cat=PLOMERIA">plomería</a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-3 ">
                        <div class="products-less">
                            <a href="productos.php?producto_cat=INSUMOS">insumos</a>
                        </div>
                    </div>

                </div>

            </div>
            <img src="src/img/Artboard 11ldpi.svg" class="pro" alt="">
        </div>
    </center>


</section>


<img src="src/273458450_1.jpg" class="img-responsive " alt="" srcset="">

<section class="section-padding">
    <div class="col-12">
        <div class="section-title-header">
            <h1 class="section-title" style="color: #c55c2f;">NUESTRAS REDES <br /> SOCIALES </h1>
        </div>
    </div>

    <center>
        <div class="container">

            <div class="row mar">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xs-6 ">
                        <h1 class="rrss">Facebook</h1>
                        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-88073d80-9f52-4f7b-8c70-7df9a3245c1e"></div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xs-6 ">
                        <h1 class="rrss">Instagram</h1>

                        <div class="feed">
                            <div id="instagram-feed1"></div>
                        </div>
                        
                        <script async src="//www.instagram.com/embed.js"></script>
                    </div>

                </div>

            </div>
        </div>
    </center>


</section>


<?php require 'views/footer.php'; ?>