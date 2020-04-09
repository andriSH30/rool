<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ROOL Admin Page
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet">
  
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a class="simple-text logo-normal">
          ROOL
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/admin/listproduk') }}">
              <i class="material-icons">content_paste</i>
              <p>List Produk</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('admin/laporan') }}">
              <i class="material-icons">library_books</i>
              <p>Laporan</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Daftar Produk</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="{{ route('logout') }}">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar Produk</h4>
                  <p class="card-category">Produk ROOL</p>
                  <span class="float-right text-center">
                  <h4 class="card-title">Tambah Produk</h4>
                  <button type="submit" class="btn btn-warning" id="uploadProduk" data-toggle="modal"
                  data-target="#modalUpload">+</button>
                  </span>
                </div>
                <div class="modal fade" id="modalUpload" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Produk</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url('/admin/listproduk/upload')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="file"
                                              aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label"></label>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Nama Produk</label>
                                            <input type="text" name="nama_barang" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                          <label class="font-weight-bold">Harga Produk</label>
                                          <input type="text" name="harga" class="form-control" value="">
                                      </div>
                                      <div class="form-group">
                                        <label class="font-weight-bold">Stok</label>
                                        <input type="text" name="stok" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                      <label class="font-weight-bold">Kategori</label>
                                      <input type="text" name="kategori" class="form-control" value="">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                                </form>                               
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Gambar Produk
                        </th>
                        <th>
                          Nama Produk
                        </th>
                        <th>
                          Harga
                        </th>
                        <th>
                          Stok
                        </th>
                        <th>
                          Kategori
                        </th>
                        <th>
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                        @foreach ($barangs as $barang)
                        <tr>
                          <td>
                            {{$barang->id}}
                          </td>
                          <td>
                            {{$barang->gambar}}
                          </td>
                          <td>
                            {{$barang->nama_barang}}
                          </td>
                          <td>
                            {{number_format($barang->harga)}}
                          </td>
                          <td>
                            {{$barang->stok}}
                          </td>
                          <td class="text-primary">
                            {{$barang->kategori}}
                          </td>
                          <td>
                          <button class="btn btn-primary" id="updateProduk" data-toggle="modal" data-id="{{ $barang->id }}"
                            data-target="#modalUpdate">Update</button>
                            <a href="{{url('admin/listproduk/'.$barang->id.'/delete')}}" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Update Produk</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url('/admin/listproduk/update')}}" method="post">
                                        <input type="text" name="id" id="id" value="{{$barang->id}}">
                                        {{ csrf_field() }}
                                        <img src="{{url($barang->gambar)}}" class="img-fluid mb-2" alt="Responsive image" style="max-height:250px;border: 1px black solid;">
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" name="file"
                                            aria-describedby="inputGroupFileAddon01">
                                          <label class="custom-file-label"></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Nama Produk</label>
                                            <input type="text" name="nama_barang" class="form-control" value="{{$barang->nama_barang}}">
                                        </div>
                                        <div class="form-group">
                                          <label class="font-weight-bold">Harga Produk</label>
                                          <input type="text" name="harga" class="form-control" value="{{$barang->harga}}">
                                      </div>
                                      <div class="form-group">
                                        <label class="font-weight-bold">Stok</label>
                                        <input type="text" name="stok" class="form-control" value="{{$barang->stok}}">
                                    </div>
                                    <div class="form-group">
                                      <label class="font-weight-bold">Kategori</label>
                                      <input type="text" name="kategori" class="form-control" value="{{$barang->kategori}}">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>                               
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            
  <!--   Core JS Files   -->
  <script src="{{asset('/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('/js/core/popper.min.js')}}"></script>
  <script src="{{asset('/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{asset('/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{asset('/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>