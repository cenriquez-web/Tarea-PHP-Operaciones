<?php
$horas = [8, 8, 9, 8, 8, 4]; // Registro de 6 días [cite: 24]
$pagoHora = 10.0;
$totalHoras = 0;

for ($i = 0; $i < 6; $i++) { [cite: 6]
    $totalHoras += $horas[$i];
}

echo "Horas totales: $totalHoras. Sueldo: $" . ($totalHoras * $pagoHora); [cite: 24]
?>