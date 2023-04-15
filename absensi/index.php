<?php 
include '../config/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ABSENSI MITRA LONGFORM SP 2020 BPS KABUPATEN DOMPU</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->

    <link rel="icon" href="..\files\assets\images\bps.svg" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- jquery file upload Frame work -->
    <!-- <link href="..\files\assets\pages\jquery.filer\css\jquery.filer.css" type="text/css" rel="stylesheet">
    <link href="..\files\assets\pages\jquery.filer\css\themes\jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="../files/assets/dropify/css/dropify.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\feather\css\feather.css">
    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\j-pro\css\demo.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\j-pro\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\j-pro\css\j-pro-modern.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\sweetalert\sweetalert.css">
    <script src="..\files\assets\sweetalert\sweetalert.min.js"></script>
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="index.php">
                        <img class="img-fluid" src="..\files\assets\images\logo2.png" alt="Theme-Logo" width = "70%">
                    </a>
                </div>

                <div class="navbar-container container-fluid">

                    <ul class="nav-right">
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="..\files\assets\images\avatar-4.png" class="img-radius" alt="User-Profile-Image">
                                    <span><?= $_SESSION['nama'] ;?></span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="../login/logout.php">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidebar chat start -->
        <div id="sidebar" class="users p-chat-user showChat d-none">
            <div class="had-container">
                <div class="card card_main p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-inner-header">
                            <div class="back_chatBox">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar inner chat start-->

        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigatio-lavel">MENU</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="active">
                                <a href="index.php">
                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                    <span class="pcoded-mtext">ABSEN</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="../login/logout.php">
                                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                    <span class="pcoded-mtext">LOG OUT</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>ABSENSI HARIAN LONGFORM SP 2020</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->
                                    
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Ready suggestion card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>SELAMAT DATANG <?= $_SESSION['nama'] ;?></h5>
                                                        <span>Silahkan Melakukan Absensi</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">
                                                            <form action="upload.php" method="post" enctype="multipart/form-data" class="j-pro" id="j-pro">
                                                                <!-- end /.header-->
                                                                <div class="j-content">
                                                                    <input type="hidden" name="username" id="username" value="<?= $_SESSION['username'] ;?>">
                                                                    <input type="hidden" name="nama" id="nama" value="<?= $_SESSION['nama'] ;?>">
                                                                    <!-- start name -->
                                                                    <!-- end name -->
                                                                    <!-- start email -->
                                                                    <!-- end email -->
                                                                    <!-- start country -->
                                                                    <div class="j-unit">
                                                                        <label class="j-input j-select">
                                                                            <select name="status" onchange="return status_val(this.value);">
                                                                                <option value="online" selected="" class="text-primary">ONLINE</option>
                                                                                <option value="offline">OFFLINE</option>
                                                                            </select>
                                                                        </label>
                                                                    </div>

                                                                    <div class="j-unit">
                                                                        <label class="j-input j-select">
                                                                            <select name="nbs">
                                                                                <option value="" selected="">PILIH NOMOR BLOK SENSUS</option>
                                                                                <option value="100230">100230</option>
                                                                                <option value="100231">100231</option>
                                                                                <option value="100232">100232</option>
                                                                                <option value="100233">100233</option>
                                                                                <option value="100234">100234</option>
                                                                            </select>
                                                                        </label>
                                                                    </div>
                                                                    <!-- end country -->
                                                                    <!-- start subject -->
                                                                    <div class="j-unit">
                                                                        <div class="j-input">
                                                                            <label class="j-icon-left" for="ruta">
                                                                            <i class="icofont icofont-users-alt-2"></i>
                                                    </label>
                                                                            <input type="text" id="ruta" name="ruta" placeholder="JUMLAH RUMAH TANGGA" required />
                                                                        </div>
                                                                    </div>
                                                                    <!-- end subject -->
                                                                    <!-- start message -->
                                                                    <!-- end message -->
                                                                    <!-- start file -->

                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5>FOTO</h5>
                                                                        </div>
                                                                        <div class="card-block">
                                                                        <input type="file" id="file" name="file" class="dropify" data-default-file=""/>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end file -->
                                                                    <div class="diva" id="diva">
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <div class="input-group input-group-button">
    
                                                                                <span class="input-group-addon">
                                                                                <i class="icofont icofont-location-pin"></i>
                                                                                </span>
                                                                                
                                                                                <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="LOKASI" required readonly/>
                                                                                
                                                                                <span class="input-group-addon btn btn-primary" id="basic-addon10" onclick="getLocation();">
                                                                            <span class="">DETECT</span>
                                                                        </span>
                                                                                
                                                                                </div>
    
    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end /.content -->
                                                                <div class="j-footer">
                                                                    <button type="submit" class="btn btn-primary" name="submit" id="submit">KIRIM</button>
                                                                    <button type="reset" class="btn btn-default m-r-20">RESET</button>
                                                                </div>
                                                                <!-- end /.footer -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Ready suggestion card end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Warning Section Ends -->
    <!-- Required Jquery -->

    <script type="text/javascript" src="..\files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- j-pro js -->
    <script type="text/javascript" src="..\files\assets\pages\j-pro\js\jquery.ui.min.js"></script>
    <script type="text/javascript" src="..\files\assets\pages\j-pro\js\jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="..\files\assets\pages\j-pro\js\jquery.j-pro.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="..\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="..\files\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="..\files\bower_components\modernizr\js\css-scrollbars.js"></script>

    <!-- i18next.min.js -->
    <script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>

    <!-- dropify -->
    <script src="../files/assets/dropify/js/dropify.min.js"></script>
    <script src="../files/assets/dropify/js/form-file-uploads.min.js"></script>
    <!-- jquery file upload js -->
    <!-- <script src="..\files\assets\pages\jquery.filer\js\jquery.filer.min.js"></script>
    <script src="..\files\assets\pages\filer\custom-filer.js" type="text/javascript"></script>
    <script src="..\files\assets\pages\filer\jquery.fileuploads.init.js" type="text/javascript"></script> -->
    <!-- Custom js -->

    <script src="..\files\assets\js\pcoded.min.js"></script>
    <script src="..\files\assets\js\vartical-layout.min.js"></script>
    <script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="..\files\assets\js\script.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<!-- script offline online -->
<script>
    function status_val(data) {
        if(data=='online')
    {
        $('#diva').css('display','block');
    }
    else if(data=='offline')
    {
        $('#diva').css('display','none');

    }
    }
</script>

<!-- CUSTOM SCRIPT -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script>
            var lokasi = document.getElementById("lokasi");

            function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
                lokasi.value = "Geolocation is not supported by this browser.";
            }
            }

            function showPosition(position) {
            lokasi.value = position.coords.latitude+","+position.coords.longitude;
            }
</script>

<script>
<?php
if (isset($_POST['submit'])) {
?>
e.preventDefault();
var fd = new FormData(this);
   $.ajax({
      url: 'upload.php',
      type: 'post',
      data: fd,
      contentType: false,
      processData: false,
   })
<?php
}
?>
</script>
</body>

</html>
