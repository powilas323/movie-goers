<?php

use App\Kernel;
use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;

require dirname(__DIR__).'/config/bootstrap.php';
?>


<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <nav class="navbar navbar-light bg-light">
        <div class="navbar-brand"><a href="../templates/filmuSarasas.php">Filmu Sarasas</a></div>
        <div class="navbar-brand"><a href="../templates/apzvalguSarasas.php">Apzvalgos</a></div>
        <div class="navbar-brand"><a href="../templates/naujienos.php">Naujienos</a></div>
        <div class="navbar-brand"><a href="../templates/login.php">Log in</a></div>
        <div class="navbar-brand"><a href="">Log out</a></div>

    </nav>
    <nav class="navbar navbar-light bg-light">
        <div class="navbar-brand"><a href="../templates/filmuKurimas.php">Filmu Kurimas</a></div>
        <div class="navbar-brand"><a href="../templates/filmuKurimas.php">Filmu Kurimas</a></div>
        <div class="navbar-brand"><a href="../templates/raportai.php">Filmu Kurimas</a></div>

    </nav>

</html>