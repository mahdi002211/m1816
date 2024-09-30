<?php include("agent/include/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Real State</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Your styles -->
    <link href="css/style.css" rel="stylesheet" media="screen">  
      <link href="jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen"> 
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5.js"></script>
    <![endif]-->

    <!-- styles for IE -->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie/ie.css" type="text/css" media="screen" />
    <![endif]-->
	<script src="admin\assets\js\tinymce\js\tinymce\tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea',
		plugins: "preview",
    toolbar: "preview"
		});
</script>
    
  </head>
  <body>
        <!-- Login Client -->
        <?php include("include/header.php"); ?>
        <!-- End Nav-->


        <!-- Section Title -->
        <div class="section_title about">
            <div class="container">
                <div class="row-fluid"> 
                    <div class="span6">
                        <h1>Register
                            <span><a href="index.html">Home </a> / Register</span>
                        </h1>
                    </div>                    
                </div>
            </div>            
        </div>
        <!-- End Section Title -->

        <!-- End content info -->
        <section class="container content_info">

            <!-- Title-->
            <div class="titles">
                <h1>Register</h1>
            </div>
            <!-- End Title-->

 
				
 



            
                            <div class="span6"  style="width:800px;">
							<form action="#" method="post" id="form1" enctype="multipart/form-data">
                   

                    <!-- Divisor-->
                    
                    <!-- End Divisor-->

                    
					  <div class="span6"> 
                          <input type="text" placeholder="Full name" name="fullname"  required size="20">
                      </div>
					  <br/>
					  <br/>
                      <div class="span6"> 
                          <input type="email" placeholder="Your Email" name="email" required size="20">
                      </div>
					  <br/>
					  <br/>
					  <div class="span6"> 
                          <input type="text" placeholder="Your phone" name="phone" required size="20">
                      </div>
					  <br/>
					  <br/>
					  <div class="span6"> 
                          <input type="text" placeholder="Your mobile" name="mobile" required size="20">
                      </div>
					  <br/>
					  <br/>
					  
					   <div class="span6">
					   
					   <b>Photo:</b>&nbsp; &nbsp;
					   
		<input type='file'  id="id-input-file-2" style="width:200px;"   name="file" />

					   </div>
					   <br/>
					  <br/>
					   <div class="span6">
					   <textarea name="description" >Description</textarea>
					   <br/>
					   
					   </div>
                      <div class="span6">
                          <input type="password" name="password" id="password" placeholder="Your Password" required size="20">                          
                      </div>
                      <div class="span6">
                          <input type="password" id="confirmpassword" placeholder="retype Your Password" required size="20">                          
                      </div>
					  <div class="span6" id="resultpassword">
                                                   
                      </div>

                      <div class="span6">
                          <input type="submit" class="botton" name="submit" value="Sign up">
                          <span>
						  <a class="various fancybox.ajax" href="register.html">
</div>

 </form>
 </div>
 
 </section>
        <!-- End content info-->

        <!-- Sponsors-->
        <div class="sponsors">
              <div class="container">
                  <div class="row-fluid">
                      <div class="span2">
                          <a href="#"></a>
                      </div>
                      <div class="span2">
                            <a href="#"></a>
                      </div>
                      <div class="span2">
                            <a href="#"></a>
                        </div>
                        <div class="span2">
                            <a href="#"></a>
                        </div>
                        <div class="span2">
                            <a href="#"></a>
                        </div>
                        <div class="span2">
                            <a href="#"></a>
                        </div>
                  </div>
            </div>
        </div>
        <!-- End Sponsors-->


        
