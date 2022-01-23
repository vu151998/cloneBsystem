<!DOCTYPE html>
<html lang="en" method="post" >
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" ></head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
      @livewireStyles
        <style>
            /* for category */
            .btnCate{
                background-color: #eee;
                color: #444;
                cursor: pointer;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                transition: 0.4s;
                padding: 0;
                margin: 0;
                
            }
             .accordion {
                background-color: #eee;
                color: #444;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 15px;
                transition: 0.4s;
               
                }
             .withoutadd{
                background-color: #eee;
                color: #444;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 15px;
                transition: 0.4s;
               
            }
           
            
            .activeCate, .btnCate:hover , .accordion:hover , .withoutadd:hover  {
                background-color: #eea54b;
                }

            .accordion:after {
                content: '\002B';
                color: #777;
                font-weight: bold;
                float: right;
                margin-left: 5px;
                }

            .activeCate:after {
                content: "\2212";
                }

            .panel {
                padding: 0 18px;
                background-color: white;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.2s ease-out;
                }
            /* end for category */
            .container-fluid{
                padding: 0;
                margin: 0;
            }
            .no-gutters{
                padding: 0;
                margin: 0;
            }
            .body-right{
                background: red;
                margin-left: 2%;
            }
            .search-bar{
                margin-bottom: 1%
            }
            @media screen and (min-width: 1600px) {
                .container {
                    max-width: (1600px - @grid-gutter-width);
                }
            }
            @media screen and (min-width: 1900px) {
                .container {
                    max-width: (1900px - @grid-gutter-width);
                }
            }
            .search-category{
                border: 1px groove ;
                margin-bottom: 3%;
                padding-bottom: 3%;
            }
            .search-trandemark{
                border: 1px groove ;
                margin-bottom: 3%;
                padding-bottom: 3%;
            }
            .inventory{
                border: 1px groove ;
                padding-left:1% ;
                padding-top:2%
            }
            .inventory .form-check{
                margin-left: 6%;
            }
            input::-webkit-input-placeholder { /* WebKit browsers */
                color:    rgb(78, 74, 74);
            }
            input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
                color:    rgb(78, 74, 74);;
            }
            input::-moz-placeholder { /* Mozilla Firefox 19+ */
                color:    rgb(78, 74, 74);;
            }
            input:-ms-input-placeholder { /* Internet Explorer 10+ */
                color:    rgb(78, 74, 74);;
            }
            *:focus, textarea:focus, select:focus{
                outline: none !important;
                box-shadow: none;
            }
            .products-empty{
                text-align: center;
            }
            .row-table:hover {
                background: #F7941D;
                color: white;
                cursor: pointer;
            }
            .detail-product{
             
                padding: 0 1%;
            }
            .inner-detail{
                border: 1px solid #F7941D;
            }
            .price{
                margin: 2% 0;
                padding: 0;
            }
            .actionbtn{
                margin-bottom: 5%;
            }
            .list-trademarks{
                max-height: 200px;
                margin-bottom: 10px;
                overflow:scroll;
                overflow-x: hidden;
                -webkit-overflow-scrolling: touch;
                padding: 0;
                margin: 0;
            }
            .list-trademarks button {
                padding: 0;
                margin: 0;
                background-color: Transparent;
                background-repeat:no-repeat;
                border: none;
                cursor:pointer;
                overflow: hidden;
                outline:none;
            }
        </style>
    </head>
    <body style="background: white" >
        <livewire:navbar-admin/>
        <div class="row g-0 container-fluid" id="body-row">
            <div class=" col-lg-2 no-gutters">
                <div class="row">
                    <div class="col-lg-11">
                        @livewire('owners.counter-admin')
                    </div>
                </div>
                
            </div>
           
            <div class="col-10 no-gutters" >
                <div>
                    <h3 class="mt-2">Sản phẩm</h3>
                </div>
                 <div class="detail-products" >
                    @livewire("owners.products.search-products")
                </div>
            </div>
        </div>
    </body>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("activeCate");
            var panel =this.parentNode.parentNode.nextElementSibling;
            if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 
          });
        }
        </script>
    @livewireScripts
</html>
