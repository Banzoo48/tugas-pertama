<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars(trim($_POST['nama']));
    $harga = htmlspecialchars(trim($_POST['harga']));
    $deskripsi = htmlspecialchars(trim($_POST['deskripsi']));

    // validasi sederhana
      if (empty($nama) || empty($harga)) {
        echo "<p>Nama dan Harga wajib di isi!</p>";
        exit;
      }

    // Tampilkan hasil
    echo "<h2>Data yang Anda Kirimkan:</h2>";
    echo "<p>Nama: " . $nama . "</p>"   ;
    echo "<p>Harga: " . $harga . "</p>";
    echo "<p>Deskripsi: " . $deskripsi . "</p>";
} else {
    echo "<p>Form belum dikirimkan.</p>";
}
?>
