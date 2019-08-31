<?php include('admin_header.php'); ?>

<div class="container">
    
<table style="font-size:17px;margin-left:-20px" class="table table-striped table-hover ">
  <thead>
    <tr style="font-size:20px;color:white">
      <th style="padding:0px 20px 0px 20px">User ID</th>
      <th  style="padding:0px 20px 0px 20px">Fullname</th>
      <th style="padding:0px 20px 0px 20px">NID</th>
      <th style="padding:0px 20px 0px 20px">Email</th>
        <th style="padding:0px 20px 0px 20px">Address</th>
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
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->userid ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->fullname ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->nid; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->email ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->address ?></td>               
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

<?php include('admin_footer.php'); ?>