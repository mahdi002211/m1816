<?php include("include/connection.php");
if($_SESSION['agentname']!= null){
header("Location: dashboard.php");
}
?> 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Real estate</title>
 <script src="assets/js/jquery.js"></script>
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<?php include("include/style.php");?>

		
	</head>

	<?php
if(isset($_POST['login']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
		
			$select= mysql_query("SELECT * FROM `agent`");
			while($row= mysql_fetch_array($select))
			{
				$id = $row['agent_id'];
				$pass =$row['password'];
				$name =$row['email'];
				$fullname=$row['fullname'];
				
				
				
			if ($pass == $password && $username == $name)
			{
				
				
				if(isset($_POST['remember']))
				{
				    setcookie('cookie','',time()-3600);
					$_SESSION['agentid']= $id;
					$_SESSION['agentname']=$fullname;
					
					
					echo "<script>
setTimeout(function(){
  window.location = 'dashboard.php';
}, 0);
</script>";	


			}
			else
			{
				$_SESSION['agentid']= $id;
				$_SESSION['agentname']= $fullname;
				
				
				echo "<script>
setTimeout(function(){
  window.location = 'dashboard.php';
}, 0);
</script>";	


				
			}
			}
			else if($password == '' || $username == '' )
			{
			echo'
				<script>
				$(document).ready(function() {
				$(".forgot-password-link").html("Please enter the Email and password");
				
setTimeout(function(){
  window.location = "index.php";
}, 2000);
	
				});
				</script>';
			}
			else
			{
				echo'
				<script>
				$(document).ready(function() {
				$(".forgot-password-link").html("&nbsp; Sorry the Email and password not correct");
				
setTimeout(function(){
  window.location = "index.php";
}, 2000);
	
				});
				</script>
				';
		
				
			}
			
			}
		
}
?>

	
	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="icon-leaf green"></i>
									<span class="red">Real Estate</span>
									<span class="white">Application</span>
								</h1>
								
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
                                    
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>

											<form action="#" method="post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
		<input type="text" name="username" class="form-control" placeholder="Email" />
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
			<input type="password" name="password" class="form-control" placeholder="Password" />
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

		<button type="submit" name="login" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="icon-key"></i>
															Login
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
											
										</div><!-- /widget-main -->

										<div class="toolbar clearfix">
											<div >
												
													
			<span class="forgot-password-link"> &nbsp;</span>
												
											</div>

											<div>
												
											</div>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->

								<!-- /forgot-box -->

								<!-- /signup-box -->
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		
	</body>
	
	
 
    
    <script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
		</script>
</html>
