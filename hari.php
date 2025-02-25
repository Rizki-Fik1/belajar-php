<?php
$hari = "minggu";

if ($hari == "senin" || $hari == "selasa" || $hari == "rabu") {
  echo "$hari menggunakan seragam osis";
} else if ($hari == "kamis") {
    echo "$hari menggunakan seragam batik";
}
 else if ($hari == "sabtu" || $hari == "minggu") {
  echo "libur";
}
?>