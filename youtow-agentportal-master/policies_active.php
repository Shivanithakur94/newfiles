<?php 
require("header.php");
  require("menu.php") ;
    $usr = $_SESSION["currentUser"];
	 $user_idd=$usr->user_id;
	 $current= date("Y-m-d");
	 $policies_sql = "Select * from policies  
	              inner join members on members_id = policies_member_id
				  inner join yt_plans on yt_plans_id = policies_yt_plan_id 
				  where policies_expirationdate > '$current' and  (policies_user_id='$user_idd' )"; 
	
	$res = $con->query($policies_sql);
	echo  mysqli_error($con);
?>

<body>


<div id="wrapper">

        
   
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header center">Active Policies</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
				
				<?php 
				    if($res->num_rows > 0) {
				?>
                    <table class="table table-striped">
						<thead>
							<tr><th>Create Date</th> <th> Member Name</th><th>Plan</th></tr>
						</thead>
						<tbody>
						<?php
						   while($policies = $res->fetch_object()) {
					
							   echo  "<tr><td>$policies->policies_createdate</td>
										<td>$policies->members_firstname $policies->members_lastname</td>
										<td>$policies->yt_plans_name</td>
									</tr>"
							   
							   ;
						   }
						
						?>
						</tbody>
					</table>
					<?php 
					}else {
							   echo "<i>No Policies Found</i>";
						   }
					?>
                </div>
                                
            <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>

</html>
