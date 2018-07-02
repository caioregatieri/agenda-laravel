<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Bootstrap -->
        <link name="bootstrap" rel="stylesheet" href="{{ asset('css/boot.min.css') }}">
        <!-- MetisMenu -->
        <link name="metismenu" rel="stylesheet" href="{{ asset('css/metisMenu.min.css') }}">
        <!-- SB Admin 2 -->
        <link name="sbadmin" rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
        <!-- font-awesome -->
        <link name="fontawesome" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- Custom -->
        <link name="custom" rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <style>
        @if(Auth::guest()) 
            #page-wrapper {
                margin-left: 250;
            }
        @endif
        </style>
        @yield('head')
    </head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">Agenda</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> {{Auth::user()->name}} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ route('users.edit',['id'=>Auth::user()->id]) }}"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href=""><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            @include('sidebar', [])
        </nav>

        <div id="page-wrapper">
            <br/>
            <br/>
            <br/>
            @yield('content')
        </div>
        <!-- /#page-wrapper -->
    </div>


    <!-- JQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/boot.min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>
    <!--Jquery Mask -->
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    <!-- Mascaras -->
    <script>
        $(".input-phone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
        $(".input-hour")
        .mask("99:99")
        .focusout(function (event) {  
            var target, time, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            time = target.value.split(":");
            element = $(target);  
            if(time[0] == "" ||  time[1] == "") {
                alert("Horário inválido");  
                element.val("");  
            }
            if(time[0] > 23 ||  time[1] > 59) {
                alert("Horário inválido");  
                element.val("");  
            }
        });
    </script>
    @yield('scripts')
</body>

</html>
