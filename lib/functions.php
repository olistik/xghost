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
?>
