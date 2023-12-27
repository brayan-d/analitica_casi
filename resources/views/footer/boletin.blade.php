<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css">
    <style>
/* RESPONSIVE---------------------------------------T */
    /*3xl Pantallas mas grandes*/
    @media (min-width: 1850px) {
        .boletin {
            background-image: url('{{ asset("img/boletin.PNG") }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: white;
            padding: 20px 0;
            height: 300px;
            position: relative;
            margin-left: 13%;
            width: 87%;
        }
        /* Estilos para el botón Suscribirse */
        #subscribe-button {
            position: absolute;
            top: 15%; /* Centra verticalmente el botón */
            right: 10%; /* Alinea a la derecha */
            transform: translateY(-50%); /* Alinea verticalmente con respecto al centro */
            background: transparent;
            border: 2px solid #012060;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            color: #012060;
            text-decoration: none;
            border-radius: 25px;
            transition: RGB(0 130 130) , color RGB(0 130 130);
        }
        #subscribe-button:hover {
            background: #2175aa;
            color: white;
        }
        /* Estilos para el cuadro blanco */
        .white-box {
            position: absolute;
            bottom: 10%;
            left: 10%;
            right: 10%;
            background: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            font-size: 15px;
        }
        /* Estilos para la campana */
        #campana {
            margin-left: 0px; /* Añade margen izquierdo para mover solo la campana */
            margin-top: -50px;
            color: #2175aa;
            text-decoration: none;
            font-size:35px;
        }
        @font-face {
        font-family: 'GlacialIndifference-Bold';
        src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
        }
        @font-face {
        font-family: 'GlacialIndifference-Regular';
        src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
        }
        /* Estilos CSS para el ícono personalizado */
        #boxicon, b{
            margin-left:10%; 
            font-size:35px; 
            color: rgb(0, 0, 0); 
            text-decoration: none;
            color:#2175aa;
            font-family: 'GlacialIndifference-Bold', sans-serif;
        }
        #spanfoo{
            font-size: 35px;
            color:#2175aa;
        }
        #fecha{
            color:#2175aa;
            text-decoration: none;
            font-size:50px;
        }
    }
/*Terminan 2xl Pantallas grandes*/

        /*2xl Pantallas grandes*/
        @media (min-width: 1536px) and (max-width: 1849px) {
            .boletin {
            background-image: url('{{ asset("img/boletin.PNG") }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: white;
            padding: 20px 0;
            height: 300px;
            position: relative;
            margin-left: 13%;
            width: 87%;
        }
        /* Estilos para el botón Suscribirse */
        #subscribe-button {
            position: absolute;
            top: 15%; /* Centra verticalmente el botón */
            right: 10%; /* Alinea a la derecha */
            transform: translateY(-50%); /* Alinea verticalmente con respecto al centro */
            background: transparent;
            border: 2px solid #012060;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            color: #012060;
            text-decoration: none;
            border-radius: 25px;
            transition: RGB(0 130 130) , color RGB(0 130 130);
        }
        #subscribe-button:hover {
            background: #2175aa;
            color: white;
        }
        /* Estilos para el cuadro blanco */
        .white-box {
            position: absolute;
            bottom: 10%;
            left: 10%;
            right: 10%;
            background: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            font-size: 15px;
        }
        /* Estilos para la campana */
        #campana {
            margin-left: 0px; /* Añade margen izquierdo para mover solo la campana */
            margin-top: -50px;
            color: #2175aa;
            text-decoration: none;
            font-size:35px;
        }
        @font-face {
        font-family: 'GlacialIndifference-Bold';
        src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
        }
        @font-face {
        font-family: 'GlacialIndifference-Regular';
        src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
        }
        /* Estilos CSS para el ícono personalizado */
        #boxicon, b{
            margin-left:10%; 
            font-size:35px; 
            color: rgb(0, 0, 0); 
            text-decoration: none;
            color:#2175aa;
            font-family: 'GlacialIndifference-Bold', sans-serif;
        }
        #spanfoo{
            font-size: 35px;
            color:#2175aa;
        }
        #fecha{
            color:#2175aa;
            text-decoration: none;
            font-size:50px;
        }
        }

/*xl Pantallas semiGrandes*/
@media (min-width:  1280px) and (max-width: 1849px) {
  /* Estilos CSS para el pie de página */
  .boletin {
            background-image: url('{{ asset("img/boletin.PNG") }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: white;
            padding: 20px 0;
            height: 300px;
            position: relative;
            margin-left: 13%;
            width: 87%;
        }
        /* Estilos para el botón Suscribirse */
        #subscribe-button {
            position: absolute;
            top: 15%; /* Centra verticalmente el botón */
            right: 10%; /* Alinea a la derecha */
            transform: translateY(-50%); /* Alinea verticalmente con respecto al centro */
            background: transparent;
            border: 2px solid #012060;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            color: #012060;
            text-decoration: none;
            border-radius: 25px;
            transition: RGB(0 130 130) , color RGB(0 130 130);
        }
        #subscribe-button:hover {
            background: #2175aa;
            color: white;
        }
        /* Estilos para el cuadro blanco */
        .white-box {
            position: absolute;
            bottom: 10%;
            left: 10%;
            right: 10%;
            background: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            font-size: 15px;
        }
        /* Estilos para la campana */
        #campana {
            margin-left: 0px; /* Añade margen izquierdo para mover solo la campana */
            margin-top: -50px;
            color: #2175aa;
            text-decoration: none;
            font-size:35px;
        }
        @font-face {
        font-family: 'GlacialIndifference-Bold';
        src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
        }
        @font-face {
        font-family: 'GlacialIndifference-Regular';
        src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
        }
        /* Estilos CSS para el ícono personalizado */
        #boxicon, b{
            margin-left:10%; 
            font-size:35px; 
            color: rgb(0, 0, 0); 
            text-decoration: none;
            color:#2175aa;
            font-family: 'GlacialIndifference-Bold', sans-serif;
        }
        #spanfoo{
            font-size: 35px;
            color:#2175aa;
        }
        #fecha{
            color:#2175aa;
            text-decoration: none;
            font-size:50px;
        }
}
/*Terminan xl Pantallas semiGrandes*/

