<div class="head">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid LightGray; padding:10px;">
        <div class="container px-6 px-lg-6">
            <div class="topbar">
                <ul class="navbar-nav">
                    <li style="margin-right: 5px"><a><i class="bi bi-headset text-warning"></i>  Khách lẻ: 0906679611 || Gara: 0909230574</a></li>
                    <li><a><i class="bi bi-envelope text-warning" style="margin-right: 5px" ></i>vulase05766@fpt.edu.vn<a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-6 address"> 
            <i class="bi bi-geo-alt text-warning"></i>
            <a>   E37, KDC Park Riverside, đường Bưng Ông Thoàn, phường Phú Hữu, TP Thủ Đức, TP HCM</a>
        </div>
    </nav>    

    <div class ="container-fluid barlogo">
        <nav class="navbar navbar-expand-lg">
            <div class="container ">
                <a href="/shophome" class="navbar-brand"><img class ="logo" src=
                "{{url('assets\img\logos\horizontal_on_white_by_logaster.png') }}"  alt="logo"></a>
                <div style="float: right">
                    <a class="navbar-toggler fas fa-search" data-toggle="collapse" data-target="#search" aria-controls="search"
                    aria-expanded="false" aria-label="Toggle navigation" style="border: none"></a>
                <a class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" style="border: none; "><i class="fas fa-list"></i></a></div>
                
                    {{-- search--}}
                <div class="collapse navbar-collapse" id="search">
                        <div class="col-lg-11 col-12">
                            <div class="input-group" style="text-align: center">
                                <div class="search-box">
                                    {{-- <a name="" id="myBtn" class="btn  search-box" href="#" role="button" style="width: 600px; border: 1px groove"> Tìm kiếm sản phẩm .....</a> --}}
                                    <button id="myBtn" class="  search-box">  Tìm kiếm sản phẩm .....</button>
                                </div>
                                
                                <div class="input-group-append">
                                <button class="btnn" type="button"><i class="bi bi-search text-white"></i></button>
                                </div>
                            </div>
                       
                        </div>
                       
                    </div>
                    <div class=" container col-lg-1 col-md-1 col-1" style="margin: 0 1%">
                        <a href="{{ route('wishlist.index') }}" class ="btncart  " > 
                        <i class="bi bi-heart" style="color: white" ></i><a>
                            
                    </div>
                    <div class=" container col-lg-1 col-md-1 col-1 ">
                        <a href="{{ route('shoppingcart.index') }}" class ="btncart"> 
                            <i class="bi-cart-fill me-1" style="color: white" ></i><span class="badge bgr text-dark ms-1 rounded-pill">
                                {{ $cart_count }} </span><a>
                    </div>
                    
                </div>
                
            </div>
        </nav>
    </div>
    <div id="myModal" class="modal">
        <span class="close"></span>
        <!-- Modal content -->
        <div class="modal-content">
            @livewire('client.search.suggestion')
        </div>
      
    </div>
</div>
<style>
   
    /* body {font-family: Arial, Helvetica, sans-serif;} */
    .search-box{
     font-size: 15px;
     width: 100%;
     height: 50px;
     /* border-top-left-radius: 10%;
     border-bottom-left-radius: 10%; */
     background: white;
     text-align: left;
     padding-left: 5%;
    }
/* The Modal (background) */
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 6%; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    
     /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 35%;
    
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
    }

    @keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
    }



    
    .bgr{
      background: white;
   }
   .bgr :hover{
      background: #333;
   }`   
    .address{
        float: right;
    }
    .logo{
            height: auto;
            width: auto;
        }
    .btnn {
        height: 50px;
        line-height: 53px;
        width: 62px;
        text-align: center;
        font-size: 18px;

        background: #333333;
        position: absolute;
        /* right: -2px;
        top: -1px; */
        border: none;
        border-radius: 0 5px 5px 0;
        -webkit-transition: all 0.4s ease;
        -moz-transition: all 0.4s ease;
        transition: all 0.4s ease;
        }
    .btnn:hover{
        
        background:#F7941D;
        }
    .btncart{
        height: 50px;
        line-height: 53px;
        width: 100px;
        text-align: center;
        font-size: 18px;
        position: absolute;
        right: 0;
        background: #333333;
        
        border: none;
        border-radius: 20px 20px 20px 20px;
        -webkit-transition: all 0.4s ease;
        -moz-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }
    .btncart:hover{
    background: #F7941D;
    }
    .btncart:hover .bi-cart-fill{
    color: white;
    }
</style>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>