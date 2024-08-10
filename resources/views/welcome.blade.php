<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Online Digitaliz</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <style>
        body {
            background-image: url("{{ asset('img/unnamed.jpg') }}");
            background-size: cover; /* Mengubah ukuran background agar tetap proporsional */
            background-repeat: no-repeat;
            background-position: center;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.6); /* Memperkuat overlay gelap untuk kontras teks */
            padding: 100px 0;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .overlay h1 {
            font-size: 3.5rem;
            color: #ffffff;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Menambahkan shadow pada teks */
        }
        .overlay p {
            font-size: 1.5rem;
            color: #f0f0f0; /* Warna abu-abu yang lebih terang */
            margin-bottom: 30px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6); /* Menambahkan shadow pada teks */
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
            font-size: 1.2rem;
            padding: 15px 30px;
            border-radius: 50px;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <h1>Selamat Datang Di Course Online Digitaliz</h1>
        <p>Mari Tingkatkan Keterampilan Anda Dengan Kursus Berkualitas</p>
        <a class="btn btn-custom" href="{{ route('peserta.tampil') }}">Lihat Kursus</a>
    </div>
</body>
</html>
