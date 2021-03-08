<?php  
	$xcrud = Xcrud::get_instance();
    $xcrud->table('orders');
    $xcrud->default_tab('Order info');
    
    $orderdetails = $xcrud->nested_table('Order details','orderNumber','orderdetails','orderNumber'); // 2nd level
    $orderdetails->columns('productCode,quantityOrdered,priceEach');
    $orderdetails->fields('productCode,quantityOrdered,priceEach');
    $orderdetails->default_tab('Detail information');
    
    $customers = $xcrud->nested_table('Customers','customerNumber','customers','customerNumber'); // 2nd level 2
    $customers->columns('customerName,city,country');
    
    $products = $orderdetails->nested_table('Products','productCode','products','productCode'); // 3rd level
    $products->default_tab('Product details');
    
    $productLines = $products->nested_table('Product Lines','productLine','productlines','productLine'); // 4th level
    
    echo $xcrud->render();
?>