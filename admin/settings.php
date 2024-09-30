<?php include("include/connection.php");
if($_SESSION['adminname']== null){
header("Location: index.php");
}
date_default_timezone_set('Africa/Cairo');
 $date = date('Y-m-d');
 $time = date("H:i:s");
 $user_id=$_SESSION['id'];
 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Settings</title>

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
  function editcontact(id)
  {
  $(document).ready(function(e) {
$.ajax({
url:"show_details_contact.php",
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
  function deletecontact(id)
  {
  var allid=parseInt(id);
  $(document).ready(function(e) {
$.ajax({
url:"delete_all_contact.php",
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
													<a data-toggle="tab" href="#settings4">General</a>
												</li>
												<li>
													<a data-toggle="tab" href="#websiteseo">Website SEO</a>
												</li>
												<li>
													<a data-toggle="tab" href="#sociallinks">Social links</a>
												</li>
												<li>
													<a data-toggle="tab" href="#contact">Contact</a>
												</li>
												<li>
													<a data-toggle="tab" href="#map">Map</a>
												</li>
												<li>
													<a data-toggle="tab" href="#about">About</a>
												</li>
												

												

												
											</ul>
          <?php
$selectuser=mysql_fetch_array(mysql_query("select * from `user` where `user_id`='$user_id'"));
$photo=$selectuser['photo'];
?>		  

											<div class="tab-content">
						<div id="settings4" class="tab-pane in active">
<form action="#" method="post" id="form1" enctype="multipart/form-data">
<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Username</b></label>

										<div class="col-sm-9">										
<input type="text" name="username"  class="form-control" style="width:350px;" 
value="<?php echo $selectuser['user_name']; ?>" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Password</b></label>

										<div class="col-sm-9">										
<input type="password" name="password" id="password"  class="form-control" style="width:350px;"
 value="<?php echo $selectuser['password']; ?>" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Email</b></label>

										<div class="col-sm-9">										
<input type="email" name="email"  class="form-control" value="<?php echo $selectuser['email']; ?>" style="width:350px;" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <div id="resultpassword">
									
									</div>
									

                                   
                                    
                                    
                                    
                                    
                                    
                                    <div class="clearfix form-actions" style="margin-top:50px;position:relative;">
										<div class="col-md-offset-3 col-md-9">
<button class="btn btn-info" style="width:200px;" type="submit" id="submit"  name="submit" onclick="submitForm()">
												<i class="icon-ok bigger-110"></i>
												Save
											</button>
                                            
                                            

											
										</div>
									</div>
                                                
                                                </form>
												</div>
												<?php
												$selectwebseo=mysql_fetch_array(mysql_query("select * from `web_seo`"));
												?>
											<div id="websiteseo" class="tab-pane">
<form action="#" method="post" id="form1" enctype="multipart/form-data">
<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Website Title</b></label>

										<div class="col-sm-9">										
<input type="text" name="title"  class="form-control" style="width:350px;" 
value="<?php echo $selectwebseo['title']; ?>" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Website Description</b></label>

										<div class="col-sm-9">										
<textarea name="description">
<?php echo $selectwebseo['description']; ?>
</textarea>

										</div>
									</div>
                                    <br/>
                                    <br/>
									<br/>
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Keywords</b></label>

										<div class="col-sm-9">										
<textarea name="keywords">
<?php echo $selectwebseo['keywords']; ?>
</textarea>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <div id="resultpassword">
									
									</div>
									

                                   
                                    
                                    
                                    
                                    
                                    
                                    <div class="clearfix form-actions" style="margin-top:300px;position:relative;">
										<div class="col-md-offset-3 col-md-9">
<button class="btn btn-info" style="width:200px;" type="submit" id="submit"  name="submitwebseo" onclick="submitForm()">
												<i class="icon-ok bigger-110"></i>
												Save
											</button>
                                            
                                            

											
										</div>
									</div>
                                                
                                                </form>
	
	</div>
<?php
$selectsocial=mysql_fetch_array(mysql_query("select * from `social_links`"));
?>												
<div id="sociallinks" class="tab-pane">
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
                                    <br/>
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Google Plus</b></label>

										<div class="col-sm-9">										
<input type="text" name="google_plus"  class="form-control" style="width:350px;" 
value="<?php echo $selectsocial['google_plus']; ?>" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <br/>
									<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Pinterest</b></label>

										<div class="col-sm-9">										
<input type="text" name="pinterest"  class="form-control" style="width:350px;" 
value="<?php echo $selectsocial['pinterest']; ?>" required/>
										</div>
									</div>
									<br/>
                                    <br/>
                                    <br/>
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Linkedin</b></label>

										<div class="col-sm-9">										
<input type="text" name="linkedin"  class="form-control" style="width:350px;" 
value="<?php echo $selectsocial['linkedin']; ?>" required/>
										</div>
									</div>
                                   
                                    
                                    
                                    
                                    
                                    
                                    <div class="clearfix form-actions" >
										<div class="col-md-offset-3 col-md-9">
<button class="btn btn-info" style="width:200px;" type="submit" id="submit"  name="submitsocial" onclick="submitForm()">
												<i class="icon-ok bigger-110"></i>
												Save
											</button>
                                            
                                            

											
										</div>
									</div>
                                                
                                                </form>
												</div>	
	
<div id="contact" class="tab-pane">
<div class="row"><!-- /span -->
                                <h4 class="pink">
<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
<a href="#modal-table" role="button" id="addclient" class="green" data-toggle="modal"> Add Contact </a>
</h4>
								</div><!-- /row -->
<div class="row">
								  <div class="col-xs-12">
										
										<div class="table-header">
											Contact
										</div>

										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														
														<th class="center">Email</th>
										<th class="center">Name</th>
										<th class="center">Mobile</th>
										<th class="center">Photo</th>

														<th class="center">Actions</th>
													</tr>
												</thead>

												<tbody>
												  

													

													

													

													

													
													
													
													<?php
				$selectcontact=mysql_query("select * from `contact`");
while($selectarraycontact=mysql_fetch_array($selectcontact))

													{
													
													
?>
													
													<tr>
														
<td class="center">
<?php echo $selectarraycontact['email']; ?>
</td>
<td class="center">
<?php echo $selectarraycontact['name']; ?>
</td>
<td class="center">
<?php echo $selectarraycontact['mobile']; ?>
</td>
														
				<td class="center"><img src="logo/<?php echo $selectarraycontact['photo']; ?>" 
				style="width:50px;">
				</td>


														<td class="center">
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
	<a class="green" href="#modal-table" id="<?php echo $selectarraycontact['contact_id']; ?>" onclick="editcontact(this.id)" data-toggle="modal" >
																	<i class="icon-pencil bigger-130"></i>
																</a>															



<a class="red" href="#modal-table" id="<?php echo $selectarraycontact['contact_id']; ?>del" onclick="deletecontact(this.id)" data-toggle="modal">
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
												<div id="map" class="tab-pane">
<form action="#" method="post" id="form1" enctype="multipart/form-data">


										

                              <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Address</b></label>

										<div class="col-sm-9">										
<input type="text" name="address"  class="form-control" style="width:350px;" 
value="<?php echo $selectuser['address']; ?>" required/>
										</div>
									</div>
									<br/>
									<br/>  
									<br/>
<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>City</b></label>

										<div class="col-sm-9">										
<input type="text" name="city"  class="form-control" style="width:350px;" 
value="<?php echo $selectuser['city']; ?>" required/>
										</div>
									</div>
									<br/>
									<br/>  									
									
                                    
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Longitude</b></label>

										<div class="col-sm-9">										
<input type="text" name="longitude"  class="form-control" style="width:350px;" 
value="<?php echo $selectuser['longitude']; ?>" required/>
										</div>
									</div>
									<br/>
									<br/>
									
									 <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Latitude</b></label>

										<div class="col-sm-9">										
<input type="text" name="latitude"  class="form-control" style="width:350px;" 
value="<?php echo $selectuser['latitude']; ?>" required/>
										</div>
									</div>
									<br/>
									<br/>
									
                                    
                                   
                                   
                                    
                                    
                                    
                                    
                                    
                                    <div class="clearfix form-actions" >
										<div class="col-md-offset-3 col-md-9">
<button class="btn btn-info" style="width:200px;" type="submit" id="submit"  name="submitmap" onclick="submitForm()">
												<i class="icon-ok bigger-110"></i>
												Save
											</button>
                                            
                                            

											
										</div>
									</div>
                                                
                                                </form>
												</div>
												
<?php
$selectabout=mysql_fetch_array(mysql_query("select * from `about`"));
$photoabout=$selectabout['photo'];
?>												

<div id="about" class="tab-pane">
<form action="#" method="post" id="form1" enctype="multipart/form-data">
<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Photo</b></label>

										<div class="col-sm-9">										
<input type="file" id="id-input-file-2" name="file">
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <br/>
<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Description</b></label>

										<div class="col-sm-9">										
<textarea name="descriptionabout" cols="8" rows="8">
<?php echo $selectabout['description']; ?>
</textarea>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                   
									
                                    
                                    
									
									 
									
                                    
                                   
                                   
                                    
                                    
                                    
                                    
                                    
                                    <div class="clearfix form-actions" style="margin-top:150px;position:relative;" >
										<div class="col-md-offset-3 col-md-9">
<button class="btn btn-info" style="width:200px;" type="submit" id="submit"  name="submitabout" onclick="submitForm()">
												<i class="icon-ok bigger-110"></i>
												Save
											</button>
                                            
                                            

											
										</div>
									</div>
                                                
                                                </form>
												</div>												
										

									
											</div>
										</div>
									</div>

				<!-- PAGE CONTENT ENDS -->
							</div>
							
							<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog" >
								<div class="modal-content" style="height:400px;">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													New Contact
												</div>
											</div>
											
                       <form action="#" method="post" enctype="multipart/form-data" id="form1">
											<div class="modal-body no-padding">
                                            
                                    
                                    
                                  
                                    <br/>
                              
                           
                                    
                                    
                                   
                                   
                                   
								
                                  
                                   
                                    
                                   
                                    
                                    
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b>Email</b></label>


										<div class="col-sm-9">
			<input type="text" name="email" style="width:350px;" >
											
										</div>
									</div>
									<br/>
									<br/>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b>Name</b></label>


										<div class="col-sm-9">
			<input type="text" name="name" style="width:350px;" >
											
										</div>
									</div>
									<br/>
									<br/>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b>Mobile</b></label>


										<div class="col-sm-9">
			<input type="text" name="mobile" style="width:350px;" >
											
										</div>
									</div>
									<br/>
									<br/>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b>Photo</b></label>


										<div class="col-sm-9">
			<input type="file" name="file" accept="image/*" style="width:350px;" >
											
										</div>
									</div>
									<br/>
									<br/>
                                    <div class="clearfix form-actions" style="position:relative;margin-top:40px;">
										<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit" id="submit" style="width:200px;"  name="submitcontact" onclick="submitForm()">
												<i class="icon-ok bigger-110"></i>
												Save
											</button>
                                            
                                            

											&nbsp; &nbsp; &nbsp;
											
										</div>
									</div>
					
                                            </form>
											
											
 
                                            
										</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
							  </div>
				<!-- PAGE CONTENT ENDS -->
							</div>
							
                            
                                    
 

  


	
													
											
									
													
											
					

					
		

				
					</div><!-- /.page-content -->
			  </div><!-- /.main-content -->

				
				<!-- /#ace-settings-container -->
		  </div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
		
		
                                            
                                            	<?php
											if(isset($_POST['submit']))
											{
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$updateagent=mysql_query("update `user` set `email`='$email',`password`='$password',`user_name`='$username' where `user_id`='$user_id'");
if($updateagent)
{

echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:250px;">Settings edit successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'settings.php';
}, 2000);
</script>";	

}
												
											}
											
											?>
											<?php
											if(isset($_POST['submitwebseo']))
											{
											$title=$_POST['title'];
											$description=$_POST['description'];
											$keywords=$_POST['keywords'];
											$selectnumweb=mysql_num_rows(mysql_query("select * from `web_seo`"));
											if($selectnumweb == 0)
											{
											$editweb=mysql_query("insert into `web_seo` values('','$title','$description','$keywords')");
											}
											else
											{
											$editweb=mysql_query("update `web_seo` set `title`='$title',`description`='$description',`keywords`='$keywords'");
											}
											if($editweb)
{

echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:250px;">Website SEO edit successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'settings.php';
}, 2000);
</script>";	

}
											
											}
											
											
											
											
											?>
											<?php
											if(isset($_POST['submitsocial']))
											{
											$facebook=$_POST['facebook'];
											$twitter=$_POST['twitter'];
											$google_plus=$_POST['google_plus'];
											$pinterest=$_POST['pinterest'];
											$linkedin=$_POST['linkedin'];
											$selectnumsocial=mysql_num_rows(mysql_query("select * from `social_links`"));
											if($selectnumsocial == 0)
											{
$editsocial=mysql_query("insert into `social_links` values('','$facebook','$twitter','$google_plus','$pinterest','$linkedin')");
											}
											else
											{
$editsocial=mysql_query("update `social_links` set `facebook`='$facebook',`twitter`='$twitter',`google_plus`='$google_plus',`pinterest`='$pinterest',`linkedin`='$linkedin'");
											}
											if($editsocial)
{

echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:250px;">Social links edit successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'settings.php';
}, 2000);
</script>";	

}
											
											}
											
											
											
											
											?>
											
<?php
											if(isset($_POST['submitmap']))
											{



$longitude=$_POST['longitude'];
$latitude=$_POST['latitude'];
$address=$_POST['address'];
$city=$_POST['city'];
$updatecontact=mysql_query("update `user` set `longitude`='$longitude',`latitude`='$latitude',`address`='$address',`city`='$city' where `user_id`='$user_id'");
if($updatecontact)
{

echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:250px;">Map edit successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'settings.php';
}, 2000);
</script>";	

}
												
											}
   ?>   
<?php
											if(isset($_POST['submitcontact']))
											{



$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$files=$_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"],
      "logo/" .$files); 
$insertcontact=mysql_query("insert into `contact` values('','$email','$name','$mobile','$files')");
if($insertcontact)
{

echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:250px;">Contact Insert successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'settings.php';
}, 2000);
</script>";	

}
												
											}
   ?>        
