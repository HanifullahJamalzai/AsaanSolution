<!DOCTYPE html>
<html lang="en">

<head>
  <?php $assets = base_url().'assets'; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AsaanSolution</title>
  <meta name="description" content="Software Solution Company">
  <meta name="keywords" content="website, application, mobile applications, database, design, graphic, freelancing">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?= $assets; ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= $assets; ?>/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?= $assets; ?>/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?= $assets; ?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?= $assets; ?>/css/mystyle.css">

</head>

<body>
  <!--header-->
  <header class="main-header" id="header">
    <div class="bg-color">
      <!--nav-->
      <nav class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>

              <a href="index.html" class="navbar-brand">AsaanSolution</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
                <?php if(isset($_SESSION['user_pn'])){
                  echo '
                        <li>
                         <a href="'.base_url().'home/logout">Logout</a>
                        </li>

                        <li>
                         <a href="'.base_url().'home/home">Home</a>
                        </li>
                          
                         <li>
                        <a href="'. base_url() .'home/profile">Profile</a>
                        </li>';
                } else{
                  echo '
                      <li class="active"><a href="#header">Home</a></li>
                      <li><a href="#services">Services</a></li>
                      <li><a href="#team">TEAM</a></li>
                      <li><a href="#contact">Contact</a></li>
                      <li><a href="#contact">Login</a></li>

                        ';
                }?>

               
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!--/ nav-->
      <div class="container text-center">
        <div class="wrapper wow fadeInUp delay-05s">
          <h2 class="top-title">Software Design & Development</h2>
          <h3 class="title">Solution</h3>
          <h4 class="sub-title">We Do the Best</h4>
          <br>
          <br>
          <br>
          <br>

        </div>
      </div>
    </div>
  </header>
  <!--/ header-->
  <!---->