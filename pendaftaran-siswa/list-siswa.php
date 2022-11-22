<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway');

        body {
        margin: 0;
        font-family: 'Raleway';
        font-size: 16px;
        line-height: 1.8em;
        background-image: url('Background-image.png');
        }

        a, p {
        color: #AC8220;
        font-weight: bold;
        text-decoration: none;
        }

        a:hover {
        opacity: 0.5;
        color: black;
        }

        header, main, footer {
        margin: 0 auto;
        }

        header {
        padding: 2em;
        text-align: center;
        background-size: cover;
        background-position: fixed;
        color: white;
        }

        header section {
        margin: 0 auto;
        max-width: 640px;
        }

        header img {
        border-radius: 50%;
        max-width: 150px;
        }

        h3 {
        text-transform: uppercase;
        font-weight: bold;
        font-size: 30px;
        color: #F1CC75;
        }

        .container {
            flex-grow: 1;
            margin: 0 auto;
            position: relative;
            width: auto
        }

        .card {
            background-color: #fff;
            border-radius: .50rem;
            box-shadow: 0 .5em 1em -.125em rgba(10, 10, 10, .1), 0 0 0 1px rgba(10, 10, 10, .02);
            color: #4a4a4a;
            max-width: 100%;
            overflow: hidden;
            position: relative;
            
        }

        .content {
            margin: 0;
            font-weight: 400;
            font-size: 18px;
            color: black;
            text-align: justify;
            padding: em;
        }

        .card-content {
            padding: 3rem;
        }

        #siswa {
        border-collapse: collapse;
        width: 100%;
        }

        #siswa td, #siswa th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
        }

        #siswa tr:nth-child(even){background-color: #f2f2f2;}

        #siswa tr:hover {background-color: #ddd;}

        #siswa th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #AC8220;
        color: white;
        }
        
    </style>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <div class="container">
        <div class="card">
            <div class="card-content">
              <div class="content">
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>
    
    <table border="1" id="siswa">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
    </div>
    </div>
    </div>
    </body>
</html>