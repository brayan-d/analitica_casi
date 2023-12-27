<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio | Analítica Solidaria</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <!-- Agrega la referencia a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* RESPONSIVE---------------------------------------T */
        /*3xl Pantallas mas grandes*/
        @media (min-width: 1850px) {
      /* DISEÑO DE CARRUSEL USUARIOSS ----------------------------------------- */
             /* mover carrusel */
             #item {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color: #f2f2f2;
                border: 2px solid #e9edff;
            }

             #carouselExampleDark {
                width: 78.5%;
                margin-bottom: 50px;
                margin-left: 16%;
            }
            #imgcarru {
                max-width: 105%;
                max-height: 450px;
                margin: 0 auto;
                opacity: 90%;
                border: 1px solid #fbe0c1;
            }
            .tt {
                width: 20%; /* Ajusta según sea necesario */
                padding: 15px; /* Añade espaciado según sea necesario */
            }

            #tamimg {
                width: 80%; /* Ajusta según sea necesario */
            }

            #imgcarru {
                width: 100%;
                height: auto;
            }
            .font-p {
                font-size: 22px;
                color: #ffc219;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                display: flex;
                flex-direction: column; /* Apila los elementos verticalmente */
                justify-content: center; /* Centra verticalmente en el eje Y */
                align-items: center; /* Centra horizontalmente en el eje X */
                text-align: center;
                height: 100%; /* Asegura que el contenedor ocupe el 100% de la altura disponible */
            }

            .tt{
                
                width: 40%;
                height: 350px;
                margin-left: 3%;
            }
/* Otros estilos según sea necesario */
        /* ICONOS INDEX------------------------------------------------ */
            #prinicon {
                max-width: 75%;
                margin: 0 auto;
                margin-bottom: 4%;
            }

            #twoicon {
                padding-left: 10px;
                margin-right: -14%;
                margin-left: 8.5%;
            }

            #icontainer {
                background-color: #ececec;
                padding: 20px;
                border-radius: 5px;
                width: 250px;
                display: flex;
                justify-content: center;
                text-align: center;
                align-items: center;
            }

            #imgicons {
                height: 80px;
                width: 90px;
                margin-bottom: 20px;
            }

            #buticons {
                background-color: #012060;
                border-color: #008282;
                width: 250px;
                border: none;
            }

            #spanicons {
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 18px;
            }
        
                /* CONTENIDO INDEX -----------------------------------------------------------*/
            #fascont{
                color:#012060;
                text-decoration: none;
                font-size: 40px;
                margin-bottom: 3%;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #atwo{
                background-color:#012060;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #btnNosotros {
                    margin-top: 20px;
                    margin-left: 5%;
                }
            h5{
                color: #2175aa;
                text-align: start;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-bottom: 27%;
            }
            .mt-4{
                margin-bottom: 4%;
            }
            #imgconte{
                margin-left: 10%;
                margin-top: 3%
            }
            /* mover flecha carru izquierda */
            .carousel-control-prev {
                margin-left: -6%;
            }
        /* ------------------------ */
            /* INFORMES CARTAS DEL CARRITO----------------------------------- ---*/
            /* text informe */
            h1 {
                font-family: 'GlacialIndifference-Bold', sans-serif;
                color: #012060;
            }

            #titprod {
                margin-bottom: 2%;
                margin-left: 41%;
            }

            #contcarts {
                margin-left: 21%;
            }

            #imgpro {
                height: 250px;
                width: 102%;
                border-top-left-radius: 30px;
                border-top-right-radius: 30px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
                margin-left: -4px;
            }

            #h5 {
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 16px;
                text-align: center;
                color: #2175aa;
            }

            #descripcion {
                font-size: 24px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }

            .card-precio {
                font-size: 24px;
                font-family: ui-rounded;
            }

            #h6 {
                font-size: 17px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }

            .btoagr:hover {
                background-color: #16527a;
                /* Cambia el color de fondo al pasar por encima */
            }

            /* boton agregar carrito  */
            .btoagr {
                background-color: #2175aa;
                color: #ffffff;
                /* Color del texto */
                border: 1px solid #16527a;
                /* Borde del botón */
                border-radius: 5px;
                /* Bordes redondeados */
                
                /* Espaciado interno (arriba/abajo - izquierda/derecha) */
                font-size: 16px;
                /* Tamaño de fuente */
                cursor: pointer;
                /* Cambia el cursor al pasar por encima */
                transition: background-color 0.3s ease;
                /* Agrega una transición suave al color de fondo */
            }
            #btoagr {
                background-color: #2175aa;
                color: #ffffff;
                /* Color del texto */
                border: 1px solid #16527a;
                /* Borde del botón */
                border-radius: 5px;
                /* Bordes redondeados */
                
                /* Espaciado interno (arriba/abajo - izquierda/derecha) */
                font-size: 16px;
                /* Tamaño de fuente */
                cursor: pointer;
                /* Cambia el cursor al pasar por encima */
                transition: background-color 0.3s ease;
                /* Agrega una transición suave al color de fondo */
            }

            #dd {
                width: 25%;
                text-align: center;
                color: #ffc219;
                font-family: 'Arial, Helvetica, sans-serif';
                font-size: 25px;
            }

            #mb3 {
                border-radius: 30px;
                width: 80%;
               
            }  
            #mb4 {
                border-radius: 30px;
                width: 110%;
               margin-right: -120%;
            }     
            #butleei{
            background-color:rgb(114, 255, 32); 
            border:rgb(114, 255, 32);
            font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #but2i{
                background-color:red;
                border:red;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-bottom: 5%;
            }
            #carbody{
            text-align:center;
            font-family: system-ui;
            font-size:25px;
            background-color: #f3faff;
            }
            #pprecio{
                font-size: 24px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                color: #012060;
                text-align: center;
            }
            #mrcu{
                margin-right: -55px !important;
            }

        }

        /*Terminan 3xl Pantallas mas grandes*/
         /*2xl Pantallas grandes*/
         @media (min-width: 1536px) and (max-width: 1849px) {
 /* DISEÑO DE CARRUSEL USUARIOSS ----------------------------------------- */
             /* mover carrusel */
             #item {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color: #f2f2f2;
                border: 2px solid #e9edff;
            }

             #carouselExampleDark {
                width: 79.8%;
                margin-bottom: 50px;
                margin-left: 18.8%;
            }
            #imgcarru {
                max-width: 105%;
                max-height: 450px;
                margin: 0 auto;
                opacity: 90%;
                border: 1px solid #fbe0c1;
            }
            .tt {
                width: 20%; /* Ajusta según sea necesario */
                padding: 15px; /* Añade espaciado según sea necesario */
            }

            #tamimg {
                width: 80%; /* Ajusta según sea necesario */
            }

            #imgcarru {
                width: 100%;
                height: auto;
            }
            .font-p {
                font-size: 22px;
                color: #ffc219;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                display: flex;
                flex-direction: column; /* Apila los elementos verticalmente */
                justify-content: center; /* Centra verticalmente en el eje Y */
                align-items: center; /* Centra horizontalmente en el eje X */
                text-align: center;
                height: 100%; /* Asegura que el contenedor ocupe el 100% de la altura disponible */
            }

            .tt{
                
                width: 40%;
                height: 350px;
                margin-left: 3%;
            }
