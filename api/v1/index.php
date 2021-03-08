<?php
require '.././libs/Slim/Slim.php';
require_once 'dbHelper.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app = \Slim\Slim::getInstance();
$db = new dbHelper();

require_once 'productMasterAPI.php';

/**
 * Database Helper Function templates
 */
/*
select(table name, where clause as associative array)
insert(table name, data as associative array, mandatory column names as array)
update(table name, column names as associative array, where clause as associative array, required columns as array)
delete(table name, where clause as array)
*/

// GET
// Products
$app->get('/menu', function() { 
    global $db;
    $rows = $db->select("sys_menu","menu_name,parent_id,icon,url,description,window_type",array());
    echoResponse(200, $rows);
});
//Currency GET
$app->get('/currency', function() { 
    global $db;
    $rows = $db->select("mbbam_002","crid,dsca,dscb,crnd,exrt,mndn",array());
    echoResponse(200, $rows);
});

//Units GET
$app->get('/units', function() { 
    global $db;
    $rows = $db->select("mbbam_001","unid,dsca,dscs,tccu,conv,basu,crnd",array());
    echoResponse(200, $rows);
});

//Language GET
$app->get('/language', function() { 
    global $db;
    $rows = $db->select("mwtol_110","laid,dsca,dtf1,dtf2,dtf3",array());
    echoResponse(200, $rows);
});

//Country GET
$app->get('/country', function() { 
    global $db;
    $rows = $db->select("mbbam_010","cnid,dsca,ictc,tfcd,meec,geoc,fovn,mndn,delc,invc",array());
    echoResponse(200, $rows);
});

//Bank GET
$app->get('/bank', function() { 
    global $db;
    $rows = $db->select("mbbam_026","cfcc,descr,baid,cbad",array());
    echoResponse(200, $rows);
});

//Area GET
$app->get('/area', function() { 
    global $db;
    $rows = $db->select("mbbam_045","rgid,dsca",array());
    echoResponse(200, $rows);
});

//Business Line GET
$app->get('/business_line', function() { 
    global $db;
    $rows = $db->select("mbbam_031","brid,dsca",array());
    echoResponse(200, $rows);
});

//Price List GET
$app->get('/pricelist', function() { 
    global $db;
    $rows = $db->select("mbbam_034","plid,dsca,crid",array());
    echoResponse(200, $rows);
});

//PaymentTerms/Item GET
$app->get('/paymentterms', function() { 
    global $db;
    $rows = $db->select("mbbam_013","paid,dsca,pper,zart",array());
    echoResponse(200, $rows);
});

//DeliveryTerms/Item GET
$app->get('/deliveryterms', function() { 
    global $db;
    $rows = $db->select("mbbam_041","deid,dsca,cdyn,crpd,txta",array());
    echoResponse(200, $rows);
});

//First Free No/Item GET
$app->get('/firstfreeno', function() { 
    global $db;
    $rows = $db->select("mbbam_047","ckon,grno,dsca,ffno,blck,leng",array());
    echoResponse(200, $rows);
});

//Basic Def GET
$app->get('/basicdef', function() { 
    global $db;
    $rows = $db->select("mbbam_900","code,dsca",array());
    echoResponse(200, $rows);
});

//Default Settings
$app->get('/default', function() { 
    global $db;
    $rows = $db->select("mbbam_990","name",array());
    echoResponse(200, $rows);
});

//Default Settings
$app->get('/employee', function() { 
    global $db;
    $rows = $db->select("mbbas_001","emno,titl,posi,namd,telp,nama,plzc,mail",array());
    echoResponse(200, $rows);
});

$app->get('/costcenter', function() { 
    global $db;
    $rows = $db->select("mppla_001","dpid,dsca,dptp",array());
    echoResponse(200, $rows);
});

$app->get('/warehouse', function() { 
    global $db;
    $rows = $db->select("mbbam_003","whid,dsca,typw,nwrh",array());
    echoResponse(200, $rows);
});



//Units
$app->post('/units', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('unid');
    global $db;
    $rows = $db->insert("mbbam_001", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Units added successfully.";
    echoResponse(200, $rows);
});

$app->put('/units/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('unid'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_001", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Units information updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/units/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_001", array('unid'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Units removed successfully.";
    echoResponse(200, $rows);
});


//Products
$app->post('/products', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('name');
    global $db;
    $rows = $db->insert("products", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Product added successfully.";
    echoResponse(200, $rows);
});

