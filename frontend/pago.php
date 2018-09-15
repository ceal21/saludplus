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


                    </div>
                </div>
            </div>

            <div class="row" style="padding: 30px 0px">
                <div class="col s12 l8">
                    <div class="card card-resultado" style="padding: 15px 10px">
                        <div class="row">
                            <h4 class="col s12 l8">Detalle de Compra</h4>
                        </div>
                        <div class="row">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Farmacia</th>
                                        <th>Tipo</th>
                                        <th>Precio Unit</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Aspirina 500 mg</td>
                                        <td>Inka Farma</td>
                                        <td>Genérico</td>
                                        <td>s/.2.50</td>
                                        <td>2</td>
                                        <td>s/.2.50</td>
                                    </tr>
                                    <tr>
                                        <td>Aspirina 500 mg</td>
                                        <td>Inka Farma</td>
                                        <td>Genérico</td>
                                        <td>s/.2.50</td>
                                        <td>2</td>
                                        <td>s/.2.50</td>
                                    </tr>
                                    <tr>
                                        <td>Aspirina 500 mg</td>
                                        <td>Inka Farma</td>
                                        <td>Genérico</td>
                                        <td>s/.2.50</td>
                                        <td>2</td>
                                        <td>s/.2.50</td>
                                    </tr>

                                    <tr>
                                        <td class="negrita">Sub Total</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>s/.2.50</td>
                                    </tr>
                                    <tr>
                                        <td class="negrita">Costo Delivery</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>s/.1.50</td>
                                    </tr>
                                    <tr>
                                        <td class="negrita">Total</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="negrita">s/.6.50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="card card-carrito" style="padding: 15px 10px">
                        <div class="row">
                            <h5 class="col s12 negrita">Antes de Pagar</h5>
                        </div>
                        <div class="row">
                            <form action="#" class="col s12">
                                <div class="row">
                                    <label class="col s12">
                                        <input name="group1" type="radio" checked />
                                        <span>Pago en Efectivo</span>
                                    </label>
                                    <label class="col s12">
                                        <input name="group1" type="radio" checked />
                                        <span>Pago Online</span>
                                    </label>
                                </div>
                            </form>
                        </div>
                        <div class="row" style="padding: 20px 0px">
                            <div class="divider col s12"></div>
                            <div class="col s12">
                                <form action="#">
                                    <div class="input-field col s12">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">Tarjeta de Débito o Crédito</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="fecha" type="text" class="validate">
                                        <label for="fecha">Fecha Venc.</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="llave" type="text" class="validate">
                                        <label for="llave">Seguridad</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="nombre" type="text" class="validate">
                                        <label for="nombre">Nombre</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="apellido" type="text" class="validate">
                                        <label for="apellido">Apellido</label>
                                    </div>
                                </form>
                            </div>
                            <div class="divider col s12"></div>
                        </div>
                        <div class="row">
                            <h5 class="col s6 negrita">Total</h5>
                            <h5 class="col s6 negrita">S/.6.50</h5>
                        </div>
                        <div class="row" style="padding: 25px 0px 0px 0px">
                            <div class="col s12 l6 offset-l3" style="padding: 3px">
                                <a class="waves-effect waves-light btn-small btn-pagar">
                                    Pagar
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