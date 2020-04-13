@extends('layouts.app')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" >

@section('content')
    <div class="container pt-5">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 py-2" id="header-decor">
                @if(!empty($pesanan))
                <strong><p align="center">Tanggal Pesan : {{ $pesanan->tanggal }}</p></strong>
                <h6 class="display-6">Total Produk ( {{ $pesanan->jumlah_harga }} )</h6>
            </div>
        </div>
        <?php $no = 1; ?>
        @foreach ($pesanan_details as $pesanan_detail)
        <table>
        <div class="row justify-content-center" id="checkout-container">
            <div class="col-6" id="product-cart">
            <div class="row">
            <div class="col-6 text-center">
            <h6 class="display-6 py-3">{{ $pesanan_detail->barang->nama_barang }}</h6>
        </div>
        <div class="col-6 text-right">
            <h6 class="display-6 py-3">{{ number_format($pesanan_detail->barang->harga) }}</h6>
        </div>
        </div>
            <div class="row" id="prod-details">
            <div class="col-6 text-center">
            <img class="img-fluid w-50" src="{{ url('uploads') }}/{{$pesanan_detail->barang->gambar }}">
        </div>
            <div id="prod-detail" class="col-6">
            <div id="jumlah-prod" class="row">
            <div class="col-12">
            <h6 class="display-6">Jumlah</h6>
            </div>
            <div class="col-12">
            <h6 class="display-6 ml-3 text-muted">{{ $pesanan_detail->jumlah }}</h6>
            </div>    
            </div>
            <div class="row" id="ukuran-prod" >    
        </div>
        <form action="{{ url('checkout') }}/{{ $pesanan_detail->id }}" method="POST">
            @csrf
           {{ method_field('DELETE') }}
           <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus ?');" ><i class="fa fa-trash"></i></button>
       </form>
        </div>    
        </div>
        <hr class="style-one mt-4 mx-3">    
        </div>
            <div class="col-3" id="cart-details">
            </table>
                @endforeach
                <div class="row justify-content-center mb-3" id="cart-header">
                <h6 class="display-6 mt-3">Masukkan Kode Voucher</h6>
                <div id="cart-voucher" class=" text-center py-3">
                    <input type="text" class="form-control" placeholder="Kode Voucher"/>
                    <button type="submit" class="btn btn-dark w-75 m-3">Submit</button>
                </div>
            </div>
                <div id="cart-detail">
                    <div class="row align-items-center" id="total-sect-1">
                    <div class="col-6">
                    <h6 class="display-6">Total</h6>
                </div>
                <div class="col-6 text-right">
                    <h6 class="display-6">Rp. {{ number_format($pesanan->jumlah_harga) }}</h6>
                </div>
                </div>
                <hr class="style-one">
                <div class="row align-items-center"  id="total-sect-2">
                    <div class="col-6">
                    <h6 class="display-6">Pengiriman</h6>
                </div>
                <div class="col-6 text-right">
                    <h6 class="display-6">Pengiriman</h6>
                </div>
                </div>
                <hr class="style-one">
                <div class="row align-items-center" id="total-sect-3">
                    <div class="col-6">
                    <h6 class="display-6 ">Total Jumlah</h6>
                </div>
                <div class="col-6 text-right">
                    <h6 class="display-6">Rp. {{ number_format($pesanan->jumlah_harga) }}</h6>
                </div>
                </div>
                <div class="row mt-4 justify-content-center">
                <button type="submit" class="btn btn-outline w-75 mt-4" id="checkout-btn"><a href="{{ url('konfirmasi-checkout') }}" class="btn btn-success" onclick="return confirm('Anda Yakin Ingin Checkout ?')"><i class="fa fa-shopping-cart"> Checkout</i></a></button>
            </div>    
            </div>
            </div>
        </div>
        @endif
    </div>
    @endsection
    
