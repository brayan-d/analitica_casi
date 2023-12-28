<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* RESPONSIVE---------------------------------------T */
        /*3xl Pantallas mas grandes*/
        @media (min-width: 1850px) {

            /* Estilos CSS para el pie de página */
            footer {
                color: white;
                padding: 40px 0;
                background-color: #012060;
                text-align: center;
                width: 86.6%;
                margin-left: 13.5%;
            }

            .footer-content {
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                margin-left: 5%;
            }

            .logo {
                width: 300px;
                /* Tamaño del logo */
            }

            .contact-info {
                font-size: 13px;
            }

            .contact-info p {
                margin: 5px 0;
            }

            .social-media {
                display: flex;
                flex-direction: column;
                /* Para colocar los iconos uno debajo del otro */
                align-items: center;
                text-align: center;
                /* Para centrar el texto "Redes Sociales" */
                margin-left: -200px;
            }

            .social-media a {
                color: white;
                font-size: 16px;
                /* Tamaño de los iconos */
            }

            .social-title {
                font-size: 14px;
                /* Tamaño del título "Redes Sociales" */
                margin-bottom: 5px;
                /* Espacio entre el título y los iconos */
            }

            body {
                margin: 0;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }

            .survey-container {
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-left: 1%;
            }

            .survey-title a {
                color: #008282;
                text-decoration: none;
                font-size: 24px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .survey-title a i {
                margin-right: 10px;
            }

            .survey-text {
                color: #000;
                text-align: center;
                margin-top: 20px;
            }

            .btn-realizar {
                background-color: #008282;
                border: 2px solid #008282;
                color: #ffffff;
                text-decoration: none;
                padding: 10px 20px;
                border-radius: 5px;
                display: inline-block;
                margin-top: 20px;
                transition: background-color 0.3s ease;
            }

            .btn-realizar:hover {
                background-color: #005353;
            }

            @font-face {
                font-family: 'GlacialIndifference-Bold';
                src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }

            @font-face {
                font-family: 'GlacialIndifference-Regular';
                src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
            }
        }
        /*Terminan 2xl Pantallas grandes----------------------------------------------*/

                /*2xl Pantallas grandes*/
                @media (min-width: 1536px) and (max-width: 1849px) {

            /* Estilos CSS para el pie de página */
            footer {
                color: white;
                padding: 40px 0;
                background-color: #012060;
                text-align: center;
                width: 86.6%;
                margin-left: 13.5%;
            }

            .footer-content {
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                margin-left: 5%;
            }

            .logo {
                width: 300px;
                /* Tamaño del logo */
            }

            .contact-info {
                font-size: 13px;
            }

            .contact-info p {
                margin: 5px 0;
            }

            .social-media {
                display: flex;
                flex-direction: column;
                /* Para colocar los iconos uno debajo del otro */
                align-items: center;
                text-align: center;
                /* Para centrar el texto "Redes Sociales" */
                margin-left: -200px;
            }

            .social-media a {
                color: white;
                font-size: 16px;
                /* Tamaño de los iconos */
            }

            .social-title {
                font-size: 14px;
                /* Tamaño del título "Redes Sociales" */
                margin-bottom: 5px;
                /* Espacio entre el título y los iconos */
            }

            body {
                margin: 0;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }

            .survey-container {
                max-width: 600px;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-left: 1%;
            }

            .survey-title a {
                color: #008282;
                text-decoration: none;
                font-size: 24px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .survey-title a i {
                margin-right: 10px;
            }

            .survey-text {
                color: #000;
                text-align: center;
                margin-top: 20px;
            }

            .btn-realizar {
                background-color: #008282;
                border: 2px solid #008282;
                color: #ffffff;
                text-decoration: none;
                padding: 10px 20px;
                border-radius: 5px;
                display: inline-block;
                margin-top: 20px;
                transition: background-color 0.3s ease;
            }

            .btn-realizar:hover {
                background-color: #005353;
            }

            @font-face {
                font-family: 'GlacialIndifference-Bold';
                src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }

            @font-face {
                font-family: 'GlacialIndifference-Regular';
                src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
            }
               /*  */
               #rd{
                margin-left: -115%;
                color: white; 
                text-decoration: none;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 45px;
            }
            #social-icon{
                color: white ;
                 font-size: 50px;
                 margin-left: -115%;
            }
                }


        /*xl Pantallas semiGrandes*/
        @media (min-width: 1280px) and (max-width: 1849px) {

            /* Estilos CSS para el pie de página */
            footer {
                color: white;
                padding: 40px 0;
                background-color: #012060;
                text-align: center;
                width: 81.5%;
                margin-left: 18.7%;
            }
            .footer-content {
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                margin-left: 5%;
            }
            .logo {
                width: 300px;
            }
            .contact-info {
                font-size: 13px;
            }
            .contact-info p {
                margin: 5px 0;
            }
            .social-media {
                display: flex;
                flex-direction: column;
                color: white;
                font-size: 16px;
                margin-left: -30px;
            }
            .social-title {
                font-size: 14px;
                /* Tamaño del título "Redes Sociales" */
                margin-bottom: 5px;
                /* Espacio entre el título y los iconos */
            }
            body {
                margin: 0;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            .survey-container {
                max-width: 35%;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-left:1%;
            }
            .survey-title a {
                color: #008282;
                text-decoration: none;
                font-size: 24px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .survey-title a i {
                margin-right: 10px;
            }
            .survey-text {
                color: #000;
                text-align: center;
                margin-top: 20px;
            }
            .btn-realizar {
                background-color: #008282;
                border: 2px solid #008282;
                color: #ffffff;
                text-decoration: none;
                padding: 10px 20px;
                border-radius: 5px;
                display: inline-block;
                margin-top: 20px;
                transition: background-color 0.3s ease;
            }
            .btn-realizar:hover {
                background-color: #005353;
            }
            #rd{
                margin-left: -15%;
            }
            @font-face {
                font-family: 'GlacialIndifference-Bold';
                src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }

            @font-face {
                font-family: 'GlacialIndifference-Regular';
                src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
            }
            /*  */
            #rd{
               
                color: white; 
                text-decoration: none;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 25px;
            }
            #social-icon{
                color: white ;
                 font-size: 45px;
                
            }
        }
        /*Terminan xl Pantallas semiGrandes*/

        /*lg Pantallas mediaGrandes*/
        @media (min-width: 1024px) and (max-width: 1279px) {
  /* Estilos CSS para el pie de página */
            footer {
                color: white;
                padding: 40px 0;
                background-color: #012060;
                text-align: center;
                width: 88%;
                margin-left: 24.5%;
            }
            #icont{
               color:  #012060;
            }
            .footer-content {
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                margin-left: 5%;
            }
            .logo {
                width: 300px;
            }
            .contact-info {
                font-size: 25px;
                width: 90%;
                height: 50%;
            }
            .contact-info p {
                margin: 5px 0;
            }
            .social-media {
                display: flex;
                flex-direction: column;
                color: white;
                font-size: 16px;
                margin-left: -10px;
            }
            .social-title {
                font-size: 14px;
                /* Tamaño del título "Redes Sociales" */
                margin-bottom: 5px;
                /* Espacio entre el título y los iconos */
            }
            body {
                margin: 0;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            .survey-container {
                max-width: 36%;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-left: -3%;
            }
            .survey-title a {
                color:#012060;
                text-decoration: none;
                font-size: 24px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .survey-title a i {
                margin-right: 10px;
            }
            .survey-text {
                color: #2175aa;
                text-align: center;
                margin-top: 20px;
            }
            .btn-realizar {
                background-color:#012060;
                border: 2px solid #008282;
                color: #ffffff;
                text-decoration: none;
                padding: 10px 20px;
                border-radius: 5px;
                display: inline-block;
                margin-top: 20px;
                transition: background-color 0.3s ease;
            }
            .btn-realizar:hover {
                background-color: #005353;
            }
            #rd{
                margin-left: -15%;
            }
            @font-face {
                font-family: 'GlacialIndifference-Bold';
                src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }

            @font-face {
                font-family: 'GlacialIndifference-Regular';
                src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
            }
        }
        /*lg termina Pantallas mediaGrandes*/

        /*md Pantallas Medianas-----------------------------------------------------------------------------*/
        @media (min-width: 768px) and (max-width: 1023px) {
 /* Estilos CSS para el pie de página */
            footer {
                color: white;
                padding: 40px 0;
                background-color: #012060;
                text-align: center;
                width: 97%;
                margin-left: 0%;
                height: 10%;
            }
            #imffoo{
                width: 230px;
                height: 140px;
                margin-left: -40%;
            }
            #icont{
               color:  #012060;
            }
            .footer-content {
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                margin-left: 5%;
            }
            .logo {
                width: 300px;
            }
            .contact-info {
                font-size: 25px;
                width: 84%;
                height: 50%;
                margin-left: -15%;
            }
            .contact-info p {
                margin: 5px 0;
            }
            .social-media {
                display: flex;
                flex-direction: column;
                color: white;
                font-size: 16px;
                margin-left: -10px;
            }
            .social-title {
                font-size: 14px;
                /* Tamaño del título "Redes Sociales" */
                margin-bottom: 5px;
                /* Espacio entre el título y los iconos */
            }
            body {
                margin: 0;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            .survey-container {
                max-width: 35%;
                margin: 0 auto;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin-left: -21%;
            }
            .survey-title a {
                color:#012060;
                text-decoration: none;
                font-size: 24px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .survey-title a i {
                margin-right: 10px;
            }
            .survey-text {
                color: #2175aa;
                text-align: center;
                margin-top: 20px;
            }
            .btn-realizar {
                background-color:#012060;
                border: 2px solid #008282;
                color: #ffffff;
                text-decoration: none;
                padding: 10px 20px;
                border-radius: 5px;
                display: inline-block;
                margin-top: 20px;
                transition: background-color 0.3s ease;
            }
            .btn-realizar:hover {
                background-color: #005353;
            }
            #rd{
                margin-left: -115%;
                color: white; 
                text-decoration: none;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 15px;
            }
            @font-face {
                font-family: 'GlacialIndifference-Bold';
                src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }

            @font-face {
                font-family: 'GlacialIndifference-Regular';
                src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
            }
            #social-icon{
                color: white ;
                 font-size: 30px;
                 margin-left: -115%;
            }
        }

        /*Terminan md Pantallas Medianas*/

        /*sm Pantallas Pequeñas*/
        @media (min-width: 340px) and (max-width: 767px) {}

        /*Termina sm Pantallas Pequeñas*/
        /*Termina Responsive  */
    </style>
