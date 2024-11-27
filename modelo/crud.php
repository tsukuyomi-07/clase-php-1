<?php

include "../conexion.php";

$conexion->query("INSERT INTO users VALUES(
    null,
    '$_POST[names]',
    $_POST[document],
    1
)");
