<?php include("include/connection.php");
if($_SESSION['adminname']== null){
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>کاربران</title>

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
url:"show_details_agent.php",
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
  function deleteclient(id)
  {
  var allid=parseInt(id);
  $(document).ready(function(e) {
$.ajax({
url:"delete_all_agent.php",
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
  
  
  <script>
  function showclients(id)
  {
  var viewid=parseInt(id);
  $(document).ready(function(e) {
$.ajax({
url:"show_all_agent.php",
type:"GET",
data:"id="+viewid,
success: function(msg)
{
$(".modal-content").html(msg);
}	
});
  });
  }  
  </script>
  
 
  
  <script>
  function blockagent(id)
  {
  var allid=parseInt(id);
  
  $(document).ready(function(e) {
$.ajax({
url:"block_all_agent.php",
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
  <script>
  function activateagent(id)
  {
  var allid=parseInt(id);
  
  $(document).ready(function(e) {
$.ajax({
url:"activate_all_agent.php",
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
				 

					<div class="page-content"><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row"><!-- /span -->
                                <h4 class="pink">
<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
<a href="#modal-table" role="button" id="addclient" class="green" data-toggle="modal"> اضافه کردن کاربر </a>
</h4>
								</div><!-- /row -->
								
								
								<div class="row">
								  <div class="col-xs-12">
										
										<div class="table-header">
											کاربر
										</div>

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															ردیف
														</th>
														
														<th>عکس</th>
														<th>نام</th>
														<th>ایمیل</th>
										<th class="hidden-480">تلفن</th>

													<th>جزئیات</th>	
								

														<th>عملیات</th>
													</tr>
												</thead>

												<tbody>
												  

													

													

													

													

													
													
													
													<?php
				$selectclients=mysql_query("select * from `agent`");
while($selectarrayclients=mysql_fetch_array($selectclients))
													{
													
													
?>
													
													<tr>
														

														<td>
	<?php echo $selectarrayclients['agent_id']; ?>
														</td>
														<?php
														if($selectarrayclients['photo'] == '')
														{
														?>
													<td><img src="../img/team/1.jpg" alt="Image" style="width:50px;">
													
													</td>	
														<?php
														}
														else
														{
														?>
				<td><img src="../agent/profilepic/<?php echo $selectarrayclients['photo'];  ?>" style="width:50px;"></td>
				<?php
				}
				?>
<td class="hidden-480"><?php  echo  $selectarrayclients['fullname'];?></td>
												<td>
						<?php echo $selectarrayclients['email']; ?>
														</td>
														

								<td class="hidden-480">
							<?php echo $selectarrayclients['telephone']; ?>
								</td>
								<td>
								<?php
								if($selectarrayclients['active'] == 1)
								{
								echo '<span class="label label-success arrowed">فعال</span>';
								}
								else
								{
								echo '<span class="label label-danger arrowed-in">مسدود</span>';
								}
								?>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
		<a class="btn btn-app" href="#modal-table" style="width:80px;" id="<?php echo $selectarrayclients['agent_id']; ?>view" onclick="showclients(this.id)" data-toggle="modal" >
																	مشاهده
																</a>

<a class="btn btn-app btn-success" href="#modal-table" style="width:80px;" id="<?php echo $selectarrayclients['agent_id']; ?>" onclick="showdetails(this.id)" data-toggle="modal">	
                                                            
																	ویرایش
																</a>

<a class="btn btn-app btn-danger btn-sm" href="#modal-table" style="width:80px;height:50px;" id="<?php echo $selectarrayclients['agent_id']; ?>del" onclick="deleteclient(this.id)" data-toggle="modal">
																	حذف
																</a>
																<?php
																if($selectarrayclients['active'] == 1)
																{
																?>
<a class="btn btn-app btn-inverse btn-xs" style="width:80px;height:50px;"  href="#modal-table"  id="<?php echo $selectarrayclients['agent_id']; ?>block" onclick="blockagent(this.id)" data-toggle="modal">
												
												<span style="top:5px;position:relative;">مسدود</span>
											</a>
											<?php
											}
											else
											{
											?>
						<a class="btn btn-app btn-inverse btn-xs" style="width:80px;height:50px;"   href="#modal-table"  id="<?php echo $selectarrayclients['agent_id']; ?>activate" onclick="activateagent(this.id)" data-toggle="modal" >
												
												<span style="top:5px;position:relative;">Activate</span>
											</a>
											<?php
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
								<div class="modal-content" style="height:700px;">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													New Agent
												</div>
											</div>
											
                                            <form action="#" method="post" id="form1" enctype="multipart/form-data">
											<div class="modal-body no-padding">
                                            
                                    
                                    
                                  
                                    <br/>
<?php 
$selectmaxclients=mysql_fetch_array(mysql_query("select max(`agent_id`) as `agentid` from `agent`"));
$maxidagents=$selectmaxclients['agentid']+1;
?>									
                                    
                           <div class="form-group" style="margin-bottom:50px;">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> نام کاربر </b></label>

										<div class="col-sm-9">
<input  type="hidden"  value="<?php echo  $maxidagents;?>" style="width:350px;" name="agentid" />
<input type="text"    name="agentname" id="clientname"   placeholder="نام کاربر" class="col-xs-10 col-sm-5" style="width:350px;"  required/>





										</div>
									</div>
                                    
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b>ایمیل</b></label>


										<div class="col-sm-9">
			<input type="email"    name="email" id="primarycontact"   placeholder="ایمیل" class="col-xs-10 col-sm-5" style="width:350px;"  required/>
											
										</div>
									</div>
                                    <br/>
                                    <br/>
									<br/>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b> پسورد</b> </label>


										<div class="col-sm-9">
<input type="password" id="website"  class="col-xs-10 col-sm-5"style="width:350px;" name="password" required/>
											
										</div>
									</div>
                                    <br/>
                                    <br/>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b> تلفن</b> </label>


										<div class="col-sm-9">
       <input type="text" name="telephone" placeholder="090000000" id="phone" class="form-control" style="width:350px;" required/>
													
											
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b>موبایل</b> </label>


										<div class="col-sm-9">
                                        
    <input type="text" id="mobile" placeholder="090000000" name="mobile" class="form-control" style="width:350px;" required/>
													
											
										</div>
									</div>
                                    <br/>
                                    <br/>
            
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b>عکس </b> </label>


										<div class="col-sm-9">
                                        
<input type="file" id="city"  class="col-xs-10 col-sm-5"style="width:350px;" name="file" value="" id="file" />		
										</div>
									</div>
                                    <br/>
                                    <br/>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b>توضیحات</b> </label>


										<div class="col-sm-9">
                                        
<textarea   class="col-xs-10 col-sm-5"style="width:350px;" name="description" >
</textarea>		
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    
									
									
                                    <div class="clearfix form-actions" style="margin-top:200px;position:relative;">
										<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" style="width:200px;" type="submit" id="submit"  name="submit" onclick="submitForm()">
												<i class="icon-ok bigger-110"></i>
												ذخیره
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
											if(isset($_POST['submit']))
											{
												
												
$agentid=$_POST['agentid'];
$agentname=$_POST['agentname'];	
$email=$_POST['email'];
$password=$_POST['password'];
$telephone=$_POST['telephone'];
$mobile=$_POST['mobile'];
$description=$_POST['description'];
$files=$_FILES["file"]["name"];
	move_uploaded_file($_FILES["file"]["tmp_name"],
      "../agent/profilepic/" .$files); 
$insert=mysql_query("insert into `agent` values('$agentid','$agentname','$email','$password','$telephone','$mobile','$files','$description','1')");

if($insert)
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:200px;">Agent added successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'agent.php';
}, 2000);
</script>";	
}
												
											}
											
											?>
<?php
if(isset($_POST['submit1']))
{
												
												
$agentid1=$_POST['agentid1'];
$agentname1=$_POST['agentname1'];	
$email1=$_POST['email1'];
$password1=$_POST['password1'];
$telephone1=$_POST['telephone1'];
$mobile1=$_POST['mobile1'];
$description1=$_POST['description1'];
$files=$_FILES["file"]["name"];
if($files == '')
{
$updateagent=mysql_query("update `agent` set `fullname`='$agentname1',`email`='$email1',`password`='$password1',`telephone`='$telephone1',`mobile`='$mobile1',`description`='$description1' where `agent_id`='$agentid1'");
}
else
{
$selectagentpic=mysql_fetch_array(mysql_query("select * from `agent` where `agent_id`='$agentid1'"));
unlink("../agent/profilepic/".$selectagentpic['photo']);
	move_uploaded_file($_FILES["file"]["tmp_name"],
      "../agent/profilepic/" .$files); 
$updateagent=mysql_query("update `agent` set `fullname`='$agentname1',`email`='$email1',`password`='$password1',`telephone`='$telephone1',`mobile`='$mobile1',`description`='$description1',`photo`='$files' where `agent_id`='$agentid1'");  
}
if($updateagent)
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:200px;">Agent Edit successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'agent.php';
}, 2000);
</script>";													
}
}																						
?>
<?php
if(isset($_POST['submitdelete']))
{
$agentiddel=$_POST['agentiddel'];

$selectagent=mysql_fetch_array(mysql_query("select * from `agent` where `agent_id`='$agentiddel'"));
$photo=$selectagent['photo'];
$delagent=mysql_query("delete from `agent` where `agent_id`='$agentiddel'");
unlink("../agent/profilepic/".$photo);
if($delagent)
{
{
	
echo "<script>
setTimeout(function(){
  window.location = 'agent.php';
}, 500);
</script>";													
}	
}	
}

?>
<?php
if(isset($_POST['submitblock']))
{
$blockagentid=$_POST['blockagentid'];
$updateblock=mysql_query("update `agent` set `active`='0' where `agent_id`='$blockagentid'");
$selectpropertyblock=mysql_query("select * from `properties` where `agent_id`='$blockagentid'");
while($selectarrayblock=mysql_fetch_array($selectpropertyblock))
{
$property_id_block=$selectarrayblock['property_id'];
$updateblockproperty=mysql_query("update `properties` set `agent_block`='1' where `property_id`='$property_id_block'");
}
if($updateblock)
{
if($updateblockproperty)
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:250px;">Agent Blocked successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'agent.php';
}, 2000);
</script>";	
}												
}


}



?>
<?php
if(isset($_POST['submitactivate']))
{
$agentidactivate=$_POST['agentidactivate'];
$updateactivate=mysql_query("update `agent` set `active`='1' where `agent_id`='$agentidactivate'");
$selectpropertyactivate=mysql_query("select * from `properties` where `agent_id`='$agentidactivate'");
while($selectarrayactivate=mysql_fetch_array($selectpropertyactivate))
{
$property_id_activate=$selectarrayactivate['property_id'];
$updateactivateproperty=mysql_query("update `properties` set `agent_block`='0' where `property_id`='$property_id_activate'");
}
if($updateactivate)
{
if($updateactivateproperty)
{
echo'<button class="btn btn-success" style="left:400px;bottom:20px;width:250px;">Agent Activated successfully</button>';
echo "<script>
setTimeout(function(){
  window.location = 'agent.php';
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
