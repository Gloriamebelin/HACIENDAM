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
<link rel="shortcut icon" href="images/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/2c88275bf6.js" crossorigin="anonymous"></script>
  <script type="module" src="javascript.js"></script>
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
  <style>
    :root {
    --dark-cyan: hsl(185, 75%, 39%);
    --very-dark-desaturated: hsl(229, 23%, 23%);
    --dark-grayish-blue: hsl(227, 10%, 46%);
    --dark-gray: hsl(0, 0%, 59%);
}
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
    background: "#ABEBC6";
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




.contenido{
  position: relative;
  padding-top: 12%;
  height: 50%;
  width: 100%;
  height: 100vh;
  background-color: #ABEBC6;
}
.usuario{

  background-color: #D5F5E3;
  width: 80%;
  height: 70vh;
  margin-top: 300px;
  text-align: center;
  margin: auto;
  font-size: 20px;
  box-shadow: 2px 2px  #141E30;border: 1px solid #141E30;
  overflow: auto;
}
  
input{
  width: 80%;
  float: right;
  margin: 20px;
}
h5{
 margin: 20px;
 display: inline;
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
      <li class="lista" data-color="#ffa801">
        <a href="http://localhost/tesis/parametrizacion/index.php">
          <span class="icono"><i class="fa fa-users"></i></span>
          <span class="titulo">Usuarios</span>
        </a>
      </li>
      <li class="lista activo" data-color="#ffa801">
        <a href="http://localhost/tesis/cuenta/index.php">
          <span class="icono"><i class="fa fa-user"></i></span>
          <span class="titulo">Mi perfil</span>
        </a>
      </li>
      <div class="indicador"></div>
    </ul>
  </div>
  </div>




  <div class="contenido">
    <div class="usuario">
      
      <?php
        $s="localhost";
        $u="root";
        $p="";
        $db="mariscal";
        $conn = new mysqli($s, $u, $p, $db);

        // Consulta para obtener los datos del usuario específico
        $id_usuario = 1;
        $result = mysqli_query($conn, "SELECT * FROM usuario WHERE id_usu = $id_usuario");

        while ($row = mysqli_fetch_array($result)) {
        ?>
        <table class="user-table">
          <tr>
            <td class="label-cell"><h5>NOMBRE:</h5></td>
            <td><input type="text" value="<?php echo $row['nombre_usu']; ?>" readonly></td>
          </tr>
          <tr>
            <td class="label-cell">FECHA DE NACIMIENTO:</td>
            <td><input type="fecha_de_nacimiento" value="<?php echo $row['fecha_na_usu']; ?>" readonly></td>
          </tr>
          <tr>
            <td class="label-cell">TELEFONO:</td>
            <td><input type="number" value="<?php echo $row['telefono_usu']; ?>" readonly></td>
          </tr>
          <tr>
            <td class="label-cell">EMAIL:</td>
            <td><input type="email" value="<?php echo $row['correo_usu']; ?>" readonly></td>
          </tr>
          <tr>
            <td class="label-cell">DIRECCIOÓN:</td>
            <td><input type="direccion" value="<?php echo $row['dirección']; ?>" readonly></td>
          </tr>
          <tr>
            <td class="label-cell">ADMIN:</td>
            <td><input type="admin" value="<?php echo $row['admin']; ?>" readonly></td>
          </tr>
        </table>

        <?php  }

                ?>

    </div>
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
</body>
</html>
