<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>CABECERA A LA IZQUIERDA</title>
    <style>
        /* RESPONSIVE---------------------------------------T */
        /*3xl Pantallas mas grandes*/
        @media (min-width: 1850px) {
             /* Estilos generales */
             body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }

            /* Estilos de la barra lateral */
            .sidebar {
                width: 60px;
                background-color: #ffffff;
                color: #fff;
                position: fixed;
                height: 110%;
                overflow: hidden;
                transition: width 0.3s;
                z-index: 2; /* Hacer que la barra lateral esté por encima de la barra horizontal */
            }
            .sidebar:hover {
                width: 250px;
            }

            .logo {
                text-align: center;
                padding: 20px 0;
            }

                    /* Estilos de la barra lateral */
            .vertical-icons {
                position: fixed;
                top: 0;
                left: 0;
                width: 250px;
                height: 100vh; /* Establece la altura al 100% de la ventana */
                background-color: #012060;
                color: #000000;
                z-index: 2;
                display: flex;
                flex-direction: column;
                align-items: start;
                justify-content: flex-start;
                padding-top: 20px;
                transition: width 0.3s;
                overflow-y: auto; /* Permite desplazamiento vertical si es necesario */
                box-sizing: border-box; /* Incluye el relleno y el borde en el tamaño total */
            }

            /* Estilos de los íconos en la barra lateral cuando se agranda */
            .vertical-icons:hover {
                width: 250px;
            }

