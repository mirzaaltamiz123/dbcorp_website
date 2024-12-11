<?php
// Tentukan nama halaman untuk penggunaan dinamis (opsional)
$page_title = "Tentang Kami - dbcorp";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="styles.css"> <!-- Ganti dengan file CSS Anda -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #0056b3;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2rem;
        }
        section {
            margin: 20px 0;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        section h2 {
            color: #333;
            margin-bottom: 10px;
        }
        .team {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .team-member {
            flex: 1 1 calc(33.333% - 20px);
            background: #f0f0f0;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
        }
        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tentang Kami</h1>
        <p>Mengenal lebih jauh tentang dbcorp</p>
    </header>

    <div class="container">
        <section>
            <h2>Siapa Kami?</h2>
            <p>
                dbcorp adalah perusahaan teknologi yang didirikan dengan tujuan memberikan solusi inovatif dalam bidang 
                [spesialisasi perusahaan]. Kami berkomitmen untuk membantu klien mencapai tujuan mereka melalui 
                layanan berkualitas tinggi dan teknologi terkini.
            </p>
        </section>

        <section>
            <h2>Visi Kami</h2>
            <p>
                Menjadi pemimpin dalam [bidang industri] yang memberikan dampak positif kepada masyarakat dan dunia melalui inovasi.
            </p>
        </section>

        <section>
            <h2>Misi Kami</h2>
            <ul>
                <li>Menyediakan solusi yang terjangkau dan efisien bagi klien kami.</li>
                <li>Membangun kemitraan yang berkelanjutan dengan pelanggan dan komunitas.</li>
                <li>Mendorong inovasi dan kreativitas dalam setiap aspek bisnis kami.</li>
            </ul>
        </section>

        <section>
            <h2>Tim Kami</h2>
            <div class="team">
                <div class="team-member">
                    <img src="team_member_1.jpg" alt="Nama Anggota">
                    <h3>Nama Anggota</h3>
                    <p>CEO & Founder</p>
                </div>
                <div class="team-member">
                    <img src="team_member_2.jpg" alt="Nama Anggota">
                    <h3>Nama Anggota</h3>
                    <p>CTO</p>
                </div>
                <div class="team-member">
                    <img src="team_member_3.jpg" alt="Nama Anggota">
                    <h3>Nama Anggota</h3>
                    <p>Head of Marketing</p>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
