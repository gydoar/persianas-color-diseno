<div class="spacing-gray"></div> 
     <div id="sectionCaracteristica">
        <div class="container">
            <div class="col-md-7">
                <a href="sheer.php"><div class="caracteristica">
                    <img src="images/products/motorizacion.jpg" class="img-responsive">
                    <h3>MOTORIZACIÓN</h3>
                    <p>Si deseas un ambiente único y elegante dale vida tus espacios complementando tus persianas con sistema de accionamiento eléctrico ya que puedes manipularlas... </p>
                </div>
                </a>
            </div>
            <div class="col-md-5">
                <a href="sheer.php"><div class="caracteristica">
                    <img src="images/products/estampadas.jpg" class="img-responsive">
                    <h3>P.ESTAMPADAS</h3>
                    <p>Todas nuestras persianas se pueden estampar con los diseños de la más...</p>
                </div>
                </a>
                <span class="ir-arriba "><span class="flecha-ir-arriba">^</span></span>
            </div>
        </div>
    </div>
    
    <hr style="margin: 2px 0; border-top: 1px solid #4c213d;" />
    <!--start footer-->    
    <div class="contac-info">
        <div class="container">
            <div class="col-md-6">
                <div class="col-md-4">
                    <ul class="list-unstyled parrafo-links--menu">
                        <li><a href="index.php"><strong>INICIO</strong></a></li>
                        <li><a href="promociones.html"><strong>PROMOCIONES</strong></a></li>
                        <li><a href="#"><strong>MOTORIZACIÓN</strong></a></li>
                        <li><a href="#"><strong>P.ESTAMPADAS</strong></a></li>
                        <li><a href="contactenos.php"><strong>CONT&Aacute;CTENOS</strong></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <strong>PRODUCTOS</strong>
                    <ul class="list-unstyled footer-color-parrafo">
                        <a href="blackout.php"><li>Blackout</li></a>
                        <a href="enrollables.php"><li>Enrollables</li></a>
                        <a href="panel_japones.php"><li>Panel japones</li></a>
                        <a href="scheer.php"><li>Sheer elegance</li></a>
                    </ul>
                </div>
                <div class="col-md-4">
                    <strong>&nbsp;</strong>
                    <ul class="list-unstyled footer-color-parrafo">
                        <a href="persianas_verticales.php"><li>Persianas verticales</li></a>
                        <a href="persianas_madera.php"><li>Persianas en madera</li></a>
                        <a href="persianas_aluminio.php"><li>Persianas de aluminio</li></a>
                        <a href="persianas_romana.php"><li>Persiana romana</li></a>
                    </ul>    
                </div>
            </div>
            
            <div class="col-md-6">       
                <div class="col-md-6">                
                    <strong >CONT&Aacute;CTENOS</strong>
                    <ul  class="list-unstyled parrafo-color-direccion">
                        <li class="glyphicon glyphicon-map-marker direccion-contact"><span class="parrafo-sedenorte">SEDE NORTE</span></li>
                        <li>Calle 161a N° 21-89 Bogot&aacute;</li>
                        <li class="liSedeSur"><span class="parrafo-sedesur">SEDE SUR</span></li>
                        <li>Calle 3 Sur N° 11c -29 Barrio Policarpa</li>                    
                    </ul>       
                </div>         
                <div class="col-md-6 telefono-contact--margin">                
                    <p><span class="glyphicon glyphicon-earphone telefono-contact" ></span>TEL&EacuteFONOS</p>   
                    <p class="parrafo-color-telefono">+57 (310) 8660525 <br> (1) 7577127</p>        
                </div>               
            </div>
        </div>
    </div>
    <div class="map embed-responsive">   
        <div id="map" class="embed-responsive-item"></div>
        <script type="text/javascript">        
        var map;
        function initMap() {
            var myLatlng = new google.maps.LatLng(4.74224,-74.04654);
            map = new google.maps.Map(document.getElementById('map'), {
                center: myLatlng,
                zoom: 17
            });

            var marker = new google.maps.Marker({
                position: myLatlng,
                title:"Persianas Color & diseño"
            });

            // To add the marker to the map, call setMap();
            marker.setMap(map);
            var contentString = "<h3>Persianas Color & Diseño</h3>";
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }
        </script>
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9Gj2X4wN7VS9Ro019yI10Oj_5lHyeRZA&callback=initMap">
        </script>          
    </div>
    <div class="copyright">
        <div class="container">
            <p class="txt-copy-right"><span class="titulo-persianas">&copy; PERSIANAS COLOR Y DISEÑOS </span> <span class="titulo-suweb">HECHO CON <span class="glyphicon glyphicon-heart cora-copy" aria-hidden="true"></span> <a class="link-suweb" href="http://suwwweb.com/" target="_blank">suWWWEB S.A.S</a></span></p>
        </div>
    </div>

  
