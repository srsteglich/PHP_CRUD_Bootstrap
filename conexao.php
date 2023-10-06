<?php
$conn = mysqli_connect("localhost", "root", "", "phpbootstrap");

if (!$conn) {
    die('Falha na conexão' . mysqli_connect_error());
}