/* Otros estilos según sea necesario */
        /* ICONOS INDEX------------------------------------------------ */
            #prinicon {
                max-width: 75%;
                margin: 0 auto;
                margin-bottom: 4%;
            }

            #twoicon {
                padding-left: 10px;
                margin-right: -14%;
                margin-left: 8.5%;
            }

            #icontainer {
                background-color: #ececec;
                padding: 20px;
                border-radius: 5px;
                width: 250px;
                display: flex;
                justify-content: center;
                text-align: center;
                align-items: center;
            }

            #imgicons {
                height: 80px;
                width: 90px;
                margin-bottom: 20px;
            }

            #buticons {
                background-color: #012060;
                border-color: #008282;
                width: 250px;
                border: none;
            }

            #spanicons {
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 18px;
            }
        
                /* CONTENIDO INDEX -----------------------------------------------------------*/
            #fascont{
                color:#012060;
                text-decoration: none;
                font-size: 40px;
                margin-bottom: 3%;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #atwo{
                background-color:#012060;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #btnNosotros {
                    margin-top: 20px;
                    margin-left: 5%;
                }
            h5{
                color: #2175aa;
                text-align: start;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-bottom: 27%;
            }
            .mt-4{
                margin-bottom: 4%;
            }
            #imgconte{
                margin-left: 10%;
                margin-top: 3%
            }
            /* mover flecha carru izquierda */
            .carousel-control-prev {
                margin-left: -6%;
            }
        /* ------------------------ */
            /* INFORMES CARTAS DEL CARRITO----------------------------------- ---*/
            /* text informe */
            h1 {
                font-family: 'GlacialIndifference-Bold', sans-serif;
                color: #012060;
            }

            #titprod {
                margin-bottom: 2%;
                margin-left: 41%;
            }

            #contcarts {
                margin-left: 21%;
            }

            #imgpro {
                height: 250px;
                width: 102%;
                border-top-left-radius: 30px;
                border-top-right-radius: 30px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
                margin-left: -4px;
            }

            #h5 {
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 16px;
                text-align: center;
                color: #2175aa;
            }

            #descripcion {
                font-size: 24px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }

            .card-precio {
                font-size: 24px;
                font-family: ui-rounded;
            }

            #h6 {
                font-size: 17px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }

            .btoagr:hover {
                background-color: #16527a;
                /* Cambia el color de fondo al pasar por encima */
            }

            /* boton agregar carrito  */
            .btoagr {
                background-color: #2175aa;
                color: #ffffff;
                /* Color del texto */
                border: 1px solid #16527a;
                /* Borde del botón */
                border-radius: 5px;
                /* Bordes redondeados */
                
                /* Espaciado interno (arriba/abajo - izquierda/derecha) */
                font-size: 16px;
                /* Tamaño de fuente */
                cursor: pointer;
                /* Cambia el cursor al pasar por encima */
                transition: background-color 0.3s ease;
                /* Agrega una transición suave al color de fondo */
            }
            #btoagr {
                background-color: #2175aa;
                color: #ffffff;
                /* Color del texto */
                border: 1px solid #16527a;
                /* Borde del botón */
                border-radius: 5px;
                /* Bordes redondeados */
                
                /* Espaciado interno (arriba/abajo - izquierda/derecha) */
                font-size: 16px;
                /* Tamaño de fuente */
                cursor: pointer;
                /* Cambia el cursor al pasar por encima */
                transition: background-color 0.3s ease;
                /* Agrega una transición suave al color de fondo */
            }

            #dd {
                width: 25%;
                text-align: center;
                color: #ffc219;
                font-family: 'Arial, Helvetica, sans-serif';
                font-size: 25px;
            }

            #mb3 {
                border-radius: 30px;
                width: 80%;
               
            }  
            #mb4 {
                border-radius: 30px;
                width: 110%;
               margin-right: -120%;
            }     
            #butleei{
            background-color:rgb(114, 255, 32); 
            border:rgb(114, 255, 32);
            font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #but2i{
                background-color:red;
                border:red;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-bottom: 5%;
            }
            #carbody{
            text-align:center;
            font-family: system-ui;
            font-size:25px;
            background-color: #f3faff;
            }
            #pprecio{
                font-size: 24px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                color: #012060;
                text-align: center;
            }
            #mrcu{
                margin-right: -55px !important;
            }
}

