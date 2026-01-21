<?php
$edades = [18, 20, 22, 19, 21]; // Lista de edades de N alumnos [cite: 23]
$suma = 0;
$n = count($edades);

for ($i = 0; $i < $n; $i++) { [cite: 6]
    $suma += $edades[$i];
}

echo "Edad promedio: " . ($suma / $n);
?>