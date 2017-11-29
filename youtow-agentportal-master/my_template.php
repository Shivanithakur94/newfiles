<?php require("header.php");
  require("menu.php") ;
  error_reporting(0);
  $usr = $_SESSION["currentUser"];
	  $user_idd=$usr->user_id;
	  $user_aname=$usr->user_name;
	  $user_addres=$usr->user_address;
	  $user_aemail=$usr->user_email;
	  $user_acity=$usr->user_city;
	  $user_astate=$usr->user_city;
	  $user_azip=$usr->user_zip;
	   if (isset($_POST["action"])){
		if ($_POST["action"] == "create")
		{
			createPolicy($con,$usr);
		
		}
		else 
		{
			echo "<script>alert('".$_POST["action"]."');</script>";
		}

      
       
    }
	// Create Policy Function
	function createPolicy($con,$usr){
		error_reporting(0);
		$mexists = false;
		$sql = "Select * from members where members_email='" . $_POST["members_email"] . "'";
		$plan_sql = "Select * from yt_plans where yt_plans_id=" . $_POST["yt_plans_id"]; 
		
		$res = $con->query($sql);
		$res1 = $con->query($plan_sql);
		
		$plan = $res1->fetch_object();
		
		if($res->num_rows > 0) 
		{
			$mexists = true;
		}
		
		//Insert into Members or Update Address of Existing Member
		$sql_1 = "INSERT INTO members(
					`members_firstname`,		`members_lastname`,
					`members_email`,		`members_address_street`,
					`members_address_suite`,		`members_address_city`,
					`members_address_state`,		`members_address_postalcode`,
					`members_phone_mobile`,		`members_phone_other`,
					`members_other_contact`,		`members_other_contact_phone`,
					`members_other_contact_email` ) values(";
					
		$sql_1 .= "'" . $_POST["members_firstname"] . "','" . $_POST["members_lastname"]. "','" . 
				   $_POST["members_email"] . "','" . $_POST["members_address_street"]. "','" .
				   $_POST["members_address_suite"] . "','" . $_POST["members_address_city"]. "','" .
				   $_POST["members_address_state"] . "','" . $_POST["members_address_postalcode"]. "','" .
				   $_POST["members_phone_mobile"] . "','" . $_POST["members_phone_mobile"]. "','" .
				   $_POST["members_other_contact"] . "','" . $_POST["members_other_contact_phone"]. "','" .
				   
				   $_POST["members_other_contact_email"] . "');";
		 //echo $sql_1;
		 $res2 = $con->query($sql_1);
		 
		 $sql = "Select * FROM members where members_id = " . $con->insert_id;
		 $res3 = $con->query($sql);
		 $sqlowner = "Select owner_id FROM agents where agent_id = " . $usr->user_id;
		  $resowner= $con->query($sqlowner);
		 $owners = $resowner->fetch_object();
		 $owners->owner_id;
		$member = $res3->fetch_object();
				   //Insert Policy
		$sql_3 = "INSERT INTO policies(
					`policies_member_id`,`policies_office_id`,
					`policies_user_id`,`policies_createdate`,
					`policies_startdate`,`policies_expirationdate`,
					`policies_yt_plan_id`,`policies_balance`,`policies_status`,`policies_owner`)
					values(";
		$sql_3 .= $member->members_id . "," . $usr->office_id;
		$sql_3 .= ", " . $usr->user_id . ", now(), CURDATE(), DATE_ADD(CURDATE(), INTERVAL " . $plan->yt_plans_term  . " MONTH) ," ;
		$sql_3 .= $plan->yt_plans_id . "," . $plan->yt_plans_amount . ",'Active','$owners->owner_id')";
		$con->query($sql_3);
		
	}	  
  ?>
  <head>
  <style>
  @import "font-awesome.min.css";
@import "font-awesome-ie7.min.css";
/* Space out content a bit */

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
.describe_second {
    float: left;
    width: 100%;
}
.description {
    float: left;
    width: 100%;
}
.describe_fourth b {
    font-size: 20px;
	text-decoration: underline;
}

