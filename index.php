<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
   <head>
      <meta charset="UTF-8" />
      <title>Team 3 Hospital PJ</title>
      <link href="css/style.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
      <link rel="stylesheet" type="text/css" href="css/style_nivo.css" media="screen">
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/hoverIntent.js"></script>
      <script type="text/javascript" src="js/superfish.js"></script>
      <script type="text/javascript" src="js/placeholder.js"></script>
      <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
      <script type="text/javascript">
         // Slider stuff
         $(window).load(function() {
         $('#slider').nivoSlider({
         effect:'slideInLeft', // Specify sets like: 'fold,fade,sliceDown'
         animSpeed:300, // Slide transition speed
         pauseTime:6000, // How long each slide will show
         directionNav:true, // Next & Prev navigation
         keyboardNav:true, // Use left & right arrows
         pauseOnHover:true // Stop animation while hovering
         });
         });
      </script>
      <script type="text/javascript">
         // Initialise menu plugin
         jQuery(function(){
         jQuery('ul.sf-menu').superfish();
         });
      </script>
   </head>
   <body>
      <div id="container">
         <!--Header begins-->
         <div id="headerContainer">
            <a class="logo" href="index.html" title="Health Care Theme">E3</a>
            <div class="clear"></div>
         </div>
         <!--Header ends-->
         <div id="contentContainer">
            <!--Menu begins-->
            <div id="menubarborder">
               <div id="menubar">
                  <ul class="sf-menu">
                     <li><a href="index.html">Página Principal</a></li>
                     <!--<li><a href="agregar_entidad.php">Agregar Paciente</a></li>-->
                     <li><a href="#">Medico</a></li>
                     <li><a href="#">Cita</a></li>
                     <li><a href="#">Receta</a></li>
                     <li><a href="#">Paciente</a></li>
                     <li><a href="#">Examenes</a></li>
                  </ul>
               </div>
            </div>
            <!--Menu ends-->
            <!--Content begins-->
            <div id="content">
               <!--Middle part begins-->
               <div id="middlePart">
                  <!--Welcome begins-->
                  <div id="middleTwoColumn">
                     <div class="h1title">
                        <img src="images/icon_welcome.png" alt="Wel
                           come" title="Welcome" />
                        <h1>Bienvenidos</h1>
                        <br>
                        <br>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id est laborum. </span>
                     </div>
                     <img src="images/welcome_img_01.jpg" alt="Welcome" class="br5 mb15" />
                  </div>
                  <!--Welcome ends-->
                  <!--Sidebar begins-->
                  <div id="sidebar">
                     <!--Quick search #1 begins-->
                     <div class="sidebarBlock top">
                        <div class="h2title">
                           <h2>Equipo #3</h2>
                        </div>
                        <br>
                        <p> Juan Luis Flores</p>
                        <br>
                        <p> Jorge Limón </p>
                        <br>
                        <p> Gerardo Galvez</p>
                        <br>
                        <p> Oscar González</p>
                        <br />
                     </div>
                     <!--Quick search #1 ends-->
                  </div>
                  <!--Sidebar ends-->
               </div>
               <!--Middle part ends-->
               <div class="clear"></div>
            </div>
            <!--Content ends-->
            <!--Footer begins-->
            <div id="footerPart">
               <div class="footerLeft">
                  Equipo 3
               </div>
               <div class="footerRight">
                  <ul>
                     <li><a href="#" title="">Ayuda</a></li>
                  </ul>
               </div>
            </div>
            <!--Footer ends-->
         </div>
         <!--ContentContainer ends-->
      </div>
      <!--Container ends-->
   </body>
</html>
