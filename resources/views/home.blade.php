@extends('layouts.app')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" >
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
@section('content')

<div class="container-fluid pt-5">
    <div class="row justify-content-center">
        <div class="col-md-2" style="box-shadow: 0px 0px 5px grey ;">
            <div class="row text-start">
                <h6 class="display-6 px-3 pt-3">Filter</h6>
            </div>
            <hr class="style-one"/>
            <h6 class="display-6 text-start">Harga</h6>
            <div class="row text-start justify-content-center">
                <form>
                    <div class="form-group">
                      <input type="hargaMin" class="form-control" id="exampleInputharga1" aria-describedby="emailHelp" placeholder="Harga Minimal">
                      </div>
                    <div class="form-group">
                      <input type="hargaMax" class="form-control" id="exampleInputharga2" placeholder="Harga Maximal">
                    </div>
                    </form>
            </div>
        </div>
        <div class="col-md-8 ml-2" id="products-container">
            <div class="container-fluid">
            <div class="row">
                @foreach ($barangs as $barang)
            <div class="text-center col-2 my-3 mr-2 shadow-sm" style="border-radius: 5px;)">
                <img class="img w-100 p-3" src="{{ url('uploads') }}/{{ $barang->gambar }}"/>
                <h6 class="display-6 mt-4">{{ $barang->nama_barang }}</h6>
                <h6 class="display-6 text-muted">Rp. {{ number_format($barang->harga) }} </h6>
                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary mb-3"><i class="fa fa-shopping-cart mx-2"></i>Beli</a>
            </div>
            @endforeach
        </div>
        </div>   
        </div> 
</div>
</div>
@endsection