<?php
if(isset($_POST['submit1']))
{
$contactid1=$_POST['contactid1'];
$selectphoto=mysql_fetch_array(mysql_query("select * from `contact` where `contact_id`='$contactid1'"));
$oldphoto=$selectphoto['photo'];
$name1=$_POST['name1'];
$email1=$_POST['email1'];
$mobile1=$_POST['mobile1'];
$files1=$_FILES["file1"]["name"];
if($files1 == '')
{
$updatecontact=mysql_query("update `contact` set `email`='$email1',`name`='$name1',`mobile`='$mobile1' where `contact_id`='$contactid1'");
}
else
{
unlink("logo/".$oldphoto);
move_uploaded_file($_FILES["file1"]["tmp_name"],
      "logo/" .$files1); 
$updatecontact=mysql_query("update `contact` set `email`='$email1',`name`='$name1',`mobile`='$mobile1',`photo`='$files1' where `contact_id`='$contactid1'");
}
if($updatecontact)
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:250px;">Contact Edited successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'settings.php';
}, 2000);
</script>";
}
}
?>
<?php
if(isset($_POST['submitdelete']))
{
$contactiddel=$_POST['contactiddel'];
$selectphotodel=mysql_fetch_array(mysql_query("select * from `contact` where `contact_id`='$contactiddel'"));
$oldphoto=$selectphotodel['photo'];
$delcontact=mysql_query("delete from `contact` where `contact_id`='$contactiddel'");
if($delcontact)
{
echo "<script>
setTimeout(function(){
  window.location = 'settings.php';
}, 2000);
</script>";
}
}

?>
   
										
	<?php
											if(isset($_POST['submitabout']))
											{
											$files=$_FILES["file"]["name"];
											$description=$_POST['descriptionabout'];
											$selectnumabout=mysql_num_rows(mysql_query("select * from `about`"));
											if($selectnumabout == 0)
											{
											if($files == '')
{
$editabout=mysql_query("insert into `about` values('','','$description')");
}
else
{
$editabout=mysql_query("insert into `about` values('','$files','$description')");
move_uploaded_file($_FILES["file"]["tmp_name"],
      "logo/" .$files);
}

											}
											else
											{
											if($files == '')
											{
	$editabout=mysql_query("update `about` set `description`='$description'");										
											}
											else
											{
		$editabout=mysql_query("update `about` set `description`='$description',`photo`='$files'");
unlink("logo/".$photoabout);
	move_uploaded_file($_FILES["file"]["tmp_name"],
      "logo/" .$files); 		
											}

											}
											if($editabout)
{

echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:250px;">About edit successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'settings.php';
}, 2000);
</script>";	

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
