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
               <li><a href="<?= base_url('user/account') ?>">Dashboard</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=" <?= base_url('user_signup') ?> ">SIGNUP</a></li>
        <li>
        <a href="<?= base_url('user/user_logout') ?> ">Logout</a>   
        </li>
      </ul>
    </div>
  </div>
</nav>







<div class="container">
    <!-- <form class="form-horizontal"> -->
    <?php echo form_open('user_booking/booking'); ?>
  <fieldset>
    <legend>Booking Form</legend>
     <?php if( $this->session->flashdata('successful')): ?>
        <div class="row">
            <div class="col-lg-6">
               <div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Thank You!</strong> Your booking has been processed successfully. <a href="<?php base_url('user_dashboard')?>" class="alert-link">Click here to see your account</a>.
</div> 
            </div>
        </div>
        <?php endif; ?>
     <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Package ID</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'pid','class'=>'form-control','placeholder'=>'Your selected package ID','value'=>set_value('pid')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-4">
            <?php echo form_error('pid') ?>
        </div>
    </div>
            
       <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Fullname</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'fullname','class'=>'form-control','placeholder'=>'Your name','value'=>set_value('fullname')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-4">
            <?php echo form_error('fullname') ?>
        </div>
    </div>
    
    
    <div class="form-group">
      <label class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="gender" id="optionsRadios1" value="male" checked="">
            Male
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="gender" id="optionsRadios2" value="female">
        Female          </label>
        </div>
      </div>
    </div>
        
   <div class="row">
       <div class="col-lg-8">
            <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Mobile NO</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'mobile','class'=>'form-control','placeholder'=>'Mobile NO','value'=>set_value('mobile')]) ?>
        <!-- <input type="password" class="form-control" id="inputPassword" placeholder="Password"> -->
      </div>
    </div><br><br>
       </div>
       <div class="col-lg-4">
           <?php echo form_error('mobile') ?> 
       </div>
   </div>
    
    
    
     
    
    
     <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Your_Email','value'=>set_value('email')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-4">
            <?php echo form_error('email') ?>
        </div>
    </div>
    
    
     <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'address','class'=>'form-control','placeholder'=>'Address','value'=>set_value('address')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-4">
            <?php echo form_error('address') ?>
        </div>
    </div>
    
    
         <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Birth Date</label>
      <div class="col-lg-10">
       <?php echo form_input(['type'=>'date','name'=>'birthday','class'=>'form-control','placeholder'=>'Birth Date','value'=>set_value('birthday')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-4">
            <?php echo form_error('birthday') ?>
        </div>
    </div>
    
             <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">No. of Adults</label>
      <div class="col-lg-10">
       <?php echo form_input(['type'=>'number','name'=>'adults','class'=>'form-control','value'=>set_value('adults')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-4">
            <?php echo form_error('adults') ?>
        </div>
    </div>
    
                 <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">No. of Children</label>
      <div class="col-lg-10">
       <?php echo form_input(['type'=>'number','name'=>'children','class'=>'form-control','value'=>set_value('children')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-4">
            <?php echo form_error('children') ?>
        </div>
    </div>
    
    
             <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Booking Date</label>
      <div class="col-lg-10">
       <?php echo form_input(['type'=>'date','name'=>'bookingdate','class'=>'form-control','placeholder'=>'Booking Date','value'=>set_value('bookingdate')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-4">
            <?php echo form_error('bookingdate') ?>
        </div>
    </div>
     
              <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">journey Date</label>
      <div class="col-lg-10">
       <?php echo form_input(['type'=>'date','name'=>'journeydate','class'=>'form-control','placeholder'=>'Journey Date','value'=>set_value('journeydate')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-4">
            <?php echo form_error('journeydate') ?>
        </div>
    </div>
     
                   <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Enquiry message</label>
      <div class="col-lg-10">
       <?php echo form_textarea(['rows'=>'4','name'=>'enquiry','class'=>'form-control','placeholder'=>'Message','value'=>set_value('enquiry')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-4">
            <?php echo form_error('enquiry') ?>
        </div>
    </div><br>

     <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
       <?php echo form_reset(['name'=>'reset','value'=>'RESET','class'=>'btn btn-defult']) ?>
        <!-- <button type="reset" class="btn btn-default">Cancel</button> -->
        <?php echo form_submit(['name'=>'submit','value'=>'SUBMIT','class'=>'btn btn-primary']) ?>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      </div>
    </div>
  </fieldset>
<!-- </form> -->
</div>



<?php include('footer.php'); ?>