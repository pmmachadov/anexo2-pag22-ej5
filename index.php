<!-- Crea un triangulo creciente de asteriscos con PHP que aumente en numeros impares del 1 al 20 -->

<?php
$asterisco = "*";
$espacio = " ";

for ($i = 1; $i <= 20; $i += 2) { // i = 1, 3, 5, 7, 9, 11, 13, 15, 17, 19
    echo str_repeat($espacio, (20 - $i) / 2).str_repeat($asterisco, $i).str_repeat($espacio, (20 - $i) / 2)."<br>";
}

// Explicacion paso a paso del desarrollo:
// 1. $i = 1, 3, 5, 7, 9, 11, 13, 15, 17, 19
// 2. str_repeat($espacio, (20 - $i) / 2) = "          ", "        ", "      ", "    ", "  ", "", "  ", "    ", "      ", "        "
// 3. str_repeat($asterisco, $i) = "*", "***", "*****", "*******", "*********", "***********", "*************", "***************", "*****************", "*******************"
// 4. str_repeat($espacio, (20 - $i) / 2) = "          ", "        ", "      ", "    ", "  ", "", "  ", "    ", "      ", "        "
// 5. echo str_repeat($espacio, (20 - $i) / 2).str_repeat($asterisco, $i).str_repeat($espacio, (20 - $i) / 2)."<br>";
// 6. echo "          *          "
// 7. echo "        ***        "
// 8. echo "      *****      "
// 9. echo "    *******    "
// 10. echo "  *********  "
// 11. echo "***********"
// 12. echo "  *********  "
// 13. echo "    *******    "
// 14. echo "      *****      "
// 15. echo "        ***        "
// 16. echo "          *          "

