<?php  
	$xcrud = Xcrud::get_instance();
    $xcrud->table('orders');
    
    $orderdetails = $xcrud->nested_table('products','orderNumber','orderdetails','orderNumber'); // 2nd level
    $orderdetails->columns('productCode,quantityOrdered,priceEach');
    $orderdetails->fields('productCode,quantityOrdered,priceEach');
    
    $customers = $xcrud->nested_table('customers','customerNumber','customers','customerNumber'); // 2nd level 2
    $customers->columns('customerName,city,country');
    
    $products = $orderdetails->nested_table('orderdetails','productCode','products','productCode'); // 3rd level
    
    $productLines = $products->nested_table('productLines','productLine','productlines','productLine'); // 4th level
    
    echo $xcrud->render();
?>