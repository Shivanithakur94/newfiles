<?php require("header.php") ?> 
<body>
<div id="wrapper">
<?php 

 require("menu.php");  
 $usr = $_SESSION["currentUser"];
 $user_idd=$usr->user_id;
 $hasBillings = true;
 $hasPendings = true;
 //var_dump($usr);
 $pendingSql = "Select * from policies
			inner join yt_plans on yt_plans_id = policies_yt_plan_id
			inner join users on users.user_id = policies_user_id
			inner join members on members_id = policies_member_id
             Where (yt_plans_office_id = $usr->office_id or yt_plans_office_id = 0) 
			      and policies_status='Active' and policies_balance > 0 and (policies_user_id='$user_idd' OR policies_owner='$user_idd')";
		 
  $res = $con->query($pendingSql);
  if ($res->num_rows>0) 
  { $hasPendings = true ; }
  
  
    echo  mysqli_error($con);
 
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Your Billing History</h1>
					  <ul class="nav nav-pills">
						<li class="active"><a data-toggle="pill" href="#home">Pending Charges</a></li>
						<li><a data-toggle="pill" href="#menu1">Processed Invoices</a></li>
					</ul>
  
                </div>
				
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                 <div class="tab-content">
					<div id="home" class="tab-pane fade in active">
					 <?php if(!$hasPendings) 
					 { ?>
					  <h3>Pending Charges</h3>
					  <p><i>No Pending Charges for this period</i></p>
					
					<?php }
						else {
							
					  ?>
					  <table class="table table-striped">
						<thead>
							<tr><th>Create Date</th> <th>Member Name</th><th>Plan</th> 
							<th> Agent </th>
							<th>Amount</th></tr>
						</thead>
						<tbody>
						  <?php 
						   $tot_pending =0;
							while ($pendings = $res->fetch_object()) {
								
						?>
							<tr><td><?=$pendings->policies_createdate?> </td>
							<td><?=$pendings->members_firstname?>  <?=$pendings->members_lastname?> </td> 
							
							<td><?=$pendings->yt_plans_name?>  </td> 
							
							<td><?=$pendings->user_name?>  </td> 
							<td><?=$pendings->policies_balance?>  </td> </tr>
						<?php 
						   $tot_pending += $pendings->policies_balance;
							}
							?>
						</tbody>
						<tfoot>
							<tr style="background-color:#EFEFEF;color:blue;">
							<td colspan=4><span class="strong pull-right"> Balance:</span></td>
							<td> $<?=$tot_pending?>  </td>
							</tr>
						</tfoot>
					</table>
					  
					  
					  </div>
						<?php 
						
						} ?>
					
					
					
					<div id="menu1" class="tab-pane fade">
					  <h3>Past Billings</h3>
					  <?php if(!$hasBillings) { ?>
					  <p><i>No payments have been proceed.</i></p>
					  <?php }
						else {
							
					  ?>
					  <table class="table table-striped">
						<thead>
							<tr><th>Invoice Date</th> <th> Batch ID</th><th>Status</th><th>Amount</tr>
						</thead>
						<tbody>
						
						
						
						</tbody>
					</table>
					  
					  
					  
						<?php } ?>
					</div>
				</div>
			</div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
