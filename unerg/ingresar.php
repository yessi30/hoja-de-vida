<?php
// Iniciar la sesión
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  <title>UI Login</title>
  <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
}
 
body{
  background: #080E26 ;
}
 
.container{
  width: 100%;
  height: 100vh;
  padding: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
}
 
.login-container{
  display: flex;
  width: 650px;
  height: auto;
  background: #fff;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .2);
}
 
.register, .login{
  flex: 1;
}
 
.register{
  padding: 40px;
  position: relative;
}
 
.register h2{
  color: black;
  margin-bottom: 30px;
}
 
.register input{
  width: 100%;
  padding: 5px;
  font-size: 16px;
  margin-bottom: 25px;
  border-top-style: none;
  border-left-style: none;
  border-right-style: none;
  border-bottom: 1px solid #a8a8a8;
  color: #333;
}
 
.register input:active,
.register input:focus{
  outline: none;
}
 
.register .submit{
  width: auto;
  padding: 10px;
  background: #f17108;
  color: #fff;
  font-size: 12px;
  box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
  cursor: pointer;
}
 
.register::after{
  position: absolute;
  width: 25px;
  height: 25px;
  top: 50%;
  right: -23px;
  padding: 10px;
  text-align: center;
  font-size: 19px;
  background: #f1f1f1;
  border-radius: 50%;
  transform: translateY(-50%);
  box-shadow: -1px 1px 3px 1px rgba(0, 0, 0, .2);
  color: #7c7c7c;
}
 
.login2{
  background:#6CD7E7 ;
  padding: 40px;
}
 
.login2 h2{
  color: #1F1146;
  margin-bottom: 45px;
}

.login2 .submit{
  width: auto;
  padding: 10px;
  background: white;
  color: black;
  font-size: 12px;
  box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
  cursor: pointer;
}
 
 
.login2 button i{
  position: absolute;
  top: 12px; 
  left: 12px;
}
 
 
@media only screen and (max-width: 540px){
  .login-container{
    display: block;
  }
 
  .register, .login{
    flex: none;
  }
 
  .register::after{
    top: unset;
    bottom: -25px;
    left: 50%;
    transform: translateX(-50%) rotate(90deg);
  }
}
        </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="register">
                <h2>Registrarse</h2>
                <form action="/programacion/unerg/conexiones/registro.php" method="post">
                    <input type="text" required placeholder="Nombre" class="nombre" name="nombre">
                    <input type="email" required placeholder="Correo" class="correo"name="correo">
                    <input type="password" required placeholder="Contraseña" class="pass" name="password">
                    <input type="password" required placeholder="Confirma contraseña" class="repass"name="password_confirmacion">
                    <input type="submit" class="submit" value="REGISTRARSE">
                </form>
            </div>
            <div class="register login2">
                 <h2>Iniciar Sesión</h2>
                  <form action="/programacion/unerg/conexiones/login.php" method="post">
                    <input type="email" required placeholder="Correo" class="correo" name="correo">
                    <input type="password" required placeholder="Contraseña" class="pass"  name="password">
                    <input type="submit" class="submit" value="INICIO">
                </form>
            </div>
        </div>
   </div>
</body>
</html>