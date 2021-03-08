<?php  
/*
 * Product Master CRUD
 */
$app->get('/productMaster/items', function() { 
    global $db;
    $rows = $db->select("mpart_001","item,dsca,unid,stoc,colr",array());
    echoResponse(200, $rows);
});
$app->post('/productMaster/items', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('unid');
    global $db;
    $rows = $db->insert("mpart_001", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Product added successfully.";
    echoResponse(200, $rows);
});
$app->put('/productMaster/items/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('unid'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mpart_001", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Product updated successfully.";
    echoResponse(200, $rows);
});
$app->delete('/productMaster/items/:id', function($id) { 
    global $db;
    $rows = $db->delete("mpart_001", array('unid'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Product removed successfully.";
    echoResponse(200, $rows);
});
///productMaster/items


$app->get('/productMaster/itemTypes', function() { 
    global $db;
    $rows = $db->select("mbbam_123","igid, dsca, txta, mndn",array());
    echoResponse(200, $rows);
});
$app->post('/productMaster/itemTypes', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('igid');
    global $db;
    $rows = $db->insert("mbbam_123", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Item Type added successfully.";
    echoResponse(200, $rows);
});
$app->put('/productMaster/itemTypes/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('igid'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_123", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Item Type updated successfully.";
    echoResponse(200, $rows);
});
$app->delete('/productMaster/itemTypes/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_123", array('igid'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Item Type removed successfully.";
    echoResponse(200, $rows);
});
///productMaster/itemTypes


$app->get('/productMaster/itemGroups', function() { 
    global $db;
    $rows = $db->select("mbbam_023", "igid, gtyp,dsca,bgcl,txta,ztnr,mndn,pigid",array());
    echoResponse(200, $rows);
});
$app->post('/productMaster/itemGroups', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('igid');
    global $db;
    $rows = $db->insert("mbbam_023", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Item Group added successfully.";
    echoResponse(200, $rows);
});
$app->put('/productMaster/itemGroups/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('igid'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_023", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Item Group updated successfully.";
    echoResponse(200, $rows);
});
$app->delete('/productMaster/itemGroups/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_023", array('igid'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Item Group removed successfully.";
    echoResponse(200, $rows);
});
///productMaster/itemGroups


$app->get('/productMaster/productTypes', function() { 
    global $db;
    $rows = $db->select("mbbam_015", "ctyp, dsca, coid, csgp, mndn",array());
    echoResponse(200, $rows);
});
$app->post('/productMaster/productTypes', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('ctyp');
    global $db;
    $rows = $db->insert("mbbam_015", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Product Type added successfully.";
    echoResponse(200, $rows);
});
$app->put('/productMaster/productTypes/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('ctyp'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_015", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Product Type updated successfully.";
    echoResponse(200, $rows);
});
$app->delete('/productMaster/productTypes/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_015", array('ctyp'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Product Type removed successfully.";
    echoResponse(200, $rows);
});
///productMaster/productTypes


$app->get('/productMaster/statisticsGroup', function() { 
    global $db;
    $rows = $db->select("mbbam_044", "csgp, dsca, mndn",array());
    echoResponse(200, $rows);
});
$app->post('/productMaster/statisticsGroup', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('csgp');
    global $db;
    $rows = $db->insert("mbbam_044", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Statistic Group added successfully.";
    echoResponse(200, $rows);
});
$app->put('/productMaster/statisticsGroup/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('csgp'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_044", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Statistic Group updated successfully.";
    echoResponse(200, $rows);
});
$app->delete('/productMaster/statisticsGroup/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_044", array('csgp'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Statistic Group removed successfully.";
    echoResponse(200, $rows);
});
///productMaster/statisticsGroup


/*$app->get('/productMaster/shopGroups', function() { 
    global $db;
    $rows = $db->select("mbbam_027", "pgid, dsca, txta, tccu, mndn",array());
    echoResponse(200, $rows);
});
$app->post('/productMaster/shopGroups', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('csgp');
    global $db;
    $rows = $db->insert("mbbam_027", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Shop Group added successfully.";
    echoResponse(200, $rows);
});
$app->put('/productMaster/shopGroups/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('csgp'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_027", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Shop Group updated successfully.";
    echoResponse(200, $rows);
});
$app->delete('/productMaster/shopGroups/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_027", array('csgp'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Shop Group removed successfully.";
    echoResponse(200, $rows);
});
///productMaster/shopGroups*/


