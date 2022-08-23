<?php
$tipoprenda = filter_input(INPUT_POST, 'prenda', FILTER_SANITIZE_STRING);
$tipoprenda = filter_input(INPUT_POST, 'talles', FILTER_SANITIZE_STRING);



$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");