<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Hosea Ganteng ganteng banget</h3>
    <p>nama = {{ Auth::user()->name }}</p>
    <p>nim = {{ Auth::user()->nip }}</p>
    <p>Angkatan = {{ $angkatan }}</p>
    <p>Nama Dosen Wali = {{ $ndw }}</p>
    <p>NIDN = {{ $nidn }}</p>
    
</body>
</html>
