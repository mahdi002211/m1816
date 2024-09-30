<?php include("admin/include/connection.php"); ?>
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
        <?php include("include/header.php");?>
        <header>  
            <div class="bg_header sections">
                <div class="container">                    

                    <div class="row-fluid">
                        <ul class="tabs_services">
                            <li><a id="1" class="switcher set2">For Sale</a></li>          
                            <li><a id="2" class="switcher set2">For Rent</a></li>
                            
                        </ul>

                        <div class="switcher-panel"></div> 

                        <!-- 1-content -->
                        <div id="1-content" class="switcher-content set2 show">
                            <div class="search_box row-fluid">
                                <form action="property_search.php" method="post">
                                    <div class="span3">
                                        <label>Search</label>
                                        <input type="text" name="propertyname"   size="20">
                                        <input type="hidden" name="type" value="1">
                                    </div>
                                    <div class="span3">
                                        <label>Location</label>
                                         <select name="location">
												<option value="">-- Select location --</option>
												<?php
								$selectlocation=mysql_query("select DISTINCT location from `properties` where `type`='1' and `active`='1' and `block`='0' and `agent_block`='0'");
												while($selectarraylocation=mysql_fetch_array($selectlocation))
												{
												
                                                    
                  echo '<option value='.$selectarraylocation['location'].'>'.$selectarraylocation['location'].'</option>';
                                                     

}
?>													 
                                                 </select>
                                    </div>
                                    <div class="span2">
                                        <label>Price Range</label>
                                        <select name="pricing">
                                                      <option value="allprice">View all</option>                                  
                                                    <option value="smallerthan300000">0 - 300.000</option>
                                                    <option value="between300000and500000">300.000 - 500.000</option>
                                                    <option value="between500000and800000">500.000 - 800.000</option>
                                                    <option value="between800000and1000000">800.000 - 1.000.000</option>
                                                    <option value="biggerthan100000">10.000.000 +</option>    
                                                </select>
                                    </div>
                                    <div class="span2">
                                        <label>Area</label>
                                        <select name="area">
                                                    <option value="allarea">View all</option>
                                                    <option value="smallerthan60">0 - 60 m²</option>
                                                    <option value="between60and90">60 m² - 90 m²</option>
                                                    <option value="between90and150">90 m² - 150 m²</option>
                                                    <option value="between150and240">150 m² - 240 m²</option>
                                                    <option value="between240and360">240 m² - 360 m²</option>
                                                    <option value="between360and480">360 m² - 480 m²</option>
                                                    <option value="between480and600">480 m² - 600 m²</option>
                                                    <option value="biggerthan600">More 600 m²</option>
                                                </select>
                                    </div>
                                    <div class="span2">
                                        <input type="submit" class="button" value="Search">
                                    </div> 
                                </form>                               
                            </div>                     
                        </div>
                        <!-- End 1-content -->

                        <!-- 2-content -->
                        <div id="2-content" class="switcher-content set2">
                           <div class="search_box row-fluid">
                                 <form action="property_search.php" method="post">
                                    <div class="span3">
                                        <label>Search</label>
                                       <input type="text" name="propertyname"   size="20">
                                        <input type="hidden" name="type" value="2">
                                    </div>
                                    <div class="span3">
                                        <label>Location</label>
                                        <select name="location">
												<option value="">-- Select location --</option>
												<?php
												$selectlocation=mysql_query("select DISTINCT location from `properties` where `type`='2' and `active`='1' and `block`='0' and `agent_block`='0'");
												while($selectarraylocation=mysql_fetch_array($selectlocation))
												{
												
                                                    
                  echo '<option value='.$selectarraylocation['location'].'>'.$selectarraylocation['location'].'</option>';
                                                     

}
?>													 
                                                 </select>
                                    </div>
                                    <div class="span2">
                                        <label>Price Range</label>
                                         <select name="pricing">
                                                      <option value="allprice">View all</option>                                  
                                                    <option value="smallerthan300000">0 - 300.000</option>
                                                    <option value="between300000and500000">300.000 - 500.000</option>
                                                    <option value="between500000and800000">500.000 - 800.000</option>
                                                    <option value="between800000and1000000">800.000 - 1.000.000</option>
                                                    <option value="biggerthan1000000">10.000.000 +</option>    
                                                </select>
                                    </div>
                                    <div class="span2">
                                        <label>Area</label>
                                        <select name="area">
                                                    <option value="allarea">View all</option>
                                                    <option value="smallerthan60">0 - 60 m²</option>
                                                    <option value="between60and90">60 m² - 90 m²</option>
                                                    <option value="between90and150">90 m² - 150 m²</option>
                                                    <option value="between150and240">150 m² - 240 m²</option>
                                                    <option value="between240and360">240 m² - 360 m²</option>
                                                    <option value="between360and480">360 m² - 480 m²</option>
                                                    <option value="between480and600">480 m² - 600 m²</option>
                                                    <option value="biggerthan600">More 600 m²</option>
                                                </select>
                                    </div>
                                    <div class="span2">
                                        <input type="submit" class="button" value="Search">
                                    </div> 
                                </form>                                 
                            </div> 
                        </div>
                        
                    </div>
                </div>
            </div>
			<?php
			$selectuser=mysql_fetch_array(mysql_query("select * from `user`"));
			$emailto=$selectuser['email'];
			?>
            <!-- Slide -->           
            <div class="map_area">  
			
               
				 <iframe src="

 

