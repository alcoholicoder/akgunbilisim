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