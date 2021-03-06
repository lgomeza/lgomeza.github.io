﻿<?php
session_start();
$nombre="";
if(isset($_SESSION['usuario'])  )
{
   $nombre= $_SESSION['usuario']; 
}
elseif(isset($_SESSION['empresa']))
{
  $nombre= $_SESSION['empresa']; 
}
?>
<!doctype html>
<html lang="en">

  <head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136441559-1"></script>
    <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     gtag('config', 'UA-136441559-1');
    </script>
  <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WM9K3VJ');</script>
  <!-- End Google Tag Manager -->
    <meta charset="utf-8">
	<!-- End Google Tag Manager -->
  	<meta charset="utf-8">
    <meta name="description" content="Trabajo inteligente para estudiantes">
    <meta name="keywords" content="Trabajo, Empleo, Machine Learning, UWork, Inteligencia Artificial">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>UWork</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css" type="text/css" media="screen">
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="css/material.min.css" rel="stylesheet">
    <link href="css/ripples.min.css" rel="stylesheet">
    <link href="css/mainnnn.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/icono.ico">
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WM9K3VJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="navbar navbar-invers menu-wrap">
      <div class="navbar-header text-center">
        <!-- <a class="navbar-brand logo-right" href="javascript:void(0)"><i class="mdi-image-timelapse"></i>UWork</a> -->
        <a href="index.html" class=" navbar-brand logo-right"><img src="img/logo2.png" alt=""></a>
      </div>
        <ul class="nav navbar-nav main-navigation">
          <li class="active"><a href="#home">Inicio</a></li>
            <li><a href="ofertas.php">Ofertas</a></li>
            <?php if(isset($_SESSION['usuario'])){ echo '  <li><a href="#">Consejos</a></li>';} ?>
         
          <li><a href="#clients">Contacto</a></li>
          <?php if($nombre== "" ){ echo '  <li><a href="Registro.html">Registro</a></li>';}  ?>

          <?php if(isset($_SESSION['usuario']) OR isset($_SESSION['empresa']) ){ echo '  <li><a href="#">Mi Perfil</a></li>';}  ?>

          <?php if(isset($_SESSION['usuario']) OR isset($_SESSION['empresa']) ){ echo '  <li><a href="cerrar.php">Cerrar Sesion</a></li>';} ?>

        </ul>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>
  	<div class="content-wrap">
     <header class="hero-area" id="home">

      <div class="container">
          <div class="col-md-12">

            <div class="navbar navbar-inverse sticky-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
              <div class="container">
                <div class="navbar-header">
                  <!--<a class="logo-left " href="index.html"><i class="mdi-image-timelapse"></i>UWork</a> -->
                  <a href="index.php" class="logo-left"><img src="img/logo2.png" alt="" width="40%"></a>
                </div>
                <div class="navbar-right">
                  <button class="menu-icon"  id="open-button">
                    <i class="mdi-navigation-menu"></i>
                  </button>
                </div>
              </div>
            </div>
        </div>
        <div class="contents text-right">
          <h1 class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms"> <?php if($nombre == ""){echo "UWork - Trabajo inteligente para estudiantes"; } else {echo "Hola, ". $nombre ;} ?> </h1>
          <a href="#form" class="btn btn-lg btn-primary wow fadeInUp" id="botoncito" data-wow-duration="1000ms" data-wow-delay="400ms">Suscribirse</a>
          <?php if(!isset($_SESSION['usuario'])){ echo '<a href="registro.html"  class="btn btn-lg btn-primary wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Registrarse</a>';} ?>
          <a href="#features" class="btn btn-lg btn-border wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">Conoce Más</a>
        </div>
    </header>

    <section id="features" class="section">
      <div class="container">
        <div class="section-header">
          <h1 class="section-title wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="100ms">Características</h1>
        </div>
        <div class="row">

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-action-settings"></i>
              </div>
              <div class="features-text">
                <h4>Machine Learning</h4>
                <p>
                  Utilizamos Machine Learning para que la plataforma aprenda de tus decisiones y te de las mejores recomendaciones.
                </p>
              </div>
             </div>
          </div>


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-action-done-all"></i>
              </div>
              <div class="features-text">
                <h4>Ambos lados de la moneda</h4>
                <p>
                  UWork se enfoca en el empleador y el empleado por lo cual ambas partes tienen la misma importancia.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-image-blur-linear"></i>
              </div>
              <div class="features-text">
                <h4>Consejería y Asistencia Legal</h4>
                <p>
                  Contamos con un blog con consejos sobre la vida laboral y asistencia personalizada para tus documentos profesionales.
                </p>
              </div>
            </div>
          </div>


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-communication-business"></i>
              </div>
              <div class="features-text">
                <h4>Agencia Temporal</h4>
                <p>
                  En UWork nos preocupa el bienestar de los clientes, por eso contamos con una agencia temporal que tramita la seguridad social.
                </p>
              </div>
            </div>
          </div>


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-action-favorite"></i>
              </div>
              <div class="features-text">
                <h4>Amor por UWork</h4>
                <p>
                  Los estudiantes que han usado la plataforma dan testimonio de lo buena que es al permititrles emepzar su vida laboral.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-hardware-phonelink"></i>
              </div>
              <div class="features-text">
                <h4>Diseño Responsive para cualquier dispositivo</h4>
                <p>
                  La plataforma está construida para funcionar en cualquier dispositivo desde un computador hasta un smartphone.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="why" class="section">
      <div class="container">

        <div class="row">

          <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="img/features/foto.png" alt="" width="100%">
          </div>

          <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="pull-left content">
              <h2>Por esto amarás <br> UWork</h2>
              <p>
                UWork tiene funcionalidades diseñadas específicamente para <br>
                la experiencia de usuario desde el perfíl de un estudiante <br>
                y el de una empresa. Nos importa mucho que el proceso de contratación
                sea impecable. Contamos con estas funcionalidades extra: <br>
              </p>
              <ul class="list-item">
                <li><i class="mdi-action-done"></i>¡Es Gratis!</li>
                <li><i class="mdi-action-done"></i>¡Perfiles únicos con Machine Learning!</li>
                <li><i class="mdi-action-done"></i>Disponible en iOS y Android</li>
                <li><i class="mdi-action-done"></i>Diseño amigable e intuitivo</li>
                <li><i class="mdi-action-done"></i>Actualización de ofertas en tiempo real</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


     <section id="main-features" class="section main-feature-gray">
      <div class="container">

        <div class="row">
          <div class="col-md-8 col-sm-8 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="feature-item">
              <h3 class="title-small">
               Quiénes somos
              </h3>
             <p>
              <b>U- Work</b> es una startup dedicado a resolver el problema la dificultad para conseguir ofertas de trabajo con horario flexible o de corta duración por parte de estudiantes de educación superior que no tienen la opción de realizar prácticas académicas y estén en busca de recursos adicionales. Buscamos ayudar a estos estudiantes a obtener trabajos de una manera fácil y efectiva.
              </p>
              <p>
                <b>U-Work</b> busca que los estudiantes entre primero y quinto semestre que estén en busca de recursos adicionales, empiecen su vida laboral y adquieran experiencia para el futuro poder trabajar y estar económicamente estables. Por otro lado, también nos preocupan los empleadores, queremos asegurarnos que adquieran nuevos talentos y aprendizajes de estudiantes universitarios y que todos los trámites que deben realizar no se comvierta en un peso extra.
              </p>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="img/features/uwork.png" class="img-responsive" alt="">
          </div>
        </div>
      </div>
    </section>
     <section id="main-features" class="section">
      <div class="container">

        <div class="row">
          <div class="col-md-4 col-sm-4 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="img/features/misionv.png" class="img-responsive" alt="">
          </div>

          <div class="col-md-8 col-sm-8 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="feature-item">
              <h3 class="title-small">
                Misión y Visión
              </h3>
              <h4>Visión</h4>
              <p>Ser reconocidos como el principal medio para buscar trabajos en la comunidad universitaria sin tener experiencia y brindando las herramientas tecnológicas necesarias.</p>
              
              <h4>Misión</h4>
              <p><b>U-Work</b> canaliza sus esfuerzos en la satisfacción  de las  necesidades y expectativas  de  sus clientes, brindando para ello servicios integrales con el fin de promover la obtención de trabajo en estudiantes universitarios, manteniéndose a la vanguardia de los avances tecnológicos, empleando para ello profesionales calificados que cumplen con los más altos estándares de calidad generando soluciones innovadoras  que contribuyan al desarrollo sostenible de sus clientes.</p>
              
            </div>
          </div>

        </div>
      </div>
    </section>
  -->

    <section id="cta">
      <div class="container">
        <div class="row text-center">
            <h3 class="title-small wow bounce" data-wow-duration="1000ms" data-wow-delay="300ms">¡Únete ahora como estudiante o empresa!</h3>
             <a href="#form" class="btn btn-lg btn-border">Suscribirse</a>
          </div>
      </div>
    </section>
