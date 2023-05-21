<?php
// Memanggil Koneksi pada file koneksidb.php
include 'koneksidb.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAM DATA SISWA</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
  background-color: #ccffff;
  margin: 3%;
}
.button-container {
  display: flex;
  justify-content: center;
  gap: 10px;
  margin-top: 10px;
}
.button {
  display: inline-block;
  background-color: #0077b3;
  border: none;
  color: white;
  text-align: center;
  font-size: 16px;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
  text-decoration: none;
}

.button:hover {
  background-color: #0077b3;
}

.button:active {
  background-color: #005266;
}
.form {
  max-width: 500px;
  padding: 15px 40px;
  margin: 0 auto;
  background-color: #faf6f4;
  margin-bottom: 25px;
}
.kotakform {
  font-size: 15px;
  width: 100%;
  height: auto;
  padding: 10px;
}

</style>
<body>
    <h1>DATA PENDAFTARAN SISWA</h1>
    <br>
    <a href="form_pendaftaran.php">
    <button class="button button">Input Data</button>
    </a>
    <a href="reportexcel_pendaftaran.php">
    <button class="button button">Cetak Excel</button>
    </a>
   
    <br>
    <br>
    <p>Data Peserta Didik :</p>
    <!-- Menampiilkan Data -->
    <table border="1" width="100%">
        <th>No.</th> 
        <th>Tanggal Pengisian</th>
        <th>Jenis Pendaftaran</th>
        <th>Tanggal Masuk</th>
        <th>NIS</th>
        <th>No Peserta Ujian</th>
        <th>Paud</th>
        <th>Tk</th>
        <th>No SKHUN</th>
        <th>No Ijazah</th>
        <th>Hobi</th>
        <th>Cita-Cita</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>NISN</th>
        <th>NIK</th>
        <th>Tempat Lahir</th>
        <th>Tgl Lahir</th>
        <th>Agama</th>
        <th>Berkebutuhankhusus</th>
        <th>Alamat</th>
        <th>RT</th>
        <th>RW</th>
        <th>Dusun</th>
        <th>Desa</th>
        <th>Kecamatan</th>
        <th>Kode Pos</th>
        <th>Tempat Tinggal</th>
        <th>Transportasi</th>
        <th>No HP</th>
        <th>No Telp</th>
        <th>Email</th>
        <th>kps</th>
        <th>No kps</th>
        <th>Kewarganegaraan</th>
        <th>Negara</th>
        <?php
    $siswa = mysqli_query($conn, "SELECT * from siswa") or die("Tampilan gagal");
    $no=1;
    foreach ($siswa as $row){
        echo "<tr>
            <th>$no</th>
            <th>".$row['tgl']."</th>
            <th>".$row['jp']."</th>
            <th>".$row['tglmsk']."</th>
            <th>".$row['nis']."</th>
            <th>".$row['npu']."</th>
            <th>".$row['paud']."</th>
            <th>".$row['tk']."</th>
            <th>".$row['skhun']."</th>
            <th>".$row['ijazah']."</th>
            <th>".$row['hobi']."</th>
            <th>".$row['cita']."</th>
            <th>".$row['nama']."</th>
            <th>".$row['jk']."</th>
            <th>".$row['nisn']."</th>
            <th>".$row['nik']."</th>
            <th>".$row['tl']."</th>
            <th>".$row['tgll']."</th>
            <th>".$row['agama']."</th>
            <th>".$row['bk']."</th>
            <th>".$row['jalan']."</th>
            <th>".$row['rt']."</th>
            <th>".$row['rw']."</th>
            <th>".$row['dusun']."</th>
            <th>".$row['desa']."</th>
            <th>".$row['kecamatan']."</th>
            <th>".$row['kodepos']."</th>
            <th>".$row['tinggal']."</th>
            <th>".$row['transportasi']."</th>
            <th>".$row['nohp']."</th>
            <th>".$row['notelp']."</th>
            <th>".$row['email']."</th>
            <th>".$row['kps']."</th>
            <th>".$row['nokps']."</th>
            <th>".$row['kwn']."</th>
            <th>".$row['negara']."</th>
            </tr>";
        $no++;
    }
    ?>
    </table>
    <p>Total Pendaftaran Peserta Didik : <?php echo mysqli_num_rows($siswa)?></p>
</body>
</html>