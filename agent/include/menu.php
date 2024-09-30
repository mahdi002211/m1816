<?php
session_start();
?>
<ul class="nav nav-list">
<?php
$menu=basename($_SERVER['PHP_SELF']); 
$active=$_GET['active'];
if($menu == "dashboard.php")
{
echo '
<li class="active" >
							<a href="dashboard.php">
								
								
								Dashboard
							</a>
						</li>';
						}
						else
						{
						echo '<li>
							<a href="dashboard.php">
								
								
								Dashboard
							</a>
						</li>';
						}

						
						
						
						if($menu == "profile.php")
{
						echo '<li class="active">
							<a href="profile.php">
								
								<span class="menu-text">My profile</span>
							</a>
						</li>';
						}
						else
						{
						echo '<li>
							<a href="profile.php">
								
								<span class="menu-text">My profile</span>
							</a>
						</li>';
						}
						
						
                        if($menu == "add_property.php")
						{
                        echo '<li class="active" >
							<a href="add_property.php">
								
								<span class="menu-text">New property </span>
							</a>
						</li>';
						}
						else
						{
						echo '<li>
							<a href="add_property.php">
								
								<span class="menu-text">New property </span>
							</a>
						</li>';
						}
						
						$menupend=basename($_SERVER['PHP_SELF'])."?active=".$active;
						if($menupend == "properties.php?active=1")
						{
						echo '<li class="active">
							<a href="properties.php?active=1">
								
								<span class="menu-text">Active properties </span>
							</a>
						</li>';
						}
						else
						{
						echo '<li>
							<a href="properties.php?active=1">
								
								<span class="menu-text">Active properties </span>
							</a>
						</li>';
						}
						if($menupend == "properties.php?active=0")
						{
						echo '<li class="active">
							<a href="properties.php?active=0">
								
								<span class="menu-text">Pending properties </span>
							</a>
						</li>';
						}
						else
						{
						echo '<li>
							<a href="properties.php?active=0">
								
								<span class="menu-text">Pending properties </span>
							</a>
						</li>';
						}
						if($menu == "block_properties.php")
						{
                        echo '<li class="active" >
							<a href="block_properties.php">
								
								<span class="menu-text">Block properties </span>
							</a>
						</li>';
						}
						else
						{
						echo '<li>
							<a href="block_properties.php">
								
								<span class="menu-text">Block properties </span>
							</a>
						</li>';
						}
						if($menu == "changepassword.php")
						{
						echo '<li class="active">
							<a href="changepassword.php">
								
								<span class="menu-text">Change password</span>
							</a>
						</li>';
						}
						else
						{
						echo '<li>
							<a href="changepassword.php">
								
								<span class="menu-text">Change password</span>
							</a>
						</li>';
						}
					
						echo '
						<li>
							<a href="logout.php">
								
								<span class="menu-text"> Logout </span>
							</a>
						</li>

						

						

						

						

						

						

						
						
					</ul>';
					?>