<br>
<br>
<br>
    <section id="other-features">
      <div class="container">
        <div class="section-header">
          <h1 class="section-title wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">Características Adicionales</h1>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="features-content">
              <div class="icon hi-icon-effect-3b">
                <i class="mdi-action-settings"></i>
              </div>
              <h3>Personalización</h3>
              <p>Puedes editar tu perfíl en cualquier momento y tus recomendaciones cambiarán.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-action-lock-outline"></i>
              </div>
              <h3>Seguridad</h3>
              <p>La información se guarda encriptada para que así solamente las partes que se contactan tengan acceso a la información.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-communication-messenger"></i>
              </div>
              <h3>Soporte</h3>
              <p>Contamos con un equipo de soporte que responderá a tus dudas e inquietudes las 24 horas del día.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="features-content">
              <div class="icon">
                <i class="mdi-social-person-outline"></i>
              </div>
              <h3>Analtyics</h3>
              <p>Utilizamos herramientas que analizan el rendimiento de la plataforma para mejorar continuamente la experiencia de usuario (UX).</p>
            </div>
          </div>

        </div>
      </div>
    </section>


    <section id="testimonial" class="section">
      <div class="container">
        <div class="section-header text-center wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
          <h1 class="section-title">QUE DICEN DE UWORK</h1>
        </div>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#testimonial-carousel" data-slide-to="1"></li>
                <li data-target="#testimonial-carousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active text-center">
                  <p>"Me parece interesante el proyecto, la clasificación de los candidatos por especialidades, habilidades o interés es una buena característica."</p>
                  <div class="meta">
                    <p>Myriam Luz Gómez<span><a href="https://www.symrise.com/"> Symrise</a></span></p>
                  </div>
                </div>
                <div class="item text-center">
                  <p>"El hecho de tener una agencia temporal que tramite y maneje los pagos de la seguridad social, facilita el trabajo a las emrpesas y genera que la empleabilidad aumente pues no tienen que realizar estos procesos."</p>
                  <div class="meta">
                    <p>Beatriz Jiménez Guzmán <span><a href="https://www.javeriana.edu.co/home"> Universidad Javeriana</a></span></p>
                  </div>
                </div>
                <div class="item text-center">
                  <p>"Me parece muy bueno lo que hacen, no tengo experiencia laboral y esta herramienta me facilitaría el poder emepezar mi vida laboral, probé la plataforma y me encantó."</p>
                  <div class="meta">
                    <p>Felipe Rubio <span><a href="http://uniandes.edu.co/"> Universidad de los Andes</a></span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="counter" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="counter-item">
              <div class="icon">
                <i class="mdi-action-get-app"></i>
              </div>
              <h3 class="timer">1000</h3>
              <hr>
              <h5>
                Objetivo usuarios estudiantes
              </h5>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="counter-item">
              <div class="icon">
                <i class="mdi-action-face-unlock"></i>
              </div>
              <h3 class="timer">200</h3>
              <hr>
              <h5>
                Objetivo usuarios empresas
              </h5>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="counter-item">
              <div class="icon">
                <i class="mdi-action-grade"></i>
              </div>
              <h3 class="timer">700</h3>
              <hr>
              <h5>
                Trabajos exitosos proyectados
              </h5>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="counter-item">
              <div class="icon">
                <i class="mdi-action-trending-up"></i>
              </div>
              <h3 class="timer">500</h3>
              <hr>
              <h5>
                Visitas mensuales proyectadas
              </h5>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="clients" class="section">
      <div class="container">

        <div class="section-header text-center">
          <h1 class="section-title wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Colaboradores</h1>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="client-item-wrapper">
            </div>
          </div>
          <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="client-item-wrapper">
              <img src="img/clients/uniandes.png" alt="">
            </div>
          </div>
          <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="client-item-wrapper">
              <img src="img/clients/github.png" alt="">
            </div>
          </div>
          <div class="col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="client-item-wrapper">
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 class="section-title">Donde estamos</h2>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-maps-map"></i>
                  </div>
                  <h4>Ubicación</h4>
                  <p>Bogotá, Colombia</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-content-mail"></i>
                  </div>
                  <h4>Email</h4>
                  <p>uworkteamco@gmail.com</p>
                </div>
              </div>
              <div class="clear"></div>
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-action-settings-phone"></i>
                  </div>
                  <h4>Teléfono</h4>
                  <p>+57 321 345 7213</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-action-thumb-up"></i>
                  </div>
                  <h4>Redes</h4>
                  <p>@UWork</p>
                </div>
              </div>
            </div>
          </div>
          <div id="form" class="col-md-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 class="section-title">¡Suscríbete!</h2>
            <!-- Form -->
            <form class="contact-form" role="form" method="post">
              <i class="mdi-action-account-box"></i>
              <input type="text" class="form-control" name="name" placeholder="Nombre">

              <i class="mdi-content-mail"></i>
              <input type="email" class="form-control" name="EMAIL" placeholder="Email">

              <select name="Tipo cliente" class="form-control">
                <option value="estudiante">Estudiante</option>
                <option value="empresa">Empresa</option>
              </select>

              <br>
