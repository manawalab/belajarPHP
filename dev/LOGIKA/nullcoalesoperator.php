<?php
  $vapor = ["Kapas" => "liquid"];
  if (isset($vapor['Kapas'])) {
    $kapas = $vapor ['Kapas'];
  } else {
      $kapas = 'Nothing';
  }

  echo $kapas. PHP_EOL;
//bisa diganti dengan 
  $vapoor = [];
  $aksi = $vapoor ['Kapas'] ?? 'Nothing';
  echo $aksi. PHP_EOL;

  