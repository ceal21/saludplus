<?php include 'header.php';?>

<body>
    <?php include 'header-div-1.php';?>

    <main class="cd-main-content portada-principal">
        <!-- main content here -->
        <div class="container ">
            <div class="row">
                <nav style="background: none; box-shadow: none;">
                    <div class="nav-wrapper">
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                            <i class="material-icons">menu</i>
                        </a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li>
                                <a class="cl-plomo negrita" href="sass.html">Usuario</a>
                            </li>
                            <li>
                                <a class="cl-plomo negrita" href="badges.html">Empresas</a>
                            </li>
                        </ul>

                        <ul class="sidenav" id="mobile-demo">
                            <li>
                                <a class="cl-azul negrita" href="sass.html">Usuario</a>
                            </li>
                            <li>
                                <a class="cl-azul negrita" href="badges.html">Empresas</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row  ">
                <div class="col s8 l6 offset-l3">
                    <img class="responsive-img" src="img/logo.png">
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="card card-resultado"  style="padding: 15px 10px">
                        <div class="row">
                            <div class="col s12">
                                <h4 class="negrita cl-azul">Como Usuario</h4>
                            </div>
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="name" type="text" class="validate">
                                        <label for="name">Usuario</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="constrasena" type="text" class="validate">
                                        <label for="constrasena">Contraseña</label>
                                    </div>
                                    <div class="col s12 l6 offset-l3" style="padding: 3px">
                                        <a class="waves-effect waves-light btn-small btn-pagar">
                                            Ingresar
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <?php include 'footer.php';?>