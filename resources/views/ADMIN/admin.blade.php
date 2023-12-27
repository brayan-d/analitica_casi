<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administrador | Analítica Solidaria</title>
    <!-- Agrega la referencia a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
<style>
    @media (min-width: 1280px) and (max-width: 1535px) {
       /* margin botoom */
       .margin{
            margin-bottom: 0%;
        }
        /* servicios */
        #ser{
            width: 70%;
            margin-left: 10%; 
            margin-bottom: 3%;
        }
        #h1bd{
            color: #012060;
            margin-bottom: 2%;
        }
        #servicios-section{
            margin-left: 200px;
            margin-bottom: 2%;
            font-family: 'GlacialIndifference-Bold', sans-serif;
        }
        #one{
            margin-left: 121px;
        }
        #dos{
            margin-left: 200px;
        }
        #dieci{
            margin-left: 167px;
        }
        #dieci2{
            margin-left: 127px;
        }
        #dieci3{
            margin-left: 182px;
        }
        #ciencu{
            margin-left: 153px;
        }
        #ciendie{
            margin-left: 128px;
        }
        #ciensio{
            margin-left: 187px;
        }
        #one, #dos, #dieci, #ciencu, #ciendie, #ciensio, #dieci2, #dieci3{
            font-family: 'GlacialIndifference-Bold', sans-serif;
            margin-bottom: 3%;
        }
        /* titulo de viajero o anfitrion--- */
        @font-face {
        font-family: 'GlacialIndifference-Bold';
        src: url('../../../public/font/GlacialIndifference-Bold.otf') format('opentype');
        }

    }

</style>
</head>
<body>
    <!-- CABECERA -->
 @include('partials.navbar')

 <div class="margin"></div>
        <div class="servicios" id="ser">
                <!-- SERVICIOS -->
            <div   id="servicios-section">
                <h1 id="h1bd"> Bienvenido Administrador</h1>
            </div>
        
            <!-- ver USUARIOS -->
            <div class="fas fa" id="dos">
                <a href="{{ route('users') }}" class="btn btn-primary">Ver usuarios</a>
            </div>
            <!-- ver pedidos -->
            <div class="fas fa" id="dos">
                <a href="{{ route('compras') }}" class="btn btn-primary">Ver compras</a>
            </div>
          
            <!-- formulario informes -->
            <div class="fas fa" id="dos">
                <a href="{{ route('admin.subir-producto') }}" class="btn btn-primary">Subir un nuevo informe</a>
            </div>

            <!-- ver productos -->
            <div class="fas fa" id="one">
                <a href="{{ route('informe') }}" class="btn btn-primary">Ver informes</a>
            </div>
          
            <!-- FORMULARIO ICONOS DEL HOME -->
            <div class="fas fa" id="dos">
                <a href="{{ route('admin.subir_icono') }}" class="btn btn-primary">Subir iconos home</a>
            </div>
            <!-- ver ICONOS DEL HOME -->
            <div class="fas fa" id="ciencu">
                <a href="{{ route('iconos') }}" class="btn btn-primary">Ver iconos home</a>
            </div>
           
            <!-- FORMULARIO CONTENIDO DEL HOME -->
            <div class="fas fa" id="dos">
                <a href="{{ route('admin.subir-contenido') }}" class="btn btn-primary">Subir contenido home</a>
            </div>
            <!-- ver contenido DEL HOME -->
            <div class="fas fa" id="ciendie">
                <a href="{{ route('contenido') }}" class="btn btn-primary">Ver contenido home</a>
            </div>
           
            <!-- FORMULARIO noticias DEL HOME -->
            <div class="fas fa" id="dos">
                <a href="{{ route('admin.subir-noticia') }}" class="btn btn-primary">Subir noticias</a>
            </div>
            <!-- ver noticias DEL HOME -->
            <div class="fas fa" id="ciensio">
                <a href="{{ route('blogg') }}" class="btn btn-primary">Ver noticias home</a>
            </div>
           
            <!-- FORMULARIO noticias DEL HOME -->
            <div class="fas fa" id="dos">
                <a href="{{ route('admin.subir-carrusel') }}" class="btn btn-primary">Subir al carrusel</a>
            </div>
            <!-- ver noticias DEL HOME -->
            <div class="fas fa" id="dieci">
                <a href="{{ route('carrusel') }}" class="btn btn-primary">Ver carrusel home</a>
            </div>
          
            <!-- FORMULARIO marquesina -->
            <div class="fas fa" id="dos">
                <a href="{{ route('admin.subir-marquesina') }}" class="btn btn-primary">Subir a la marquesina</a>
            </div>
            <!-- ver marquesina -->
            <div class="fas fa" id="dieci2">
                <a href="{{ route('marquesina') }}" class="btn btn-primary">Ver marquesina</a>
            </div>
           
            <!-- FORMULARIO marquesina -->
            <div class="fas fa" id="dos">
                <a href="{{ route('admin.subir-cliente') }}" class="btn btn-primary">Subir empresa</a>
            </div>
            <!-- ver marquesina -->
            <div class="fas fa" id="dieci3">
                <a href="{{ route('cliente') }}" class="btn btn-primary">Ver empresas</a>
            </div>
        </div>
         
<!-- FOOTER -->

@include('footer.footer')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>