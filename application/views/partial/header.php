<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Arsitekuh - Solusi Untuk Rumah Impianmu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/css/bootstrap.css" rel="stylesheet" />
  <link href="<?= base_url('assets') ?>/css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="<?= base_url('assets') ?>/css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/css/jcarousel.css" rel="stylesheet" />
  <link href="<?= base_url('assets') ?>/css/flexslider.css" rel="stylesheet" />
  <link href="<?= base_url('assets') ?>/css/style.css" rel="stylesheet" />
  <link href="<?= base_url('assets') ?>/css/whatsapp.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="<?= base_url('assets') ?>/skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('assets') ?>/ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets') ?>/ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('assets') ?>/ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="<?= base_url('assets') ?>/ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="assets/ico/favicon.jpg" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  


  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
 <?php
  foreach ($kontak as $vk) {
  }
  ?>
<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
        <div class="hidden-top-inner container">
      <div class="container">
        <div class="row">
          <div class="span12">
            <ul>
              <li>Hubungi Kami di <i class="icon-phone"></i> <?php echo $vk->notelp1 ?> - <?php echo $vk->notelp2 ?> </li>
              <li><a href="https://www.instagram.com/arsitekuh/" target="blank"data-placement="bottom" title="Instagram"><i class="icon-camera icon-round icon-32"></i>Instagram</a></li>
              <li><a href="https://www.facebook.com/Arsitekuh-114802773683466/?ref=nf&hc_ref=ARSmbZlx8fgarNPehdiDw8zrAHVp5ZI4mvfsRQ3jN7VqjMj4XwNIGLZN21OssjXKOVs" target="blank" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-32"></i>Facebook</a>
            </ul>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <!--<ul>
                <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
              </ul> -->
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign up</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input type="text" id="inputText" placeholder="Username">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSigninPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign in</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="<?= base_url('home'); ?>"><img src="assets/img/logo.jpg" alt="" class="logo" /></a>
            </div>
          </div>
          <div class="span7">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li>
                      <a href="<?= base_url('home'); ?>"><strong>Home</strong> </a>
                    </li>
                     <li>
                      <a href="<?= base_url('about'); ?>"><strong>Tentang Kami</strong> </a>
                    </li>
                    <li class="dropdown">
                      <a href="#"><strong>Layanan Kami</strong> <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li class="dropdown"><a href="#">Jasa Desain Rumah <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="<?php echo base_url('jasadesainrumahinterior'); ?>">Interior</a></li>
                            <li><a href="index-alt2.html">Exterior</a></li>
                          </ul>
                        </li>
                        <li class="dropdown"><a href="#">Jasa Kontraktor <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="index.html">Interior</a></li>
                            <li><a href="index-alt2.html">Exterior</a></li>
                          </ul>
                        </li>
                        <li clas="dropdown"><a href="#">Gambar Kerja</a></li>
                        <li clas="dropdown"><a href="#">Gambar IMB</a></li>
                        <li clas="dropdown"><a href="#">RAB</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#"><strong>Portfolio</strong> <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li class="dropdown"><a href="#">Desain Rumah <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="<?php echo base_url('desainRumahInterior');  ?>">Desain Interior</a></li>
                            <li><a href="<?php echo base_url('desainRumahEksterior'); ?>">Desain Exterior</a></li>
                          </ul>
                        </li>
                        <li class="dropdown"><a href="#">Kontraktor <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="<?php echo base_url('desainKontraktorInterior'); ?>">Interior</a></li>
                            <li><a href="<?php echo base_url('desainKontraktorEksterior'); ?>">Exterior</a></li>
                          </ul>
                        </li>
                        <li clas="dropdown"><a href="#">Gambar Kerja</a></li>
                        <li clas="dropdown"><a href="#">Gambar IMB</a></li>
                        <li clas="dropdown"><a href="#">RAB</a></li>
                      </ul>
                    </li>
                    <!--<li class="dropdown">
                      <a href="#">Blog <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                        <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                        <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                      </ul>
                    </li> -->
                    <li>
                      <a href="https://blog.arsitekuh.com/wp/" target="_blank"><strong>Blog</strong> </a>
                    </li>
                    <li>
                      <a href="<?= base_url('contact'); ?>"><strong>Kontak</strong> </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>


    <!-- end header -->
