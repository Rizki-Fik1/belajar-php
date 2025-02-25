<?php
// Skenario 2
date_default_timezone_set("Asia/Jakarta");
$jam = date("24:00"); 

if ($jam > "00:00" && $jam <= "04:01") {
  echo "Dini hari";
} elseif ($jam > "03:59" && $jam < "10:01") {
   echo "Pagi hari";   
} elseif ($jam > "09:59" && $jam < "15:01") {
  echo "Siang hari";
} elseif ($jam > "14:59" && $jam < "17:31") {
  echo "Sore hari";
} elseif ($jam > "17:29" && $jam < "18:31") {
  echo "Petang hari";
} elseif ($jam > "18:29" && $jam < "24:01" ) {
  echo "Malam hari";
} else {
  echo "Dunia lain";
}
?>