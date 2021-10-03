<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/xzoom/dist/xzoom.css" media="all" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Font Awesome 4-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        
    <script src="https://kit.fontawesome.com/771607a42e.js" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- Option 1: BOOTSRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>Home</title>

    @yield('css')
    <style>
     @media (min-width: 1200px) {
      .container {
      max-width: 1500px;
         }
    }
    body {
        background-color: rgb(255, 255, 255);
    }

        .nav-link {
        color: #FFFFFF;
    }

    .nav-pills .nav-link.active {
        background-color: transparent;
    }
    /**************************/
    .btnMenu {
        display: none;
        padding: 20px;
        display: block;
        background: #317696;
        color: #fff;
    }

    .contenedor-menu {
        width: 100%;
        display: inline-block;
        line-height: 18px;
    }

    .contenedor-menu .menu {
        width: 100%;
    }

    .contenedor-menu ul {
        list-style: none;
    }

    .contenedor-menu .menu li a {
        color: #000000;
        display: block;
        padding: 15px 20px;
        background: #ffffff;
        font-size: 14px;
    }

    .contenedor-menu .menu li a:hover {
        background: #f3f3f3;
        color: #000000;
    }


    .contenedor-menu .menu ul {
        display: none;
    }

    .contenedor-menu .menu ul li a {

        background: #e9e9e9;
        color: rgb(0, 0, 0);
        font-size: 13px;
    }

    .contenedor-menu .menu .activado>a {
        background: #a1a1a1;
        color: #fff;
    }
    /***********************************/

    </style>
   

</head>

<body>

    @include('fronts.components.contactbar')

    @include('fronts.components.searchbar')

    @include('fronts.components.navbar')


 <div class="container mt-5">
     <div class="row">
       
            @include('fronts.components.productmenu')
        
         <div class="col-md-8">
            @yield('content')
         </div>
         
         <div class="col-md-2">
            <img class="w-100" src="{{asset('/images/indexpic.png')}}">
         </div>
     </div>
 </div>
    

    @include('fronts.components.footer')


    @yield('js')
    <script>
            $(document).ready(function () {
        $('.menu li:has(ul)').click(function (e) {
            e.preventDefault();

            if ($(this).hasClass('activado')) {
                $(this).removeClass('activado');
                $(this).children('ul').slideUp();
            } else {
                $('.menu li ul').slideUp();
                $('.menu li').removeClass('activado');
                $(this).addClass('activado');
                $(this).children('ul').slideDown();
            }

            $('.menu li ul li a').click(function () {
                window.location.href = $(this).attr('href');
            })
        });
    });

    </script>
</body>

</html>
