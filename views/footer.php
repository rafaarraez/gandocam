    <!-- contact -->
    <section id="contact">
        <div class="col-xs-12 col-sm-8 col-md-8">
            <div class="section-title-header">
                <div class="section-title">
                    <h2>CONTÁCTANOS</h2>
                    <P>Dirección: AVENIDA NORTE SUR 70, SAN DIEGO 2006, CARABOBO</P>
                    <p>TELÉFONO: 0241-8718167</p>
                </div>
            </div>
        </div>

        </hr>

        <div class="container">
            <div class="row">
            </div>
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-10 col-md-10">
                    <form class="gform pure-form pure-form-stacked" method="POST" action="">
                        <!-- change the form action to your script url -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12 form-line">
                                    <div class="form-group">
                                        <label for="name">Nombres y Apellidos:</label>
                                        <input type="text" class="form-control form-control-name" id="name" name="Nombres y Apellidos:" placeholder=" Ingrese sus nombres. " pattern="[A-Za-zÑñ ]+" required data-error="Por favor ingrese su nombre">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 form-line">
                                    <div class="form-group">
                                        <label for="email">Correo electrónico:</label>
                                        <input type="email" class="form-control" id="email" name="Correo" placeholder="Ingrese su correo electrónico." required data-error="Por favor ingrese su E-mail">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12 form-line">
                                    <div class="form-group">
                                        <label for="apellidos">Telefono:</label>
                                        <input type="apellidos" class="form-control" id="apellidos" name="Telefono" placeholder="Ingrese su numero de telefono." required data-error="Por favor ingrese su E-mail">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="message">Escriba su consulta:</label>
                                    <textarea class="form-control" rows="4" id="message" name="Mensaje" required data-error="Por favor ingresa un mensaje"></textarea>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="btn btn-common btn-form" id="form-submit">ENVIAR</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Customise the Thankyou Message People See when they submit the form: -->
                        <div class="thankyou_message" style="display:none;
                        align-items: center;
                        text-align: center;
                        padding: 5% 0%;
                        line-height: 35px;
                        font-weight: bold;
                        border-radius: 2rem;
                        background: #e9e9e9;
                        font-size: 2rem;
                        text-decoration: underline;">
                            ¡Mensaje enviado!. Estaremos contactandolo lo antes posible.
                        </div>
                    </form>

                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 text-center zogan">
                    <img src="<?php echo RUTA; ?>/src/img/zogan.svg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">

                    <p class="h6">Diseñado por <a href="https://somosimpulsa.com" target="_blank">Impulsa Creativos.</a>
                        &copy2019 Tiendas Gandocam. Todos los derechos reservados</p>
                </div>
                </hr>
            </div>
        </div>
    </section>
    <!-- ./contact -->

    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=00000&text=%C2%A1Hola!%20Vengo%20de%20*https://tiendasmoa.com*%20mi%20nombre%20es:%20" target="_blank">
            <img src="<?php echo RUTA; ?>/src/wa.png" alt="btn_whatsapp">
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="<?php echo RUTA; ?>/assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo RUTA; ?>/assets/js/main.js"></script>
    <script src="<?php echo RUTA; ?>/assets/js/jquery.instagramFeed.min.js"></script>


    </html>