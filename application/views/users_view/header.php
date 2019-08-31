<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>My Tour</title>
     <?= link_tag('assests/css/bootstrap.min.css') ?>
     <?= link_tag('assests/css/w3.css') ?>
     <?= link_tag('assests/css/demo.css') ?>
	 <?= link_tag('assests/css/footer-distributed-with-address-and-phones.css') ?>
	
	 <?= link_tag('assests/css/font-awesome.css') ?>
	 <?= link_tag('assests/css/font-face.css') ?>
    <style>
        body{
            padding: 0px;
            margin: 0px;
        }
    </style>
</head>	 

<body>
         <nav class="navbar navbar-default">
  <div style="padding:10px;font-size:20px" class="container-fluid">
    <div  class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a  class="navbar-brand" href="home">  <img  style="width:130px;display:inline" src="
      http://localhost/CI/img/logo.png" alt=""> </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= base_url('home') ?> ">Home <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Destination <span class="caret"></span></a>
          <ul  class="dropdown-menu" role="menu">
            <li><a style="font-size:15px" href=" <?= base_url('package/dhaka') ?>">Dhaka Division</a></li>
            <li><a style="font-size:15px" href="<?= base_url('package/chittagong') ?>">Chittagong Division</a></li>
            <li><a style="font-size:15px" href=" <?= base_url('package/sylhet') ?>">Sylhet Division</a></li>
            <!-- <li class="divider"></li> -->
            <li><a style="font-size:15px" href=" <?= base_url('package/khulna') ?>">Khulna Division</a></li>
            <!-- <li class="divider"></li> -->
            <li><a style="font-size:15px" href="<?= base_url('package/northBengal') ?> " >North Bengal</a></li>
          </ul>
        </li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">About</a></li>
       <li><a href="#">Dashboard</a></li>
        
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=" <?= base_url('user_signup') ?> ">Signup</a></li>
        <li>
        <?php if($islogged=='yes'){?>
        <a href="<?= base_url('user/user_logout') ?> ">Logout</a>
        <?php } else{?>
        <a href="<?= base_url('user') ?> ">Login</a>
        <?php }?>
        
        </li>
      </ul>
    </div>
  </div>
</nav>


