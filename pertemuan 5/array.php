<h4>Membuat dan menampilkan array</h4>
<?php
//membuat array mahasiswa
$nim = ["Suhendrik Lillahi", "anton", "Ahmad sopyan", "jimly", "panji", "hadi"];
?>

<!-- menampilkan isi aray pengulangan for -->
<?php
for ($i = 0; $i < count($nim); $i++) {
    echo $nim[$i] . "<br>";
}
?>

<hr>

<?php
//membuat array buku
$buku = ["Desain Web", "OOP", "Web programming", "Panduan Web", "Pencitraan Digital"];
?>
<!-- menampilkan isi array dengan foreach -->
<?php
foreach ($buku as $buku) {
    echo $buku . "<br>";
}
?>
<hr>

<h4>Menambahkan Array</h4>
<?php
//membuat array
$hobi = ["Mengaji", "Menulis", "Main Catur"];

//mengganti isi pada indexs ke-2
$hobi[2] = "Mengaji";
//menambahkan isi pada indexs ke-3
$hobi[3] = "menggambar";

//menambahkan isi pada indexs terakhir
$hobi[] = "Trading";

//cetak array dengan perulangan
foreach ($hobi as $hobiku) {
    echo $hobiku . "<br>";
}
?>

<h4>Array Asosiatif</h4>
<?php
//Membuat Array
$mhs = [
    "nim"   => "1904030005",
    "nama"  => "Suhendrik Lillahi",
    "fakultas" => "Fakultas Teknik",
    "jurusan"  => "Teknik Informatika",
];
//mencetak isi array assoiatif
echo "<h5>Data Mahasiswa</h5>";
echo "<p>nim : " . $mhs["nim"] . "</br>";
echo "<p>nama : " . $mhs["nama"] . "</br>";
echo "<p>fakultas : " . $mhs["fakultas"] . "</br>";
echo "<p>jurusan : " . $mhs["jurusan"] . "</br>";
?>
<hr>
<h4>Array Multidimensi</h4>
<?php
//membuat array 2 dimensi dengan assosiatif
$dosens = [
    [
        "nama" => "Asep Hardianto",
        "Mk"   => "Web Programming"
    ],

    [
        "nama" => "Ade Ismail",
        "Mk"   => "Mobile Android"
    ],

    [
        "nama" => "Sukisno",
        "Mk"   => "Struktur Data"

    ]

];

//menampilkan Array
foreach ($dosens as $dosen) {
    echo "<h2>" . $dosen["nama"] . "</h2>";
    echo "<p>" . $dosen["Mk"] . "<p>";
    echo "<hr>";
}
?>