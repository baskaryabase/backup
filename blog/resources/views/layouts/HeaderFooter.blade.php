
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
        <link rel="icon" href="<?php echo URL::asset('/image/use.png') ?>">
        @section('title')
        @show
    <!-- Bootstrap core CSS -->

          <script src="<?php echo URL::asset('/js/jquery.1.11.1.min.js') ?>"></script>

 
       <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"><link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">

  
  <link href="<?php echo URL::asset('/css/hover.css') ?>" rel="stylesheet" type="text/css">

     <link href="<?php echo URL::asset('/font-awesome.4.6.1/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
   
     <link href="<?php echo URL::asset('/css/timeline.css') ?>" rel="stylesheet" type="text/css">
    


  </head>

  <body>

   @section('header')
        @show

   


 @yield('content')  
            
           
     



@section('footer')
        @show
  </body>
   
</html>
