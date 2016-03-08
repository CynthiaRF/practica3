<html>

<body>
<?php
$personas = array(
"0" => array(
"domicilio" => "calle manzano",
"estado" => "jalisco",
"nombre" => "Luis"
),
"1" => array(
"domicilio" => "javier mina ",
"estado" => "San Luis Potosi",
"nombre" => "Manuel"
),
"2" => array(
"domicilio" => "Antonio Caso ",
"estado" => "Sinaloa",
"nombre" => "Guadalupe"
),
"3" => array(
"domicilio" => "Elias Calles",
"estado" => "Ciudad Juarez",
"nombre" => "Anastacia"
),
"4" => array(
"domicilio" => "Lopez Cotilla",
"estado" => "Queretaro",
"nombre" => "Roberto"
),
"5" => array(
"domicilio" => "Juan Escutia",
"estado" => "Zacatecas",
"nombre" => "Amayrani"
)
);
?>

<ul>
<?php
  foreach ($personas as $personas){
?>
<li>
<?php
echo $personas["domicilio"].",";
 echo $personas["estado"].", ";
  echo $personas["nombre"].", ";
  }
?>
</li>
</ul>
</body>
</html>
 
         