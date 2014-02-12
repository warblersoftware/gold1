<script>
$(document).ready(function(){

	
	$(".image_add").click(function(){
		$("#customImageField").append(
		'<tr valign="top"><td><div class="_100"><p><label for="textfield">Image</label><div class="uploader" id="uniform-txtImage"><input type="file" name="txtImage[]" id="txtImage"><span class="filename" style="-moz-user-select: none;"></span><span class="action" style="-moz-user-select: none;">Choose File</span></div><a href="javascript:void(0);" class="button image_add remImg">Remove</a><div id="divImage" class="error no-margin top"></div></p></div></td></</tr>'		
		);
	});
  $(".remImg").live('click',function() {
        $(this).parent().parent().remove();
  });
});
</script>

<style>
.scrollbox {
    background: none repeat scroll 0 0 rgb(255, 255, 255);
    border: 1px solid rgb(204, 204, 204);
    height: 100px;
    overflow-y : scroll;
    width: 350px;
}
.scrollbox div {
    padding: 5px;
}

.scrollbox div.odd {
    background: none repeat scroll 0 0 rgb(228, 238, 247);
}
.scrollbox div.even {
    background: none repeat scroll 0 0 rgb(255, 255, 255);
}

.scrollbox div input {
    margin: 0 3px 0 0;
    padding: 0;
}
</style>
<div id="main-content">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="nonboxy-widget">
					<div class="widget-head">
						<h5>Insert New Product</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
						<form name="products" id="products" action="<?php echo base_url();?>welcome/product_add" method="post" enctype="multipart/form-data">
							<div id="horizontal-wizard" class="content-wizard">
								<ul class="clearfix"><div style="float:right"><button type="submit" class="btn btn-info">Save</button></div>
									<li><a href="#step-1">
									<span class="stepNumber">1</span>
									<span class="stepDesc"> Step 1</span></a></li>
									<li><a href="#step-2">
									<span class="stepNumber">2</span>
									<span class="stepDesc"> Step 2</span></a></li>
									<li><a href="#step-3">
									<span class="stepNumber">3</span>
									<span class="stepDesc"> Step 3 </span></a></li>
									<li><a href="#step-4">
									<span class="stepNumber">4</span>
									<span class="stepDesc"> Step 4 </span></a></li>
								</ul>
								<div id="step-1"> 
								
									<div class="form-horizontal">
										<fieldset>
										<?php 
											$Query = mysql_query("select * from product_fields");
												while($result = mysql_fetch_array($Query)){
												$data[]= $result; 
											}
										?>
											<?php if($data[0]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Product Name : </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id ="p_name" name ="p_name" >
													
												</div>
											</div>
											<?php } ?>
											<?php if($data[1]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Meta Tag Description : </label>
												<div class="controls">
													<textarea id="meta_desc" name="meta_desc" rows="5" cols="50" style="height:50px; width:400px;"></textarea>
													
												</div>
											</div>
											<?php } ?>
											<?php if($data[2]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Meta Tag Keywords : </label>
												<div class="controls">
													<textarea id="meta_key" name="meta_key" rows="5" cols="50" style="height:50px; width:400px;"></textarea>
													
												</div>
											</div>
											<?php } ?>
											<?php if($data[3]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Description : </label>
												<div class="controls">
													<textarea id="descriptions" name="descriptions" rows="5" cols="50" style="height:200px; width:600px;"></textarea>
													
												</div>
											</div>
											<?php } ?>
											
											<?php if($data[4]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Product Tags : </label>
												<div class="controls">
													<input type="text" class="input-xlarge text-tip" id="p_tags" name ="p_tags">
													<p class="help-block">
														 comma separated.
													</p>
												</div>
											</div>
											<?php } ?>
											<?php if($data[19]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Image : </label>
												<div class="controls">
												<input type="file" name ="userfile" id ="userfile" />
													
													
												</div>
											</div>
											<?php } ?>
											<?php if($data[24]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Status : </label>
												<div class="controls"> 
													<select id="status" name="status" style="width:120px;">
														<option id="1" value="1">Enabled</option>
														<option id="0" value="0">Disabled</option>
													</select>
													
												</div>
											</div>
											<?php } ?>
										</fieldset>
									</div>
								</div>
								<div id="step-2">
									<div class="form-horizontal">
										<fieldset>
											<?php if($data[5]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Model: </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id="model" name ="model" >
													
												</div>
											</div>
											<?php } ?>
											<?php if($data[6]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">SKU: </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id="sku" name ="sku" >
													<p class="help-block">
														 Stock Keeping Unit.
													</p>
													
												</div>
											</div>
											<?php } ?>
											<?php if($data[7]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">UPC: </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id="upc" name ="upc" >
													<p class="help-block">
														 Universal Product Code.
													</p>
												</div>
											</div>
											<?php } ?>
											<?php if($data[8]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">EAN: </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id="ean" name ="ean" >
													<p class="help-block">
														 European Article Number.
													</p>
												</div>
											</div>
											<?php } ?>
											<?php if($data[9]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">JAN: </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id="jan" name ="jan" >
													<p class="help-block">
														 Japanese Article Number.
													</p>
												</div>
											</div>
											<?php } ?>
											<?php if($data[10]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">ISBN: </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id="isbn" name ="isbn" >
													<p class="help-block">
														 International Standard Book Number.
													</p>
												</div>
											</div>
											<?php } ?>
											<?php if($data[11]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">MPN: </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id="mpn" name ="mpn" >
													<p class="help-block">
														 Manufacturer Part Number.
													</p>
												</div>
											</div>
											<?php } ?>
											
										</fieldset>
									</div>
								</div>
								<div id="step-3">
									<div class="form-horizontal">
										<fieldset>
											<?php if($data[12]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Price: </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id="price" name ="price">
													
												</div>
											</div>
											<?php } ?>
											<?php if($data[13]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Quantity: </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id="quantity" name ="quantity">
													
												</div>
											</div>
											<?php } ?>
											<?php if($data[14]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Minimum Quantity: </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id="mquantity" name ="mquantity" >
													<p class="help-block">
														 Force a minimum ordered amount.
													</p>
												</div>
											</div>
											<?php } ?>
											<?php if($data[15]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Subtract Stock: </label>
												<div class="controls"> 
													<select id="sub_stock" name="sub_stock" style="width:70px;">
														<option id="1" value="1">Yes</option>
														<option id="0" value="0">No</option>
													</select>
													
												</div>
											</div>
											<?php } ?>
											<?php if($data[16]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Out Of Stock Status : </label>
												<div class="controls"> 
													<select id="out_of_stock" name="out_of_stock" style="width:120px;">
														<option id="1" value="1">In Stock</option>
														<option id="0" value="0">Out Of Stock</option>
													</select>
													<p class="help-block">
														 Status shown when a product is out of stock.
													</p>
												</div>
											</div>
											<?php } ?>
											<?php if($data[17]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Requires Shipping : </label>
												<div class="controls"> 
													<input type="radio" id="require_shipping" name="require_shipping" value="1" checked="checked" /> Yes &nbsp;&nbsp;<input type="radio" id="require_shipping" name="require_shipping" value="0" /> NO
													
												</div>
											</div>
											<?php } ?>
											<?php if($data[18]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">SEO Keyword : </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id="seokeyword" name ="seokeyword" >
													<p class="help-block">
														 Do not use spaces instead replace spaces with - and make sure the keyword is globally unique.
													</p>
												</div>
											</div>
											<?php } ?>
											<?php if($data[20]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Dimensions (L x W x H):</label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id ="d_l" name ="d_l" style="width:40px;">&nbsp;&nbsp;<input type="text" class="input-xlarge text-tip" id="d_w" name ="d_w" style="width:40px;">&nbsp;&nbsp;<input type="text" class="input-xlarge text-tip" id="d_h" name ="d_h" style="width:40px;">
													
												</div>
											</div>
											<?php } ?>
											<?php if($data[21]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Length Class : </label>
												<div class="controls"> 
													<select id="length_class" name="length_class" style="width:120px;">
														<option id="Centimeter" value="Centimeter">Centimeter</option>
														<option id="Millimeter" value="Millimeter">Millimeter</option>
														<option id="Inch" value="Inch">Inch</option>
													</select>
													<p class="help-block">
														 Status shown when a product is out of stock.
													</p>
												</div>
											</div>
											<?php } ?>
											<?php if($data[22]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Weight:</label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" id ="weight" name ="weight" style="width:100px;">
													
												</div>
											</div>
											<?php } ?>
											<?php if($data[23]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Weight Class : </label>
												<div class="controls"> 
													<select id="weight_class" name="weight_class" style="width:120px;">
														<option id="Kilogram" value="Kilogram">Kilogram</option>
														<option id="Gram" value="Gram">Gram</option>
														<option id="Pound" value="Pound">Pound</option>
														<option id="Ounce" value="Ounce">Ounce</option>
													</select>
													
												</div>
											</div>
											<?php } ?>
										</fieldset>
									</div>
								</div>
								<div id="step-4">
									<div class="form-horizontal">
										<fieldset>
												<?php if($data[25]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Categories : </label>
												<div class="controls"> 
													<div class="scrollbox">
                                                                        <div class="even">
																		 <?php 
													$data = mysql_query("select * from categories");
													
													while($row = mysql_fetch_object($data)){ 
													
													
													if($row->parent > 0){
															$datas = mysql_query("select * from categories where id ='$row->parent' ");
															$data1 = mysql_fetch_object($datas);
															$num = mysql_num_rows($datas);
															if($num){ ?>
															
		<input type="checkbox" value="<?php echo $row->id; ?>" name="product_category" id="product_category"><?php echo $data1->category_name." >> ".$row->category_name; ?><br />
              
              
															
														<?php 	}}else{ ?>													
													
              <input type="checkbox" value="<?php echo $row->id; ?>" name="product_category" id="product_category"><?php echo $row->category_name; ?><br />
													<?php }} ?>
													 </div>
												</div>
												</div>
											</div>
											<?php } ?>
											<?php if($data[26]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Related Products : </label>
												
                                                                        <div class="controls">
																				<input type="text" class="input-xlarge text-tip" id="related_product" name="related_product" />
											
																		 </div>
											</div>
											<?php } ?>
											<?php if($data[27]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Discount Quantity : </label>
                                                                        <div class="controls">
																				<input type="text" class="input-xlarge text-tip" id="discount_qty" name="discount_qty" />
											
																		 </div>
											</div>
											<?php } ?>
											<?php if($data[28]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Discount Price : </label>
                                                                        <div class="controls">
																				<input type="text" class="input-xlarge text-tip" id="discount_price" name="discount_price" />
											
																		 </div>
												
											</div>
											<?php } ?>
											<?php if($data[29]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Special Price : </label>
												                                                                        <div class="controls">
																				<input type="text" class="input-xlarge text-tip" id="special_price" name="special_price" />
											
																		 </div>
											</div>
											<?php } ?>
											<?php if($data[30]['is_active'] == 1){ ?><div class="control-group">
												<label class="control-label" for="input101">Multiple Image: </label>
                                                                        <div class="controls">
																				<input type="file" class="input-xlarge text-tip" id="mimg" name="mimg" />
											
																		 </div>
												
											</div>
											<?php } ?>
										
										</fieldset>
										</div>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  </div>
</div>