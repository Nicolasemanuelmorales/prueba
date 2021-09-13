<!DOCTYPE html>
<html lang="es">

<head>
  <title>Nicolás Emanuel Morales</title>
  <meta charset="UTF-8" />
  <meta name="title" content="Portfolio">
  <meta name="description"
    content="Es una web en la que además de poder descargar el CV en formato PDF y poder hablar por WhatsApp conmigo, también se detallan experiencias laborales, proyectos (con deploy en proceso), skills, estudios, redes sociales y contactos.">
  <meta name="theme-color" content="#009688">
  <meta name='apple-mobile-web-app-status-bar-style' content='#009688'>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name=”distribution” content=”global” />
  <meta name="Robots" content="index, follow" />
  <meta name="author" content="Nicolás Emanuel Morales, nicolasemanuelmorales@hotmail.com">
  <meta name="reply-to" content="nicolasemanuelmorales@hotmail.com">
  <meta name="copyright" content="Nicolás Emanuel Morales" />
  <meta property='og:image:height' content='1014'>
  <meta property='og:image:width' content='1490'>
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.nicolasemanuelmorales.com.ar/">
  <meta property="og:site_name" content="Nicolás Emanuel Morales">
  <meta property="og:updated_time" content="1619298631" />
  <meta property="og:title" content="Portfolio">
  <meta property="og:description"
    content="Es una web en la que además de poder descargar el CV en formato PDF y poder hablar por WhatsApp conmigo, también se detallan experiencias laborales, proyectos (con deploy en proceso), skills, estudios, redes sociales y contactos.">
  <meta property="og:image" content="https://cdn.jsdelivr.net/gh/Nicolasemanuelmorales/Portfolio/img/port.png">
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://www.nicolasemanuelmorales.com.ar/">
  <meta property="twitter:title" content="Portfolio">
  <meta property="twitter:description"
    content="Es una web en la que además de poder descargar el CV en formato PDF y poder hablar por WhatsApp conmigo, también se detallan experiencias laborales, proyectos (con deploy en proceso), skills, estudios, redes sociales y contactos.">
  <meta property="twitter:image" content="https://cdn.jsdelivr.net/gh/Nicolasemanuelmorales/Portfolio/img/port.png">
  <meta property="og:image" content="https://cdn.jsdelivr.net/gh/Nicolasemanuelmorales/Portfolio/img/ws2.png" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image:width" content="300" />
  <meta property="og:image:height" content="300" />
  <meta property="fb:app_id" content="928977633900253" />
  <link rel="icon" href="img/code.png" type="image/x-icon">
  <link rel="stylesheet" href="css/w3.css" />
  <link rel="stylesheet" href="css/estilos.css" />
  <link rel="stylesheet" href="css/switch.css" />
  <link rel="stylesheet" href="font/roboto.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body onload="cargaDeCookies()" id="body" class="w3-light-grey">
  <div id="preloader">
    <div id="loader"></div>
  </div>
  <div class="w3-content w3-margin-top" style="max-width: 1400px">
    <div class="w3-row-padding">
      <div id="izq" class="w3-third dn">
        <div id="cuadro-izq" onload="cargaDeCookies2()" class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="img/perfil2.png" style="width: 100%" alt="Nicolás Emanuel Morales" />
            <div class="w3-display-topleft arreglo-switch-tema">
              <div class="onoffswitch">
                <input type="checkbox" onclick="CambiarEstado()" name="onoffswitch" class="onoffswitch-checkbox"
                  id="myonoffswitch" tabindex="0" checked>
                <label class="onoffswitch-label" for="myonoffswitch">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
            <div class="w3-display-topright arreglo-switch-idioma">
              <div class="onoffswitch2">
                <input type="checkbox" onclick="CambiarEstadoIdioma()" name="onoffswitch2"
                  class="onoffswitch-checkbox2 translate" id="myonoffswitch2" tabindex="0" checked>
                <label class="onoffswitch-label2" for="myonoffswitch2">
                  <span class="onoffswitch-inner2"></span>
                  <span class="onoffswitch-switch2"></span>
                </label>
              </div>
            </div>
            <div style="background: rgba(40, 40, 40, 0.6); width: 100%;"
              class="w3-display-bottomleft w3-container blanco-falso text-center">
              <h2>Nicolás Emanuel Morales</h2>
            </div>
          </div>
          <div class="w3-container">
            <p style="margin-top: 20px;">
              <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Full Stack Web Developer
            </p>
            <p>
              <a target="_blank"
                href="https://www.google.com/maps/place/San+Justo,+Provincia+de+Buenos+Aires/@-34.6879526,-58.5989153,13z/data=!3m1!4b1!4m5!3m4!1s0x95bcc622f9709805:0xb5f373c7721a50a5!8m2!3d-34.6874084!4d-58.5632629"><i
                  class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>San
                Justo, Buenos Aires, Argentina</a>
            </p>
            <p>
              <a class="achicar-mail" href="mailto:nicolasemanuelmorales@hotmail.com"><i
                  class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>Nicolasemanuelmorales@hotmail.com</a>
            </p>
            <p>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=+541149408340"><i
                  class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>11 4940-8340</a>
            </p>
            <p>
              <a style="text-decoration: none;" href="https://www.linkedin.com/in/Nicolasemanuelmorales/"
                target="_blank"><i
                  class="fa fa-linkedin fa-fw w3-margin-right w3-large w3-text-teal"></i>Nicolasemanuelmorales</a>
            </p>
            <p>
              <a style="text-decoration: none;"
                href="https://drive.google.com/file/d/1qHGpRBE0Lc0izsejE-CKB2h5Ik-lKdmB/view?usp=sharing"
                target="_blank"><i class="fa fa-download fa-fw w3-margin-right w3-large w3-text-teal"></i>Curriculum
                Vitae.pdf</a>
            </p>
            <div class="display-none">
              <hr />
              <p class="w3-large">
                <b><i class="fa fa-cogs fa-fw w3-margin-right w3-text-teal"></i>Skills</b>
              </p>
          <?php
          
          include "skills.php";
          ?>              <br />
              <p class="w3-large w3-text-theme">
                <b><i class="fa fa-language  fa-fw w3-margin-right w3-text-teal"></i><span class="lang"
                    key="Idioma"></span></b>
              </p>
              <p><span class="lang" key="Español"></span></p>
              <div class="back-blanco-falso w3-round-xlarge">
                <div class="w3-round-xlarge w3-teal" style="height: 24px; width: 100%"></div>
              </div>
              <p><span class="lang" key="Ingles"></span></p>
              <div class="back-blanco-falso w3-round-xlarge">
                <div class="w3-round-xlarge w3-teal" style="height: 24px; width: 20%"></div>
              </div>
            </div>

          </div>
        </div>
        <br />
      </div>
      <div id="der" class="w3-twothird dn">
        <div id="cuadro-der-exp-lab" class="w3-container w3-card-4 w3-white w3-margin-bottom w3-text-grey">
                   <?php
          
          include "work.php";
          ?>        
        </div>
        <div id="cuadro-der-edu" class="w3-container w3-card-4 w3-white w3-margin-bottom w3-text-grey">
          <?php
          
          include "educations.php";
          ?>
        </div>
          <?php
          
          include "proyects.php";
          ?>        <span class="display-block">
          <div id="cuadro-izq2" class="w3-container w3-card-4 w3-white w3-text-grey w3-margin-top">
            <h2 class="w3-padding-16">
              <i class="fa fa-cogs fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Skills
            </h2>
          <?php
          
          include "skills.php";
          ?>            <br />
            <p class="w3-large w3-text-theme">
              <b><i class="fa fa-language  fa-fw w3-margin-right w3-text-teal"></i><span class="lang"
                  key="Idioma"></span></b>
            </p>
            <p><span class="lang" key="Español"></span></p>
            <div class="back-blanco-falso w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height: 24px; width: 100%"></div>
            </div>
            <p><span class="lang" key="Ingles"></span></p>
            <div class="back-blanco-falso w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height: 24px; width: 20%"></div>
            </div>
            <br />
          </div>
        </span>
      </div>
    </div>
  </div>
  <footer id="footer" class="w3-container w3-teal w3-center w3-margin-top dn">
    <p><span class="lang" key="Footer"></span></p>
    <a href="https://www.facebook.com/NiqoMorales/" target="_blank"><i
        class=" w3-xlarge fa fa-facebook-official w3-hover-opacity cursor-pointer"></i></a>
    <a href="https://www.instagram.com/nicomoorales/" target="_blank"><i
        class="w3-xlarge fa fa-instagram w3-hover-opacity cursor-pointer"></i></a>
    <a href="https://github.com/Nicolasemanuelmorales" target="_blank"><i
        class="w3-xlarge fa fa-github w3-hover-opacity cursor-pointer"></i></a>
    <a href="https://www.linkedin.com/in/nicolasemanuelmorales/" target="_blank"><i
        class="w3-xlarge fa fa-linkedin-square w3-hover-opacity w3-margin-bottom cursor-pointer"></i></a>
  </footer>
  <script src="js/JQuery.js"></script>
  <script src="js/principal.js"></script>

</body>

</html>