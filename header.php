<?php
    $basename =basename($_SERVER['PHP_SELF']);
    
?>


<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5GCWQH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5GCWQH');</script>
<!-- End Google Tag Manager -->


<div class="container-header">
    <div class="container header">
        <div class="col-md-3 col-sm-5">
            <a href="index.php"><img src="images/logo-persianas.png" class="img-responsive" alt="logo"></a>
        </div>
        <div class="col-md-9 col-sm-7 col-xs-12 icons-header">            
            <a href="#" target="_blank"><span id="search" class="icon-search" ></span></a>
            <a href="#" target="_blank"><span id="instagram" class="icons-redes" ></span></a>
            <a href="#" target="_blank"><span id="twitter" class="icons-redes" ></span></a>   
            <a href="https://www.facebook.com/persianascolorydiseno" target="_blank"><span id="facebook" class="icons-redes" ></span></a>
        </div>
        <div class="col-md-9 col-sm-7 col-xs-12 number-header"><p>+57 (310) 8660525 <br class="visible-xs">(1) 7577127</p></div>
    </div>
    </div>
    <!--end container header-->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menu-1">
                <ul class="nav navbar-nav ul-menu">
                   
                    <li role="presentation" <?= ($basename == "index.php")?'class="active"': '';?> ><a href="index.php">Inicio</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li ><a href="blackout.php">Blackout</a></li>
                        <li><a href="enrollables.php">Enrollables</a></li>
                        <li><a href="persianas_verticales.php">Persianas</a></li>
                        <li><a href="panel_japones.php">Panel japones</a></li>
                        <li><a href="sheer.php">Sheer elegance</a></li>
                      </ul>
                    </li>
                    <li role="presentation" <?= ($basename == "proyectos.php")?'class="active"': '';?>><a href="proyectos.php">Nuestros Proyectos</a></li>
                    <li role="presentation" <?= ($basename == "promociones.php")?'class="active"': '';?>><a href="promociones.php">Promociones</a></li>
                    <li role="presentation" <?= ($basename == "contactenos.php")?'class="active"': '';?>><a href="contactenos.php">Cont&aacute;ctenos</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>  
    <!--end menu-->