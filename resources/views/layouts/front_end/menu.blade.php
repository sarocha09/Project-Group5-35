<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Coffee House</title>
        
        <!-- Bootstrap 4.6 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

        <link rel="icon" type="image/x-icon" href="{{asset('front_end/{{assetassets/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('front_end/css/styles.css')}}" rel="stylesheet" />
    </head>

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 24px !important;">บ้านกาแฟสด</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="/layouts/front_end/index" class="nav-link px-lg-3 py-3 py-lg-4" style="font-size: 16px;">หน้าหลัก</a></li>
                        <li class="nav-item"><a href="/layouts/front_end/menu" class="nav-link px-lg-3 py-3 py-lg-4" style="font-size: 16px;">เมนูทั้งหมด</a></li>
                        <li class="nav-item"><a href="/layouts/front_end/contact" class="nav-link px-lg-3 py-3 py-lg-4" style="font-size: 16px;">ช่องทางการติดต่อ</a></li>
                        <li class="nav-item"><a href="/layouts/front_end/login" class="nav-link px-lg-3 py-3 py-lg-4" style="font-size: 16px;">เข้าสู่ระบบ</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{asset('front_end/assets/img/bg-menu.jpg')}}">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>M E N U</h1>
                            <span class="subheading">เมนู</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Main Content-->
    
        <!-- Main Content-->
        <!-- ร้อน-->
        <div class ="row">
            <div class="col">
                <h2 class="section-heading text-center">เมนูร้อน</h2> 
            </div>
        </div>        <div class ="container">
            <div class ="row mt-4">

            @foreach($dbProduct as $product)
               @if($product->type_id == 1)
             
    <div class="col-4">
        <div class="card">
            <img src="{{$product->image}}" class="img-thumbnail">
            <div class="card-body">
              <h5 class="card-title text-center">{{$product->name}}</h5>
              <p class="card-text text-center">{{$product->pice}} บาท</p>
              <span class="caption text-muted">รูปใช้เพื่อการโฆษณาเท่านั้น</span>
              
            </div>
          </div>
        </div>

        @endif

        @endforeach
</div>

          <!-- เย็น-->
            <div class ="row">
            <div class="col">
                <h2 class="section-heading text-center">เมนูเย็น</h2> 
            </div>
        </div>        <div class ="container">
            <div class ="row mt-4">

            @foreach($dbProduct as $product)
            @if($product->type_id == 2)
             
    <div class="col-4">
        <div class="card">
            <img src="{{$product->image}}" class="img-thumbnail">
            <div class="card-body">
              <h5 class="card-title text-center">{{$product->name}}</h5>
              <p class="card-text text-center">{{$product->pice}} บาท</p>
              <span class="caption text-muted">รูปใช้เพื่อการโฆษณาเท่านั้น</span>
              
            </div>
          </div>
        </div>

        @endif

        @endforeach
</div>

          <!-- ปั่น-->
          <div class ="row">
            <div class="col">
                <h2 class="section-heading text-center">ปั่น</h2> 
            </div>
        </div>        <div class ="container">
            <div class ="row mt-4">

            @foreach($dbProduct as $product)
            @if($product->type_id == 3)
             
    <div class="col-4">
        <div class="card">
            <img src="{{$product->image}}" class="img-thumbnail">
            <div class="card-body">
              <h5 class="card-title text-center">{{$product->name}}</h5>
              <p class="card-text text-center">{{$product->pice}} บาท</p>
              <span class="caption text-muted">รูปใช้เพื่อการโฆษณาเท่านั้น</span>
              
            </div>
          </div>
        </div>

        @endif

        @endforeach
</div>

      <!-- อิตาเลี่ยนโซดา-->
      <div class ="row">
            <div class="col">
                <h2 class="section-heading text-center">อิตาเลี่ยนโซดา</h2> 
            </div>
        </div>        <div class ="container">
            <div class ="row mt-4">

            @foreach($dbProduct as $product)
            @if($product->type_id == 4)
             
    <div class="col-4">
        <div class="card">
            <img src="{{$product->image}}" class="img-thumbnail">
            <div class="card-body">
              <h5 class="card-title text-center">{{$product->name}}</h5>
              <p class="card-text text-center">{{$product->pice}} บาท</p>
              <span class="caption text-muted">รูปใช้เพื่อการโฆษณาเท่านั้น</span>
              
            </div>
          </div>
        </div>

        @endif

        @endforeach
</div>
           

         <!-- Main Content-->
       @yield('index')
        <!-- Footer-->
        <footer style="padding-bottom: 0px;">
            <hr style="border: 40px solid #F3CC88;margin-bottom:0px;">
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="front_end/js/scripts.js"></script>
       
    </body>
</html>
