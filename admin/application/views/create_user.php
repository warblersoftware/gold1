<script>
	
	function validate(){
		
		var uname = document.getElementById('username').value;
		var uemail = document.getElementById('useremail').value;
		var password = document.getElementById('password').value;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		
		if(uname =="" ){
			
			alert('Enter username');
			document.getElementById('username').focus();
			return false;
		}
		if(uemail =="" ){
			
			alert('Enter Email address');
			document.getElementById('useremail').focus();
			return false;
		}
		if(!filter.test(uemail)){
			
			alert('Enter Valid Email address');
			document.getElementById('useremail').focus();
			return false;
		}
		if(password =="" ){
			
			alert('Enter Password');
			document.getElementById('password').focus();
			return false;
		}
		
		
	}
	
</script>

<div id="main-content">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li><a href="#">Admin</a><span class="divider">&raquo;</span></li>
			<li><a href="#">User Management</a><span class="divider">&raquo;</span></li>
			<li class="active">Create Users</li>
		</ul>
		<div class="widget-content">
						<div class="widget-box">
							<form class="form-horizontal well" name="user" id="user" action="adduser" method="post" onsubmit="return validate();">
								<fieldset>
									<div class="control-group" style="color: red;">
										<div class="controls">
									<?php if(isset($msg)){ echo $msg;} ?>
									</div>
									</div>
									 <div class="control-group">
										<label class="control-label" for="input01">User name</label>
										<div class="controls">
											<input type="text" placeholder="user name" class="input-xlarge text-tip" value="" id="username" title="user name to login" name="username">
										</div>
									</div> 
									<div class="control-group">
										<label class="control-label" for="input01">User E-mail</label>
										<div class="controls">
											<input type="text" placeholder="email" class="input-xlarge text-tip" id="useremail" value="" title="user email" name="useremail">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="input02">Password</label>
										<div class="controls">
											<input type="password" placeholder="password" class="input-xlarge text-tip" id="password" value="" title="user password" name="password"/>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-info">Save changes</button>
										<button class="btn btn-warning">Cancel</button>
									</div>
									</div>
								</fieldset>
							</form>
							
						</div>
					</div>
	</div>
</div>