 
<?php
include("include/connection.php");
if($_SESSION['adminname']== null){
header("Location: index.php");
}
if(isset($_GET['id']))
{
$id=$_GET['id'];
$selectcontact=mysql_fetch_array(mysql_query("select * from `contact` where `contact_id`='$id'"));

echo '
<div class="modal-header no-padding">
<div class="table-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
<span class="white">&times;</span>
</button>
Edit contact
</div>
</div>
<form action="#" method="post" id="form1" enctype="multipart/form-data">
											<div class="modal-body no-padding">
                                            
                                    
                                    
                                  
                                    <br/>

								
                                    
                           <div class="form-group" style="margin-bottom:50px;">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Email</b></label>

										<div class="col-sm-9">
<input  type="hidden"  value="'.$id.'" style="width:350px;" name="contactid1" />
<input type="text"    name="email1" id="clientname"   value="'.$selectcontact['email'].'" class="col-xs-10 col-sm-5" style="width:350px;"  required/>





										</div>
									</div>
                                    
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b>Name</b></label>


										<div class="col-sm-9">
			<input type="text"    name="name1" value="'.$selectcontact['name'].'" id="primarycontact"   placeholder="Email" class="col-xs-10 col-sm-5" style="width:350px;"  required/>
											
										</div>
									</div>
                                    <br/>
                                    <br/>
									<br/>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b>Mobile</b> </label>


										<div class="col-sm-9">
<input type="text" id="website" value="'.$selectcontact['mobile'].'"  class="col-xs-10 col-sm-5"style="width:350px;" name="mobile1" required/>
											
										</div>
									</div>
                                    <br/>
                                    <br/>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  for="form-input-readonly">
  <b>Photo</b> </label>


										<div class="col-sm-9">
       <input type="file" name="file1" accept="image/*" style="width:350px;" >
													
											
										</div>
									</div>
                                    
                                    
									
									
                                    <div class="clearfix form-actions" style="margin-top:100px;position:relative;">
										<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" style="width:200px;" type="submit" id="submit"  name="submit1" onclick="submitForm()">
												<i class="icon-ok bigger-110"></i>
												Save
											</button>
                                            
                                            

											&nbsp; &nbsp; &nbsp;
											
										</div>
									</div>
					
                                            </form>
											



';
}

?>

  
  <script src="assets\js\tinymce\js\tinymce\tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea',
		plugins: "preview",
    toolbar: "preview"
		});
</script>
          <script>
		$(document).ready(function(e) {
            
			$(".close").click(function(){
			setTimeout(function(){
  window.location = 'settings.php';
}, 500);
			});
			
			$(document).keyup(function(e) {
     
  if (e.keyCode == 27) { $('.close').click(); }   // esc
});
        });
		</script>