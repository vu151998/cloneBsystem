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
<!-- Navigation-->
    <div class ="container ">
        <nav class="navbar navbar-expand-lg ">
            <div class="container" style="padding-top: 0; margin-top: 0; ">
                <div class="image-logo" > <a href="/shophome" class="navbar-brand"><img class ="logo" src=
                    "{{url('assets\img\logos\horizontal_on_white_by_logaster.png') }}"  alt="logo"></a>
                    </div><div class="title" style="border-left: #F7941D 3px solid; float:left">
                    <h4>{{ $show }}</h4>
                </div>    
            </div>
        </nav>
    </div>
</div>
<style>
    
    .title h4{
        margin-left: 5px;
        border-bottom:2px groove #F7941D  ;
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