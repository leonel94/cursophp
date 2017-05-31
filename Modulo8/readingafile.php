<?php
$read = file('names.txt');
foreach ($read as $line) {
  echo $line .", ";
}
?>