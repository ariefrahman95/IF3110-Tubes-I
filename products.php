<?php
	include("connect-mysql.php");
	include("header.php");
	
	if(isset($_REQUEST['command']) || isset($_REQUEST['productId'])) {
		if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
			$pid=$_REQUEST['productid'];
			addtocart($pid,1);
			header("location:shoppingcart.php");
			exit();
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products</title>
<script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
</head>


<body>
<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
<div align="center">
	<h1 align="center">Products</h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
			$result = mysql_query("SELECT * FROM product WHERE category = " .$_GET['category']) 
					or die("SELECT * FROM product "."<br/><br/>".mysql_error());
			while($row = mysql_fetch_array($result)) {
		?>
    	<tr>
        	<td>
				<img src="<?php echo $row['picture']?>" />
			</td>
            <td>   	
				<b> <?php echo $row['name']?> </b> <br />
				Price:<big style="color:green"> $<?php echo $row['price']?></big> <br /> <br />
				<form>
					<input type
					<input type="button" value="Add to Cart" onclick="addtocart(<?php echo $row['id'];?>)" />
				</form>
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
        <?php } ?>
    </table>
</div>
</body>
</html>
