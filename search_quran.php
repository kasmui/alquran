<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Menggunakan font Amiri untuk teks Arab */
        .arabic-text {
            font-family: 'Arabic Typesetting', serif; /* Ubah 'Scheherazade' dengan font arab yang Anda inginkan */
            font-size: 30px;
            text-align: justify;
        }
        .latin-text {
            font-family: 'Roman', serif;
            font-size: 18px;
            text-align: justify;
        }
        .arabic-cell {
            border: 1px solid #ccc;
            text-align: right;
            padding: 10px;
        }
        .nama-surat {
            border: 1px solid #ccc;
            text-align: center;
            font-size: 20px;
            padding: 10px;
        }        
        .latin-cell {
            border: 1px solid #ccc;
            text-align: justify;
            font-size: 20px;
            padding: 10px;
        }
        /* Highlight baris yang cocok dengan pencarian */
        .highlight {
            background-color: yellow;
        }
        th {
            font-size: 18px;
            padding: 5px;
            background-color: lightblue;
        }
        td {
            font-size: 18px;
        } 
        button {
            padding: 10px 15px;
            text-align: center;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            outline: none;
        }        
    </style>
</head>
<body>
    <hr/>
    <span style="color: brown;">Silahkan input kata kunci, <b>bahasa Indonesia </b>atau <b>teks arab</b> (harus dengan tanda harakat lengkap) atau <b>kombinasi keduanya</b>.<br/> <i><span style="color: blue;">Klik pada nama surat maka akan terbuka mushaf Al-Quran dan terjemah per kata.</span></i></span>
    <?php
        function getSurahName($surahId) {
            switch ($surahId) {
                case 1:
                    return "(1)<br/> Al-Fatihah <br/> الفاتحة";
                case 2:
                    return "(2)<br/> Al-Baqarah <br/> البقرة";
                case 3:
                    return "(3)<br/> Ali Imran <br/> اٰل عمران";
                case 4:
                    return "(4)<br/> An-Nisa' <br/> النساۤء";
                case 5:
                    return "(5)<br/> Al-Ma'idah <br/> الماۤئدة";
                case 6:
                    return "(6)<br/> Al-An'am <br/> الانعام";
                case 7:
                    return "(7)<br/> Al-A'raf <br/> الاعراف";
                case 8:
                    return "(8)<br/> Al-Anfal <br/> الانفال";
                case 9:
                    return "(9)<br/> At-Taubah <br/> التوبة";
                case 10:
                    return "(10)<br/> Yunus <br/> يونس";
                case 11:
                    return "(11)<br/> Hud <br/> هود";
                case 12:
                    return "(12)<br/> Yusuf <br/> يوسف";
                case 13:
                    return "(13)<br/> Ar-Ra'd <br/> الرّعد";
                case 14:
                    return "(14)<br/> Ibrahim <br/> ابرٰهيم";
                case 15:
                    return "(15)<br/> Al-Hijr <br/> الحجر";
                case 16:
                    return "(16)<br/> An-Nahl <br/> النحل";
                case 17:
                    return "(17)<br/> Al-Isra' <br/> الاسراۤء";
                case 18:
                    return "(18)<br/> Al-Kahf <br/> الكهف";
                case 19:
                    return "(19)<br/> Maryam <br/> مريم";
                case 20:
                    return "(20)<br/> Taha <br/> طٰهٰ";
                case 21:
                    return "(21)<br/> Al-Anbiya' <br/> الانبياۤء";
                case 22:
                    return "(22)<br/> Al-Hajj <br/> الحج";
                case 23:
                    return "(23)<br/> Al-Mu'minun <br/> المؤمنون";
                case 24:
                    return "(24)<br/> An-Nur <br/> النّور";
                case 25:
                    return "(25)<br/> Al-Furqan <br/> الفرقان";
                case 26:
                    return "(26)<br/> Ash-Shu'ara' <br/> الشعراۤء";
                case 27:
                    return "(27)<br/> An-Naml <br/> النمل";
                case 28:
                    return "(28)<br/> Al-Qasas <br/> القصص";
                case 29:
                    return "(29)<br/> Al-'Ankabut <br/> العنكبوت";
                case 30:
                    return "(30)<br/> Ar-Rum <br/> الرّوم";
                case 31:
                    return "(31)<br/> Luqman <br/> لقمان";
                case 32:
                    return "(32)<br/> As-Sajdah <br/> السّجدة";
                case 33:
                    return "(33)<br/> Al-Ahzab <br/> الاحزاب";
                case 34:
                    return "(34)<br/> Saba' <br/> سبأ";
                case 35:
                    return "(35)<br/> Fatir <br/> فاطر";
                case 36:
                    return "(36)<br/> Yasin <br/> يٰسۤ";
                case 37:
                    return "(37)<br/> As-Saffat <br/> الصّٰۤفّٰت";
                case 38:
                    return "(38)<br/> Sad <br/> ص";
                case 39:
                    return "(39)<br/> Az-Zumar <br/> الزمر";
                case 40:
                    return "(40)<br/> Gafir <br/> غافر";
                case 41:
                    return "(41)<br/> Fussilat <br/> فصّلت";
                case 42:
                    return "(42)<br/> Ash-Shura <br/> الشورى";
                case 43:
                    return "(43)<br/> Az-Zukhruf <br/> الزخرف";
                case 44:
                    return "(44)<br/> Ad-Dukhan <br/> الدخان";
                case 45:
                    return "(45)<br/> Al-Jasiyah <br/> الجاثية";
                case 46:
                    return "(46)<br/> Al-Ahqaf <br/> الاحقاف";
                case 47:
                    return "(47)<br/> Muhammad <br/> محمّد";
                case 48:
                    return "(48)<br/> Al-Fath <br/> الفتح";
                case 49:
                    return "(49)<br/> Al-Hujurat <br/> الحجرٰت";
                case 50:
                    return "(50)<br/> Qaf <br/> ق";
                case 51:
                    return "(51)<br/> Az-Zariyat <br/> الذّٰريٰت";
                case 52:
                    return "(52)<br/> At-Tur <br/> الطور";
                case 53:
                    return "(53)<br/> An-Najm <br/> النجم";
                case 54:
                    return "(54)<br/> Al-Qamar <br/> القمر";
                case 55:
                    return "(55)<br/> Ar-Rahman <br/> الرحمن";
                case 56:
                    return "(56)<br/> Al-Waqi'ah <br/> الواقعة";
                case 57:
                    return "(57)<br/> Al-Hadid <br/> الحديد";
                case 58:
                    return "(58)<br/> Al-Mujadilah <br/> المجادلة";
                case 59:
                    return "(59)<br/> Al-Hashr <br/> الحشر";
                case 60:
                    return "(60)<br/> Al-Mumtahanah <br/> الممتحنة";
                case 61:
                    return "(61)<br/> As-Saff <br/> الصّفّ";
                case 62:
                    return "(62)<br/> Al-Jumu'ah <br/> الجمعة";
                case 63:
                    return "(63)<br/> Al-Munafiqun <br/> المنٰفقون";
                case 64:
                    return "(64)<br/> At-Taghabun <br/> التغابن";
                case 65:
                    return "(65)<br/> At-Talaq <br/> الطلاق";
                case 66:
                    return "(66)<br/> At-Tahrim <br/> التحريم";
                case 67:
                    return "(67)<br/> Al-Mulk <br/> الملك";
                case 68:
                    return "(68)<br/> Al-Qalam <br/> القلم";
                case 69:
                    return "(69)<br/> Al-Haqqah <br/> الحاۤقّة";
                case 70:
                    return "(70)<br/> Al-Ma'arij <br/> المعارج";
                case 71:
                    return "(71)<br/> Nuh <br/> نوح";
                case 72:
                    return "(72)<br/> Al-Jinn <br/> الّجن";
                case 73:
                    return "(73)<br/> Al-Muzzammil <br/> المزّمّل";
                case 74:
                    return "(74)<br/> Al-Muddathir <br/> المدّثّر";
                case 75:
                    return "(75)<br/> Al-Qiyamah <br/> الّقيامة";
                case 76:
                    return "(76)<br/> Al-Insan <br/> الانسان";
                case 77:
                    return "(77)<br/> Al-Mursalat <br/> المرسلٰت";
                case 78:
                    return "(78)<br/> An-Naba' <br/> النّٰبَا";
                case 79:
                    return "(79)<br/> An-Nazi'at <br/> النّٰزعٰت";
                case 80:
                    return "(80)<br/> Abasa <br/> عبس";
                case 81:
                    return "(81)<br/> At-Takwir <br/> التكوير";
                case 82:
                    return "(82)<br/> Al-Infitar <br/> الانفطار";
                case 83:
                    return "(83)<br/> Al-Mutaffifin <br/> المطفّفين";
                case 84:
                    return "(84)<br/> Al-Inshiqaq <br/> الانشقاق";
                case 85:
                    return "(85)<br/> Al-Buruj <br/> البروج";
                case 86:
                    return "(86)<br/> At-Tariq <br/> الطارق";
                case 87:
                    return "(87)<br/> Al-A'la <br/> الأعلى";
                case 88:
                    return "(88)<br/> Al-Ghashiyah <br/> الغاشية";
                case 89:
                    return "(89)<br/> Al-Fajr <br/> الفجر";
                case 90:
                    return "(90)<br/> Al-Balad <br/> البلد";
                case 91:
                    return "(91)<br/> Ash-Shams <br/> الشمس";
                case 92:
                    return "(92)<br/> Al-Lail <br/> الّيل";
                case 93:
                    return "(93)<br/> Ad-Duha <br/> الضّحى";
                case 94:
                    return "(94)<br/> Ash-Sharh <br/> الشرح";
                case 95:
                    return "(95)<br/> At-Tin <br/> التين";
                case 96:
                    return "(96)<br/> Al-'Alaq <br/> العلق";
                case 97:
                    return "(97)<br/> Al-Qadr <br/> القدر";
                case 98:
                    return "(98)<br/> Al-Bayyinah <br/> البيّنة";
                case 99:
                    return "(99)<br/> Az-Zalzalah <br/> الزلزلة";
                case 100:
                    return "(100)<br/> Al-'Adiyat <br/> العٰديٰت";
                case 101:
                    return "(101)<br/> Al-Qari'ah <br/> القارعة";
                case 102:
                    return "(102)<br/> At-Takathur <br/> التكاثر";
                case 103:
                    return "(103)<br/> Al-'Asr <br/> العصر";
                case 104:
                    return "(104)<br/> Al-Humazah <br/> الهمزة";
                case 105:
                    return "(105)<br/> Al-Fil <br/> الفيل";
                case 106:
                    return "(106)<br/> Quraysh <br/> قريش";
                case 107:
                    return "(107)<br/> Al-Ma'un <br/> الماعون";
                case 108:
                    return "(108)<br/> Al-Kawthar <br/> الكوثر";
                case 109:
                    return "(109)<br/> Al-Kafirun <br/> الكٰفرون";
                case 110:
                    return "(110)<br/> An-Nasr <br/> النصر";
                case 111:
                    return "(111)<br/> Al-Lahab <br/> اللهب";
                case 112:
                    return "(112)<br/> Al-Ikhlas <br/> الاخلاص";
                case 113:
                    return "(113)<br/> Al-Falaq <br/> الفلق";
                case 114:
                    return "(114)<br/> An-Nas <br/> الناس";
                default:
                    return "Surah not found";
            }
        }
    ?>
    <?php
    $host = "localhost";
    $user = "faln5487_myblog";
    $pass = "3f@7r3C0A;E5";
    $dbname = "faln5487_myblog";

    // Create connection
    $conn = new mysqli($host, $user, $pass, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    } 

    $conn->set_charset("utf8");

    // Sanitize user inputs
    $indoText = isset($_GET['indoText']) ? mysqli_real_escape_string($conn, $_GET['indoText']) : '';
    $ayahText = isset($_GET['ayahText']) ? mysqli_real_escape_string($conn, $_GET['ayahText']) : '';

    // Debugging output
    /*echo "<p>indoText: $indoText</p>";
    echo "<p>ayahText: $ayahText</p>"; */

    $sql = "SELECT `id`, `suraId`, `verseID`, `ayahText`, `indoText`, `readText` FROM `quran_id` WHERE `ayahText` LIKE '%$ayahText%' AND `indoText` LIKE '%$indoText%'";

    // Debugging output
    /*echo "<p>SQL: $sql</p>";*/

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="arabic-text">
        <table class="latin-text" style="border-collapse: collapse; width: 100%; border: 1px solid blue;">
        <tr>
        <th style="border: 1px solid #ccc; text-align: center;">No.</th>
        <th style="border: 1px solid #ccc; text-align: center;">Ayat ke-</th>
        <th style="border: 1px solid #ccc; text-align: center;">No & Nama Surat</th>
        <th style="border: 1px solid #ccc; text-align: center;">Ayat</th>
        <th style="border: 1px solid #ccc; text-align: center;">Teks Arab & Terjemahan</th>
        </tr>';
        $no = 1;
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $id = $id +1;
            $suraId  = $row["suraId"];
            $verseID = $row["verseID"];
            $ayahText = $row["ayahText"];
            $terjemah = $row["indoText"];
            $ayat = "<span class='arabic-text'>$ayahText</span>";
            $terjemah="<span class='latin-text'>$terjemah</span>";
            $ayatan="<span class='arabic-text' style='color: blue; text-align: right;'>$ayahText</span><hr/><span class='latin-text' text-align: left;>$terjemah</span>";
            $highlight_class = ""; // Default value
            if ($ayahText === $_GET['ayahText'] && $terjemah === $_GET['indoText']) {
                $highlight_class = "highlight"; // Highlight the row if it matches the search
            }
            $nama_surah = getSurahName($suraId); // Mendapatkan nama surah berdasarkan $suraId
            $nama_surah_link = "<a title='Klik untuk melihat mushaf Al-quran dan terjemahan per kata' href='https://quran.com/$suraId/$verseID?wbw_locale=id&translations=33' target='_blank'>$nama_surah</a>"; // Menambahkan link pada nama surah
            echo "
            <tr class='$highlight_class'>
            <td class='nama-surat'>" .$no. "</td>
            <td class='nama-surat'>" .$id. "</td>
            <td class='nama-surat'>" . $nama_surah_link. "</td> <!-- Menampilkan nama surah dengan link -->
            <td class='nama-surat'>" . $verseID. "</td>
            <td class='latin-cell'>$ayatan</td>
            </tr>";
            $no++;
        }
        echo "</table></div><br/>";
    } else {
        echo "Data tidak ditemukan.";
    }

    $conn->close();
    ?>
    <br/>
    <a target="_top" href="https://falakmu.id/alquran/"><button>Kembali</button></a>
    <br/><br/>
</body>
</html>
