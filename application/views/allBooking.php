<div class="main-panel">
  <div class="content-wrapper">
     <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">All Booking</h4>
          <div class="table-responsive">
            <table id="example" class="table table-striped">
              <thead>
                <tr>
                  <th>S. No.</th>
                  <th>User Name</th>
                  <th>Artist Name</th>
                  <th>Category</th>
                  <th>Time</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0; foreach ($getBookings as $getBookings) { $i++;
                ?>
                <tr>
                  <td ><?php echo $i; ?></td>
                  <td ><?php echo $getBookings->userName; ?></td>
                  <td ><?php echo $getBookings->artistName; ?></td>
                  <td ><?php echo $getBookings->category_name; ?></td>
                  <td ><?php echo $getBookings->booking_date.' '.$getBookings->booking_time; ?></td>  
                  <td>
                  <?php if($getBookings->booking_flag==0)
                   {
                     ?>
                   <label class="badge badge-warning">Pending</label>
                   <?php
                    }
                    elseif($getBookings->booking_flag==1) {
                       ?>
                   <label class="badge badge-primary">Accepted</label>
                   <?php
                     } 
                     elseif($getBookings->booking_flag==2) {
                       ?>
                   <label class="badge badge-danger">Decline</label>
                   <?php
                     } 
                      elseif($getBookings->booking_flag==3) {
                       ?>
                   <label class="badge badge-success">Running</label>
                   <?php
                     } 
                      elseif($getBookings->booking_flag==4) {
                       ?>
                   <label class="badge badge-default">Completed</label>
                   <?php
                     } 
                     ?>
                     </td>         
                  <td>
                 <?php if($getBookings->booking_flag==0)
                   { ?>
                   <div class="btn-group dropdown">
                    <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Manage
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?php echo base_url('/Admin/booking_operation');?>?id=<?php echo $getBookings->id; ?>&request=1"><i class="fa fa-reply fa-fw"></i>Accept</a>
                      <a class="dropdown-item" href="<?php echo base_url('/Admin/decline_booking');?>?id=<?php echo $getBookings->id; ?>&request=0"><i class="fa fa-history fa-fw"></i>Decline</a>
                    </div>
                  </div>
                  <?php } if($getBookings->booking_flag==1)
                   { ?>
                  <div class="btn-group dropdown">
                    <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Manage
                    </button>
                     <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?php echo base_url('/Admin/booking_operation');?>?id=<?php echo $getBookings->id; ?>&request=2"><i class="fa fa-reply fa-fw"></i>Start</a>
                      <a class="dropdown-item" href="<?php echo base_url('/Admin/decline_booking');?>?id=<?php echo $getBookings->id; ?>&request=0"><i class="fa fa-history fa-fw"></i>Decline</a>
                    </div>
                  </div>
                   <?php } if($getBookings->booking_flag==3)
                   { ?>
                   <div class="btn-group dropdown">
                    <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Manage
                    </button>
                     <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?php echo base_url('/Admin/booking_operation');?>?id=<?php echo $getBookings->id; ?>&request=3"><i class="fa fa-reply fa-fw"></i>Complete</a>
                    </div>
                  </div>
                   <?php } if($getBookings->booking_flag==4) {?>
                     <label class="badge badge-default">Completed</label>
                   <?php } if($getBookings->booking_flag==2) {?>
                      <label class="badge badge-danger">Decline</label>
                   <?php } ?>
                </td>             
                </tr>
              <?php
                }
              ?>       
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>           
  </div>
</div>
<!-- content-wrapper ends -->