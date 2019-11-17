<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Área professor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="../../public/img/icons8-livros-48.png" rel="icon">
    <link href="../../public/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="../../public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../public/css/area_professor.css" rel="stylesheet">
    

    <!-- Libraries CSS Files -->
    <link href="../../public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../public/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../public/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="../../public/css/tela_aluno.css" rel="stylesheet">

    <!--FullCalendar-->
    <link href='../../public/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='../../public/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='../../public/fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
    <link href='../../public/fullcalendar/packages/list/main.css' rel='stylesheet' />
    <script src='../../public/fullcalendar/packages/core/main.js'></script>
    <script src='../../public/fullcalendar/packages/interaction/main.js'></script>
    <script src='../../public/fullcalendar/packages/daygrid/main.js'></script>
    <script src='../../public/fullcalendar/packages/timegrid/main.js'></script>
    <script src='../../public/fullcalendar/packages/list/main.js'></script>

    <script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      defaultDate: '2019-08-12',
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      events: [
        {
          title: 'Business Lunch',
          start: '2019-08-03T13:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Meeting',
          start: '2019-08-13T11:00:00',
          constraint: 'availableForMeeting', // defined below
          color: '#257e4a'
        },
        {
          title: 'Conference',
          start: '2019-08-18',
          end: '2019-08-20'
        },
        {
          title: 'Party',
          start: '2019-08-29T20:00:00'
        },

        // areas where "Meeting" must be dropped
        {
          groupId: 'availableForMeeting',
          start: '2019-08-11T10:00:00',
          end: '2019-08-11T16:00:00',
          rendering: 'background'
        },
        {
          groupId: 'availableForMeeting',
          start: '2019-08-13T10:00:00',
          end: '2019-08-13T16:00:00',
          rendering: 'background'
        },

        // red areas where no events can be dropped
        {
          start: '2019-08-24',
          end: '2019-08-28',
          overlap: false,
          rendering: 'background',
          color: '#ff9f89'
        },
        {
          start: '2019-08-06',
          end: '2019-08-08',
          overlap: false,
          rendering: 'background',
          color: '#ff9f89'
        }
      ]
    });

    calendar.render();
  });

</script>
<style>

  body {
   
    padding: 0px;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
    color: black;
  }

  #calendar {
    max-width: 1240px;
    margin: 0 auto;
    margin-top: 20px;
    background-color: white;
  }

</style>
       
    <!-- =======================================================
      Theme Name: BizPage
      Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>


  <!--==========================
    Header
  ============================-->

  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Área do Professor</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
          <ul class="nav-menu">
                  <li class="menu-has-children">
                  <a href="#">Perfil</a>
                  <ul>
                      <li><a href="#">Editar</a></li>                  
                      <li><a href="index.html">Sair</a></li>
                  </ul>
              </li>
           </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div class="band">
        <div class="item-1">
            <a href="#" class="card1">
              
                <h1><strong>Meus Alunos</strong></h1>
              
            </a>
        </div>
        <div class="item-2">
            <a href="#" class="card2">
              
                <h1><strong>Minhas Disciplinas</strong></h1>
            </a>
        </div>
        <div class="item-3">
            <a href="#" class="card3">
              
                <h1><strong>Cadastrar Disciplinas</strong></h1>
           </a>
        </div>
        <div class="item-4">
            <a href="#" class="card4">
              
                <h1><strong>Alunos</strong></h1>
             </a>
        </div>
        
      </div>
      <div id='calendar'></div>
    </div>
  
  </section><!-- #intro -->

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Review Lesson</h3>
            <p>Ajudamos a encontrar o melhor professor para você, estude onde quiser sem custo adicional.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Cadastre-se</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Sobre</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Termos de Uso</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Politicas de Privacidade</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contate-nos</h4>
            <p>
              Brasília-DF<br>
              <strong>Telefone:</strong> (61) 3344-3565<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Redes Sociais</h4>
              <div class="social-links">
                  <a href="https://twitter.com/login?lang=pt" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com/?stype=lo&jlou=AffQc3HQybxE7H6pLCk1R5BuQB8pADDyoAOGNTCtaBow28MLoJotai4YGL2bbZRw9Flc7_oQ7LgmKVmFgNmIelnTV61OwJxqPrhpK2vof1maRw&smuh=20254&lh=Ac-skySGLtbUa_x3" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/?hl=pt-br" class="instagram"><i class="fa fa-instagram"></i></a>
                  <a href="https://accounts.google.com/signin/v2/identifier?hl=pt-BR&continue=https%3A%2F%2Fwww.google.com%2Fsearch%3Fclient%3Dfirefox-b-d%26q%3Dgmail&flowName=GlifWebSignIn&flowEntry=AddSession" class="google-plus"><i class="fa fa-google-plus"></i></a>
                  <a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fbr.linkedin.com%2Fin%2Fusu%25C3%25A1rio-linkendin-6b2121145&amp;fromSignIn=true&fromSignIn=true&trk=public_profile_nav-header-signin" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
             
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Review Lesson</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="../../public/lib/jquery/jquery.min.js"></script>
  <script src="../../public/lib/jquery/jquery-migrate.min.js"></script>
  <script src="../../public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../public/lib/easing/easing.min.js"></script>
  <script src="../../public/lib/superfish/hoverIntent.js"></script>
  <script src="../../public/lib/superfish/superfish.min.js"></script>
  <script src="../../public/lib/wow/wow.min.js"></script>
  <script src="../../public/lib/waypoints/waypoints.min.js"></script>
  <script src="../../public/lib/counterup/counterup.min.js"></script>
  <script src="../../public/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../../public/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../../public/lib/lightbox/js/lightbox.min.js"></script>
  <script src="../../public/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="../../public/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../../public/js/main.js"></script>
  

</body>
</html>
