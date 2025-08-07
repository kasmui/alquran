<?php
// Konfigurasi koneksi ke database MySQL
$servername = "localhost";
$username = "tabg8378_mtpdm23";
$password = "tabg8378_mtpdm23";
$dbname = "tabg8378_mtpdm23";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Query untuk mengambil jumlah total ayat dalam tabel
$sql = "SELECT COUNT(*) AS total_rows FROM quran_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_rows = $row["total_rows"];

    // Pilih sebuah nomor acak antara 1 dan jumlah total ayat
    $random_verse_number = rand(1, $total_rows);

    // Query untuk mengambil ayat Al-Quran secara acak
    $sql = "SELECT * FROM quran_id WHERE id = $random_verse_number";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $suraId  = $row["suraId"];
        $verseID = $row["verseID"];
        $ayahText = $row["ayahText"];
        $indoText = $row["indoText"];
        $readText = $row["readText"];

        // Mengonversi verseID ke dalam format teks Arab
        $arabicNumbers = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];
        $verseArabic = '';
        $verseIDStr = strval($verseID);
        for ($i = 0; $i < strlen($verseIDStr); $i++) {
            $digit = $verseIDStr[$i];
            $verseArabic .= $arabicNumbers[intval($digit)];
        }

        // Tampilkan ayat Al-Quran secara acak
        echo "<h2>Ayat Al-Quran Secara Acak:</h2>";
        echo "<p>Surat ke-$suraId, Ayat: $verseArabic: $indoText </p>";
        //echo '<div style="font-size: 24px; text-align: right; direction: rtl; padding: 10px; border: 1px solid #ccc;">' . $ayahText . '</div>';
        //echo "<p>$indoText</p>";
        //echo "<p><strong>Bacaan:</strong> $readText</p>";
    } else {
        echo "Tidak ada hasil yang ditemukan.";
    }
} else {
    echo "Tidak ada hasil yang ditemukan.";
}

// Tutup koneksi ke database
$conn->close();
?>
