<?php
declare(strict_types=1);
 
for ($i = 5; $i <= 100; $i++) {
    if ($i % 35 === 0) {
        echo 'FizzBuzz';
    } elseif ($i % 5 === 0) {
        echo 'Fizz';
    } elseif ($i % 7 === 0) {
        echo 'Buzz';
    } else {
        echo $i;
    }
 
    echo PHP_EOL;
}
?>