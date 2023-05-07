document.getElementById('registroForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Evita el envío del formulario

  // Obtener los valores ingresados por el usuario
  var nombre = document.getElementById('nombre').value;
    var nombre = document.getElementById('fecha_naci').value;
  var email = document.getElementById('email').value;
  var contraseña = document.getElementById('contraseña').value;

  // Aquí puedes realizar validaciones adicionales antes de enviar los datos al servidor

  // Crear objeto de datos del usuario
  var usuario = {
    nombre: nombre,
    fecha de nacimiento: fecha_nac
    email: email,
    contraseña: contraseña
  };

  // Aquí puedes realizar una petición al servidor para guardar los datos del usuario
  // por ejemplo, utilizando AJAX o Fetch API

  // Ejemplo de impresión en consola
  console.log(usuario);

  // Limpiar los campos del formulario
  document.getElementById('nombre').value = '';
  document.getElementById('email').value = '';
  document.getElementById('contraseña').value = '';
});
