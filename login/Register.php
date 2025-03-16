<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('../public/imagenes/Registro.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <form class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-xl font-bold text-center mb-4">Crear una cuenta</h2>
        
        <label class="block mb-2">Nombre de usuario</label>
        <input type="text" id="username" class="w-full p-2 border rounded mb-3" placeholder="JohnDoe">
        
        <label class="block mb-2">Email</label>
        <input type="email" id="email" class="w-full p-2 border rounded mb-3" placeholder="correo@example.com">
        
        <label class="block mb-2">Contraseña</label>
        <input type="password" id="password" class="w-full p-2 border rounded mb-3" placeholder="••••••••">
        
        <label class="block mb-2">Confirmar Contraseña</label>
        <input type="password" id="confirmPassword" class="w-full p-2 border rounded mb-3" placeholder="••••••••">
        
        <button type="button" id="btn_guardar" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-700">Registrar</button>
        
        <div id="respuesta" class="mt-3 text-center text-red-500"></div>
    </form>
    
    <script>
       $(document).ready(function() {
    $('#btn_guardar').click(function () {
        var username = $('#username').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var confirmPassword = $('#confirmPassword').val();

        if (username === "" || email === "" || password === "" || confirmPassword === "") {
            $('#respuesta').text('Todos los campos son obligatorios');
            return;
        }

        if (password !== confirmPassword) {
            $('#respuesta').text('Las contraseñas no coinciden');
            return;
        }

        $.get('/sistema-de-parqueo/usuarios/controller_create.php', { 
            nombres: username,  // El backend espera 'nombres', no 'username'
            email: email, 
            password_user: password // El backend espera 'password_user', no 'password'
        }, function (data) {
            console.log("Respuesta del servidor:", data); // Depuración

            if (data.trim() === "registro satisfactorio") {
                $('#respuesta').css('color', 'green').text('Registro exitoso');
                mostrarMensajeFlotante("Registro exitoso. Redirigiendo...");
            } else {
                $('#respuesta').css('color', 'green').text('Registro satisfactorio');
            }
            window.location.href = "http://localhost/sistema-de-parqueo/login";
        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.error("Error en AJAX: " + textStatus, errorThrown);
            $('#respuesta').text('Error al conectar con el servidor.');
        });
    });

    function mostrarMensajeFlotante(mensaje) {
        let mensajeDiv = $('<div class="mensaje-flotante"></div>').text(mensaje);
        $('body').append(mensajeDiv);
        setTimeout(function() {
            mensajeDiv.fadeOut(500, function() { $(this).remove(); });
        }, 2500);
    }
});
    </script>
</body>
</html>