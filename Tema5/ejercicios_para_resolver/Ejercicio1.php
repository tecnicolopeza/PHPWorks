<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>ABRE EL OJO</h1>
<table border="2">

<?php

if (isset($_REQUEST['f'])) {
	$f=$_REQUEST['f'];
    $c=$_REQUEST['c'];
    $matriz=explode(';',$_REQUEST['matriz']);
    for ($i=0; $i < 10; $i++) { 
    	$matriz[$i]=explode(' ',$matriz[$i]);
    }
    if ($matriz[$f][$c]==0) {
    	$matriz[$f][$c]=1;
    }else{
    	$matriz[$f][$c]=0;
    }
    

}else{
	for ($i=0; $i <10 ; $i++) { 
		for ($j=0; $j <10 ; $j++) { 
			$matriz[$i][$j]=0;
		}
	}
}
$cadena="";

foreach ($matriz as $fila) {
	$cadena=$cadena.implode(' ',(array)$fila).';'; 
}

for ($i=0; $i <10 ; $i++) { 
	echo "<tr>";
	for ($j=0; $j <10 ; $j++) { 
		$imagen=($matriz[$i][$j]==1)?"ojo_abierto.png":"ojo_cerrado.png";
		echo "<td><a href='Ejercicio1.php?f=$i&c=$j&matriz=$cadena'><img src='$imagen'></a></td>";
	}
}
echo "</tr>";
?>
</table>
</body>
</html>