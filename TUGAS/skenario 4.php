kasus 1
<?php
$hari = [
    "minggu", 
    "senin", 
    "selasa", 
    "rabu", 
    "kamis", 
    "jumat",
    "sabtu"
];

$tanggal = array(
    "1",
    "2", 
    "3",
    "4",
    "5",
    "6", 
    "7",
    "8",
    "9", 
    "10", 
    "11", 
    "12", 
    "13", 
    "14", 
    "15", 
    "16", 
    "17", 
    "18",                 
    "19",
    "20", 
    "21", 
    "22", 
    "23", 
    "24", 
    "25",
    "26", 
    "27", 
    "28", 
    "29",
    "30",
    "31"
);
                 
$bulan = [
    "Jan",
    "Feb", 
    "Mar", 
    "Apr", 
    "Mei", 
    "Jun", 
    "Jul",
    "Ags",
    "Sep", 
    "Okt", 
    "Nov", 
    "Des"
];
                

$tahun = array ("2024", "2025", "2026");

//senin,10 - Mar - 2025
echo $hari [1] . ", " . $tanggal[9] . " - " . $bulan[2] . " - ";
echo "<br>";

//selasa,18 - Mar - 2025
echo $hari[2] . ", " . $tanggal[17] . " - " . $bulan[2] . " - ";
echo "<hr>";

//main looping nambah otomatis
for ($i = 0;  $i < 30; $i++){
    echo $i;
    echo "<br>";
}
//main looping mengurang otomatis
for ($i = 30;  $i < 10; $i--){
    echo $i;
    echo "<br>";
}
//hari menggunakan for
$jml_hari = count($hari);
for($hari = 0; $h < $jml_hari; $h++ ){
    echo $hari [$h];
    echo "<br>";
}
echo "<hr>";
//tanggal menggunakan foreach,
foreach ($tanggal as $tgl)
{
 echo $tgl;
 echo "<br>";
}
 echo "<hr>";
//bulan menggunakan while,
$b = 0;
$jml_bulan = count($bulan);
while ($b < $jml_bulan) {
    echo $bulan [$b];
    echo "<br>";
    $b++;
}
//tahun menggunakan do while
$t =0;
do {
    echo $tahun[$t];
    echo "<br>";
    $t++;
} while ($t < $jml_tahun);

?>

kasus 2
<?php

for ($i = 30; $i >= 1; $i--) {
    $sisa = $i - 1;
    
    if ($sisa > 0) {
        echo "anak ayam turunlah $i, mati 1 tinggal $sisa<br>";
    } else {
        echo "anak ayam turunlah 1, mati 1 tinggal  induknya<br>";
    }
}

?>

kasus 3
<?php
echo "Mawar milik Sholeh:<br>";

// Mawar yang dimiliki Sholeh
echo "Mawar yang dimiliki Sholeh: ";
$countSholeh = 0;

for ($mawar = 21; $mawar >= 10; $mawar--) {
    echo "$mawar, ";
    $countSholeh++;
}
echo "<br>Jumlah mawar yang dimiliki Sholeh = $countSholeh<br>";

// Mawar yang akan diberikan ke ibunya
echo "Mawar yang akan diberikan ke ibunya: ";
$countIbu = 0;

for ($mawar = 21; $mawar >= 4; $mawar--) {
    echo "$mawar, ";
    $countIbu++;
}
echo "<br>Jumlah mawar yang akan diberikan ke ibunya = $countIbu<br>";

?>

kasus 4
<?php
// Playlist lagu Ambyar 
$musik = [
    ["suasana" => "galau", "lagu" => "Mesin Waktu - Budi Doremi"],
    ["suasana" => "semangat", "lagu" => "Selamat Pagi - Ran"],
    ["suasana" => "marah", "lagu" => "Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"]
];

$perasaan = ["galau", "semangat", "marah"];

echo "Playlist lagu Ambyar:<br>";
foreach ($perasaan as $suasana) {
    foreach ($musik as $item) {
        if ($item["suasana"] == $suasana) {
            echo "Ambyar sedang $suasana, maka ia mendengarkan \"{$item['lagu']}\"<br>";
        }
    }
}

?>
