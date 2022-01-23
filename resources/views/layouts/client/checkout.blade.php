<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> --}}
        <!-- Core theme CSS (includes Bootstrap)-->
        <script src="{{ asset('js/form-validation.js') }}" defer></script>
        <link href="{{ asset('css/checkout.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" ></head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
      @livewireStyles
    </head>
    <body>

      
      @livewire('client.headerpayment',['title'=> $title ='Thanh Toán'])
      @livewire('client.checkout')
    @livewireScripts
    </body>
   
    <style>
      .text-error{
        color: red;
      }
      .terms{
        color: #ec9e44
      }
      .terms:hover{
        color: #ec9e44
      }
      .borderless td, .borderless th {
          border: none;
      }
      .warrap{
          padding: 10px;
          background: #e1e0cb; 
      }
      .title{
        padding: 5px 0;
        style="font-weight: 550;
        font-weight: 550;
        
      }
      .center {
        padding-top: 33%;
        
      }
      *:focus {
        outline: 0 !important;
      }
      .btn:focus {
        outline: none;
        box-shadow: none;
      }
      .btn {
        font-weight: 500;
        background:#151619; 
        color:white ;
        font-size: 15px;
       
      }
      .btn:hover, .active{
        background: #F7941D;
        color: white;
      }
      .component{
        background: #fff;
        border-radius: 10px;
      }
      .container{
        margin-top: 10px;
      }
      .rules{
        padding-top: 10px;
      }
      .accept-div{
        margin-top: 10px;
      }
      .detail-payment{
        margin: 5px 0;
        border: 1px groove;
        
      }
      .order-btn{
        float: right;
        background: #F7941D;
        width: 250px;
      
        border: none;
        text-align: center;
      }
      .order-btn:hover{
        background: #F7941D;
      }
      
      /* css for table */
      .table-responsive{
        max-height:450px;
      }
      thead{
        border-top-left-radius: 15%;
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
        background: #ec9e44; 
      }

      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover {
        background: #555; 
      }
      
    </style>    
</html>