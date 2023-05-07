<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<head>
  <meta charset="utf-8">
  <title>Css Menu V12</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel="stylesheet" href="estilos1.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/2c88275bf6.js" crossorigin="anonymous"></script>
  <script type="module" src="javascript.js"></script>
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
  <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }
  body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #D5F5E3;
  }
  .contenedor{
    position: fixed;
    top: 0;
    width: 100%;
    height: 16%;
    z-index: 2;
  display: flex;
  justify-content: center;
  align-items: center;
    background-color: #229954;
  }
  .navegacion{
    position: fixed;
    top: 7%;
    width: 600px;
    height: 75px;
    background: lightyellow;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 30px;
  }
  .navegacion ul{
    display: flex;
    width: 420px;
  }
  .navegacion ul li{
    position: relative;
    list-style: none;
    width: 70px;
    height: 70px;
    z-index: 1;
  }
  .navegacion ul li a{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
    text-align: center;
  }
  .navegacion ul li a .icono{
    position: relative;
    display: block;
    line-height: 75px;
    font-size: 1.5em;
    text-align: center;
    transition: 0.2s;
    color: #222327;
  }
  .navegacion ul li.activo a .icono{
    transform: translateY(-35px);
    color: white;
  }
  .navegacion ul li a .titulo{
    position: absolute;   
    font-size: 0.75em;
    color: #222327;
    font-weight: 400;
    letter-spacing: 0.05em;
    transition: 0.2s;
    opacity: 0;
  }
  .navegacion ul li.activo a .titulo{
    opacity: 1;
    transform: translateY(10px);
  }
  .indicador{
    position: absolute;
    top: -50%;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: #22df64;
    border: 6px solid #229954;
    transition: 0.2s;
  }
  .indicador::before{
    content: '';
    position: absolute;
    top: 50%;
    left: -20px;
    width: 20px;
    height: 20px;
    background: rgb(49, 48, 124);
    background: transparent;
    border-top-right-radius: 20px;
    box-shadow: 1px -10px 0 0 #229954;
  }
  .indicador::after{
    content: '';
    position: absolute;
    top: 50%;
    right: -20px;
    width: 20px;
    height: 20px;
    background: transparent;
    border-top-left-radius: 20px;
    box-shadow: -1px -10px 0 0 #229954;
  }
  .navegacion ul li:nth-child(1).activo ~ .indicador {
    transform: translateX(calc(70px * 0));
  }
  .navegacion ul li:nth-child(2).activo ~ .indicador {
    transform: translateX(calc(70px * 1));
  }
  .navegacion ul li:nth-child(3).activo ~ .indicador {
    transform: translateX(calc(70px * 2));
  }
  .navegacion ul li:nth-child(4).activo ~ .indicador {
    transform: translateX(calc(70px * 3));
  }
  .navegacion ul li:nth-child(5).activo ~ .indicador {
    transform: translateX(calc(70px * 4));
  }
  .navegacion ul li:nth-child(6).activo ~ .indicador {
    transform: translateX(calc(70px * 5));
  }





.new_footer_area {
    background: #222327;
}


.new_footer_top {
    padding: 5px 0px 270px;
    position: relative;
      overflow-x: hidden;
}
.new_footer_area .footer_bottom {
    padding-top: 5px;
    padding-bottom: 50px;
}
.footer_bottom {
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    color: #fff;
    padding: 27px 0px;
}
.new_footer_top .company_widget p {
    font-size: 16px;
    font-weight: 300;
    line-height: 28px;
    color: #fff;
    margin-bottom: 20px;
}
.new_footer_top .company_widget .f_subscribe_two .btn_get {
    border-width: 1px;
    margin-top: 20px;
}
.btn_get_two:hover {
    background: transparent;
    color: #5e2ced;
}
.btn_get:hover {
    color: #fff;
    background: #6754e2;
    border-color: #6754e2;
    -webkit-box-shadow: none;
    box-shadow: none;
}
a:hover, a:focus, .btn:hover, .btn:focus, button:hover, button:focus {
    text-decoration: none;
    outline: none;
}



