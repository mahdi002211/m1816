<?php include("include/connection.php");
if($_SESSION['agentname']== null){
header("Location: index.php");
}
date_default_timezone_set('Africa/Cairo');
 $date = date('Y-m-d');
 $time = date("H:i:s");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Footer</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<?php include("include/allscript.php");?>
        <?php include("include/style.php");?>
     
  
  
  
  
  
  
       
        
        
  <script src="assets\js\tinymce\js\tinymce\tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea',
		plugins: "preview",
    toolbar: "preview"
		});
</script>

<script>
  function showdetails(id)
  {
  $(document).ready(function(e) {
$.ajax({
url:"show_details_quicklink.php",
type:"GET",
data:"id="+id,
success: function(msg)
{
$(".modal-content").html(msg);
}	
});
  });
  }  
  </script>
  
  
  <script>
  function deleteproject(id)
  {
  var allid=parseInt(id);
  $(document).ready(function(e) {
$.ajax({
url:"delete_all_quicklink.php",
type:"GET",
data:"id="+allid,
success: function(msg)
{
$(".modal-content").html(msg);
$(".modal-content").css("height","200px");
}	
});
  });
  }  
  </script>
  
 
  
  
  
  
  
  
  
  
  
  
  
  
 
        
        
       
       
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<?php include("include/header.php");?>
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<!-- #sidebar-shortcuts -->

					<?php include("include/menu.php");?><!-- /.nav-list -->

				  <div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
				  <div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						
<ul class="breadcrumb">
													
						</ul><!-- .breadcrumb -->
						

						
					</div>

					<div class="page-content"><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<!-- /row -->
								<div class="col-sm-6" style="width:800px;">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
												<li class="active">
													<a data-toggle="tab" href="#socialmedia">Social media</a>
												</li>

												

												<li>
										<a data-toggle="tab" href="#quicklinks">Quick Links</a>
												</li>
												<li>
										<a data-toggle="tab" href="#aboutus">About us</a>
												</li>
												<li>
										<a data-toggle="tab" href="#contactus">Contact us</a>
												</li>
											</ul>
                                            <?php
$selectsocial=mysql_fetch_array(mysql_query("select * from `social_about`"));

											
											?>

											<div class="tab-content">
						<div id="socialmedia" class="tab-pane in active">
<form action="#" method="post" id="form1" enctype="multipart/form-data">
<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Facebook</b></label>

										<div class="col-sm-9">										
<input type="text" name="facebook"  class="form-control" style="width:350px;" 
value="<?php echo $selectsocial['facebook']; ?>" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Twitter</b></label>

										<div class="col-sm-9">										
<input type="text" name="twitter"  class="form-control" style="width:350px;"
 value="<?php echo $selectsocial['twitter']; ?>" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Linkedin</b></label>

										<div class="col-sm-9">										
<input type="text" name="linkedin"  class="form-control" value="<?php echo $selectsocial['linkedin']; ?>" style="width:350px;" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Rss</b></label>

										<div class="col-sm-9">										
<input type="text" name="rss"  class="form-control" style="width:350px;" value="<?php echo $selectsocial['rss']; ?>" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Googleplus</b></label>

										<div class="col-sm-9">										
<input type="text" name="googleplus"  class="form-control" style="width:350px;" value="<?php echo $selectsocial['googleplus']; ?>" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                     <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Skype</b></label>

										<div class="col-sm-9">										
<input type="text" name="skype"  class="form-control" style="width:350px;" value="<?php echo $selectsocial['skype']; ?>" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
									<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Flickr</b></label>

										<div class="col-sm-9">										
<input type="text" name="flickr"  class="form-control" style="width:350px;" value="<?php echo $selectsocial['flickr']; ?>" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                   
                                    <div class="clearfix form-actions"  >
										<div class="col-md-offset-3 col-md-9">
<button class="btn btn-info" type="submit" style="width:250px;" id="submit"  name="submit" onclick="submitForm()">
												<i class="icon-ok bigger-110"></i>
												Save
											</button>
                                            
                                            

											
										</div>
									</div>
                                                
                                                </form>
												</div>
												<div id="aboutus" class="tab-pane">
<form action="#" method="post" id="form1" enctype="multipart/form-data">
<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>About us</b></label>

										<div class="col-sm-9">										
<textarea name="aboutus">
<?php echo $selectsocial['about_us']; ?>
</textarea>
										</div>
									</div>
                                    <br/>
                                    <br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									
                                    
                                    
                                   
                                    <div class="clearfix form-actions" style="position:relative;top:30px;" >
										<div class="col-md-offset-3 col-md-9">
<button class="btn btn-info" type="submit" style="width:250px;" id="submit"  name="submitabout" onclick="submitForm()">
												<i class="icon-ok bigger-110"></i>
												Save
											</button>
                                            
                                            

											
										</div>
									</div>
                                                
                                                </form>
												</div>
												<div id="contactus" class="tab-pane">