$app->put('/products/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('name'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("products", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Product information updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/products/:id', function($id) { 
    global $db;
    $rows = $db->delete("products", array('name'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Product removed successfully.";
    echoResponse(200, $rows);
});


//Currency
$app->post('/currency', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('crid');
    global $db;
    $rows = $db->insert("mbbam_002", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Currency added successfully.";
    echoResponse(200, $rows);
});

$app->put('/currency/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('crid'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_002", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Currency information updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/currency/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_002", array('crid'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Currency removed successfully.";
    echoResponse(200, $rows);
});



//Language
$app->post('/language', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('laid');
    global $db;
    $rows = $db->insert("mwtol_110", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Language added successfully.";
    echoResponse(200, $rows);
});

$app->put('/language/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('laid'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mwtol_110", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Language information updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/language/:id', function($id) { 
    global $db;
    $rows = $db->delete("mwtol_110", array('laid'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Language removed successfully.";
    echoResponse(200, $rows);
});


//Country
$app->post('/country', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('cnid');
    global $db;
    $rows = $db->insert("mbbam_010", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Country added successfully.";
    echoResponse(200, $rows);
});

$app->put('/country/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('cnid'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_010", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Country information updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/country/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_010", array('cnid'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Country removed successfully.";
    echoResponse(200, $rows);
});


//Bank
$app->post('/bank', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('cfcc');
    global $db;
    $rows = $db->insert("mbbam_026", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Bank added successfully.";
    echoResponse(200, $rows);
});

$app->put('/bank/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('cfcc'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_026", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Bank information updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/bank/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_026", array('cfcc'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Business Line removed successfully.";
    echoResponse(200, $rows);
});


//Business line
$app->post('/business_line', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('brid');
    global $db;
    $rows = $db->insert("mbbam_031", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Business Line added successfully.";
    echoResponse(200, $rows);
});

$app->put('/business_line/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('brid'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_031", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Business Line information updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/business_line/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_031", array('brid'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Business Line removed successfully.";
    echoResponse(200, $rows);
});

//Price List
$app->post('/pricelist', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('plid');
    global $db;
    $rows = $db->insert("mbbam_034", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Price list added successfully.";
    echoResponse(200, $rows);
});

$app->put('/pricelist/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('plid'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_034", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Price list information updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/pricelist/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_034", array('plid'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Price list removed successfully.";
    echoResponse(200, $rows);
});

//Term of Payments
$app->post('/paymentterms', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('paid');
    global $db;
    $rows = $db->insert("mbbam_013", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Payment terms added successfully.";
    echoResponse(200, $rows);
});

$app->put('/paymentterms/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('paid'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_013", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Payment terms updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/paymentterms/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_013", array('paid'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Payment terms removed successfully.";
    echoResponse(200, $rows);
});

//Delivery Terms
$app->post('/deliveryterms', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('deid');
    global $db;
    $rows = $db->insert("mbbam_041", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Delivery terms added successfully.";
    echoResponse(200, $rows);
});

$app->put('/deliveryterms/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('deid'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_041", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Delivery terms updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/deliveryterms/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_041", array('deid'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Delivery terms removed successfully.";
    echoResponse(200, $rows);
});

//First free no
$app->post('/firstfreeno', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('ckon');
    global $db;
    $rows = $db->insert("mbbam_047", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "First Free No added successfully.";
    echoResponse(200, $rows);
});

$app->put('/firstfreeno/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('ckon'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_047", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "First Free No updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/firstfreeno/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_047", array('ckon'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "First Free No removed successfully.";
    echoResponse(200, $rows);
});

//Basic def
$app->post('/basicdef', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('code');
    global $db;
    $rows = $db->insert("mbbam_900", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Basic definition added successfully.";
    echoResponse(200, $rows);
});

$app->put('/basicdef/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('code'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_900", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Basic definition updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/basicdef/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_900", array('code'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Basic definition removed successfully.";
    echoResponse(200, $rows);
});

//Basic def
$app->post('/default', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('name');
    global $db;
    $rows = $db->insert("mbbam_990", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Default Settings added successfully.";
    echoResponse(200, $rows);
});

$app->put('/basicdef/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('name'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_900", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Default Settings updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/basicdef/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_900", array('name'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Default Settings removed successfully.";
    echoResponse(200, $rows);
});


//Employee
$app->post('/employee', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('emno');
    global $db;
    $rows = $db->insert("mbbas_001", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Employee added successfully.";
    echoResponse(200, $rows);
});

$app->put('/employee/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('emno'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbas_001", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Employee updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/employee/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbas_001", array('name'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Employee removed successfully.";
    echoResponse(200, $rows);
});

//CostCenter
$app->post('/costcenter', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('dpid');
    global $db;
    $rows = $db->insert("mppla_001", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Cost Center added successfully.";
    echoResponse(200, $rows);
});

$app->put('/costcenter/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('dpid'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mppla_001", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Cost Center updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/costcenter/:id', function($id) { 
    global $db;
    $rows = $db->delete("mppla_001", array('dpid'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Cost Center removed successfully.";
    echoResponse(200, $rows);
});

//Warehouse
$app->post('/warehouse', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('whid');
    global $db;
    $rows = $db->insert("mbbam_003", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Warehouse added successfully.";
    echoResponse(200, $rows);
});

$app->put('/warehouse/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('whid'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_003", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Warehouse updated successfully.";
    echoResponse(200, $rows);
});

$app->delete('/warehouse/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_003", array('whid'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Waarehouse removed successfully.";
    echoResponse(200, $rows);
});

function echoResponse($status_code, $response) {
    global $app;
    $app->status($status_code);
    $app->contentType('application/json');
    echo json_encode($response,JSON_NUMERIC_CHECK);
}

$app->run();
?>