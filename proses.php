<?php
// Mengambil koneksi ke database
include "koneksi.php";

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $name = $_POST["name"];
    $placebirth = $_POST["placebirth"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];

    // Menyimpan data ke dalam database
    $sql = "INSERT INTO siswa (nama, TTL,  usia, jenis_kelamin, alamat) VALUES ('$name', '$placebirth', '$age', '$gender', '$address')";

    if (mysqli_query($db, $sql)) {
        echo "Data berhasil disimpan.<br>";

       // Menampilkan data yang baru saja disimpan
       echo "<h2>Data yang baru saja disimpan:</h2>";
       echo "<table border='1'>";
       echo "<tr><th>Nama</th><th>TTL</th><th>Usia</th><th>Jenis Kelamin</th><th>Alamat</th></tr>";
       echo "<tr><td>$name</td><td>$placebirth</td><td>$age</td><td>$gender</td><td>$address</td></tr>";
       echo "</table>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

    // Menutup koneksi database
    mysqli_close($db);
}
?>
