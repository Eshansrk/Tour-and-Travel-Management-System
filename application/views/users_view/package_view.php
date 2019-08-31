<?php include('header.php'); ?>

<div class="container">
    
<table style="font-size:17px;margin-left:-20px" class="table table-striped table-hover ">
  <thead>
    <tr style="font-size:20px;color:white">
      <th style="padding:0px 20px 0px 20px">Package ID</th>
      <th  style="padding:0px 20px 0px 20px">Image</th>
      <th style="padding:0px 20px 0px 20px">Tour Place</th>
      <th style="padding:0px 20px 0px 20px">Package Name</th>
      
      <th style="padding:0px 20px 0px 20px">Category</th>
      <th style="padding:0px 20px 0px 20px">Days</th>
      <th style="padding:0px 20px 0px 20px">Amount(TK)</th>
      <th style="padding:0px 20px 0px 20px">Book</th>
    </tr>
  </thead>

 <tbody>
    <?php
        if($fetch_data->num_rows()>0)
        {
            foreach($fetch_data->result() as $row)
            {
        
        ?>
             <tr style="color:orange" >
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->pid ?></td>
                  <td style="padding:0px 20px 0px 20px"> <img style="width:250px" src="http://localhost/CI/img/<?php echo $row->pid?>.jpg" alt=""> </td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->tour_place; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->package_name; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->category; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->days; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->amount; ?></td>
                <td style="padding:0px 20px 0px 20px"><a href="<?= base_url('user') ?>" class="btn btn-success">Booking</a></td>              
                  <!-- <form action="<?= base_url('user') ?>" method="get">
                    <input class="btn btn-success" type="text" style="visibility:hidden" value=" <?php echo $row->pid?>" name="selected"/> 
                 
                    <input type="submit" name="submit" value="Booking"/> 
                 </form>  -->       
                   <!-- <td><a href="<?= base_url('user') ?> " class="btn btn-success">Booking</a></td> -->
                  
            </tr>
        
       <?php
            }
        }
     else{
         ?>
             <tr>
                 <td colspan="9">No data found</td>
             </tr>
         <?php
     }
     ?>
 </tbody>
</table> 
<!-- </form> -->
</div>

<?php include('footer.php'); ?>