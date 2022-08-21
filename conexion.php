<?php

$conexion = new mysqli("localhost","root","","torrentsundercode");

if(!$conexion){
  echo "No se pudo establecer conexion con la base de datos";
}