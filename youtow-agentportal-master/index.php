<?php require("header.php") ?>
<style>
.profile_images img {
    width: 100%;
    float: left;
    border-radius: 100%;
    height: 100%;
    box-shadow: 1px 1px 1px 1px #cccccc7a;
}




.col-md-12.Dashbord {
    margin-top: 28px;
}
.col-md-12.Dashbord {
    margin-top: 28px;
    background: #f5f5f5;
    padding: 0px;
}
.content_dummy {
    padding: 40px;
    background: #fff;
    position: relative;
    top: -32px;
    left: 5px;
    color: blue;
    font-family: cursive;
    font-size: 20px;
    font-weight: bold !important;
    text-align: center;
    box-shadow: 1px 1px 1px 1px #cccccc6b;
}
.progress.yellow {
    z-index: 999;
}
label.label1 {
width: 46%;

    font-weight: normal;
     color: orange;
    font-weight: 600;
    letter-spacing: 1px;
    font-family: cursive;
    font-style: italic;
}
span.Name1 {
    font-weight: normal;
    letter-spacing: 1px;
    font-family: cursive;
    font-weight: bold;
    width: 50%;
    float: right;
    word-wrap: break-word;
}
.userss input {

    border: 1px solid #ccc;
    padding: 10px;
    box-sizing: border-box;
    line-height: 40px;
    height: 36px;
  
    /* box-shadow: 1px 1px 1px 1px #cccccc5e; */
    box-shadow: 0 1px 3px 0 rgba(0,0,0,0.15);
    border-left: none;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
}
.userss {
    margin-bottom: 14px;
    width: 100%;
    float: left;
}
.xxx {
    width: 100%;
    float: left;
}

.xxx span {
    width: 10%;
    float: left;
    background: orange;
    /* margin-top: 2px; */
    box-shadow: 0 1px 3px 0 rgba(0,0,0,0.15);
    padding: 8px;
    color: #fff;
        border-bottom-left-radius: 6px;
    border-top-left-radius: 6px;
    text-align: center;
}
.xxx input {
    width: 80%;
}
.user {
/*     background: #fff;
    box-shadow: 1px 1px 1px 1px #cccccc6b; */
    padding: 9px;
    margin-top: 14px;
    margin-bottom: 14px;
}
.profile_images {
    position: relative;
    z-index: 999;
}
.col-md-3.user_iamge {
    padding: 0px !important;
}
.profile {
    background: #fff;
    padding: 40px;
    box-shadow: 1px 1px 1px 1px #cccccc6b;
    position: relative;
    width: 100%;
    float: left;
    left: -43px;
top: -14px;
}
.profile_content {
    width: 100%;
    float: left;
       border-bottom: 1px solid #ffa5001c;
    margin-bottom: 10px;
}
.progress{
    width: 150px;
    height: 150px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #44484b;
    font-size: 24px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
}
.progress.blue .progress-bar{
    border-color: #049dff;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}
.progress.yellow .progress-bar{
    border-color: #fdba04;
}
.progress.yellow .progress-left .progress-bar{
    animation: loading-3 1s linear forwards 1.8s;
}
.progress.pink .progress-bar{
    border-color: #ed687c;
}
.progress.pink .progress-left .progress-bar{
    animation: loading-4 0.4s linear forwards 1.8s;
}
.progress.green .progress-bar{
    border-color: #1abc9c;
}
.progress.green .progress-left .progress-bar{
    animation: loading-5 1.2s linear forwards 1.8s;
}
@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
}
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
    }
}
@keyframes loading-5{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(126deg);
        transform: rotate(126deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
}
.progress.blue {
    z-index: 888;
}
.progress.red .progress-bar {
    border-color: green;
    z-index: 9999999 !important;
}
.progress.red {
    z-index: 888;
}
</style>
<body>

<div id="wrapper">

        <?php  require("menu.php") ?>
   
        <div id="page-wrapper">
            <div class="row">
          <?php   $usr = $_SESSION["currentUser"];
	            $user_idd=$usr->user_id;
	           $current= date("Y-m-d");
			   $seven_days=date('Y-m-d', strtotime('-7 days'));
			   $fifteen_days=date('Y-m-d', strtotime('-15 days'));
			   $thirty_days=date('Y-m-d', strtotime('-30 days'));


              $policies_seven = "Select * from policies where policies_startdate  between '$seven_days' and '$current' and  (policies_user_id='$user_idd' )";
			  $res_seven = $con->query($policies_seven);
			   $res_seven->num_rows;
			  
			  
              $policies_fifteen = "Select * from policies where policies_startdate  between '$fifteen_days' and '$current'and  (policies_user_id='$user_idd' )";
			  $res_fifteen = $con->query($policies_fifteen);
			   $res_fifteen->num_rows;
			  
			   $policies_thirty = "Select * from policies where policies_startdate  between '$thirty_days' and '$current'and  (policies_user_id='$user_idd')";
			  $res_thirty = $con->query($policies_thirty);
			   $res_thirty->num_rows; 
		
				?>
			<!--------------------------my code--------------------->
	
<div class="col-md-12 Dashbord">
<div class="col-md-12">
<div class="col-md-6 user">
<div class="col-md-3 user_iamge">
<div class="profile_images">
<img src="https://tinypost.co/wp-content/uploads/2016/09/cute-profile-pics-for-whatsapp-images.png" alt="Smiley face">
</div>
</div>
<div class="col-md-9">
<div class="profile">
<div class="profile_content">
<label class="label1">Name:</label>
<span class="Name1"><?php  echo $usr->user_name;?></span>
</div>
<div class="profile_content">
<label class="label1">Phone Number:</label>
<span class="Name1"><?php  echo $usr->user_phone;?></span>
</div>
<div class="profile_content">
<label class="label1">Email:</label>
<span class="Name1"><?php  echo $usr->user_email;?></span>
</div>

</div>
</div>
<div class="col-md-12 user_info">
<div class="info">
<div class="destination">
							  

</div>
<div class="destination">
</div>
</div>
</div>

</div>
<div class="col-md-12"
<div class="row">
<div class="col-md-4 col-sm-6 progress_bar">
				<div class="progress_bar">
            <div class="progress red">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value"><?php echo $res_seven->num_rows;?></div>
            </div>
			<div class="content_dummy">
	7 days
			</div>
        </div>
    </div> 
        
        <div class="col-md-4 col-sm-6 progress_bar">
				<div class="progress_bar">
            <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value"><?php echo $res_fifteen->num_rows;?></div>
            </div>
			<div class="content_dummy">
			15 days
			</div>	</div>
        </div>
		<div class="col-md-4 col-sm-6 ">
		<div class="progress_bar">
		
            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value"><?php echo $res_thirty->num_rows;?></div>
				
            </div>
			<div class="content_dummy">
	         30 days
			</div>
			</div>
        </div>
		   </div>
	</div>
</div>

 





			<!--------------------------my code end--------------------->
			
			
			
			
			
			
			
			
			</div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
