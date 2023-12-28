<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CABECERA HORIZONTAL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* RESPONSIVE---------------------------------------T */
        /*3xl Pantallas mas grandes*/
        @media (min-width: 1850px) {
            body {
                background-color: rgb(247, 247, 247);
            }

            #header {
                /* background-color: RGB(0 130 130); */
                background-color: #012060;
                position: absolute;
                top: 0;
                left: 15%;
                right: 0;
                z-index: 1;
                height: 70px;
                width: 78%;
                margin-left: 1%;
                margin-top: 1.5%;
                border-radius: 30px;
            }

            /* Espacio para compensar el desplazamiento debido a la cabecera fija */
            #header-spacer {
                height: 0px;
                /* Ajusta la altura según la altura de tu cabecera */
            }

            .social-icon {
                font-size: 24px;
                /* Tamaño del ícono */
                color: white;
                /* Color del ícono (blanco) */
                margin-right: 10px;
                /* Espacio entre íconos (opcional) */
                text-decoration: none;
                /* Quita subrayado de los enlaces */
            }

            .social-icon:active {
                color: white !important;
                /* Cambia el color al color deseado cuando se toca el icono */
            }

            .social-icon:focus {
                color: white !important;
            }

            /* Estilos para el botón de usuario */
            .user-info a {
                text-decoration: none;
                color: #333;
                /* Color del texto */
                font-weight: bold;
                display: flex;
                align-items: center;
                padding: 10px;
                cursor: pointer;
            }

            .user-info a i {
                margin-left: 5px;
            }

            /* Estilos para el menú desplegable */
            .user-menu ul {
                list-style: none;
                padding: 0;
            }

            .user-menu ul li {
                padding: 10px;
                text-align: center;
                background-color: #f8f8f8;
                /* Fondo del menú */
                transition: background-color 0.2s;
            }

            .user-menu ul li:hover {
                background-color: #e0e0e0;
                /* Color de fondo al pasar el mouse */
            }

            .user-menu ul li a {
                text-decoration: none;
                color: #333;
                /* Color del texto */
            }

            .user-menu {
                top: 100%;
                right: 0;
                width: 80px;
                /* Ancho del menú desplegable */
                border: 1px solid #ccc;
                /* Borde del menú */
                background-color: #fff;
                /* Fondo del menú */
                box-shadow: 0px 4px 6px rgba(255, 255, 255, 0.1);
                /* Sombra del menú */
                display: none;
                border-radius: 20px;
            }

            /* Cambia el color de la flecha en el enlace del carrito */
            .nav-item.dropdown .dropdown-toggle::after {
                color: white !important;
                /* Cambia el color al color deseado */
            }

            /*-------------------- NAVBAR MODERNO------------ */
            /* carrito pequeño */
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 1.0rem;
                padding-left: 0.5rem;
                font-size: 35px;
            }

            .badge-dark {
                color: #fff;
                background-color: #2175aa;
                font-size: 22px;
            }

            @font-face {
                font-family: 'GlacialIndifference-Bold';
                src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }

            @font-face {
                font-family: 'GlacialIndifference-Regular';
                src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
            }

            #aingresar {
                background-color: #2175aa;
                border: RGB(220 162 17);
                width: 200px;
                border-radius: 20px;
                height: 45px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 25px;
            }
        }

        /*Terminan 3xl Pantallas mas grandes*/
        /*2xl Pantallas grandes*/
        @media (min-width: 1536px) and (max-width: 1849px) {
            body {
                background-color: rgb(247, 247, 247);
            }

            #header {
                /* background-color: RGB(0 130 130); */
                background-color: #012060;
                position: absolute;
                top: 0;
                left: 15%;
                right: 0;
                z-index: 1;
                height: 70px;
                width: 80%;
                margin-left: 3.5%;
                margin-top: 1.5%;
                border-radius: 30px;
            }

            /* Espacio para compensar el desplazamiento debido a la cabecera fija */
            #header-spacer {
                height: 0px;
                /* Ajusta la altura según la altura de tu cabecera */
            }

            .social-icon {
                font-size: 24px;
                /* Tamaño del ícono */
                color: white;
                /* Color del ícono (blanco) */
                margin-right: 10px;
                /* Espacio entre íconos (opcional) */
                text-decoration: none;
                /* Quita subrayado de los enlaces */
            }

            .social-icon:active {
                color: white !important;
                /* Cambia el color al color deseado cuando se toca el icono */
            }

            .social-icon:focus {
                color: white !important;
            }

            /* Estilos para el botón de usuario */
            .user-info a {
                text-decoration: none;
                color: #333;
                /* Color del texto */
                font-weight: bold;
                display: flex;
                align-items: center;
                padding: 10px;
                cursor: pointer;
            }

            .user-info a i {
                margin-left: 5px;
            }

            /* Estilos para el menú desplegable */
            .user-menu ul {
                list-style: none;
                padding: 0;
            }

            .user-menu ul li {
                padding: 10px;
                text-align: center;
                background-color: #f8f8f8;
                /* Fondo del menú */
                transition: background-color 0.2s;
            }

            .user-menu ul li:hover {
                background-color: #e0e0e0;
                /* Color de fondo al pasar el mouse */
            }

            .user-menu ul li a {
                text-decoration: none;
                color: #333;
                /* Color del texto */
            }

            .user-menu {
                top: 100%;
                right: 0;
                width: 80px;
                /* Ancho del menú desplegable */
                border: 1px solid #ccc;
                /* Borde del menú */
                background-color: #fff;
                /* Fondo del menú */
                box-shadow: 0px 4px 6px rgba(255, 255, 255, 0.1);
                /* Sombra del menú */
                display: none;
                border-radius: 20px;
            }

            /* Cambia el color de la flecha en el enlace del carrito */
            .nav-item.dropdown .dropdown-toggle::after {
                color: white !important;
                /* Cambia el color al color deseado */
            }

            /*-------------------- NAVBAR MODERNO------------ */
            /* carrito pequeño */
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 1.0rem;
                padding-left: 0.5rem;
                font-size: 35px;
            }

            .badge-dark {
                color: #fff;
                background-color: #2175aa;
                font-size: 22px;
            }

            @font-face {
                font-family: 'GlacialIndifference-Bold';
                src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }

            @font-face {
                font-family: 'GlacialIndifference-Regular';
                src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
            }

            #aingresar {
                background-color: #2175aa;
                border: RGB(220 162 17);
                width: 200px;
                border-radius: 20px;
                height: 45px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 25px;
            }
        }
        /*Terminan 2xl Pantallas grandes*/

        /*xl Pantallas semiGrandes*/
        @media (min-width: 1280px) and (max-width: 1535px) {
            body {
                background-color: rgb(247, 247, 247);
            }
            #header {
                /* background-color: RGB(0 130 130); */
                background-color: #012060;
                position: absolute;
                top: 0;
                left: 15%;
                right: 0;
                z-index: 1;
                height: 70px;
                width: 77%;
                margin-left: 5.8%;
                margin-top: 1.5%;
                border-radius: 30px;
            }
            /* Espacio para compensar el desplazamiento debido a la cabecera fija */
            #header-spacer {
                height: 0px;
                /* Ajusta la altura según la altura de tu cabecera */
            }
            .social-icon {
                font-size: 24px;
                /* Tamaño del ícono */
                color: white;
                /* Color del ícono (blanco) */
                margin-right: 10px;
                /* Espacio entre íconos (opcional) */
                text-decoration: none;
                /* Quita subrayado de los enlaces */
            }

            .social-icon:active {
                color: white !important;
                /* Cambia el color al color deseado cuando se toca el icono */
            }

            .social-icon:focus {
                color: white !important;
            }

            /* Estilos para el botón de usuario */
            .user-info a {
                text-decoration: none;
                color: #333;
                /* Color del texto */
                font-weight: bold;
                display: flex;
                align-items: center;
                padding: 10px;
                cursor: pointer;
            }

            .user-info a i {
                margin-left: 5px;
            }

            /* Estilos para el menú desplegable */
            .user-menu ul {
                list-style: none;
                padding: 0;
            }

            .user-menu ul li {
                padding: 10px;
                text-align: center;
                background-color: #f8f8f8;
                /* Fondo del menú */
                transition: background-color 0.2s;
            }

            .user-menu ul li:hover {
                background-color: #e0e0e0;
                /* Color de fondo al pasar el mouse */
            }

            .user-menu ul li a {
                text-decoration: none;
                color: #333;
                /* Color del texto */
            }

            .user-menu {
                top: 100%;
                right: 0;
                width: 80px;
                /* Ancho del menú desplegable */
                border: 1px solid #ccc;
                /* Borde del menú */
                background-color: #fff;
                /* Fondo del menú */
                box-shadow: 0px 4px 6px rgba(255, 255, 255, 0.1);
                /* Sombra del menú */
                display: none;
                border-radius: 20px;
            }

            /* Cambia el color de la flecha en el enlace del carrito */
            .nav-item.dropdown .dropdown-toggle::after {
                color: white !important;
                /* Cambia el color al color deseado */
            }

            /*-------------------- NAVBAR MODERNO------------ */
            /* carrito pequeño */
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 1.0rem;
                padding-left: 0.5rem;
                font-size: 35px;
            }

            .badge-dark {
                color: #fff;
                background-color: #2175aa;
                font-size: 22px;
            }

            @font-face {
                font-family: 'GlacialIndifference-Bold';
                src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }

            @font-face {
                font-family: 'GlacialIndifference-Regular';
                src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
            }

            #aingresar {
                background-color: #2175aa;
                border: RGB(220 162 17);
                width: 200px;
                border-radius: 20px;
                height: 45px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 25px;
            }
        }
        /*Terminan xl Pantallas semiGrandes*/

        /*lg Pantallas mediaGrandes*/
        @media (min-width: 1024px) and (max-width: 1279px) {
            body {
                background-color: rgb(247, 247, 247);
            }
            #header {
                /* background-color: RGB(0 130 130); */
                background-color: #012060;
                position: absolute;
                top: 0;
                left: 15%;
                right: 0;
                z-index: 1;
                height: 70px;
                width: 86%;
                margin-left: 11%;
                margin-top: 1.5%;
                border-radius: 30px;
            }
            /* Espacio para compensar el desplazamiento debido a la cabecera fija */
            #header-spacer {
                height: 0px;
                /* Ajusta la altura según la altura de tu cabecera */
            }
            .social-icon {
                font-size: 24px;
                /* Tamaño del ícono */
                color: white;
                /* Color del ícono (blanco) */
                margin-right: 10px;
                /* Espacio entre íconos (opcional) */
                text-decoration: none;
                /* Quita subrayado de los enlaces */
            }

            .social-icon:active {
                color: white !important;
                /* Cambia el color al color deseado cuando se toca el icono */
            }

            .social-icon:focus {
                color: white !important;
            }

            /* Estilos para el botón de usuario */
            .user-info a {
                text-decoration: none;
                color: #333;
                /* Color del texto */
                font-weight: bold;
                display: flex;
                align-items: center;
                padding: 10px;
                cursor: pointer;
            }

            .user-info a i {
                margin-left: 5px;
            }

            /* Estilos para el menú desplegable */
            .user-menu ul {
                list-style: none;
                padding: 0;
            }

            .user-menu ul li {
                padding: 10px;
                text-align: center;
                background-color: #f8f8f8;
                /* Fondo del menú */
                transition: background-color 0.2s;
            }

            .user-menu ul li:hover {
                background-color: #e0e0e0;
                /* Color de fondo al pasar el mouse */
            }

            .user-menu ul li a {
                text-decoration: none;
                color: #333;
                /* Color del texto */
            }

            .user-menu {
                top: 100%;
                right: 0;
                width: 80px;
                /* Ancho del menú desplegable */
                border: 1px solid #ccc;
                /* Borde del menú */
                background-color: #fff;
                /* Fondo del menú */
                box-shadow: 0px 4px 6px rgba(255, 255, 255, 0.1);
                /* Sombra del menú */
                display: none;
                border-radius: 20px;
            }

            /* Cambia el color de la flecha en el enlace del carrito */
            .nav-item.dropdown .dropdown-toggle::after {
                color: white !important;
                /* Cambia el color al color deseado */
            }

            /*-------------------- NAVBAR MODERNO------------ */
            /* carrito pequeño */
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 1.0rem;
                padding-left: 0.5rem;
                font-size: 35px;
            }

            .badge-dark {
                color: #fff;
                background-color: #2175aa;
                font-size: 22px;
            }

            @font-face {
                font-family: 'GlacialIndifference-Bold';
                src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }

            @font-face {
                font-family: 'GlacialIndifference-Regular';
                src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
            }

            #aingresar {
                background-color: #2175aa;
                border: RGB(220 162 17);
                width: 200px;
                border-radius: 20px;
                height: 45px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 25px;
            }
        }

        /*lg Pantallas mediaGrandes------------------------------------------------*/

        /*md Pantallas Medianas*/
        @media (min-width: 768px) and (max-width: 1023px) {
            body {
                background-color: rgb(247, 247, 247);
            }
            #header {
                /* background-color: RGB(0 130 130); */
                background-color: #012060;
                position: absolute;
                top: 0;
                left: 15%;
                right: 0;
                z-index: 1;
                height: 70px;
                width: 75%;
                margin-left: -5%;
                margin-top: 1.5%;
                border-radius: 30px;
            }
            /* Espacio para compensar el desplazamiento debido a la cabecera fija */
            #header-spacer {
                height: 0px;
                /* Ajusta la altura según la altura de tu cabecera */
            }
            .social-icon {
                font-size: 24px;
                /* Tamaño del ícono */
                color: white;
                /* Color del ícono (blanco) */
                margin-right: 10px;
                /* Espacio entre íconos (opcional) */
                text-decoration: none;
                /* Quita subrayado de los enlaces */
            }

            .social-icon:active {
                color: white !important;
                /* Cambia el color al color deseado cuando se toca el icono */
            }

            .social-icon:focus {
                color: white !important;
            }

            /* Estilos para el botón de usuario */
            .user-info a {
                text-decoration: none;
                color: #333;
                /* Color del texto */
                font-weight: bold;
                display: flex;
                align-items: center;
                padding: 10px;
                cursor: pointer;
            }

            .user-info a i {
                margin-left: 5px;
            }

            /* Estilos para el menú desplegable */
            .user-menu ul {
                list-style: none;
                padding: 0;
            }

            .user-menu ul li {
                padding: 10px;
                text-align: center;
                background-color: #f8f8f8;
                /* Fondo del menú */
                transition: background-color 0.2s;
            }

            .user-menu ul li:hover {
                background-color: #e0e0e0;
                /* Color de fondo al pasar el mouse */
            }

            .user-menu ul li a {
                text-decoration: none;
                color: #333;
                /* Color del texto */
            }

            .user-menu {
                top: 100%;
                right: 0;
                width: 80px;
                /* Ancho del menú desplegable */
                border: 1px solid #ccc;
                /* Borde del menú */
                background-color: #fff;
                /* Fondo del menú */
                box-shadow: 0px 4px 6px rgba(255, 255, 255, 0.1);
                /* Sombra del menú */
                display: none;
                border-radius: 20px;
            }

            /* Cambia el color de la flecha en el enlace del carrito */
            .nav-item.dropdown .dropdown-toggle::after {
                color: white !important;
                /* Cambia el color al color deseado */
            }

            /*-------------------- NAVBAR MODERNO------------ */
            /* carrito pequeño */
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 1.0rem;
                padding-left: 0.5rem;
                font-size: 35px;
                margin-left: -20%;
                margin-top: -15%;
                width: 4%;
            }

            .badge-dark {
                color: #fff;
                background-color: #2175aa;
                font-size: 22px;
            }

            @font-face {
                font-family: 'GlacialIndifference-Bold';
                src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }

            @font-face {
                font-family: 'GlacialIndifference-Regular';
                src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
            }

            #aingresar {
                background-color: #2175aa;
                border: RGB(220 162 17);
                width: 200px;
                border-radius: 20px;
                height: 45px;
                justify-content: center;
                align-items: center;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 25px;
                position: absolute;
                right: 10px;
            }
                
            }
            .navbarDropdown{
                width: 40%; 
                padding: 0px; 
                border-color: #9DA0A2"
            }
            .dropdown{
                width: 40%;
            }
            #header-border{
                width:  55%;
                margin-left: -1%;
            }
     

        /*Terminan md Pantallas Medianas*/

        /*sm Pantallas Pequeñas*/
        @media (min-width: 340px) and (max-width: 767px) {}

        /*Termina sm Pantallas Pequeñas*/
        /*Termina Responsive  */
    </style>
