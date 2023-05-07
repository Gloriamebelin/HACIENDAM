<!doctype html>
<html lang="en">
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
    background: #ABEBC6;
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
    width: 80px;
    height: 80px;
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
    transition: 0.5s;
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
    transition: 0.5s;
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
    transition: 0.5s;
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
        <a href="http://localhost/tesis/home/index.php">
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
          <span class="titulo">Diagnostico</span>
        </a>
      </li>
      <li class="lista" data-color="#0fbcf9">
          <a href="http://localhost/tesis/general/index.php">
            <span class="icono"><i class="fa fa-info"></i></span>
            <span class="titulo">Información</span>
          </a>
      </li>
      <li class="lista activo" data-color="#ffa801">
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
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p><br>
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
      <div class="w3-container w3-card w3-white w3-round " style=" margin-left:10px;margin-right: 10px;">
        <html>
        <head>
          <title>Registro de Usuario</title>
          <link rel="stylesheet" type="text/css" href="styles.css">
        </head>
        <body>
          <h2>Registro de Usuario</h2>
          <form id="registroForm">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" required>
            <br>
            <label for="fecha_de_nacimiento">Fecha de Nacimiento:</label>
            <input type="text" id="fecha_de_nacimiento" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" required>
            <br>
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" required>
            <br>
            <label for="contraseña">Confirmar contraseña:</label>
            <input type="password" id="contraseña" required>
            <br>

            <button type="submit">Registrarse</button>
          </form>
          <script src="script.js"></script>

          
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="avatar1.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">16 min</span>
        <h4>Jane Doe</h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-button w3-margin-bottom w3-hover-green" style="background-color:black;color: white"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-margin-bottom w3-hover-blue" style="background-color:black;color: white"><i class="fa fa-comment"></i>  Comment</button> 
      </div>  

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="mujer.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
        <span class="w3-right w3-opacity">32 min</span>
        <h4>Angie Jane</h4><br>
        <hr class="w3-clear">
        <p>Have you seen this?</p>
        <img src="gusano3.jpg" style="width:100%" class="w3-margin-bottom">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-button w3-margin-bottom w3-hover-green" style="background-color:black;color: white"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-margin-bottom w3-hover-blue" style="background-color:black;color: white"><i class="fa fa-comment"></i>  Comment</button> 
      </div> 

      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">

      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <br>
          <form  action="http://localhost/tesis/" method="post">
            <input type="submit" class="w3-hover-red" name="btncerrar" style="background-color:#229954;color: white;cursor: pointer;width: 90%;padding: 5px;" value="Cerrar sesión">
          </form>
        </div><br>
      </div>
      <br>

      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container"><br>
          <img src="analitica.png" width="150px"><br><br>
          <p><button class="w3-button w3-block w3-hover-green " style="background-color:black;color:white;">Info</button></p><br>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <img src="analitica.png" width="150px"><br><br>
          <p><button class="w3-button w3-block w3-hover-green " style="background-color:black;color:white;">Info</button></p><br>
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
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-linkedin"></a>
                                    <a href="#" class="fab fa-pinterest"></a>
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
</body>
</html>
