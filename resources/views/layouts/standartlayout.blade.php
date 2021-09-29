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

    
.footer-main{
    height: 550px;
    width: 100%;
    background-color:#23313F;
    display: flex;
    justify-content: center;

     
}
.footer-container{
    max-width:2000px;
    width: 100%;
   
}

.footer-top{
    height: 550px;
    width: 100%;
}
.footer-bottom{
    height: 100px;
    width: 100%;
    background-color: #2C3E4F;
    display: flex;
    justify-content: center;
    align-items: center;
}
#footer-top-header{
    text-align: center;
    font-size:30px ;
    color: white;
    position: relative;
    top: 5%;
}
.search-box-main{
    height: 70px;
    width: 550px;
    /*background-color: red;*/
    margin-left: 52%;
    margin-top: 5%;
    transform: translateX(-50%);
}
.search{
    height: 40px;
    width: 400px;
    background: none;
    border: 1px solid white;
    border-radius: 20px;
    color: white;
    font-size: 15px;
    margin-left: 10px;
    padding-left: 15px;
    outline: none;
}
.subscribe-button{
    width: 125px;
    height: 40px;
    font-size: 15px;
    border-radius: 20px;
    background-color: #E54D42;
    color: white;
    outline: none;
    border: none;
    cursor: pointer;
    position: relative;
    left: -10%;    
}
.footer-box-main{
    width: 1200px;
    height: 300px;
    margin-left: 50%;
    transform: translateX(-50%);
    display:flex;
    justify-content: space-around;
    align-items: center;
}
.footer-box-main p {
     margin:10px 10px 10px 0px;

}

.footer-box{
    height: 250px;
    width: 350px;
   /* background-color: green;*/
    color: white;
}
.footer-box-headers{
    height: 40px;
    width: 350px;
  /*  background-color: blue;*/
    font-weight: bold;
    border-bottom: 1px solid #E54D42;
    
}
.footer-box-headers{
  display: flex;
  justify-content: flex-start;
  align-items: center;
   
}
.contact-main{
    margin-top: 15px;
}
.contact{
      height: 60px;
}
.contact img{
    float: left;
}
.contact h4{
    margin-left: 40px;
}
.contact p {
    font-size: 12px;
    color: #99A2AA;
    margin-left: 35px;
    letter-spacing: 0.5px;
}
.footer-box3 ul li,a{
    list-style: none;
    margin-top: 10px;
    color: white;
    text-decoration: none;    
}
.footer-bottom-main{
    width: 350px;
    height: 100%;
}
.footer-social-icons{
    height: 50%;
    display: flex;
    justify-content: center;
     align-items: center;
    margin-right: 15px;
}
.footer-social-icons img {
    height: 20px;
    margin-left: 10px;
 }
.footer-copyright{
    height: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
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
