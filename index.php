<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>SAD Morón - Formularios</title>
    <!--LIKNS Y SCRIPTS PARA EL USO DE MATERIAL ICONS, MATERIALIZE Y JQUERY-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="js/jquery.js"></script> 
    <script>
  var $j = jQuery.noConflict()
</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/parallax.js"></script>
    <link rel="stylesheet" href="css/estilosindex.css">
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
</head>

<body>

    <!--NAVBAR PARA NAVEGAR EN VERSIÓN DE ESCRITORIO, USANDO STYLES DENTRO PARA TERMINAR DE ORGANIZAR LOS TAMAÑOS PARA QUE NO
        SE DESBORDEN -->
        <nav class="nav-extended hide-on-med-and-down fixed">
            <div class="nav-wrapper grey darken-3">
                
                <div class="nav-wrapper-header">
            <a href="http://www.sadmoron.com/" class="brand-logo center"><span><img src="img/logosad3.png" width="90%" class="logo" id="brandlogo" style="margin-top:-0px ;min-height:60px; max-height:60px"/></span><p></p></a>

            <ul id="nav" class="hide-on-med-and-down left">
                         <li><div class="li1" style="font-size: 25px; margin-left:70px;">Rodrigo Peña</div></li>
                        

                    </ul><img src="img/persona.jpg" id="brandlogo" class="brand-logo responsive-img circle" style="display: flex; margin-left:5px; margin-top:6px; position:absolute; min-height:50px; max-height:50px"></span>

                    <ul id="nav" class="hide-on-med-and-down right">
                         <li><a href="http://www.sadmoron.com/" class="li1" style="font-size: 25px">Inicio</a></li>
                        <li><a href="https://docs.google.com/document/d/1MRICI0KXvLSgs0CQ-aEl-v-6D0o9kshBeGCAKy9HlIQ/edit" class="li1" style="font-size: 25px">Formularios</a></li>

                    </ul>
                </div>
            </div>


        </nav>


      <!--NAVBAR MOVIL-->
        <nav class="hide-on-large-only">
            <div class="nav-wrapper grey darken-3">
            <a href="#" class="brand-logo center"><img src="img/logosad.png" width="50%" style="margin-top:2px" /><p></p></a>
            <span>
                <ul id="nav" class="hide-on-large-only right">
                        <li><a class="waves-effect" href="http://www.sadmoron.com/"><i class="material-icons">home</i></a></li>
                        <li><a class="waves-effect" href="https://docs.google.com/document/d/1MRICI0KXvLSgs0CQ-aEl-v-6D0o9kshBeGCAKy9HlIQ/edit"><i class="material-icons">article</i></a></li>
                    </ul>
                    
                </span>
            </div>
        </nav><br><br>

        

