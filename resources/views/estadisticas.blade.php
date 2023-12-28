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
   
   <br>
   <div class="container mt-4">
    <div class="row">
        @foreach ($estadisticas as $estadisticas)
        <img src="{{ asset($estadisticas->image_estadisticas) }}" alt="{{ $estadisticas->image_estadisticas }}" style="width:1000px; height:500px;margin-left: 150px;">
        <div style="margin-left:200px;">
            <p>{!! $estadisticas->texto_estadisticas !!}</p>
        </div>
        @endforeach
    </div>
</div>
    <br>

    <!-- footer -->
    @include('footer.footer')
    <script>
     
    </script>
</body>
</html>

