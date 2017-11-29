<?php require("header.php");
$usr = $_SESSION["currentUser"];
	$owner_user_id=$usr->user_id;
	$user_off_idd=$usr->office_id;
	$sql_all ="Select * from agents inner join users on users.user_id = agents.agent_id where owner_id='$owner_user_id'";
	$res_all = $con->query($sql_all);
	?>
	<style>
	button#delete_user {
    background: #ac2925;
    color: #fff;
}
.save_button {
    background: #26B99A !important;
    border: 1px solid #26B99A;
	color: #fff !important;
}
.edit_button {
    background: #337ab7 !important;
    border: 1px solid #337ab7;
    color: #fff !important;
}
button.btn {
    margin: 0px 3px;
}

	</style>
<body>


<div id="wrapper">
        <?php  require("menu.php") ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header center">My Agents</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                  <?php 
				     if($res_all->num_rows > 0) { 
				?>
                    <table class="table table-striped">
						<thead>
							<tr><th>Name</th><th>Password</th><th>Phone Number</th><th>Address</th></tr>
						</thead>
						<tbody>
						<?php
						    while($all_agent = $res_all->fetch_object()) {
								$d_id=$all_agent->user_id;
								
					?>
							          <tr id="age_save<?php echo $d_id;?>">
									      <td><?php echo $all_agent->user_name ?></td>
							              <td><?php echo $all_agent->user_password ?></td>
							              <td><?php echo $all_agent->user_phone?></td>
							              <td><?php echo $all_agent->user_address?></td>	
                                          <td>
										  
										  <button class="btn btn-primary btn-xs edit_button" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="return edit_info(<?php echo $d_id; ?>)"><span class="glyphicon glyphicon-pencil"></span>
										  </button>
										  
										  <button style="display:none" class="btn btn-success btn-xs save_button" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-ok"></span>
										  </button>
										  
										  <button id="delete_user" value="" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" onclick="return deleted(<?php echo $d_id;?>)"><span class="glyphicon glyphicon-trash"></span>
										  </button>
										  </td>									  
								     </tr>
								     <tr style="display:none" id="age_edit<?php echo $d_id;?>">
								          <td><input type="text" value="<?php echo $all_agent->user_name ?>" name="nme"></td>
							              <td><input type="password" value="<?php echo $all_agent->user_password ?>" name="pass"></td>
							              <td><input type="text" value="<?php echo $all_agent->user_phone?>" name="phn"></td>
							              <td><input type="text" value="<?php echo $all_agent->user_address?>" name="addr"></td>	
                                          <td>
										 <button class="btn btn-primary btn-xs edit_button" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span>
										 </button>
										  
										  <button onclick="return saved(<?php echo $d_id;?>)" class="btn btn-success btn-xs save_button" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-ok"></span>
										  </button>
										  
										  <button id="delete_user" value="" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" onclick="return deleted(<?php echo $d_id;?>)"><span class="glyphicon glyphicon-trash"></span></button>
										  </td>									  
								     </tr>
							   
							<?php   
						   }
						 
						?>
						</tbody>
					</table>
					<?php 
					 }else {
							   echo "<i>You have no Agents</i>";
						   } 
					?>  
                </div>
							  
								
								  
							
            <!-- /.col-lg-12 -->
            </div>
			  
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
	<script>
	function deleted(a)
{
var flag=0;
jQuery.ajax({
 type: 'POST',
 url : 'delete_agents.php',
 data: {a : a,flag:flag},
 success: function(d)
 {
  alert(d);
 }
});	
}
 function saved(r)
{	
var flags=1;
//alert(r);
  var nm=$("input[name='nme']").val();
  var ph=$("input[name='phn']").val();
  var ps=$("input[name='pass']").val();
  var ad=$("input[name='addr']").val();

jQuery.ajax({
 type: 'POST',
 url : 'delete_agents.php',
 data: {r : r,flags:flags,nm:nm,ph:ph,ps:ps,ad:ad},
 success: function(q)
 {
  //alert(q);
 }
}); 
} 
function edit_info(b)
{
$('#age_edit'+b).show();
$('#age_save'+b).hide();
}
	</script>
	
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