<!--CONTENIDO PRINCIPAL DE LA PÁGINA, USANDO CONTAINER PARA DAR MEJOR VISUALIZACIÓN Y CENTRAR LOS ELEMENTOS-->
<main>
<div class="container">
     <form>
        <!--BUSCADOR PARA FACILITAR LA BUSCA DE FORMULARIOS-->
        <div class="input-field col s6">
          <i class="material-icons prefix">search</i>
          <input type="search" id="autocomplete-input" class="autocomplete">
          <label for="autocomplete-input">Buscar</label>
        </div>
      </form>
      <!--INDICE DE ELEMENTOS PARA NO TENER QUE RETROCEDER PARA BUSCAR OTRAS PÁGINAS, MEJORANDO LA NAVEGACIÓN EN LA PÁGINA Y FACILITANDO EL USO (SE USA ESTÉTICA VERDE PARA MANTENER UNA CONCORDANCIA SIMBÓLICA RESPECTO A LA PÁGINA PRINCIPAL)-->
  <div class="row center flex" >
    <div class="col s12 m4 l3" style="float:left">
        <br><strong><center class="inicio1">Índice</center></strong><hr>
        <table style="border:2px; background-color: #8DE378; border-radius:10px">
        <tbody>
          <tr>
            <td><a href="http://www.sadmoron.com/index_archivos/Page389.htm" class="texton"><center>MUNICIPALIDAD MORÓN</center></a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page437.htm" class="texton">Organización Interna</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page395.htm" class="texton">SAD Morón S1 S2</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page404.htm" class="texton">CURSOS / ARCHIVOS / ONG</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page1181.htm" class="texton">CIIE</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page1512.htm" class="texton">Escuelas del Distrito</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page1437.htm" class="texton">Docentes, Temas de Interés</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page295.htm" class="texton">ORDEN DE LISTADOS</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page1309.htm" class="texton">APD</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page1883.htm" class="texton">CENDIE REGIÓN VIII</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page1714.htm" class="texton">DIEGEP REGIÓN VIII</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page698.htm" class="texton">Consejo Escolar de Morón</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page2042.htm"class="texton">CoMISaSEP</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page422.htm"class="texton">Normativas y Portales</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page413.htm" class="texton">Formularios y Planillas</a></td>
          </tr>
          <tr>
            <td class="center"><a href="http://www.sadmoron.com/index_archivos/Page416.htm" class="texton">Gremios Docentes</a></td>
          </tr><p></p>
        </tbody>
      </table>
    </div>
    <div class="col s12 m8 l9">
        <br>
    <div class="col s12 m4 center">
        <!--CARDS PARA DISTRIBUIR EN CANTIDAD LOS FORMULARIOS QUE HAYAN, COLOCANDO UNA IMAGEN PERSONALIZADA EN CADA UNO Y PERMITIENDO UNA MEJOR VISTA DESDE LEJOS, MENOS SATURADA Y FÁCIL DE COMPRENDER ESPECIALMENTE PARA LOS MAYORES-->
      <div class="card" style="min-height:355px; 
     max-height:355px">
        <div class="card-image">
          <img src="img/img1.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red darken-3"><i class="material-icons">edit_note</i></a>
        </div>
        <div class="card-content">
          <p>PRUEBA RENUNCIA MAD OTORGADO (LINKEO FORMULARIO RESPONSIVE)</p>
        </div>
        <div class="card-action">
          <a href="formulariopp2.html">Completar</a>
        </div>
      </div>
    </div>

    <div class="col s12 m4 center">

      <div class="card" style="min-height:355px; 
     max-height:355px">
        <div class="card-image">
          <img src="img/img2.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red darken-3"><i class="material-icons">edit_note</i></a>
        </div>
        <div class="card-content">
          <p>PLANILLA RECTIFICACIÓN AUTOGESTIÓN LISTADO OFICIAL 2020-2021</p>
        </div>
        <div class="card-action">
          <a href="#">Completar</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 center">

      <div class="card" style="min-height:355px; 
     max-height:355px">
        <div class="card-image">
          <img src="img/img3.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red darken-3"><i class="material-icons">edit_note</i></a>
        </div>
        <div class="card-content">
          <p>PLANILLA DECLARACIÓN JURADA INCRIP. TRADICIONAL <br>2020-2021</p>
        </div>
        <div class="card-action">
          <a href="#">Completar</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 center">

      <div class="card" style="min-height:355px; 
     max-height:355px">
        <div class="card-image">
          <img src="img/img4.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red darken-3"><i class="material-icons">edit_note</i></a>
        </div>
        <div class="card-content">
          <p>PLANILLA DECLARACIÓN JURADA 108B COMPLEMENTARIO<BR> 2020-2021</p>
        </div>
        <div class="card-action">
          <a href="#">Completar</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 center">

      <div class="card" style="min-height:355px; 
     max-height:355px">
        <div class="card-image">
          <img src="img/img5.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red darken-3"><i class="material-icons">edit_note</i></a>
        </div>
        <div class="card-content">
          <p>PLANILLA DECLARACIÓN JURADA 108AB SUP Y ARTÍSTICA <br> 2020-2021</p>
        </div>
        <div class="card-action">
          <a href="#">Completar</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 center">

      <div class="card" style="min-height:355px; 
     max-height:355px">
        <div class="card-image">
          <img src="img/img6.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red darken-3"><i class="material-icons">edit_note</i></a>
        </div>
        <div class="card-content">
          <p>DESEMPEÑO DOCENTE ARTÍSTICA, TERCIARIO Y SUPERIOR <br> 2020-2021</p>
        </div>
        <div class="card-action">
          <a href="#">Completar</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 center">

      <div class="card" style="min-height:355px; 
     max-height:355px">
        <div class="card-image">
          <img src="img/img7.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red darken-3"><i class="material-icons">edit_note</i></a>
        </div>
        <div class="card-content">
          <p>RECLAMO DE LISTADO SUPERIOR DE ARTÍSTICA 108A <br>2020-2021</p>
        </div>
        <div class="card-action">
          <a href="#">Completar</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 center">

      <div class="card" style="min-height:355px; 
     max-height:355px">
        <div class="card-image">
          <img src="img/img8.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red darken-3"><i class="material-icons">edit_note</i></a>
        </div>
        <div class="card-content">
          <p>SOLICITUD DE RECLAMO DE LISTADO 108B COMPLEMENTARIO <br> 2020-2021</p>
        </div>
        <div class="card-action">
          <a href="#">Completar</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 center">

      <div class="card" style="min-height:355px; 
     max-height:355px">
        <div class="card-image">
          <img src="img/img9.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red darken-3"><i class="material-icons">edit_note</i></a>
        </div>
        <div class="card-content">
          <p>SOLICITUD DE RECLAMO INGRESO LISTADO OFICIAL <br>2020-2021</p>
        </div>
        <div class="card-action">
          <a href="#">Completar</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 center">

      <div class="card" style="min-height:355px; 
     max-height:355px">
        <div class="card-image">
          <img src="img/img10.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red darken-3"><i class="material-icons">edit_note</i></a>
        </div>
        <div class="card-content">
          <p>SOLICITUD DE RECLAMO 108A CON AMPLIATORIO <br>2020-2021</p>
        </div>
        <div class="card-action">
          <a href="#">Completar</a>
        </div>
      </div>
    </div>

    <div class="col s12 m4 center">

      <div class="card" style="min-height:355px; 
     max-height:355px">
        <div class="card-image">
          <img src="img/img11.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red darken-3"><i class="material-icons">edit_note</i></a>
        </div>
        <div class="card-content">
          <p>PLANILLA DE LA DECLARACIÓN JURADA 108A ACTUALIZADA<br>SOLO 2021</p>
        </div>
        <div class="card-action">
          <a href="#">Completar</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 center">
      <div class="card" style="min-height:355px; 
     max-height:355px">
        <div class="card-image">
          <img src="img/img12.png">
          <span class="card-title"></span>
          <a class="btn-floating halfway-fab waves-effect waves-light red darken-3"><i class="material-icons">edit_note</i></a>
        </div>
        <div class="card-content">
          <p>PLANILLA PARA RECLAMO 108A SUPERIOR ARTÍSTICA Y TERCIARIA <br>2020-2021</p>
        </div>
        <div class="card-action">
          <a href="#">Completar</a>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
