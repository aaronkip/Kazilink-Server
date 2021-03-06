<!-- partial -->
<div class="main-panel">
<div class="content-wrapper">
  <div class="row">
  
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">All Users</h4>
          <div class="table-responsive">
          <table id="example" class="table table-striped">
            <thead>
              <tr>
                <th>S. No.</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Referral Code</th>
                <th>Used Referral Code</th>
                <th>Wallet Amount</th>
                <th>
                  Status
                </th>
                <th>
                  Warning
                </th>
              </tr>
            </thead>
            <tbody>
            <?php $i=0; foreach ($user as $user) {
             $i++; ?>
              <tr>
                <td><?php echo $i; ?></td>
                 <td class="py-1">
                <?php if($user->image)
                { ?>
                  <img src="<?php echo  base_url().$user->image; ?>" width="42" height="42" alt="image"/>
                  <?php }
                else { ?>
                  <img src="<?php echo  base_url('/assets/images/faces-clipart/pic-1.png' ); ?>" alt="image"/>
                  <?php } ?>
                </td> 
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->email_id; ?></td>
                <!-- <td><?php echo date('M d, Y h:i A', $user->created_at); ?></td> -->
                <td><?php echo $user->referral_code; ?></td>
                <td><?php echo $user->user_referral_code; ?></td>
                <td><?php echo $user->amount; ?></td>
                <td>
                  <?php  if( $user->status){ ?><button class="btn active_user btn-success btn-sm">Active</button><?php }else {  ?><button class="active_user btn-danger btn btn-sm">Deactive</button> <?php }?><input  type="text"  value="<?php echo $user->user_id;?>" hidden>
                </td>
                <td>
                  <a class="btn-danger btn btn-sm" onclick="return confirm('Are you sure? Want to warn this user.')" href="<?php echo base_url('Admin/warningUser/')?>?user_id=<?php echo $user->user_id; ?>">Warning</a>
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
  