<?php include("include/connection.php");
if($_SESSION['adminname']== null){
header("Location: index.php");
}

$active=$_GET['active'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Properties</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<?php include("include/allscript.php");?>
        <?php include("include/style.php");?>
  
  <script>
  function deleteproperties(id)
  {
  var allid=parseInt(id);
  var active=<?php echo $active; ?>;
  $(document).ready(function(e) {
$.ajax({
url:"delete_all_properties.php",
type:"GET",
data:"id="+allid+"&active="+active,
success: function(msg)
{
$(".modal-content").html(msg);
$(".modal-content").css("height","200px");
}	
});
  });
  }  
  </script>
  <script>
  function approveproperties(id)
  {
  var allid=parseInt(id);
  var active=<?php echo $active; ?>;
  $(document).ready(function(e) {
$.ajax({
url:"approve_all_properties.php",
type:"GET",
data:"id="+allid+"&active="+active,
success: function(msg)
{
$(".modal-content").html(msg);
$(".modal-content").css("height","200px");
}	
});
  });
  }  
  </script>
   <script>
  function rejectproperties(id)
  {
  var allid=parseInt(id);
  var active=<?php echo $active; ?>;
  $(document).ready(function(e) {
$.ajax({
url:"reject_all_properties.php",
type:"GET",
data:"id="+allid+"&active="+active,
success: function(msg)
{
$(".modal-content").html(msg);
$(".modal-content").css("height","200px");
}	
});
  });
  }  
  </script>
  
  
  <script>
  function blockproperties(id)
  {
  var allid=parseInt(id);
  var active=<?php echo $active; ?>;
  $(document).ready(function(e) {
$.ajax({
url:"block_all_properties.php",
type:"GET",
data:"id="+allid+"&active="+active,
success: function(msg)
{
$(".modal-content").html(msg);
$(".modal-content").css("height","200px");
}	
});
  });
  }  
  </script>
  
  
 
  
  
  
  
  
  
 
        <style>
		input[type="range"] {
	-webkit-appearance: none;
	background-color: black;
	height: 2px;
}

input[type="range"]::-webkit-slider-thumb {
	-webkit-appearance: none;
	position: relative;
	top: -1px;
	z-index: 1;
	width: 11px;
	height: 11px;

	-webkit-border-radius: 40px;
	-moz-border-radius: 40px;
	border-radius: 40px;
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ebf1f6), color-stop(50%,#abd3ee), color-stop(51%,#89c3eb), color-stop(100%,#d5ebfb));
}

input[type="range"]:hover ~ #rangevalue,input[type="range"]:active ~ #rangevalue {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;
	top: -70px;
}

/* Tool Tip */
#rangevalue {
	display: block;
	color: #fff;
	margin: 20px 0;
	position: relative;
	left: 44.5%;
	padding: 6px 12px;
	border: 1px solid black;

	-webkit-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);
	-moz-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);
	box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0,0,0,0.4);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#222931), color-stop(100%,#181D21));

	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
	width: 18px;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	opacity: 0;

	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
	top: -65px;
}
		</style>
        
       
       
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
							<li>
								







							</li>							
						</ul><!-- .breadcrumb -->
						

						
					</div>

					<div class="page-content"><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

						<div class="row"><!-- /span -->
                                <h4 class="pink">
<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
<a href="add_property.php"  class="green" > افزودن ملک </a>
</h4>
								</div><!-- /row -->
								
								
								
								<div class="row">
								  <div class="col-xs-12">
										
										<div class="table-header">
											ملک
										</div>

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															ردیف
														</th>
														<th>عنوان</th>
														
														<th>قیمت</th>
										<th class="hidden-480">ادرس</th>
                                         <th>متراژ</th>  
														
								<th class="hidden-480">نوع </th>
								
								
								

														<th>عملیات</th>
													</tr>
												</thead>

												<tbody>
												  

													

													

													

													

													
													
													
													<?php
				$selectproperties=mysql_query("select * from `properties` where `active`='$active' and `block`='0' ");
