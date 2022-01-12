<?php

print_r(join(", ", [10, 11, 12, 13, 14, 15])); // gabung array pakai pemisah koma
print_r(explode(" ", "Engka umar" . PHP_EOL)); // pisah string pakai pemisah spasi
print_r(strtolower("Engka umar" . PHP_EOL)); // string jadi huruf kecil
print_r(strtoupper("Engka Umar" . PHP_EOL)); // string jadi huruf BESAR
print_r(trim("  Mr. Engka Umar, S.Kom   " ."\n")); // memisahkan karakter tab / spasi
echo "\n";
print_r(substr("Engka Umar", 0, 5)); // mengambil karakter pertama