<?php
$selectcontact=mysql_fetch_array(mysql_query("select * from `contact_us`"));
?>
<form action="#" method="post" id="form1" enctype="multipart/form-data">
<div class="form-group"  >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Mobile</b></label>

										<div class="col-sm-9">										
<textarea name="mobile">
<?php echo $selectcontact['mobile']; ?>
</textarea>
										</div>
									</div>
                                    <br/>
                                    <br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<hr/>
                                   <div class="form-group"  >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Telephone</b></label>

										<div class="col-sm-9">										
<textarea name="telephone">
<?php echo $selectcontact['telephone']; ?>
</textarea>
										</div>
									</div> 
                                    <br/>
                                    <br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<div class="form-group"  >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Email</b></label>

										<div class="col-sm-9">										
<textarea name="email">
<?php echo $selectcontact['email']; ?>
</textarea>
										</div>
									</div> 
                                    <br/>
                                    <br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
                                   <br/>
								   <br/>
                                    <div class="clearfix form-actions"style="top:35px; position:relative;"  >
										<div class="col-md-offset-3 col-md-9">
<button class="btn btn-info" type="submit" style="width:250px;" id="submit"  name="submitcontactus" onclick="submitForm()">
												<i class="icon-ok bigger-110"></i>
												Save
											</button>
                                            
                                            

											
										</div>
									</div>
                                                
                                                </form>
												</div>

												

												<div id="quicklinks" class="tab-pane">
													
                                              <div class="row"><!-- /span -->
                                <h4 class="pink">
<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
<a href="#modal-table" role="button" id="addproject" class="green" data-toggle="modal"> New quick link </a>
</h4>
								</div>      
										
										<div class="table-header">
											Quick links
										</div>

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Name</th>
                                                        <th>Anchor</th>
														
								

														<th>actions</th>
													</tr>
												</thead>

												<tbody>
												  

													

													

													

													

													
													
													
													<?php
				$selectquick_links=mysql_query("select * from `quick_links`");
while($selectarrayquick_links=mysql_fetch_array($selectquick_links))
													{
													
													
?>
													
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
<?php echo $selectarrayquick_links['name']; ?>
														</td>
								<td><?php echo $selectarrayquick_links['anchor']; ?></td>
		

														

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">


<a class="green" href="#modal-table" id="<?php echo $selectarrayquick_links['quick_link_id']; ?>" onclick="showdetails(this.id)" data-toggle="modal">	
                                                            
																	<i class="icon-pencil bigger-130"></i>
																</a>

<a class="red" href="#modal-table" id="<?php echo $selectarrayquick_links['quick_link_id']; ?>del" onclick="deleteproject(this.id)" data-toggle="modal">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" >
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
															 															
																		
				<a href="#" class="tooltip-success" data-rel="tooltip"  title="Edit">
				
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
													<?php
													}
													?>

													
											  </tbody>
											</table>
										</div>
								
                                                    
												</div>
											</div>
										</div>
									</div>

				<!-- PAGE CONTENT ENDS -->
							</div>
                            <div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog" >
								<div class="modal-content" style="height:250px;">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													New Quick Link
												</div>
											</div>
											
                                            <form action="#" method="post" id="form1">
											<div class="modal-body no-padding">
                                            
                                    
                                    
                                    <br/>
                                    
 <?php 
$selectmaxquicklink=mysql_fetch_array(mysql_query("select max(`quick_link_id`) as `quicklinkid` from `quick_links`"));
$maxidquicklink=$selectmaxquicklink['quicklinkid']+1;
?>  
<input  type="hidden"  value="<?php echo $maxidquicklink;?>" style="width:350px;" name="quicklinkid" /> 
                           <div class="form-group" style="margin-bottom:50px;">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>  Name </b></label>

										<div class="col-sm-9">
                                
										
<input type="text"    name="name" id="name"   placeholder="name" class="col-xs-10 col-sm-5" style="width:350px;"  required/>





										</div>
									</div>
                                    
                                    
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b>Anchor</b> </label>


										<div class="col-sm-9">
