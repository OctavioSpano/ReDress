<?php
$tipoprenda = filter_input(INPUT_POST, 'prenda', FILTER_SANITIZE_STRING);
$talles = filter_input(INPUT_POST, 'talles', FILTER_SANITIZE_STRING);
$desc = $_POST ['desc'];




$con = mysqli_connect("localhost", "root", "rootroot", "redressbd");