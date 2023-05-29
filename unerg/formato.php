<?php
// Iniciar la sesión
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hoja de vida - Programación</title>
	<style>
		/* Estilos generales */

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 40px 20px;
  background-color: #f6f6f6;
  box-shadow: 0 0 20px rgba(0,0,0,0.2);
}


h1, h2, h3 {
  margin: 0 0 10px;
  font-weight: 700;
}

h1 {
  font-size: 40px;
}

h2 {
  font-size: 24px;
}

h3 {
  font-size: 18px;
}

ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

li {
  margin-bottom: 10px;
}

/* Estilos para habilidades técnicas */
.skills {
  margin-bottom: 40px;
}

.skills ul {
  display: flex;
  flex-wrap: wrap;
}

.skills li {
  margin-right: 10px;
}

.skill {
  display: inline-block;
  padding: 10px 20px;
  background-color: #00bcd4;
  color: black;
  border-radius: 5px;
  font-weight: 700;
  font-size: 14px;
  margin-bottom: 10px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Estilos para experiencia laboral */
.jobs {
  margin-bottom: 40px;
}

.job {
  margin-bottom: 20px;
}

.job h3 {
  font-size: 24px;
  background-color: #00bcd4;
  color: black;
  padding: 10px 20px;
  border-radius: 5px 5px 0 0;
  margin-bottom: 0;
}

.job ul {
  background-color: black;
  padding: 20px;
  border-radius: 0 0 5px 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.job ul li {
  margin-bottom: 10px;
}

.job ul li:last-child {
  margin-bottom: 0;
}

.job ul li span {
  font-weight: 700;
}

/* Estilos para formación académica */
.education {
  margin-bottom: 40px;
}

.education h3 {
  font-size: 24px;
  background-color: #00bcd4;
  color: black ;
  padding: 10px 20px;
  border-radius: 5px 5px 0 0;
  margin-bottom: 0;
}

.education ul {
  background-color: black;
  padding: 20px;
  border-radius: 0 0 5px 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.education ul li {
  margin-bottom: 10px;
}

.education ul li:last-child {
  margin-bottom: 0;
}

.education ul li span {
  font-weight: 700;
}

section {
      padding: 10px;
      text-align: center;
      color: black;
    }

/* Estilos para proyectos personales */
.projects {
  margin-bottom: 40px;
}



body {
  height: 1000px;
  background-color:#080E26;
  background-size: cover;
  background-size: rem;
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
}
    
    header  {
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
    
    section.letras {
      padding: 10px;
      text-align: center;
      color: white;
    }

    footer {
      padding: 450px;
      color: white;
      text-align: center;
    }

    .activo  {
     border-bottom: 1px solid white;

    }

    .primero {
      text-align:center
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
    <li><a href="/programacion/unerg/index.php">Inicio</a></li>
    <?php
    // Comprobar si el usuario ha iniciado sesión
    if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        echo '<li><a href="/programacion/unerg/formato.php" class="activo">Informacion</a></li>';
        echo '<li><a href="/programacion/unerg/conexiones/salir.php">Salir</a></li>';
    } else {
    }
    ?>
   
  </ul>
</nav>

  <section class="letras">
    <h2>Bienvenido a mi página</h2>
    <p>Aquí encontrarás información sobre mí y mis proyectos como programador.</p>
  </section>
	<div class="container">
  <main>
  <div class="primero">
			<h1>Yessica Aular</h1>
			<h2>Programadora</h2>
			<ul>
				<li>Email: scarlettneaular@gmail.com</li>
				<li>Teléfono: 04128643509</li>
				<li>telegram: @YessicaAular30 </li>
				<li>Github: https://github.com/yessi30 </li>
			</ul>
  </div>

  <hr>
		
			<section>
				<h2>Habilidades técnicas</h2>
				<ul>
					<li><span class="skill">JavaScript</span></li>
					<li><span class="skill">SQL</span></li>
					<li><span class="skill">HTML</span></li>
					<li><span class="skill">CSS</span></li>
				</ul>
			</section>

      <hr>
			
			<section>
				<h2>Experiencia laboral</h2>
				<h3>hasta el momento ninguna</h3>
			</section>
			
      <hr>

			<section>
				<h2>Formación académica</h2>
				<h3>Ingeniería en sistemas - Universidad Nacional Experimental Romulo Gallegos</h3>
				<ul>
					<li>Actualmente cursando el quinto semestre</li>
					</ul>
					</section>

          <hr>

					<section>
						<h2>Proyectos personales</h2>
						<h3>Web de informacion sobre entrenimiento</h3>
						<h2>idiomas</h2>
						<h3>japones: intermedio</h3>
						<h3>ingles: basico</h3>
					</section>
				</main>
			</div>
		</body>
		</html>			
