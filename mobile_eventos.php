<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>IVAO Ecuador</title>
    <link rel="icon" href="assets/img/logo.ico">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="estilos3.css">
    <link rel="stylesheet" href="eventos.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cont_users.css">
    <link rel="stylesheet" href="dist/flexboxgrid.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous">
    </script>
    <script src="js/get_up.js"></script>
    <script src="js/main.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/cont_user.js"></script>
</head>


<header>
       
       <div class="menu_bar">
          
          <a href=""><img src="assets/img/logo.png" alt="Logo de la página de IVAO" class="logom"></a>
          
           <a class="bt-menu">
               <span class="icon-menu"></span>
               <p class="titulom">IVAO Ecuador</p>
           </a>
           
       </div>
       
       <nav>
        
        <div>
            
            <a href=""><img src="assets/img/logo.png" alt="Logo de la página de IVAO" class="logop"></a>
            <h1 class="titulo">IVAO Ecuador</h1>
            
        </div>
        
        <ul>
        
        <li><a href="index.html"><span class="icon-home"></span><b>Inicio</b></a> </li>
                  
        <li class="submenu">
            <a href="#"><span class="icon-binoculars"></span><b>¿Quienes Somos?</b> <span class="caret icon-arrow-down6"></span></a> 
            <ul class="children">
                <li><a href="index.html"><b>Misión</b></a></li>
                <li><a href="index.html"><b>Visión</b></a></li>
                <li><a href="index.html"><b>División</b></a></li>
                <li><a href="#"><b>Nuestra Normativa</b></a></li>
            </ul>
         </li>
               
               
        <li><a href="eventos.php"><span class="icon-trophy"></span><b>Eventos</b></a> </li>
        
        <li class="submenu">
            <p><span class="icon-download"></span><b>Herramientas</b> <span class="caret icon-arrow-down6"></span></p>
            <ul class="children">
                <li><a href="recursos/software.html"><b>Software</b></a></li>
                <li><a href="recursos/cartas.html"><b>Cartas de navegación</b></a></li>
                <li><a href="https://webeyetemp.ivao.aero/" target="_blank"><b>Ivao WebEye</b></a></li>
                <li><a href="https://tracker.ivao.aero/"  target="_blank"><b>Ivao Tracker</b></a></li>
            </ul>
         </li>
        <li><a href="#"><span class="icon-airplane"></span><b>Equipo Staff</b></a> </li>
        <li><a href="#"><span class="icon-accessibility"></span><b>Registro</b></a> </li>
        <li><a href="#"><span class="icon-user"></span><b>Log-in</b></a> </li>
           </ul>
           
       </nav>
       
   </header> 
   
