

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background-image: url('fondo2.jpg');
  background-size: cover; 
}

.login-box {
  position: absolute;
  top: 55%;
  left: 30%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: #141e30;
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border: 3px solid #0A3B7D;
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;

}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -30px;
  left: 0;
  color: #03e9f4;
  font-size: 15px;
  padding: 9px;

}

.login-box form a {
  position: relative;
  display: inline-block;
  margin: auto;
  left: center;
  padding: 10px 20px;
  color: #fff;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a {
  background: #f53b57;
  color: #fff;
  border-radius: 5px;
  box-shadow:  20px solid #f53b57,

}

.login-box a span {
  position: absolute;
  display: block;
}

.entrar{
  background-color: #0000;
  margin: auto;
  text-align: center;
  border: none;
  font-family: sans-serif;
  font-size: 20px;
  color:#fff;
  cursor: pointer;
}
.boton{
  background-color: #0000;
  margin: auto;
  text-align: center;
  border: none;
  font-family: sans-serif;
  font-size: 20px;
  color:#fff;
  cursor: pointer;
}
.logo{
  position: absolute;
  font-size: 17px;
  top: 15%;
  left: 21%;
  width: 50px;
  padding: 40px;
  transform: translate(-50%, -50%);
}


.parrafo{
  position: absolute;
  font-family: SFProText-Medium, Helvetica, Arial, sans-serif;
  font-size: 20px;
  top: 55%;
  left: 75%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);

  border-radius: 10px;
}
p{
  color: #fff;
}
#text{
  color:#fff;
}



    </style>
</head>
<body>


 

    <div class="logo">
      <img src="logot.png" width="300px">
    </div>

    <div class="parrafo">
      <div id="text"></div>
    </div>

     <script type="text/javascript">
  var text = "La página web se enfoca en proporcionar una plataforma completa para la detección y el reconocimiento del gusano cogollero mediante la visión por computadora. Nos esforzamos por mantener actualizada la información sobre las últimas investigaciones y avances en el campo de la detección del gusano cogollero.";
  var i = 0;
  var speed = 20;
  function typeWriter() {
    if (i < text.length) {
      document.getElementById("text").innerHTML += text.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
  }
  typeWriter();
</script>
    <div class="login-box">
        <h2>Inicio de sesión</h2>
        <form class="formuinicio" action="index.php" method="post">
          <div class="user-box">
            <input type="text" name="username" required="">
            <label>Usuario</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="">
            <label>Contraseña</label>
          </div>
          <div class="boton">
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit"  name="btnentrar" value="Entrar" class="entrar">
          </a>
          </div>
        </form>
      </div>

      
</body>
</html>
<?php 
    $s="localhost";
    $u="root";
    $p="";
    $db="mariscal";
    $conexion= new mysqli($s,$u,$p,$db);
    
if(isset($_POST["btnentrar"]))
    {
      $usuar=$_POST["username"];
      $contrase=$_POST["password"];
       $consulta="SELECT COUNT(*) as contar FROM usuario WHERE nombre_usu='$usuar' AND contra_usu='$contrase'";
       $resultado= mysqli_query($conexion,$consulta);
      $array = mysqli_fetch_array($resultado);

      $sql = "SELECT COUNT(*) as contar1 FROM usuario WHERE nombre_usu='$usuar' AND contra_usu='$contrase' AND admin=1";
      $result = mysqli_query($conexion,$sql);
      $array1 = mysqli_fetch_array($result);

      if($array['contar']>0){
        if($array1[$contar1]){
          $_SESSION['username'] = $usuar;
          $_SESSION['admin'] ='admin';
          echo "<script>window.location='./tesis/home/' </script>";
        }
        else{
          $_SESSION['username'] = $usuar;
          $_SESSION['trabajador'] = 'trabajador';
          echo "<script>window.location='./tesis/home/' </script>";
        }
      }else{
        echo "<script> alert('USUARIO no existe o CLAVE A incorrecta'); window.location='index.php' </script>";

      }
    }