</fieldset>
</fieldset>
</main>
<!--FOOTER DE LA PÁGINA PARA VERSIÓN WEB-->
<footer class="page-footer grey darken-3 hide-on-med-and-down" id="footer2">
  <div class="container">
      <div class="col 16 s12">

        <div class="right" id="divsito">
            <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13127.17478979589!2d-58.63440165184393!3d-34.659912674235535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc7638a2e521b%3A0x5e9786075eefc8fc!2sSecretaria%20de%20Asuntos%20Docentes!5e0!3m2!1ses-419!2sar!4v1625526874664!5m2!1ses-419!2sar" width="375" height="205" style="border:0; float:left; margin-right:75px" allowfullscreen="" loading="lazy"></iframe>
        <fieldset id="foot">
            <!--REDES SOCIALES Y CONTACTO DE LA ENTIDAD PARA MEJOR ENTENDIMIENTO, SOLUCIÓN DE DUDAS Y SEGUIMIENTO GENERAL-->
          <h5 class="white-text center" id="contacto">CONTACTO</h5><hr>
          <p class="grey-text text-lighten-4">Dirección: Av. Rivadavia 17840, Morón, Provincia de Buenos Aires.<br>
          E-mail: <strong>sadmoron@gmail.com</strong><br><br>
          <div class="imagenes center">
            <a href="https://www.facebook.com/sadmoron"><img src="img/face.png" width="2%" class="responsive-img logo" id="brandlogo"/></a>
            <a href="https://www.instagram.com/sad_moron/"><img src="img/ig.png" width="4%" class="logo" id="brandlogo"/></a>
            <a href="https://twitter.com/sadmoron?lang=es"><img src="img/twitter.png" width="4.5%" class="logo" id="brandlogo"/></a>
            <a href="https://t.me/SecretariaAsuntosDocentesMoron"><img src="img/telegram.png" width="4%" class="logo" id="brandlogo"/></a>
            <a href="https://www.youtube.com/channel/UCApU2ZNee5Yh4aCuBvGLdlQ"><img src="img/youtube.png" width="5.5%" class="logo" id="brandlogo"/></a>
            <a href="http://www.sadmoron.com/"><img src="img/linkedin.png" width="4%" class="logo" id="brandlogo"/></a>
          </div>
        </fieldset>
        <div class="footer-copyright text-center py-5">
          <div class="container center">
           <p> © 2021 Copyright: <a href="#"> S.A.D Morón</a></p>
          
         <p class="text-center" style="color: grey">Sitio Web construido por alumnos de la institución EESTN°6 "Chacabuco".</p>
        </div>
      </div>

    </div>

    </div>

  </div>
  <!-- PIE DE PÁGINA CON REPRESENTACIÓN DEL GOBIERNO, MANTENIENDO UN SENTIDO DE PERTENENCIA-->
    <div class="container center">
        <img src="img/pie.png" class="responsive-img center" />
    </div>
