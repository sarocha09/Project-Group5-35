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

        <link rel="icon" type="image/x-icon" href="{{asset('front_end/assets/favicon.ico')}}" />
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
        <header class="masthead" style="background-image: url('{{asset('front_end/assets/img/bg-index.jpg')}}">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Coffee House</h1>
                            <span class="subheading">Today’s good mood is sponsed by coffee</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        
<div class="container">
            <div class="row">

                <div class ="col-4">
                    <img class="img-fluid" src="{{asset('front_end/assets/img/stbr.jpg')}}" />
                    <span class="caption text-muted">รูปใช้เพื่อการโฆษณาเท่านั้น</span>
                </div>
                <div class="col-8">-
                    <h2 class="section-heading">ร้านบ้านกาแฟสด</h2> 
                    <p>ร้านกาแฟเป็นร้านที่ใครหลาย ๆ คนพบเจอได้ในทุกสถานที่
                        ไม่ว่าจะเป็นสวนสาธารณะ ห้างสรรพสินค้า หรือริมข้างทาง
                        ซึ่งร้านบ้านกาแฟสดเป็นร้านข้างทางที่ใช้บ้านพักอาศัย
                        มาดัดแปลงต่อเติมเป็นร้านกาแฟขนาดเล็กและ
                        มีราคาย่อมเยา ที่ทุกคนสามารถเข้าถึงได้</p>
                </div>

            </div>

            <div class ="row">
                <div class="col">
                    <h2 class="section-heading text-center">เมนูแนะนำ</h2> 
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <img src="{{asset('front_end/assets/img/hotcoffee.jpg')}}" class="img-thumbnail">
                    <h5 class="text-center">ลาเต้</h5>
                </div>
                <div class="col-4">
                    <img src="{{asset('front_end/assets/img/cherry.jpg')}}" class="img-thumbnail">
                    <h5 class="text-center">อิตาเลี่ยนโซดา</h5>
                </div>
                <div class="col-4">
                    <img src="{{asset('front_end/assets/img/coco.jpg')}}" class="img-thumbnail">
                    <h5 class="text-center">โกโก้</h5>
                </div>
           </div>

            <div class="row">
                <div class="col-md">
                    <h2 class="section-heading text-center">เกล็ดความรู้</h2>
                    <h4 class="text-center">สายพันธุ์เมล็ดกาแฟที่ดีที่สุด</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('front_end/assets/img/arabica.jpg')}}" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">อราบิก้า (Arabica)</h5>
                                    <p class="card-text">คนที่รักความกลมกล่อมกลิ่นหอมและรสชาตินุ่มละมุนของกาแฟมักจะตกหลุมรัก
                                        กาแฟสายพันธุ์นี้ นิยมปลูกมากที่สุดเป็นอันดับหนึ่งของโลกถึงร้อยละ 80 
                                        และเป็นกาแฟที่ได้รับความนิยมสูงสุดในร้านกาแฟสดทั่วโลก ขณะเดียวกันอราบิก้าก็ปลูกยากและต้องการการควบคุมด้านคุณภาพการปลูกมากเช่นกันอราบิก้าให้ปริมาณคาเฟอีนไม่เข้มข้นมากอยู่ในระดับ1.1-1.7เปอร์เซ็นต์ 
                                        ตามถิ่นกำเนิดอราบิก้าเป็นกาแฟที่รักอากาศเย็นสบายราว15-25 องศาฯ 
                                        จึงเหมาะที่จะปลูกในที่ภูมิประเทศสูงกว่า1,000 เมตรจากระดับน้ำทะเล และแน่นอนว่าราคาของกาแฟก็แตกต่างตามคุณภาพของแต่ละสายพันธุ์อีกด้วย</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title">โรบัสต้า (Robusta)</h5>
                                <p class="card-text">คอกาแฟเข้มข้นตัวจริงไม่ควรพลาดกาแฟโรบัสต้าเพราะมีปริมาณความเข้มข้นของคาเฟอีนถึง 2-4.5 เปอร์เซ็นต์ อีกทั้งบอดี้ (ความเข้มข้น) 
                                    ยังให้รสชาติเข้มกว่าอราบิก้าด้วยความเข้มสูงกว่าเท่าตัวของโรบัสต้าจึงทำให้
                                    นิยมนำไปผลิตเป็นกาแฟสำเร็จรูป (Instant Coffee) และ 3 in 1
                                    วันไหนที่คุณต้องเดินทางไกลหรืออยากให้ร่างกายตื่นตัวตลอดวัน แค่เลือกกาแฟโรบัสต้าชงดื่มเองก็พร้อมลุยทุกเส้นทาง 
                                    รวมถึงการนำไปผสมกับกาแฟสายพันธุ์อื่นที่เรียกว่า “กาแฟเบลนด์” (Blend Coffee)นั่นเอง โรบัสต้าดูแลง่ายปลูกง่ายรักอากาศร้อนชื้นแบบภาคใต้ของบ้านเรา แข็งแรง ทนทานต่อโรคต่างๆ ได้ดี ให้ผลผลิตสูง และการดูแลรักษาก็ไม่ยากด้วยนะ</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset('front_end/assets/img/robusta (1).jpg')}}" class="img-fluid rounded-start">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
