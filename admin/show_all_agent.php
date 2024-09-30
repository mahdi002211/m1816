
<?php
include("include/connection.php");
if($_SESSION['adminname']== null){
header("Location: index.php");
}
if(isset($_GET['id']))
{
$id=$_GET['id'];
$selectagent=mysql_fetch_array(mysql_query("select * from `agent` where `agent_id`='$id'"));


echo '
<div class="modal-header no-padding">
<div class="table-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
<span class="white">&times;</span>
</button>
View Client
</div>
</div>
<form action="#" method="post" id="form1" enctype="multipart/form-data">
											<div class="modal-body no-padding">
                                            
                                    
                                    
                                  
                                    <br/>

								
                                    
                           <div class="form-group" style="margin-bottom:50px;">
			<label class="col-sm-3 control-label no-padding-right" style="bottom:5px;position:relative;" for="form-field-1"><b> Agent Name </b></label>

										<div class="col-sm-9">
<input  type="hidden"  value="'.$id.'" style="width:350px;" name="agentid1" />
  <b>'.$selectagent['fullname'].'</b>





										</div>
									</div>
                                    
                                    
                                    <div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" style="bottom:5px;position:relative;"  for="form-input-readonly">
  <b>Email</b></label>


										<div class="col-sm-9" >
			<b>'.$selectagent['email'].'</b>
											
										</div>
									</div>
                                    <br/>
                                    <br/>
									<br/>
                                    <div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" style="bottom:5px;position:relative;"  for="form-input-readonly">
  <b> Password</b> </label>


										<div class="col-sm-9">
<b>'.$selectagent['password'].'</b>
											
										</div>
									</div>
                                    <br/>
                                    <br/>
									<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" style="bottom:5px;position:relative;"  for="form-input-readonly">
  <b> telephone</b> </label>


										<div class="col-sm-9">
       <b>'.$selectagent['telephone'].'</b>
													
											
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    <div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" style="bottom:5px;position:relative;"  for="form-input-readonly">
  <b>Mobile</b> </label>


										<div class="col-sm-9">
                                        
    <b>'.$selectagent['mobile'].'</b>
													
											
										</div>
									</div>
                                    <br/>
                                    <br/>
            
                                    
                                    <div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" style="bottom:5px;position:relative;"  for="form-input-readonly">
  <b>Photo</b> </label>


										<div class="col-sm-9">';
                  if($selectagent['photo'] == '')
{
echo'<img src="../img/team/1.jpg" alt="Image" style="width:100px;">';
}
else
{
echo '				  
<img src="../agent/profilepic/'.$selectagent['photo'].'" style="width:50px;">';
}
echo '	
										</div>
									</div>
                                    <br/>
                                    <br/>
									<br/>
									<br/>
									<br/>
									<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" style="bottom:5px;position:relative;"  for="form-input-readonly">
  <b>Description</b> </label>


										<div class="col-sm-9">
                                        

'.$selectagent['description'].'
	
										</div>
									</div>
                                    <br/>
                                    <br/>
                                    
									
									
                                    <div class="clearfix form-actions" style="margin-top:200px;position:relative;">
										<div class="col-md-offset-3 col-md-9">
				<button class="btn" type="reset" id="cancel" style="left:50px;position:relative;">
												<i class="icon-undo bigger-110"></i>
												Close
											</button>
											
										</div>
									</div>
					
                                            </form>



';
}

?>

  
  
          <script>
		$(document).ready(function(e) {
            $("#cancel").click(function() {
			$(".close").click();
			});
			$(".close").click(function(){
			setTimeout(function(){
  window.location = 'agent.php';
}, 500);
			});
			
			$(document).keyup(function(e) {
     
  if (e.keyCode == 27) { $('.close').click(); }   // esc
});
        });
		</script>