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
            .services{
                padding-right: 1%;
            }
            .detail-services{
                margin-top: 1%;
            }
            .services-empty{
                text-align: center;
            }
            .modal-lg {
                max-width: 75% !important;
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
                    <h3 class="mt-2">Dịch vụ</h3>
                </div>
                 <div class="services" >
                    @livewire("owners.services.services-manager")
                </div>
            </div>
        </div>
    </body>
   
    @livewireScripts
</html>
