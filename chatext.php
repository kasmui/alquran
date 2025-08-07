<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari ChatGPT</title>
    <link rel="icon" type="image/png" sizes="32x32" href="ebook.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
        }

        /* Styling for form */
        form#searchForm {
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 10px;
            width: 90%; /* Responsif untuk perangkat kecil */
            max-width: 600px; /* Batas lebar maksimal */
            align-items: center;
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
            min-height: 50px; /* Tinggi minimum */
            max-height: 150px; /* Tinggi maksimum */
        }

        button[type="submit"] {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            outline: none;
        }

        button[type="submit"]:hover {
            background-color: #000099;
        }

        button[type="submit"]:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <form id="searchForm">
        <textarea id="searchQuery" placeholder="Cari di ChatGPT ..."></textarea>
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>

    <script>
        document.getElementById('searchForm').onsubmit = function(event) {
            event.preventDefault();
            const searchQuery = document.getElementById('searchQuery').value;
            const searchUrl = 'https://chatgpt.com/?q=' + encodeURIComponent(searchQuery);
            window.open(searchUrl, '_blank'); // Membuka URL di tab baru
            const button = event.target.querySelector('button[type="submit"]');
            button.innerHTML = '<i class="fa fa-search"></i> Searching...';
            setTimeout(() => button.innerHTML = '<i class="fa fa-search"></i>', 2000);
        };
    </script>
</body>
</html>
