<?php require("header.php");
    $usr = $_SESSION["currentUser"];
	$user_idd=$usr->user_id;
	error_reporting(0);
?>
<style>
input#reg-button {
    background: orange;
    border: none;
    color: #fff;
    padding: 5px 14px;
    box-shadow: 2px 4px 15px #aaa;
}
</style>
<body>
<div id="wrapper">
        <?php  require("menu.php") ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header center">Add Agent</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<?php 
			if (isset($_POST["sign_sub"])) 
		{
			echo "gdgd";
		echo $email=$_POST['email'];
		echo $name=$_POST['firt_name'];
		echo $passswrd=$_POST['conpassword'];
		echo $passswrd_md5=md5($_POST['conpassword']);
	echo	$phone=$_POST['phone'];
	echo	$user_adr=$_POST['address'];
	echo	$user_cty=$_POST['cityname'];
	echo	$user_stat=$_POST['statename'];
	echo	$user_zip=$_POST['zip'];
		echo $current= date("Y-m-d");
	            
		    $to = "$email";
		    $subject = "Username and Password";
			$txt = 'Hello '.$name.'<br> Here is your username and password <br> 
			USERNAME : '.$email.'<br> PASSWORD :'.$passswrd;
			$headers .='Reply-To: '. $to . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "X-Mailer: PHP". phpversion() ."\r\n";
			$headers .= "X-Priority: 3\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			/* $success = mail($to,$subject,$txt,$headers);
			 */
			
			$sql_1 = "INSERT INTO `users`(`office_id`, `user_name`, `user_password`, `user_email`, `user_status`, `user_phone`, `user_address`, `user_state`, `user_city`, `user_zip`,`user_register`) VALUES (1,'shivali','$passswrd_md5','sdfd@gffdg.com','active','5675868','gfdgdfr','dhh','hdfhdh','89078','$current')";
			$res1 = $con->query($sql_1);
			
			$last_get = mysqli_insert_id($con);
			
			$sql_2 = "INSERT INTO `agents`(`owner_id`, `agent_id`,`status`) VALUES ('$user_idd','$last_get',1)";
			$res2 = $con->query($sql_2);

           $_SESSION['success']=1;			
		}
			?>
			
<?php if($_SESSION['success']==1)
{ $_SESSION['success']=0; ?>
<div  class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for Signing us, Please login.</div>
<?php }?>
			
			
		<form class="well form-horizontal" action="" method="post"  id="contact_form">
<fieldset>
  



<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="password" placeholder="Password" class="form-control"  type="password">
    </div>
  </div>
</div>


<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Confirm Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="conpassword" placeholder="Confirm Password" class="form-control"  type="password">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Full Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="firt_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="cityname" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>



<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
   <input name="statename" type="text" class="form-control" id="state" placeholder="state">
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Zip Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
    </div>
</div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
   <input type="submit" id="reg-button" name="sign_sub" value="Add Agent" class="reg-ter">
  </div>
</div>

</fieldset>
</form>
</div>

    </div>
    <!-- /#wrapper -->
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrapvalidator.min.js"></script>

</body>
<script>
  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your username'
                    }
                }
            },
			
			
			firt_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
			
			
			
             
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
			 
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
			city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    }
                   
                }
            },
            
			password: {
                validators: {
                    notEmpty: {
                        message: 'Please Fill your Password'
                    },
					   identical: {
                    field: 'confirmPassword',
                    message: 'The password and its confirm are not the same'
                }
                }
            },
				
				
        conpassword: {
            validators: {
				notEmpty: {
                        message: 'Please Fill your Password'
                    },
                identical: {
                    field: 'password',
                    message: 'The password and its confirm are not the same'
                }
            }
        }
				
				
				
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
</script>
</html>
