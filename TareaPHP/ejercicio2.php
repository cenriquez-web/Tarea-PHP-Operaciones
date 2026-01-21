<?php
$n_personas = 250; 
$costo_platillo = 0;

if ($n_personas > 300) { [cite: 12]
    $costo_platillo = 75.00;
} else if ($n_personas > 200) { [cite: 11]
    $costo_platillo = 85.00;
} else { [cite: 11]
    $costo_platillo = 95.00;
}

echo "Presupuesto total: $" . ($n_personas * $costo_platillo); [cite: 13]
?>