/* ... (otros estilos) ... */


            .vertical-icons i {
                font-size: 35px;
                margin-bottom: 20px;
            }
            #box{
                font-size: 20px;
            }
            
            /* Estilos de los íconos en la barra lateral */
            .vertical-icons a {
                font-size: 25px;
                color: #000; /* Cambiar el color de los íconos a negro */
                text-decoration: none; /* Eliminar la decoración de enlace (subrayado) */
            }
            .search-con {
                display: flex;
                background-color: #f2f2f2;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 5px;
                width: 200px; /* Ancho deseado */
            }

            .search-input {
                flex: 1;
                border: none;
                padding: 5px;
                border-radius: 5px 0 0 5px;
                outline: none;
                width: 100%; /* Llenar el ancho del contenedor */
            }
            .blogg{
                margin-bottom: 85%;
            }

            .search-button {
                background-color: #008282;
                color: white;
                border: none;
                border-radius: 0 5px 5px 0;
                padding: 5px;
                cursor: pointer;
            }

            /* Estilos para ocultar el ícono de búsqueda inicialmente */
            .custom-search-icon .search-toggle {
                display: none;
            }

            /* Estilos para mostrar el ícono de búsqueda cuando se agrande el menú */
            .vertical-icons:hover .custom-search-icon .search-toggle {
                display: block;
            }
            .img-fluid{
                width: 80%;
                margin-bottom: -2%;
                display: flex;
                justify-content: center;
            }
            span{
                font-size: 20px;
                margin-left: 14px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #icons{
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 12px;
            }
            #icoad{
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 12px;
                font-size: 20px;
            }
            /* titulo de viajero o anfitrion--- */
            @font-face {
            font-family: 'GlacialIndifference-Bold';
            src: url('../../../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }
    
            /* Estilos para el menú hamburguesa---------------------------------------- */
            .burger-menu-container {
                position:relative;
                margin-top: 20px; /* Ajusta la posición vertical según sea necesario */
                right: 20px; /* Ajusta la posición horizontal según sea necesario */
                z-index: 3; /* Asegura que esté sobre el contenido y el menú vertical */
                cursor: pointer;
                padding: 10px;
                border-radius: 5px;
                width: 50px;
                margin-left: 1%;
                height: 65px;
            }

            .burger-menu-container:hover {
                background-color:#012060; /* Cambia el color al pasar el ratón */
            }

            .burger-menu {
                width: 30px;
                height: 3px;
                background-color: #2175aa;
                margin: 6px 0;
                position: fixed;
            }

            /* Estilo para las líneas adicionales del menú hamburguesa */
            .burger-menu::before,
            .burger-menu::after {
                content: '';
                position: absolute;
                width: 30px;
                height: 3px;
                background-color:#2175aa;
                transition: transform 0.3s, top 0.3s, bottom 0.3s;
            }

            .burger-menu::before {
                top: -10px;
            }

            .burger-menu::after {
                bottom: -10px;
            }

            /* Estilo para animar las líneas al hacer clic en el menú hamburguesa */
            .burger-menu-container.active .burger-menu::before {
                transform: rotate(-45deg);
                top: 0;
            }

            .burger-menu-container.active .burger-menu::after {
                transform: rotate(45deg);
                bottom: 0;
            }
        }
        /* ----------------------------------------------------------------------- */

               /*Terminan 3xl Pantallas mas grandes*/
        /*2xl Pantallas grandes*/
        @media (min-width: 1536px) and (max-width: 1849px) {
          /* Estilos generales */
          body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }

            /* Estilos de la barra lateral */
            .sidebar {
                width: 60px;
                background-color: #ffffff;
                color: #fff;
                position: fixed;
                height: 110%;
                overflow: hidden;
                transition: width 0.3s;
                z-index: 2; /* Hacer que la barra lateral esté por encima de la barra horizontal */
            }
            .sidebar:hover {
                width: 250px;
            }

            .logo {
                text-align: center;
                padding: 20px 0;
            }

         /* Estilos de la barra lateral */
            .vertical-icons {
                position: fixed;
                top: 0;
                left: 0;
                width: 250px;
                height: 100vh; /* Establece la altura al 100% de la ventana */
                background-color: #012060;
                color: #000000;
                z-index: 2;
                display: flex;
                flex-direction: column;
                align-items: start;
                justify-content: flex-start;
                padding-top: 20px;
                transition: width 0.3s;
                overflow-y: auto; /* Permite desplazamiento vertical si es necesario */
                box-sizing: border-box; /* Incluye el relleno y el borde en el tamaño total */
            }

            /* Estilos de los íconos en la barra lateral cuando se agranda */
            .vertical-icons:hover {
                width: 250px;
            }

/* ... (otros estilos) ... */


            .vertical-icons i {
                font-size: 35px;
                margin-bottom: 20px;
            }
            #box{
                font-size: 20px;
            }
            
            /* Estilos de los íconos en la barra lateral */
            .vertical-icons a {
                font-size: 25px;
                color: #000; /* Cambiar el color de los íconos a negro */
                text-decoration: none; /* Eliminar la decoración de enlace (subrayado) */
            }
            .search-con {
                display: flex;
                background-color: #f2f2f2;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 5px;
                width: 200px; /* Ancho deseado */
            }

            .search-input {
                flex: 1;
                border: none;
                padding: 5px;
                border-radius: 5px 0 0 5px;
                outline: none;
                width: 100%; /* Llenar el ancho del contenedor */
            }
            .blogg{
                margin-bottom: 85%;
            }

            .search-button {
                background-color: #008282;
                color: white;
                border: none;
                border-radius: 0 5px 5px 0;
                padding: 5px;
                cursor: pointer;
            }

            /* Estilos para ocultar el ícono de búsqueda inicialmente */
            .custom-search-icon .search-toggle {
                display: none;
            }

            /* Estilos para mostrar el ícono de búsqueda cuando se agrande el menú */
            .vertical-icons:hover .custom-search-icon .search-toggle {
                display: block;
            }
            .img-fluid{
                width: 80%;
                margin-bottom: -2%;
                display: flex;
                justify-content: center;
            }
            span{
                font-size: 20px;
                margin-left: 14px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #icons{
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 12px;
            }
            #icoad{
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 12px;
                font-size: 20px;
            }
            /* titulo de viajero o anfitrion--- */
            @font-face {
            font-family: 'GlacialIndifference-Bold';
            src: url('../../../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }
    
            /* Estilos para el menú hamburguesa---------------------------------------- */
            .burger-menu-container {
                position:relative;
                margin-top: 20px; /* Ajusta la posición vertical según sea necesario */
                right: 20px; /* Ajusta la posición horizontal según sea necesario */
                z-index: 3; /* Asegura que esté sobre el contenido y el menú vertical */
                cursor: pointer;
                padding: 10px;
                border-radius: 5px;
                width: 50px;
                margin-left: 1%;
                height: 65px;
            }

            .burger-menu-container:hover {
                background-color:#012060; /* Cambia el color al pasar el ratón */
            }

            .burger-menu {
                width: 30px;
                height: 3px;
                background-color: #2175aa;
                margin: 6px 0;
                position: fixed;
            }

            /* Estilo para las líneas adicionales del menú hamburguesa */
            .burger-menu::before,
            .burger-menu::after {
                content: '';
                position: absolute;
                width: 30px;
                height: 3px;
                background-color:#2175aa;
                transition: transform 0.3s, top 0.3s, bottom 0.3s;
            }

            .burger-menu::before {
                top: -10px;
            }

            .burger-menu::after {
                bottom: -10px;
            }

            /* Estilo para animar las líneas al hacer clic en el menú hamburguesa */
            .burger-menu-container.active .burger-menu::before {
                transform: rotate(-45deg);
                top: 0;
            }

            .burger-menu-container.active .burger-menu::after {
                transform: rotate(45deg);
                bottom: 0;
            }
        
        }


        @media (min-width: 1280px) and (max-width: 1535px) {
            /* Estilos generales */
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }

            /* Estilos de la barra lateral */
            .sidebar {
                width: 60px;
                background-color: #ffffff;
                color: #fff;
                position: fixed;
                height: 110%;
                overflow: hidden;
                transition: width 0.3s;
                z-index: 2; /* Hacer que la barra lateral esté por encima de la barra horizontal */
            }
            .sidebar:hover {
                width: 250px;
            }

            .logo {
                text-align: center;
                padding: 20px 0;
            }

            /* Estilos de la barra lateral */
            .vertical-icons {
                position: fixed;
                top: 0;
                left: 0;
                width: 250px;
                height: 100vh; /* Establece la altura al 100% de la ventana */
                background-color: #012060;
                color: #000000;
                z-index: 2;
                display: flex;
                flex-direction: column;
                align-items: start;
                justify-content: flex-start;
                padding-top: 20px;
                transition: width 0.3s;
                overflow-y: auto ; /* Permite desplazamiento vertical si es necesario */
                box-sizing: border-box; /* Incluye el relleno y el borde en el tamaño total */
            }

            /* Estilos de los íconos en la barra lateral cuando se agranda */
            .vertical-icons:hover {
                width: 250px;
            }

/* ... (otros estilos) ... */


            .vertical-icons i {
                font-size: 35px;
                margin-bottom: 20px;
            }
            #box{
                font-size: 20px;
            }
            
            /* Estilos de los íconos en la barra lateral */
            .vertical-icons a {
                font-size: 25px;
                color: #000; /* Cambiar el color de los íconos a negro */
                text-decoration: none; /* Eliminar la decoración de enlace (subrayado) */
            }
            .search-con {
                display: flex;
                background-color: #f2f2f2;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 5px;
                width: 200px; /* Ancho deseado */
            }

            .search-input {
                flex: 1;
                border: none;
                padding: 5px;
                border-radius: 5px 0 0 5px;
                outline: none;
                width: 100%; /* Llenar el ancho del contenedor */
            }
            .blogg{
                margin-bottom: 35%;
            }

            .search-button {
                background-color: #008282;
                color: white;
                border: none;
                border-radius: 0 5px 5px 0;
                padding: 5px;
                cursor: pointer;
            }

            /* Estilos para ocultar el ícono de búsqueda inicialmente */
            .custom-search-icon .search-toggle {
                display: none;
            }

            /* Estilos para mostrar el ícono de búsqueda cuando se agrande el menú */
            .vertical-icons:hover .custom-search-icon .search-toggle {
                display: block;
            }
            .img-fluid{
                width: 80%;
                margin-bottom: -2%;
                display: flex;
                justify-content: center;
            }
            span{
                font-size: 18px;
                margin-left: 14px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #icons{
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 12px;
            }
            #icoad{
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 12px;
                font-size: 20px;
            }
            /* titulo de viajero o anfitrion--- */
            @font-face {
            font-family: 'GlacialIndifference-Bold';
            src: url('../../../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }
    
            /* Estilos para el menú hamburguesa---------------------------------------- */
            .burger-menu-container {
                position:relative;
                margin-top: 20px; /* Ajusta la posición vertical según sea necesario */
                right: 20px; /* Ajusta la posición horizontal según sea necesario */
                z-index: 3; /* Asegura que esté sobre el contenido y el menú vertical */
                cursor: pointer;
                padding: 10px;
                border-radius: 5px;
                width: 50px;
                margin-left: 1%;
                height: 65px;
            }

            .burger-menu-container:hover {
                background-color:#012060; /* Cambia el color al pasar el ratón */
            }

            .burger-menu {
                width: 30px;
                height: 3px;
                background-color: #2175aa;
                margin: 6px 0;
                position: fixed;
            }

            /* Estilo para las líneas adicionales del menú hamburguesa */
            .burger-menu::before,
            .burger-menu::after {
                content: '';
                position: absolute;
                width: 30px;
                height: 3px;
                background-color:#2175aa;
                transition: transform 0.3s, top 0.3s, bottom 0.3s;
            }

            .burger-menu::before {
                top: -10px;
            }

            .burger-menu::after {
                bottom: -10px;
            }

            /* Estilo para animar las líneas al hacer clic en el menú hamburguesa */
            .burger-menu-container.active .burger-menu::before {
                transform: rotate(-45deg);
                top: 0;
            }

            .burger-menu-container.active .burger-menu::after {
                transform: rotate(45deg);
                bottom: 0;
            }
            /* --------------------------------------------------------- */
        }
               /*lg Pantallas mediaGrandes--------------------------------------------*/
       @media (min-width: 1024px) and (max-width: 1279px) {
            /* Estilos generales */
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }

            /* Estilos de la barra lateral */
            .sidebar {
                width: 60px;
                background-color: #ffffff;
                color: #fff;
                position: fixed;
                height: 110%;
                overflow: hidden;
                transition: width 0.3s;
                z-index: 2; /* Hacer que la barra lateral esté por encima de la barra horizontal */
            }
            .sidebar:hover {
                width: 250px;
            }

            .logo {
                text-align: center;
                padding: 20px 0;
            }

                    /* Estilos de la barra lateral */
            .vertical-icons {
                position: fixed;
                top: 0;
                left: 0;
                width: 250px;
                height: 100vh; /* Establece la altura al 100% de la ventana */
                background-color: #012060;
                color: #000000;
                z-index: 2;
                display: flex;
                flex-direction: column;
                align-items: start;
                justify-content: flex-start;
                padding-top: 20px;
                transition: width 0.3s;
                overflow-y: auto; /* Permite desplazamiento vertical si es necesario */
                box-sizing: border-box; /* Incluye el relleno y el borde en el tamaño total */
            }

            /* Estilos de los íconos en la barra lateral cuando se agranda */
            .vertical-icons:hover {
                width: 250px;
            }

/* ... (otros estilos) ... */


            .vertical-icons i {
                font-size: 35px;
                margin-bottom: 20px;
            }
            #box{
                font-size: 20px;
            }
            
            /* Estilos de los íconos en la barra lateral */
            .vertical-icons a {
                font-size: 25px;
                color: #000; /* Cambiar el color de los íconos a negro */
                text-decoration: none; /* Eliminar la decoración de enlace (subrayado) */
            }
            .search-con {
                display: flex;
                background-color: #f2f2f2;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 5px;
                width: 200px; /* Ancho deseado */
            }

            .search-input {
                flex: 1;
                border: none;
                padding: 5px;
                border-radius: 5px 0 0 5px;
                outline: none;
                width: 100%; /* Llenar el ancho del contenedor */
            }
            .blogg{
                margin-bottom: 35%;
            }

            .search-button {
                background-color: #008282;
                color: white;
                border: none;
                border-radius: 0 5px 5px 0;
                padding: 5px;
                cursor: pointer;
            }

            /* Estilos para ocultar el ícono de búsqueda inicialmente */
            .custom-search-icon .search-toggle {
                display: none;
            }

            /* Estilos para mostrar el ícono de búsqueda cuando se agrande el menú */
            .vertical-icons:hover .custom-search-icon .search-toggle {
                display: block;
            }
            .img-fluid{
                width: 80%;
                margin-bottom: -2%;
                display: flex;
                justify-content: center;
            }
            span{
                font-size: 18px;
                margin-left: 14px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #icons{
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 12px;
            }
            #icoad{
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 12px;
                font-size: 20px;
            }
            /* titulo de viajero o anfitrion--- */
            @font-face {
            font-family: 'GlacialIndifference-Bold';
            src: url('../../../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }
    
            /* Estilos para el menú hamburguesa---------------------------------------- */
            .burger-menu-container {
                position:relative;
                margin-top: 20px; /* Ajusta la posición vertical según sea necesario */
                right: 20px; /* Ajusta la posición horizontal según sea necesario */
                z-index: 3; /* Asegura que esté sobre el contenido y el menú vertical */
                cursor: pointer;
                padding: 10px;
                border-radius: 5px;
                width: 50px;
                margin-left: 1%;
                height: 65px;
            }

            .burger-menu-container:hover {
                background-color:#012060; /* Cambia el color al pasar el ratón */
            }

            .burger-menu {
                width: 30px;
                height: 3px;
                background-color: #2175aa;
                margin: 6px 0;
                position: fixed;
            }

            /* Estilo para las líneas adicionales del menú hamburguesa */
            .burger-menu::before,
            .burger-menu::after {
                content: '';
                position: absolute;
                width: 30px;
                height: 3px;
                background-color:#2175aa;
                transition: transform 0.3s, top 0.3s, bottom 0.3s;
            }

            .burger-menu::before {
                top: -10px;
            }

            .burger-menu::after {
                bottom: -10px;
            }

            /* Estilo para animar las líneas al hacer clic en el menú hamburguesa */
            .burger-menu-container.active .burger-menu::before {
                transform: rotate(-45deg);
                top: 0;
            }

            .burger-menu-container.active .burger-menu::after {
                transform: rotate(45deg);
                bottom: 0;
            }
       }
           /*md Pantallas Medianas--------------------------------------------------------------*/
     @media (min-width: 768px) and (max-width: 1023px) {
  /* Estilos generales */
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }

            /* Estilos de la barra lateral */
            .sidebar {
                width: 60px;
                background-color: #ffffff;
                color: #fff;
                position: fixed;
                height: 110%;
                overflow: hidden;
                transition: width 0.3s;
                z-index: 2; /* Hacer que la barra lateral esté por encima de la barra horizontal */
            }
            .sidebar:hover {
                width: 250px;
            }

            .logo {
                text-align: center;
                padding: 20px 0;
            }

          /* Estilos de la barra lateral */
            .vertical-icons {
                position: fixed;
                top: 0;
                left: 0;
                width: 250px;
                height: 100vh; /* Establece la altura al 100% de la ventana */
                background-color: #012060;
                color: #000000;
                z-index: 2;
                display: flex;
                flex-direction: column;
                align-items: start;
                justify-content: flex-start;
                padding-top: 20px;
                transition: width 0.3s;
                overflow-y: auto; /* Permite desplazamiento vertical si es necesario */
                box-sizing: border-box; /* Incluye el relleno y el borde en el tamaño total */
            }

            /* Estilos de los íconos en la barra lateral cuando se agranda */
            .vertical-icons:hover {
                width: 250px;
            }

/* ... (otros estilos) ... */


            .vertical-icons i {
                font-size: 35px;
                margin-bottom: 20px;
            }
            #box{
                font-size: 20px;
            }
            
            /* Estilos de los íconos en la barra lateral */
            .vertical-icons a {
                font-size: 25px;
                color: #000; /* Cambiar el color de los íconos a negro */
                text-decoration: none; /* Eliminar la decoración de enlace (subrayado) */
            }
            .search-con {
                display: flex;
                background-color: #f2f2f2;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 5px;
                width: 200px; /* Ancho deseado */
            }

            .search-input {
                flex: 1;
                border: none;
                padding: 5px;
                border-radius: 5px 0 0 5px;
                outline: none;
                width: 100%; /* Llenar el ancho del contenedor */
            }
            .blogg{
                margin-bottom: 10%;
            }

            .search-button {
                background-color: #008282;
                color: white;
                border: none;
                border-radius: 0 5px 5px 0;
                padding: 5px;
                cursor: pointer;
            }

            /* Estilos para ocultar el ícono de búsqueda inicialmente */
            .custom-search-icon .search-toggle {
                display: none;
            }

            /* Estilos para mostrar el ícono de búsqueda cuando se agrande el menú */
            .vertical-icons:hover .custom-search-icon .search-toggle {
                display: block;
            }
            .img-fluid{
                width: 77%;
                margin-bottom: -2%;
                display: flex;
                justify-content: center;
                margin-left: 5%;
            }
            span{
                font-size: 18px;
                margin-left: 14px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #icons{
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 12px;
            }
            #icoad{
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 12px;
                font-size: 20px;
            }
            /* titulo de viajero o anfitrion--- */
            @font-face {
            font-family: 'GlacialIndifference-Bold';
            src: url('../../../public/font/GlacialIndifference-Bold.otf') format('opentype');
            }
    
            /* Estilos para el menú hamburguesa---------------------------------------- */
            .burger-menu-container {
                position:relative;
                margin-top: 10px; /* Ajusta la posición vertical según sea necesario */
                right: 20px; /* Ajusta la posición horizontal según sea necesario */
                z-index: 3; /* Asegura que esté sobre el contenido y el menú vertical */
                cursor: pointer;
                padding: 10px;
                border-radius: 5px;
                width: 50px;
                margin-left: 5%;
                height: 37px;
            }

            .burger-menu-container:hover {
                background-color:#012060; /* Cambia el color al pasar el ratón */
            }

            .burger-menu {
                width: 30px;
                height: 3px;
                background-color: #2175aa;
                margin: 6px 0;
                position: fixed;
            }

            /* Estilo para las líneas adicionales del menú hamburguesa */
            .burger-menu::before,
            .burger-menu::after {
                content: '';
                position: absolute;
                width: 30px;
                height: 3px;
                background-color:#2175aa;
                transition: transform 0.3s, top 0.3s, bottom 0.3s;
            }

            .burger-menu::before {
                top: -10px;
            }

            .burger-menu::after {
                bottom: -10px;
            }

            /* Estilo para animar las líneas al hacer clic en el menú hamburguesa */
            .burger-menu-container.active .burger-menu::before {
                transform: rotate(-45deg);
                top: 0;
            }

            .burger-menu-container.active .burger-menu::after {
                transform: rotate(45deg);
                bottom: 0;
            }
            /* --- */
            .burger-menu-container.saved {
                background-color: transparent; /* Puedes cambiar esto a cualquier otro color si lo prefieres */
            }

            .burger-menu-container.saved:hover {
                background-color: transparent; /* Puedes cambiar esto a cualquier otro color si lo prefieres */
            }

            .burger-menu-container.saved .burger-menu {
                background-color: #2175aa; /* Color del icono del menú cuando está guardado */
            }

            .burger-menu-container.saved .burger-menu::before,
            .burger-menu-container.saved .burger-menu::after {
                background-color: #2175aa; /* Color de las líneas adicionales cuando está guardado */
            }

     }

