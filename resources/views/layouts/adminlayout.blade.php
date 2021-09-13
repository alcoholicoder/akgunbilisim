<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"  />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <link rel="stylesheet" href="styles.css" />



   
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
.list-group-item-action:focus, .list-group-item-action:hover{
    color:rgb(158, 158, 158);
}

.list-group-item.active {
  background-color: transparent;
  color: #fff;
  font-weight: bold;
  border: none;
}
.list-group a{
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
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color: #262B40; color:#fff;">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>ADMİN PANEL</div>
            <div class="list-group list-group-flush my-3" style="color:#fff">
                <a href="{{route('adminindex')}}" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                    class="fas fa-project-diagram me-2"></i>AKGUN BİLİŞİM</a>
                
                        <a href="{{route('adminadd')}}" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Ürün Ekle</a>
                <a href="{{route('choosevariant')}}" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
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
                        class="fas fa-power-off me-2"></i>Logout</a>
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

    
          $(document).ready(function(){
              $("#variants").select2();
          });
     
          
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

    


    </script>
</body>

</html>