<?php
//menghitung jumlah minibus yg diperlukan
function minimumBusesRequired($families, $members) {
    if (count($members) != $families) {
        return "Input must be equal with count of family";
    }

    // mengurutkan jumlah anggota keluarga secara menurun
    rsort($members);

    $buses = 0; // jumlah minibus yg diperlukan
    $i = 0; // indeks anggota keluarga pertama
    $j = count($members) - 1;   // indeks anggota keluarga terakhir

    // menghitung minimal bus yang diperlukan
    while ($i <= $j) {
        if ($members[$i] + $members[$j] <= 4) {
            $j--;         // mengurangi indeks anggota keluarga terakhir
        }
        $i++;
        $buses++;
    }

    return $buses;
}
// meminta input dari user
echo "Input the number of families: ";
$families = intval(trim(fgets(STDIN)));

// meminta input anggota keluarga dari user
echo "Input the number of members in the family (separated by a space): ";
$membersInput = trim(fgets(STDIN));
$members = array_map('intval', explode(' ', $membersInput));

// memanggil fungsi untuk menghitung minimal bus yang diperlukan
$result = minimumBusesRequired($families, $members);

echo $result . "\n";
?>
