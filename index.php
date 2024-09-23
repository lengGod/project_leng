<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Leng</title>
    <style>
        /* ini style yang saya gunakan */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        #main-header {
            background-color: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77aaff 3px solid;
        }
        #main-header h1 {
            text-align: center;
            text-transform: uppercase;
            margin: 0;
            font-size: 24px;
        }
        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header id="main-header">
        <div class="container">
            <h1>Biodata Saya😊</h1>
        </div>
    </header>
    <div class="container">
        <table>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
            </tr>


            <?php
            // ini program untuk biodata saya
            $mahasiswa = [
                ["nama" => "Galang Samudro", "npm" => "22313013", "kelas" => "TI 22 A"]
            ];

            // ini untuk output atau menampilkan biodata saya
            foreach ($mahasiswa as $mhs) {
                echo "<tr><td>{$mhs['nama']}</td><td>{$mhs['npm']}</td><td>{$mhs['kelas']}</td></tr>";
            }
            ?>

            
        </table>
    </div>
</body>
</html>