<body>
    
    <div id="contenedor_carga">
     
      <div id="carga"><span class="icon-airplane"></span></div>
      
  </div>
    
    <section class="eventosimg">
       <div class="conimgeven" >
           <h1>¡Conoce los eventos más recientes de la división!</h1>
       </div>
    </section>
    
    <section>  
        <div class="firstinfo">
                <div class="titleevents">
                   <h1>¡A continuación te presentamos todos los eventos de la división!</h1>
                </div>    
                <div class="descriptionevents">
                    <p> Conoce nuestros eventos, mira sus detalles y sus recompensas, estamos ansiosos de verte en cada de uno de ellos participando y disfrutando </p>
                </div>
        </div>
    </section>
    
    
    
    
    <section>
        
        <div class="separation">
            
        </div>
        
    </section>
    
    
    <?php
    require_once("connect.php");
    $sql = "select * from noticias order by id desc";
    $res = mysqli_query($conexion, $sql);
    
    
    while($noticias = mysqli_fetch_array($res)){
    ?>
    
    <section>
        
        <div class="events_list">
           
           <div class="row">
               
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                   
                    <img class="imagen_evento" src="<?php echo $noticias['link_imagen'];?>" alt="<?php echo $noticias['desc_imagen'];?>"> 
                    
                    </div>
               
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                   
                       <div class="espec_evento">
                    
                           <h1><?php echo $noticias['titulo'];?></h1> 
                   
                            <p class="intro"><?php echo $noticias['detalle'];?></p>
                    
                           <p class="fecha_evento"> <b>Fecha del evento: </b><?php echo $noticias['fecha_larga'];?></p>
                           
                           <p class="hora_evento"> <b>Hora del evento: </b><?php echo $noticias['hora'];?> Zulú</p>  
                    
                           <p class="lugar_evento"> <b>Lugares del evento:</b> <?php echo $noticias['lugares'];?></p>
                    
                           <p class=" estado_evento"><b>Estado del evento:</b> <?php echo $noticias['estado'];?></p>
                    
                            <a href="" class="boton_vermas"> <p>¡Deseo conocer más acerca de este evento!</p></a>
                    
                        </div>
               
                   </div>
           
            </div>
            
            
        </div>
        
    </section>
    <?php } ?>
    
    <footer>
  
        <div class="container_footer">
   
                <div class="row">
                
                    <div class="col-lg-3 col-md-7 col-sm-12 col-xs-12">
                    
                         <div class="first_i">
                    
                            <h1>Más información sobre Ivao</h1>
                        
                            <p>Es una organización global que proporciona un entorno para poder interconectar programas de simulación de vuelo y simulación de control aéreo. La organización, que a nivel mundial tiene más de 150.000 miembros, ofrece la posibilidad de conocer más en el ámbito de la aviación, por medio de simuladores operados por ordenadores comunes o caseros y personas aficionadas.</p>
                        </div> 
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-7 col-sm-12 col-xs-12">
                    
                        <div class="second_i">
                    
                            <h1>Links que te pueden interesar</h1>
                        
                            <ul>
                                <li><a href="">Acerca de nosotros</a></li>
                                <li><a href="">Nuestros Eventos</a></li>
                                <li><a href="">Herramientas</a></li>
                                <li><a href="">Equipo Staff</a></li>
                                <li><a href="">Normatividad</a></li>
                            </ul>
                            
                        </div>

                    </div>
                    
                    <div class="col-lg-3 col-md-7 col-sm-12 col-xs-12">
                    
                        <div class="third_i">
                    
                            <h1>Siguenos en nuestras redes sociales</h1>
                    
                            <p>Te invitamos a que nos sigas en nuestras redes, en donde encontraras toda la información acerca de actualizaciones y eventos. </p>
                    
                            <a href="https://www.facebook.com/IvaoEcuador/?epa=SEARCH_BOX"  target="_blank"><span class="icon-facebook"></span></a>
                            <a href=""><span class="icon-mail2"></span></a>
                            <a href="https://chat.whatsapp.com/B9csEs1Ajl47gNbjPtoCOe" target="_blank"><span class="icon-whatsapp"></span></a>
                            <a href="https://www.instagram.com/ivaoecuador/?hl=es-la" target="_blank"><span class="icon-instagram"></span></a>
                            
                        </div>
                    
                    </div>
                    
                    <div class="col-lg-3 col-md-7 col-sm-12 col-xs-12">
                    
                        <div class="fourth_i">
          
                           <h1>Newsletter</h1>
                           <form action="regcorreo.php" method="post" class="form-register">
                           <input type="text" id="correo" name="correo" placeholder="Correo electronico" class="input-48" required>
                           <input type="submit" value="Roger" class="btn-enviar">
                            </form>
                    
                            <p>¡Suscribete a nuestra lista de newsletter para estar informado de cualquier novedad de la división!</p>
                            
                        </div>    
                    
                    </div>
                    
               </div>
               
               <div class="final_info">
                   <p>Página creada y diseñada por Santiago Baron Zuleta | WebMaster de Ivao Ecuador | <a href="https://ivao.aero/" class="ivao_oficial">Página Oficial de Ivao</a></p>
               </div>
           
       </div>
   </footer>
    

    <script>
    
    window.onload = function(){
        var contenedor = document.getElementById('contenedor_carga');
        
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
    }
        
    </script>
    
    
    
</body>
</html>