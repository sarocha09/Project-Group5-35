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
        <header class="masthead" style="background-image: url('{{asset('front_end/assets/img/bg-cont.jpg')}}">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>C    o    n    t    a    c    t</h1>
                            <span class="subheading">ช่องทางการติดต่อ</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content-->
        <article>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1094.9667003161326!2d100.52302542579373!3d13.842320417430352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b640ef77977%3A0x5e8e19b89ea7c0c8!2sSoi%20Sirichai%201%2F36%2C%20Tambon%20Bang%20Khen%2C%20Amphoe%20Mueang%20Nonthaburi%2C%20Chang%20Wat%20Nonthaburi%2011000!5e0!3m2!1sen!2sth!4v1629791069066!5m2!1sen!2sth" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="div-contact orange">
                            <h4>ที่อยู่ (Address)</h4>
                            <p>กรุงเทพนนท์ 12 แยก 24 ต.บางเขน อ.เมือง นนทบุรี 11000</p>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="div-contact yellow">
                            <h4>ช่องทางการติดต่อ (Contact Info)</h4> 
                            <p>Tel. 089-160-9037</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

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
