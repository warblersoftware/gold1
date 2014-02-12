<style>
.list1 {
    border-collapse: collapse;
    border-left: 1px solid rgb(221, 221, 221);
    border-top: 1px solid rgb(221, 221, 221);
    margin-bottom: 20px;
    width: 100%;}
	.list1 td {
    border-bottom: 1px solid rgb(221, 221, 221);
    border-right: 1px solid rgb(221, 221, 221);
}
.list1 thead td {
    background-color: rgb(239, 239, 239);
    padding: 0 5px;
}
.list1 thead td a, .list1 thead td {
    color: rgb(34, 34, 34);
    font-weight: bold;
    text-decoration: none;
}
.list1 tbody td a {
    text-decoration: underline;
}
.list1 tbody td {
    background: none repeat scroll 0 0 rgb(255, 255, 255);
    padding: 0 5px;
    vertical-align: middle;
}
.list1 .left {
    padding: 7px;
    text-align: left;
}
.list1 .right {
    padding: 7px;
    text-align: right;
}
.list1 .center {
    padding: 7px;
    text-align: center;
}
.list1 .asc {
    background: url("../image/asc.png") no-repeat scroll right center transparent;
    padding-right: 15px;
}
.list1 .desc {
    background: url("../image/desc.png") no-repeat scroll right center transparent;
    padding-right: 15px;
}
.list1 tr.filter td {
    background: none repeat scroll 0 0 rgb(231, 239, 239);
    padding: 5px;
}
table.form {
    border-collapse: collapse;
    margin-bottom: 20px;
    width: 100%;
}
table.form > tbody > tr > td:first-child {
    width: 200px;
}
table.form > tbody > tr > td {
    border-bottom: 1px dotted rgb(204, 204, 204);
    color: rgb(0, 0, 0);
    padding: 10px;
}
</style>

<div id="main-content">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
			<div class="controls" style="font-weight:bold; text-align:center; color:#D41F00; margin-bottom:10px;">
									<?php if(isset($msg)){ echo $msg;} ?>
									</div>
				<div class="widget-block">
					<div class="widget-head"><div style="float:right; margin:4px;"><a href="category" style="text-decoration:none;"><button type="submit" class="btn btn-info">Insert</button></a>
										<button class="btn btn-warning">Delete</button></div>
						<h5>Categories</h5>
					</div>
					<div class="widget-content">
						<div class="widget-box">
							<table class="list1">
          <thead>
            <tr>
              <td width="1" style="text-align: center;"><input type="checkbox" onclick="$('input[name*=\'selected\']').attr('checked', this.checked);"></td>
              <td align="center">Category Name</td>
              <td align="center">Sort Order</td>
              <td align="center">Action</td>
			  
            </tr>
          </thead>
          <tbody style="line-height:35px;">
		  
		  <?php 
													$data = mysql_query("select * from categories");
													
													while($row = mysql_fetch_object($data)){ 
													
													
													if($row->parent > 0){
															$datas = mysql_query("select * from categories where id ='$row->parent' ");
															$data1 = mysql_fetch_object($datas);
															$num = mysql_num_rows($datas);
															if($num){ ?>
															
		<tr>
              <td><input type="checkbox" value="<?php echo $row->id; ?>" name="selected[]"></td>
              <td><?php echo $data1->category_name." >> ".$row->category_name; ?></td>
              <td align="center"><?php echo $row->sort_order; ?></td>
              <td align="center"> [ <a href="edit_category/<?php echo $row->id;?>">Edit</a> ]</td>
       </tr>
															
														<?php 	}
															
													}else{ ?>													
													<tr>
              <td><input type="checkbox" value="<?php echo $row->id; ?>" name="selected[]"></td>
              <td><?php echo $row->category_name; ?></td>
              <td align="center"><?php echo $row->sort_order; ?></td>
              <td align="center"> [ <a href="edit_category/<?php echo $row->id;?>">Edit</a> ]</td>
       </tr>
													<?php }} ?>
													
                        
                                  </tbody>
        </table>
						</div>
					</div>
				</div>
			</div>
</div>
</div>
</div>