</head>

<body>

    <!-- Cabecera fija -->
    <nav class="navbar navbar-expand-lg navbar navbar-fixed" id="header">
        <div class="container" id="header-border" >
            <!-- Iconos sociales (movidos al principio) -->
            <div class="social-icons ml-0">
                <!-- Icono de Facebook -->
                <a href="#" class="social-icon" style="color: white !important; font-size:30px; padding-right: 0.8rem;"><i class="fab fa-facebook-f"></i></a>

                <!-- Icono de Twitter -->
                <a href="#" class="social-icon" style="color: white !important; font-size:30px; padding-right: 0.80rem;"><i class="fab fa-twitter"></i></a>

                <!-- Icono de Instagram -->
                <a href="{{route ('instagram') }}" class="social-icon" style="color: white !important; font-size:30px;"><i class="fab fa-instagram"></i></a>

            </div>
            <!-- Opción para administradores -->
            @if(Auth::check() && Auth::user()->role === 'admin')

            <ul class="navbar-nav ml-auto" id="adn">
                <li class="nav-item">
                    <a class="fas fa" id="adn" class="nav-link" href="{{ route('admin') }}" style="color:white; ">ADMINISTRADOR</a>
                </li>
            </ul>
        </div>
        @endif



        <!-- Enlaces de navegación (mantenidos a la derecha) -->
        <ul class="navbar-nav ml-auto">
            {{-- ... (tu código existente) ... --}}
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="badge badge-pill badge-dark">
                        <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                    </span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" id="navbarDropdown" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                    <ul class="list-group" style="margin: 20px;">
                        @include('partials.cart-drop')
                    </ul>

                </div>
            </li>
        </ul>
        </div>

        <!-- SI INICIA SESIÓN -->
        @if(Auth::check())
        <div class="user-dropdown">
            <div class="user-info" id="user-toggle">
                <a>
                    <i class="fas fa-user" style="color:white;"></i>
                    <i style="color:white;"> {{ Auth::user()->name }}</i>

                    <!-- <i class="fas fa-chevron-down"></i> -->
                    <a class="fas fa-sign-out-alt" style="color:white;" href="{{ route('logout') }}"></a>

                </a>
            </div>
            <div class="user-menu" id="user-menu">
                <ul>
                    <li><a href="{{ route('logout') }}">Salir</a></li>
                    <!-- Otras opciones del menú aquí -->
                </ul>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js">

        </script>

        <script>
            $(document).ready(function() {
                // Oculta el menú de usuario al cargar la página
                $("#user-menu").hide();

                // Agrega un evento de clic a la flecha para mostrar/ocultar el menú
                $("#user-toggle").click(function() {
                    $("#user-menu").slideToggle();
                });
            });
        </script>
      

    </nav>
    @else
        <!-- Mostrar el botón de inicio de sesión -->
        <a class="fas fa btn btn-secondary ml-2" id="aingresar" href="{{ route('login') }}">Ingresar</a>
        @endif
    </nav>

</body>

</html>