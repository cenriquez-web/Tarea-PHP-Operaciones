<?php
$clave = 2; // Claves 1 a 6 [cite: 14]
$materiaPrima = 100.00; // Costo base [cite: 22]

// Mano de obra [cite: 18, 19]
if ($clave == 3 || $clave == 4) $manoObra = $materiaPrima * 0.75;
else if ($clave == 1 || $clave == 5) $manoObra = $materiaPrima * 0.80;
else $manoObra = $materiaPrima * 0.85;

// Gastos de fabricación [cite: 20, 21]
if ($clave == 2 || $clave == 5) $gastosFab = $materiaPrima * 0.30;
else if ($clave == 3 || $clave == 6) $gastosFab = $materiaPrima * 0.35;
else $gastosFab = $materiaPrima * 0.28;

$costoProduccion = $materiaPrima + $manoObra + $gastosFab; [cite: 16]
$precioVenta = $costoProduccion * 1.45; // Costo + 45% [cite: 17]

echo "Precio de venta clave $clave: $" . $precioVenta;
?>