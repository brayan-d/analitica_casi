<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Analítica Solidaria</title>
    <!-- Agrega la referencia a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    @media (min-width: 1280px) and (max-width: 1535px) {
        @font-face {
        font-family: 'GlacialIndifference-Bold';
        src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
        }
        @font-face {
        font-family: 'GlacialIndifference-Regular';
        src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
        }
        .image{
            margin-left: 45%;
            width:80%
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
        .text-overla {
            position: absolute;
            top: -50px; /* Ajusta la posición vertical del texto */
            left: 10px; /* Ajusta la posición horizontal del texto */
            width: 170px;
            padding: 10px; /* Espacio interno del texto */
            margin-left: 145%; 
            margin-top: 100px; 
            font-size: 60px
        }
        .fondimg {
            position: absolute;
            top: 50px; /* Ajusta la posición vertical del fondo */
            left: 10px; /* Ajusta la posición horizontal del fondo */
            width: 78%;
            height: 100%;
            background: linear-gradient(to right, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.9) 90%);
            padding: 10px; /* Espacio interno del texto */
            margin-left: 600px; 
            margin-top: -7.3%; 
            font-size: 50px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1); /* Drop shadow para los bordes */
            box-sizing: border-box; /* Incluye el grosor del borde en el tamaño total del elemento */
        }
        .img-fluid{
            width: 20px;
            margin-bottom: 3%;
        }
        #spgr{
            font-size: 40px;
            color:#2175aa;
        }
        .col-md-6{
            margin-bottom: 5%;
        }
        .contacto-section{
            margin-left: -50px;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        :focus {
            outline: none;
        }
        body {
            background: #DBDBDB;
            font-family: 'Open sans';
            margin: 0;
            padding: 0;
        }
        /* FORMULARIO =================================== */
        .form_wrap {
            width: 55%;
            height: 780px;
            margin: 50px auto;
            display: flex;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            margin-left: 27%
        }
        /* Informacion de Contacto*/
        .cantact_info::before {
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: #2175aa;
            opacity: 0.9;
        }
        .cantact_info {
            width: 38%;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url('../fondo.jpg');
            background-size: cover;
            background-position: center center;
        }
        .info_title,
        .info_items {
            position: relative;
            z-index: 2;
            color: #fff;
        }
        .info_title {
            margin-bottom: 60px;
        }
        .info_title span {
            font-size: 100px;
            display: block;
            text-align: center;
            margin-bottom: 15px;
        }
        .info_title h2 {
            font-size: 35px;
            text-align: center;
        }
        .info_items p {
            display: flex;
            align-items: center;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .info_items p:nth-child(1) span {
            font-size: 30px;
            margin-right: 10px;
        }
        .info_items p:nth-child(2) span {
            font-size: 50px;
            margin-right: 15px;
            margin-left: 4px;
        }
        /* Formulario de contacto*/
        form.form_contact {
            width: 62%;
            padding: 30px 40px;
        }
        form.form_contact h2 {
            font-size: 25px;
            font-weight: 600;
            color: #303030;
            margin-bottom: 30px;
        }
        form.form_contact .user_info {
            display: flex;
            flex-direction: column;
        }
        form.form_contact label {
            font-weight: 600;
        }
        form.form_contact input,
        form.form_contact textarea {
            width: 100%;
            padding: 8px 0px 5px;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #D1D1D1;
            font-family: 'Open sans';
            color: #5A5A5A;
            font-size: 14px;
            font-weight: 400;
        }
        form.form_contact textarea {
            max-width: 100%;
            min-width: 100%;
            max-height: 90px;
        }
        form.form_contact input[type="button"] {
            width: 180px;
            background: #4091EC;
            padding: 10px;
            border: none;
            border-radius: 25px;
            align-self: flex-end;
            color: #fff;
            font-family: 'Open sans';
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }
        form.form_contact input[type="button"]:hover {
            background: #3371B6;
        }
        /* Ventana de errores*/
        .modal_wrap {
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 3;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .mensaje_modal {
            background: #fff;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
            width: 400px;
            padding: 30px 20px 15px;
        }
        .mensaje_modal h3 {
            text-align: center;
            font-family: 'Ubuntu';
            font-size: 20px;
            font-weight: 400;
        }
        .mensaje_modal h3:after {
            content: '';
            display: block;
            width: 100%;
            height: 1px;
            background: #C5C5C5;
            margin: 10px 0px 15px;
        }
        .mensaje_modal p {
            font-size: 16px;
            color: #606060;
        }

        .mensaje_modal p:before {
            content: "\f00d";
            font-family: FontAwesome;
            display: inline-block;
            color: #E25151;
            margin-right: 8px;
        }
        #btnClose {
            display: inline-block;
            padding: 3px 10px;
            margin-top: 10px;
            background: #E25151;
            color: #fff;
            border: 2px solid #B14141;
            cursor: pointer;
            float: right;
        }
        #djd{
            color: #2175aa;
            font-family: 'GlacialIndifference-Bold', sans-serif;
            font-size: 32px;
        }
        #env{
            font-size: 30px;
            font-family: 'GlacialIndifference-Bold', sans-serif;
        }
        button[type="submit"] {
        border-radius: 15px; /* Puedes ajustar el valor según tu preferencia */
        border-color: #2175aa; /* Cambia el color de los bordes según tu preferencia */
        padding: 10px 20px; /* Ajusta el relleno según tu preferencia */
    }
    label{
        font-size: 18px;
        color: #2175aa;
    }
    select{
        font-size: 18px;
        color:#012060;
    }
    #contt{
        margin-bottom: 3%;
    }
}
    </style>
