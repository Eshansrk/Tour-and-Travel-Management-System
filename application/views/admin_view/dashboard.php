<?php include('admin_header.php'); ?>
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


<?php include('admin_footer.php'); ?>