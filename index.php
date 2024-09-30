﻿<!DOCTYPE html>
<?php include("agent/include/connection.php"); ?>
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
       <?php include("include/header.php"); ?>
        <!-- End Nav-->

        <!-- Header-->
        <header> 
            <div class="container">
                <div class="row-fluid">
                    <div class="span4 bg_header">                        
                         
                            <div class="row-fluid">
                                <ul class="tabs_services">
                                    <li><a id="1" class="switcher set2">For Sale</a></li>          
                                    <li><a id="2" class="switcher set2">For Rent</a></li>
                                    
                                </ul>
                                
                                <div class="clearfix"></div>
                                <div class="switcher-panel"></div> 

                                <!-- 1-content -->
                                <div id="1-content" class="switcher-content set2 show">
                                    <div class="search_box">
                                        <form action="property_search.php" method="post">
                                            <div class="">
                                                <label>Search</label>
                                                <input type="text" name="propertyname"  size="20">
												<input type="hidden" name="type" value="1">
                                            </div>
                                            <div class="">
                                                <label>Location</label>
                                                <select name="location">
												<option value="">View all</option>
												<?php
												$selectlocation=mysql_query("select DISTINCT location from `properties` where `type`='1' and `active`='1' and `block`='0' and `agent_block`='0'");
												while($selectarraylocation=mysql_fetch_array($selectlocation))
												{
												
                                                    
                  echo '<option value='.$selectarraylocation['location'].'>'.$selectarraylocation['location'].'</option>';
                                                     

}
?>													 
                                                 </select>
                                            </div>
                                            <div class="">
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
                                            <div class="">
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
                                            <div class="">
                                                <input type="submit" class="button" value="Search">
                                            </div> 
                                        </form>                               
                                    </div>                     
                                </div>
                                <!-- End 1-content -->

                                <!-- 2-content -->
                                <div id="2-content" class="switcher-content set2">
                                   <div class="search_box">
                                        <form action="property_search.php" method="post">
                                            <div class="">
                                                <label>Search</label>
                                                <input type="text" name="propertyname"  size="20">
												<input type="hidden" name="type" value="2">
                                            </div>
                                            <div class="">
                                                <label>Location</label>
                                                <select name="location">
												<option value="">View all</option>
												<?php
												$selectlocation=mysql_query("select DISTINCT location from `properties` where `type`='2' and `active`='1' and `block`='0' and `agent_block`='0'");
												while($selectarraylocation=mysql_fetch_array($selectlocation))
												{
												
                                                    
                  echo '<option value='.$selectarraylocation['location'].'>'.$selectarraylocation['location'].'</option>';
                                                     

}
?>													 
                                                 </select>
                                            </div>
                                            <div class="">
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
                                            <div class="">
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
                                            <div class="">
                                                <input type="submit" class="button" value="Search">
                                            </div> 
                                        </form>                               
                                    </div>   
                                </div>
                                <!-- End 1-content -->

                                <!-- 3-content -->
                                
                                <!-- End 3-content -->
                            </div>
                        
                    </div>
                </div>
            </div> 
            
            <!-- Slide -->   
			
            <div class="camera_wrap" id="slide">
                <!-- Item Slide -->  
				<?php
				$selectslide=mysql_query("select * from `slider`");
				while($selectarrayslide=mysql_fetch_array($selectslide))
				{
				
				$selectreandomfea=mysql_fetch_array(mysql_query("select * from `properties` where `featured`='1' and `active`='1' and `block`='0' and `agent_block`='0' ORDER BY RAND()"));
				
				?>
				
                 <div  data-src="admin/sliderpic/<?php echo $selectarrayslide['slider_pic']; ?>">
                    <div class="camera_caption fadeFromTop">
                         <div class="container"> 
                            <div class="span7 offset5">
                                <h1 class="animated fadeInRight delay1"><?php echo $selectreandomfea['property_title']; ?>
                                    <span class="arrow_title_slide"></span>
                                </h1>   
                                <p class="animated fadeInRight delay2"><?php echo $selectreandomfea['short_description']; ?></p> 
                                <ul class="animated fadeInRight delay3">
                                    <li class="bathrooms"><span>
									<img src="img/icon_bathroom.png" style="width:20px;">
									
									<?php echo $selectreandomfea['bathrooms']; ?></span></li>
                                    <li class="bedrooms"><span>
									<img src="img/bedroom-icon-150x150.png" style="width:20px;">
									<?php echo $selectreandomfea['bedrooms']; ?></span></li>
                                    <li class="price">$<span><?php echo $selectreandomfea['price']; ?></span></li>
                                </ul>
                                <div class="more animated fadeInRight delay4">
                                    <a href="property_show.php?id=<?php echo $selectreandomfea['property_id']; ?>" class="button">More Info</a>
                                </div>
                            </div>                         
                        </div>      
                    </div>
                 </div>
				 <?php
				 
				 }
				 ?>
                <!-- End Item Slide -->  

                
            </div>  
            <!-- End Slide -->   
        </header>
        <!-- End Header-->


        <!-- End content info -->
        <section class="container content_info">
            

            
            <!-- Title-->
            <div class="titles">
                <span>WHAT WE OFFER</span>
                <br>
                <h1>OUR RECENT PROPERTY</h1>
            </div>
            <!-- End Title-->

            <!-- End Title-->
            <div class="row-fluid padding_top_mini" style="width:1100px;" >
                  <!-- Item Property-->
				  <?php
				  
				   $select=mysql_query("select * from `properties` where `active`='1' and `block`='0' and `agent_block`='0' order by `property_id` desc limit 9");
				   $numproperty=mysql_num_rows($select);
				   
						if($numproperty > 0)
						{
						$i=0;
						while(@$row = mysql_fetch_array($select))
						{
						
						$agent_id=$row['agent_id'];
						$selectagent=mysql_fetch_array(mysql_query("select * from `agent` where `agent_id`='$agent_id'"));
						
						$property_id=$row['property_id'];
						$selectphoto=mysql_fetch_array(mysql_query("select * from `property_photo` where `property_id`='$property_id' order by `pro_photo_id` asc limit 1"));
				  ?>
				  <?php
				  if($i < 3)
				  {
				  echo '<div class="span3" style="width:300px;">';
				  }
				  else
				  {
				  echo '<div class="span3" style="width:300px;right:25px;position:relative;">';
				  }
				  ?>
                  
                      <div class="item_property">
                          <div class="head_property">
						  <?php
						  if($row['type'] == 2)
						  {
						  echo '<div class="title rent"></div>';
						  }
						  else
						  {
						   echo '<div class="title sale"></div>';
						  }
						  ?>
                              
                              <img src="agent/propertypic/<?php echo $selectphoto['photo']; ?>" style="height:200px;" alt="Image">
                              <h5><a href="property_show.php?id=<?php echo $row['property_id']; ?>"><?php echo $row['property_title'];?></a></h5>
                          </div>                        
                          <div class="info_property">                                  
                              <ul>
                                  <li class=""><strong>Place </strong><span><?php echo $row['location'];?></span></li>
                                  <li><strong>Price</strong><span>$<?php echo $row['price'];?></span></li>
                              </ul>                                 
                          </div>
                        </div>
                   </div>
                  <?php
	
					$i++;
					
							}
							}
							?>

                  

                   

                  
                  
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
        


       <?php include("include/footer.php");?>
   
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