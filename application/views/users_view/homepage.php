<?php include('header.php'); ?>
<div style="margin-left:160px;max-width:1000px" class="w3-content w3-section" >
  

  <img class="mySlides w3-animate-fading" src="http://localhost/CI/img/a.jpg" style="width: 1050px;
    height: 500px;">
  <img class="mySlides w3-animate-fading" src="http://localhost/CI/img/b.jpg"style="width: 1050px;
    height: 500px;">
  <img class="mySlides w3-animate-fading" src="http://localhost/CI/img/c.jpg" style="width: 1050px;
    height: 500px;">
  <img class="mySlides w3-animate-fading" src="http://localhost/CI/img/d.jpg" style="width: 1050px;
    height: 500px;">
    <img class="mySlides w3-animate-fading" src="http://localhost/CI/img/e.jpg" style="width: 1050px;
    height: 500px;">
      <img class="mySlides w3-animate-fading" src="http://localhost/CI/img/f.jpg" style="width: 1050px;
    height: 500px;">
        <img class="mySlides w3-animate-fading" src="http://localhost/CI/img/g.jpg" style="width: 1050px;
    height: 500px;">
          <img class="mySlides w3-animate-fading" src="http://localhost/CI/img/h.jpg"style="width: 1050px;
    height: 500px;">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);    
}
</script>

<div style="margin-top:20px;text-align: center" class="jumbotron">
  <h1 >About Us</h1>
  <p style="padding:5px">My Tour Bangladesh is the most experienced and well equipped tour operator in Bangladesh. Our vision is to be recognized as a leading provider of quality travel and tourism services worldwide. And to achieve that goal we are enterprising largely and relentlessly. Tourists from all over the world who have already traveled using our services can testify about our sincerity and uncompromising quality.</p>
</div>

<div  class="container">
    <form  class="form-horizontal">
       <?php echo form_open('feedback/message'); ?>
  <fieldset>
    <legend ><h2>Contact us</h2></legend>
    <div class="form-group">
      <label style="font-size:20px"  for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Your name','value'=>set_value('name')]) ?>
      <!--   <input type="text" class="form-control" id="inputName" placeholder="Name"> -->
      </div>
    </div>
    <div class="form-group">
      <label  style="font-size:20px" for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email','value'=>set_value('email')]) ?>
       <!--  <input type="text" class="form-control" id="inputEmail" placeholder="Email"> -->
      </div>
    </div>
    <div class="form-group">
      <label style="font-size:20px"  for="inputName" class="col-lg-2 control-label">Contact NO.</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'mobile','class'=>'form-control','placeholder'=>'Your contact No','value'=>set_value('mobile')]) ?>
       <!--  <input type="text" class="form-control" id="inputName" placeholder="Mobile Number"> -->
      </div>
    </div>
    <div class="form-group">
      <label  style="font-size:20px" for="textArea" class="col-lg-2 control-label">Comment</label>
      <div class="col-lg-10">
       <?php echo form_textarea(['name'=>'comment','class'=>'form-control','rows'=>'3','placeholder'=>'Your message','value'=>set_value('comment')]) ?>
        <!-- <textarea class="form-control" rows="3" id="textArea"></textarea> -->
    
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
    </div>
  </fieldset>
</form>
</div>

<?php include('footer.php'); ?>