/*Terminan md Pantallas Medianas*/

    </style>
</head>
<body>
      <!-- Botón de hamburguesa -->
    
    <!-- Barra de navegación vertical (barra lateral) -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

     <!-- Menú hamburguesa -->
     <div class="burger-menu-container">
        <div class="burger-menu"></div>
    </div>
  
 <!-- Iconos de la barra vertical -->
 <div class="vertical-icons">
    <div class="logo">
        <img src="{{ asset('img/solidata1.jpg') }}" alt="Logo" class="img-fluid">
    </div>
        <!-- Opción para administradores -->
       @if(Auth::check() && Auth::user()->role === 'admin')
       
        <a id="icoad" href="{{ route('users') }}"><i class='bx bx-user' id="box"></i><span> Usuarios</span></a>
        <a id="icoad" href="{{ route('compras') }}"><i class='bx bx-cart' id="box"></i><span> Compras</span></a>
        <a id="icoad" href="{{ route('informe') }}"><i class='bx bx-file' id="box"></i><span> Informes</span></a>
        <a id="icoad" href="{{ route('carrusel') }}"><i class='bx bx-slider' id="box"></i><span>Carrusel</span></a>
        <a id="icoad" href="{{ route('iconos') }}"><i class='bx bx-grid-alt' id="box"></i><span>Iconos</span></a>
        <a id="icoad" href="{{ route('contenido') }}"><i class='bx bx-file-blank' id="box"></i><span> Contenido</span></a>
        <a id="icoad" href="{{ route('blogg') }}"><i class='bx bx-message-square-detail' id="box"></i><span> Blog</span></a>
        <a id="icoad" href="{{ route('boletine') }}"><i class='bx bx-news' id="box"></i><span> Boletin</span></a>
        <a id="icoad" href="{{ route('contact') }}"><i class='bx bx-phone' id="box"></i><span> Contactos</span></a>
        <a id="icoad" href="{{ route('subs') }}"><i class='bx bx-envelope' id="box"></i><span> Susbcripciones</span></a>
        <a id="icoad" href="{{ route('marquesina') }}"><i class='bx bx-line-chart' id="box"></i><span> Indicadores</span></a>
        <a id="icoad" href="{{ route('cliente') }}"><i class='bx bx-building' id="box"></i><span> Empresas</span></a>
       
       @else

        <a id="icons" href="{{ route('index') }}"><i class='bx bx-home-alt'></i><span> Inicio</span></a>
        <a id="icons" href="{{ route('shop') }}"><i class='bx bxs-file'></i><span> Informes o estudios</span></a>    
        <a id="icons" href="{{ route('cifras') }}"><i class='bx bx-bar-chart-alt'></i><span> Cifras generales</span></a>      
        <a id="icons" href="{{ route('estadisticas') }}"><i class='bx bx-line-chart'></i><span> Estadisticas</span></a>
        <a id="icons" href="{{ route('riesgos') }}"><i class='bx bx-shield'></i></i><span> Riesgos</span></a>
        <a id="icons" href="{{ route('blog') }}" class="blogg" ><i class='bx bx-message-square-detail'></i><span> Blog</span></a>
        <a id="icons" href="{{ route('contacto') }}"><i class='bx bx-phone'></i><span> Contacto</span></a>
    @endif
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   
   @include('partials.navHori')
   
 <!-- Scripts, estilos y otros elementos que pertenezcan al final del body... -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
 $(document).ready(function () {
        $('.burger-menu-container').click(function () {
            const verticalIcons = $('.vertical-icons');
            const content = $('.content');
            const logo = $('.logo img');

            if (verticalIcons.width() === 0) {
                verticalIcons.css('width', '250px');
                content.css('margin-left', '250px');
                logo.css('display', 'flex');
                $('.burger-menu-container').removeClass('saved');
            } else {
                verticalIcons.css('width', '0');
                content.css('margin-left', '0');
                logo.css('display', 'none');
                $('.burger-menu-container').addClass('saved');
            }
        });
    });

    </script>

    
</body>
</html>


    </div>

    <!-- Contenido principal de la página -->
    <div class="content">
        <!-- Contenido de la página va aquí -->
    </div>
   @include('partials.navHori')
   
    <!-- Scripts, estilos y otros elementos que pertenezcan al final del body -->
</body>
</html>


