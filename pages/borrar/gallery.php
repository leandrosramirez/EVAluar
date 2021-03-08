<?php
    $xcrud = Xcrud::get_instance();
    $xcrud->table('gallery');
    $xcrud->change_type('image', 'image', false, array(
        'width' => 450,
        'path' => '../uploads/gallery',
        'thumbs' => array(array(
                'height' => 55,
                'width' => 120,
                'crop' => true,
                'marker' => '_th'))));
    echo $xcrud->render();
?>