<?php
$name= $_POST["nombre"];
$apellido= $_POST["apellido"];
$email= $_POST["email"];
$pass= $_POST["pass"];

$genero = $_REQUEST["sexo"];

$estudios = $_REQUEST["estudios"];

$diasSemana = $_REQUEST["diaSem"];

$texto= $_REQUEST["texto"];




echo" El nombre es ". $name ." el apellido es". $apellido. ", es sexo ". $genero . ", su nivel de estudios es ". $estudios. "y se le enviara el texto el dia ". $diasSemana;
?>