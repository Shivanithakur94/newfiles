<?php require("header.php");
require("menu.php");  
$usr = $_SESSION["currentUser"];
 ?>
   <style>
   h3 {
    text-decoration: underline;
    color: orange;
}
   </style>
<body>

    <div id="wrapper">
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Youtow &copy; Motor Club Plans</h1>
                </div>
               
            </div><div class="row">
            
<?php 
 $planssql = "Select * from yt_plans";
 $res = $con->query($planssql);

    echo  mysqli_error($con);
	if ($res->num_rows > 0) {
    
    while($row = $res->fetch_assoc()) {
		
        $plan_title= $row["yt_plans_name"];
        $plan_id= $row["plans_ids"];
		$plan_desc= $row["yt_plans_description"];
		$plan_term= $row["yt_plans_term"];
		$plan_cost= $row["yt_plans_amount"];	
?>
                 <h3><?php echo  $plan_title;?></h3>
				 <?php  
				   $plansdes = "Select * from yt_plans_description where yt_plan_id='$plan_id'";
				   $res11 = $con->query($plansdes);
				while($rowss = $res11->fetch_assoc())
				{
			       $plan_descc= $rowss["yt_plan_description"];
			       $plan_idd= $rowss["yt_plan_id"];
			       $plan_tit= $rowss["yt_plan_title"];
				 if($plan_id==$plan_idd)
				 {?>
				 <p><li><?php echo '<b>'. $plan_tit.'</b>: '.$plan_descc; ?></li></p>
				 <?php 
				 }
				}
				 ?>
				 <p>
				<b> Term: </b><?php echo $plan_term; ?> Months
				</p>
				
				<p>
					<b>Agent Cost:</b>  $<?php echo $plan_cost; ?>
				</p>
           
	<?php  }} 

?>
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
