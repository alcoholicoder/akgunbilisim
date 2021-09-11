@extends('layouts.standartlayout')

@section('css')
<style>

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

</style>
@endsection


@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-2 m-0 p-0" style="background-color: #FFFFFF; ">
           
            <div class="list-group" id="list-tab" role="tablist">
                <div class="contenedor-menu p-0 m-0">
                    <!-- <a href="" class="btnMenu">Menu <i class="fa fa-bars"></i></a> -->
                    <ul class="menu m-0 p-0">
                        @foreach (getProductNames() as $product)

                        <li class="border-bottom"><a href="#" style="text-decoration: none;"><i class="bi bi-laptop"></i>
                                {{$product->name}}</a>
                            <ul class="m-0 p-0">
                                <li><a href="#" style="text-decoration: none;">0 Ürünler</a></li>
                                <li><a href="#" style="text-decoration: none;">2.El Ürünler</a></li>
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-md-8">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('/images/slider2.jpg')}}" class="d-block w-100 ">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="row justify-content-around mt-5 ">
                <div class="col-md-3  d-flex flex-column "
                    style="height: 150px; background-color:rgb(247, 247, 247) ">
                    <div class="row d-flex align-items-center">

                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <img
                                src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-money-banking-and-finance-kiranshastry-lineal-color-kiranshastry-22.png" />
                        </div>
                        <div class="col-md-8 m-0 p-0">
                            <h5 class="m-0 p-0r">PARANIZ <br>GÜVENDE</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-2" style="font-size: 12px;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Soluta iusto sunt Soluta iusto sunt
                        </div>
                    </div>
                </div>
                <div class="col-md-3  d-flex flex-column "
                    style="height: 150px; background-color:rgb(247, 247, 247) ">
                    <div class="row d-flex align-items-center">

                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <img
                                src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-money-banking-and-finance-kiranshastry-lineal-color-kiranshastry-22.png" />
                        </div>
                        <div class="col-md-8 m-0 p-0">
                            <h5 class="m-0 p-0r">PARANIZ <br>GÜVENDE</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-2" style="font-size: 12px;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Soluta iusto sunt Soluta iusto sunt
                        </div>
                    </div>
                </div>
                <div class="col-md-3  d-flex flex-column "
                    style="height: 150px; background-color:rgb(247, 247, 247) ">
                    <div class="row d-flex align-items-center">

                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <img
                                src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-money-banking-and-finance-kiranshastry-lineal-color-kiranshastry-22.png" />
                        </div>
                        <div class="col-md-8 m-0 p-0">
                            <h5 class="m-0 p-0r">PARANIZ <br>GÜVENDE</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-2" style="font-size: 12px;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Soluta iusto sunt Soluta iusto sunt
                        </div>
                    </div>
                </div>


            </div>
            <div class="row justify-content-around mt-5 ">
                <div class="col-md-3  d-flex flex-column "
                style="height: 150px; background-color:rgb(247, 247, 247) ">
                <div class="row d-flex align-items-center">

                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <img
                            src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-money-banking-and-finance-kiranshastry-lineal-color-kiranshastry-22.png" />
                    </div>
                    <div class="col-md-8 m-0 p-0">
                        <h5 class="m-0 p-0r">PARANIZ <br>GÜVENDE</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-2" style="font-size: 12px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Soluta iusto sunt Soluta iusto sunt
                    </div>
                </div>
            </div>
            <div class="col-md-3  d-flex flex-column "
            style="height: 150px; background-color:rgb(247, 247, 247) ">
            <div class="row d-flex align-items-center">

                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img
                        src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-money-banking-and-finance-kiranshastry-lineal-color-kiranshastry-22.png" />
                </div>
                <div class="col-md-8 m-0 p-0">
                    <h5 class="m-0 p-0r">PARANIZ <br>GÜVENDE</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-2" style="font-size: 12px;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Soluta iusto sunt Soluta iusto sunt
                </div>
            </div>
        </div>
        <div class="col-md-3  d-flex flex-column "
        style="height: 150px; background-color:rgb(247, 247, 247) ">
        <div class="row d-flex align-items-center">

            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <img
                    src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/000000/external-money-banking-and-finance-kiranshastry-lineal-color-kiranshastry-22.png" />
            </div>
            <div class="col-md-8 m-0 p-0">
                <h5 class="m-0 p-0r">PARANIZ <br>GÜVENDE</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-2" style="font-size: 12px;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Soluta iusto sunt Soluta iusto sunt
            </div>
        </div>
    </div>
            </div>

        </div>
        <div class="col-md-2">
            <img class="w-100" src="{{asset('/images/indexpic.png')}}">
        </div>
    </div>
</div>

    
@endsection


@section('js')
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
@endsection