<?php
// Ejercicio 1: Asociación de vinicultores [cite: 7]
$tipo = "A"; // Entrada: A o B [cite: 7]
$tamano = 1; // Entrada: 1 o 2 [cite: 7]
$precioInicial = 5.0; // Precio base definido por el usuario
$kilos = 100;

if ($tipo == "A") { [cite: 8]
    if ($tamano == 1) {
        $precioInicial += 0.20; // +20¢ si es tamaño 1 [cite: 8]
    } else {
        $precioInicial += 0.30; // +30¢ si es tamaño 2 [cite: 9]
    }
} else if ($tipo == "B") { [cite: 9]
    if ($tamano == 1) {
        $precioInicial -= 0.30; // -30¢ si es tamaño 1 [cite: 9]
    } else {
        $precioInicial -= 0.50; // -50¢ si es tamaño 2 [cite: 9]
    }
}

$total = $precioInicial * $kilos;
echo "El productor recibirá: $" . $total;
?>