.describe_fourth {
    margin: 20px 0px;
}
.describe_third {
    margin: 13px 0px 3px;
}
.describe_five b {
    font-size: 16px;
}
.mem_title {
    margin: 20px 0px;
    font-weight: bold;
    font-size: 20px;
    text-decoration: underline;
}
.text-right-text {
    width: 30%;
    float: right;
}
</style>
  </head>
  <body>
<?php 
extract($_POST);

 $yt_plans_id;

?>

<div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header center">Member Information</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
				<!------------------------------my code--------------------------------------->
				<div class="container">
	<div class="col-lg-12 well">
	<div class="row">
				<form>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Name:</label><?php echo $members_firstname.' '.$members_lastname;?>
								
							</div>
						</div>					
						<div class="form-group">
							<label>Address:</label><?php echo $members_address_street;?>
							
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City:</label><?php echo $members_address_city;?>
								
							</div>	
							<div class="col-sm-4 form-group">
								<label>State:</label><?php echo $members_address_state;?>
								
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip:</label><?php echo $members_address_postalcode;?>
								
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Email Address:</label><?php echo $members_email;?>	
							</div>
						</div>		
					</div>
					
					<!------------------sellers info---------------------------------->
					 <div class="col-lg-12">
                    <h4 class="page-header center">Seller Information</h4>
                </div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Business Name:</label><?php echo $user_aname;?>	
								
							</div>
						</div>					
						<div class="form-group">
							<label>Address:</label><?php echo $user_addres;?>	
							
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City:</label><?php echo $user_acity;?>	
								
							</div>	
							<div class="col-sm-4 form-group">
								<label>State:</label><?php echo $user_astate;?>	
								
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip:</label><?php echo $user_azip;?>	
								
							</div>		
						</div>
								
					</div>
				</form>
				</div>
	</div>
	<div class="description">
	<div class="describe_first">
	For Emergency Roadside Service Assistance- Please download App that’s available in the App store or Text <b>YouTow</b> to 313131</div>
	<?php
$mem_plan = "Select * from yt_plans where yt_plans_id='$yt_plans_id'";
$mem_res = $con->query($mem_plan);
  while($mem_row = $mem_res->fetch_assoc()) 
  {
   $mem_plan_id=$mem_row["plans_ids"];
   $mem_plan_name=$mem_row["yt_plans_name"];
   ?>
	 <div class="describe_second"> 
	 <div class="text-right-text">
	  <b>Member#  :</b><?php echo $members_firstname.' '.$members_lastname;?><br>
	  <b>Producer Code:</b> ____<br>
	  <b>YouTow Plan: </b><?php echo $mem_plan_name;?>
	  </div>
	 </div>
	 <div class="describe_third"> 
	If you have any questions or concerns, You can contact us via email at <a href="#" style="text-decoration:underline;color: blue;font-weight: 600;">www.customerservice@youtow.us</a>
	</div>
	 <div class="describe_fourth"> 
	<b>This is not an Insurance Contract</b>
	</div>
	 <div class="describe_five"> 
	<b>Your Membership contains Our 24 hour emergency roadside service, please order your services via the YouTow App</b>
	</div>
	
	
	
	
   <div class="mem_title"><?php echo $mem_plan_name;?></div>
   <?php
   $memreal_plan = "Select* from yt_plans_description where yt_plan_id='$mem_plan_id'";
   $memreal_res = $con->query($memreal_plan);
   while($memreal_row = $memreal_res->fetch_assoc()) 
  {
   $memreal_plan_id=$memreal_row["yt_plan_id"];
   $memreal_plan_title=$memreal_row["yt_plan_title"];
   $memreal_plan_desc=$memreal_row["yt_plan_description"];
	?>
	<p><li><?php echo '<b>'. $memreal_plan_title.'</b>: '.$memreal_plan_desc; ?></li></p>
	<?php
  }
  
  
  }

	?>	
</div>
	</div>
				<!------------------------------my code end----------------------------------------->
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