/*lg Pantallas mediaGrandes*/
@media (min-width: 1024px) and (max-width: 1279px) {
    .boletin {
            background-image: url('{{ asset("img/boletin.PNG") }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: white;
            padding: 20px 0;
            height: 300px;
            position: relative;
            margin-left: 18%;
            width: 95%;
        }
        /* Estilos para el botón Suscribirse */
        #subscribe-button {
            position: absolute;
            top: 15%; /* Centra verticalmente el botón */
            right: 10%; /* Alinea a la derecha */
            transform: translateY(-50%); /* Alinea verticalmente con respecto al centro */
            background: transparent;
            border: 2px solid #012060;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            color: #012060;
            text-decoration: none;
            border-radius: 25px;
            transition: RGB(0 130 130) , color RGB(0 130 130);
        }
        #subscribe-button:hover {
            background: #2175aa;
            color: white;
        }
        /* Estilos para el cuadro blanco */
        .white-box {
            position: absolute;
            bottom: 10%;
            left: 10%;
            right: 10%;
            background: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            font-size: 30px;
        }
        /* Estilos para la campana */
        #campana {
            margin-left: 0px; /* Añade margen izquierdo para mover solo la campana */
            margin-top: -50px;
            color: #2175aa;
            text-decoration: none;
            font-size:50px;
        }
        @font-face {
        font-family: 'GlacialIndifference-Bold';
        src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
        }
        @font-face {
        font-family: 'GlacialIndifference-Regular';
        src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
        }
        /* Estilos CSS para el ícono personalizado */
        #boxicon, b{
            margin-left:10%; 
            font-size:30px; 
            color: rgb(0, 0, 0); 
            text-decoration: none;
            color:#2175aa;
            font-family: 'GlacialIndifference-Bold', sans-serif;
        }
        #spanfoo{
            font-size: 25px;
            color:#2175aa;
        }
        #fecha{
            color:#2175aa;
            text-decoration: none;font-size:50px;
        }
}
/*termina lg Pantallas mediaGrandes-----------------------------------------------------------------*/

/*md Pantallas Medianas*/
@media (min-width: 768px) and (max-width: 1023px) {
    .boletin {
            background-image: url('{{ asset("img/boletin.PNG") }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: white;
            padding: 20px 0;
            height: 300px;
            position: relative;
            margin-left: 18%;
            width: 95%;
        }
        /* Estilos para el botón Suscribirse */
        #subscribe-button {
            position: absolute;
            top: 15%; /* Centra verticalmente el botón */
            right: 10%; /* Alinea a la derecha */
            transform: translateY(-50%); /* Alinea verticalmente con respecto al centro */
            background: transparent;
            border: 2px solid #012060;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            color: #012060;
            text-decoration: none;
            border-radius: 25px;
            transition: RGB(0 130 130) , color RGB(0 130 130);
        }
        #subscribe-button:hover {
            background: #2175aa;
            color: white;
        }
        /* Estilos para el cuadro blanco */
        .white-box {
            position: absolute;
            bottom: 10%;
            left: 10%;
            right: 10%;
            background: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            font-size: 30px;
        }
        /* Estilos para la campana */
        #campana {
            margin-left: 0px; /* Añade margen izquierdo para mover solo la campana */
            margin-top: -50px;
            color: #2175aa;
            text-decoration: none;
            font-size:50px;
        }
        @font-face {
        font-family: 'GlacialIndifference-Bold';
        src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
        }
        @font-face {
        font-family: 'GlacialIndifference-Regular';
        src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
        }
        /* Estilos CSS para el ícono personalizado */
        #boxicon, b{
            margin-left:10%; 
            font-size:30px; 
            color: rgb(0, 0, 0); 
            text-decoration: none;
            color:#2175aa;
            font-family: 'GlacialIndifference-Bold', sans-serif;
        }
        #spanfoo{
            font-size: 25px;
            color:#2175aa;
        }
        #fecha{
            color:#2175aa;
            text-decoration: none;font-size:50px;
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
<div class="boletin">
    <a href="{{ route('boletin') }}" id="boxicon"><i class='bx bxs-envelope'></i><b>BOLETIN</b></a>
    <!-- Ícono de la campana -->
    <a class="fas fa-caret-right" id="subscribe-button" href="{{ route('boletin') }}"> SUSCRIBIRSE</a>
    <!-- Contenido de tu pie de página aquí -->
    <div class="white-box">
        <!-- Contenido de tu cuadro blanco aquí -->
        <a class="fas fa-bell" id="campana"></a>
        <a class="fas fa" id="spanfoo" style="color:RGB(0 130 130);text-decoration: none;" href="{{ route('boletin') }}"> <span id="spanfoo"> ¿Desea recibir informacion de <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Analitica Solidaria  en su correo?</span></a>
        <a class="fas fa" id="fecha" id="custom-icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2024</a>
    </div>
</div>

</body>
</html>