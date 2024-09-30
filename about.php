<?php include("admin/include/connection.php");?>
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
   
  </head>
  <body>
        <!-- Login Client -->
        
        <?php include("include/header.php");?>
        <div class="section_title about">
            <div class="container">
                <div class="row-fluid"> 
                    <div class="span6">
                        <h1>ABOUT US
                            <span><a href="index.html">Home </a> / About Us</span>
                        </h1>
                    </div>                    
                </div>
            </div>            
        </div>


        <section class="container content_info">

            <!-- Title-->
            <?php
			$selectabout=mysql_fetch_array(mysql_query("select * from `about`"));
			
			?>
            <div class="titles">
            <img src="admin/logo/<?php echo $selectabout['photo']; ?>" style="width:200px;"> 
            </div>
            <!-- End Title-->

            <div class="row-fluid">                            
                <p class="lead">
                  <?php echo $selectabout['description']; ?>
                </p>                                 
            </div>

            <!-- Divisor-->
            
            <!-- End Divisor-->

            

            <!-- Divisor-->
            
            <!-- End Divisor-->


           <!-- Title-->
            
            <!-- End Title-->

            <!-- Portals-->
            
            <!-- End Portals-->

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


        
<?php include("include/footer.php"); ?>
   
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
        </i></i></i>
     <!-- ======================= End JQuery libs =========================== -->

  </body>
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