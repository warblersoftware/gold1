<script>
	function user_delete(id){
		
		
		con = confirm("Are you sure want to delete ?");
		if(con){
			
			window.location="user_delete/"+id;
		}
		
	}
</script>


<div id="main-content">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-block">
					<div class="widget-head">
						<h5>Users Management</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box"><br>
						 <table width="100%" border="0" cellpadding="3" cellspacing="1">
						 <tr align="center">
							  <td width="8%" class="text_white"><h4>#</td>
							  <td width="8%" class="text_white"><h4>User #</h4></td>						
							  <td width="20%" align="center"  class="text_white"><h4>User Name</h4></td>
							  <td width="30%" align="center"  class="text_white"><h4>User Email</h4></td>
						      <td width="10%" align="center"  class="text_white"><h4>Total Ads</h4></td>
						      <td width="10%" align="center"  class="text_white"><h4>Current Month Ads</h4></td>
							  <td width="32%"  class="text_white"><h4>Action</h4></td>
												
						  </tr>
						  
						  <?php 
						  $i = 1;
						  foreach($data as $row) { 						  	
						  	
							$datas = mysql_query('SELECT * FROM `oc_t_item` WHERE fk_i_user_id = '.$row->pk_i_id.' AND b_active =  1 AND 
							MONTH(dt_pub_date) = MONTH(NOW()) AND YEAR(dt_pub_date)= YEAR(NOW()) AND DAYOFWEEK(dt_pub_date) >= 2 AND DAYOFWEEK(dt_pub_date) <= 6');
							$a = mysql_num_rows($datas);							
							
							
						  	?>
						  <tr align="center">
							  <td width="8%" class="text_white"><?php echo $i; ?></td>
							  <td width="8%" class="text_white"><?php echo $row->pk_i_id; ?></td>						
							  <td width="20%" align="center"  class="text_white"><?php echo $row->s_name; ?></td>
							  <td width="3%" align="center"  class="text_white"><?php echo $row->s_email; ?></td>
						      <td width="10%" align="center"  class="text_white"><?php echo $row->i_items; ?></td>
						      <td width="10%" align="center"  class="text_white"><?php echo $a; ?></td>
							  <td width="32%"  class="text_white">  <a href="user_detail/<?php echo $row->pk_i_id; ?>"><img src="../../img/preview.png" title="preview" /></a>&nbsp;
							  	<a href="user_edit/<?php echo $row->pk_i_id; ?>"><img src="../../img/edit.png" title="edit" /></a>&nbsp;
							  	<a href="javascript:user_delete(<?php echo $row->pk_i_id; ?>);"><img src="../../img/delete.png" title="delete" /></a>
							  </td>
												
						  </tr>
						  <?php  $i++; } ?>
						  
						  </table>
							
						</div>
					</div>
				</div>
			</div>
</div>
</div>
</div>