while($selectarrayproperties=mysql_fetch_array($selectproperties))
													{
$product_id=$selectarrayproperties['property_id'];													
												
													
?>
													
													<tr>
														<td class="center">
															<?php echo $selectarrayproperties['property_id']; ?>
														</td>

														<td>
	<a href="edit_property.php?id=<?php echo $selectarrayproperties['property_id']; ?>&active=<?php echo $active; ?>" id="<?php echo $selectarrayproperties['property_id']; ?>" ><?php echo $selectarrayproperties['property_title'] ?></a>
														</td>
				<td>
	<?php echo $selectarrayproperties['price']; ?>		
				</td>
<td class="hidden-480">
<?php echo $selectarrayproperties['location']; ?>	
</td>
												<td>

<?php echo $selectarrayproperties['area'];  ?>
														</td>

								<td class="hidden-480">
							<?php
						if($selectarrayproperties['type'] == 1)
                           {
echo "<b>Sale</b>";
                           }	
if($selectarrayproperties['type'] == 2)
                           {
echo "<b>Rent</b>";
                           }							   
							?>
								</td>
								
								


														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
			
		
<a class="btn btn-app btn-success" style="width:80px;" href="edit_property.php?id=<?php echo $selectarrayproperties['property_id']; ?>&active=<?php echo $active; ?>" >	
                                                          
																	Edit
																</a>		
		<?php
											if($selectarrayproperties['active'] == 1)
											{
?>											
	<a class="btn btn-app" style="width:80px;" target="_blank" href="../property_show.php?id=<?php echo $selectarrayproperties['property_id']; ?>"  >
																
											View
											</a>
											<?php
											}
											?>
											
											
											
											<?php
											if($selectarrayproperties['active'] != 1)
											{
											?>
<a class="btn btn-app btn-pink btn-sm" style="width:80px;height:50px;" href="#modal-table"  id="<?php echo $selectarrayproperties['property_id']; ?>approve" onclick="approveproperties(this.id)" data-toggle="modal">
												
												Approve
											</a>
						
<a class="btn btn-app btn-inverse btn-xs" style="width:80px;height:50px;"   href="#modal-table"  id="<?php echo $selectarrayproperties['property_id']; ?>reject" onclick="rejectproperties(this.id)" data-toggle="modal" >
												
												<span style="top:5px;position:relative;">Reject</span>
											</a>
<a class="btn btn-app btn-danger btn-sm"  href="#modal-table"  id="<?php echo $selectarrayproperties['property_id']; ?>del" onclick="deleteproperties(this.id)" data-toggle="modal" >
												
												Delete
											</a>
											<?php
											}
											else
											{
											if($selectarrayproperties['block'] == 0)
											{
											?>
											
											<a class="btn btn-app btn-inverse btn-xs" style="width:80px;height:50px;""  href="#modal-table"  id="<?php echo $selectarrayproperties['property_id']; ?>block" onclick="blockproperties(this.id)" data-toggle="modal" >
												
												<span style="top:5px;position:relative;">Block</span>
											</a>
											
										<?php
										}
											}
											?>
											

																
																
									
																
																
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

<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog" >
								<div class="modal-content" style="height:200px;">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													New category
												</div>
											</div>
											
                       <form action="#" method="post" enctype="multipart/form-data" id="form1">
											<div class="modal-body no-padding">
                                            
                                    
                                    
                                  
                                    <br/>
                              
                           
                                    
                                    
                                   
                                   
                                   
								
                                  
                                   
                                    
                                   
                                    
                                    
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b>Category name</b></label>


										<div class="col-sm-9">
			<input type="text"  placeholder="Category name"  style="width:350px;" name="category" />
											
										</div>
									</div>
									<br/>
									<br/>
                                    <div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit" id="submit" style="width:200px;"  name="submit" onclick="submitForm()">
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
							</div><!-- /.col -->
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
if(isset($_POST['submitdelete']))
{
$propertyiddel=$_POST['propertyiddel'];
$delfeature=mysql_query("delete from `general_features` where `property_id`='$propertyiddel'");
$selectphoto=mysql_query("select * from `property_photo` where `property_id`='$propertyiddel'");
while($selectarrayphoto=mysql_fetch_array($selectphoto))
{
$photoid=$selectarrayphoto['pro_photo_id'];
$photoname=$selectarrayphoto['photo'];
unlink("propertypic/".$photoname);
mysql_query("delete from `property_photo` where `pro_photo_id`='$photoid'");
}
$delproperty=mysql_query("delete from `properties` where `property_id`='$propertyiddel'");
if($delproperty)
{	
echo "<script>
setTimeout(function(){
  window.location = 'properties.php?active=".$active."';
}, 500);
</script>";													
	
}	
}

?>
<?php
if(isset($_POST['submitapprove']))
{
$propertyidapprove=$_POST['propertyidapprove'];
$updateproperty=mysql_query("update `properties` set `active`='1' where `property_id`='$propertyidapprove'");
if($updateproperty)
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:250px;">Property approved successfully</button>';	
echo "<script>
setTimeout(function(){
  window.location = 'properties.php?active=".$active."';
}, 500);
</script>";													
	
}	
}
?>
<?php
if(isset($_POST['submitreject']))
{
$propertyidreject=$_POST['propertyidreject'];
$updateproperty=mysql_query("update `properties` set `active`='2' where `property_id`='$propertyidreject'");
if($updateproperty)
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:250px;">Property rejected successfully</button>';	
echo "<script>
setTimeout(function(){
  window.location = 'properties.php?active=".$active."';
}, 500);
</script>";													
	
}	
}
?>
<?php
if(isset($_POST['submitblock']))
{
$propertyidblock=$_POST['propertyidblock'];
$updateproperty=mysql_query("update `properties` set `block`='1' where `property_id`='$propertyidblock'");
if($updateproperty)
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:250px;">Property blocked successfully</button>';	
echo "<script>
setTimeout(function(){
  window.location = 'properties.php?active=".$active."';
}, 500);
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

		<!-- ace scripts -->

		

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>
        
         
	</body>
</html>