<?php

// goto a;
// goto a;
// echo "hallo anjas" .PHP_EOL;

// a:
// echo "Hello Engka" .PHP_EOL;


$counter = 1;

while (true) {
    echo "perulangan ke $counter" .PHP_EOL;
    $counter++;

    if ($counter >10) {
        goto end;
    }
}

end:
echo "Perulangan berakhir" .PHP_EOL;