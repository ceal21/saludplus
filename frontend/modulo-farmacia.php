<?php include 'header.php';?>
<body>
    <?php include 'header-div-1.php';?>

    <main class="cd-main-content">
        <!-- main content here -->
        <div class="container ">
            <?php include 'sub-header.php';?>

            <div class="row">
                <div class="container">
                    <div class="row" style="padding: 50px 0px">
                        <div class="col s8 l6 offset-l3">
                            <a class="waves-effect waves-light btn-large btn-titulo bg-azul negrita">
                                Módulo de Farmacia</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 l12 m10 offset-m1">
                            <nav class="bg-azul-2">
                                <div class="nav-wrapper">
                                    <form>
                                        <div class="input-field">
                                            <input id="search" type="search" required>
                                            <label class="label-icon" for="search">
                                                <i class="material-icons">search</i>
                                            </label>
                                            <i class="material-icons">close</i>
                                        </div>
                                    </form>
                                </div>
                            </nav>
                        </div>
                        <div class="col s12 l12 m10 offset-m1">
                            <p class="black-text center-align">Ingresa el medicamento que buscas, nosotros podremos a
                                tu disposición
                                las mejores opciones.</p>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row" style="padding: 30px 0px">
                <div class="col s12 l8">
                    <div class="card card-resultado" style="padding: 15px 10px">
                        <div class="row">
                            <h4 class="col s12 l8">Paracetamol</h4>
                            <div class=" col s12 l4 input-field inline">
                                <input id="email_inline" type="text" class="validate">
                                <label for="email_inline">Cantidad</label>
                                <span class="helper-text" data-error="wrong" data-success="right">Solo la necesaria</span>
                            </div>
                        </div>
                        <div class="row">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Farmacia</th>
                                        <th>Tipo</th>
                                        <th>Precio Unitario</th>
                                        <th>Agregar</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Aspirina 500 mg</td>
                                        <td>Inka Farma</td>
                                        <td>Genérico</td>
                                        <td>s/.2.50</td>
                                        <td>
                                            <a class="waves-effect waves-light btn-small btn-agregar"><i class="material-icons">touch_app</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Aspirina 500 mg</td>
                                        <td>Inka Farma</td>
                                        <td>Genérico</td>
                                        <td>s/.2.50</td>
                                        <td>
                                            <a class="waves-effect waves-light btn-small btn-agregar">
                                                <i class="material-icons">touch_app</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Aspirina 500 mg</td>
                                        <td>Inka Farma</td>
                                        <td>Genérico</td>
                                        <td>s/.2.50</td>
                                        <td>
                                            <a class="waves-effect waves-light btn-small btn-foto">
                                                <i class="material-icons">camera_alt</i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card card-foto" style="padding: 15px 10px">
                        <div class="row" style="height: 200px; background: url(img/portada3.jpg); background-position: center;
    background-size: cover;"></div>
                        <div class="row">
                            <h4 class="col s12 cl-rojo negrita">Con Indicación Médica</h4>
                            <p class="col s12">Este medicamento solo puede ser vendido con prescripción Médica,
                                necesitamos que envies una foto de tu receta, firmada por tu doctor.</p>
                        </div>
                        <div class="row fle">
                            <form class="col s12 " action="#">
                                <div class="file-field input-field">
                                    <div class="btn bg-rojo">
                                        <span>File</span>
                                        <input type="file" multiple>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                    </div>
                                </div>
                                <div class="col s12 l4 offset-l8" style="padding: 3px">
                                    <a class="waves-effect waves-light btn-small btn-foto">
                                        Enviar Receta
                                    </a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="card card-carrito" style="padding: 15px 10px">
                        <div class="row">
                            <h5 class="col s12 negrita">Detalle de Compra</h5>
                        </div>
                        <div class="row">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Precio x Cant</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Aspirina 500 mg</td>
                                        <td>s/.2.50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <h5 class="col s6 negrita">Total</h5>
                            <h5 class="col s6 negrita">S/15.00</h5>
                        </div>
                        <div class="row" style="padding: 25px 0px 0px 0px">
                            <div class="col s12 l6" style="padding: 3px">
                                <a class="waves-effect waves-light btn-small btn-pagar">
                                    Pedir
                                </a>
                            </div>
                            <div class="col s12 l6" style="padding: 3px">
                                <a class="waves-effect waves-light btn-small btn-cancelar">
                                    Cancelar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        
        <?php include 'footer-div.php';?>
    </main>

<?php include 'footer.php';?>