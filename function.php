<?php
// Panggil File Koneksi.php
require_once('koneksi.php');

//membuat query ke/ dari database
function query($query)
{
  global $Koneksi;
  $result = mysqli_query($Koneksi, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
