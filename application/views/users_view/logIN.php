<?php include('header.php'); 

?>

<div class="container">
    <!-- <form class="form-horizontal"> -->
    <?php echo form_open('user/user_login'); ?>
  <fieldset>
    <legend>USER LOG IN</legend>
    <?php if($error = $this->session->flashdata('login_failed')): ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="alert alert-dismissible alert-danger">
  <?php echo $error ?>
   <button type="button" class="close" data-dismiss="alert">&times;</button>
   <a href="<?= base_url('user_signup') ?>" class="alert-link"><strong style="color:yellow">SIGN UP</strong></a> and try login again.
</div>
        </div>
    </div>
      <?php endif; ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username']) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-6">
            <?php echo form_error('username') ?>
        </div>
    </div>
   <div class="row">
       <div class="col-lg-6">
            <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
       <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']) ?>
        <!-- <input type="password" class="form-control" id="inputPassword" placeholder="Password"> -->
      </div>
    </div><br><br>
       </div>
       <div class="col-lg-6">
           <?php echo form_error('password') ?> 
       </div>
   </div>
    
     <div class="form-group">
      <label class="col-lg-2 control-label">Usertype</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="usertype" id="optionsRadios1" value="user" checked="">
            User
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="usertype" id="optionsRadios2" value="admin">
            Admin
          </label>
        </div>
      </div>
    </div>
    <input type="text"  style="visibility:hidden" <?php $pid ?> name="selected"/>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
       <?php echo form_reset(['name'=>'reset','value'=>'RESET','class'=>'btn btn-defult']) ?>
        <!-- <button type="reset" class="btn btn-default">Cancel</button> -->
        <?php echo form_submit(['name'=>'submit','value'=>'LOGIN','class'=>'btn btn-primary'])?>
        
        
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      </div>
    </div>
  </fieldset>
<!-- </form> -->
</div>

<?php include('footer.php'); ?>