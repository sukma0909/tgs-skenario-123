    <h3>Skenario pertama: Nilai</h3>
<?php
$nilai = 89;

if ($nilai > 100) {
    echo "Nilai wajib di antara 0-100 ya gais";
} elseif ($nilai >= 90) {
    echo "nilai $nilai = A";
} elseif ($nilai >= 80) {
    echo "nilai $nilai = B";
} elseif ($nilai >= 70) {
    echo "nilai $nilai = C";
} elseif ($nilai >= 69) {
    echo "nilai $nilai = D";
} else {
    echo "nilai = $nilai";
}
?>    