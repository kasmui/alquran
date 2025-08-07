<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Ayat & Terjemahan per Kata</title>
    <link rel="icon" type="image/png" sizes="32x32" href="ebook.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0;
            background-color: #f4f4f4; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Page Container */
        .container {
            max-width: 100%;
            background-color: #fff;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
            width: 90%;
            /*max-width: 800px;*/
        }

        .header {
            max-width: 100%;
            background-color: #C9E6EA;
            border-radius: 5px;
            text-align: center;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        /* Styling for form */
        form#searchForm {
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 100%;
            max-width: 500px;
            align-items: center;
            justify-content: center;
            margin: 0 auto; /* Memusatkan form secara horizontal */
        }

        textarea#searchQuery {
            padding: 7px;
            border: 1px solid #007BFF; 
            border-radius: 5px;
            outline: none; 
            flex-grow: 1; /* Agar textarea mengambil ruang sisa */ 
            transition: border-color 0.3s; 
            font-size: 13px;
            resize: vertical; /* Memungkinkan pengguna mengubah ukuran vertikal */
            min-height: 100px; /* Tinggi minimum */
            /*max-height: 200px; /* Tinggi maksimum */
            width: 100%; /* Mengambil seluruh lebar form */
            box-sizing: border-box;
        }
        
        textarea#searchDeepseek {
                    padding: 7px;
                    border: 1px solid #007BFF; 
                    border-radius: 5px;
                    outline: none; 
                    flex-grow: 1; /* Agar textarea mengambil ruang sisa */ 
                    transition: border-color 0.3s; 
                    font-size: 13px;
                    resize: vertical; /* Memungkinkan pengguna mengubah ukuran vertikal */
                    min-height: 100px; /* Tinggi minimum */
                    /*max-height: 200px; /* Tinggi maksimum */
                    width: 100%; /* Mengambil seluruh lebar form */
                    box-sizing: border-box;
        }        

        input[type="text"] {
            padding: 10px;
            border: 1px solid #007BFF;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s;
            width: 100%;
            box-sizing: border-box;
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
            margin-top: 5px;
        }

        button[type="submit"]:hover {
            background-color: #000099;
            margin-top: 5px;
        }

        button[type="submit"]:active {
            transform: scale(0.98);
            margin-top: 5px;
        }

        /* Footer Styles */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #f4f4f4;
            color: grey;
            font-size: 12px;
            position: absolute;
            bottom: 0;
            width: 100%;
            margin-bottom: 0px;
        }

        /* Menghilangkan garis bawah pada semua link */
        a {
            text-decoration: none;
        }

        /* Menghilangkan garis bawah pada semua elemen */
        * {
            text-decoration: none;
        } 

        hr {
            color: #f4f4f4;
            border-color: #f4f4f4;
        }

        /* Responsive Styles */
        @media (max-width: 767px) {
            .container {
                width: 95%;
            }

            form#searchFormAlquran {
                flex-direction: column;
                align-items: center;
            }

            form#searchFormDeepseek {
                flex-direction: column;
                align-items: center;
            }
            
            form#searchFormAlquran {
                flex-direction: column;
                align-items: center;
            }

            form#searchFormDeepseek {
                flex-direction: column;
                align-items: center;
            }            

            input[type="text"] {
                width: 100%;
            }

            textarea#searchQuery {
                width: 100%;
            }
            textarea#searchDeepseek {
                width: 100%;
            }            
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="https://falakmu.id/alquran/" style="text-decoration: none;"><h2>CARI AYAT AL-QUR'AN</h2></a>
            <div>
                <form id="searchFormAlquran">
                    <input type="text" id="indoText" name="indoText" placeholder="Cari terjemahan..."> <br/><br/>dan atau <br/> <br/>
                    <input type="text" id="ayahText" name="ayahText" placeholder="Cari teks Arab...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        
        <script>
            document.getElementById('searchFormAlquran').onsubmit = function(event) {
                event.preventDefault();
                const indoText = document.getElementById('indoText').value;
                const ayahText = document.getElementById('ayahText').value;
                const searchUrl = 'https://falakmu.id/alquran/search_quran.php?indoText=' + encodeURIComponent(indoText) + '&ayahText=' + encodeURIComponent(ayahText);
                fetch(searchUrl)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('searchResult').innerHTML = data;
                })
                .catch(error => {
                    console.error('Error fetching data: ', error);
                    document.getElementById('searchResult').innerHTML = 'Error fetching data. Please try again later.';
                });
            };
        </script>        
        
        <form id="searchFormChatGPT">
            <textarea id="searchQuery" placeholder="Cari di ChatGPT ..."></textarea>
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        
        <script>
            document.getElementById('searchFormChatGPT').onsubmit = function(event) {
                event.preventDefault();
                const searchQuery = document.getElementById('searchQuery').value;
                const searchUrl = 'https://chatgpt.com/?q=' + encodeURIComponent(searchQuery);
                window.open(searchUrl, '_blank'); // Membuka URL di tab baru
                const button = event.target.querySelector('button[type="submit"]');
                button.innerHTML = '<i class="fa fa-search"></i> Searching...';
                setTimeout(() => button.innerHTML = '<i class="fa fa-search"></i>', 2000);
            };
        </script>        
   <!--     
        <form id="searchFormDeepseek">
            <textarea id="searchDeepseek" placeholder="Cari di Deepseek ..."></textarea>
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        
        <script>
            document.getElementById('searchFormDeepseek').onsubmit = function(event) {
                event.preventDefault();
                const searchDeepseek = document.getElementById('searchDeepseek').value;
                const searchDeepUrl = 'https://chat.deepseek.com/a/chat/s/=' + encodeURIComponent(searchDeepseek);
                window.open(searchDeepUrl, '_blank'); // Membuka URL di tab baru
                const button = event.target.querySelector('button[type="submit"]');
                button.innerHTML = '<i class="fa fa-search"></i> Searching...';
                setTimeout(() => button.innerHTML = '<i class="fa fa-search"></i>', 2000);
            };
        </script>        
-->
        <div id="searchResult"> 
            <br/>
            <span style="color: brown; font-size: 20px;">Silahkan input kata kunci, <b>bahasa Indonesia</b> atau <b>teks arab</b> (harus dengan tanda harakat lengkap) atau <b>kombinasi keduanya.</b></span>
            <center>
                <h4>Anda dapat juga membuka surat tertentu dengan terjemahan per kata</h4>
                <iframe src="quran.php" width="100%" height="700px" frameborder="0"></iframe>
                <br/>
                <a target="_top" href="https://falakmu.id/alquran/"><button><i class="fa fa-arrow-left"></i> Kembali</button></a> &nbsp;<a target="_top" href="https://falakmu.id/alquran/indexall.php"><button>+ChatGPT</button></a> 
                <br/><br/>
                <span style="color: blue; font-size: 15px;">Anda juga dapat memilih surat di bawah ini!</span>
                <br/>
                <iframe src="surat.php" height="100px" frameborder="0"></iframe>
            </center>
            <br/>
            <a href="https://quran.kemenag.go.id/quran/per-ayat/surah/1?from=1&to=7" target="_blank"><img class="img-hp" src="kemenag.png" width="20%" height="50px"></a>&nbsp;
            <a href="https://tafsirweb.com/" target="_blank"><img class="img-hp" src="taafsirweb.png" width="20%" height="50px"></a>&nbsp;
        </div>
        <br/><br/>
    </div>
</body>
</html>
