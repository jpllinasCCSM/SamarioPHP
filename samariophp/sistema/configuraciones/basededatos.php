<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
use SamarioPHP\BaseDeDatos\BaseDatos;
return function ($configuracion, $logger) {
  // Cargar configuración para Medoo desde una ruta definida
  $configMedoo = require_once RUTA_CONFIG_MEEDO;

  // Inicializar la conexión usando la configuración y devolverla
  return BaseDatos::iniciar($configMedoo($configuracion));
};
