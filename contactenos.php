<!DOCTYPE html>
<html lang="es">
<head>
    <title>Persianas Color & Diseño - Vida para tus espacios</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <link rel="shortcut icon" href="favicon.png" />
    <!--font-->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- jQuery library (served from Google) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="css/jquery.bxslider.css" rel="stylesheet" /> 
    <link rel="stylesheet" href="owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl-carousel/owl.theme.css">  

    <link href="rs-plugin/css/settings.css" rel="stylesheet">
    <link href="rs-plugin/css/navstylechange.css" rel="stylesheet">   
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-68687605-1', 'auto');
      ga('send', 'pageview');

    </script>

</head>
<body>
    


    <!-- Header -->
    <?php
        include 'header.php';
    ?>
    
    <div class="container">
        <div class="row contacto">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-2">
                    <h3>CONTÁCTENOS</h3>
                </div>
                <div class="col-md-10">
                    <div class="barra-titulo--contacto"></div>
                </div>
                </div>
                
                <div class="formulario-contacto">
                    <form id="frmcontacto" method="post">
                        <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 col-xs-2 label-formulario ">
                                     Nombre
                                    </div>
                                    <div class="col-md-9 col-xs-8  form-group ">
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                    <div class="col-md-1 col-xs-1 form-group ">
                                        <span class="asterisco-contacto">*</span>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-2 col-xs-2 label-formulario ">
                                     Telefono
                                    </div>
                                    <div class="col-md-9 col-xs-8 form-group ">
                                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                                    </div>
                                    <div class="col-md-1 col-xs-1 form-group ">
                                        <span class="asterisco-contacto">*</span>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-2 col-xs-2 label-formulario ">
                                     Email
                                    </div>
                                    <div class="col-md-9 col-xs-8 form-group ">
                                        <input type="text" class="form-control" id="Email" name="email" required>
                                    </div>
                                    <div class="col-md-1 col-xs-1 form-group ">
                                        <span class="asterisco-contacto">*</span>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 col-xs-2 label-formulario ">
                                     Asunto
                                    </div>
                                    <div class="col-md-9 col-xs-8  form-group ">
                                        <input type="text" class="form-control" id="asunto" name="asunto" required>
                                    </div>
                                    <div class="col-md-1 col-xs-1 form-group ">
                                        <span class="asterisco-contacto">*</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-xs-2 label-formulario ">
                                     Mensaje
                                    </div>
                                    <div class="col-md-9 col-xs-8 form-group ">
                                        <textarea type="text" class="form-control" id="mensaje" name="mensaje" rows="5" required onkeyup="CuentaCarac(this)"></textarea>
                                    </div>
                                    <div class="col-md-1 col-xs-1 form-group ">
                                        <span class="asterisco-contacto">*</span>
                                    </div>
                                </div>
                                <div class="row fuente-color">
                                    <div class="col-md-2 col-xs-3"></div>
                                    <div class="col-md-5 col-xs-5 mensaje-cuenta-caracteres">
                                        <p>Campos requeridos ( <span class="fuente-color"> * </span> ),      usted tiene</p>
                                    </div>
                                    <div class="col-md-1 col-xs-1 mensaje-cuenta-caracteres" id="cuentacar">500</div>
                                    <div class="col-md-4 col-xs-3 mensaje-cuenta-caracteres">
                                        <p style="margin-left: 5px">caracteres restantes.</p>
                                    </div>

                                </div>
                        </div>
                        <div class="col-md-12 col-xs-10 text-right">
                           <button name="btnenviar" id="btnenviar" type="submit" class="btn btn-default btn-formulario">Enviar</button>
                        </div>
                    </form>
                    <div id="resultadocontacto"></div>
                </div>
            </div>
           
        </div>
    </div>
    
    
    <hr style="margin: 2px 0; border-top: 1px solid #4c213d;" />
   
    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>



    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
        function CuentaCarac(val) {
            var len = val.value.length;
            if (len >= 500) {
                val.value = val.value.substring(0, 500);
            } else {
                $('#cuentacar').text(500 - len);
            }
        };
    </script>
    <!-- Enviar correo de contacto -->
    <script>
        jQuery(function(){
            jQuery("#btnenviar").click(function(){
                var url = "php/enviar_contacto.php"
                jQuery.ajax({
                    type:"POST",
                    url: url,
                    data: $("#frmcontacto").serialize(),
                    success: function(data){
                        jQuery("#resultadocontacto").html(data);
                        jQuery("#frmcontacto")[0].reset();
                    }
                });
                return false;
            });

        });
    </script>

     <script type="text/javascript">
        $(document).ready(function(){
 
            $('.ir-arriba').click(function(){
                $('body, html').animate({
                    scrollTop: '0px'
                }, 300);
            });
         
            $(window).scroll(function(){
                if( $(this).scrollTop() > 0 ){
                    $('.ir-arriba').slideDown(300);
                } else {
                    $('.ir-arriba').slideUp(300);
                }
            });
         
        });

    </script>
    
</body>
</html>