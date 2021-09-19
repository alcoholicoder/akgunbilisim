@extends('layouts.adminlayout')

@section('css')

@endsection

@section('content')
<h2 class="text-center m-5">YENİ ÖZELLİK EKLE</h2>
<div class="container " >
    <table class="table  " style="margin-top:10px;">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col" style="w-100">Özellik İsmi</th>
                <th scope="col" style="width:100px;">Sil</th>
            </tr>
        </thead>
        <tbody>
            <form method="post">
                @csrf
            <input type="text" class="w-100 mb-3" name="new_variant"placeholder="Özellik Giriniz">
            <button type="submit" class="btn btn-success float-end mb-3" >Yeni Ekle</button>
            @foreach ($variants as $variant)
            <tr id={{$variant->id}}>
                <th scope="row">1</th>
                <td>{{$variant->value}}</td>
                <td><a href ="{{route('admin.delete.variant', ['id' => $variant->id] ) }}" type="submit" class="btn btn-danger" style="width:70px;">Sil</td>
            </tr>
            @endforeach

        
        </tbody>
    </table>
    <div class="row">
        <div class="col-12 pt-2 pb-2">
            {{ $variants->links() }}
    </div>
    </div>
</div>


 

@endsection

@section('js')

@endsection