/*Terminan 2xl Pantallas grandes----------------------------------------------------*/


        @media (min-width: 1280px) and (max-width: 1535px) {
            /* DISEÑO DE CARRUSEL USUARIOSS ----------------------------------------- */
             /* mover carrusel */
             #item {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color: #f2f2f2;
                border: 2px solid #e9edff;
            }

             #carouselExampleDark {
                width: 77%;
                margin-bottom: 50px;
                margin-left: 21%;
            }
            #imgcarru {
                max-width: 105%;
                max-height: 450px;
                margin: 0 auto;
                opacity: 90%;
                border: 1px solid #fbe0c1;
            }
            .tt {
                width: 30%; /* Ajusta según sea necesario */
                padding: 15px; /* Añade espaciado según sea necesario */
            }

            #tamimg {
                width: 70%; /* Ajusta según sea necesario */
            }

            #imgcarru {
                width: 100%;
                height: auto;
            }
            .font-p {
                font-size: 22px;
                color: #ffc219;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                display: flex;
                flex-direction: column; /* Apila los elementos verticalmente */
                justify-content: center; /* Centra verticalmente en el eje Y */
                align-items: center; /* Centra horizontalmente en el eje X */
                text-align: center;
                height: 100%; /* Asegura que el contenedor ocupe el 100% de la altura disponible */
            }

            .tt{
                
                width: 40%;
                height: 350px;
                margin-left: 3%;
            }

