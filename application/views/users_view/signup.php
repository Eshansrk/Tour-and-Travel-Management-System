<?php include('header.php'); ?> 

<div class="container">
    <!-- <form class="form-horizontal"> -->
    <?php echo form_open('user_signup/signup'); ?>
  <fieldset>
    <legend>Sign UP!</legend>
    
       <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Fullname</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'fullname','class'=>'form-control','placeholder'=>'Your name','value'=>set_value('fullname')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-6">
            <?php echo form_error('fullname') ?>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">NID</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'nid','class'=>'form-control','placeholder'=>'Your NID','value'=>set_value('nid')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-6">
            <?php echo form_error('nid') ?>
        </div>
    </div>
    
    
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username','value'=>set_value('username')]) ?>
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
    
    
    
     
    
    
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Your_Email','value'=>set_value('email')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-6">
            <?php echo form_error('email') ?>
        </div>
    </div>
    
    
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'address','class'=>'form-control','placeholder'=>'Address','value'=>set_value('address')]) ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
      </div><br><br>
    </div>
        </div>
        <div class="col-lg-6">
            <?php echo form_error('address') ?>
        </div>
    </div>
    

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