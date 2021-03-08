<?php
error_reporting(E_ALL);
error_reporting(E_ALL ^ E_DEPRECATED);
$xcrud = Xcrud::get_instance();
$xcrud->table('uploads');

// simple file upload
$xcrud->change_type('simple_upload', 'file', '', array('not_rename'=>true));

// simple image upload
$xcrud->change_type('simple_image', 'image');

// image upload with resizing
$xcrud->change_type('auto_resize', 'image', '', array('width' => 200, 'height' => 200));

// image upload with resizing
$xcrud->change_type('auto_crop', 'image', '', array(
    'width' => 200,
    'height' => 200,
    'crop' => true));

// image upload with manual crop
$xcrud->change_type('manual_crop', 'image', '', array('manual_crop' => true));

// image upload with manual crop and resizing
$xcrud->change_type('manual_crop_2', 'image', '', array(
    'width' => 200,
    'height' => 200,
    'manual_crop' => true));

// image upload with manual crop and fixed ratio
$xcrud->change_type('manual_crop_3', 'image', '', array('ratio' => 0.5, 'manual_crop' => true));

// image upload with watermark
$xcrud->change_type('watermark', 'image', '', array('width' => 400, 'watermark' => '../demos/assets/xCRUD.png'));

// image upload with watermark position (%-left, %-top)
$xcrud->change_type('watermark_position', 'image', '', array('watermark' => '../demos/assets/xCRUD.png',
        'watermark_position' => array(10, 95)));

// image upload with thumbs
$xcrud->change_type('image_with_thumbs', 'image', '', array('thumbs' => 
    array(
        array(
            'width' => '300',
            'marker' => '_th',
            'watermark' => '../demos/assets/xCRUD.png'), 
        array(
            'width' => 100,
            'height' => 100,
            'crop' => true,
            'folder' => 'thumbs')
        )));

//echo $xcrud->render('edit', 14);
echo $xcrud->render();
?>