/* Otros estilos según sea necesario */

            /* -----------------T */

        /* ICONOS INDEX------------------------------------------------ */
            #prinicon {
                max-width: 75%;
                margin: 0 auto;
                margin-bottom: 4%;
            }

            #twoicon {
                padding-left: 10px;
                margin-right: -14%;
                margin-left: 8.5%;
            }

            #icontainer {
                background-color: #ececec;
                padding: 20px;
                border-radius: 5px;
                width: 250px;
                display: flex;
                justify-content: center;
                text-align: center;
                align-items: center;
            }

            #imgicons {
                height: 80px;
                width: 90px;
                margin-bottom: 20px;
            }

            #buticons {
                background-color: #012060;
                border-color: #008282;
                width: 250px;
                border: none;
            }

            #spanicons {
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 18px;
            }
        
                /* CONTENIDO INDEX -----------------------------------------------------------*/
            #fascont{
                color:#012060;
                text-decoration: none;
                font-size: 40px;
                margin-bottom: 3%;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #atwo{
                background-color:#012060;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #btnNosotros {
                    margin-top: 20px;
                    margin-left: 5%;
                }
            h5{
                color: #2175aa;
                text-align: start;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-bottom: 27%;
            }
            .mt-4{
                margin-bottom: 4%;
            }
            #imgconte{
                margin-left: 10%;
                margin-top: 3%
            }
            /* mover flecha carru izquierda */
            .carousel-control-prev {
                margin-left: -6%;
            }
        /* ------------------------ */
            /* INFORMES CARTAS DEL CARRITO----------------------------------- ---*/
            /* text informe */
            h1 {
                font-family: 'GlacialIndifference-Bold', sans-serif;
                color: #012060;
            }

            #titprod {
                margin-bottom: 2%;
                margin-left: 41%;
            }

            #contcarts {
                margin-left: 21%;
            }

            #imgpro {
                height: 250px;
                width: 102%;
                border-top-left-radius: 30px;
                border-top-right-radius: 30px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
                margin-left: -4px;
            }

            #h5 {
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 16px;
                text-align: center;
                color: #2175aa;
            }

            #descripcion {
                font-size: 24px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }

            .card-precio {
                font-size: 24px;
                font-family: ui-rounded;
            }

            #h6 {
                font-size: 17px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }

            .btoagr:hover {
                background-color: #16527a;
                /* Cambia el color de fondo al pasar por encima */
            }

            /* boton agregar carrito  */
            .btoagr {
                background-color: #2175aa;
                color: #ffffff;
                /* Color del texto */
                border: 1px solid #16527a;
                /* Borde del botón */
                border-radius: 5px;
                /* Bordes redondeados */
                
                /* Espaciado interno (arriba/abajo - izquierda/derecha) */
                font-size: 16px;
                /* Tamaño de fuente */
                cursor: pointer;
                /* Cambia el cursor al pasar por encima */
                transition: background-color 0.3s ease;
                /* Agrega una transición suave al color de fondo */
            }
            #btoagr {
                background-color: #2175aa;
                color: #ffffff;
                /* Color del texto */
                border: 1px solid #16527a;
                /* Borde del botón */
                border-radius: 5px;
                /* Bordes redondeados */
                
                /* Espaciado interno (arriba/abajo - izquierda/derecha) */
                font-size: 16px;
                /* Tamaño de fuente */
                cursor: pointer;
                /* Cambia el cursor al pasar por encima */
                transition: background-color 0.3s ease;
                /* Agrega una transición suave al color de fondo */
            }

            #dd {
                width: 25%;
                text-align: center;
                color: #ffc219;
                font-family: 'Arial, Helvetica, sans-serif';
                font-size: 25px;
            }

            #mb3 {
                border-radius: 30px;
                width: 80%;
               
            }  
            #mb4 {
                border-radius: 30px;
                width: 110%;
               margin-right: -120%;
            }     
            #butleei{
            background-color:rgb(114, 255, 32); 
            border:rgb(114, 255, 32);
            font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #but2i{
                background-color:red;
                border:red;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-bottom: 5%;
            }
            #carbody{
            text-align:center;
            font-family: system-ui;
            font-size:25px;
            background-color: #f3faff;
            }
            #pprecio{
                font-size: 24px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                color: #012060;
                text-align: center;
            }
            #mrcu{
                margin-right: -55px !important;
            }
}
       /*lg Pantallas mediaGrandes---------------------------------------------------*/
       @media (min-width: 1024px) and (max-width: 1279px) {
 /* DISEÑO DE CARRUSEL USUARIOSS ----------------------------------------- */
             /* mover carrusel */
             #item {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color: #f2f2f2;
                border: 2px solid #e9edff;
            }

             #carouselExampleDark {
                width: 85.8%;
                margin-bottom: 50px;
                margin-left: 26.3%;
            }
            #imgcarru {
                max-width: 105%;
                max-height: 450px;
                margin: 0 auto;
                opacity: 90%;
                border: 1px solid #fbe0c1;
            }
            .tt {
                width: 30%; /* Ajusta según sea necesario */
                padding: 15px; /* Añade espaciado según sea necesario */
            }

            #tamimg {
                width: 70%; /* Ajusta según sea necesario */
            }

            #imgcarru {
                width: 100%;
                height: auto;
            }
            .font-p {
                font-size: 22px;
                color: #ffc219;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                display: flex;
                flex-direction: column; /* Apila los elementos verticalmente */
                justify-content: center; /* Centra verticalmente en el eje Y */
                align-items: center; /* Centra horizontalmente en el eje X */
                text-align: center;
                height: 100%; /* Asegura que el contenedor ocupe el 100% de la altura disponible */
            }

            .tt{
                
                width: 40%;
                height: 350px;
                margin-left: 3%;
            }

        /* ICONOS INDEX------------------------------------------------ */
            #prinicon {
                max-width: 75%;
                margin: 0 auto;
                margin-bottom: 4%;
            }

            #twoicon {
                padding-left: 10px;
                margin-right: -33%;
                margin-left: 16%;
            }

            #icontainer {
                background-color: #ececec;
                padding: 20px;
                border-radius: 5px;
                width: 205px;
                display: flex;
                justify-content: center;
                text-align: center;
                align-items: center;
            }

            #imgicons {
                height: 80px;
                width: 90px;
                margin-bottom: 20px;
            }

            #buticons {
                background-color: #012060;
                border-color: #008282;
                width: 205px;
                border: none;
            }

            #spanicons {
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 15px;
            }
        
                /* CONTENIDO INDEX -----------------------------------------------------------*/
            #fascont{
                color:#012060;
                text-decoration: none;
                font-size: 40px;
                margin-bottom: 3%;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 15%;
            }
            #atwo{
                background-color:#012060;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 15%;
            }
            #btnNosotros {
                    margin-top: 20px;
                    margin-left: 15%;
                }
            h5{
                color: #2175aa;
                text-align: start;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-bottom: 27%;
                margin-left: 15%;
                width: 100%;
            }
            .mt-4{
                margin-bottom: 4%;
            }
            #imgconte{
                margin-left: 38%;
                margin-top: 8%
            }
            /* mover flecha carru izquierda */
            .carousel-control-prev {
                margin-left: -6%;
            }
        /* ------------------------ */
            /* INFORMES CARTAS DEL CARRITO----------------------------------- ---*/
            /* text informe */
            h1 {
                font-family: 'GlacialIndifference-Bold', sans-serif;
                color: #012060;
            }

            #titprod {
                margin-bottom: 2%;
                margin-left: 46%;
            }

            #contcarts {
                margin-left: 28%;
            }

            #imgpro {
                height: 250px;
                width: 102%;
                border-top-left-radius: 30px;
                border-top-right-radius: 30px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
                margin-left: -4px;
            }

            #h5 {
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 16px;
                text-align: center;
                color: #2175aa;
            }

            #descripcion {
                font-size: 24px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }

            .card-precio {
                font-size: 24px;
                font-family: ui-rounded;
            }

            #h6 {
                font-size: 17px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }

            .btoagr:hover {
                background-color: #16527a;
                /* Cambia el color de fondo al pasar por encima */
            }

            /* boton agregar carrito  */
            .btoagr {
                background-color: #2175aa;
                color: #ffffff;
                /* Color del texto */
                border: 1px solid #16527a;
                /* Borde del botón */
                border-radius: 5px;
                /* Bordes redondeados */
                
                /* Espaciado interno (arriba/abajo - izquierda/derecha) */
                font-size: 16px;
                /* Tamaño de fuente */
                cursor: pointer;
                /* Cambia el cursor al pasar por encima */
                transition: background-color 0.3s ease;
                /* Agrega una transición suave al color de fondo */
            }
            #btoagr {
                background-color: #2175aa;
                color: #ffffff;
                /* Color del texto */
                border: 1px solid #16527a;
                /* Borde del botón */
                border-radius: 5px;
                /* Bordes redondeados */
                
                /* Espaciado interno (arriba/abajo - izquierda/derecha) */
                font-size: 16px;
                /* Tamaño de fuente */
                cursor: pointer;
                /* Cambia el cursor al pasar por encima */
                transition: background-color 0.3s ease;
                /* Agrega una transición suave al color de fondo */
            }

            #dd {
                width: 25%;
                text-align: center;
                color: #ffc219;
                font-family: 'Arial, Helvetica, sans-serif';
                font-size: 25px;
            }

            #mb3 {
                border-radius: 30px;
                width: 80%;
               
            }  
            #mb4 {
                border-radius: 30px;
                width: 110%;
               margin-right: -120%;
            }     
            #butleei{
            background-color:rgb(114, 255, 32); 
            border:rgb(114, 255, 32);
            font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #but2i{
                background-color:red;
                border:red;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-bottom: 5%;
            }
            #carbody{
            text-align:center;
            font-family: system-ui;
            font-size:25px;
            background-color: #f3faff;
            }
            #pprecio{
                font-size: 24px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                color: #012060;
                text-align: center;
            }
            #mrcu{
                margin-right: -55px !important;
            }
       }
            /*md Pantallas Medianas---------------------------------------------------------*/
     @media (min-width: 768px) and (max-width: 1023px) {
        /* DISEÑO DE CARRUSEL USUARIOSS ----------------------------------------- */
             /* mover carrusel */
             #item {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color: #f2f2f2;
                border: 2px solid #e9edff;
            }

             #carouselExampleDark {
                width: 72%;
                margin-bottom: 50px;
                margin-left: 10%;
                height: 100%;
            }
            #imgcarru {
                max-width: 105%;
                max-height: 1150px;
                margin: 0 auto;
                opacity: 90%;
                border: 1px solid #fbe0c1;
            }
            .tt {
                width: 30%; /* Ajusta según sea necesario */
                padding: 15px; /* Añade espaciado según sea necesario */
            }

            #tamimg {
                width: 70%; /* Ajusta según sea necesario */
            }

            
            .font-p {
                font-size: 22px;
                color: #ffc219;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                display: flex;
                flex-direction: column; /* Apila los elementos verticalmente */
                justify-content: center; /* Centra verticalmente en el eje Y */
                align-items: center; /* Centra horizontalmente en el eje X */
                text-align: center;
                height: 100%; /* Asegura que el contenedor ocupe el 100% de la altura disponible */
            }

            .tt{
                
                width: 40%;
                height: 350px;
                margin-left: 3%;
            }

        /* ICONOS INDEX------------------------------------------------ */
            #prinicon {
                max-width: 75%;
                margin: 0 auto;
                margin-bottom: 4%;
            }

            #twoicon {
                padding-left: 10px;
                margin-right: -33%;
                margin-left: -13%;
            }

            #icontainer {
                background-color: #ececec;
                padding: 20px;
                border-radius: 5px;
                width: 205px;
                display: flex;
                justify-content: center;
                text-align: center;
                align-items: center;
            }

            #imgicons {
                height: 80px;
                width: 90px;
                margin-bottom: 20px;
            }

            #buticons {
                background-color: #012060;
                border-color: #008282;
                width: 205px;
                border: none;
            }

            #spanicons {
                color: white;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 15px;
            }
        
                /* CONTENIDO INDEX -----------------------------------------------------------*/
            #fascont{
                color:#012060;
                text-decoration: none;
                font-size: 40px;
                margin-bottom: 3%;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 15%;
            }
            #atwo{
                background-color:#012060;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-left: 15%;
            }
            #btnNosotros {
                    margin-top: 20px;
                    margin-left: 15%;
                }
            h5{
                color: #2175aa;
                text-align: start;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-bottom: 27%;
                margin-left: 15%;
                width: 100%;
            }
            .mt-4{
                margin-bottom: 4%;
            }
            #imgconte{
                margin-left: 38%;
                margin-top: 8%
            }
            /* mover flecha carru izquierda */
            .carousel-control-prev {
                margin-left: -6%;
            }
        /* ------------------------ */
            /* INFORMES CARTAS DEL CARRITO----------------------------------- ---*/
            /* text informe */
            h1 {
                font-family: 'GlacialIndifference-Bold', sans-serif;
                color: #012060;
            }

            #titprod {
                margin-bottom: 2%;
                margin-left: 46%;
            }

            #contcarts {
                margin-left: 28%;
            }

            #imgpro {
                height: 250px;
                width: 102%;
                border-top-left-radius: 30px;
                border-top-right-radius: 30px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
                margin-left: -4px;
            }

            #h5 {
                font-family: 'GlacialIndifference-Bold', sans-serif;
                font-size: 16px;
                text-align: center;
                color: #2175aa;
            }

            #descripcion {
                font-size: 24px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }

            .card-precio {
                font-size: 24px;
                font-family: ui-rounded;
            }

            #h6 {
                font-size: 17px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
            }

            .btoagr:hover {
                background-color: #16527a;
                /* Cambia el color de fondo al pasar por encima */
            }

            /* boton agregar carrito  */
            .btoagr {
                background-color: #2175aa;
                color: #ffffff;
                /* Color del texto */
                border: 1px solid #16527a;
                /* Borde del botón */
                border-radius: 5px;
                /* Bordes redondeados */
                
                /* Espaciado interno (arriba/abajo - izquierda/derecha) */
                font-size: 16px;
                /* Tamaño de fuente */
                cursor: pointer;
                /* Cambia el cursor al pasar por encima */
                transition: background-color 0.3s ease;
                /* Agrega una transición suave al color de fondo */
            }
            #btoagr {
                background-color: #2175aa;
                color: #ffffff;
                /* Color del texto */
                border: 1px solid #16527a;
                /* Borde del botón */
                border-radius: 5px;
                /* Bordes redondeados */
                
                /* Espaciado interno (arriba/abajo - izquierda/derecha) */
                font-size: 16px;
                /* Tamaño de fuente */
                cursor: pointer;
                /* Cambia el cursor al pasar por encima */
                transition: background-color 0.3s ease;
                /* Agrega una transición suave al color de fondo */
            }

            #dd {
                width: 25%;
                text-align: center;
                color: #ffc219;
                font-family: 'Arial, Helvetica, sans-serif';
                font-size: 25px;
            }

            #mb3 {
                border-radius: 30px;
                width: 80%;
               
            }  
            #mb4 {
                border-radius: 30px;
                width: 110%;
               margin-right: -120%;
            }     
            #butleei{
            background-color:rgb(114, 255, 32); 
            border:rgb(114, 255, 32);
            font-family: 'GlacialIndifference-Bold', sans-serif;
            }
            #but2i{
                background-color:red;
                border:red;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                margin-bottom: 5%;
            }
            #carbody{
            text-align:center;
            font-family: system-ui;
            font-size:25px;
            background-color: #f3faff;
            }
            #pprecio{
                font-size: 24px;
                font-family: 'GlacialIndifference-Bold', sans-serif;
                color: #012060;
                text-align: center;
            }
            #mrcu{
                margin-right: -55px !important;
            }
     }

