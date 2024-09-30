
<?php
include("include/connection.php");
if($_SESSION['adminname']== null){
header("Location: index.php");
}
if(isset($_GET['id']))
{
$id=$_GET['id'];
$detailproduct=mysql_fetch_array(mysql_query("select * from `products` where `product_id`='$id'"));
$cat_id=$detailproduct['category_id'];
$selectcatname=mysql_fetch_array(mysql_query("select * from `categories` where `category_id`='$cat_id'"));
echo '
<div class="modal-header no-padding">
<div class="table-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
<span class="white">&times;</span>
</button>
View product
</div>
</div>
<form action="#" method="post"  enctype="multipart/form-data" id="form1">
											<div class="modal-body no-padding">';
                                            
                                        


										echo '

											
										
                                    <br/>
 <input  type="hidden"  value="'.$id.'" style="width:350px;" name="productid1" /> 

 
 
                           <div class="form-group"  >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"
style="bottom:5px;position:relative;"><b> Product name </b></label>

										<div class="col-sm-9" >
<b>'.$detailproduct['product_name'].'</b>

										</div>
									</div>
									<br/>
									
									<div class="form-group" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"
style="bottom:5px;position:relative;"><b> Main price </b></label>

										<div class="col-sm-9">
<b>'.$detailproduct['price_main'].'</b>

										</div>
									</div>
                                    <br/>
									
									<div class="form-group" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"
style="bottom:5px;position:relative;"><b> Discount price </b></label>

										<div class="col-sm-9">
<b>'.$detailproduct['price_discount'].'</b>

										</div>
									</div>
									<br/>
									
									<div class="form-group" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"
style="bottom:5px;position:relative;"><b> Featured product </b></label>

										<div class="col-sm-9">';
										if($detailproduct['featured_product'] == 1)
										{
										echo "<b>Yes</b>";
										}
										else
										{
										echo "<b>No</b>";
										}
										

echo'
										</div>
									</div>
									<br/>
									
									<div class="form-group" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"style="bottom:5px;position:relative;"
><b> Category </b></label>

										<div class="col-sm-9">
										

<b>'.$selectcatname['category_name'].'</b>


										</div>
									</div>
									
                                    
                                    
                                   
									
                                    
                                    <div class="clearfix form-actions" style="margin-top:100px;position:relative;">
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
            
			$(".close").click(function(){
			setTimeout(function(){
  window.location = 'products.php';
}, 500);
			});
			
			$(document).keyup(function(e) {
     
  if (e.keyCode == 27) { $('.close').click(); }   // esc
});
        });
		</script>