$app->get('/productMaster/priceGroups', function() { 
    global $db;
    $rows = $db->select("mbbam_027", "pgid, dsca, txta, tccu, mndn",array());
    echoResponse(200, $rows);
});
$app->post('/productMaster/priceGroups', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('csgp');
    global $db;
    $rows = $db->insert("mbbam_027", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Price Group added successfully.";
    echoResponse(200, $rows);
});
$app->put('/productMaster/priceGroups/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('csgp'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_027", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Price Group updated successfully.";
    echoResponse(200, $rows);
});
$app->delete('/productMaster/priceGroups/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbam_027", array('csgp'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Price Group removed successfully.";
    echoResponse(200, $rows);
});
///productMaster/priceGroups


$app->get('/productMaster/itemSignals', function() { 
    global $db;
    $rows = $db->select("mbbam_018", "csig, dsca, blcp, blcs, blpo, blpi, blps, mndn",array());
    echoResponse(200, $rows);
});
$app->post('/productMaster/itemSignals', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('csig');
    global $db;
    $rows = $db->insert("mbbam_018", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Item Signal added successfully.";
    echoResponse(200, $rows);
});
$app->put('/productMaster/itemSignals/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $rows = $db->select("mbbam_018", "csig, dsca, blcp, blcs, blpo, blpi, blps, mndn",array());
    $condition = array('csig'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbam_018", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Item Signal updated successfully.";
    echoResponse(200, $rows);
});
$app->delete('/productMaster/itemSignals/:id', function($id) { 
    global $db;
    $rows = $db->select("mbbam_018", "csig, dsca, blcp, blcs, blpo, blpi, blps, mndn",array());
    $rows = $db->delete("mbbam_018", array('csig'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Item Signal removed successfully.";
    echoResponse(200, $rows);
});
///productMaster/itemSignals


$app->get('/productMaster/manufacturers', function() { 
    global $db;
    $rows = $db->select("mbbas_920", "ufra, ctit, nama, namb, namc, namd, name, namf, plzc, rgid, ainv, refa, refs, ccus, telp, telx, tefx, seak, brid, baid, ccon, paid, deid, cnid, laid, crid, ocus, buin, fovn, odis, txyn, plid, mndn",array());
    echoResponse(200, $rows);
});
$app->post('/productMaster/manufacturers', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('csgp');
    global $db;
    $rows = $db->insert("mbbas_920", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Manufacturer added successfully.";
    echoResponse(200, $rows);
});
$app->put('/productMaster/manufacturers/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('csgp'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mbbas_920", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Manufacturer updated successfully.";
    echoResponse(200, $rows);
});
$app->delete('/productMaster/manufacturers/:id', function($id) { 
    global $db;
    $rows = $db->delete("mbbas_920", array('csgp'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Manufacturer removed successfully.";
    echoResponse(200, $rows);
});
///productMaster/manufacturers


$app->get('/productMaster/alternativeItems', function() { 
    global $db;
    $rows = $db->select("mpart_800", "item, aitm, aust, text, prio, mndn",array());
    echoResponse(200, $rows);
});
$app->post('/productMaster/alternativeItems', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('item');
    global $db;
    $rows = $db->insert("mpart_800", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Alternative Item added successfully.";
    echoResponse(200, $rows);
});
$app->put('/productMaster/alternativeItems/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('item'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("mpart_800", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "Alternative Item updated successfully.";
    echoResponse(200, $rows);
});
$app->delete('/productMaster/alternativeItems/:id', function($id) { 
    global $db;
    $rows = $db->delete("mpart_800", array('item'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "Alternative Item removed successfully.";
    echoResponse(200, $rows);
});
///productMaster/alternativeItems


$app->get('/productMaster/users', function() { 
    global $db;
    $rows = $db->select("members", "memberID, username, password, email, active, resetToken, resetComplete",array());
    echoResponse(200, $rows);
});
$app->post('/productMaster/users', function() use ($app) { 
    $data = json_decode($app->request->getBody());
    $mandatory = array('memberID');
    global $db;
    $rows = $db->insert("members", $data, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "User added successfully.";
    echoResponse(200, $rows);
});
$app->put('/productMaster/users/:id', function($id) use ($app) { 
    $data = json_decode($app->request->getBody());
    $condition = array('memberID'=>$id);
    $mandatory = array();
    global $db;
    $rows = $db->update("members", $data, $condition, $mandatory);
    if($rows["status"]=="success")
        $rows["message"] = "User updated successfully.";
    echoResponse(200, $rows);
});
$app->delete('/productMaster/users/:id', function($id) { 
    global $db;
    $rows = $db->delete("members", array('memberID'=>$id));
    if($rows["status"]=="success")
        $rows["message"] = "User removed successfully.";
    echoResponse(200, $rows);
});
///productMaster/users

?>