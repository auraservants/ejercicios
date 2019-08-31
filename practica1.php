<!-- ARRAYS 1) -->
<?php
$persona = [
"nombre" => "Jon",
"apellido" => "Snow",
"edad" => 27,
"hobbies" => [
"netflix",
"futbol",
"programar"
]
];

$persona["edad"] = 25;
$persona["hobbies"][] = "dibujar";

var_dump($persona);
 ?>


<!-- CONDICIONALES -->

<!-- 1) -->
<?php
$mayor =0;
$numero1= 96;
$numero2= 98;

if ($numero1 > $numero2){
	$mayor= $numero1;
	echo "El numero mayor es ".$mayor;
}
else{
$mayor = $numero2;
echo "El numero mayor es ".$mayor;
}
?>


<!-- 2 y 3) -->
<?php
$numero = 3;
if ($numero == rand(1,5)) {
echo $numero;

}else{
	echo 'El numero NO es 3';
}
?>


<!-- 4) -->
<?php
$numero = 50;
if ($numero > rand(1,100)) {
echo 'El número es mayor a 50';
}

else{
	echo 'El número es menor a 50';
}
?>


<!-- 5) -->
<?php
$nombreDeUsuario = "admin";
$ContraseniaDeUsuario = 1234;

if ($nombreDeUsuario == "admin" && $ContraseniaDeUsuario == 1234){
	echo 'Bienvenido!';
}
else{
 echo 'hay un error en el login';
}
?>


<!-- 6) -->
<?php
$edad= 24;
$casado= false;
$sexo= "Femenino";

if($edad >= 18 && $casado == false || ($sexo== "otro")) {
	echo 'Bienvenido!';
}
else{
	echo 'error';
}
?>


<!-- 7) -->
imprime "false" si no hay ninguna comparacion agregada
luego -100 imprime true
-1 true
0 false
1 true
100 true


<!-- 8) -->
<?php
$numero=256;

if($numero%2 == 0){
 echo 'El número es par';
}
else{
 echo 'El número es impar';
}
?>


<!--9 y 10)  -->
<?php
$nota = rand(0,10);
switch($nota)
{

	case 0:
	case 1:
	case 2:
	case 3: echo "desaprobado";
	break;
	case 4:
	case 5: echo "zafamos";
	break;
	case 6:
	case 7:
	case 8: echo "Muy bien!!!";
	break;
	case 9: echo "MUY bien!!";
	break;
	case 10: echo "Excelente!!!!";
	break;
	default: echo "El numero es invalido";
}
?>
