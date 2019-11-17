<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ecolher Horário  </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!--Full Calendar-->
    <link href='fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/list/main.css' rel='stylesheet' />

    <!-- Favicons -->
    <link href="img/icons8-livros-48.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/agenda.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendarInteraction.Draggable

            /* initialize the external events
            -----------------------------------------------------------------*/

            var containerEl = document.getElementById('external-events-list');
            new Draggable(containerEl, {
                itemSelector: '.fc-event',
                eventData: function (eventEl) {
                    return {
                        title: eventEl.innerText.trim()
                    }
                }
            });

            //// the individual way to do it
            // var containerEl = document.getElementById('external-events-list');
            // var eventEls = Array.prototype.slice.call(
            //   containerEl.querySelectorAll('.fc-event')
            // );
            // eventEls.forEach(function(eventEl) {
            //   new Draggable(eventEl, {
            //     eventData: {
            //       title: eventEl.innerText.trim(),
            //     }
            //   });
            // });

            /* initialize the calendar
            -----------------------------------------------------------------*/




        });

    </script>
    <style>

        body {
            font-size: 14px;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        }

        #wrap {
            width: 860px;
            height: 200px;
            margin: 0 auto;
        }

        #external-events {
            float: left;
            width: 280px;
            padding: 0 10px;
            border: 1px solid #ccc;
            background: white;
            text-align: left;
            margin-top: 0 auto;
            height: 390px;
        }

            #external-events h4 {
                font-size: 16px;
                margin-top: 0;
                padding-top: 10px;
            }

            #external-events .fc-event {
                margin: 10px 0;
                cursor: pointer;
            }

            #external-events p {
                margin: 1.5em 0;
                font-size: 11px;
                color: #666;
            }

                #external-events p input {
                    margin: 0;
                    vertical-align: middle;
                    color: #8FBC8F;
                }

        #calendar {
            float: right;
            width: 600px;
            height: 390px;
            background-color: white;
        }
    </style>

</head>

<body>


    <!--==========================
      Header
    ============================-->

    <header id="header">
        <div class="container-fluid">
            <div id="logo" class="pull-left">
                <h1><a href="#intro" class="scrollto">Agenda</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-has-children">
                        <a href="#">Perfil</a>
                        <ul>
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
                <div id='wrap'>
                    <div class="row">
                        <div id='external-events' class="container">
                            <div id="img">
                                <img class="avatarcaledar" src="img/professor.png" width="80">
                            </div>
                            <div id='external-events-list'>
                                <h4 class="textoprof">Clecio Silva Gois</h4>
                                <h4 class="materias">Portugês, Matemática, História.</h4>
                            </div>
                            <div id="endereco" class="container">
                                <i class="material-icons">location_on</i>SQS 410 Asa Sul, Brasília.
                            </div>
                        </div>
                        <div id='calendar' class="calendar"></div>
                        <div style='clear:both'></div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div id='external-events' class="container">
                            <div id="img">
                                <img class="avatarcaledar" src="img/professor.png" width="80">
                            </div>
                            <div id='external-events-list'>
                                <h4 class="textoprof">Clecio Silva Gois</h4>
                                <h4 class="materias">Portugês, Matemática, História.</h4>
                            </div>
                            <div id="endereco" class="container">
                                <i class="material-icons">location_on</i>SQS 410 Asa Sul, Brasília.
                            </div>
                        </div>
                        <div id='calendar' class="calendar"></div>
                        <div style='clear:both'></div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div id='external-events' class="container">
                            <div id="img">
                                <img class="avatarcaledar" src="img/professor.png" width="80">
                            </div>
                            <div id='external-events-list'>
                                <h4 class="textoprof">Clecio Silva Gois</h4>
                                <h4 class="materias">Portugês, Matemática, História.</h4>
                            </div>
                            <div id="endereco" class="container">
                                <i class="material-icons">location_on</i>SQS 410 Asa Sul, Brasília.
                            </div>
                        </div>
                        <div id='calendar' class="calendar"></div>
                        <div style='clear:both'></div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div id='external-events' class="container">
                            <div id="img">
                                <img class="avatarcaledar" src="img/professor.png" width="80">
                            </div>
                            <div id='external-events-list'>
                                <h4 class="textoprof">Clecio Silva Gois</h4>
                                <h4 class="materias">Portugês, Matemática, História.</h4>
                            </div>
                            <div id="endereco" class="container">
                                <i class="material-icons">location_on</i>SQS 410 Asa Sul, Brasília.
                            </div>
                        </div>
                        <div id='calendar' class="calendar"></div>
                        <div style='clear:both'></div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <div id='external-events' class="container">
                            <div id="img">
                                <img class="avatarcaledar" src="img/professor.png" width="80">
                            </div>
                            <div id='external-events-list'>
                                <h4 class="textoprof">Clecio Silva Gois</h4>
                                <h4 class="materias">Portugês, Matemática, História.</h4>
                            </div>
                            <div id="endereco" class="container">
                                <i class="material-icons">location_on</i>SQS 410 Asa Sul, Brasília.
                            </div>
                        </div>
                        <div id='calendar' class="calendar"></div>
                        <div style='clear:both'></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #intro -->
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
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

    <!--Full Calendar-->
    <script src='fullcalendar/packages/core/main.js'></script>
    <script src='fullcalendar/packages/interaction/main.js'></script>
    <script src='fullcalendar/packages/daygrid/main.js'></script>
    <script src='fullcalendar/packages/timegrid/main.js'></script>
    <script src='fullcalendar/packages/list/main.js'></script>

    <script>

        $(document).ready(function () {
            var Calendar = FullCalendar.Calendar;
            $(".calendar").each(function () {

                //var calendarEl = document.getElementById('calendar');
                var calendarEl = this;
                var calendar = new Calendar(calendarEl, {
                    height: parent,
                    aspectRatio: 2,
                    plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                    },
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar
                    drop: function (arg) {
                        // is the "remove after drop" checkbox checked?
                        if (document.getElementById('drop-remove').checked) {
                            // if so, remove the element from the "Draggable Events" list
                            arg.draggedEl.parentNode.removeChild(arg.draggedEl);
                        }
                    }
                });
                calendar.render()

            });
        });
    </script>
</body>
</html>

