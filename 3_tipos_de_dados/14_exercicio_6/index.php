<?php 
 
  $car = [
    'marca' => 'bmw',
    'rodas' => '4',
    'teto solar' => true,
    'velocidade_max' => 300,
    'blidado' => false

];

print_r($car);
echo "<br>";

$marca = $car ['marca'];
$velocidade_maxima = $car['velocidade_max'];

echo "O carro é da marca $marca e atinge no maximo $velocidade_maxima km/h";



?>