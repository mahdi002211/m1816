
<?php
include("include/connection.php");
if($_SESSION['adminname']== null){
header("Location: index.php");
}
if(isset($_GET['id']))
{
$id=$_GET['id'];
$detailproduct=mysql_fetch_array(mysql_query("select * from `products` where `product_id`='$id'"));


echo '
<div class="modal-header no-padding">
<div class="table-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
<span class="white">&times;</span>
</button>
Edit product
</div>
</div>
<form action="#" method="post"  enctype="multipart/form-data" id="form1">
											<div class="modal-body no-padding">';
                                            
                                        


										echo '

											
										
                                    <br/>
 <input  type="hidden"  value="'.$id.'" style="width:350px;" name="productid1" /> 

 
 
                           <div class="form-group" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Product name </b></label>

										<div class="col-sm-9">
<input type="text"   value="'.$detailproduct['product_name'].'"  name="productname1"   class="col-xs-10 col-sm-5" style="width:350px;"  required/>

										</div>
									</div>
									<br/>
									<br/>
									<div class="form-group" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Main price </b></label>

										<div class="col-sm-9">
<input type="text"    name="pricemain1" id="pricemain1" value="'.$detailproduct['price_main'].'"   placeholder="Main price" class="col-xs-10 col-sm-5" style="width:350px;"  required/>

										</div>
									</div>
                                    <br/>
									<br/>
									<div class="form-group" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Discount price </b></label>

										<div class="col-sm-9">
<input type="text" id="pricediscount1" value="'.$detailproduct['price_discount'].'" placeholder="Discount price" class="col-xs-10 col-sm-5"style="width:350px;" name="pricediscount1" required/>

										</div>
									</div>
									<br/>
									<br/>
									<div class="form-group" style="margin-bottom:50px;">
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Featured product </b></label>

										<div class="col-sm-9">
										
<input name="featuredpro1" class="ace" type="radio" value="1" required>
			<span class="lbl"> Yes</span>
			<input name="featuredpro1" class="ace" type="radio" value="0" required>
			<span class="lbl"> No</span>

										</div>
									</div>
									<br/>
									
									<div class="form-group" >
<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><b> Category </b></label>

										<div class="col-sm-9">
										
<select  class="col-xs-10 col-sm-5"style="width:350px;" value="" name="category1" >';

$selectcat=mysql_query("select * from `categories`");
while($selectcatarray=mysql_fetch_array($selectcat))
{
echo '<option value="'.$selectcatarray['category_id'].'"';
if($detailproduct['category_id'] == $selectcatarray['category_id'])
{
echo 'selected="selected"';
}
echo '>'.$selectcatarray['category_name'].'</option>';
}
echo '
</select>

										</div>
									</div>
									
                                    
                                    
                                   
									
                                    
                                    <div class="clearfix form-actions" style="margin-top:100px;position:relative;">
										<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" style="width:200px;" type="submit" id="submit1"  name="submit1" onclick="submitForm()">
												<i class="icon-ok bigger-110"></i>
												Edit
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