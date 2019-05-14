<!DOCTYPE html>
<html class="ls-theme-green">
    <head>
        <title>@yield('titulo')</title>

        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="Insira aqui a descrição da página.">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
        <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
            ]) !!}
            ;
        </script>
        
    </head>
    <body>
        <div class="ls-topbar ">

            <!-- Barra de Notificações -->
            <div class="ls-notification-topbar">

                <!-- Dropdown com detalhes da conta de usuário -->
                <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
                    <a href="#" class="ls-ico-user">
                        <img src="/locawebstyle/assets/images/locastyle/avatar-example.jpg" alt="" />
                        <span class="ls-name">{{Auth::user()->name}}</span>
                        (johnkennedy)
                    </a>

                    <nav class="ls-dropdown-nav ls-user-menu">
                        <ul>
                            <li><a href="#">Meus dados</a></li>
                            <li><a href="#">Sair</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <span class="ls-show-sidebar ls-ico-menu"></span>

            <!-- Nome do produto/marca com sidebar -->
            <h1 class="ls-brand-name">
                <a href="home" class="ls-ico-earth">
                    <small>Uma descrição ou outro nome</small>
                    O nome do Produto
                </a>
            </h1>

            <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
        </div>


        <aside class="ls-sidebar">

            <div class="ls-sidebar-inner">

                <nav class="ls-menu">
                    <ul>
                        <li><a href="/locawebstyle/documentacao/exemplos/painel1/home" class="ls-ico-dashboard" title="Dashboard">Dashboard</a></li>
                        <li>
                            <a href="#" class="ls-ico-cog" title="Configurações">Configurações</a>
                            <ul>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-domain">Domínios da Revenda</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-email">E-mail de Remetente</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-aspect">Aparência</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-answer">Atendimento</a></li>
                                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-api">Chave de acesso para API</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main class="ls-main ">
            <div class="container-fluid">
                <h1 class="ls-title-intro ls-ico-home">Página inicial</h1>
            </div>
        </main>

        <!-- Scripts -->
        <script src="/js/app.js"></script>
    </body>
</html>