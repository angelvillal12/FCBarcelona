<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$alumnos = [
    ["nombre" => "Jorge", "calificacion" => 8.5],
    ["nombre" => "Ana", "calificacion" => 9.0],
    ["nombre" => "Sofia", "calificacion" => 7.5],
    ["nombre" => "Fernando", "calificacion" => 9.2],
    ["nombre" => "Roberto", "calificacion" => 8.0]
];


echo "Calificaciones: ";


foreach ($alumnos as $alumno) {
    echo "La calificación de {$alumno['nombre']} es {$alumno['calificacion']} ";
    echo "<br>";
}

usort($alumnos, function($a, $b) {
    return $a['calificacion'] <=> $b['calificacion'];
});


echo "Calificaciones ordenadas: ";


foreach ($alumnos as $alumno) {
    echo "La calificación de {$alumno['nombre']} es {$alumno['calificacion']} ";
    echo "<br>";
} 
 ?>
</body>
</html>