<?php 
    $s="localhost";
    $u="root";
    $p="";
    $db="mariscal";
    $conexion= new mysqli($s,$u,$p,$db);

    $result = mysqli_query($conexion, "SELECT COUNT(*) FROM usuario");
    $row = mysqli_fetch_row($result);
    $num_users = $row[0];

    $result1 = mysqli_query($conexion, "SELECT COUNT(*) FROM imagenes_plaga");
    $row1 = mysqli_fetch_row($result1);
    $num_imagenes = $row1[0];

    $result2 = mysqli_query($conexion, "SELECT COUNT(*) FROM produccion");
    $row2 = mysqli_fetch_row($result2);
    $num_produccion= $row2[0];

    $result3 = mysqli_query($conexion, "SELECT COUNT(*) FROM usuario Where admin=1");
    $row3 = mysqli_fetch_row($result3);
    $num_admin= $row3[0];


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
<script src="https://kit.fontawesome.com/2c88275bf6.js" crossorigin="anonymous"></script>
  <script type="module" src="javascript.js"></script>
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

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
    transition: 0.2s;
    color: #141E30;
  }
  .navegacion ul li.activo a .icono{
    transform: translateY(-35px);
    color: white;
  }
  .navegacion ul li a .titulo{
    position: absolute;   
    font-size: 0.75em;
    color: #141E30;
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
    background: #141E30;
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
    border: 1px solid #fff;
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


.flex-container {
  position: relative;
  padding-top: 10%;
  width: 100%;
  padding-left: 12px;
  display: flex;
  flex-wrap: wrap;
  background-color: #D5F5E3;
}

.numero1{

  padding-top: 10px;
  background-color: #f0f;
  width: 320px;
  height: 50px;
  margin: 5px;
  text-align: center;
  font-size: 20px;
  box-shadow: 2px 2px  #141E30;border: 1px solid #141E30;
}
.numero2{
  padding-top: 10px;
  background-color: #0f0;
  width: 320px;
  height: 50px;
  margin: 5px;
  text-align: center;
  font-size: 20px;
  box-shadow: 2px 2px  #141E30;border: 1px solid #141E30;
}
.numero3{
  padding-top: 10px;
  background-color: #0ff;
  width: 320px;
  height: 50px;
  margin: 5px;
  text-align: center;
  font-size: 20px;
  box-shadow: 2px 2px  #141E30;border: 1px solid #141E30;
}
.numero4{
  padding-top: 10px;
  background-color: #ff0;
  width: 320px;
  height: 50px;
  margin: 5px;
  text-align: center;
  font-size: 20px;
  box-shadow: 2px 2px  #141E30;border: 1px solid #141E30;
}
.grafico{
  background-color: #fff;
  width: 320px;
  height: 390px;
  margin: 5px;
  text-align: center;
  font-size: 30px;
  box-shadow: 2px 2px  #141E30;border: 1px solid #141E30;
}

.padding{
  width: 20px;
  height: 50px;
}

.numero1 > i,.numero2 > i,.numero3 > i,.numero4 > i{
  color: #fff;
}

.etiqueta{
  margin: auto;
  background-color: #eee;
  color: #000;

}
.pdf{
  cursor: pointer;
  margin: auto;
  font-size: 18px;
  width: 100%;
  background-color: #0f0;
  color: #000;
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
      <li class="lista activo" data-color="#3c40c6">
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



<div class="flex-container">
  <div class="numero1" title="NUMERO DE USUARIOS"><i class="fa fa-users"></i><?php echo" ".$num_users; ?></div>
  <div class="numero2" title="NUMERO DE IMAGENES"><i class="fa fa-image"></i><?php echo" ".$num_imagenes; ?></div>
  <div class="numero3" title="NUMERO DE PRODUCCIONES DE MAIZ"><i class="fa fa-shopping-cart"></i><?php echo" ".$num_produccion; ?></div>
  <div class="numero4" title="NUMERO DE ADMINISTRADORES"><i class="fa fa-star"></i><?php echo" ".$num_admin; ?></div>
  <div class="grafico"><h5 class="etiqueta">loco</h5><canvas id="myChart" style="width:50px;height:50px"></canvas><button class="pdf" id="download-pdf">Ver PDF</button></div>
  <div class="grafico"><h5 class="etiqueta">loco</h5><canvas id="myChart1" style="width:50px;height:50px"></canvas><button class="pdf" id="download-pdf1">Ver PDF</button></div>
  <div class="grafico"><h5 class="etiqueta">loco</h5><canvas id="myChart2" style="width:50px;height:50px"></canvas><button class="pdf" id="download-pdf2">Ver PDF</button></div>
  <div class="grafico"><h5 class="etiqueta">loco</h5><canvas id="myChart3" style="width:50px;height:50px"></canvas><button class="pdf" id="download-pdf3">Ver PDF</button></div>
  <div class="grafico"><h5 class="etiqueta">loco</h5><canvas id="myChart4" style="width:50px;height:50px"></canvas><button class="pdf"  id="download-pdf4">Ver PDF</button></div>
  <div class="grafico"><h5 class="etiqueta">loco</h5><canvas id="myChart5" style="width:50px;height:50px"></canvas><button class="pdf" id="download-pdf5">Ver PDF</button></div>
  <div class="grafico"><h5 class="etiqueta">loco</h5><canvas id="myChart6" style="width:50px;height:50px"></canvas><button class="pdf" id="download-pdf6">Ver PDF</button></div>
  <div class="grafico"><h5 class="etiqueta">loco</h5><canvas id="myChart7" style="width:50px;height:50px"></canvas><button class="pdf" id="download-pdf7">Ver PDF</button></div>
  <div class="grafico"><h5 class="etiqueta">loco</h5><canvas id="myChart8" style="width:50px;height:50px"></canvas><button class="pdf" id="download-pdf8">Ver PDF</button></div>
  <div class="grafico"><h5 class="etiqueta">loco</h5><canvas id="myChart9" style="width:50px;height:50px"></canvas><button class="pdf" id="download-pdf9">Ver PDF</button></div>
  <div class="grafico"><h5 class="etiqueta">loco</h5><canvas id="myChart10" style="width:50px;height:50px"></canvas><button class="pdf" id="download-pdf10">Ver PDF</button></div>
  <div class="grafico"><h5 class="etiqueta">loco</h5><canvas id="myChart11" style="width:50px;height:50px"></canvas><button class="pdf" id="download-pdf11">Ver PDF</button></div>
  <div class="padding"></div>
</div>



 
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
      type: 'line',
      data: {
        labels: [1,2,3,4,5], // aquí irán las etiquetas de los ejes X
        datasets: [{
          label: 'My Data',
          data: [122,133,444,435,44], // aquí irán los datos del eje Y
          backgroundColor: 'rgba(255, 99, 132)',
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
    document.getElementById('download-pdf').addEventListener('click', function() {
      var canvas = document.getElementById('myChart');
      var imgData = canvas.toDataURL();
      var doc = new jsPDF();
      doc.addImage(imgData, "JPEG", 10, 10, 150, 140);
      var pdfWindow = window.open("");
      pdfWindow.document.write("<iframe width='100%' height='100%' src='" + doc.output('datauristring') + "'></iframe>");
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
    document.getElementById('download-pdf1').addEventListener('click', function() {
      var canvas = document.getElementById('myChart1');
      var imgData = canvas.toDataURL();
      var doc = new jsPDF();
      doc.addImage(imgData, "JPEG", 10, 10, 150, 140);
      var pdfWindow = window.open("");
      pdfWindow.document.write("<iframe width='100%' height='100%' src='" + doc.output('datauristring') + "'></iframe>");
    });



    const ctx2 = document.getElementById('myChart2').getContext('2d');
    const chart2 = new Chart(ctx2, {
      type: 'pie',
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
    document.getElementById('download-pdf2').addEventListener('click', function() {
      var canvas = document.getElementById('myChart2');
      var imgData = canvas.toDataURL();
      var doc = new jsPDF();
      doc.addImage(imgData, "JPEG", 10, 10, 150, 140);
      var pdfWindow = window.open("");
      pdfWindow.document.write("<iframe width='100%' height='100%' src='" + doc.output('datauristring') + "'></iframe>");
    });






    const ctx3 = document.getElementById('myChart3').getContext('2d');
    const chart3 = new Chart(ctx3, {
      type: 'polarArea',
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
    document.getElementById('download-pdf3').addEventListener('click', function() {
      var canvas = document.getElementById('myChart3');
      var imgData = canvas.toDataURL();
      var doc = new jsPDF();
      doc.addImage(imgData, "JPEG", 10, 10, 150, 140);
      var pdfWindow = window.open("");
      pdfWindow.document.write("<iframe width='100%' height='100%' src='" + doc.output('datauristring') + "'></iframe>");
    });





    const ctx4 = document.getElementById('myChart4').getContext('2d');
    const chart4 = new Chart(ctx4, {
      type: 'pie',
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
    document.getElementById('download-pdf4').addEventListener('click', function() {
      var canvas = document.getElementById('myChart4');
      var imgData = canvas.toDataURL();
      var doc = new jsPDF();
      doc.addImage(imgData, "JPEG", 10, 10, 150, 140);
      var pdfWindow = window.open("");
      pdfWindow.document.write("<iframe width='100%' height='100%' src='" + doc.output('datauristring') + "'></iframe>");
    });



    const ctx5 = document.getElementById('myChart5').getContext('2d');
    const chart5 = new Chart(ctx5, {
      type: 'doughnut',
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
    document.getElementById('download-pdf5').addEventListener('click', function() {
      var canvas = document.getElementById('myChart5');
      var imgData = canvas.toDataURL();
      var doc = new jsPDF();
      doc.addImage(imgData, "JPEG", 10, 10, 150, 140);
      var pdfWindow = window.open("");
      pdfWindow.document.write("<iframe width='100%' height='100%' src='" + doc.output('datauristring') + "'></iframe>");
    });




    const ctx6 = document.getElementById('myChart6').getContext('2d');
    const chart6 = new Chart(ctx6, {
      type: 'line',
      data: {
        labels: [10,20,20], // aquí irán las etiquetas de los ejes X
        datasets: [{
          label: 'My Data',
          data: [122,133,444], // aquí irán los datos del eje Y
          backgroundColor: [
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
    document.getElementById('download-pdf6').addEventListener('click', function() {
      var canvas = document.getElementById('myChart6');
      var imgData = canvas.toDataURL();
      var doc = new jsPDF();
      doc.addImage(imgData, "JPEG", 10, 10, 150, 140);
      var pdfWindow = window.open("");
      pdfWindow.document.write("<iframe width='100%' height='100%' src='" + doc.output('datauristring') + "'></iframe>");
    });





    const ctx7 = document.getElementById('myChart7').getContext('2d');
    const chart7 = new Chart(ctx7, {
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
    document.getElementById('download-pdf7').addEventListener('click', function() {
      var canvas = document.getElementById('myChart7');
      var imgData = canvas.toDataURL();
      var doc = new jsPDF();
      doc.addImage(imgData, "JPEG", 10, 10, 150, 140);
      var pdfWindow = window.open("");
      pdfWindow.document.write("<iframe width='100%' height='100%' src='" + doc.output('datauristring') + "'></iframe>");
    });






    const ctx8 = document.getElementById('myChart8').getContext('2d');
    const chart8 = new Chart(ctx8, {
      type: 'doughnut',
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
    document.getElementById('download-pdf8').addEventListener('click', function() {
      var canvas = document.getElementById('myChart8');
      var imgData = canvas.toDataURL();
      var doc = new jsPDF();
      doc.addImage(imgData, "JPEG", 10, 10, 150, 140);
      var pdfWindow = window.open("");
      pdfWindow.document.write("<iframe width='100%' height='100%' src='" + doc.output('datauristring') + "'></iframe>");
    });



    const ctx9 = document.getElementById('myChart9').getContext('2d');
    const chart9 = new Chart(ctx9, {
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
    document.getElementById('download-pdf9').addEventListener('click', function() {
      var canvas = document.getElementById('myChart9');
      var imgData = canvas.toDataURL();
      var doc = new jsPDF();
      doc.addImage(imgData, "JPEG", 10, 10, 150, 140);
      var pdfWindow = window.open("");
      pdfWindow.document.write("<iframe width='100%' height='100%' src='" + doc.output('datauristring') + "'></iframe>");
    });



    const ctx10 = document.getElementById('myChart10').getContext('2d');
    const chart10 = new Chart(ctx10, {
      type: 'line',
      data: {
        labels: [10,20,20], // aquí irán las etiquetas de los ejes X
        datasets: [{
          label: 'My Data',
          data: [122,133,444], // aquí irán los datos del eje Y
          backgroundColor: [
                'rgba(54, 162, 235)'
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
    document.getElementById('download-pdf10').addEventListener('click', function() {
      var canvas = document.getElementById('myChart10');
      var imgData = canvas.toDataURL();
      var doc = new jsPDF();
      doc.addImage(imgData, "JPEG", 10, 10, 150, 140);
      var pdfWindow = window.open("");
      pdfWindow.document.write("<iframe width='100%' height='100%' src='" + doc.output('datauristring') + "'></iframe>");
    });




    const ctx11 = document.getElementById('myChart11').getContext('2d');
    const chart11 = new Chart(ctx11, {
      type: 'pie',
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
    document.getElementById('download-pdf11').addEventListener('click', function() {
      var canvas = document.getElementById('myChart11');
      var imgData = canvas.toDataURL();
      var doc = new jsPDF();
      doc.addImage(imgData, "JPEG", 10, 10, 150, 140);
      var pdfWindow = window.open("");
      pdfWindow.document.write("<iframe width='100%' height='100%' src='" + doc.output('datauristring') + "'></iframe>");
    });
  </script>
</body>
</html>
