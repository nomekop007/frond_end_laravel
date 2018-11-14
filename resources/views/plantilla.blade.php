<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
                <link href="{{ asset('css/miEstilo.css')}}" rel="stylesheet" type="text/css">
                    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" rel="stylesheet">
                        <link href="https://fonts.googleapis.com/css?family=Italianno|Pinyon+Script|Sacramento" rel="stylesheet">
                            <title>
                                Evaluacion
                            </title>
                        </link>
                    </link>
                </link>
            </link>
        </meta>
    </head>
    <body>
        <!-- INICIO navbar -->
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top trasp blanco">
                    <a class="navbar-brand naranjo titulo" href="#">
                        <span class="left " id="home">
                            ELIXIR
                        </span>
                    </a>
                    <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler " data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                        <span class="navbar-toggler-icon">
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto right">
                            <li class="nav-item active">
                                <a class="nav-link naranjo" href="#">
                                    <span>
                                        HOME
                                    </span>
                                    <span class="sr-only">
                                        (current)
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">
                                    <span>
                                        ABOUT
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#menu">
                                    <span>
                                        MENU
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contacto">
                                    <span>
                                        CONTACT
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- FIN navbar -->
        @yield('contenido')
        <script src="{{ asset('js/jquery-3.3.1.slim.min.js')}}">
        </script>
        <script src="{{ asset('js/popper.min.js')}}">
        </script>
        <script src="{{ asset('js/bootstrap.min.js')}}">
        </script>
    </body>
</html>