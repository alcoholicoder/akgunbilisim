<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- Option 1: BOOTSRAP ICONS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>Home</title>
    <style>
        @media (min-width: 1200px) {
            .container{
                max-width: 1500px;
            }
        }
        body {
            background-color: rgb(223, 223, 223);
        }

        .nav-link {
            color: #FFFFFF;
        }

        .nav-pills .nav-link.active {
           background-color:transparent;
        }

    </style>

</head>

<body>
    <div class="container-fluid" style="background-color: #317696; ">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="contact-infos text-white pt-1 pb-1" style="font-size: 13px; ">
                        <span style="font-weight: bold; ">0532 527 96 15</span>
                        <div class="">deneme@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" style="background-color: #FFFFFF">
        <div class="row">
            <div class="col-12 pt-4 pb-4 d-flex">
                <div class="container">

                    <div class="row">
                        <div class="col-md-3 d-flex align-items-center" style="letter-spacing: 5px;">
                            AKGUNBILISIM
                        </div>
                        <div class="col-md-7">
                            <input class="m-0 p-0" type="text" placeholder="Ürün Arayın..."
                                style="width: 80%; height:42px; border:none ;border-bottom:1px solid rgb(191, 191, 191); outline:none;">
                            <input class="bg bg-warning ms-1" type="submit" value="ARA"
                                style="width: 80px; border:none; height:100%; margin-left:-5px; padding:0;">
                        </div>

                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: rgb(144, 123, 155)">
        <div class="container ">
            <div class="row p-0 m-0">
                <div class="col-md-12 m-0 p-0">

                    <ul class="nav nav-pills pb-3 pt-3 " id="pills-tab" role="tablist" > 
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">ANSAYFA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">HAKKIMIZDA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">LAPTOP & PC</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">İKİNCİ EL LAPTOPLAR</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">AĞ ÜRÜNLERİ</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">MONİTÖRLER</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab"></div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab"></div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">


            <div class="col-md-2" style="background-color: #FFFFFF;">
                <ul class="m-0 p-0" style="list-style: none; ">
                    <li class="pt-2 pb-2 p-0" style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme</li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme</li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme</li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme</li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme</li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme</li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>

                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>

                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
            

               
                </ul>
                
            </div>
            <div class="col-md-8">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">

                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('/images/slider2.jpg')}}" class="d-block w-100 ">
                      </div>
               
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                  <div class="row justify-content-around mt-5">
                      <div class="col-md-3 bg-warning" style="height: 120px; ">
                          asd
                      </div>
                      <div class="col-md-3 bg-danger" style="height: 120px; ">
                          asd
                    </div>
                    <div class="col-md-3 bg-success" style="height: 120px; ">
                        asd
                    </div>
                    
                  </div>
            </div>
            <div class="col-md-2">
                <ul class="m-0 p-0" style="list-style: none; ">
                    <li class="pt-2 pb-2 p-0" style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme</li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme</li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme</li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme</li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme</li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme</li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>

                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>

                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>
                    <li class="pt-2 pb-2 " style="border-bottom:1px solid grey;"> <i class="bi bi-4x bi-laptop"></i> Deneme </li>

                </ul>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
           <div class="col-md-12">
               ad
           </div>
        </div>
    </div>


</body>

</html>
