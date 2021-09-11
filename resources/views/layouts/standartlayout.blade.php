<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Font Awesome 4-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Sidebar Accordion CSS -->
    <link rel="stylesheet" href="css/sidebar-accordion.css">



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
    </style>
   

</head>

<body>

    @include('fronts.components.contactbar')

    @include('fronts.components.searchbar')

    @include('fronts.components.navbar')




        @yield('content')





    @include('fronts.components.footer')


    @yield('js')
</body>

</html>