.new_footer_top .f_widget.about-widget .f_list li a:hover {
    color: #5e2ced;
}
.new_footer_top .f_widget.about-widget .f_list li {
    margin-bottom: 11px;
}
.f_widget.about-widget .f_list li:last-child {
    margin-bottom: 0px;
}
.f_widget.about-widget .f_list li {
    margin-bottom: 15px;
}
.f_widget.about-widget .f_list {
    margin-bottom: 0px;
}
.new_footer_top .f_social_icon a {
    width: 44px;
    height: 44px;
    line-height: 43px;
    background: transparent;
    border: 1px solid #e2e2eb;
    font-size: 24px;
}
.f_social_icon a {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    font-size: 14px;
    line-height: 45px;
    color: #fff;
    display: inline-block;
    background: #ebeef5;
    text-align: center;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
}
.ti-facebook:before {
    content: "\e741";
}
.ti-twitter-alt:before {
    content: "\e74b";
}
.ti-vimeo-alt:before {
    content: "\e74a";
}
.ti-pinterest:before {
    content: "\e731";
}

.btn_get_two {
    -webkit-box-shadow: none;
    box-shadow: none;
    background: #5e2ced;
    border-color: #5e2ced;
    color: #fff;
}

.btn_get_two:hover {
    background: transparent;
    color: #5e2ced;
}

.new_footer_top .f_social_icon a:hover {
    background: #5e2ced;
    border-color: #5e2ced;
  color:white;
}
.new_footer_top .f_social_icon a + a {
    margin-left: 4px;
}
.new_footer_top .f-title {
    margin-bottom: 30px;
    color: #fff;
}
.f_600 {
    font-weight: 600;
}
.f_size_18 {
    font-size: 18px;
}
h1, h2, h3, h4, h5, h6 {
    color: #fff;
}
.new_footer_top .f_widget.about-widget .f_list li a {
    color: #fff;
}


.new_footer_top .footer_bg {
    position: absolute;
    bottom: 0;
    background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEigB8iI5tb8WSVBuVUGc9UjjB8O0708X7Fdic_4O1LT4CmLHoiwhanLXiRhe82yw0R7LgACQ2IhZaTY0hhmGi0gYp_Ynb49CVzfmXtYHUVKgXXpWvJ_oYT8cB4vzsnJLe3iCwuzj-w6PeYq_JaHmy_CoGoa6nw0FBo-2xLdOPvsLTh_fmYH2xhkaZ-OGQ/s16000/footer_bg.png") no-repeat scroll center 0;
    width: 100%;
    height: 266px;
}

.new_footer_top .footer_bg .footer_bg_one {
    background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEia0PYPxwT5ifToyP3SNZeQWfJEWrUENYA5IXM6sN5vLwAKvaJS1pQVu8mOFFUa_ET4JuHNTFAxKURFerJYHDUWXLXl1vDofYXuij45JZelYOjEFoCOn7E6Vxu0fwV7ACPzArcno1rYuVxGB7JY6G7__e4_KZW4lTYIaHSLVaVLzklZBLZnQw047oq5-Q/s16000/volks.gif") no-repeat center center;
    width: 330px;
    height: 105px;
  background-size:100%;
    position: absolute;
    bottom: 0;
    left: 30%;
    -webkit-animation: myfirst 22s linear infinite;
    animation: myfirst 22s linear infinite;
}

.new_footer_top .footer_bg .footer_bg_two {
    background: url("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhyLGwEUVwPK6Vi8xXMymsc-ZXVwLWyXhogZxbcXQYSY55REw_0D4VTQnsVzCrL7nsyjd0P7RVOI5NKJbQ75koZIalD8mqbMquP20fL3DxsWngKkOLOzoOf9sMuxlbyfkIBTsDw5WFUj-YJiI50yzgVjF8cZPHhEjkOP_PRTQXDHEq8AyWpBiJdN9SfQA/s16000/cyclist.gif") no-repeat center center;
    width: 88px;
    height: 100px;
  background-size:100%;
    bottom: 0;
    left: 38%;
    position: absolute;
    -webkit-animation: myfirst 30s linear infinite;
    animation: myfirst 30s linear infinite;
}



@-moz-keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}

@-webkit-keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}

@keyframes myfirst {
  0% {
    left: -25%;
  }
  100% {
    left: 100%;
  }
}




  
  </style>