<!-- End Full info-->


       
        <?php include("include/footer.php"); ?>
        <!-- End Footer area- footer_down -->
   
      <!-- ======================= JQuery libs =========================== -->
        <!-- Always latest version of jQuery-->
        <script src="js/jquery.min.js"></script>         
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <!--Nav-->
        <script type="text/javascript" src="js/nav/tinynav.js"></script> 
        <script type="text/javascript" src="js/nav/superfish.js"></script>                
        <!--efect_switcher-->
        <script type='text/javascript' src='js/efect_switcher/jquery.content-panel-switcher.js'></script> 
        <!--Totop-->
        <script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  
        <!--Slide-->
        <script type="text/javascript" src="js/slide/camera.js" ></script>      
        <script type='text/javascript' src='js/slide/jquery.easing.1.3.min.js'></script>         
        <!--Ligbox--> 
        <script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.1.js"></script>
        <!-- Bootstrap.js-->
        <script src="js/bootstrap.js"></script>
        <!--fUNCTIONS-->
        <script type="text/javascript" src="js/jquery-func.js"></script>
		<script src="jGrowl/jquery.jgrowl.js"></script> 
        <!--Run Slide Home-->
        <script type="text/javascript">
            $('#slide').camera({        
                height: '650px',
                 navigation: true  
             });
        </script>
		<script>
  $(document).ready(function() {
  $("#confirmpassword").change(function() {
   var confirmpassword=$("#confirmpassword").val();
   var password=$("#password").val();
   if(confirmpassword != password)
   {
	 $("#resultpassword").html('<b>Please enter the same value again.</b>'); 
	 $("#confirmpassword").focus(); 
	 return false;
   }
   else 
   {
	 $("#resultpassword").html(''); 
return true;	 
   }
   
});  
$("#password").change(function() {
   var confirmpassword=$("#confirmpassword").val();
   var password=$("#password").val();
   if(confirmpassword != password)
   {
	 $("#resultpassword").html('<b>Please enter the same value again.</b>'); 
	 $("#confirmpassword").focus(); 
	 return false;
   }
  else
   {
	 $("#resultpassword").html('');  
	 return true;
   }
   
});  
});
  </script>
        </i></i></i>
     <!-- ======================= End JQuery libs =========================== -->

  </body>
  <?php
											if(isset($_POST['submit']))
											{
												
		$selectmaxagent=mysql_fetch_array(mysql_query("select max(`agent_id`) as `agentid` from `agent`"));
$maxidagent=$selectmaxagent['agentid']+1;											
$fullname=$_POST['fullname'];	
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$description=$_POST['description'];
$email=$_POST['email'];
$place_file=$_FILES["file"]["name"];
$password=$_POST['password'];
if($description == "Description")
{
$description ='';
}

move_uploaded_file($_FILES["file"]["tmp_name"],
      "admin/profilepic/" .$place_file);  
$insertagent=mysql_query("insert into `agent` values('$maxidagent','$fullname','$email','$password','$phone','$mobile','$place_file','$description')");

if($insertagent)
{
$_SESSION['id']= $maxidagent;
$_SESSION['name']= $fullname;
echo "<script>
setTimeout(function(){
  window.location = 'admin/dashboard.php';
}, 500);
</script>";	
}
												
											}
											
											?>
											<?php
if(isset($_POST['login']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
		$select=mysql_query("SELECT * FROM `agent` where `email`='$username' and `password`='$password'");
			$selectnum=mysql_num_rows($select);
			
			
				
				
				
			if ($selectnum > 0)
			{
				
			$row= mysql_fetch_array($select);
			
				$id = $row['agent_id'];
				$pass =$row['password'];
				$name =$row['email'];
				$fullname=$row['fullname'];	
				if(isset($_POST['remember']))
				{
				    setcookie('cookie','',time()-3600);
					$_SESSION['agentid']= $id;
					$_SESSION['agentname']=$fullname;
					
					
					echo "<script>
setTimeout(function(){
  window.location = 'agent/dashboard.php';
}, 0);
</script>";	


			}
			else
			{
				$_SESSION['agentid']= $id;
				$_SESSION['agentname']= $fullname;
				
				
				echo "<script>
setTimeout(function(){
  window.location = 'agent/dashboard.php';
}, 0);
</script>";	


				
			}
			}
			
			else
			{
			echo"
<script>
$(function() {
$.jGrowl('Please enter email and password correctly', { header: 'Login' });
});
</script>
";
				echo'
				<script>
				$(document).ready(function() {
				
				
setTimeout(function(){
  window.location = "index.php";
}, 2000);
	
				});
				</script>
				';	
		
				
			}
			
			
			
			
			
		
}
?>	
</html>