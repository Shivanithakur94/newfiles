<?php require("header.php");
$usr = $_SESSION["currentUser"];
	$user_idd=$usr->user_id;
	$user_off_idd=$usr->office_id;

	
	if (isset($_POST["action"])){

        $oname   = $_POST["office_name"];
        $oweb = $_POST["office_website"];
        $ophn  = $_POST["office_phone"];
        $oaddr  = $_POST["office_address"];
		$sql=" UPDATE `offices` SET `office_name`='$oname',`office_address`='$oaddr',`office_website`='$oweb',`office_phone`='$ophn' WHERE office_id ='$user_off_idd'";
        $con->query($sql);
       
    } 
	$policies_sql = "Select * from offices  
	              inner join users on users.office_id = offices.office_id where user_id='$user_idd'";
	$res11 = $con->query($policies_sql);
	
	?>
<body>


<div id="wrapper">

        <?php  require("menu.php") ?>
   
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header center">My Practice</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --><?php while($policies = $res11->fetch_object()) {?>
            <div class="row">
			<?php 
			 $sql_readonly = "Select * from agents where agent_id='$user_idd' and status='1'";
			 $rese_readonly = $con->query($sql_readonly); 
							  if($rese->num_rows<=0)
							  { ?>
			
			
		
                <div class="col-lg-12">
                    <form role="form" action="" method="post">
                        <div class="form-group">
                            <label>Company Name</label>                
                            <input name="office_name" value="<?php echo $policies->office_name;?>" id="office_name" required class="form-control">
                           
                        </div>
                        <div class="form-group">
                            <label>Website</label>                
                            <input name="office_website"  value="<?php echo $policies->office_website;?>" id="office_website" required class="form-control">
                           
                        </div>
                        <div class="form-group">
                            <label>Phone</label>                
                            <input name="office_phone"  value="<?php echo $policies->office_phone;?>" id="office_phone"  class="form-control">
                           
                        </div>

                        <div class="form-group">
                            <label>Address</label>                
                            <textarea name="office_address"  id="office_address"  class="form-control"><?php echo $policies->office_address;?>
                            </textarea>                                
                           </div>
                        <input type="submit" class="btn btn-primary" name="action" value="Save">                
                    </form>
                </div>
							  <?php }
							  else{
								  ?>
								  <div class="col-lg-12">
                    <form role="form" action="" method="post">
                        <div class="form-group">
                            <label>Company Name</label>                
                            <input name="office_name" value="<?php echo $policies->office_name;?>" id="office_name" required class="form-control" readonly>
                           
                        </div>
                        <div class="form-group">
                            <label>Website</label>                
                            <input name="office_website"  value="<?php echo $policies->office_website;?>" id="office_website" required class="form-control" readonly>
                           
                        </div>
                        <div class="form-group">
                            <label>Phone</label>                
                            <input name="office_phone"  value="<?php echo $policies->office_phone;?>" id="office_phone"  class="form-control" readonly>
                           
                        </div>

                        <div class="form-group">
                            <label>Address</label>                
                            <textarea name="office_address"  id="office_address"  class="form-control" readonly><?php echo $policies->office_address;?>
                            </textarea>                                
                           </div>
                        <input type="submit" class="btn btn-primary" name="action" value="Save">                
                    </form>
                </div>
								  
							<?php  }
							  
							  
							  ?>
            <!-- /.col-lg-12 -->
            </div>
			<?php }?>   
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