</footer>
    <!--FOOTER DE PÁGINA CON VERSIÓN MÓVIL, SUPONIENDO LO MISMO QUE ARRIBA-->
<footer class="page-footer grey darken-3 hide-on-large-only" id="footer2">
  <div class="container center" id="divsito2">
      <div class="col 16 s12">
        <fieldset id="foot">
          <h5 class="white-text" id="contacto">CONTACTO</h5><hr>
          <p class="grey-text text-lighten-4">Dirección: Av. Rivadavia 17840, Morón, Provincia de Buenos Aires.<br>
          E-mail: <strong>sadmoron@gmail.com</strong><br>

          <div class="imagenes center">
            <a href="https://www.facebook.com/sadmoron"><img src="img/face.png" width="2%" class="responsive-img logo" id="brandlogo" style="min-width: 5%; max-width: 5%"/></a>
            <a href="https://www.instagram.com/sad_moron/"><img src="img/ig.png" width="4%" class="logo" id="brandlogo" style="min-width: 10%; max-width: 10%"/></a>
            <a href="https://twitter.com/sadmoron?lang=es"><img src="img/twitter.png" width="4.5%" class="logo" id="brandlogo"style="min-width: 12%; max-width: 10%"/></a>
            <a href="https://t.me/SecretariaAsuntosDocentesMoron"><img src="img/telegram.png" width="4%" class="logo" id="brandlogo" style="min-width: 11%; max-width: 11%"/></a><br><br>
            <a href="https://www.youtube.com/channel/UCApU2ZNee5Yh4aCuBvGLdlQ"><img src="img/youtube.png" width="5.5%" class="logo" id="brandlogo" style="min-width: 12%; max-width: 10%"/></a>
            <a href="http://www.sadmoron.com/"><img src="img/linkedin.png" width="4%" class="logo" id="brandlogo" style="min-width: 9%; max-width: 9%"/></a>
          </div>
        </fieldset>
        <div class="footer-copyright text-center py-3">
          <div class="container center">
           <p> © 2021 Copyright: <a href="#"> S.A.D Morón</a></p>
          
         <p class="text-center" style="color: grey">Sitio Web construido por alumnos de la institución EESTN°6 "Chacabuco".</p>
        </div>
      </div>
    </div>
    <div class="container center">
        <img src="img/pie.png" class="responsive-img center" />
    </div>
  </div>
</footer>
</body>

</html>