<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="{{asset('images/favicon.png')}}" sizes="35x35" type="image/png">

    <title>Home - Al Omariya Institute</title>

    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">

    <style>
         @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');

body{
   background: #f6f6f6;
}

.box{
   margin: 100px auto;
   background: #fff;
   border-radius: 7px;
   box-shadow: 1px 2px 4px rgba(0,0,0,.3);
}

.box .heading{
   background: #7800CF;
   border-radius: 7px 7px 0px 0px;
   padding: 10px;
   color: #fff;
   text-align: center;
}

.faqs{
   padding: 0px 20px 20px;
}

::-webkit-details-marker{
   float: right;
   margin-top: 3px;
}

details{
   background: #f6f6f6;
   padding: 10px 20px;
   border-radius: 7px;
   margin-top: 20px;
   font-size: 14px;
   letter-spacing: 1px;
   cursor: pointer;
}

details summary{
   outline: none;
   color: #0B0F23;
}
    </style>
</head>

<body>
    <main>
        <header class="stick style1 w-100 ">
            <div class="topbar bg-color1 w-100">
                <div class="container ">
                    <div class="topbar-inner flex-row-reverse d-flex flex-wrap justify-content-between align-items-center w-100">
                        <ul class="topbar-info-list mb-0 list-unstyled d-inline-flex">
                            <li><i class="thm-clr far fa-envelope-open"></i>Email: <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=info@alomariyainstitute.org" title="">info@alomariyainstitute.org</a></li>
                        </ul>
                        <ul class="topbar-links mb-0 list-unstyled d-inline-flex">
                            <li><a href="/register" title="">تسجيل</a></li>
                            <li><a href="" title="">مساعدة</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- Topbar -->

            <div class="logo-info-bar-wrap w-100">
                <div class="container">
                    <div class="logo-info-bar-inner flex-row-reverse w-100 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="logo-social d-inline-flex flex-wrap justify-content-between align-items-center">
                            <div class="logo">
                                <h1 class="mb-0"><a href="/" title="Home"><img style="width: 80px; height:80px;" class="img-fluid" src="{{asset('images/logo.png')}}" alt="Logo" srcset="{{asset('images/retina-logo.png')}}"></a></h1>
                            </div><!-- Logo -->
                        </div>
                        <div class="top-info-wrap d-inline-flex flex-wrap justify-content-between align-items-center">

                            <div class="call-us">
                                <i class="thm-clr flaticon-phone-call"></i>
                                <span>24/7 Phone Services</span>
                                <strong>+96594479040</strong>
                            </div>

                            <div class="social-links" style="margin-left: 300px;">
                                <a href="https://api.whatsapp.com/send?phone=96594479040&text=السلام عليكم" title="Whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                <a href="" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                <a href="" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- Logo Info Bar Wrap -->

            <div class="menu-wrap">
                <div class="container">
                    <nav class="d-inline-flex flex-row-reverse justify-content-between align-items-center w-100 bg-color1">
                        <div class="header-left">
                            <ul class="mb-0 list-unstyled d-inline-flex">
                                <li><a href="/register" title="">التسجيل</a></li>
                                <li><a href="/news" title="">أخبار المعهد</a></li>
                                <li><a href="/faq" title="">سؤال وجواب</a></li>
                                <li><a href="/makalat" title="">مقالات</a></li>
                                <li><a href="/library" title="">المكتبة</a></li>
                                <li><a href="/team" title="">مجلس الأمناء</a></li>
                                <li><a href="/about" title="">عن المعهد</a></li>
                                <li><a href="/" title="">الرئيسية</a></li>
                            </ul>
                        </div>
                        <div class="header-right-btns">
                            <a class="get-quote" href="/sendfaq"><i class="flaticon-arrow-pointing-to-left"></i>أرسل سؤالك<i class="far fa-comments"></i></a>
                        </div>
                    </nav>
                </div>
            </div><!-- Menu Wrap -->
        </header><!-- Header -->

        <div class="sticky-menu">
            <div class="container">
                <div class="sticky-menu-inner d-flex  flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo">
                        <h1 class="mb-0"><a href="/" title="Home"><img style="width: 80px; height:80px;" class="img-fluid" src="{{asset('images/logo.png')}}" alt="Logo" srcset="{{asset('images/retina-logo.png')}}"></a></h1>
                    </div><!-- Logo -->
                    <nav class="d-inline-flex justify-content-between align-items-center">
                        <div class="header-left">
                            <ul class="mb-0 list-unstyled d-inline-flex">
                                <li><a href="/register" title="">التسجيل</a></li>
                                <li><a href="/news" title="">أخبار المعهد</a></li>
                                <li><a href="/faq" title="">سؤال وجواب</a></li>
                                <li><a href="/makalat" title="">مقالات</a></li>
                                <li><a href="/library" title="">المكتبة</a></li>
                                <li><a href="/team" title="">مجلس الأمناء</a></li>
                                <li><a href="/about" title="">عن المعهد</a></li>
                                <li><a href="/" title="">الرئيسية</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- Sticky Menu -->

        <div class="rspn-hdr">
            <div class="lg-mn">
                <div class="logo"><a href="/" title="Home"><img src="{{asset('images/logo.png')}}" alt="Logo"></a></div>
                <div class="rspn-cnt">
                    <span><i class="thm-clr far fa-envelope-open"></i><a href="" title="">info@alomariyainstitute.org</a></span>
                </div>
                <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                <ul class="mb-0 list-unstyled flex-reverse text-right">
                    <li><a href="/" title="">الرئيسية</a></li>
                    <li><a href="/about" title="">عن المعهد</a></li>
                    <li><a href="/team" title="">مجلس الأمناء</a></li>
                    <li><a href="/library" title="">المكتبة</a></li>
                    <li><a href="/makalat" title="">مقالات</a></li>
                    <li><a href="/faq" title="">سؤال وجواب</a></li>
                    <li><a href="/news" title="">أخبار المعهد</a></li>
                    <li><a href="/register" title="">التسجيل</a></li>
                </ul>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->
        
        <section>
            <div class="w-100 pt-170 pb-150 dark-layer3 opc7 position-relative text-right">
                <div class="fixed-bg" style="background-image: url({{asset('images/resources/faq_slide.jpg')}});"></div>
                <div class="container">
                    <div class="page-top-wrap w-100">
                        <h1 class="mb-0">سؤال وجواب</h1>
                    </div><!-- Page Top Wrap -->
                </div>
            </div>
        </section>

        <!-- <section>
            <div class="w-100 pt-210 pb-100 position-relative" style="margin-top:-100px">
                <div class="container text-right">
                    <div class="faq-wrap w-100">
                        <div class="row flex-row-reverse">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                                @foreach($faqs as $faq)
                                @if($faq->answer)
                                <div class="faq">
                                    <div class="faq_question open">{!!$faq->question!!}</div>
                                    <div class="faq_answer_container" style="display: block;">
                                        <div class="faq_answer">{!!$faq->answer!!}</div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section>
            <div class="w-100 pt-210 pb-100 position-relative" style="margin-top:-250px; margin-bottom:-120px">
                <div class="container text-right">
                    <div class="row flex-row-revers">
                        <div class="box text-right col-md-12 col-sm-12 col-lg-12">
                            <div class="faqs text-right">
                                @foreach($faqs as $faq)
                                @if($faq->answer)
                                <details>
                                    <summary>{!!$faq->question!!}</summary>
                                    <p class="text text-right">{!!$faq->answer!!}</p>
                                </details>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section>
            <div class="w-100 pt-210 pb-100 position-relative" style="margin-top:-100px">
                <div class="container text-right">
                    <div class="faq-wrap w-100">
                        <div class="row flex-row-reverse">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="toggle" id="toggle">
                                @foreach($faqs as $faq)
                                @if($faq->answer)
                                    <div class="toggle-item">
                                        <h4 class="mb-0 end">{!!$faq->question!!}</h4>
                                        <div class="toggle-content">
                                            <p class="mb-0 end">{!!$faq->answer!!}</p>
                                        </div>
                                    </div>
                                @endif
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- <section class="container mt-5 mb-5">
        <form class="contact-form text-center w-100" action="/addfaq" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="form-group w-100">
                                <div class="response w-100"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <label class="d-block" style="float: right">: البريد اللإلكتروني</label>
                            <input class="email text-right" type="email" name="email">
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <label class="d-block" style="float: right">: الاسم</label>
                            <input class="fname text-right" type="text" name="name">
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <label class="d-block" style="float: right">: اكتب سؤالك</label>
                            <textarea class="contact_message text-right" name="question"></textarea>
                            <button class="thm-btn thm-bg" id="submit" value="إرسال" type="submit"><i class="flaticon-arrow-pointing-to-left"></i>             إرسال</button>
                        </div>
                    </div>
                </form>
        </section> -->

        <section>
            <div class="w-100 position-relative">
                <div class="container">
                    <div class="getin-touch-wrap overlap-99 brd-rd5 style2 thm-layer opc8 w-100 overflow-hidden position-relative">
                        <div class="fixed-bg" style="background-image: url({{asset('images/parallax2.jpg')}});"></div>
                        <div class="row align-items-center justify-content-between flex-row-reverse text-right">
                            <div class="col-md-7 col-sm-12 col-lg-5">
                                <div class="getin-touch-title w-100">
                                    <span class="text-color1 d-block">هل أنت مستعد للبدء ؟</span>
                                    <h2 class="mb-0">ابق على تواصل، قم بالتسجيل الآن</h2>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-lg-4">
                                <div class="getin-touch-btn text-right">
                                    <a class="thm-btn bg-color1" href="/register" title=""><i class="flaticon-arrow-pointing-to-left"></i>&nbsp;&nbsp;سجل الآن</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer>
            <div class="w-100 bg-color5 pt-195 pb-10 position-relative">
                <div class="particles-js" id="prtcl"></div>
                <div class="container">
                    <div class="footer-data w-100">
                        <div class="row flex-row-reverse">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="widget w-100 text-right">
                                    <div class="logo w-100">
                                        <h1 class="mb-0"><a href="/" title="Home"><img style="width: 80px; height:80px;" class="img-fluid" src="{{asset('images/logo.png')}}" alt="Logo" srcset="{{asset('images/retina-logo-footer.png')}}"></a></h1>
                                    </div><!-- Logo -->
                                    <p class="mb-0">معهد العمرية</p>
                                    <div class="social-links2 d-inline-block">
                                        <a href="" title="Facebook" target="_blank"><i class="flaticon-facebook"></i></a>
                                        <a href="" title="Twitter" target="_blank"><i class="flaticon-twitter"></i></a>
                                        <a href="" title="youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                        <a href="https://api.whatsapp.com/send?phone=96594479040&text=السلام عليكم" title="Whatsapp"><i class="fab fa-whatsapp"></i></a></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3 order-lg-1 ">
                                <div class="widget w-100 text-right">
                                    <div class="visitor-stats w-100">
                                        <div class="visitor-stat-box w-100">
                                            <h4 class="mb-0 thm-clr counter ">25,329,53253</h4>
                                            <h5 class="mb-0 ">عدد زوارنا الإجمالي</h5>
                                        </div>
                                        <div class="visitor-stat-box w-100">
                                            <h4 class="mb-0 text-color4 counter">329,53253825</h4>
                                            <h5 class="mb-0">عدد زوارنا الجدد</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="widget w-100 text-right">
                                            <h3>من نحن</h3>
                                            <ul class="mb-0 list-unstyled w-100">
                                                <li><a href="/about" title="">عن المعهد</a></li>
                                                <li><a href="/team" title="">مجلس الأمناء</a></li>
                                                <li><a href="/news" title="">أخبار المعهد</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="widget w-100 text-right">
                                            <h3>مساعدة</h3>
                                            <ul class="mb-0 list-unstyled w-100">
                                                <li><a href="/sendfaq" title="">أرسل سؤالك</a></li>
                                                <li><a href="/faq" title="">سؤال وجواب</a></li>
                                                <li><a href="/register" title="">التسجيل</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="widget w-100 text-right">
                                            <h3>روابط سريعة</h3>
                                            <ul class="mb-0 list-unstyled w-100">
                                                <li><a href="http://www.alomariya.org/" title="">موقع العمرية</a></li>
                                                <li><a href="/library" title="">المكتبة</a></li>
                                                <li><a href="/makalat" title="">مقالات</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Footer Data -->
                </div>
            </div>
        </footer>
        <div class="copyright w-100 text-center bg-color6 position-relative">
            <div class="container">
                <p class="mb-0">Copyright by <a href="/" title="">Alomariya Institute</a>. All Rights Reserved</p>
            </div>
        </div><!-- Copyright -->
    </main><!-- Main Wrapper -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/counterup.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/particles.min.js')}}"></script>
    <script src="{{asset('js/particle-int.js')}}"></script>
    <script src="{{asset('js/custom-scripts.js')}}"></script>
</body>

</html>