</head>
<body>  
  <div class="contenedor">
  <div class="navegacion">
    <ul>
      <li class="lista" >
        <a href="../tesis/home/index.php">
          <span class="icono"><i class="fa fa-home"></i></span>
          <span class="titulo">Inicio</span>
        </a>
      </li>
      <li class="lista" data-color="#3c40c6">
        <a href="http://localhost/tesis/reporte/index.php">
          <span class="icono"><i class="fa fa-bar-chart"></i></span>
          <span class="titulo">Reporte</span>
        </a>
      </li>
      <li class="lista" data-color="#05c46b">
        <a href="http://localhost/tesis/diagnostico/index.php">
          <span class="icono"><i class="fa fa-camera"></i></span>
          <span class="titulo">Diagnostico y Control </span>
        </a>
      </li>
      <li class="lista activo" data-color="#0fbcf9">
          <a href="http://localhost/tesis/general/index.php">
            <span class="icono"><i class="fa fa-info"></i></span>
            <span class="titulo">Información</span>
          </a>
      </li>
      <li class="lista" data-color="#ffa801">
        <a href="http://localhost/tesis/parametrizacion/index.php">
          <span class="icono"><i class="fa fa-users"></i></span>
          <span class="titulo">Usuarios</span>
        </a>
      </li>
      <li class="lista" data-color="#ffa801">
        <a href="http://localhost/tesis/cuenta/index.php">
          <span class="icono"><i class="fa fa-user"></i></span>
          <span class="titulo">Mi perfil</span>
        </a>
      </li>
      <div class="indicador"></div>
    </ul>
  </div>
  </div>





<!-- Page Container -->
<div class="w3-container" style="width:90%;margin-top:90px;position: relative;top: 50px;background-color: #fff9;">  
  <!-- The Grid --><br>
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="avatar1.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Guayaquil, Ecuador</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> Abril 18,2000 </p><br>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button  class="w3-button w3-block  w3-left-align w3-hover-green"  style="background-color:lightyellow;color: black;"><i class="fa fa-circle-o-notch fa-fw w3-margin-right "></i> Hacienda</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button  class="w3-button w3-block w3-left-align w3-hover-green" style="background-color:lightyellow;color: black;"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Cultivos</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button class="w3-button w3-block  w3-left-align w3-hover-green"  style="background-color:lightyellow;color: black;"><i class="fa fa-users fa-fw w3-margin-right"></i> Trabajadores</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round  w3-border w3-theme-border w3-margin-bottom w3-hide-small " style="background-color:#229954;color: white;">
        <span onclick="this.parentElement.style.display='none'" class="w3-button  w3-display-topright w3-hover-red" style="background-color:#229954;color: white;">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <a href="http://www.climagri.eu/index.php/es/rotacion-de-cultivos" target="_blank" style="text-decoration: none;">La rotación de cultivos consiste en la siembra sucesiva de...Leer mas</a>
      </div>
    
    <!-- End Left Column -->
    </div>
    

    <!-- Middle Column -->
    <div class="w3-col m7">
      <div class="carousel-container " style=" margin-left:10px;margin-right: 10px; width: 95%;">
        <div class="carousel">
          <div class="slide"><img src="Zea.jpg"><div class="caption">El maíz (Zea  mays  L.)  es  el  único  cereal  que  puede ser utilizado como alimento ya sea para personas  o  animales,  en  cualquier  etapa  del desarrollo  de  la planta o producción. </div></div>
          <div class="slide"><img src="gusano-cogollero.png"><div class="caption">El gusano cogollero es una plaga que puede aparecer en el clima seco o el intenso verano, estos climas pueden lograr a ocasionar la invasión de esta plaga.</div></div>
          <div class="slide"><img src="ciclo.png"><div class="caption">El gusano cogollero tiene la fase de huevecillo que es de (3 a 5 días), fase de larva que consta
          de 6 estadios entre (14-22 días), pupa que es de (7 a 13 días) y por ultimo adulto para encontrarse desarrollado completamente es de 24 a 40 días.</div></div>
          <div class="slide"><img src="Gusano.jpg"><div class="caption">El gusano esta desarrollado completo entre los 14 a 22 días después de a ver nacido las larvas y este gusano se alimenta de las hojas las cuales se pueden observar perforaciones en las hojas esta fase puede llegar hasta dejar solo el tallo de la planta.</div></div>
          <div class="slide"><img src="larva.jpg"><div class="caption">Esta fase de larvas neonatas se encuentran de manera cativas en el cultivo presentan una cabeza grande y su color varia mediante van creciendo el tamaño de las larvas son de 1 y 1,5 mm de longitud, las larvas recién nacidas son caníbales.</div></div>
          <div class="slide"><img src="gusano3.jpg"><div class="caption">El gusano esta desarrollado completo entre los 14 a 22 días después de a ver nacido las larvas y este gusano se alimenta de las hojas las cuales se pueden observar perforaciones en las hojas esta fase puede llegar hasta dejar solo el tallo de la planta.</div></div><div class="slide"><img src="Daños.jpg"><div class="caption">En el maíz, el gusano cogollero se alimenta generalmente del follaje, de forma ocasional llega alimentarse del elote; como larva, penetra el cogollo de plantas pequeñas  preferentemente de 10 a 60 cm de altura, su presencia se detecta al observar hojas perforadas.</div></div>
          <div class="slide"><img src="Escala.jpg"><div class="caption">Escala de los daños que ocasiona el gusano cogollero en la producción de maíz.</div></div>
          <div class="slide"><img src="Control.jpg"><div class="caption">Los controles que se puede timar en cuenta para combatir al gusano cogollero en el maíz.</div></div>
        </div>
        <div class="carousel-controls">
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
      </div>   
    <!-- End Middle Column -->
