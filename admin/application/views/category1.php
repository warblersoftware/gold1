<script>
	
	function validate(){
		
		var uname = document.getElementById('category').value;
		
		
		if(uname =="" ){
			
			alert('Enter the Category');
			document.getElementById('category').focus();
			return false;
		}
		
	}
	
</script>

<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li><a href="#">Admin</a><span class="divider">&raquo;</span></li>
			<li><a href="#">Catalog</a><span class="divider">&raquo;</span></li>
			<li class="active">Create Category</li>
		</ul>
		<div class="widget-content">
						<div class="widget-box">
							<form class="form-horizontal well" name="user" id="user" action="add_category" method="post" onsubmit="return validate();">
								<fieldset>
									<div class="control-group" style="color: red;">
										
									</div>
									 <div class="control-group">
										<label class="control-label" for="input01">Category name</label>
										<div class="controls">
											<input type="text"  class="input-xlarge text-tip" value="" id="category" title="Category" name="category">
										</div>
									</div> 
									
									<div class="form-actions">
										<button type="submit" class="btn btn-info">Save </button>
										
									</div>
									</div>
								</fieldset>
							</form>
							
						</div>
					</div>
	</div>
</div>