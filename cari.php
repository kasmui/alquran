<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Quran Data</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <script>
        function searchQuran() {
            var indoText = document.getElementById("indoText").value;

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    // Open search results in a new tab
                    var newTab = window.open();
                    newTab.document.write(xmlhttp.responseText);
                    newTab.document.close();
                }
            };

            xmlhttp.open("GET", "search_quran.php?indoText=" + indoText, true);
            xmlhttp.send();
        }
    </script>

    <style>
        /* Menggunakan font Amiri untuk teks Arab */
        .arabic-text {
            font-family: 'Amiri', serif;
            font-size: 18px;
        }
    </style>
 
</head>
<body>
    <input size="27px" height="50px" type="text" id="indoText" placeholder="Masukkan kata">&nbsp;<button onclick="searchQuran()"><i class="fa fa-search"></i></button>
    <br>
    <div class="arabic-text" id="searchResults"></div>
</body>
</html>
