<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles3.css')}}">
</head>
<body>
    <main>
        <div class="big-wrapper light">
          <img src="{{asset("assets/img/shape.png")}}" alt="" class="shape" />
          <header>
            <div class="container">
              <div class="logo">
                <img src="./img/logo.png" alt="Logo" />
                <h3>Encuesta De Competencias Blandas</h3>
              </div>
  
              <div class="links">
                <ul>
                  <!-- <li><a href="#">Inicio</a></li> -->
                  <!-- <li><a href="#">Informacion</a></li> -->
                  <li><a href="#">Servicio</a></li>
                  <li><a href="#">Contactos</a></li>
                  <li><a href="{{route("login")}}" class="btn">Iniciar Sesion</a></li>
                </ul>
              </div>
  
              <div class="overlay"></div>
  
              <div class="hamburger-menu">
                <div class="bar"></div>
              </div>
            </div>
          </header>
  
          <div class="showcase-area">
            <div class="container">
              <div class="left">
                <div class="big-title">
                  <h1>Bienvenidos,</h1>
                  <h2 class="">Comience a explorar ahora.</h2>
                </div>
                <p class="text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Delectus eius distinctio odit, magni magnam qui ex perferendis
                  vitae!
                </p>
                <div class="cta">
                  <a href="#" class="btn">Encuesta</a>
                </div>
              </div>
  
              <div class="right">
                <img src="./img/person.png" alt="Person Image" class="person" />
              </div>
            </div>
          </div>
  
          <div class="bottom-area">
            <div class="container">
              <button class="toggle-btn">
                <i class="far fa-moon"></i>
                <i class="far fa-sun"></i>
              </button>
            </div>
          </div>
        </div>
      </main>
  
      <!-- JavaScript Files -->
  
      <script src="https://kit.fontawesome.com/a81368914c.js"></script>
      <script src="./app.js"></script>
      
</body>
</html>


