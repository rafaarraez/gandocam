<?php require '../views/header.php'; ?>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h1 class="section-title" style="color: black; font-weight: bolder;">Seccion de Administrador</h1>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-padding">
    <center>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-success" href="<?php echo RUTA ?>/admin/nuevo_slider.php">NUEVO SLIDER</a>
                    <a class="btn btn-danger" href="<?php echo RUTA ?>/admin/cerrar.php">Cerrar Sesion</a>
                </div>
                <hr>


                <?php foreach ($sliders as $slider) : ?>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6 ">
                        <div class="card-producto">
                            <div class="card-thumb">
                                <img src="<?php echo RUTA; ?>/src/sliders/<?php echo $slider['slider_thumb']; ?>" alt="slider <?php echo $slider['slider_id'] ?>">
                            </div>
                            <div class="btn-modal">
                                <a style="color:#fff;" href="#" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-danger">Eliminar</a>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 row section-padding-us">
                                            <div class="col-md-6 col-lg-6 col-xs-12">
                                                <div class="card-producto">
                                                    <img src="<?php echo RUTA; ?>/src/sliders/<?php echo $slider['slider_thumb']; ?>" alt="slider <?php echo $slider['slider_id'];?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-12">
                                                <div class="container caja-de-modal">
                                                    <h6>¿Desea eliminar este Slider?</h6>
                                                    <br>
                                                    <a style="color:#fff;" class="btn btn-danger" href="delete_slider.php?slider_id=<?php echo $slider['slider_id']; ?>">Eliminar arituculo</a>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <a style="color:#fff;" class="btn btn-success" data-dismiss="modal">Salir</a>
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
    </center>

</section>





<?php require '../views/footer.php'; ?>