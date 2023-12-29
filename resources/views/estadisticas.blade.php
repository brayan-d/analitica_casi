<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estadisticas del sector | Analítica Solidaria</title>
    <style>
        /* textto de contenido */
        @font-face {
        font-family: 'GlacialIndifference-Bold';
        src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
        }
        @font-face {
        font-family: 'GlacialIndifference-Regular';
        src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
        }
        .image {
            max-width: 100%; /* Asegura que la imagen no se desborde */
        }
        /* Estilo para el texto que se superpone a la imagen */
        .text-overlay {
            position: absolute;
            top: 50px; /* Ajusta la posición vertical del texto */
            left: 10px; /* Ajusta la posición horizontal del texto */
            width: 730px;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo semitransparente para el texto */
            padding: 10px; /* Espacio interno del texto */
            border: 1px solid rgba(255, 255, 255, 0.8); /* Borde alrededor del texto */
            margin-left: 600px; 
            margin-top: 100px; 
            font-size: 10px
        }
        .text-overla {
            position: absolute;
            top: -50px; /* Ajusta la posición vertical del texto */
            left: 10px; /* Ajusta la posición horizontal del texto */
            width: 730px;
            padding: 10px; /* Espacio interno del texto */
            margin-left: 1150px;
            margin-top: 100px; 
            font-size: 20px
        }
        .accordion-button {
            cursor: pointer;
            margin-left: 300px;
            background-color: #EBE9E9;
            width: 450px;
            height: 50px;
            margin-top: 5px;
        }
        .accordion-content {
            display: none;
            margin-left: 300px;
            width: 450px;
        }
        .titu{
            margin-left: 300px;
            background-color:#012060;
            color: white;
            width: 450px;
            height: 50px;
            margin-top: 5px;
        }
        .line {
            border: 1px solid #008282; /* Color verde (#00FF00) y grosor de 1 píxel */
            width: 100px; /* Ancho de la línea */
        }
        .green-box {
            background-color:#c0c0c0;
            width: 50%;
            margin-right: 10px;
            float:inline-end;
            font-size: 10px;
            text-align: start;
        }
        .green-box-2 {
            background-color:#c0c0c0;
            width: 47%;
            margin-right: 10px;
            float:inline-end;
            font-size: 10px;
            text-align: start;
        }
        #imgpng{
            margin-left: 22%;
            width: 65%;
            margin-bottom: 5%;
        }
        .image-container{
            width: 1000px;
            background-color:#008282;
        }
        #txt{
            color: #000;
            text-decoration: none;
        }
        #tab1{
            margin-top: 15px;
            font-family: 'GlacialIndifference-Bold', sans-serif;
        }
        .tablaiz{
            height: 500px;
            width: 450px;
            margin-bottom: 4%;
            margin-left: 6%;
            font-size: 26px;
        }
        #dd, #pe, #ap, #ap2{
            font-size: 20px;
        }
        #h3{
            font-family: 'GlacialIndifference-Bold', sans-serif;
            font-size: 38px;
            color: #012060;
        }
        #cont{
            font-size:38px;
            color: #012060;
        }
        #descrip{
            color:#2175aa;
            font-size: 24px;
        }
        #md{
            color:black;
            font-size: 24px;
        }
        .accordion-button{
            height: 8vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-left: 3%;
        }
        #mgb{
            margin-bottom:2%;
        }

    </style>
</head>
<body>
    <!-- Navbar y Cabecera -->
    @include('partials.navbar')
   
    <div id="mgb"></div>

    <div class="imgprincipal">
        <img src="{{ asset('img/cp.png') }}" id="imgpng" class="image" alt="Imagen">
    </div>
|<br>
<div class="tablaiz">
        <!-- ... (código HTML anterior) ... -->
    <div class="fas fa titu" onclick="toggleAccordion('button1')"> 
        <div id="tab1">&nbsp;&nbsp;ESTADISTICAS DEL SECTOR</div>
    </div>

    <div class="fas accordion-button" onclick="toggleAccordion('button1')"> 
        <div id="tab1">• Cifras Generales</div>
    </div>
    <div class="accordion-content" id="button1"> Información para el Botón 1. Puede ser texto, imágenes, videos, etc.</div>

    <div class="fas fa accordion-button" onclick="toggleAccordion('button2')"> 
        <div id="tab1">• Gestion de Riesgos</div>
    </div>
    <div class="accordion-content" id="button2"> Información para el Botón 2.</div>

    <div class="fas fa accordion-button" onclick="toggleAccordion('button3')"> 
        <div id="tab1">• Resumen Ejecutivo</div>
    </div>
    <div class="accordion-content" id="button3"> Información para el Botón 3.</div>

    <div class="fas fa accordion-button" onclick="toggleAccordion('button4')"> 
        <div id="tab1">• Cifras de la industria</div>
    </div>
    <div class="accordion-content" id="button4">Información para el Botón 4.</div>

    <div class="fas fa accordion-button" onclick="toggleAccordion('button5')"> 
        <div id="tab1">• Visualizador inteligente de cifras</div>
    </div>
    <div class="accordion-content" id="button5"> Información para el Botón 5.</div>

    <div class="fas fa accordion-button" onclick="toggleAccordion('button6')"> 
        <div id="tab1">• Definicion de los Indicadores del Sector</div>
    </div>
    <div class="accordion-content" id="button6">Información para el Botón 6.</div>
</div>
<!-- ... ... -->
<div class="content-container" style="margin-left:52%; width: 35%; margin-top: -30%;">
    <div class="text-container">
            <h3 id="h3">Estadisticas del Sector</h3>
            <br>
            <p id="descrip">Sistema de Información Estadística de Analítica Solidaria actualmente.</p>
            <p id="md">Mediante un proceso de recopilación de información, el gremio pone a disposición del público una herramienta de gran utilidad para el análisis de la evolución del renglón de seguros.</p>
            <br>
            <div class="line"></div>
            <br>
            <p id="cont">Contacto</p>
        <!-- Cuadros verdes -->
        <div class="green-box">
            <b id="dd">Director de Estadisticas</b>
            <b id="ap">Andre P. Ojuela</b>
           <b id="ap2">Andere12df@gmail.com</b>
            <b id="ap2">Analitica Solidaria</b>
        </div>

        <div class="green-box-2">
            <h6><b id="pe">Profesional de Estadisticas</b></h6>
            <h6><b id="ap2">Jose A. Zapata</b></h6>
            <h6><b id="ap2">Jose121AD@gmail.com</b></h6>
            <h6><b id="ap2">Analitica Solidaria</b></h6>
        </div>
    </div>
</div>

    <br><br><br><br><br><br><br>

    <br><br> 

    <!-- footer -->
    @include('footer.footer')
    <script>
        function toggleAccordion(id) {
            var content = document.getElementById(id);
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        }
    </script>
</body>
</html>

