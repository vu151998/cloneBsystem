<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BigGara</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/shophome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/shophome.js') }}" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .navbarSupportedContent {
            position: relative;
        }

        .header-inner {
            position: sticky
        }

        .top-container {
            text-align: center;
        }

        .header {
            z-index: 1;
        }

        .content {
            padding: 16px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky+.content {
            padding-top: 102px;
        }

        .active-menu {
            background: #f7941d !important;
        }

    </style>
    @livewireStyles
</head>

<body>
    <div id="home">   @livewire('client.header')</div>
    <div id="navbarSupportedContent" class="header">
        <div class="header-inner">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4 col-12">
                        <div class="nav-item">
                            <div class="dropdown">
                                <button class="all-category" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <h2 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>Danh mục
                                        sản phẩm</h2>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 90%">
                                    @if (is_array($categories) || is_object($categories))
                                        @foreach ($categories as $element)
                                            @if (array_key_exists('children', $element))
                                                <div class="dropright">
                                                    <a class="dropdown-item" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        onclick="window.location.href='/productlist/{{ $element['category_id'] }}'">
                                                        {{ $element['category_name'] }} <i class="bi bi-chevron-right"
                                                            style="float: right"></i>
                                                    </a>
                                                    <div class="dropdown-menu" style="width: 90%; margin-left:-1px">
                                                        @foreach ($element['children'] as $sub)
                                                            @if (array_key_exists('children', $sub))
                                                                <div class="dropright">
                                                                    <a type="button" class="dropdown-item "
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false"
                                                                        onclick="window.location.href='/productlist/{{ $sub['category_id'] }}'">
                                                                        {{ $sub['category_name'] }} 
                                                                        <i class="bi bi-chevron-right"
                                                                            style="float: right"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu" style="margin-left: -1px">
                                                                        <div class="dropdown-item" style="background: #fff; border-right: 1px solid #e5e5e5;">
                                                                            <div class="row" >
                                                                                @foreach ($sub['children'] as $last)
                                                                                    <div class="col-12" style="border-bottom: 1px solid #e5e5e5;">
                                                                                        <div class="mx-1 my-1">
                                                                                            <a style="color: black; text-decoration: none"
                                                                                                href="/productlist/{{ $last['category_id'] }}">
                                                                                                {{ $last['category_name'] }}
                                                                                                {{-- <i class="bi bi-chevron-right" style="float: right"> --}}
                                                                                                </i>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div>
                                                                                            <a
                                                                                                href="/productlist/{{ $last['category_id'] }}">
                                                                                                {{-- <i class="bi bi-chevron-right"
                                                                                                style="float: right"></i>     --}}
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-divider"></div>
                                                            @else
                                                                <a class="dropdown-item"
                                                                    href="/productlist/{{ $sub['category_id'] }}">{{ $sub['category_name'] }}</a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif
                                                        @endforeach
                                                        <!-- Dropdown menu links -->
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider"></div>
                                            @else
                                                <a class="dropdown-item"
                                                    href="/productlist/{{ $element['category_id'] }}">{{ $element['category_name'] }}</a>
                                                <div class="dropdown-divider"></div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-8 col-md-8 col-12">
                        <div class="stylenavbar" id="menu-header">
                            <ul class="list-group list-group-horizontal">
                                <li style="border-radius: 0px" class="active-menu">
                                    {{-- <p style="padding-right: 2%; padding-left: 1%">
                                    <p> --}}
                                    <a href="#home" class="active-menu" style="text-decoration: none;">
                                        <p>Trang chủ</p>
                                    </a>
                                </li>
                                <li class="list-group-item nav-item">
                                    <a href="#portfolio" style="text-decoration: none;">
                                        <p>Dịch vụ</p>
                                    </a>
                                </li>
                                <li class="list-group-item nav-item">
                                    <a href="#product" style="text-decoration: none;">
                                        <p>Sản phẩm</p>
                                    </a>
                                </li>
                                {{-- <li class="list-group-item  nav-item">
                                    <p>Cửa hàng</p>
                                </li> --}}
                                <li class="list-group-item nav-item">
                                    <a href="#about" style="text-decoration: none;">
                                        <p>Về chúng tôi</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="hero-slider">
        <!-- Single Slider -->
        <div class="single-slider container"
            style="background-image: url('assets/img/sale/271063914_631797278238803_7193812894023257802_n.png')">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-9 offset-lg-3 col-12">
                        <div class="text-inner">
                            {{-- <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <div class="hero-text">
                                                <h1><span>Giảm giá 15%</span>Camera hành trình</h1>
                                                <p>Thời gian hết giảm giá còn 
                                                 <br> 
                                                 <div id="time-elapsed"></div>
                                                <div class="button">
                                                    <a href="#" class="btn">Đi tơi ngay!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </section>

   

    <section class="page-section" id="portfolio">
        @livewire('client.homepage.service')
    </section>

    <!-- Start Product Area -->
    <section id="product" style="padding: 0">
        @livewire('client.homepage.tredding')
    </section>

    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fas fa-rocket"></i>
                        <h4>Miễn phí giao hàng</h4>
                        <p>Miễn phí giao hàng đối với tất cả sản phẩm</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fas fa-sync-alt"></i>
                        <h4>Miễn phí đổi trả</h4>
                        <p>Đổi trả miễn phí trong vòng 30 ngày</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fas fa-lock"></i>
                        <h4>Bảo mật thông tin</h4>
                        <p>Bảo mật tất cả mọi thông tin của khách hàng</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="fas fa-tags"></i>
                        <h4>Ưu đãi</h4>
                        <p>BigGarage luôn có những ưu đãi hấp dẫn với các sản phẩm và dịch vụ</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>


    <div class="cartdetail" tabindex="-1" role="dialog" aria-hidden="true" style="display: none">
        @livewire('client.shoppingcart')
    </div>

    <footer id="about" class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Big Garage</p>
        </div>
    </footer>

    <script>
        $(document).ready(function() {

            setTimeout(function() {
                $('loader-wrapper').fadetoggle();
            }, 45000000000);

        });

        document.getElementById("btncart").addEventListener("click", function() {
            document.querySelector(".cartdetail").style.display = "flex";
        });
    </script>
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">E37, KDC Park Riverside, đường Bưng Ông Thoàn, phường Phú Hữu, TP Thủ Đức, TP HCM</p>
        </div>

    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    {{-- <script src="js/scripts.js"></script> --}}

    <script>
        window.onscroll = function() {myFunction()};
        
        var header = document.getElementById("navbarSupportedContent");
        var sticky = header.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }

        var lastId,
            topMenu = $("#menu-header"),
            topMenuHeight = topMenu.outerHeight()+15,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function(){
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
            });

        // Bind click handler to menu items
        // so we can get a fancy scroll animation
            menuItems.click(function(e){
            var href = $(this).attr("href"),
                offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
            $('html, body').stop().animate({ 
                scrollTop: offsetTop
            }, 300);
            e.preventDefault();
            });

            // Bind to scroll
            $(window).scroll(function(){
            // Get container scroll position
            var fromTop = $(this).scrollTop()+topMenuHeight;
            
            // Get id of current scroll item
            var cur = scrollItems.map(function(){
                if ($(this).offset().top < fromTop)
                return this;
            });
            // Get the id of the current element
            cur = cur[cur.length-1];
            var id = cur && cur.length ? cur[0].id : "";
            
            if (lastId !== id) {
                lastId = id;
                // Set/remove active class
                menuItems
                    .parent().removeClass("active-menu")
                    .end().filter("[href='#"+id+"']").parent().addClass("active-menu");
            }                   
            });
        </script>


    @livewireScripts
</body>

</html>
