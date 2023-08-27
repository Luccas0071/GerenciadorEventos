<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
 
        <!-- CSS Bootstrep-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <!-- CSS Aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        {{-- <link rel="stylesheet" href="/css/app.css"> --}}

        <!-- JavaScript Aplicação-->
        <script src="/js/scripts.js"></script>
        <!-- JavaScript Aplicação-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    </head>
    <body>

        {{-- Menu Principal --}}
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo2.png" alt="Logo">
                    </a>

                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link">Eventos</a></li>
                        <li class="nav-item"><a href="/events/create" class="nav-link">Criar Eventos</a></li>
                        @auth
                            <li class="nav-item"><a href="/dashboard" class="nav-link">Meus Eventos</a></li>

                            <li class="nav-item">
                                <form action="/logout" method="post">
                                    @csrf
                                    <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                                        Sair
                                    </a>
                                </form>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item"><a href="/login" class="nav-link">Entrar</a></li>
                            <li class="nav-item"><a href="/register" class="nav-link">Cadastrar</a></li>
                        @endguest
                    </ul>

                </div>
            </nav>
        </header>

        <main>
            <div class="container-fluid">
                <div class="row">
                    {{-- Se existir mensagem do controler mostrar aqui --}}
                    @if(session('msg'))
                        <p class="msg"> {{ session('msg')}} </p>
                    @endif
                    
                    {{-- Essa tag é onde sera substituido o conteudo do sistema --}}
                    @yield('content')
                </div>
            </div>
        </main>
        
        
        <footer>
            <p>HDC Events &copy; 2023</p>
        </footer>

        <!-- Script Icons -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
