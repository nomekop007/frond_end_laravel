@extends('plantilla')

@section('contenido')
<div class="row">
    <div class="col-12">
        <!-- INICIO Carrusel -->
        <div class="carousel slide" data-ride="carousel" id="carouselExampleControls1">
            <div class="carousel-inner mx-auto">
                <div class="carousel-item active img mx-auto">
                    <div class="carousel-caption d-none d-md-block dorado">
                        <h1>
                            ELIXIR EXCLUSIVELY FOOD 1
                        </h1>
                        <br>
                            <span>
                                ----(<>)----
                            </span>
                            <br>
                                <br>
                                    <br>
                                        <small>
                                            the chef creates divine combinations
                                        </small>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </div>
                    <img class="img1">
                    </img>
                </div>
                <div class="carousel-item img mx-auto">
                    <div class="carousel-caption d-none d-md-block dorado">
                        <h1>
                            ELIXIR EXCLUSIVELY FOOD 2
                        </h1>
                        <br>
                            <span>
                                ----(<>)----
                            </span>
                            <br>
                                <br>
                                    <br>
                                        <small>
                                            the chef creates divine combinations
                                        </small>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </div>
                    <img class="img2 img">
                    </img>
                </div>
                <div class="carousel-item img mx-auto">
                    <div class="carousel-caption d-none d-md-block dorado">
                        <h1>
                            ELIXIR EXCLUSIVELY FOOD 3
                        </h1>
                        <br>
                            <span>
                                ----(<>)----
                            </span>
                            <br>
                                <br>
                                    <br>
                                        <small>
                                            the chef creates divine combinations
                                        </small>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </div>
                    <img class="img3 img">
                    </img>
                </div>
                <div class="carousel-item img mx-auto">
                    <div class="carousel-caption d-none d-md-block dorado">
                        <h1>
                            ELIXIR EXCLUSIVELY FOOD 4
                        </h1>
                        <br>
                            <span>
                                ----(<>)----
                            </span>
                            <br>
                                <br>
                                    <br>
                                        <small>
                                            the chef creates divine combinations
                                        </small>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </div>
                    <img class="img4 img">
                    </img>
                </div>
                <div class="carousel-item img mx-auto">
                    <div class="carousel-caption d-none d-md-block dorado">
                        <h1>
                            ELIXIR EXCLUSIVELY FOOD 5
                        </h1>
                        <br>
                            <span>
                                ----(<>)----
                            </span>
                            <br>
                                <br>
                                    <br>
                                        <small>
                                            the chef creates divine combinations
                                        </small>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </div>
                    <img class="img5 img">
                    </img>
                </div>
            </div>
            <a class="carousel-control-prev" data-slide="prev" href="#carouselExampleControls1" role="button">
                <span aria-hidden="true" class="carousel-control-prev-icon">
                </span>
                <span class="sr-only">
                    Previous
                </span>
            </a>
            <a class="carousel-control-next" data-slide="next" href="#carouselExampleControls1" role="button">
                <span aria-hidden="true" class="carousel-control-next-icon">
                </span>
                <span class="sr-only">
                    Next
                </span>
            </a>
        </div>
        <!--fin carrusel -->
        <!--inicio about -->
        <div class="row" id="about">
            <div class="col-md-12 text-center">
                <h2 class="abajo dora2">
                    <small>
                        ====
                    </small>
                    ABOUT US
                    <small>
                        ====
                    </small>
                </h2>
            </div>
            <div class="col-3">
            </div>
            <div class="col-6 text-center">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem unde quia eos fugit nemo impedit maiores iste. Illum deserunt totam dolor.
                </p>
            </div>
            <div class="col-3">
            </div>
            <div class="col-md-6 padding dorado">
                <h2 class="cursi text-center">
                    <span>
                        The History
                    </span>
                </h2>
                <p>
                    The
                    <span>
                        ipsum dolor sit amet
                    </span>
                    , consectetur adipisicing elit. Doloribus voluptates temporibus deleniti excepturi vitae doloremque ipsam beatae alias aliquam ad error pariatur sapiente fugit optio iure fugiat id, saepe non. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, dolor, iste. Dolorum totam, deserunt quam omnis exercitationem, quis a eos quod dolorem officiis deleniti fugiat suscipit magni corporis ad velit.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus facere veritatis perspiciatis, est dolor molestias exercitationem eius quos nostrum iusto officia atque impedit maxime ex repudiandae aperiam libero! Eius, deserunt?Lorem ipsum dolor sit amet,
                    <span>
                        consectetur
                    </span>
                    elit.
                </p>
            </div>
            <div class="col-md-6 m-img text-center d-none d-md-block ">
                <img class="mx-auto pad-abajo" src="{{ asset('img/plato.png') }}">
                </img>
            </div>
            <!--mini carruscel -->
            <div class="col-md-6 mx-auto">
                <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators2">
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators2">
                        </li>
                        <li data-slide-to="1" data-target="#carouselExampleIndicators2">
                        </li>
                        <li data-slide-to="2" data-target="#carouselExampleIndicators2">
                        </li>
                    </ol>
                    <div class="carousel-inner autoZoom">
                        <div class="carousel-item active ">
                            <img alt="First slide" class="d-block w-100" src="{{ asset('img/img1.jpg') }}">
                            </img>
                        </div>
                        <div class="carousel-item ">
                            <img alt="Second slide" class="d-block w-100" src="{{ asset('img/img2.jpg') }}">
                            </img>
                        </div>
                        <div class="carousel-item">
                            <img alt="Third slide" class="d-block w-100" src="{{ asset('img/img3.jpg') }}">
                            </img>
                        </div>
                    </div>
                    <a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators2" role="button">
                        <span aria-hidden="true" class="carousel-control-prev-icon">
                        </span>
                        <span class="sr-only">
                            Previous
                        </span>
                    </a>
                    <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators2" role="button">
                        <span aria-hidden="true" class="carousel-control-next-icon">
                        </span>
                        <span class="sr-only">
                            Next
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-center dorado">
                <br>
                    <br>
                        <p>
                            Lorem ipsum
                            <span>
                                dolor sit amet
                            </span>
                            , consectetur adipisicing elit. Asperiores iure ducimus id nulla atque reprehenderit, et, magnam, quae laudantium non, eos fugit beatae reiciendis dolore. Illum unde eos nemo corrupti.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis repudiandae corrupti, fugit praesentium. Eveniet maxime exercitationem cumque, quo nulla ipsam veniam, maiores inventore dicta tempore laborum
                            <span>
                                architecto
                            </span>
                            unde totam quaerat.
                        </p>
                    </br>
                </br>
            </div>
        </div>
        <!--fin about -->
        <!--separacion de segunda parte -->
        <div class="abajo">
            <!-- inicio Opening hours -->
            <div class="menu" id="menu">
                <div class="row">
                    <div class="col-12 text-center dorado">
                        <h1 class="blanco2 abajo dora2 cursiva ">
                            <small>
                                ====
                            </small>
                            OPENING HOURS
                            <small>
                                ====
                            </small>
                        </h1>
                        <small class="dorado2 cursi2">
                            Call for Reservations
                        </small>
                        <br>
                            <br>
                            </br>
                        </br>
                    </div>
                    <div class="col-md-6 text-center ">
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6 tam2">
                                <h3 class="dorado2 cursi2 ">
                                    sunday to
                                </h3>
                                <h3 class="dorado2 cursi2 ">
                                    tusday
                                </h3>
                                <h4 class="blanco2">
                                    09:00
                                </h4>
                                <h4 class="blanco2">
                                    24:00
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center tam2 ">
                        <div class="row">
                            <div class="col-md-6 tam2">
                                <h3 class="dorado2 cursi2">
                                    friday and
                                </h3>
                                <h3 class="dorado2 cursi2">
                                    saturday
                                </h3>
                                <h4 class="blanco2">
                                    09:00
                                </h4>
                                <h4 class="blanco2">
                                    24:00
                                </h4>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center blanco2 ">
                        <p class="pad-abajo">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
            <!--fin Opening hours  -->
            <!-- inicio ventana menu  -->
            <div class="verduras">
                <div class="row">
                    <div class="col-1">
                    </div>
                    <div class="col-10">
                        <div class="row ">
                            <div class="col-12 text-center sello d-none d-md-block ">
                                <img src="{{ asset('img/sello.png') }}">
                                </img>
                            </div>
                            <div class="col-lg-4 col-md-6 ">
                                <h4 class="d-oscuro abajo text-center">
                                    PRIME STREAKS
                                </h4>
                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    <div class="col-10 dorado">
                                        <h6 class="negro">
                                            APPLE TURNVER
                                        </h6>
                                        <small>
                                            Lorem ipsum dolor sit amet, consectetur       .
                                            <span>
                                                $15.56
                                            </span>
                                        </small>
                                        <h6 class="negro">
                                            SORBET WITH
                                        </h6>
                                        <small>
                                            Lorem ipsum dolor sit amet, consectetur       .
                                            <span>
                                                $15.56
                                            </span>
                                        </small>
                                        <h6 class="negro">
                                            CHESE CAKE
                                        </h6>
                                        <small>
                                            Lorem ipsum dolor sit amet, consectetur       .
                                            <span>
                                                $15.56
                                            </span>
                                        </small>
                                        <h6 class="negro">
                                            CREME BRUNE
                                        </h6>
                                        <small>
                                            Lorem ipsum dolor sit amet, consectetur       .
                                            <span>
                                                $15.56
                                            </span>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 ">
                                <h4 class="d-oscuro abajo text-center">
                                    DRINK & WINES
                                </h4>
                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    <div class="col-10 dorado ">
                                        <h6 class="negro">
                                            CABERENET
                                        </h6>
                                        <small>
                                            Lorem ipsum dolor sit amet, consectetur       .
                                            <span>
                                                $15.56
                                            </span>
                                        </small>
                                        <h6 class="negro">
                                            LEON V DE ARMENIA
                                        </h6>
                                        <small>
                                            Lorem ipsum dolor sit amet, consectetur       .
                                            <span>
                                                $15.56
                                            </span>
                                        </small>
                                        <h6 class="negro">
                                            EDEN CHARDONNAY
                                        </h6>
                                        <small>
                                            Lorem ipsum dolor sit amet, consectetur       .
                                            <span>
                                                $15.56
                                            </span>
                                        </small>
                                        <h6 class="negro">
                                            RAIMT ABADIA
                                        </h6>
                                        <small>
                                            Lorem ipsum dolor sit amet, consectetur       .
                                            <span>
                                                $15.56
                                            </span>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 ">
                                <h4 class="d-oscuro abajo text-center">
                                    DESEERTS
                                </h4>
                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    <div class="col-10 dorado">
                                        <h6 class="negro">
                                            FILET IN FILET
                                        </h6>
                                        <small>
                                            Lorem ipsum dolor sit amet, consectetur       .
                                            <span>
                                                $15.56
                                            </span>
                                        </small>
                                        <h6 class="negro">
                                            DEMONICO
                                        </h6>
                                        <small>
                                            Lorem ipsum dolor sit amet, consectetur       .
                                            <span>
                                                $15.56
                                            </span>
                                        </small>
                                        <h6 class="negro">
                                            PORTEHOUSE
                                        </h6>
                                        <small>
                                            Lorem ipsum dolor sit amet, consectetur       .
                                            <span>
                                                $15.56
                                            </span>
                                        </small>
                                        <h6 class="negro">
                                            PINTE IN FLET
                                        </h6>
                                        <small>
                                            Lorem ipsum dolor sit amet, consectetur       .
                                            <span>
                                                $15.56
                                            </span>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center abajo">
                                <button class="btn btn-outline-warning destello" type="button">
                                    VIEW COMPLETE MENU
                                </button>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                    </div>
                </div>
            </div>
            <!-- fin ventana menu  -->
            <!--  inicio ventana testimonos -->
            <div class="carousel slide fondo2" data-ride="carousel" id="carouselExampleIndicators3">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators3">
                    </li>
                    <li data-slide-to="1" data-target="#carouselExampleIndicators3">
                    </li>
                    <li data-slide-to="2" data-target="#carouselExampleIndicators3">
                    </li>
                </ol>
                <div class="carousel-inner tam">
                    <div class="carousel-item active ">
                        <img alt="First slide" class="d-block w-100" src="{{ asset('/img/fondo.jpg') }}">
                            <div class="carousel-caption">
                                <div class="row arriba">
                                    <h5 class="d-oscuro">
                                        Testimonials
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur necessitatibus autem rem laudantium, harum, corporis, provident, nesciunt ad id dolore impedit ratione. Veniam qui mollitia totam.
                                    </p>
                                    <small class="d-oscuro">
                                        - alexander Smith
                                    </small>
                                </div>
                            </div>
                        </img>
                    </div>
                    <div class="carousel-item ">
                        <img alt="Second slide" class="d-block w-100" src="{{ asset('/img/fondo.jpg') }}">
                            <div class="carousel-caption">
                                <div class="row arriba">
                                    <h5 class="d-oscuro">
                                        Testimonials 2
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur necessitatibus autem rem laudantium, harum, corporis, provident, nesciunt ad id dolore impedit ratione. Veniam qui.
                                    </p>
                                    <small class="d-oscuro">
                                        - alexander Smith
                                    </small>
                                </div>
                            </div>
                        </img>
                    </div>
                    <div class="carousel-item ">
                        <img alt="Third slide" class="d-block w-100" src="{{ asset('/img/fondo.jpg') }}">
                            <div class="carousel-caption">
                                <div class="row arriba">
                                    <h5 class="d-oscuro">
                                        Testimonials 3
                                    </h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur necessitatibus autem rem laudantium, harum, corporis, provident.
                                    </p>
                                    <small class="d-oscuro">
                                        - alexander Smith
                                    </small>
                                </div>
                            </div>
                        </img>
                    </div>
                </div>
            </div>
            <!--fin ventana testimonios-->
        </div>
        <!--fin segunda parte-->
        <!--separacion de tercera parte-->
        <!--inicio Contacto formulario -->
        <div class="fondoNegro " id="contacto">
            <form action="{{ route('cont') }}" method="POST">
                @csrf
                <!--toker: medida de seguridad  -->
                <div class="row">
                    <div class="col-12 text-center abajo">
                        <h4 class="blanco2 dora2">
                            <small>
                                ====
                            </small>
                            CONTACT
                            <small>
                                ====
                            </small>
                        </h4>
                        <br>
                            <small class="blanco2">
                                W325 STATE ROOD 123 MONDOVI, WI (WISCANSI) 98746-54321
                            </small>
                        </br>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <!--input pequeños -->
                    <div class="col-md-5">
                        <br>
                            <input class=" form-control plomo" name="nombre" placeholder="Name" type="text">
                                <br>
                                    <input class=" form-control plomo" name="email" placeholder="Email" type="text">
                                        <br>
                                            <input class=" form-control plomo" name="sujeto" placeholder="Subject" type="text">
                                            </input>
                                        </br>
                                    </input>
                                </br>
                            </input>
                        </br>
                    </div>
                    <!-- input grande -->
                    <div class="col-md-5">
                        <br>
                            <textarea class="form-control plomo" id="exampleFormControlTextarea1" name="msg" placeholder="Messege" rows="6">
                            </textarea>
                        </br>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-12 text-center">
                        <br>
                            <button class="btn btn-warning blanco2 color-bt tam-bt" type="Submit">
                                Submit
                            </button>
                            <br>
                                <br>
                                    <br>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </div>
                </div>
            </form>
        </div>
        <!--mapa-->
        <div class="mapa">
        </div>
        <!--iconos-->
        <div class="fondoNegro2">
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-4 row ">
                    <div class="col-2">
                    </div>
                    <div class="col-8">
                        <br>
                            <br>
                                <ul class="rrss tam">
                                    <li>
                                        <i class="fab fa-twitter color">
                                        </i>
                                    </li>
                                    <li>
                                        <i class="fab fa-facebook color">
                                        </i>
                                    </li>
                                    <li>
                                        <i class="fab fa-google-plus color">
                                        </i>
                                    </li>
                                    <li>
                                        <i class="fab fa-tumblr-square color">
                                        </i>
                                    </li>
                                </ul>
                                <br>
                                    <br>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </div>
                    <div class="col-2">
                    </div>
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
    </div>
</div>
@stop
