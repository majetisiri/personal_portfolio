<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128566543-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-128566543-1');
    </script>

    <!-- Title  -->
    <title>Srividya Majeti | Home</title>

</head>
<?php

include 'views.php';

?>
<style> 
    video::-webkit-media-controls-overlay-play-button {
      display: none;
    }

    /* CSS used here will be applied after bootstrap.css */

    .card {
        -webkit-column-count: 1;
        -moz-column-count: 1;
        column-count: 1;
    }

  /*
  Small devices (landscape phones, 34em and up ( 544px ))
  */
    @media (min-width: 34em) {
        .card-columns {
            -webkit-column-count: 2;
            -moz-column-count: 2;
            column-count: 2;
        }
        
    }

  /*
  Medium devices (tablets, 48em and up (768px))
  */
    @media (min-width: 48em) {
        .card-columns {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
        }

    }

  /* 
  Large devices (desktops, 62em and up(992px) )
  */
    @media (min-width: 62em) {
        .card-columns {
            -webkit-column-count: 6;
            -moz-column-count: 6;
            column-count: 6;
        }
        
    }
     
  /*
  Extra large devices (large desktops, 75em and up (1200px))
  */
    @media (min-width: 75em) {
        .card-columns {
            -webkit-column-count: 7;
            -moz-column-count: 7;
            column-count: 7;
        }
    }
</style>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="showbox">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>
        <div class="questions-area text-center">
            <p>Welcome to Srividya Majeti's page!</p>
        </div>
    </div>


   
  <!-- Header Area Start -->
    <header class="header-area bg-img" style="background-color: black">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="index.html" style="color: white"><strong>Srividya Majeti</strong></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#studioMenu" aria-controls="studioMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                            <div class="collapse navbar-collapse" id="studioMenu">
                                <!-- Menu Area Start  -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about-me.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="travel.html">Travel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="me-time.html">Me time</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dance.html">Dance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="me-diaries.html">My Diaries</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End  -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="blog-area mt-100">
        <div class="row" style="margin-left: 4%;margin-right: 4%;">
            <div style="padding: 20px;">
                <div class="card" style="width: 28rem;padding-left: 20px;padding-right: 20px;">
                  <video id="1" class="videoPlayer" onclick="getVideoId(this)" width="400" controls controlsList="nodownload">
                        <source src="img/dance/barso-re.mp4" type="video/mp4">
                    </video>
                  <div class="card-body">
                    <h5 class="card-title">
                        Barso re
                        <p></p>
                    </h5>
                  </div>
                </div>
            </div>
            <div style="padding: 20px;">
                <div class="card" style="width: 28rem;padding-left: 20px;padding-right: 20px;">
                  <video id="2" class="videoPlayer" onclick="getVideoId(this)"  width="400" controls controlsList="nodownload">
                  <source src="img/dance/jimmiki-kamal.MOV" type="video/mp4">
                </video>
                  <div class="card-body">
                    <h5 class="card-title">
                        Jimmiki Kamal
                        <p></p>
                    </h5>
                  </div>
                </div>
            </div>
            <div style="padding: 20px;">
                <div class="card" style="width: 28rem;padding-left: 20px;padding-right: 20px;">
                  <video id="3" class="videoPlayer" onclick="getVideoId(this)"  width="400" controls controlsList="nodownload">
                    <source src="img/dance/laila-main-laila.mp4" type="video/mp4">
                  </video>
                  <div class="card-body">
                    <h5 class="card-title">
                        Laila main Laila
                        <p></p>
                    </h5>
                  </div>
                </div>
            </div>
            <!-- <div style="padding: 20px;">
                <div class="card" style="width: 28rem;padding-left: 20px;padding-right: 20px;">
                  <video id="3" class="videoPlayer" onclick="getVideoId(this)"  width="400" controls controlsList="nodownload">
                    <source src="img/dance/shape-of-you.mp4" type="video/mp4">
                  </video>
                  <div class="card-body">
                    <h5 class="card-title">
                        Shape of you- Classical
                        <p></p>
                    </h5>
                  </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->


    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.min.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.min.css" rel="stylesheet">


    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.min.js"></script>
    <!-- Active js -->
    <script src="js/active.min.js"></script>
    <script type="text/javascript">
        function getVideoId($this){
            if ($this.paused == false) {
                $this.pause();
                $this.firstChild.nodeValue = 'Play';
            } else {
                $this.play();
                $this.firstChild.nodeValue = 'Pause';
                $.ajax({
                    url : "addView.php", 
                    type : "POST",
                    data: {"id":$this["id"]},
                    success: function(response){
                        $result=response;
                    },
                   async: false
                });
            }
        }

        $( document ).ready(function() {
            $videos_arr=document.getElementsByClassName("videoPlayer");
            for (i=0;i<$videos_arr.length;i++){
                $id=$videos_arr[i]["id"]; 
                $.ajax({
                    url : "getViews.php", 
                    type : "POST",
                    data: {"id":$id},
                    success: function(response){
                        $result=response;
                    },
                   async: false
                });
                $elem=document.getElementById($id);
                console.log($("#"+$id).siblings(".card-body").children().children().text($result+" views"));
            }
        });
    </script>
</body>

</html>