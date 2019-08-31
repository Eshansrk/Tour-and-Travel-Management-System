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
      <a  class="navbar-brand" href="<?= base_url('admin_dashboard') ?>">  <img  style="width:130px;display:inline" src="
      http://localhost/CI/img/logo.png" alt=""> </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= base_url('admin_dashboard') ?> ">Admin Panel <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">View <span class="caret"></span></a>
          <ul  class="dropdown-menu" role="menu">
            <li><a style="font-size:15px" href=" <?= base_url('admin/package') ?>"> Package Details</a></li>
            <li><a style="font-size:15px" href="<?= base_url('admin/booking') ?>">Booking Details</a></li>
            <li><a style="font-size:15px" href=" <?= base_url('admin/signup') ?>"> Signup users</a></li>
            <li><a style="font-size:15px" href=" <?= base_url('admin/feedback') ?>"> Feedback</a></li>
          </ul>
        </li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">About</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li>
        <a href="<?= base_url('user/user_logout') ?> ">Logout</a>

        
        </li>
      </ul>
    </div>
  </div>
</nav>


