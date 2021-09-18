<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>





    <title>Bootstap 5 Responsive Admin Dashboard</title>

    <style>
        .rounded-full {
            border-radius: 100%;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin 0.25s ease-out;
            -moz-transition: margin 0.25s ease-out;
            -o-transition: margin 0.25s ease-out;
            transition: margin 0.25s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }

        #menu-toggle {
            cursor: pointer;
        }

        .list-group-item {
            border: none;
            padding: 20px 30px;
        }

        .list-group-item-action:focus,
        .list-group-item-action:hover {
            color: rgb(158, 158, 158);
        }

        .list-group-item.active {
            background-color: transparent;
            color: #fff;
            font-weight: bold;
            border: none;
        }

        .list-group a {
            color: #FFFFFF;
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }

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
            color: #ffffff;
            display: block;
            padding: 15px 20px;
            background: transparent;
            font-size: 14px;
        }

        .contenedor-menu .menu li a:hover {
            background: #2E3650;
            color: #000000;
        }


        .contenedor-menu .menu ul {
            display: none;
        }

        .contenedor-menu .menu ul li a {

            background: #262B40;
            color: rgb(255, 255, 255);
            font-size: 13px;
        }

        .contenedor-menu .menu .activado>a {
            background: #262B40;
            color: #fff;
        }
        
    </style>
    @yield('css')
</head>

<body>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color: #262B40; color:#fff;">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase "><i
                    class="fas fa-user-secret me-2"></i>ADMİN PANEL</div>
            <div class="list-group list-group-flush my-3" style="color:#fff">

                <div class="list-group" id="list-tab" role="tablist">
                    <div class="contenedor-menu p-0 m-0">
                        <!-- <a href="" class="btnMenu">Menu <i class="fa fa-bars"></i></a> -->
                        <ul class="menu m-0 p-0">


                            <li class="border-bottom" style="cursor: pointer;"> <a class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                              class="fas fa-project-diagram me-2"></i>ÜRÜNLER</a>
                                    
                                <ul class="m-0 p-0">
                                    <li><a href="{{route('admin.productlist')}}" style="text-decoration: none;">Ürünleri Listele</a></li>
                                    <li><a href="{{route('adminadd')}}" style="text-decoration: none;">Yeni Ürün Ekle</a></li>       
                                    <li><a href="{{route('admin.create.variant')}}" style="text-decoration: none;">Özellik Tanıt</a></li>                                  
                                </ul>
                            </li>
                            <li class="border-bottom"> <a href="{{route('adminadd')}}" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                              class="fas fa-project-diagram me-2"></i>KATEGORİLER</a>
                                    
                                <ul class="m-0 p-0">
                                  <li><a href="#" style="text-decoration: none;">Ürün Kategorileri Listele</a></li>      
                                    <li><a href="{{route('choosevariant')}}" style="text-decoration: none;">Ürün Kategorisine Özellik Tanıt</a></li>
                                    <li><a href="#" style="text-decoration: none;">Ürün Kategorisi Düzenle</a></li>                                                                  
                                </ul>
                            </li>
                            <li class="border-bottom"> <a href="{{route('adminadd')}}" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                              class="fas fa-project-diagram me-2"></i>Ürün Ekle</a>
                                <ul class="m-0 p-0">
                                    <li><a href="#" style="text-decoration: none;">0 Ürünler</a></li>
                                    <li><a href="#" style="text-decoration: none;">2.El Ürünler</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                {{-- <a href="{{route('adminindex')}}" class="list-group-item list-group-item-action bg-transparent
                fw-bold"><i class="fas fa-project-diagram me-2"></i>AKGUN BİLİŞİM</a>

                <a href="{{route('adminadd')}}" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Ürün Ekle</a>

                <a href="{{route('choosevariant')}}"
                    class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Variant Belirleme</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Reports</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Store Mng</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                        class="fas fa-gift me-2"></i>Products</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a> --}}
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            @yield('content')
        </div>


    </div>
    <!-- /#page-content-wrapper -->
    </div>


    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#variants").select2();
        });


        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

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
