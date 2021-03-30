
<?php 
//$miVariable = "Hola soy una cadeha";
?>	

<!--<input type="text" name="nombre" value="<?php// echo $miVariable ?>" /> -->

<p>
<?php 
//echo $miVariable 
?>	
</p>

<br>
<p>

<?php
$instancia = new Xcrud_config();

// Esto también se puede hacer con una variable:
//$nombreClase = 'Xcrud_config';

//$mi_clase = new miclase();

$vars_clase = get_class_vars(get_class($instancia));

foreach ($vars_clase as $nombre => $valor) {
    echo "$nombre = $valor\n <br>";
}


?>
</p>


