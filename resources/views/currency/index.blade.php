<!-- resources/views/currency/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <title>Marquesina de Indicadores</title>
    <style>
        /* RESPONSIVE---------------------------------------T */
        /*3xl Pantallas mas grandes*/
        @media (min-width: 1850px) {
            .marquesina {
                /* background-color: rgb(197, 189, 189); */
                background-color: RGB(220 162 17);
                margin-left: 297px;
                width: 77.8%;
                color: black;
                font-family: 'Open Sans', sans-serif;
                font-weight: bold;
                border-radius: 15px;
                margin-top: -0.3%;
            }

            .marquesina marquee {
                display: flex; /* Usa flexbox */
                align-items: flex-start; /* Alinea al inicio del contenedor */
                gap: 20px; /* Espaciado entre elementos */
                overflow: hidden; /* Evita el desbordamiento horizontal */
                justify-content: start;
                text-align: start;  
                
            }

            .marquesina span {
                white-space: nowrap; /* Evita el salto de línea dentro de los spans */
            }

            #separador {
                color: RGB(0 130 130);
            }
        }
        /* -------------------------------------------------------------- */

                /*Terminan 3xl Pantallas mas grandes*/
        /*2xl Pantallas grandes*/
        @media (min-width: 1536px) and (max-width: 1849px) {
            .marquesina {
                /* background-color: rgb(197, 189, 189); */
                background-color: RGB(220 162 17);
                margin-left: 285px;
                width: 79.8%;
                color: black;
                font-family: 'Open Sans', sans-serif;
                font-weight: bold;
                border-radius: 15px;
                margin-top: -0.3%;
            }

            .marquesina marquee {
                display: flex; /* Usa flexbox */
                align-items: flex-start; /* Alinea al inicio del contenedor */
                gap: 20px; /* Espaciado entre elementos */
                overflow: hidden; /* Evita el desbordamiento horizontal */
                justify-content: start;
                text-align: start;  
                
            }

            .marquesina span {
                white-space: nowrap; /* Evita el salto de línea dentro de los spans */
            }

            #separador {
                color: RGB(0 130 130);
            }
        }
/* ------------------------------------------------------------------ */

         /*xl Pantallas semiGrandes*/
         @media (min-width: 1280px) and (max-width: 1535px) {
            .marquesina {
                /* background-color: rgb(197, 189, 189); */
                background-color: RGB(220 162 17);
                margin-left: 265px;
                width: 77.8%;
                color: black;
                font-family: 'Open Sans', sans-serif;
                font-weight: bold;
                border-radius: 15px;
                margin-top: -0.3%;
            }

            .marquesina marquee {
                display: flex; /* Usa flexbox */
                align-items: flex-start; /* Alinea al inicio del contenedor */
                gap: 20px; /* Espaciado entre elementos */
                overflow: hidden; /* Evita el desbordamiento horizontal */
                justify-content: start;
                text-align: start;  
                
            }

            .marquesina span {
                white-space: nowrap; /* Evita el salto de línea dentro de los spans */
            }

            #separador {
                color: RGB(0 130 130);
            }
        }
/* ---------------------------------------------------------------------- */

       /*lg Pantallas mediaGrandes*/
       @media (min-width: 1024px) and (max-width: 1279px) {
        .marquesina {
                /* background-color: rgb(197, 189, 189); */
                background-color: RGB(220 162 17);
                margin-left: 268px;
                width: 85.5%;
                color: black;
                font-family: 'Open Sans', sans-serif;
                font-weight: bold;
                border-radius: 15px;
                margin-top: -0.3%;
            }

            .marquesina marquee {
                display: flex; /* Usa flexbox */
                align-items: flex-start; /* Alinea al inicio del contenedor */
                gap: 20px; /* Espaciado entre elementos */
                overflow: hidden; /* Evita el desbordamiento horizontal */
                justify-content: start;
                text-align: start;  
                
            }

            .marquesina span {
                white-space: nowrap; /* Evita el salto de línea dentro de los spans */
            }

            #separador {
                color: RGB(0 130 130);
            }
    }
     /*md Pantallas Medianas-----------------------------------------------------------------*/
     @media (min-width: 768px) and (max-width: 1023px) {
        .marquesina {
                /* background-color: rgb(197, 189, 189); */
                background-color: RGB(220 162 17);
                margin-left: 10%;
                width: 72%;
                color: black;
                font-family: 'Open Sans', sans-serif;
                font-weight: bold;
                border-radius: 15px;
                margin-top: -0.3%;
            }

            .marquesina marquee {
                display: flex; /* Usa flexbox */
                align-items: flex-start; /* Alinea al inicio del contenedor */
                gap: 20px; /* Espaciado entre elementos */
                overflow: hidden; /* Evita el desbordamiento horizontal */
                justify-content: start;
                text-align: start;  
                
            }

            .marquesina span {
                white-space: nowrap; /* Evita el salto de línea dentro de los spans */
            }

            #separador {
                color: RGB(0 130 130);
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
    <br>
<br>
 <div class="marquesina">
        <marquee behavior="scroll">
            @foreach ($rates as $currency => $rate)
                <span>{{ $currency }}: {{ $rate }}<a id="separador">&nbsp;&nbsp;&nbsp;&nbsp;|</a></span>
            @endforeach

            @foreach ($Marquesina as $dato)
                <span>{{ $dato->datoIndicador }} + {{ $dato->valor }}<a id="separador">&nbsp;&nbsp;&nbsp;&nbsp;|</a></span>
            @endforeach
        </marquee>
    </div>

</div>
</body>
</html>
