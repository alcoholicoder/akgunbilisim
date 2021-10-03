@extends('layouts.adminlayout')

@section('css')

@endsection

@section('content')
<h2 class="text-center m-5">YENİ KATEGORİ EKLE</h2>
<div class="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col" style="w-100">Kategori İsmi</th>
                <th scope="col" style="width:100px;">Sil</th>
            </tr>
        </thead>
        <tbody>
            <form method="post">
                @csrf
                <input type="text" class="w-100 mb-3" name="new_category" placeholder="Özellik Giriniz">
                <button type="submit" class="btn btn-success float-end mb-3">Yeni Ekle</button>
                @foreach ($categories as $category)     
                <tr id={{$category->id}}>
                    <th scope="row" style="width:50px;">1</th>
                    <td>{{$category->category_name}}</td>
                   <td>
                    <a href="{{ route('admin.deletecategory',['id' => $category->id]) }}" class="btn btn-danger">Sil</a>  
                       </td>
                </tr>          
                @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-12 pt-2 pb-2">
            {{$categories->links()}}
        </div>
    </div>
</div>




@endsection

@section('js')

@endsection
