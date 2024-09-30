
<?php
include("include/connection.php");
if($_SESSION['adminname']== null){
header("Location: index.php");
}
if(isset($_GET['id']))
{
$id=$_GET['id'];
$proid=$_GET['proid'];
$detailphoto=mysql_fetch_array(mysql_query("select * from `property_photo` where `pro_photo_id`='$id'"));
$pic=$detailphoto['photo'];



echo '
<div class="modal-header no-padding">
<div class="table-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
<span class="white">&times;</span>
</button>
View Picture
</div>
</div>
<form action="#" method="post" id="form1">
											<div class="modal-body no-padding">';
                                            
                                        


										echo '

											
										
                                    <br/>
 <input  type="hidden"  value="'.$id.'" style="width:350px;" name="clientid1" />                                   
                           <div class="form-group" style="margin-bottom:50px;left:150px;position:relative;">
			<img src="../agent/propertypic/'.$pic.'" style="width:200px;"/>

										
									</div>
                                    
                                    
                                    
                                    
									
                                    
                                    
                                    
                                    
									
									
									
                                    <div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
				
                                            
                                            

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="button" id="closeclient">
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
            $("#closeclient").click(function() {
			$(".close").click();
			});
			$(".close").click(function(){
			setTimeout(function(){
  window.location = 'edit_property.php?id=<?php echo $proid; ?>';
}, 500);
			});
			
			$(document).keyup(function(e) {
     
  if (e.keyCode == 27) { $('.close').click(); }   // esc
});
        });
		</script>

  
  
          