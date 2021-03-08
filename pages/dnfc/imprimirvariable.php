<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Imprimir variable</title>

</head>
<body>

<?php 
$miVariable = "Hola soy una cadeha";
?>	

<input type="text" name="nombre" value="<?php echo $miVariable ?>" />

<p>
<?php 
echo $miVariable 
?>	
</p>

</body>
</html>