<?php
// Iniciar la sesión
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Información Personal del Programador</title>
  <style>
    /* Estilos CSS para la página */
    body {
  height: 1000px;
  background-image: url("/programacion/unerg/fotos/foto.jpg");
  background-size: cover;
  background-size: rem;
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
}
    
    header {
      background-color: #01147dcc;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    
    nav {
      background-color: #000b50;
      padding: 10px;
    }
    
    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    
    nav ul li {
      display: inline;
      margin-right: 10px;
    }
    
    nav ul li a {
      color: #ffffff;
      text-decoration: none;
      padding: 5px;
    }
    
    section {
      padding: 10px;
      text-align: center;
      color: white;
      background: rgba(255, 255, 255, 0);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(15.9px);
      -webkit-backdrop-filter: blur(15.9px);
      border: 1px solid rgba(255, 255, 255, 0.85);
      background: rgba(255, 255, 255, 0);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(15.9px);
      -webkit-backdrop-filter: blur(15.9px);
      border: 1px solid rgba(255, 255, 255, 0.85);

    }

    footer {
      padding: 450px;
      color: white;
      text-align: center;
          
    }
    .activo  {
     border-bottom: 1px solid white;

    }
  </style>
</head>
<body>
  <header>
    <h1>Información Personal del Programador</h1>
    <?php
    // Comprobar si el usuario ha iniciado sesión
    if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        echo '<h2>Bienvenido, ' . htmlspecialchars($user['nombre']) . '</h2>';
    } 
    ?>
  </header>
  
  <nav>
  <ul>
    <li><a href="#" class="activo" >Inicio</a></li>
    <?php
    // Comprobar si el usuario ha iniciado sesión
    if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        echo '<li><a href="/programacion/unerg/formato.php">Informacion</a></li>';
        echo '<li><a href="/programacion/unerg/conexiones/salir.php">Salir</a></li>';
    } else {
        echo '<li><a href="/programacion/unerg/ingresar.php">ingresar</a></li>';
    }
    ?>
   
  </ul>
</nav>

  <section>
    <h2>Bienvenido a mi página</h2>
    <p>Aquí encontrarás información sobre mí y mis proyectos como programador.</p>
  </section>
  
  <!-- Aquí puedes agregar el contenido adicional de tu página -->
  
  <footer>
    <p>&copy; 2023 Información Personal del Programador</p>
  </footer>
</body>
</html>