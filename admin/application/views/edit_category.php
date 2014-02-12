<script>
	
	function validate(){
		
		var uname = document.getElementById('c_name').value;
		
		if(uname =="" ){
			
			alert('Enter Category Name');
			document.getElementById('c_name').focus();
			return false;
		}
		}
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
						<h5>Edit Category</h5>
					</div>
					
					
					<form name="products" id="products" action="<?php echo base_url(); ?>index.php/welcome/update_category" method="post" enctype="multipart/form-data" onsubmit="return validate()">
					<div class="widget-content">
						<div class="widget-box">
							<div id="horizontal-wizard" class="content-wizard">
								<ul class="clearfix"><div style="float:right"><button type="submit" class="btn btn-info">Update</button></div>
									<li><a href="#step-1">
									<span class="stepNumber">1</span>
									<span class="stepDesc"> Step 1</span></a></li>
									<li><a href="#step-2">
									<span class="stepNumber">2</span>
									<span class="stepDesc"> Step 2</span></a></li>
									<!--<li><a href="#step-3">
									<span class="stepNumber">3</span>
									<span class="stepDesc"> Step 3 </span></a></li>
									<li><a href="#step-4">
									<span class="stepNumber">4</span>
									<span class="stepDesc"> Step 4 </span></a></li>-->
								</ul>
								<?php
								
					$data = mysql_query("select * from categories where id = $id");
					$values = mysql_fetch_object($data);
					
					
					?>
								<div id="step-1"> 
								
									<div class="form-horizontal">
										<fieldset>
											<div class="control-group">
												<label class="control-label" for="input101">Category Name &nbsp;<span style="color:#FF0000;">*</span> &nbsp;: </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" name="c_name" id="c_name" value="<?php echo $values->category_name; ?>">
													<input type="hidden" id="hid" value="<?php echo $id;?>" name="hid" />
													
												</div>
											</div>
											
											<div class="control-group">
												<label class="control-label" for="input101">Meta Tag Description : </label>
												<div class="controls">
													<textarea id="meta_desc" name="meta_desc" rows="5" cols="50" style="height:50px; width:400px;">
													<?php echo $values->meta_description; ?>
													</textarea>
													
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="input101">Meta Tag Keywords : </label>
												<div class="controls">
													<textarea id="meta_key" name="meta_key" rows="5" cols="50" style="height:50px; width:400px;"><?php echo $values->meta_keyword; ?></textarea>
													
												</div>
											</div>
											
											<div class="control-group">
												<label class="control-label" for="input101">Description : </label>
												<div class="controls">
													<textarea id="descriptions" name="descriptions" rows="5" cols="50" style="height:200px; width:600px;"><?php echo $values->description; ?></textarea>
													
												</div>
											</div>
											
											
											
										</fieldset>
									</div>
								</div>
								<div id="step-2">
									<div class="form-horizontal">
										<fieldset>
											<div class="control-group">
												<label class="control-label" for="input101">Parent: </label>
												<div class="controls"> 
												
													<select id="parent_id" name="parent_id" style="width:120px;">
													<option id="0" value="0">No Parent</option>
													<?php 
													$data = mysql_query("select * from categories where parent = 0");
													
													while($row = mysql_fetch_object($data)){  ?>
													
													
													<option id="<?php echo $row->id; ?>" value="<?php echo $row->id; ?>" <?php if($row->id == $values->parent){ ?> selected="selected" <?php } ?>><?php echo $row->category_name; ?></option>
													<?php } ?>
														
													</select>
													
												</div>
											</div>
											
											<div class="control-group">
												<label class="control-label" for="input101">Image :</label>
												<div class="controls">
												<input type="file" name="userfile" id="userfile" /><br />
												<input type="hidden" name="userfile" id="userfile" value="<?php echo $values->image; ?>" />
												
												<?php if(strlen($values->image) > 1){ ?>
												<img src="<?php echo base_url()."images/".$values->image; ?>" height="100px" width="100px" />
												<?php }else{?>
												
												<img src="<?php echo base_url()."images/no_image.jpg" ?>" height="100px" width="100px" />
												<?php } ?>
													
													
												</div>
											</div>
											
											<div class="control-group">
												<label class="control-label" for="input101">Top: </label>
												<div class="controls"> 
												<?php if($values->top == 0){ ?>
												<input type="checkbox" name="top" id="top" value="0" />
												<?php }else{ ?>
												<input type="checkbox" name="top" id="top" value="1" checked="checked"  />
												<?php } ?>
													
													<p class="help-block">
														 Display in the top menu bar. Only works for the top parent categories.
													</p>
													
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="input101">Sort Order : </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" name="sortorder" id="sortorder" style="width:50px;" value="<?php echo $values->sort_order; ?>" />
													
												</div>
											</div>
											
											<div class="control-group">
												<label class="control-label" for="input101">Status &nbsp;<span style="color:#FF0000;">*</span> &nbsp;: </label>
												<div class="controls"> 
													<select id="status" name="status" style="width:120px;">
														<?php if($values->status ==1){ ?>
														<option id="1" value="1" selected="selected">Enabled</option>
														<option id="0" value="0">Disabled</option>
														<?php }else{ ?>
														<option id="1" value="1">Enabled</option>
														<option id="0" value="0" selected="selected">Disabled</option>
														<?php } ?>
													</select>
													
												</div>
											</div>
										</fieldset>
									</div>
								</div>
								<?php // } ?>
								
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  </div>
</div>