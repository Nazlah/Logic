<?php
function procVowel($param) {
    $vowels = 'aeiou'; // karakter vokal
    $result = '';
    $param = strtolower($param); // mengubah semua karakter menjadi huruf kecil
    for ($i = 0; $i < strlen($param); $i++) {
        if (strpos($vowels, $param[$i]) !== false) {
            $result .= $param[$i];
        }
    }
    return $result;
}

// fungsi untuk menghitung karakter konsonan
function procConsonant($param) {
    $vowels = 'aeiou';
    $result = '';
    $param = strtolower($param);
    for ($i = 0; $i < strlen($param); $i++) { // loop untuk menghitung karakter konsonan
        if (strpos($vowels, $param[$i]) === false && ctype_alpha($param[$i])) {
            $result .= $param[$i];
        }
    }
    return $result;
}

// contoh pemanggilan fungsi
echo "Input satu baris kata (S) : ";
$input = trim(fgets(STDIN));

// memanggil fungsi
$charVowel = procVowel($input);
$charConsonant = procConsonant($input);

// menampilkan karakter vokal dan konsonan
echo "Karakter Vokal : \n";
echo $charVowel . "\n";
echo "Karakter Konsonan : \n";
echo $charConsonant . "\n";
?>
