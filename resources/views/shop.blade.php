<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <title>Informes o estudios | Analítica Solidaria</title>

    <style>
          @font-face {
        font-family: 'GlacialIndifference-Bold';
        src: url('../public/font/GlacialIndifference-Bold.otf') format('opentype');
        }
        @font-face {
        font-family: 'GlacialIndifference-Regular';
        src: url('../../public/font/GlacialIndifference-Regular.otf') format('opentype');
        }
        .col-lg-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }
        #carbody{
            text-align:center;
            font-family: system-ui;
            font-size:25px;
        }

         /* informe tutulo----------------------- */
       #sp{
        font-size: 43px;
        color: #2175aa;
       }
       
       #ainfe{
            color: #2175aa; 
            text-decoration: none;
            margin-bottom: 5px;
            font-size: 43px;
            width: 1200px;
            text-align: center;
            margin-left: 14%;
            font-family: 'GlacialIndifference-Bold', sans-serif;
            margin-bottom: 2%;
        }
        /* ´................... */
        #mgb{
            margin-bottom:2%;
        }
        /* ------------------------- */
        /* pprecio clase por que se esta utilizando id para operaciones */
        #pprecio{
            font-size: 24px;
            font-family: 'GlacialIndifference-Bold', sans-serif;
            color: #012060;
        }
        /*  */
        /* boton agregar al carrito --------------- */
        #btagg{
            width: 480px;
            margin-left:15px;
            font-size:20px;
            font-family: 'GlacialIndifference-Bold', sans-serif;
            background-color: #2175aa;
        }
        /* -------------------------------------- */
        /* diseño de las cartas top principal */
        #card {
        margin-left: 25%;
        margin-bottom: 25px; 
        border-top-left-radius: 32px; 
        border-top-right-radius: 30px; 
        border-bottom-left-radius: 30px; 
        border-bottom-right-radius: 30px; 
        width: 375px; 
        margin-right: 30px;  
       }
       /*  */
       /* titulos de la carta  */
       .card-title{
            font-family: 'GlacialIndifference-Bold', sans-serif;
            font-size: 16px;
            text-align: center;
            color: #2175aa;
        }
        /*  */
        /* descripcion de las cartas */
        .card-text{
            font-family: 'GlacialIndifference-Bold', sans-serif;
            font-size: 16px;
            text-align: center;
            color: black;
        }
        /* leer informe 2 -------------- */
        #but2i{
            background-color:red;
            border:red;
            font-family: 'GlacialIndifference-Bold', sans-serif;
        }
        /* leer informe 1 */
        #butleei{
            background-color:rgb(114, 255, 32); 
            border:rgb(114, 255, 32);
            font-family: 'GlacialIndifference-Bold', sans-serif;
        }
        /*  */

    </style>
</head>

<body>
    @include('partials.navbar')
    <div id="mgb"></div>

    <div class="container">
    <div class="row justify-content-center">
                <div class="row">
                        <a class='bx bxs-file' id="ainfe" href="{{ route('shop') }}">
                            <span id="sp"> Informes o Estudios</span>
                        </a>
                </div>
                <hr>
                <div class="row">
                    <!--  -->
                    <div class="container">

                        
                            <div class="row">
                                @foreach ($newProductos as $newProduct)
                                    @if ($newProduct['id'] == 1)
                                        <div class="col-lg-4">
                                            <div class="card special-product-card" id="card">
                                                <img src="{{ asset($newProduct['image_path']) }}" alt="{{ $newProduct['name'] }}" class="card-img-top mx-auto" id="imgcards" alt="{{ $newProduct['image_path'] }}">
                                                <div class="card-body" id="card-body">
                                                    <h6 class="card-title">
                                                        {{ $newProduct['name'] }}
                                                    </h6>
                                                    @if (Auth::check())
                                                        <p class="card-precio" id="pprecio">
                                                            <small class="text-muted" id="pprecio"
                                                                >
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
                                                    <form action="{{ route('cart.store') }}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" value="{{ $newProduct['id'] }}"
                                                            id="id" name="id">
                                                        <input type="hidden" value="{{ $newProduct['name'] }}"
                                                            id="name" name="name">
                                                        @if (Auth::check())
                                                            <input type="hidden" value="{{ $newProduct['price'] }}"
                                                                id="price" name="price" >
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
                                                                    <button class="btn btn-secondary btn-sm" id="btagg" class="tooltip-test" title="add to cart">
                                                                        <i class="fa fa-shopping-cart"></i> Agregar al carrito
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
                                    <!-- ESTE ES EL DEL USUARIO ------------------------------T--------------------- -->
                                        <div class="col-lg-4">
                                            <div class="card mb-3" id="card">
                                                <img src="{{ asset($newProduct['image_path']) }}" alt="{{ $newProduct['name'] }}" id="imgcards">
                                                    <div class="card-body" id="carbody">
                                                        <h5 class="card-title">
                                                            {{ $newProduct['name'] }}
                                                        </h5>
                                                        <div class="card-text-container">
                                                            <p class="card-text">
                                                                {{ $newProduct['contenido'] }}</p>
                                                            @if (Auth::check())
                                                                <p class="card-precio" id="pprecio">
                                                                    <small class="text-muted" id="pprecio"
                                                                        >
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
                                                        <div class="product-content" id="butleei">
                                                            <a href="{{ route('informe.mostrar', ['id' => $newProduct['id']]) }}"
                                                                class="btn btn-primary">Leer informe</a>
                                                        </div>
                                                    @else
                                                        <div class="">
                                                            <button type="button" id="but2i"
                                                                class="btn btn-primary" data-toggle="modal"
                                                                data-target="#productModal{{ $newProduct['id'] }}">
                                                                Leer informe
                                                            </button>
                                                        </div>
                                                    @endif

                                                    
                                                    <br>
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
                                                                        <button class="btn btn-secondary btn-sm" id="btagg"
                                                                            class="tooltip-test" title="add to cart">
                                                                            <i class="fa fa-shopping-cart"></i> agregar
                                                                            al carrito
                                                                        </button>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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

    <br>
    @include('footer.footer')
</body>

</html>
