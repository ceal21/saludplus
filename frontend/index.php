<?php include 'header.php';?>

<body>
    <?php include 'header-div-1.php';?>

    <main class="cd-main-content portada-principal" >
        <!-- main content here -->
        <div class="container ">
            <div class="row">
                <nav style="background: none; box-shadow: none;">
                    <div class="nav-wrapper">
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                            <i class="material-icons">menu</i>
                        </a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li >
                                <a class="cl-plomo negrita" href="sass.html">Usuario</a>
                            </li>
                            <li >
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
                    <img class="responsive-img" src="img/logo.png" >
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row" style="padding: 30px;">
                        <div class="col s12 l3 center-align">
                            <a href="login.php">
                                <img class="responsive-img" src="img/icono1.png" style="width: 80%;">
                            </a>
                        </div>
                        <div class="col s12 l3 center-align">
                            <a href="modulo-consulta.php">
                                <img class="responsive-img" src="img/icono2.png" style="width: 80%;">
                            </a>
                        </div>
                        <div class="col s12 l3 center-align">
                            <a href="modulo-farmacia.php">
                                <img class="responsive-img" src="img/icono3.png" style="width: 80%;">
                            </a>
                        </div>
                        <div class="col s12 l3 center-align">
                            <img class="responsive-img" src="img/icono4.png" style="width: 80%;">
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        
    </main>

<?php include 'footer.php';?>