/*Terminan md Pantallas Medianas*/
    </style>
</head>

<body>

    <!-- CABECERA -->

    @include('partials.navbar')

    <!-- -->
    @include('currency.index')

   <!-- carousel -->
<div id="carouselExampleDark" class="carousel carousel-dark slide mt-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($carrusel as $key => $item)
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}"
                class="{{ $key == 0 ? 'active' : '' }}" aria-label="Slide {{ $key + 1 }}"></button>
        @endforeach
    </div>

    <div class="carousel-inner" id="item">
        @foreach ($carrusel as $key => $item)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="10000" >
                <div class="d-flex align-items-center justify-content-between">
                    <div class="tt">
                        <p class="font-p underline">Mañana conversatorio virtual evolución sobre Analítica Solidaria.</p>
                    </div>
                    <div id="tamimg">
                        <img src="{{ asset($item->image_carrusel) }}" class="d-block" alt="..." id="imgcarru">
                    </div>
                </div>
                <div class="carousel-caption d-none d-md-block" style="text-align: right;"></div>
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

    <!-- iconos -->
    <div class="container mt-4 text-center" id="prinicon" >
        <div class="row" id="twoicon">
            @foreach ($iconos as $icono)
                <div class="col-md-3 mb-3">
                    <div class="icon-container" id="icontainer">
                        <!-- Coloca la imagen dinámica -->
                        <img src="{{ asset($icono->image_icono) }}" alt="{{ $icono->name_icono }}" class="img-fluid" id="imgicons">
                    </div>
                    <a class="btn btn-custom-color btn-block" id="buticons">
                        <span id="spanicons">{{ $icono->name_icono }}</span>
                    </a>
                </div>
            @endforeach
        </div>
     </div>
    <!-- contenido -->
    <div class="container mt-4">
        <div class="row">
            @foreach ($contenido as $contenido)
                <div class="col-md-6">
                    <img src="{{ asset($contenido->image_contenido) }}" alt="{{ $contenido->titulo_contenido }}" class="img-fluid" id="imgconte" alt="Imagen">
                </div>
                <div class="col-md-6" id="text">
                    <a class="fas fa" id="fascont" href="#">{{ $contenido->titulo_contenido }}</a>
                    <h5>{{ $contenido->texto_contenido }}</h5>
                    <a href="#" id="atwo" class="btn btn-primary btn-lg btn-block"><i class="fas fa-arrow-right"></i>{{ $contenido->name_boton }}</a>
                </div>
            @endforeach
        </div>
    </div>
   

   <!-- Productos -->
   <div class="fas fa" id="titprod">
        <h1>INFORMES O ESTUDIOS</h1>
    </div>
