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
						<h5>Create New Category</h5>
					</div>
					<form name="products" id="products" action="add_category" method="post" enctype="multipart/form-data" onsubmit="return validate()">
					<div class="widget-content">
						<div class="widget-box">
							<div id="horizontal-wizard" class="content-wizard">
								<ul class="clearfix"><div style="float:right"><button type="submit" class="btn btn-info">Save</button></div>
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
								<div id="step-1"> 
								
									<div class="form-horizontal">
										<fieldset>
											<div class="control-group">
												<label class="control-label" for="input101">Category Name &nbsp;<span style="color:#FF0000;">*</span> &nbsp;: </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" name="c_name" id="c_name" >
													
												</div>
											</div>
											
											<div class="control-group">
												<label class="control-label" for="input101">Meta Tag Description : </label>
												<div class="controls">
													<textarea id="meta_desc" name="meta_desc" rows="5" cols="50" style="height:50px; width:400px;"></textarea>
													
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="input101">Meta Tag Keywords : </label>
												<div class="controls">
													<textarea id="meta_key" name="meta_key" rows="5" cols="50" style="height:50px; width:400px;"></textarea>
													
												</div>
											</div>
											
											<div class="control-group">
												<label class="control-label" for="input101">Description : </label>
												<div class="controls">
													<textarea id="descriptions" name="descriptions" rows="5" cols="50" style="height:200px; width:600px;"></textarea>
													
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
													
													while($row = mysql_fetch_object($data)){ ?>
													
													<option id="<?php echo $row->id; ?>" value="<?php echo $row->id; ?>"><?php echo $row->category_name ; ?></option>
													<?php } ?>
														
													</select>
													
												</div>
											</div>
											
											<div class="control-group">
												<label class="control-label" for="input101">Image : </label>
												<div class="controls">
												<input type="file" name="userfile" id="userfile" />
													
													
												</div>
											</div>
											
											<div class="control-group">
												<label class="control-label" for="input101">Top: </label>
												<div class="controls"> 
												<input type="hidden" name="top" id="top" value="0" />
												<input type="checkbox" name="top" id="top" value="1"  />
													
													<p class="help-block">
														 Display in the top menu bar. Only works for the top parent categories.
													</p>
													
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="input101">Sort Order : </label>
												<div class="controls"> 
													<input type="text" class="input-xlarge text-tip" name="sortorder" id="sortorder" style="width:50px;" />
													
												</div>
											</div>
											
											<div class="control-group">
												<label class="control-label" for="input101">Status &nbsp;<span style="color:#FF0000;">*</span> &nbsp;: </label>
												<div class="controls"> 
													<select id="status" name="status" style="width:120px;">
														<option id="1" value="1">Enabled</option>
														<option id="0" value="0">Disabled</option>
													</select>
													
												</div>
											</div>
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