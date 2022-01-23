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
            .container-fluid{
                overflow-x: hidden;
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
            
            thead, tbody tr {
                display: table;
                width: 100%;
                table-layout: fixed;/* even columns width , fix width of table too*/
            }
            thead {
                width: calc( 100% - 1em )/* scrollbar is average 1em/16px width, remove it from thead width */
            }
            tbody {
                display: block;
                height: 200px;
                overflow: auto;
            }
          /* custom scolling */
          ::-webkit-scrollbar {
            width: 5px;
          }

          /* Track */
          ::-webkit-scrollbar-track {
            background: #f1f1f1; 
          }
          
          /* Handle */
          ::-webkit-scrollbar-thumb {
            background: #555; 
          }

          /* Handle on hover */
          ::-webkit-scrollbar-thumb:hover {
            background: #555; 
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
                <div class="banner">
                    @livewire('owners.discount-manager.banner')
                </div>
                <div class="row">
                    <div class ="col-6" style="padding-right: 0px">
                        @livewire('owners.discount-manager.list-discount')
                    </div>
                    <div class="col-6" style="">
                        @livewire('owners.discount-manager.detail-discount',['value' => '0'] )
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
    @livewireScripts
</html>
