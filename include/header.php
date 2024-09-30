
 

 <div class="jBar">
          <div class="container">            
              <div class="row-fluid"> 
<?php
if($_SESSION['agentname']== null){

?>			  
                  <form action="#" method="post">            
                      <div class="span2">
                          <h1>Agent Login</h1> 
                      </div>
                      <div class="span4"> 
                          <input type="email" name="username" placeholder="Your Email" required size="20">
                      </div>
                      <div class="span3">
                          <input type="password" name="password" placeholder="Your Password" required size="20">                          
                      </div>
                      <div class="span3">
                          <input type="submit" class="botton" name="login" value="Sign in">
                          <span>Or&nbsp; <a href="register.php"><font color="#f1f0f0">Register</font></a></span><p>&nbsp;</div>
                  </form>
				  
                  <p class="jTrigger downarrow">Close Login</p>
				  <?php
				  }
				 else
				 {
				 echo '<a href="logout.php"><p class="jTrigger downarrow">Logout</p></a>';
				 }
				  ?>
              </div>
          </div>
        </div>
		<?php
		if($_SESSION['agentname']== null){
		?>
        <span class="jRibbon jTrigger up">Login</span>
		<?php
		}
		else
		{
		echo '<span class="jRibbon jTrigger up">Welcome '.$_SESSION['agentname'].'</span>';
		}
		?>
        <div class="line"></div>
        <!-- End Login Client -->

        <!-- Info Head -->
		<?php
		$selectsocial=mysql_fetch_array(mysql_query("select * from `social_links`"));
		?>
        <section class="container info_head">              
            <ul>  
                <li class="" title="Facebook">
                                <a href="<?php echo $selectsocial['facebook'];?>"><i class="icon-facebook"></i>
                                                <li class="" title="Twitter">
                                <a href="<?php echo $selectsocial['twitter'];?>"><i class="icon-twitter"></i>
                                                <li class="" title="Google Plus">
                                <a href="<?php echo $selectsocial['google_plus'];?>"><i class="icon-google-plus"></i>
                                                <li class="" title="Pinterest">
                                <a href="<?php echo $selectsocial['pinterest'];?>"><i class="icon-pinterest"></i>
                                                <li class="" title="Linkedin">
                                <a href="<?php echo $selectsocial['linkedin'];?>"><i class="icon-linkedin"></i>


            </ul>               
        </section>
        <!-- Info Head -->

        <!-- Nav-->
        <nav>
            <div class="container">
                <div class="row-fluid">
                    <div class="span3 logo">
                        <a href="index.php"><img src="img/logo.png" alt="Image"></a>
                    </div>
                    <!-- Menu-->
                    <ul id="menu" class="span9 sf-menu">
                        <li><a href="index.php">Home</a>
                            
                        </li>
						<li><a href="property_search.php?propertyname=&type=1&location=&pricing=allprice&area=allarea&search=1">For Sale</a>
                            
                        </li>
						<li><a href="property_search.php?propertyname=&type=2&location=&pricing=allprice&area=allarea&search=2">For Rent</a>
                            
                        </li>
                        
                      
                          <li><a href="register.php">Register</a>                                                                            
                        <li><a href="about.php">About</a></li>
						
                            
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <!-- End Menu-->
                </div>
            </div>
        </nav>
		
