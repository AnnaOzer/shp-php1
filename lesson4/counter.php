<?php

$c = (int)$_GET['c'];

?>
Нажато <?php echo $c++; ?> раз.

<a href="counter.php?c=<?php echo $c; ?>">Нажать еще</a>