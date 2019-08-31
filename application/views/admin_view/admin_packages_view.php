<?php include('admin_header.php'); ?>

<div class="container">

   <?php if( $this->session->flashdata('feedback')): ?>
        <div class="row">
            <div class="col-lg-6">
               <div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Package deleted Succesfully!</strong> 
</div> 
            </div>
        </div>
        <?php endif; ?>   
    
<table style="font-size:17px;margin-left:-70px" class="table table-striped table-hover ">
  <thead>
    <tr style="font-size:20px;color:white">
      <th style="padding:0px 20px 0px 20px">Package ID</th>
      <th  style="padding:0px 20px 0px 20px">Image</th>
      <th style="padding:0px 20px 0px 20px">Tour Place</th>
      <th style="padding:0px 20px 0px 20px">Package Name</th>
        <th style="padding:0px 20px 0px 20px">Division</th>
      
      <th style="padding:0px 20px 0px 20px">Category</th>
      <th style="padding:0px 20px 0px 20px">Days</th>
      <th style="padding:0px 20px 0px 20px">Amount(TK)</th>
      <th style="padding:0px 20px 0px 20px">Update</th>
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
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->division; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->category; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->days; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->amount; ?></td>
                  <td style="padding:0px 20px 0px 20px">
                  <div class="row">
                      <div class="col-lg-12">
                   <?= 
                   form_open('update/delete_package'),
                    form_hidden('pid',$row->pid),
                    form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
                    form_close();
                  ?>
                      </div>
                  </div>
                 </td> 
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