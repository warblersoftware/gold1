<?php

//error_reporting(0);
if(isset($_POST['submit']) !=""){
	//isset(fields);
	//echo "<pre>";print_r($_REQUEST);echo "</pre>";
	mysql_query("update product_fields set is_active = 0");
	mysql_query("update product_fields set is_active = 1 where id IN(".implode(',',$_POST['fields']).")"); /*$_POST['fields'][$i]."'";*/
	redirect('welcome/product_fields','refresh');
	
}


?>

<div id="main-content">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
					<div class="widget-head">
						<h5>Product Fields Management</h5>
					</div>
					<div class="row-fluid">
			<div class="span6">
				<div class="widget-block">
					
					<div class="widget-content">
						<div class="widget-box">
							<form id="pfield" name="pfield" action="" method="post">
							<div class="well white-box">
								<table width="100%">
							<?php 
						//echo "<pre>";print_r($data);echo "<pre>";
							foreach ($data as $datas) { ?>
								
							<tr><td width="50%"><?php echo $datas->filed_name; ?> </td>&nbsp; 
								
							<td><input type="checkbox" id="fields" name="fields[]" value="<?php echo $datas->id; ?>" <?php if($datas->is_active == 1){ ?> checked="checked" <?php }?>  /></td>
							</tr>	
							<tr><td>&nbsp;</td></tr>	
							<?php } ?>
							
							</table>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="span6">
				<div class="widget-block">
					
					<div class="widget-content">
						<div class="well white-box">
								<table width="100%">
									<?php //echo "<pre>";print_r($data1);echo "<pre>";exit; ?>
							<?php 
							$i=1;
							foreach ($data1 as $datas1) { ?>
								
							<tr><td width="50%"><?php echo $datas1->filed_name; ?> </td>&nbsp; 
							<td><input type="checkbox" id="fields<?php echo $i;?>" name="fields[]" value="<?php echo $datas1->id; ?>" <?php if($datas1->is_active == 1){ ?> checked="checked" <?php }?> /></td>
							</tr>	
							<tr><td>&nbsp;</td></tr>	
							<?php 
							$i++;
							} ?>
							
							</table>
							</div>
							<input type="submit" id="submit" name="submit" value="Update" class="btn btn-info" style="margin-left: 40%;" />
							</form>
					</div>
				</div>
			</div>
		
		</div>
				</div>
			</div>
</div>
</div>
</div>