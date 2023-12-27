
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Analítica Solidaria</title>
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

    <!-- SERVICIOS -->
    <div class="container mt-5">
        <div class="text-center">
            <h1 style="color: RGB(0 130 130); border: RGB(0 130 130);">BIENVENIDO ADMINISTRADOR</h1>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('users') }}" class="btn btn-primary btn-lg btn-block">Ver usuarios</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('compras') }}" class="btn btn-primary btn-lg btn-block">Ver compras</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.subir-producto') }}" class="btn btn-primary btn-lg btn-block">Subir un nuevo informe</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('informe') }}" class="btn btn-primary btn-lg btn-block">Ver informes</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.subir_icono') }}" class="btn btn-primary btn-lg btn-block">Subir iconos home</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('iconos') }}" class="btn btn-primary btn-lg btn-block">Ver iconos home</a>
            </div>
            
		<div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.subir-contenido') }}" class="btn btn-primary btn-lg btn-block">Subir contenido home</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('contenido') }}" class="btn btn-primary btn-lg btn-block">Ver contenido home</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.subir-noticia') }}" class="btn btn-primary btn-lg btn-block">Subir noticias</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('blogg') }}" class="btn btn-primary btn-lg btn-block">Ver noticias home</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.subir-carrusel') }}" class="btn btn-primary btn-lg btn-block">Subir al carrusel</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('carrusel') }}" class="btn btn-primary btn-lg btn-block">Ver carrusel home</a>
            </div>
		
		<div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.subir-marquesina') }}" class="btn btn-primary btn-lg btn-block">Subir a la marquesina</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('marquesina') }}" class="btn btn-primary btn-lg btn-block">Ver marquesina</a>
            </div>
            {{-- <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.subir-cliente') }}" class="btn btn-primary btn-lg btn-block">Subir empresa</a>
            </div> --}}
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('cliente') }}" class="btn btn-primary btn-lg btn-block">Ver empresas</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.segmentacion') }}" class="btn btn-primary btn-lg btn-block">Ver segmentacion</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.tipoEntidad') }}" class="btn btn-primary btn-lg btn-block">Ver entidades</a>
            </div>
		<div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.subir-estadisticas') }}" class="btn btn-primary btn-lg btn-block">Subir estadisticas</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.estadisticass') }}" class="btn btn-primary btn-lg btn-block">Ver estadisticas</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.subir-riesgos') }}" class="btn btn-primary btn-lg btn-block">Subir riesgos</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.riesgoss') }}" class="btn btn-primary btn-lg btn-block">Ver riesgos</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.subir-cifras') }}" class="btn btn-primary btn-lg btn-block">Subir cifras</a>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <a href="{{ route('admin.cifrass') }}" class="btn btn-primary btn-lg btn-block">Ver cifras</a>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    @include('footer.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