<input type="text" id="anchor" placeholder="anchor"  class="col-xs-10 col-sm-5"style="width:350px;" name="anchor" required/>
											
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <br/>
									
                                    <div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
	<button class="btn btn-info" type="submit" style="width:150px;" id="submit"  name="submitquicklink" onclick="submitForm()">
												<i class="icon-ok bigger-110"></i>
												Save
											</button>
                                            
                                            

											
										</div>
									</div>
					
                                            </form>
											
											
 
                                            
										</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
							  </div>
                            <!-- /.col -->
							<!-- /.col -->
							<!-- /.col -->
							<!-- /.col -->
							<!-- /.col -->
							<!-- /.col -->
							<!-- /.col -->
							<!-- /.col -->
							
							
							
							
						</div><!-- /.row -->
					</div><!-- /.page-content -->
			  </div><!-- /.main-content -->

				
				<!-- /#ace-settings-container -->
		  </div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
		
		<?php
											if(isset($_POST['submitquicklink']))
											{
												
$quicklinkid=$_POST['quicklinkid'];	
$name=$_POST['name'];											
$anchor=$_POST['anchor'];
$selectnumlinks=mysql_num_rows(mysql_query("select * from `quick_links`"));
if($selectnumlinks < 5)
{
$insert=mysql_query("insert into `quick_links` values ('$quicklinkid','$name','$anchor')");
if($insert)
{
	echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:400px;">Link added successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'footer.php';
}, 2000);
</script>";	
}
}
else
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:400px;">U Cant add more than 5 links </button>';
echo "<script>
setTimeout(function(){
  window.location = 'footer.php';
}, 2000);
</script>";	
}
												
											}
											
											?>
                                            
                                            	<?php
											if(isset($_POST['submit']))
											{
												
												
$facebook=$_POST['facebook'];	
$twitter=$_POST['twitter'];
$linkedin=$_POST['linkedin'];
$rss=$_POST['rss'];
$googleplus=$_POST['googleplus'];
$skype=$_POST['skype'];
$flickr=$_POST['flickr'];
$selectnumsocial=mysql_num_rows(mysql_query("select * from `social_about`"));
if($selectnumsocial == 0)
{
$addinformation=mysql_query("insert into `social_about` values('','$facebook','$twitter','$linkedin','$rss','$googleplus','$skype','$flickr','')");
}
else
{
$addinformation=mysql_query("update `social_about` set `facebook`='$facebook',`twitter`='$twitter',`linkedin`='$linkedin',
`rss`='$rss',`googleplus`='$googleplus',`skype`='$skype',`flickr`='$flickr'");
}

if($addinformation)
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:400px;">Social Edit successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'footer.php';
}, 500);
</script>";	
}
												
											}
											
											?>
											<?php
											if(isset($_POST['submitabout']))
											{
												
												
$aboutus=$_POST['aboutus'];	

$selectnumsocial=mysql_num_rows(mysql_query("select * from `social_about`"));
if($selectnumsocial == 0)
{
$addinabout=mysql_query("insert into `social_about` values('','','','','','','','','$aboutus')");
}
else
{
$addinabout=mysql_query("update `social_about` set `about_us`='$aboutus'");
}

if($addinabout)
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:400px;">About Edit successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'footer.php';
}, 500);
</script>";	
}
												
											}
											
											?>
											<?php
											if(isset($_POST['submitcontactus']))
											{
											$mobile=$_POST['mobile'];	
											$telephone=$_POST['telephone'];
                                            $email=$_POST['email'];
$selectnumcontact=mysql_num_rows(mysql_query("select * from `contact_us`"));
if($selectnumcontact == 0)
{
$addcontact=mysql_query("insert into `contact_us` values('','$mobile','$telephone','$email')");
}
else
{
$addcontact=mysql_query("update `contact_us` set `mobile`='$mobile',`telephone`='$telephone',`email`='$email'");
}

if($addcontact)
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:400px;">Contact us Edit successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'footer.php';
}, 500);
</script>";	
}
											
											}
											
											?>
											
                                            <?php
											if(isset($_POST['submitquicklink1']))
											{
											$quicklinkid1=$_POST['quicklinkid1'];
											$name1=$_POST['name1'];
											$anchor1=$_POST['anchor1'];
											
$updatequicklink=mysql_query("update `quick_links` set `name`='$name1',`anchor`='$anchor1' where `quick_link_id`='$quicklinkid1'");
if($updatequicklink)
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:400px;">Quick Link Edit successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'footer.php';
}, 2000);
</script>";		
}
												
												
											}
											
											
											
											?>
                                            
                                            <?php
if(isset($_POST['submitdelete']))
{
$quicklinkiddel=$_POST['quicklinkiddel'];
$dellink=mysql_query("delete from `quick_links` where `quick_link_id`='$quicklinkiddel'");
if($dellink)
{
{	
echo "<script>
setTimeout(function(){
  window.location = 'footer.php';
}, 500);
</script>";													
}	
}
	
	
}

?>

										
											
											
                                            
                                            
                                           
                                           


                             
                                            

		<!-- basic scripts -->

		<!--[if !IE]> -->
        

		

		<!-- inline scripts related to this page -->
        

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
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.js"></script>
<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				
			
				
			
				
				
				
				
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing before_change callback function
				
			
			
			
				
				
				
				
			
				
			
			});
		</script>
		<!-- ace scripts -->
		
		
        
         
	</body>
</html>
