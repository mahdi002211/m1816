<?php
include("include/connection.php");
if($_SESSION['agentname']== null){
header("Location: index.php");
}
$id=$_GET['id'];
$active=$_GET['active'];
$selectproduct=mysql_fetch_array(mysql_query("select * from `properties` where `property_id`='$id'"));
$property_title=$selectproduct['property_title'];
echo '<div class="modal-header no-padding">
<div class="table-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
<span class="white">&times;</span>
</button>
Delete property
</div>
</div>

<form action="#" method="post" id="form1">
<div class="modal-body no-padding">
          <div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"
style="width:300px;"><b>Do U want to delete this property: '.$property_title.'</b> </label>
                                        
<input type="hidden" name="propertyiddel" value="'.$id.'"/>

										
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
  window.location = 'properties.php?active=<?php echo $active; ?>';
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