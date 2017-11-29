<?php require("header.php");
    $usr = $_SESSION["currentUser"];
	$planoptions ="<option value=1" . ">" . "Plan A - 6 Months (9.95) " . "</option>";
	$planoptions .="<option value=2" . ">" . "Plan B - 6 Months (19.95) " . "</option>";
	$planoptions .="<option value=3" . ">" . "Plan C - 6 Months (29.95) " . "</option>";
	$planoptions .="<option value=4" . ">" . "Plan D - 6 Months (39.95) " . "</option>";
	$planoptions .="<option value=5" . ">" . "Plan A - 12 Months (19.95) " . "</option>";
	$planoptions .="<option value=6" . ">" . "Plan B - 12 Months (29.95) " . "</option>";
	$planoptions .="<option value=7" . ">" . "Plan C - 12 Months (39.95) " . "</option>";
	$planoptions .="<option value=8" . ">" . "Plan D - 12 Months (49.95) " . "</option>";
		
?>

<body>


<div id="wrapper">

        <?php  require("menu.php") ?>
   
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header center">Create Policy</h3>
                </div>
				
				<div class="subheader">
					** If member email address already exists with previous policy, information will be updated. **
				</div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			<form role="form" method="POST" action="my_template.php">
				<div class="row">
					 		   
					<div class="form-group col-md-6 col-sm-6">
						<label>Member First Name</label>
						<input type="hidden" name="action" value="create">
						<input name="members_firstname" id="members_firstname" required class="form-control">
					   
					</div>
					<div class="form-group  col-md-6 col-sm-6">
						<label>Member Last Name</label>
						
						<input name="members_lastname" id="members_lastname" required class="form-control">
					  <?php //echo $base_url;?>
					</div>
				</div>
				<div class="row">
						
					<div class="form-group col-md-6 col-sm-6">
						<label> Member Mobile Phone</label>                
						<input name="members_phone_mobile" id="members_phone_mobile" type="phone" required class="form-control">
					   
					</div>
					<div class="form-group  col-md-6 col-sm-6">
						<label>Member Email</label>                
						<input name="members_email" id="members_email" required type="email"  class="form-control" >
					   
					</div>
				</div>
				
				<div class="row">
					<div class="form-group  col-md-10 col-sm-10">
						<label>Member Adddress</label>                
						<input name="members_address_street" id="members_address_street" required type="text"  class="form-control" >
					</div>
					 <div class="form-group  col-md-2 col-sm-2">
						<label> Apt/Suite #</label>                
						<input name="members_address_suite" id="members_address_suite" type="text"  class="form-control" >
					   
					</div>
				</div>
				<div class="row">
					 <div class="form-group col-md-6 col-sm-6">
						<label>City</label>                
						<input name="members_address_city" id="members_address_city" required type="text"  class="form-control" >
					   
					</div>
							
					 <div class="form-group col-sm-2">
						<label>State</label>                
						<input name="members_address_state" id="members_address_state" maxlength="2" required type="text"  class="form-control" >
					   
					</div>
							
					<div class="form-group col-sm-4">
						<label>Zip</label>                
						<input name="members_address_postalcode" id="members_address_postalcode" required type="number"  class="form-control" >
					   
					</div>
				</div>
				
				<div class="row">
					 <div class="form-group col-sm-4">
						<label>Alt Contact</label>                
						<input name="members_other_contact" id="members_other_contact"  type="text"  class="form-control" >
					   
					</div>
							
					 <div class="form-group col-sm-4">
						<label>Alt Contact Email</label>                
						<input name="members_other_contact_email" id="members_other_contact_email"  type="email"  class="form-control" >
					   
					</div>
					<div class="form-group col-sm-4">
						<label>Alt Contact Mobile</label>                
						<input name="members_other_contact_phone" id="members_other_contact_phone"  type="phone"  class="form-control" >
					   
					</div>
				</div>
				
				
				<div class="row">
					<div class=" form-group col-sm-6 ">
						<label>Select Plan</label>
						<select name="yt_plans_id" class="form-control" required>	
						            <option></option>
									<?=$planoptions?>
						</select>
					</div>
				</div>
			
				<div class="row">
					<div class=" form-group col-sm-12">
					 <input type="checkbox" required class="form-control">
					  By clicking the create policy button .. I agree to be charge the wholesale amount of the policy.
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-12">
							<button href="create_policy.php" type="submit" class="btn btn-primary">Create Policy</button>
					</div>
				</div>
		</form>
					</div>
									
				<!-- /.col-lg-12 -->
				</div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->

   

	
</body>
<?php 
/* if (isset($_POST["action"])){
		if ($_POST["action"] == "create")
		{ */ ?>
<!--script>
toastr.success("Policy Created... ");
	
</script-->
<?php /* } }  */?>
</html>
