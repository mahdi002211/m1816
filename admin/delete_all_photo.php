<?php
include("include/connection.php");
if($_SESSION['adminname']== null){
header("Location: index.php");
}
$id=$_GET['id'];
$proid=$_GET['proid'];
$selectclientname=mysql_fetch_array(mysql_query("select * from `property_photo` where `pro_photo_id`='$id'"));
$client_name=$selectclientname['client_name'];
echo '<div class="modal-header no-padding">
<div class="table-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
<span class="white">&times;</span>
</button>
Delete Photo
</div>
</div>

<form action="#" method="post" id="form1">
<div class="modal-body no-padding">
          <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"
style="width:300px;"><b>Do U want to delete this picture</b> </label>
                                        
<input type="hidden" name="photoiddel" value="'.$id.'"/>

										
									</div>
                                    
                                    
                                    <br/>
                                    <br/>
                                   
                                    
                                    <div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit"   name="submitdelete" >
												<i class="icon-ok bigger-110"></i>
												Delete
											</button>
                                            
                                            

											&nbsp; &nbsp; &nbsp;
								<button class="btn" type="reset" id="cancel">
												<i class="icon-undo bigger-110"></i>
												Cancel
											</button>
										</div>
									</div>
					
                                            </form>
											';


?>

 <script>
		$(document).ready(function(e) {
            
			$(".close").click(function(){
			setTimeout(function(){
  window.location = 'edit_property.php?id=<?php echo $proid; ?>';
}, 100);
			});
			
			$(document).keyup(function(e) {
     
  if (e.keyCode == 27) { $('.close').click(); }   // esc
});
$("#cancel").click(function(){
$('.close').click();
});
        });
		</script>