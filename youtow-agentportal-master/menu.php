<!-- Navigation  12 -->
<?php $usr = $_SESSION["currentUser"];
 $user_idde=$usr->user_id;?>
<nav class="navbar navbar-static-top hbg" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">YouTow - Motor Club</a>

            </div>
            <!-- /.navbar-header -->
            <div class="navbar-success sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        <!-- </li> -->
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="create_policy.php"><i class="fa fa-user-plus fa-fw"></i>Create A Policy</a>
                        </li>
                        
                        <li>
                            <a href="policies_active.php"><i class="fa fa-file fa-fw"></i> Active Polices</a>
                        </li>
                        <li>
                            <a href="policies_expired.php"><i class="fa fa-file-excel-o fa-fw"></i> Expired Policies</a>
                        </li>
			<hr>
			<li>
			   <a href="youtow_plans.php"><i class="fa fa-car fa-fw"></i> YT Motor Club Plans</a>
			</li>
                        <hr>
                        <li>
                            <a href="my_information.php"><i class="fa fa-info fa-fw"></i> My Information</a>
                        </li>
                        <li>
                            <a href="my_practice.php"><i class="fa fa-building fa-fw"></i> My Office</a>
                        </li>
						<?php 
							  
							 $sqle = "Select * from agents where agent_id='$user_idde' and status='1'";
							 $rese = $con->query($sqle); 
							 
					
							  if($rese->num_rows<=0)
							  { ?>
								  
								  <li>
                            <a href="add_agents.php"><i class="fa fa-asterisk"></i> Add Agents</a>
                        </li>
						<li>
                            <a href="allagents.php"><i class="fa fa-users"></i>All Agents</a>
                        </li>
							  <?php }
						  else
						  {}
						
		                    ?>
			<li>
			   <a href="billing_history.php"><i class="fa fa-credit-card fa-fw"></i> Billing History</a>
			</li>
                        
                        <hr>
                        <li>
                            <a href="messages.php"><i class="fa fa-envelope fa-fw"></i> Messages</a>
                        </li>
                        <li>
                            <a href="logout.php"><i class="fa fa-power-off  fa-fw"></i>Logout</a>
                        </li>
                        
                        
                       
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
</nav>
<style>
 .hbg {
     
     background-color:orange;
     color:blue;
 }

    </style>
        <style>
        .btn {
            background-color: orange;
            color: blue;
        }
        .btn:active , .btn:focus {
            background-color: blue;
            color: orange;
        }
        .center {
            text-align: center;
        }
        .lst_thumb {
            height:75px;
            width:75px;
            border: 2px solid black;
            float: left;
            margin-right: 20px;
        }

        .lst_search {
            height: 250px;
        }

        .sm-header , .sm-header-icon , .remove-icon {
            font-weight:bold;
            font-size:12pt;
            text-align: center;
        }
        .sm-header-icon {
            color:green;
        }
        .remove-icon {
            color:red;
            
        }
        .dash-icon i {
            font-size:48pt;
            display:block;
            color:black;
        }
        .dash-icon > a:hover {
            color:red;
            text-decoration:none;
        }
		
		.planselect {
			background-color:orange;
			color:blue;
		}

    </style>
