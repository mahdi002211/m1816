<?php include("include/connection.php");
if($_SESSION['agentname']== null){
header("Location: index.php");
}
date_default_timezone_set('Africa/Cairo');
 $date = date('Y-m-d');
 $time = date("H:i:s");
 $agent_id=$_SESSION['agentid'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Add property</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<?php include("include/allscript.php");?>
        <?php include("include/style.php");?>
     
  
  
  
  
  
  
       
        
        
  <script src="assets\js\tinymce\js\tinymce\tinymce.min.js"></script>
<script>
        tinymce.init({selector:'.bigdescription',
		plugins: "preview",
    toolbar: "preview"
		});
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
													<a data-toggle="tab" href="#settings4">Add property</a>
												</li>

												

												
											</ul>
                                            

											<div class="tab-content">
						<div id="settings4" class="tab-pane in active">
<form action="#" method="post" id="form1" enctype="multipart/form-data">
<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Title</b></label>

										<div class="col-sm-9">										
<input type="text" name="title"  class="form-control" style="width:350px;" 
value="" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Price</b></label>

										<div class="col-sm-9">										
<input type="text" name="price"  class="form-control" style="width:350px;"
 value="" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Location</b></label>

										<div class="col-sm-9">										
<input type="text" name="location"  class="form-control" value="" style="width:350px;" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Area</b></label>

										<div class="col-sm-9">										
<input type="text" name="area"  class="form-control" value="" style="width:350px;" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
									 <div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Address</b></label>

										<div class="col-sm-9">										
<input type="text" name="address"  class="form-control" value="" style="width:350px;" required/>
										</div>
									</div>
                                    <br/>
                                    <br/>
									<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Bathrooms</b></label>

										<div class="col-sm-9">										
<input type="text" name="bathrooms"  class="form-control" value="" style="width:350px;" required/>
										</div>
									</div>
									<br/>
									<br/>
									<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Bedrooms</b></label>

										<div class="col-sm-9">										
<input type="text" name="bedrooms"  class="form-control" value="" style="width:350px;" required/>
										</div>
									</div>
									<br/>
									<br/>
									<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Type</b></label>

										<div class="col-sm-9">										
<select name="type" style="width:350px;" >

<option value="1">Sale</option>
<option value="2">Rent</option>

</select>
										</div>
									</div>
									<br/>
									<br/>
									<div class="form-group">
<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
                                       
  <b>Pictures</b> 

</label> 
										<div class="col-sm-9">
                                         
<input type="file" id="id-input-file-2" style="width:200px;" name="files[]" multiple="multiple" accept="image/*"  />
		
										</div>
									</div>
									<br/>
									<br/>
									<br/>
									<br/>
									<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Longitude</b></label>

										<div class="col-sm-9">										
<input type="text" name="longitude"  class="form-control" value="" style="width:350px;" required/>
										</div>
									</div>
									<br/>
									<br/>
									<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Latitude</b></label>

										<div class="col-sm-9">										
<input type="text" name="latitude"  class="form-control" value="" style="width:350px;" required/>
										</div>
									</div>
									<br/>
									<br/>
									<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Features</b></label>

																			
<div class="col-sm-9">										
<input name="air" class="ace" type="checkbox" value="1">
<span class="lbl"><b>Air </b></span>&nbsp; &nbsp;

<input name="wifi" class="ace" type="checkbox" value="1">
<span class="lbl"><b>Wifi</b></span>&nbsp; &nbsp;
<input name="radio" class="ace" type="checkbox" value="1">
<span class="lbl"><b>Radio</b></span>&nbsp; &nbsp;

<input name="dvd" class="ace" type="checkbox" value="1">
<span class="lbl"><b>Dvd</b></span>&nbsp; &nbsp;
<input name="terrace" class="ace" type="checkbox" value="1">
<span class="lbl"><b>Terrace</b></span>&nbsp; &nbsp;
<input name="balcony" class="ace" type="checkbox" value="1">
<span class="lbl"><b>Balcony</b></span>&nbsp; &nbsp;<br/><br/>
<input name="parking" class="ace" type="checkbox" value="1">
<span class="lbl"><b>Parking</b></span>&nbsp; &nbsp;
<input name="useofpool" class="ace" type="checkbox" value="1">
<span class="lbl"><b>Useofpool</b></span>&nbsp; &nbsp;
<input name="bedding" class="ace" type="checkbox" value="1">
<span class="lbl"><b>Bedding</b></span>&nbsp; &nbsp;
<input name="computer" class="ace" type="checkbox" value="1">
<span class="lbl"><b>Computer</b></span>&nbsp; &nbsp;
<input name="microwave" class="ace" type="checkbox" value="1">
<span class="lbl"><b>Microwave</b></span>&nbsp; &nbsp;
<input name="cabletv" class="ace" type="checkbox" value="1">
<span class="lbl"><b>Cabletv</b></span>&nbsp; &nbsp;
										</div>
										
									</div>
									<br/>
									<br/>
									<br/>
									<div class="form-group" style="bottom:25px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Title description</b></label>

										<div class="col-sm-9">										
<textarea name="short_description" maxlength=150 style="width:500px;height:200px;"></textarea>
										</div>
									</div>
									<br/>
									<br/>
									<br/>
                                    <div class="form-group" style="margin-bottom:350px; position:relative;" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b>Description</b></label>

										<div class="col-sm-9">										
<textarea name="description" rows="6" cols="8" class="bigdescription"></textarea>
										</div>
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

												

									
											</div>
										</div>
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
$selectmaxpro=mysql_fetch_array(mysql_query("select max(`property_id`) as `propertyid` from `properties`"));
$maxidpro=$selectmaxpro['propertyid']+1;											

											$path = "propertypic/"; // Upload directory
$count = 0;												
foreach ($_FILES['files']['name'] as $f => $name) {     
	           
	               
	mysql_query("insert into `property_photo` values('','$name','$maxidpro')");        
			
	        // No error found! Move uploaded files 
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)) {
	            	$count++; // Number of successfully uploaded files
	            }
	        
	    
	}      
		$title=$_POST['title'];	
        $price=$_POST['price'];	
        $location=$_POST['location'];
        $area=$_POST['area'];
        $address=$_POST['address'];	
         $bathrooms=$_POST['bathrooms'];
        $bedrooms=$_POST['bedrooms'];
         $type=$_POST['type'];
         $longitude=$_POST['longitude'];
         $latitude=$_POST['latitude'];	
         
          $short_description=$_POST['short_description'];
         $description=$_POST['description'];
		 
											

$insert=mysql_query("insert into `properties` values('$maxidpro','$title','$price','$location','$area','$address','$bathrooms','$bedrooms','$short_description','$description','$type','0','0','$longitude','$latitude','0','0','$agent_id')");
//////////////////////////////////////////////////////////// features
 $air=$_POST['air'];
 $wifi=$_POST['wifi'];
 $radio=$_POST['radio'];
 
 $dvd=$_POST['dvd'];
 $terrace=$_POST['terrace'];
 $balcony=$_POST['balcony'];
 $parking=$_POST['parking'];
 $useofpool=$_POST['useofpool'];
 $bedding=$_POST['bedding'];
 $computer=$_POST['computer'];
 $microwave=$_POST['microwave'];
 $cabletv=$_POST['cabletv'];
 $insertfeature=mysql_query("insert into `general_features` values('','$air','$wifi','$radio','$dvd','$terrace','$balcony','$parking','$useofpool','$bedding','$computer','$microwave','$cabletv','$maxidpro')");
if($insert)
{
if($insertfeature)
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:200px;">Property added successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'properties.php?active=0';
}, 2000);
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
