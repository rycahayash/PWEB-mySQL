<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        a {
        color: #F1CC75;
        text-decoration: none;
        }

        a:hover {
        opacity: 0.5;
        color: white;
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

        h1 {
        text-transform: uppercase;
        margin: 0.5em 0;
        font-size: 70px;
        font-weight: bold;
        }

        h3 {
        text-transform: uppercase;
        font-weight: bold;
        font-size: 30px;
        }

        h4 {
        font-weight: bold;
        font-size: 30px;
        text-align: center;
        margin: 1em;
        color: #F1CC75;
        }

        main {
        max-width: 1000px;
        }

        .button {
            background: linear-gradient(180deg, #AC8220 0%, #5D430A 100%);
            border-radius: 100px;
            background-position: fixed;
            color: white;
            padding: 10px 25px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 20px;
            margin: 0.5em;
            max-width: 100%;
        }
        
        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        nav {
            background-position: center;
        }

        ul {
        list-style-type: none;
        background-position: center;
        }

        .status {
            color: white;
            text-align: center;
            padding: 3em;
        }

        footer {
        padding: 1em 1.5em;
        position: fixed;
        bottom: 0;
        width: 100%;
        color: white;
        text-align: center;
        }

        @media only screen and (max-width: 768px) {
        .course {
            display: block;
        }
        }

        @media only screen and (max-width: 576px) {
        .skills {
            display: block;
        }

        .skills .column {
            max-width: 100%;
        }

        }

    </style>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK Coding</h1>
    </header>

    <main>
    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php" class="button">Daftar Baru</a></li>
            <li><a href="list-siswa.php" class="button">Pendaftar</a></li>
        </ul>    
    </nav>

    <div class="status">
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
    </div>
    </main>

    <footer>
        <p>Created by: <a href="https://rycahaya-pweb.blogspot.com">Rycahaya Sri Hutomo</a> &copy2022 </p>
    </footer>

    </body>
</html>
