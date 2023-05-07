<?php 

    $s="localhost";
    $u="root";
    $p="";
    $db="mariscal";
    $conn = new mysqli($s, $u, $p, $db);
//edad
    $sql = "SELECT fecha_na_usu FROM usuario WHERE id_usu =1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $birthdate = $row['fecha_na_usu'];
        }
    } else {
        echo "0 results";
    }

//correo
    $sql1 = "SELECT correo_usu FROM usuario WHERE id_usu =1";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
        // Presentar datos de cada fila
        while($row1 = $result1->fetch_assoc()) {
            $correopre = $row1['correo_usu'];
        }
    } else {
        echo "0 resultados";
    }

$sql = "SELECT * FROM usuario ";
$result = $conn->query($sql);
$usuariost = $result->num_rows;


$sql1 = "SELECT * FROM usuario WHERE admin=1";
$result1 = $conn->query($sql1);
$usuariosa = $result1->num_rows;


$sql2 = "SELECT * FROM usuario WHERE admin=0";
$result2 = $conn->query($sql2);
$usuariosn = $result2->num_rows;




?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Css Menu V12</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel="stylesheet" href="estilos1.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<script src="https://kit.fontawesome.com/2c88275bf6.js" crossorigin="anonymous"></script>
  <script type="module" src="javascript.js"></script>
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
*
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
    transition: 0.2s;
    color: #141e30;
  }
  .navegacion ul li.activo a .icono{
    transform: translateY(-35px);
    color: white;
  }
  .navegacion ul li a .titulo{
    position: absolute;   
    font-size: 0.75em;
    color: #141e30;
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


   .animate-border {
  position: relative;
  display: block;
  width: 115px;
  height: 3px;
  background: #007bff; }

.animate-border:after {
  position: absolute;
  content: "";
  width: 35px;
  height: 3px;
  left: 0;
  bottom: 0;
  border-left: 10px solid #fff;
  border-right: 10px solid #fff;
  -webkit-animation: animborder 2s linear infinite;
  animation: animborder 2s linear infinite; }

@-webkit-keyframes animborder {
  0% {
    -webkit-transform: translateX(0px);
    transform: translateX(0px); }
  100% {
    -webkit-transform: translateX(113px);
    transform: translateX(113px); } }

@keyframes animborder {
  0% {
    -webkit-transform: translateX(0px);
    transform: translateX(0px); }
  100% {
    -webkit-transform: translateX(113px);
    transform: translateX(113px); } }

.animate-border.border-white:after {
  border-color: #fff; }

.animate-border.border-yellow:after {
  border-color: #F5B02E; }

.animate-border.border-orange:after {
  border-right-color: #007bff;
  border-left-color: #007bff; }

.animate-border.border-ash:after {
  border-right-color: #EEF0EF;
  border-left-color: #EEF0EF; }

.animate-border.border-offwhite:after {
  border-right-color: #F7F9F8;
  border-left-color: #F7F9F8; }

/* Animated heading border */
@keyframes primary-short {
  0% {
    width: 15%; }
  50% {
    width: 90%; }
  100% {
    width: 10%; } }

@keyframes primary-long {
  0% {
    width: 80%; }
  50% {
    width: 0%; }
  100% {
    width: 80%; } } 

.dk-footer {
  padding: 75px 0 0;
  background-color: #151414;
  position: relative;
  }
  .dk-footer .contact-us {
    margin-top: 0;
    margin-bottom: 30px;
    padding-left: 80px; }
    .dk-footer .contact-us .contact-info {
      margin-left: 50px; }
    .dk-footer .contact-us.contact-us-last {
      margin-left: -80px; }
  .dk-footer .contact-icon i {
    font-size: 24px;
    top: -15px;
    position: relative;
    color:#007bff; }

.dk-footer-box-info {
  position: absolute;
  top: -50px;
  background: #202020;
  padding: 40px;
  z-index: 0; }
  .dk-footer-box-info .footer-social-link h3 {
    color: #fff;
    font-size: 24px;
    margin-bottom: 25px; }
  .dk-footer-box-info .footer-social-link ul {
    list-style-type: none;
    padding: 0;
    margin: 0; }
  .dk-footer-box-info .footer-social-link li {
    display: inline-block; }
  .dk-footer-box-info .footer-social-link a i {
    display: block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    background: #000;
    margin-right: 5px;
    color: #fff; }
    .dk-footer-box-info .footer-social-link a i.fa-facebook {
      background-color: #3B5998; }
    .dk-footer-box-info .footer-social-link a i.fa-twitter {
      background-color: #55ACEE; }
    .dk-footer-box-info .footer-social-link a i.fa-google-plus {
      background-color: #DD4B39; }
    .dk-footer-box-info .footer-social-link a i.fa-linkedin {
      background-color: #0976B4; }
    .dk-footer-box-info .footer-social-link a i.fa-whatsapp {
      background-color: #0f0; }

.footer-awarad {
  margin-top: 285px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 100%;
  -moz-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center; }
  .footer-awarad p {
    color: #fff;
    font-size: 24px;
    font-weight: 700;
    margin-left: 20px;
    padding-top: 15px; }

.footer-info-text {
  margin: 26px 0 32px; }

.footer-left-widget {
  padding-left: 80px; }

.footer-widget .section-heading {
  margin-bottom: 35px; }

.footer-widget h3 {
  font-size: 24px;
  color: #f8f8ff;
  position: relative;
  margin-bottom: 15px;
  max-width: -webkit-fit-content;
  max-width: -moz-fit-content;
  max-width: fit-content; }

.footer-widget ul {
  width: 50%;
  float: left;
  list-style: none;
  margin: 0;
  padding: 0; }

.footer-widget li {
  margin-bottom: 18px; }

.footer-widget p {
  margin-bottom: 27px; }

.footer-widget a {
  color: #878787;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s; }
  .footer-widget a:hover {
    color: #007bff; }

.footer-widget:after {
  content: "";
  display: block;
  clear: both; }

.dk-footer-form {
  position: relative; }
  .dk-footer-form input[type=text] {
    padding: 14px 28px;
    border-radius: 50px;
    background: #2E2E2E;
    border: 1px solid #2E2E2E; }
  .dk-footer-form input::-webkit-input-placeholder, .dk-footer-form input::-moz-placeholder, .dk-footer-form input:-ms-input-placeholder, .dk-footer-form input::-ms-input-placeholder, .dk-footer-form input::-webkit-input-placeholder {
    color: #878787;
    font-size: 14px; }
  .dk-footer-form input::-webkit-input-placeholder, .dk-footer-form input::-moz-placeholder, .dk-footer-form input:-ms-input-placeholder, .dk-footer-form input::-ms-input-placeholder, .dk-footer-form input::placeholder {
    color: #878787;
    font-size: 14px; }
  .dk-footer-form button[type=submit] {
    position: absolute;
    top: 0;
    right: 0;
    padding: 12px 24px 12px 17px;
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    border: 1px solid #007bff;
    background: #007bff;
    color: #fff; }
  .dk-footer-form button:hover {
    cursor: pointer; }

/* ==========================

    Contact

=============================*/
.contact-us {
  position: relative;
  z-index: 2;
  margin-top: 65px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center; }

.contact-icon {
  position: absolute; }
  .contact-icon i {
    font-size: 36px;
    top: -5px;
    position: relative;
    color: #007bff; }

.contact-info {
  margin-left: 75px;
  color: #fff; }
  .contact-info h3 {
    font-size: 20px;
    color: #fff;
    margin-bottom: 0; }

.copyright {
  padding: 28px 0;
  margin-top: 55px;
  background-color: #202020; }
  .copyright span,
  .copyright a {
    color: #878787;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear; }
  .copyright a:hover {
    color:#007bff; }

.copyright-menu ul {
  text-align: right;
  margin: 0; }

.copyright-menu li {
  display: inline-block;
  padding-left: 20px; }

.back-to-top {
  position: relative;
  z-index: 2; }
  .back-to-top .btn-dark {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    padding: 0;
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #2e2e2e;
    border-color: #2e2e2e;
    display: none;
    z-index: 999;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear; }
    .back-to-top .btn-dark:hover {
      cursor: pointer;
      background: #FA6742;
      border-color: #FA6742; }
Run Pen


Resources




#reloj{
  position: fixed;
  font-size: 55px;
  top: 93%;
  left: 92%;
  color: #000;
  text-shadow: 1px 1px 0px #000;
  text-align: center;
  text-transform: uppercase;
  display: inline-block;
}
#age{
  font-size: 14px;
  white-space: nowrap;
  overflow: hidden;
  line-height: 1;
  display: inline-block;
  color: #000;
}

h3{
  margin-left: 10%;
  font-size: 15px;
  white-space: nowrap;
  overflow: hidden;
  color: #000;
}

#text{
  min-width: 550px;
}

  </style>
</head>
<body>  
  <div class="contenedor">
  <div class="navegacion">
    <ul>
      <li class="lista activo" >
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
<div class="w3-container w3-content" style="max-width:1400px;margin-top:90px;position: relative;top: 50px;background-color: #fff9;">  
  <!-- The Grid --><br>
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container" style="box-shadow: 2px 2px  #141E30;border: 1px solid #141E30; ">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="avatar1.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <h3>Correo: <?php echo $correopre; ?></h3>

         <h3>Edad: <div id="age"></div></h3>

         <script type="text/javascript">
           const birthdate = "<?php echo $birthdate; ?>";
            const age = document.getElementById("age");

            setInterval(() => {
              const today = new Date();
              const years = today.getFullYear() - new Date(birthdate).getFullYear();
              age.innerText = years;
            }, 1000);
         </script>
         <h3>Nacimiento: <?php echo $birthdate; ?></h3><br>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white" >
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
      <div class="w3-container w3-display-container w3-round   w3-margin-bottom w3-hide-small " style="background-color:#229954;color: white">
        <span onclick="this.parentElement.style.display='none'" class="w3-button  w3-display-topright w3-hover-red" style="background-color:#229954;color: white;">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <a href="http://www.climagri.eu/index.php/es/rotacion-de-cultivos" target="_blank" style="color: #fff;text-decoration: none;">La rotación de cultivos consiste en la siembra sucesiva de...Leer mas</a>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7" >
      <div class="w3-container w3-card w3-white w3-round " style=" margin-left:10px;margin-right: 10px;box-shadow: 2px 2px  #141E30;border: 1px solid #141E30;overflow: hidden; ">
        <br><br>
        <div id="text" style="white-space: pre-wrap;"></div>
        <hr class="w3-clear">
          <div class="w3-row-padding" style="margin:0 -0px">
            <div class="w6-half">
              <script type="text/javascript">
  var text = "A continuación se presenta una tabla con información detallada sobre los ultimos 10 usuarios registrados en nuestro sistema. La tabla incluye información como el nombre de usuario, el correo electrónico y su numero de telefono. Estamos seguros de que esta información será útil para usted y esperamos que disfrute explorando los datos";
  var i = 0;
  var speed = 5;
  function typeWriter() {
    if (i < text.length) {
      document.getElementById("text").innerHTML += text.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
  }
  typeWriter();
</script>
              <?php 
          $result2 = mysqli_query($conn, "SELECT nombre_usu,correo_usu, telefono_usu FROM usuario LIMIT 10");
          echo "<table style='width:100%;margin:auto'>";
          echo "<tr style='text-align: center;'>
                    <th style>Usuario</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                  </tr>";
          while ($row2 = mysqli_fetch_assoc($result2)) {
              echo "<tr style='text-align: center;'>
                      <td>{$row2['nombre_usu']}</td>
                      <td>{$row2['correo_usu']}</td>
                      <td>0{$row2['telefono_usu']}</td>
                    </tr>";
            }
          echo "</table >";

           ?>
          </div>
        </div><br>
        <button type="button" class="w3-button w3-margin-bottom w3-hover-green" style="background-color:black;color: white"><i class="fa fa-thumbs-up"></i>Administrar usuarios</button> 
      </div>
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">

      <div class="w3-card ">
        <div >
        
          <form  action="http://localhost/tesis/" method="post">
            <input type="submit" class="w3-hover-red" name="btncerrar" style="background-color:#229954;color: white;cursor: pointer;width: 100%;height:100% ;padding: 10px;font-size: 20px;" value="Cerrar sesión">
          </form>
        </div>
      </div>
      <br>

      <div class="w3-card w3-round w3-white w3-center" style="box-shadow: 2px 2px  #141E30;border: 1px solid #141E30; ">
        <div class="w3-container"><br>
          <div class="grafico"><canvas id="myChart" style="width:50px;height:50px"></canvas></div><br>
          <p><button class="w3-button w3-block w3-hover-green " style="background-color:black;color:white;"> <a href='http://localhost/tesis/reporte/index.php'> Más Graficós </a></button></p><br>
        </div>
      </div>
      <br>
      
      <div  style="color: #000;">
        <div class="w3-container" >
          <script >
            setInterval(() => {
              const reloj = document.getElementById("reloj");
              const date = new Date();
              reloj.innerText = date.toLocaleTimeString();
            }, 1000);
          </script>
          <div id="reloj" class="reloj"></div>
        </div>
      </div>
      <br>
      
      
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>

  <br>
<!-- Site footer -->


<footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="logot.png" alt="footer_logo" class="img-fluid">
                        </a>
                        <div class="footer-social-link">
                            <h3>Follow us</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                    <div class="footer-awarad">
                        <img src="images/icon/best.png" alt="">
                        <p>Best Design Company 2019</p>
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h4>Alfredo Baquerizo Moreno</h4>

                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    
                                </div>
                                <!-- End contact Icon -->

                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Cultivos</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">Maiz</a>
                                    </li>
                                    <li>
                                        <a href="#">Arroz</a>
                                    </li>
                                    <li>
                                        <a href="#">Cacao</a>
                                    </li>
                                    <li>
                                        <a href="#">Soya</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">Platano</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>Escribemos</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <p style="color: #fff;"><!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
                                Envianos un mensaje por whatsapp.</p>
                                <form action="#">
                                    <div class="form-row">
                                        <div class="col dk-footer-form">
                                            <input type="text" id="message" class="form-control" placeholder="hola">
                                            <button onclick="sendWhatsAppMessage()" style="background-color:#00f7;color:#fff;padding: 5px;margin: 5px;margin-left: 75%;border-radius: 3%;font-size: 17px;border: none;">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2019, Todos los derechos reservados Mariscal</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="#">salir</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->

        <!-- End Back to top -->
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
    const ctx = document.getElementById('myChart').getContext('2d');
    const chart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels:['Usuarios','Administradores'],
        datasets:[{
            label: 'Administradores',
            data: [
                <?php
                echo $usuariosn .','. $usuariosa;
                ?>           
                ],
          backgroundColor: [
                'rgba(255, 0, 90)',
                'rgba(10, 255, 50)'
                
            ],
            borderColor: 'rgba(0, 0, 0)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });





    const ctx1 = document.getElementById('myChart1').getContext('2d');
    const chart1 = new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: [10,20,20], // aquí irán las etiquetas de los ejes X
        datasets: [{
          label: 'My Data',
          data: [122,133,444], // aquí irán los datos del eje Y
          backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)'
            ],
            borderColor: 'rgba(0, 0, 0)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

  </script>
  <script>
  function sendWhatsAppMessage() {
    let message = document.getElementById("message").value;
    window.open("https://wa.me/593960293500?text=" + encodeURI(message));
  }
</script>
</body>
</html>

