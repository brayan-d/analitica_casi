<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cifras generales | Analítica Solidaria</title>
    <style>
        @font-face {
        font-family: 'GlacialIndifference-Bold';
        src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
        }
        @font-face {
        font-family: 'GlacialIndifference-Regular';
        src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
        }
        /* Estilo para el imagen */
        .col-md-6{
            margin-bottom: 2%;
        }

        .image {
            max-width: 100%; /* Asegura que la imagen no se desborde */
        }

         /* Estilo para el texto que se superpone a la imagen */
         .text-overlay {
            position: absolute;
            top: 50px; /* Ajusta la posición vertical del texto */
            width: 78%;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo semitransparente para el texto */
            padding: 10px; /* Espacio interno del texto */
            border: 1px solid rgba(255, 255, 255, 0.8); /* Borde alrededor del texto */
            margin-left: 85%; 
            margin-top:15%; 
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1); /* Drop shadow para los bordes */
            box-sizing: border-box; /* Incluye el grosor del borde en el tamaño total del elemento */
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(to right, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.9) 90%);
        }
        /* decoracion riesgos white */
        #decover{
            color: #000;
            text-decoration: none;
        }
        #spgr{
            font-size: 40px;
        }
        .text-overla {
            position: absolute;
            top: -50px; /* Ajusta la posición vertical del texto */
            left: 30%; /* Ajusta la posición horizontal del texto */
            width: 730px;
            padding: 10px; /* Espacio interno del texto */
        }
        .cifras{
            background-color: white;
            height: 300px;
            margin-left: 280px;
        }
        .line {
            border: 2px solid #008282; /* Color verde (#00FF00) y grosor de 1 píxel */
            width: 210px; /* Ancho de la línea */
            margin-left: 20px;
            
        }
        .fondimg {
            position: absolute;
            top: 50px; /* Ajusta la posición vertical del fondo */
            left: 10px; /* Ajusta la posición horizontal del fondo */
            width: 78%;
            height: 100%;
            background: linear-gradient(to right, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.9) 90%);
            padding: 10px; /* Espacio interno del texto */
            margin-left: 700px; 
            margin-top: -7.3%; 
            font-size: 50px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1); /* Drop shadow para los bordes */
            box-sizing: border-box; /* Incluye el grosor del borde en el tamaño total del elemento */
        }
        #img-fluid{
            width: 120px;
            margin-left: -2%;
            font-size: 30px;
        }
        #iconlat{
            margin-left:120%; 
            margin-top: 60px; 
            font-size: 20px
        }
        #mrgt{
            margin-bottom: 4%;
        }
        /* cifras---------------------------------------- */
        .cifras{
            background-color: white;
            height: 300px;
            margin-left: 26%;
            display: flex;
            width: 20%;
        }
        .indicadores{
            background-color: white;
            height: 300px;
            margin-left: 46%;
            display: flex;
            width: 20%;
        }
        .visualizador{
            background-color: white;
            height: 300px;
            margin-left: 206%;
            display: flex;
            width: 20%;
        }
        .line {
            border: 2px solid #008282; /* Color verde (#00FF00) y grosor de 1 píxel */
            width: 210px; /* Ancho de la línea */
            margin-left: 20px;
        }
       
        #c2{
            flex: 1; 
             
            height: 300px;
        }
        #ci{
            flex: 1; 
            
            height: 300px;
        }
        #c3{
            margin-top: 100px;
            color: #000; 
            margin-left: 50px;
            text-decoration: none;
            font-size: 60px;
        }
        #afaf{
            color: #000; 
            margin-left: 20px;
            text-decoration: none;
            font-size: 20px;
        }
        #vermas{
            text-decoration: none; 
            color:#008282; 
            margin-left:10%;
            margin-top:10px;
        }
        
        #vm{
            margin-left: 20%;
            font-family: 'GlacialIndifference-Bold', sans-serif;
            color: #012060;
        }
        .divmayor{
            font-family: 'GlacialIndifference-Bold', sans-serif;
        }
       
</style>
</head>
<body>
    <!-- Navbar y Cabecera -->
    @include('partials.navbar')
<!--  -->
<div id="mrgt"></div>
<!--  -->
    <div class="col-md-6 mt-0 ">
        <!-- Contenedor de la imagen y el texto -->
        <div class="image-container">
            <img src="{{ asset('img/cifras1.png') }}" style="margin-left: 280px;" class="image" alt="Imagen">
             <!-- text-overlay2 fondo blanco -->
             <div class="fondimg"></div>

            <div class="text-overla" id="iconlat">
            <img src="{{ asset('img\image27.png') }}" alt="Icono 2" class="img-fluid" id="img-fluid"><br>
            </div>

            <div class="text-overlay">
                <a  href="{{ route('cifras') }}" id="decover"><span id="spgr"> Cifras generales</span></a>
            </div>
        </div>
    </div>

    <h1 id="vm">vista de modulos cifras generales del sector</h1>
    <div class="divmayor">
        <!-- div -->
        <div class="cifras">
            <div id="c2">
                <div class="fas fa-chart-bar" id="c3"></div>
                    <div class="fas fa">
                        <a class="fas fa" href="#" id="afaf"><span>  Cifras Generales</span></a>
                        <div class="line"></iv>
                            <a id="vermas" class="fas fa" href="#">Ver mas</a><a class="fas fa-arrow-circle-right" href="#"></a>
                        </div>
                    </div>
                </div>
                  <!-- 2div -->
        <div class="indicadores">
            <div id="ci">
                <div class="fas fa-chart-bar" id="c3"></div>
                    <div class="fas fa">
                        <a class="fas fa" href="#" id="afaf"><span>  Estadisticas del Sector</span></a>
                        <div class="line"></div>
                            <a id="vermas" class="fas fa" href="#">Ver mas</a><a class="fas fa-arrow-circle-right" href="#"></a>
                        </div>
                    </div>
                     <!-- 3div  VISUALIZADOR INTELIGENTE DE CIFRAS-->
        <div class="visualizador">
            <div id="ci">
                <div class="fas fa-chart-bar" id="c3"></div>
                    <div class="fas fa">
                        <a class="fas fa" href="#" id="afaf"><span>Visualizador Inteligente de Cifras</span></a>
                        <div class="line"></div>
                            <a id="vermas" class="fas fa" href="#">Ver mas</a><a class="fas fa-arrow-circle-right" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
            </div>
        </div>
      
       
    </div>
  
<br>
    <!-- footer -->
    @include('footer.footer')
</body>
</html>
