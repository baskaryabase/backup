 
 @section('new_header') 
    <link href="http://dev.startupsclub.org/font-awesome.4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">

    <link href="http://dev.startupsclub.org/css/all-skins.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="http://dev.startupsclub.org/admin/css/AdminLTE.min.css" rel="stylesheet" type="text/css"> -->

    <!-- Bootstrap Core CSS -->
    <!--link href="css/bootstrap.min.css" rel="stylesheet"-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/responsive.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/animate.css') ?>">
    <link href="<?php echo URL::asset('/css/custom.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
      <link href="<?php echo URL::asset('/admin/css/skins/_all-skins.min.css') ?>" rel="stylesheet" type="text/css">

    


    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            
                <div class="sidebar-icon" style="font-size:20px;cursor:pointer" onclick="openNav();">
            
          </div>
            <div class="navbar-header">

            <a class="navbar-brand" href="/"><img src="http://dev.startupsclub.org/image/logo_head.png"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" id="navbar">
                    <!--li class="lead-menu-item">
                        <a href="lead-generation.php" ><span class="glyphicon glyphicon-home"></span></a>
                    </li-->
                    <li class="lead-menu-item dropdown keep-open">
                        <a href="javascript:void(0)"data-toggle="dropdown" data-target="#">Know us<b class="caret" id="cssmenu"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" id="drop">
                            <li class="dropdown-submenu"><a href="#">What we do</a></li>
                            <li class="dropdown-submenu"><a href="#">Team</a></li>
                            <li class="dropdown-submenu"><a href="/family">Family</a></li>
                            <li class="dropdown-submenu"><a href="/contact">Contact</a></li>
                        </ul>
                    </li>
                    <li class="lead-menu-item dropdown keep-open">
                        <a href="javascript:void(0)"data-toggle="dropdown" data-target="#">Events<b class="caret" id="cssmenu"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" id="drop">
                            <li class="dropdown-submenu"><a href="/events">Meetups</a></li>
                            <li class="dropdown-submenu"><a href="#">Knowledge session</a></li>
                            <li class="dropdown-submenu"><a href="/revup">Revup</a></li>
                            <li class="dropdown-submenu"><a href="#">Calender</a></li>
                        </ul>
                    </li>
                    <li class="lead-menu-item">
                        <a href="/demoday">Demoday</a>
                    </li>
                    <li class="lead-menu-item">
                        <a href="/find">Find</a>
                    </li>
                    <li class="lead-menu-item">
                        <a href="#">Ask</a>
                    </li>
                    <li class="lead-menu-item">
                        <a href="/scin">SCIN</a>
                    </li>
                    <li class="lead-menu-item">
                        <a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a>
                    </li>
                    <li class="lead-menu-item">
                        <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </li>
                    <li class="lead-menu-item">
                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </li>
                    
                                <!-- <li class=" lead-menu-item dropdown keep-open">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs">Admin</b> </a> -->
                        <!-- .user-login -->
                        <!-- <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="javascript:void(0)"></i>  Login</a></li>
                            
                            <li><a href="#"></i>  Signup</a></li>
                        </ul> -->
                        <!-- /.user-login -->
                    <!-- </li> -->


                                            
                                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<script src="<?php echo URL::asset('/js/header.js') ?>"></script>
    <link href="<?php echo URL::asset('/css/common.css') ?>" rel="stylesheet" type="text/css">

<script src="<?php echo URL::asset('/bootstrap.3.3.6/js/bootstrap.min.js') ?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
<script>
     function openNav() {
    document.getElementById("mySidenav").style.width = "0";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "250px";
    }
</script>

@stop
