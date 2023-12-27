<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestión de riesgos | Analítica Solidaria</title>
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
        .image {
            max-width: 100%; /* Asegura que la imagen no se desborde */
        }
        .col-md-6{
            margin-bottom: 2%;
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
        #boton {
            background: transparent;
            border: 2px solid #2175aa;
            color: #2175aa;
            text-decoration: none;
            border-radius: 25px;
            transition: RGB(0 130 130) , color RGB(0 130 130);
        }
        .image{
            margin-left: 45%;
            width:80%
        }
        #iconlat{
            margin-left:120%; 
            margin-top: 100px; 
            font-size: 70px
        }
        .fondimg {
            position: absolute;
            top: 50px; /* Ajusta la posición vertical del fondo */
            left: 10px; /* Ajusta la posición horizontal del fondo */
            width: 750px;
            height: 100%;
            background: linear-gradient(to right, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.9) 90%);
            padding: 10px; /* Espacio interno del texto */
            margin-left: 900px; 
            margin-top: -5.3%; 
            font-size: 50px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1); /* Drop shadow para los bordes */
            box-sizing: border-box; /* Incluye el grosor del borde en el tamaño total del elemento */
        }
        #mt{
            width: 77%;
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            margin-left: 180px; 
            margin-right: 100px;
            font-family: 'GlacialIndifference-Bold', sans-serif;
            margin-bottom: 2%;
        }
        #pt{
            margin-left: 20%;
            font-size: 28px;
        }
        #img-fluid{
            width: 120px;
            margin-left: -2%;
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

    <div class="col-md-6">
        <!-- Contenedor de la imagen y el texto -->
        <div class="image-container">
            <img src="{{ asset('img/image22.png') }}" class="image" alt="Imagen">
            <!-- text-overlay2 fondo blanco -->
            <div class="fondimg"></div>
            <!-- Texto que se superpone a la imagen -->
            <div class="text-overla" id="iconlat" >
                <img src="{{ asset('img\image28.png') }}" alt="Icono 2" class="img-fluid" id="img-fluid"><br>
            </div>

            <div class="text-overlay">
                <a class="fas fa" id="decover" href="{{ route('cifras') }}"><span id="spgr"> GESTION DE RIESGOS</span></a>
            </div>
        </div>
    </div>
                <!-- Texto a la izquierda y botón a la derecha con espacio -->
                <div id="mt">
                    <div > 
                        <p id="pt">¡Mantente alerta! Detecta a tiempo todos los riesgos de lavado de dinero que puedan afectar a tu empresa. 
                            Podras evaluar constantemente a tus clientes y contrapartes para prevenir cualquier riesgo relacionado con el lavado de capitales, 
                            la evasion fiscal o el fraude.
                        </p>
                    </div>
                    <div>
                        <a href="#" id="boton" class="fas fa btn btn-primary"> RIESGOS</a>
                    </div>
                </div>
  
<br>
    <!-- footer -->
    @include('footer.footer')
</body>
</html>
