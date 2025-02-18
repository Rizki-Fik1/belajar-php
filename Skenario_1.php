<?php

// Skenario 1
$nilai = 90; 

if ($nilai > 89 && $nilai <= 100) {
  echo "nilai anda A";
} elseif ($nilai < 90 && $nilai > 79) {
    echo "nilai anda B";
} elseif ($nilai > 69 && $nilai < 80) {
    echo "nilai anda C";
} elseif ($nilai < 70 && $nilai >= 0) {
    echo  "nilai anda D";
} else {
    echo "nilai wajib diantara 0 - 100";
}

// Skenario 3

?>