<?php require 'views/header.php'; ?>

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($sliders as $slider) : ?>
                <?php if ($contDos == 0) : ?>

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
                <?php if ($cont == 0) : ?>
                    <div class="carousel-item active" style="background-image: url('<?php echo RUTA; ?>/src/sliders/<?php echo $slider['slider_thumb']; ?>');">

                    </div>

                    <?php $cont = $cont + 1; ?>
                <?php else : ?>
                    <div class="carousel-item" style="background-image: url('<?php echo RUTA; ?>/src/sliders/<?php echo $slider['slider_thumb']; ?>');">

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

<section id="nosotros" class="section-padding">
    <div class="col-12">
        <div class="section-title-header">
            <h1 class="section-title">Sobre <br />Nosotros</h1>
        </div>
    </div>

    <center>
        <div class="container">

            <div class="row mar">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4 ">
                        <div class="text">
                            <h3>MISIÓN</h3>
                            <p>
                                Ofrecer a nuestros clientes un producto de calidad
                                que satisfaga sus requerimientos, comprometidos
                                con la excelencia y el mejoramiento continuo,
                                siempre orientados a brindar soluciones y
                                establecer una relación de confianza a través de la
                                eficacia y atención de primera que n os permita
                                generar y mantener clientes 100% satisfechos.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4 ">
                        <div class="text">
                            <h3>VISIÓN</h3>
                            <p>
                                Ser la empresa reconocida como líder en el servicio
                                de latonería y pintura por parte de nuestros
                                clientes, proveedores, personal y todas nuestras
                                relaciones
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4 ">
                        <div class="text">
                            <h3>VALORES</h3>
                            <p>
                                Ética profesional, confianza, amabilidad, pasión.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </center>


</section>


<div id="parallax">
    <div class="section-titlee text-center center">
        <div class="overlay">

        </div>
    </div>
</div>

<section id="servicios" class="section-padding">
    <div class="col-12">
        <div class="section-title-header">
            <h1 class="section-title">Nuestros <br />Servicios</h1>
        </div>
    </div>

    <center>
        <div class="container">

            <div class="row mar">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4 ">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./src/img/svg1.svg" alt="Avatar">
                                    <p>LATONERIA</p>
                                    <button class="btn btn-primary">Leer más</button>
                                </div>
                                <div class="flip-card-back">
                                    <p>Lorem ipsun</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./src/img/svg2.svg" alt="Avatar">
                                    <p>PINTURA AUTOMOTRIZ</p>
                                    <button class="btn btn-primary">Leer más</button>
                                </div>
                                <div class="flip-card-back">
                                    <p>Lorem ipsun</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4 ">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="./src/img/svg3.svg" alt="Avatar">
                                    <p>PULITURA GENERAL</p>
                                    <button class="btn btn-primary">Leer más</button>
                                </div>
                                <div class="flip-card-back">
                                    <p>Lorem ipsun</p>
                                    <button class="btn btn-primary">Leer más</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </center>


</section>


<section id="ubicanos" class="section-padding">
    <div class="col-12">
        <div class="section-title-header">
            <h1 class="section-title">Ubícanos</h1>
        </div>
    </div>


    <div class="map container">
        <img class="ratio-img" src="http://placehold.it/16x9" alt="16:9 Image" />
        <iframe src="https://maps.google.com/maps?q=gandocam&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

    </div>

</section>


<div id="parallax2">
    <div class="section-titlee text-center center">
        <div class="overlay">

        </div>
    </div>
</div>


<?php require 'views/footer.php'; ?>