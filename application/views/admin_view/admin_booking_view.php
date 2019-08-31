<?php include('admin_header.php'); ?>

<div class="container">
 
       <?php if( $this->session->flashdata('feedback')): ?>
        <div class="row">
            <div class="col-lg-6">
               <div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Booking cancelled Succesfully!</strong> 
</div> 
            </div>
        </div>
        <?php endif; ?>
          
<table style="font-size:17px;margin-left:-100px" class="table table-striped table-hover ">
  <thead>
    <tr style="font-size:20px;color:white">
      <th style="padding:0px 20px 0px 20px">Booking ID</th>
      <th  style="padding:0px 20px 0px 20px">Full Name</th>
      <th style="padding:0px 20px 0px 20px">Package ID</th>
      <th style="padding:0px 20px 0px 20px">Gender</th>
      <th style="padding:0px 20px 0px 20px">Email</th>  
      <th style="padding:0px 20px 0px 20px">Address</th>
      <th style="padding:0px 20px 0px 20px">No. of adults</th>
      <th style="padding:0px 20px 0px 20px">No. of children</th>
      <th style="padding:0px 20px 0px 20px">Booking Date</th>
      <th style="padding:0px 20px 0px 20px">Journey Date</th>
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
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->bid ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->fullname ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->pid; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->gender; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->email; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->address; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->adults; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->children; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->bookingdate; ?></td>
                  <td style="padding:0px 20px 0px 20px"><?php echo $row->journeydate; ?></td>
                  <td style="padding:0px 20px 0px 20px">
                        <?= 
                   form_open('update/cancel_booking'),
                    form_hidden('bid',$row->bid),
                    form_submit(['name'=>'submit','value'=>'Cancel','class'=>'btn btn-danger']),
                    form_close();
                  ?>
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