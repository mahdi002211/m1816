<footer class="section_area footer_medium">
            <div class="container">
                <div class="row-fluid">
<?php
$selectadds=mysql_fetch_array(mysql_query("select * from `adds`"));
?>
                  <div style="width:720px; height:90px;position:relative;margin-left:100px;" >       
                          <p><?php echo $selectadds['add_720_90']; ?></p>
                      </div>
                       
                    </div>
                    <!-- End Contact Footer -->
                </div>
            </div>
        </footer>
        <footer class="section_area footer_down">
            <div class="container">
                <div class="row-fluid">
                   <div class="span6">
                        <p>&copy; 2014 www.yoursite.com All rights reserved.</p>             
                    </div>
					<?php
		$selectsocial=mysql_fetch_array(mysql_query("select * from `social_links`"));
		?>
                    <div class="span6">
                        <ul class="social">
                            <li class="tooltip_hover" title="Facebook">
                                <a href="<?php echo $selectsocial['facebook'];?>"><i class="icon-facebook"></i></a>
                            </li>
                            <li  class="tooltip_hover" title="Twitter">
                                <a href="<?php echo $selectsocial['twitter'];?>"><i class="icon-twitter"></i></a>
                            </li>
                            <li  class="tooltip_hover" title="Google Plus">
                                <a href="<?php echo $selectsocial['google_plus'];?>"><i class="icon-google-plus"></i></a>
                            </li>
                            <li  class="tooltip_hover" title="Pinterest">
                                <a href="<?php echo $selectsocial['pinterest'];?>"><i class="icon-pinterest"></i></a>
                            </li>
                            <li  class="tooltip_hover" title="Linkedin">
                                <a href="<?php echo $selectsocial['linkedin'];?>"><i class="icon-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>