<br>
<br>
<div class="container" id="contcarts">
<div class="row">
    <!--  -->
    <div class="container">

        <div class="justify-content-center">
            <div class="row">
                @foreach ($newProductos as $newProduct)
                    @if ($newProduct['id'] == 1)
                        <div class="col-lg-6" id="mrcu">
                            <div class="card special-product-card" id="mb3">
                                <img src="{{ asset($newProduct['image_path']) }}" alt="{{ $newProduct['name'] }}" id="imgpro" class="card-img-top mx-auto" alt="{{ $newProduct['image_path'] }}">
                                <div class="card-body" id="card-body">
                                    <h6 class="card-title" id="h5">
                                        {{ $newProduct['name'] }}
                                    </h6>
                                    @if (Auth::check())
                                        <p class="card-precio" id="pprecio">
                                            <small class="text-muted" id="pprecio">
                                                Precio:
                                                {{ number_format($newProduct['price'], 0, ',', '.') }}
                                                COP
                                            </small>
                                        </p>
                                    @else
                                        <h6>Inicia sesión para comprar y visualizar el informe</h6>
                                    @endif
                                    {{-- <p class="card-precio" id="pprecio">{{ number_format($newProduct['price, 0, ',', '.') }} COP</p> --}}
                                    <!-- Agregar botón "Ver detalles" que abrirá el modal -->
                                    @if ($hasPurchased[$newProduct['id']])
                                        <div class="product-content">
                                            {{-- Lógica específica si el producto especial se ha comprado --}}
                                        </div>
                                    @else
                                        {{-- Lógica si el producto especial no se ha comprado --}}
                                    @endif

                                    <br>
                                    <br>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $newProduct['id'] }}"
                                            id="id" name="id">
                                        <input type="hidden" value="{{ $newProduct['name'] }}"
                                            id="name" name="name">
                                        @if (Auth::check())
                                            <input type="hidden" value="{{ $newProduct['price'] }}"
                                                id="price" name="price">
                                        @endif
                                        <input type="hidden" value="{{ $newProduct['image_path'] }}"
                                            id="img" name="img">
                                        <input type="hidden" value="1" id="quantity"
                                            name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                            <div class="row">
                                                @if (Auth::check())
                                                    @if ($hasPurchased[$newProduct['id']])
                                                        <!-- Agregar lógica específica si el producto especial se ha comprado -->
                                                    @else
                                                    <button class="btoagr" class="tooltip-test" title="add to cart">
                                                        <h6 id="h6"><i class="fa fa-shopping-cart" style="margin-right: 5px;"></i> Agregar al carrito</h6>
                                                    </button>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                    
                    @if ($newProduct['id'] != 1)
                    <!-- USUARIO INDEX BLADE ------------------------------------------------>
                        <div class="col-lg-6" id="mrcu">
                            <div class="card mb-3" id="mb3">
                                <img src="{{ asset($newProduct['image_path']) }}" alt="{{ $newProduct['name'] }}" id="imgpro">

                                <div class="card-body" id="carbody">
                                    <h5 class="card-title" id="h5">
                                        {{ $newProduct['name'] }}
                                    </h5>
                                    <div class="card-text-container">
                                        <p class="card-text" id="descripcion"> {{ $newProduct['description'] }}</p>
                                        @if (Auth::check())
                                            <p class="card-precio" id="pprecio">
                                                <small class="text-muted" id="pprecio">
                                                    Precio:
                                                    {{ number_format($newProduct['price'], 0, ',', '.') }}
                                                    COP
                                                </small>
                                            </p>
                                        @else
                                            <h6>Inicia sesión para comprar y visualizar el informe</h6>
                                        @endif
                                    </div>

                                    @if ($hasPurchased[$newProduct['id']])
                                        <div class="product-content">
                                            <a href="{{ route('informe.mostrar', ['id' => $newProduct['id']]) }}" id="butleei" class="btn btn-primary">Leer informe</a>
                                        </div>
                                    @else
                                        <div class="">
                                            <button type="button" class="btn btn-primary" id="but2i" data-toggle="modal" data-target="#productModal{{ $newProduct['id'] }}">
                                                Leer informe
                                            </button>
                                        </div>
                                    @endif
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $newProduct['id'] }}"
                                            id="id" name="id">
                                        <input type="hidden" value="{{ $newProduct['name'] }}"
                                            id="name" name="name">
                                        <input type="hidden" value="{{ $newProduct['price'] }}"
                                            id="price" name="price">
                                        <input type="hidden" value="{{ $newProduct['image_path'] }}"
                                            id="img" name="img">
                                        <input type="hidden" value="1" id="quantity"
                                            name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                            <div class="row">
                                                @if (Auth::check())
                                                    @if ($hasPurchased[$newProduct['id']])
                                                        <!-- Agregar lógica específica si el producto especial se ha comprado -->
                                                    @else
                                                    <button class="btoagr" class="tooltip-test" title="add to cart">
                                                        <h6 id="h6"><i class="fa fa-shopping-cart" ></i> Agregar al carrito</h6>
                                                    </button>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!------------------------------------------------------------  -->
                        <!-- Modal para detalles del producto -->
                        <div class="modal fade" id="productModal{{ $newProduct['id'] }}"
                            tabindex="-1" role="dialog"
                            aria-labelledby="productModalLabel{{ $newProduct['id'] }}"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content ">
                                    <div class="modal-header ">
                                        <h5 class="modal-title"
                                            id="productModalLabel{{ $newProduct['id'] }}">
                                            @if ($hasPurchased[$newProduct['id']])
                                                {{-- {{ $pro->contenido }} --}}
                                                <div class="product-content">
                                                    {!! $newProduct['contenido'] !!}
                                                </div>
                                            @else
                                                <div style="font-family: 'Open Sans', sans-serif;">
                                                    PARA ACCEDER A ESTA INFORMACIÓN DEBES COMPRAR EL
                                                    INFORME
                                                </div>
                                            @endif
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
                       
    <!-- boletin -->
    <br>
    @include('footer.boletin')
    <!-- footer -->
    <br>
    @include('footer.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
