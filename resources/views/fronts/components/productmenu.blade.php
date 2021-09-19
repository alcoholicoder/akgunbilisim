<div class="col-md-2 m-0 p-0" style="background-color: #FFFFFF; ">
    <div class="list-group" id="list-tab" role="tablist">
        <div class="contenedor-menu p-0 m-0">
            <!-- <a href="" class="btnMenu">Menu <i class="fa fa-bars"></i></a> -->
            <ul class="menu m-0 p-0">
                @foreach (getCategoryNames() as $category)

                <li class="border-bottom">
                    <a href="{{ url('category/'.$category->id) }}" style="text-decoration: none;">
                        <i class="bi bi-laptop"></i> {{ $category->category_name }}
                    </a>
                </li>

                @endforeach
            </ul>
        </div>
    </div>
</div>