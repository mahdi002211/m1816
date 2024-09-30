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
								
								
								داشبورد
							</a>
						</li>';
						}
						else
						{
						echo '<li>
							<a href="dashboard.php">
								
								
								داشبورد
							</a>
						</li>';
						}
						
						if($menu == "slider.php")
						{
						echo '
						<li class="active" >
							<a href="slider.php">
								
								<span class="menu-text">اسلایدر</span>
							</a>
						</li>';
						}
						else
						{
						echo '
						<li>
							<a href="slider.php">
								
								<span class="menu-text">اسلایدر</span>
							</a>
						</li>';
						}
						if($menu == "agent.php")
						{
						echo '
						<li class="active" >
							<a href="agent.php">
								
								<span class="menu-text">کاربران</span>
							</a>
						</li>';
						}
						else
						{
						echo '
						<li>
							<a href="agent.php">
								
								<span class="menu-text">کاربران</span>
							</a>
						</li>';
						}
						
						
						
                        
                       $menupend=basename($_SERVER['PHP_SELF'])."?active=".$active;
						if($menupend == "properties.php?active=0")
						{
						echo '
						<li class="active" >
							<a href="properties.php?active=0">
								
								<span class="menu-text">ملک های در انتظار
 </span>
							</a>
						</li>';
						}
						else
						{
						echo '
						<li>
							<a href="properties.php?active=0">
								
								<span class="menu-text">ملک های در انتظار
 </span>
							</a>
						</li>';
						}
						
						if($menupend == "properties.php?active=1")
						{
						echo '<li class="active" >
							<a href="properties.php?active=1">
								
								<span class="menu-text">ملک های فعال </span>
							</a>
						</li>';
						}
						else
						{
						echo '<li>
							<a href="properties.php?active=1">
								
								<span class="menu-text">ملک های فعال </span>
							</a>
						</li>';
						}
						if($menu == "block_properties.php")
						{
						echo '<li class="active">
							<a href="block_properties.php">
								
								<span class="menu-text">ملک های مسدود </span>
							</a>
						</li>';
						}
						else
						{
						echo '<li>
							<a href="block_properties.php">
								
								<span class="menu-text"> های مسدود </span>
							</a>
						</li>';
						}
						
						if($menu == "featured_properties.php")
						{
						echo '<li class="active">
							<a href="featured_properties.php">
								
								<span class="menu-text">ملک های برجسته </span>
							</a>
						</li>';
						}
						else
						{
						echo '<li>
							<a href="featured_properties.php">
								
								<span class="menu-text"> های برجسته </span>
							</a>
						</li>';
						}
						if($menu == "reject_properties.php")
						{
						echo '<li class="active">
							<a href="reject_properties.php">
								
								<span class="menu-text">ملک های رد شده </span>
							</a>
						</li>';
						}
						else
						{
						echo '<li>
							<a href="reject_properties.php">
								
								<span class="menu-text"> های رد شده </span>
							</a>
						</li>';
						}
						if($menu == "ads.php")
						{
						echo '<li class="active">
							<a href="ads.php">
								
								<span class="menu-text">بنر</span>
							</a>
						</li>';
						}
						else
						{
						echo '<li>
							<a href="ads.php">
								
								<span class="menu-text">بنر</span>
							</a>
						</li>';
						}
						if($menu == "settings.php")
						{
						echo '<li class="active">
							<a href="settings.php">
								
								<span class="menu-text">تنظیمات</span>
							</a>
						</li>';
						}
					else
					{
					echo '<li>
							<a href="settings.php">
								
								<span class="menu-text">تنظیمات</span>
							</a>
						</li>';
					}
						
						echo '<li>
							<a href="logout.php">
								
								<span class="menu-text"> خروج </span>
							</a>
						</li>';

						

						

						

						

						

						

						
						
					echo '</ul>';
					?>