</head>
<body>
    <!-- CABECERA -->
    @include('partials.navbar')
    <!-- -->
    <div id="contt"></div>
    <!-- CONTACTO -->
    <div class="col-md-6 mt-0">
        <!-- Contenedor de la imagen y el texto -->
        <div class="image-container">
            <img src="{{ asset('img/image25.png') }}" class="image" alt="Imagen">
            <div class="fondimg"></div>
            <!-- Texto que se superpone a la imagen -->
            <div class="text-overla">
                <img src="{{ asset('img\image30.png') }}" alt="Icono 2" class="img-fluid" id="img-fluid">
            </div>

            <div class="text-overlay">
                <a class="fas fa" href="{{ route('contacto') }}"><span id="spgr">  NOSOTROS TE CONTACTAMOS</span></a>
            </div>
        </div>
    </div>
<!--  -->
<!-- formulario -->

<section class="form_wrap">

<section class="cantact_info">
    <section class="info_title">
        <span class="fa fa-user-circle"></span>
        <h2>INFORMACION<br>DE CONTACTO</h2>
    </section>
    <section class="info_items">
        <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
        <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
    </section>
</section>

<form method="POST" action="{{ route('validar-contact') }}" class="form_contact">
    @csrf
    <h2 id="djd">Dejanos tus Datos</h2>
    <div class="user_info">
        <label for="names">Nombres *</label>
        <input type="text" id="names" name="name" required autocomplete="disable">

        <label for="apellidosInput">Apellidos *</label>
        <input type="text" id="apellidosInput" name="apellidos" required autocomplete="disable">

        <label for="email">Correo electrónico *</label>
        <input type="text" id="email" name="email" required autocomplete="disable">

        <label for="fechaNacimientoInput">Fecha de Nacimiento *</label>
        <input type="date" id="fechaNacimientoInput" name="fecha_nacimiento" required>

        <label for="tipoDocumentoInput">Tipo de Documento *</label>
        <select id="tipoDocumentoInput" name="tipo_documento" required>
            <option value="cedula_ciudadania">Cedula de Ciudadanía</option>
            <option value="extranjeria">Cedula de Extranjería</option>
            <option value="pasaporte">Número de Pasaporte</option>
        </select>

        <label for="numeroDocumentoInput">Número de Documento *</label>
        <input type="text" id="numeroDocumentoInput" name="numero_documento" required>

        <label for="celularInput">Celular *</label>
        <input type="text" id="celularInput" name="celular" required>

        <button type="submit"><b id="env">➜ENVIAR</b></button>
    </div>
</form>

</section>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<script>
    $(document).ready(function(){

$('#btnSend').click(function(){

    var errores = '';

    // Validado Nombre ==============================
    if( $('#names').val() == '' ){
        errores += '<p>Escriba un nombre</p>';
        $('#names').css("border-bottom-color", "#F14B4B")
    } else{
        $('#names').css("border-bottom-color", "#d1d1d1")
    }

    // Validado Correo ==============================
    if( $('#email').val() == '' ){
        errores += '<p>Ingrese un correo</p>';
        $('#email').css("border-bottom-color", "#F14B4B")
    } else{
        $('#email').css("border-bottom-color", "#d1d1d1")
    }

    // Validado Mensaje ==============================
    if( $('#mensaje').val() == '' ){
        errores += '<p>Escriba un mensaje</p>';
        $('#mensaje').css("border-bottom-color", "#F14B4B")
    } else{
        $('#mensaje').css("border-bottom-color", "#d1d1d1")
    }

    // ENVIANDO MENSAJE ============================
    if( errores == '' == false){
        var mensajeModal = '<div class="modal_wrap">'+
                                '<div class="mensaje_modal">'+
                                    '<h3>Errores encontrados</h3>'+
                                    errores+
                                    '<span id="btnClose">Cerrar</span>'+
                                '</div>'+
                            '</div>'

        $('body').append(mensajeModal);
    }

    // CERRANDO MODAL ==============================
    $('#btnClose').click(function(){
        $('.modal_wrap').remove();
    });
});

});

</script>

<br>
<!-- FOOTER -->
@include('footer.boletin')
<br>
@include('footer.footer')



</body>
</html>