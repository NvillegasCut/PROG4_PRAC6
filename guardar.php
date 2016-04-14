<html>
<head>
<title>Practica 6</title>
</head>
<body>

<?php
$ar=fopen("Practica.txt","a") or
  die("Problemas en la creacion");
fputs($ar,$_REQUEST['nombre']);
fputs($ar,"\n");
fputs($ar,$_REQUEST['ap']);
fputs($ar,"\n");
fputs($ar,$_REQUEST['am']);
fputs($ar,"\n");
fputs($ar,$_REQUEST['edad']);
fputs($ar,"\n");
fputs($ar,"--------------------------------------------------------");
fputs($ar,"\n");
fclose($ar);
echo "Los datos se cargaron correctamente.";
?>

</body>
</html>