</div>
    
    <!-- Right Column -->
    <div class="w3-col m2">

      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <br>
          <form  action="http://localhost/tesis/" method="post">
            <input type="submit" class="w3-hover-red" name="btncerrar" style="background-color:#229954;color: white;cursor: pointer;width: 100%;height:100% ;padding: 10px;font-size: 15px;" value="Cerrar sesión">
          </form>
        </div><br>
      </div>
      <br>

      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container"><br>
          <img src="pupa.jpg" width="200px"><br><br>
          <p><button class="w3-button w3-block w3-hover-green " style="background-color:black;color:white;"> <a href='https://www.gob.mx/cms/uploads/attachment/file/635234/Gusano_cogollero_en_ma_z_y_arroz.pdf'target="_blank"> Info </a> </button></p><br>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <img src="mariposa.jpg" width="200px"><br><br>
          <p><button class="w3-button w3-block w3-hover-green " style="background-color:black;color:white;"><a href='https://www.croplifela.org/es/plagas/listado-de-plagas/gusano-cogollero'target="_blank">Info</a></button></p><br>
        </div>
      </div>
      </div>
      <br>
      
      
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
      
<footer class="new_footer_area bg_color">
            <div class="new_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Contactos:</h3>
                                <div class="f_social_icon">
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-whatsapp"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-7">
                            <p class="mb-0 f_400">© copyright 2023 todos los derechos reservados.</p>
                        </div>
                        <div class="col-lg-6 col-sm-5 text-right">
                            <p>Hacienda <i class="icon_heart"></i> <a href="#" target="_blank">Mariscal</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<!-- End Page Container -->
</div>
<br>

 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>








  <script>
    const list = document.querySelectorAll('.lista');
    function activoClass(){
      list.forEach((item) => 
      item.classList.remove('activo'));
      this.classList.add('activo');
    }
    list.forEach((item) => 
    item.addEventListener('click', activoClass));
  </script>
  <script>
    /**
     * Array con las imagenes y enlaces que se iran mostrando en la web
     */
    var imagenes=new Array(
        ['Zea.jpg','Zea.jpg'],
        ['gusano-cogollero.png','gusano-cogollero.png'],
        ['ciclo.png','ciclo.png'],
        ['Gusano.jpg','Gusano.jpg']
    );
    var contador=0;
 
    /**
     * Funcion para cambiar la imagen y link
     */
    function rotarImagenes()
    {
        // cambiamos la imagen y la url
        contador++
        document.getElementById("imagen").src=imagenes[contador%imagenes.length][0];
        document.getElementById("link").href=imagenes[contador%imagenes.length][1];
    }
 
    /**
     * Función que se ejecuta una vez cargada la página
     */
    onload=function()
    {
        // Cargamos una imagen aleatoria
        rotarImagenes();
 
        // Indicamos que cada 5 segundos cambie la imagen
        setInterval(rotarImagenes,5000);
    }
</script>
<script>src="script.js"<</script>
</body>
</html>