<!--
              <textarea class="form-control" placeholder="Mensaje" rows="4"></textarea>
            -->
              <button type="reset" id="submit" class="btn btn-lg btn-primary">Enviar</button>
              <div id="success" style="color:#3F51B5;">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <div class="map-area">
      <div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1406.0648889857307!2d-74.06485312969427!3d4.602606290078895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1da99c6575ca804b!2sUniversidad+de+los+Andes+Edificio+Mario!5e0!3m2!1ses!2sco!4v1552852558805" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>
    </div>

    <section id="footer">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>FAQs</h3>
              <ul>
                <li><a href="#">Por qué escogernos?</a>
                </li>
                <li><a href="#">Dónde estamos?</a>
                </li>
                <li><a href="#">Garantía</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>Acerca</h3>
              <ul>
                <li><a href="#">Carrera</a>
                </li>
                <li><a href="#">Socios</a>
                </li>
                <li><a href="#">Equipo</a>
                </li>
                <li><a href="#">Clientes</a>
                </li>
                <li><a href="#">Contacto</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>Encuentranos en</h3>
              <a class="social" href="https://www.facebook.com/uworkco/" target="_blank"><i class="fa fa-facebook"></i></a>
              <a class="social" href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
              <a class="social" href="https://www.instagram.com/uworkco/" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Go to Top Link -->
      <a href="#home" class="btn btn-primary back-to-top">
      <i class=" mdi-hardware-keyboard-arrow-up"></i>
      </a>
    </section>

    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="copyright-text">
             © UWork 2019 Todos los derechos reservados. 
              <a href="#">
              </a>
            </p>
            
          </div>
        </div>
      </div>
    </section>
    </div>


    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ripples.min.js"></script>
    <script src="js/material.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.mmenu.min.all.js"></script>
    <script src="js/count-to.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/smooth-on-scroll.js"></script>
    <script src="js/smooth-scroll.js"></script>


    <script>
        $(document).ready(function() {
            // This command is used to initialize some elements and make them work properly
            $.material.init();
        });
    </script>
    <script src="https://www.gstatic.com/firebasejs/5.9.2/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDrZ7GWdhntvS6yhK7iyDquVkzMmoBKcP4",
    authDomain: "u-work-9fb6b.firebaseapp.com",
    databaseURL: "https://u-work-9fb6b.firebaseio.com",
    projectId: "u-work-9fb6b",
    storageBucket: "u-work-9fb6b.appspot.com",
    messagingSenderId: "951471060081"
  };
  firebase.initializeApp(config);
</script>
<script src="https://www.gstatic.com/firebasejs/5.8.4/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.8.4/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.8.4/firebase-messaging.js"></script>

  </body>

</html>
