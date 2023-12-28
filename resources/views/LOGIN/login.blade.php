<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .form-container {
            width: 50%;
            max-width: 700px;
            text-align: center;
            margin-left: 30px;
            font-family: Arial, sans-serif;

        }
        .image-container {
            width: 40%;
        }
    </style>
</head>
<body>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
    <div class="container">
        <div class="image-container">
            <img src="{{ asset('img/image31.png') }}" alt="Imagen" class="img-fluid" >
        </div>
        <div class="form-container">
            <div class="text-center">
                <img src="{{ asset('img/logoblanco.jpg') }}" alt="Logo" width="300">
            </div>
            <br><br>
            <form method="POST" action="{{ route('inicia-sesion') }}">
                @csrf
                <div class="mb-3">
                    <label for="emailInput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="disable">
                </div>
                <br>
                <div class="mb-3">
                    <label for="passwordInput" class="form-label">Password</label>
                    <input type="password" class="form-control" id="passwordInput" name="password" required>
                </div>
                <br><br>
                <div class="">
                    <p>
                        ¿No tienes cuenta? <a style="color: #012060;" href="{{ route('registro') }}">Registrate</a>
                    </p>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" style="font-family: Arial, sans-serif; background-color: #012060; border: #012060; border-radius:20px">INGRESA</button>
                <!-- Agrega esta sección para el inicio de sesión con Google -->
                {{-- <div class="text-center">
                    <a href="{{ route('google.redirect') }}" class="btn btn-google">
                        <i class="fab fa-google"></i> Iniciar sesión con Google
                    </a>
                </div> --}}

            </form>
        </div>
    </div>
</body>
</html>
