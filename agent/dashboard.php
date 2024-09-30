<?php include("include/connection.php");
if($_SESSION['agentname']== null){
header("Location: index.php");
}
$agent_id=$_SESSION['agentid'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Dashboard</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.min.css">
		<!-- basic styles -->

		<?php include("include/allscript.php");?>
        <?php include("include/style.php");?>
        
  
        
        
        
  
  
  
  
  
 
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

						

						
					</div>

					<div class="page-content"><!-- /.page-header -->

						<div class="row">
						
							<div class="col-sm-12 infobox-container">
										

										<div class="infobox infobox-blue" >
											<div class="infobox-icon">
									<i class="icon-home" style="width:50px;"></i>		
									
												
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">
												<?php
$selectcountproperty=mysql_fetch_array(mysql_query("select count(`property_id`) as `propertyid` from `properties` where `agent_id`='$agent_id' "));
echo $selectcountproperty['propertyid'];
?>
												</span>
												<div class="infobox-content">Total Properties</div>
											</div>

											
										</div>
										<div class="infobox infobox-green  ">
											<div class="infobox-icon">
											
					<i class="icon-home" style="width:50px;"></i>	
											</div>

											<div class="infobox-data">
<span class="infobox-data-number">
<?php
$selectcountproperty=mysql_fetch_array(mysql_query("select count(`property_id`) as `propertyid` from `properties` where `active`='0' and `agent_id`='$agent_id'"));
echo $selectcountproperty['propertyid'];
?>
</span>
<div class="infobox-content">Pending Properties</div>
											</div>
											
										</div>
										<div class="infobox infobox-pink  ">
											<div class="infobox-icon">
												
<i class="icon-home" style="width:50px;"></i>
											</div>

											<div class="infobox-data">
									<span class="infobox-data-number">
									<?php
$selectcountproperty=mysql_fetch_array(mysql_query("select count(`property_id`) as `propertyid` from `properties` where `active`='1' and `agent_id`='$agent_id'"));
echo $selectcountproperty['propertyid'];
?>
									</span>
												<div class="infobox-content">Active Properties</div>
											</div>
											
										</div>

										

										<div class="infobox infobox-red  ">
											<div class="infobox-icon">
	<i class="icon-home" style="width:50px;"></i>											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">
												<?php
$selectcountproperty=mysql_fetch_array(mysql_query("select count(`property_id`) as `propertyid` from `properties` where `block`='1' and `agent_id`='$agent_id'"));
echo $selectcountproperty['propertyid'];
?>
												</span>
												<div class="infobox-content">Block Properties</div>
											</div>
										</div>

										

										

									

										

										

										
									</div>
							
							
							
							
						</div><!-- /.row -->
						
						
									
									<div class="col-sm-5" style="position:relative;bottom:50px;width:600px;">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="lighter">
													
													Active Properties
												</h4>

												
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>
																	<i class="icon-caret-right blue"></i>
																	Id
																</th>

																<th class="hidden-480">
																	<i class="icon-caret-right blue"></i>
																	Title
																</th>

																<th class="hidden-480">
																	<i class="icon-caret-right blue"></i>
																	Price
																</th>
																
																<th class="hidden-480">
																	<i class="icon-caret-right blue"></i>
																	Location
																</th>
																<th class="hidden-480">
																	<i class="icon-caret-right blue"></i>
																	Area
																</th>
																<th class="hidden-480">
																	<i class="icon-caret-right blue"></i>
																	Type
																</th>
																
															</tr>
														</thead>

														<tbody>
														<?php
				$selectproperties=mysql_query("select * from `properties` where `agent_id`='$agent_id' and `active`='1' order by `property_id` desc limit 5 ");
while($selectarrayproperties=mysql_fetch_array($selectproperties))
													{
$product_id=$selectarrayproperties['property_id'];													
												
													
?>
													
													<tr>
														<td class="center">
															<?php echo $selectarrayproperties['property_id']; ?>
														</td>

														<td>
	<a target="_blank" href="../property_show.php?id=<?php echo $selectarrayproperties['property_id']; ?>" ><?php echo $selectarrayproperties['property_title'] ?></a>
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
								<?php
								}
								?>
								</tr>

															

															

															

															
														</tbody>
													</table>
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div><!-- /widget-box -->
									</div>
									<!----- lastest invoices --->
									<div class="col-sm-5" style="position:relative;bottom:50px;width:600px;">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="lighter">
													
													Pending Properties
												</h4>

												
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>
																	<i class="icon-caret-right blue"></i>
																	Id
																</th>

																<th class="hidden-480">
																	<i class="icon-caret-right blue"></i>
																	Title
																</th>

																<th class="hidden-480">
																	<i class="icon-caret-right blue"></i>
																	Price
																</th>
																
																<th class="hidden-480">
																	<i class="icon-caret-right blue"></i>
																	Location
																</th>
																<th class="hidden-480">
																	<i class="icon-caret-right blue"></i>
																	Area
																</th>
																<th class="hidden-480">
																	<i class="icon-caret-right blue"></i>
																	Type
																</th>
																
															</tr>
														</thead>

														<tbody>
														<?php
				$selectproperties=mysql_query("select * from `properties` where `agent_id`='$agent_id' and `active`='0' order by `property_id` desc limit 5 ");
while($selectarrayproperties=mysql_fetch_array($selectproperties))
													{
$product_id=$selectarrayproperties['property_id'];													
												
													
?>
													
													<tr>
														<td class="center">
															<?php echo $selectarrayproperties['property_id']; ?>
														</td>

														<td>
	<a target="_blank" href="../property_show.php?id=<?php echo $selectarrayproperties['property_id']; ?>" ><?php echo $selectarrayproperties['property_title'] ?></a>
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
								<?php
								}
								?>
								</tr>

															

															

															

															
														</tbody>
													</table>
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div><!-- /widget-box -->
									</div>
                                    <div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog" >
								<div class="modal-content" >
											
											
                                            
											
											
 
                                            
										</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
							  </div>
					</div><!-- /.page-content -->
			  </div><!-- /.main-content -->

				
				<!-- /#ace-settings-container -->
		  </div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
		
		                                       
                                            

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