</head>

<body>
    <footer>
        <div class="footer-content">
            <div>


                <img src="{{ asset('img/solidata1.jpg') }}" id="imffoo" alt="Logo" class="logo">
                <br>
                <br>
                <br>

                <div class="contact-info">
                    <a class="fas " href="{{route ('tel') }}" style="color: white; text-decoration: none;font-family: 'GlacialIndifference-Bold', sans-serif;font-size:15px;"> 301-215-9933</a>
                    <br>
                    <a class="fas " href="{{route ('location') }}" style="color: white; text-decoration: none;font-family: 'GlacialIndifference-Bold', sans-serif;font-size:15px;"> Cra 76A #3C-35</a>
                    <br>
                    <a class="fas" href="{{route ('email') }}" style="color: white; text-decoration: none;font-family: 'GlacialIndifference-Bold', sans-serif;font-size:15px;"> esteban.analista riesgosyanaliticasolidaria.onmicrosft.com</a>
                </div>
            </div>

            <!-- Espacio para la encuesta -->
            <div class="survey-container">
                <h2 class="survey-title">
                    <a href="#" style="text-decoration: none;">
                        <i class="fas fa-poll" id="icont"></i> ENCUESTA
                    </a>
                </h2>
                <p class="survey-text">
                    Nos permitimos comunicar que ANALITICA SOLIDARIA cuenta en su base de datos integrada con información suministrada por usted en el desarrollo de actividades propias...
                </p>
                <a class="btn-realizar" href="#">REALIZAR</a>
            </div>

            <!-- --------------------------------- -->
            <div class="social-media">
                <a class="fa-solid " id="rd" href="#" style="color: white;"> REDES SOCIALES</a>
                <br>
                <!-- Icono de WhatsApp -->
                <a href="{{route ('wpp') }}" class="social-icon" id="social-icon" ><i class="fab fa-whatsapp"></i></a>

                <!-- Icono de Instagram -->
                <a href="{{route ('instagram') }}" class="social-icon" id="social-icon" style=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>