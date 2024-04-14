<?php 
echo 'Nama : ';
echo 'Lasbi Noveni';
echo "\n";

echo "Nama : ";
echo "Lasbi\t Noveni\n";

echo <<<NOVEN
Selamat sekarang belajar PHP,
kita belajar tipe data string
ini adalah cara ke-3 membuat string
menggunakan heredoc

NOVEN;


echo <<<'NOVEN'
Selamat sekarang belajar PHP,
kita belajar tipe data string
ini adalah cara ke-3 membuat string
menggunakan nowdoc
NOVEN;

?>