@extends('layouts.app')

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @section('content')
    <div id="my-body">
    <div class="jumbotron" id="my-jumbotron">
        <div class="container text-center" id="jumbo-text-contain">
            <h4 class="display-4 mt-5">Welcome To Rool !</h4>
            <p class="lead">Belanja dengan mudah di Rool</p>
            <button type="button" class="btn" id="jumbotron-btn">SHOP NOW !</button>
        </div>
    </div>

<div class="container" id="category-sect">
    <h4 class="font-weight-bold pt-5"> Shop By Category </h6>
<div class="row justify-content-center mt-5" id="row-content-1">
    <div class="col-4 mr-2 " id="laptop-cat">
      <h6 class="display-6" id="laptop-menu">Laptop dan Aksesoris</h6>
      <img src="./images/Laptop.png" class="img-responsive w-100 p-4" id="laptop-img"/>
</div>
<div class="col-4 mr-2" id="phone-cat">
  <h6 class="display-6" id="phone-menu">Handphone dan Aksesoris</h6>
      <img src="./images/phones.png" class="img-responsive w-100 mt-4" id="phone-img"/>
</div>
<div class="col-3" id="tv-cat">
  <h6 class="display-6" id="tv-menu">TV</h6>
      <img src="./images/tv.png" class="img-responsive w-100 mt-4" id="tv-img"/>
</div>
</div>
<div class="row justify-content-center mt-3">
  <div class="col-6 mr-3" id="clothes-cat">
    <h6 class="display-6" id="clothes-menu">Pakaian dan Lainnya</h6>
    <img src="./images/clothes.png" class="img-responsive w-100 mt-4" id="clothes-img"/>
  </div>
  <div class="col-5" id="shoes-cat">
    <h6 class="display-6" id="shoes-menu">Sepatu dan Lainnya</h6>
    <img src="./images/shoes.png" class="img-responsive w-100 mt-4" id="shoes-img"/>
  </div>
</div>
<div class="row justify-content-center mt-3">
  <div class="col-6 mr-3" id="furniture-cat">
    <h6 class="display-6" id="furniture-menu">Perabotan Rumah</h6>
    <img src="./images/furniture.png" class="img-responsive w-100 mt-4" id="furniture-img"/>
  </div>
  <div class="col-5" id="kitchen-cat">
    <h6 class="display-6" id="kitchen-menu">Peralatan Dapur</h6>
    <img src="./images/kitchen-utensils.png" class="img-responsive w-100 ml-3 mt-5" id="kitchen-img"/>
  </div>
</div>

    </div>    
</body>
<footer class="page-footer blue pt-5 mt-5">
<div class="container-fluid text-center text-md-left">
      <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
          <img class="px-5" src="./images/ROOL.png" />
          <p class="text-md-left px-5">Sebagai Pusat Fashion Online di Asia, kami menciptakan kemungkinan-kemungkinan gaya tanpa batas dengan cara memperluas jangkauan produk, mulai dari produk internasional hingga produk lokal dambaan. Kami menjadikan Anda sebagai pusatnya. Bersama RUEVE, You Own Now.</p>
  
        </div>
  
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-3 mb-md-0 mb-3">
  
          
          <h5 class="text-uppercase">Layanan Kami</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <div class="col-md-3 mb-md-0 mb-3">
  
          <h5 class="text-uppercase">TENTANG KAMi</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
  
      </div>
  
    </div>

    <div class="footer-copyright text-right py-3 mr-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> Rool</a>
    </div>
  </footer>
  @endsection