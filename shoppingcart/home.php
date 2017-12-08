<?php
    $_SESSION=array();
    session_start();
    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    require_once 'connection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shopping Cart</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1 align="center">Products </h1>
        <div class="shopping-cart">
           
<?php
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
    ?>
	<div class="cart-view-table-front" id="view-cart">
	<h3>Your Shopping Cart</h3>
	<form method="post" action="cart_update.php">';
	<table width="100%"  cellpadding="6" cellspacing="0">
	<tbody>
<?php
	$total =0;
	$b = 0;
	foreach ($_SESSION["cart_products"] as $cart_itm)
	{
		$product_name = $cart_itm["product_name"];
		$product_qty = $cart_itm["product_qty"];
		$product_price = $cart_itm["product_price"];
		$product_code = $cart_itm["product_code"];
		$product_color = $cart_itm["product_color"];
		$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
?>
            
		<tr class="<?php echo $bg_color ?>">
		<td>Quantity <input type="text" size="2" maxlength="2" name="product_qty[<?php echo $product_code ?>]" value="<?php echo $product_qty ?>" /></td>
		<td><?php echo $product_name ?></td>
		<td><input type="checkbox" name="remove_code[]" value="<?php echo $product_code ?>"> Remove</td>
		</tr>
                <?php
		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
	}
        ?>
	<td colspan="4">
	<button type="submit">Update</button><a href="view_cart.php" class="button">Checkout</a>
	</td>
	</tbody>
	</table>
	<?php
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	?>
        <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />'
	</form>
	</div>
<?php
}
?>
        </div>
        <div class="products">
            <ul class="products">
            <?php
                $query="select * from mydb.products";
                $result=$conn->query($query);
                while($rows=$result->fetch_assoc()){
            ?>
        <li class="product">
	<form method="post" action="cart_update.php">
	<div class="product-content"><h3><?php echo $rows['P_Name']; ?></h3>
	<div class="product-thumb"><img src="<?php echo 'images/'.$rows['P_Image']; ?>"></div>
	<div class="product-desc"><?php echo $rows['P_Description']; ?></div>
	<div class="product-info">
	Price
        &#36;<?php echo $rows['Price'];?> 
	
	<fieldset>
	
	<label>
		<span>Color</span>
		<select name="product_color">
		<option value="Black">Black</option>
		<option value="Silver">Silver</option>
		</select>
	</label>
	
	<label>
		<span>Quantity</span>
		<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
	</label>
	
	</fieldset>
	<input type="hidden" name="product_code" value="<?php echo $rows['Product_Id']; ?>">
	<input type="hidden" name="type" value="add">
	<input type="hidden" name="return_url" value="<?php echo $current_url; ?>">
	<div align="center"><button type="submit" class="add_to_cart">Add</button></div>
	</div></div>
	</form>
	</li>
        <?php 
                }
        ?>
        </ul>
        </div>
        
    </body>
</html>
