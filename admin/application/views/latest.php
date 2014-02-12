<script type="text/javascript"> 
 
		jQuery(document).ready(function(){
			$('#zipsearch').autocomplete({source:'<?php base_url(); ?>welcome/latest_display', minLength:2});
		});
 
	</script>
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
			<div class="widget-block">
					<div class="widget-head"><h5>Latest Products</h5></div>
					</div>
			<div class="controls" style="font-weight:bold; text-align:center; color:#D41F00; margin-bottom:10px;">
			
									<form onSubmit="return false;"> 
	Enter Product name (Auto fill):
	<input id="zipsearch" type="text" /> 
</form> 
									</div>
				<div class="widget-block">
					
					<div class="widget-content">
						<div class="widget-box">
							<table class="list1">
          <thead>
		   
		 
			
            <tr height="50px">
              <td width="1"><input type="checkbox" onclick="$('input[name*=\'selected\']').attr('checked', this.checked);"></td>
              <td>Image</td>
              <td>                <a class="asc" href="#">Product Name</a>
                </td>
              <td>                <a href="#">Model</a>
                </td>
              <td>                <a href="#">Price</a>
                </td>
              <td>                <a href="#">Quantity</a>
                </td>
              <td>                <a href="#">Status</a>
                </td>
              <td>Action</td>
            </tr>
			
          </thead>
          <tbody>
            <!--<tr class="filter">
              <td></td>
              <td></td>
              <td><input type="text" value="" name="filter_name" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></td>
              <td><input type="text" value="" name="filter_model" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></td>
              <td align="left"><input type="text" size="8" value="" name="filter_price"></td>
              <td align="right"><input type="text" style="text-align: right;" value="" name="filter_quantity"></td>
              <td><select name="filter_status">
                  <option value="*"></option>
                                    <option value="1">Enabled</option>
                                                      <option value="0">Disabled</option>
                                  </select></td>
              <td align="right"><a class="button" onclick="filter();">Filter</a></td>
            </tr>-->
			 <?php 
				$data = mysql_query("select * from products");
				$no = mysql_num_rows($data);
				if($no >0){
				while($row = mysql_fetch_object($data)){  ?>
													
                                    <tr>
              <td>                <input type="checkbox" value="<?php echo $row->id; ?>" name="selected[]">
                </td>
              <td><img style="padding: 1px; border: 1px solid #DDDDDD;" alt="Apple Cinema 30&quot;" src="<?php echo base_url()."images/".$row->image; ?>" width="40px" height="40px"></td>
              <td><?php echo $row->product_name; ?></td>
              <td><?php echo $row->model;?></td>
			  <?php if($row->special_price > 0){ ?>
              <td> <span style="text-decoration: line-through;"><?php echo $row->price;?></span><br>
                <span style="color: #b00;"><?php echo $row->special_price;?></span>
                </td>
				<?php }else{?>
				<td> <span><?php echo $row->price;?></span></td>
				<?php } ?>
				
              <td>                <span style="color: #008000;"><?php echo $row->quantity;?></span>
                </td>
              <td><?php if($row->status ==1){ echo "Enabled"; } else { echo "Disabled"; }?></td>
              <td>                [ <a href="<?php echo $row->id; ?>">Edit</a> ]
                </td>
            </tr>
			<?php }}else{ ?>
			<trwidth="100%">
			<td >
			<span style="color:#D40000; text-align:center">No Products Found.</span>
			</td>
			</tr>
			<?php } ?>
                        
         </tbody>
        </table>
						</div>
					</div>
				</div>
			</div>
</div>
</div>
</div>