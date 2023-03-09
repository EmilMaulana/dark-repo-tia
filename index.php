<!DOCTYPE html>
<html>
    <head>
        <title>Operasi File</title>
    <head>

    <body>
        <form method="post" action="">
            <label>NIK</label>
            <input type="text" name="nis"><br>
            <label for="nama">Nama</label>
            <input type="text" name="nama"><br>
            <label for="nama">Kelas</label>
            <input type="text" name="kelas"><br>
            <input type= "submit" value="simpan" name="simpan">
</form>
</body>
</html>
<?php
if (isset($_POST['simpan'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

$namafile = "hasilinputTia.txt";

$bukafile = fopen($namafile, 'a');
$data = "NIS : ".$nis."<Nama : ".$nama." Kelas :".$kelas."";
$input = fwrite($bukafile, $data);
$bukabaca = fopen($namafile, 'r');
$baca = fread($bukabaca, filesize ($namafile));
$tutup = fclose($bukafile);


echo "<hr>Isi File : <br>" .$baca;
}
?>

 <title>Data Siswa</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card bg-white shadow">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">NIS</label>
                        <input type="text" name="nis">
                    </div>
                    <br>
                    <label for="">Nama</label>
                    <input type="text" name="nama">
                    <br>
                    <label for="">Kelas</label>
                    <input type="text" name="kelas">
                    <br>
                    <input type="submit" name="simpan" value="simpan">
                    <!-- <button type="submit" name="simpan">Simpan</button> -->
                </form>
            </div>
        </div>
    </div>
</div>


<?php

if(isset($_POST['simpan'])){
    $file = "data.txt";
    $buka = fopen($file, 'w');
    fwrite($buka, $_POST['nis']);
    fwrite($buka, $_POST['nama']);
    fwrite($buka, $_POST['kelas']);
    $buka = fopen($file, 'r');
    $hasil = fread($buka, filesize($file));
    fclose($buka);

    echo "Isi Data " .$hasil;
}
?>