http://maps.google.com/maps
?f=q
&amp;source=s_q
&amp;hl=en
&amp;geocode=
&amp;q=<?php echo $selectuser['address']; ?>
&amp;near=<?php echo $selectuser['city']; ?>
&amp;g=
&amp;aq=0
&amp;ie=UTF8
&amp;hq=
&amp;t=m
&amp;ll=<?php echo $selectuser['longitude']; ?>,<?php echo $selectuser['latitude']; ?>
&amp;z=12
&amp;iwloc=
&amp;output=embed"  >
                </iframe>
				
				
				
				
            </div>    
        </header>
        <!-- End Header-->

        <!-- End content info -->
        <section class="container content_info">
          
            <!-- Solutions-->
            <div class="row-fluid padding_top">
                <div class="span5">
                    <h2>CONTACT FORM</h2>
                    <form  action="#" method="post">
                        <input type="text" placeholder="Title" name="title" required size="20">
                        <input type="email" placeholder="Email"  name="email" required size="20">
                        
                        <textarea placeholder="Your Message" name="message" style="width:350px;" required rows="10" cols="30"></textarea>
                        <input type="submit" name="submit" value="Send Message" class="button">
                    </form> 
                    <div id="result"></div> 
                </div>
                <div class="span7">
                    
<h2>Contact US</h2>
                    <p><?php echo $selectuser['fullname']; ?></p>

                    <!-- Divisor-->
                    <div class="divisor divisor_services">
                        <div class="circle_left"></div>
                        <div class="circle_right"></div>
                    </div>
                    

                    <div class="row-fluid">
					<?php
					$selectcontact=mysql_query("select * from `contact`");
					$i=0;
					while($selectcontactarray=mysql_fetch_array($selectcontact))
					{
					?>
                      <?php
if($i < 2)
{
echo '<div class="span6 item_agent" style="width:250px;">';
}
else
{
echo '<div class="span6 item_agent" style="right:15px;position:relative;width:250px;">';
}

?>					  
						
                            <div class="span4 image_agent">
                                <img src="admin/logo/<?php echo $selectcontactarray['photo']; ?>" style="height:70px;" alt="Image">
                            </div>
                            <div class="span7 info_agent">                                
                                <ul>
                                    <li style="width:150px;"><i class="icon-envelope"></i><a href="#"><?php echo $selectcontactarray['email']; ?></a></li>
                                    <li><i class="icon-phone"></i><a href="#"><?php echo $selectcontactarray['mobile']; ?></a></li>
                                </ul>                                        
                            </div>
                        </div>
						
						<?php
						$i++;
						}
						?>
                        
                    </div>
                </div>
				
            </div>
            <!-- End Solutions-->

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
  if(isset($_POST['submit']))
  {
  $title=$_POST['title'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To:'.$emailto. "\r\n";
$headers .= 'From: '.$email.' <'.$email.'>' . "\r\n";
mail($emailto,$title,$message,$headers);
 echo"
<script>
$(function() {
$.jGrowl('Your email has been sent', { header: 'Email' });
});
</script>
";
echo "<script>
setTimeout(function(){
  window.location = 'contact.php';
}, 2000);
</script>";	
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