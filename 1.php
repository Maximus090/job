<?php
set_time_limit(0);
ini_set('max_execution_time', 9000);
function fibonacci(int $x)
{
    if ($x < 3) {
        return 1;
    }
    else {
        return fibonacci($x-1) + fibonacci($x-2);
    }
}
for ($x = 1; $x <= 64; $x++) {
    echo fibonacci($x) . ", ";
}
echo '</br>';
?>