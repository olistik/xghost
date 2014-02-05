<?php
// debug&die v1.3
function d($what, $die = 0)
{
  echo "<pre>";
  print_r($what);
  echo "</pre>";
  if ( $die ) {
    die("Debug&Die");
  }
}
function dateFormat($date)
{
  return date(DATE_FORMAT.' H:i:s', strtotime($date));
}
function translate($key)
{
  return isset($_SESSION['xGhost']['translate'][$key]) ? $_SESSION['xGhost']['translate'][$key] : $key;
}
function numbers($number, $decimals = 0)
{
  return number_format($number, $decimals, ',', '.');
}
?>
