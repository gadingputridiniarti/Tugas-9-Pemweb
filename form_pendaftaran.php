<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    $error_tgl ="";
    // Data Peserta 
    $error_jp = ""; // jenis pendaftar
    $error_tglmsk = ""; // tgl masuk sekolah
    $error_nis = ""; // nomor induk siswa
    $error_npu = ""; // nomor peserta ujian
    $error_paud = ""; // 2 choice Y/N
    $error_tk =  ""; // 2 choices Y/N
    $error_skhun = ""; // NOMOR Seri SKHUN Sebelumnya
    $error_ijazah = ""; // Nomor Seri ijazah sebelumnya
    $error_hobi = ""; // hobi 
    $error_cita = ""; // 
    // Data Pribadi
    $error_nama = "";
    $error_jk = "";
    $error_nisn = "";
    $error_nik = "";
    $error_tl = ""; // tempat lahir
    $error_tgll = "";
    $error_agama = "";
    $error_bk = ""; // berkebutuhan khusus
    $error_jalan = "";
    $error_rt = "";
    $error_rw = "";
    $error_dusun = "";
    $error_desa = ""; //nama kelurahan
    $error_kecamatan = "";
    $error_kodepos = "";
    $error_tinggal = "";
    $error_transportasi = "";
    $error_nohp = "";
    $error_notelp = "";
    $error_email = "";
    $error_kps = "";
    $error_nokps ="";
    $error_kwn = ""; // kewarganegaraan
    $error_negara = "";

    $tgl = date('Y-m-d');
    $jp = "";
    $tglmsk = "";
    $nis = "";
    $npu = "";
    $paud = "";
    $tk = "";
    $skhun = "";
    $ijazah = "";
    $hobi = "";
    $cita = "";
    $nama = "";
    $jk  = "";
    $nisn = "";
    $nik = "";
    $tl = "";
    $tgll = "";
    $agama = "";
    $bk = "";
    $jalan = "";
    $rt = "";
    $rw = "";
    $dusun = "";
    $desa = "";
    $kecamatan = "";
    $kodepos = "";
    $tinggal = "";
    $transportasi = "";
    $nohp = "";
    $notelp = "";
    $email = "";
    $kps = "";
    $nokps ="";
    $kwn = "";
    $negara ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["jp"]))
        {
            $error_jp="Tidak boleh kosong";
        }
        else
        {
            $jp = cek_input($_POST["jp"]);
        }
        if (empty($_POST["tglmsk"]))
        {
            $error_tglmsk="Tidak boleh kosong";
        }
        else
        {
            $tglmsk = cek_input($_POST["tglmsk"]);
        }
        if (empty($_POST["nis"]))
        {
            $error_nis = "NIS tidak boleh kosong";
        }
        else
        {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis))
            {
                $error_nis = 'Nomor NIS hanya boleh angka';
            }
        }
        if (empty($_POST["npu"]))
        {
            $error_npu = "Nomor Ujian tidak boleh kosong";
        }
        else
        {
            $npu = cek_input($_POST["npu"]);
            if (!is_numeric($npu))
            {
                $error_npu = 'Nomor Ujian hanya boleh angka';
            }
        }
        if (empty($_POST["paud"]))
        {
            $error_paud="Tidak boleh kosong";
        }
        else
        {
            $paud = cek_input($_POST["paud"]);
        }
        if (empty($_POST["tk"]))
        {
            $error_tk="Tidak boleh kosong";
        }
        else
        {
            $tk = cek_input($_POST["tk"]);
        }
        if (empty($_POST["skhun"]))
        {
            $error_skhun = "Nomor SKHUN tidak boleh kosong";
        }
        else
        {
            $skhun = cek_input($_POST["skhun"]);
            if (!is_numeric($skhun))
            {
                $error_skhun = 'Nomor SKHUN hanya boleh angka';
            }
        }
        if (empty($_POST["ijazah"]))
        {
            $error_ijazah = "Nomor Ijazah tidak boleh kosong";
        }
        else
        {
            $ijazah = cek_input($_POST["ijazah"]);
            if (!is_numeric($ijazah))
            {
                $error_ijazah = 'Nomor Ijazah hanya boleh angka';
            }
        }
        if (empty($_POST["hobi"]))
        {
            $error_hobi="Tidak boleh kosong";
        }
        else
        {
            $hobi = cek_input($_POST["hobi"]);
        }
        if (empty($_POST["cita"]))
        {
            $error_cita="Tidak boleh kosong";
        }
        else
        {
            $cita = cek_input($_POST["cita"]);
        }
        if (empty($_POST["nama"]))
        {
          $error_nama = "Nama tidak boleh kosong";
        }
        else
        {
          $nama = cek_input($_POST["nama"]);
          if (!preg_match("/^[a-zA-Z]*$/",$nama))
          {
              $namaErr = "Inputan Hanya boleh huruf dan spasi";
          }
        }
        if (empty($_POST["jk"]))
        {
            $error_jk="Tidak boleh kosong";
        }
        else
        {
            $jk = cek_input($_POST["jk"]);
        }
        if (empty($_POST["nisn"]))
        {
            $error_nisn = "Nomor NISN tidak boleh kosong";
        }
        else
        {
            $nisn = cek_input($_POST["nisn"]);
            if (!is_numeric($nisn))
            {
                $error_skhun = 'Nomor NISN hanya boleh angka';
            }
        }
        if (empty($_POST["nik"]))
        {
            $error_nik = "Nomor NIK tidak boleh kosong";
        }
        else
        {
            $nik = cek_input($_POST["nik"]);
            if (!is_numeric($nik))
            {
                $error_nik = 'Nomor NIK hanya boleh angka';
            }
        }
        if (empty($_POST["tl"]))
        {
            $error_tl="Tidak boleh kosong";
        }
        else
        {
            $tl = cek_input($_POST["tl"]);
        }
        if (empty($_POST["tgll"]))
        {
            $error_tgll="Tidak boleh kosong";
        }
        else
        {
            $tgll = cek_input($_POST["tgll"]);
        }
        if (empty($_POST["agama"]))
        {
            $error_agama="Tidak boleh kosong";
        }
        else
        {
            $agama = cek_input($_POST["agama"]);
        }
        if (empty($_POST["bk"]))
        {
            $error_bk="Tidak boleh kosong";
        }
        else
        {
            $bk = cek_input($_POST["bk"]);
        }
        if (empty($_POST["jalan"]))
        {
            $error_jalan="Tidak boleh kosong";
        }
        else
        {
            $jalan = cek_input($_POST["jalan"]);
        }
        if (empty($_POST["rt"]))
        {
            $error_rt="Tidak boleh kosong";
        }
        else
        {
            $rt = cek_input($_POST["rt"]);
        }
        if (empty($_POST["rw"]))
        {
            $error_rw="Tidak boleh kosong";
        }
        else
        {
            $rw = cek_input($_POST["rw"]);
        }
        if (empty($_POST["dusun"]))
        {
            $error_dusun="Tidak boleh kosong";
        }
        else
        {
            $dusun = cek_input($_POST["dusun"]);
        }
        if (empty($_POST["desa"]))
        {
            $error_desa="Tidak boleh kosong";
        }
        else
        {
            $desa = cek_input($_POST["desa"]);
        }
        if (empty($_POST["kecamatan"]))
        {
            $error_kecamatan="Tidak boleh kosong";
        }
        else
        {
            $kecamatan = cek_input($_POST["kecamatan"]);
        }
        if (empty($_POST["kodepos"]))
        {
            $error_kodepos = "Nomor Kodepos tidak boleh kosong";
        }
        else
        {
            $kodepos = cek_input($_POST["kodepos"]);
            if (!is_numeric($kodepos))
            {
                $error_kodepos = 'Kodepos hanya boleh angka';
            }
        }
        if (empty($_POST["tinggal"]))
        {
            $error_tinggal="Tidak boleh kosong";
        }
        else
        {
            $tinggal = cek_input($_POST["tinggal"]);
        }
        if (empty($_POST["transportasi"]))
        {
            $error_transportasi="Tidak boleh kosong";
        }
        else
        {
            $transportasi = cek_input($_POST["transportasi"]);
        }
        if (empty($_POST["nohp"]))
        {
            $error_nohp = "Nomor HP tidak boleh kosong";
        }
        else
        {
            $nohp = cek_input($_POST["nohp"]);
            if (!is_numeric($nohp))
            {
                $error_nohp = 'Nomor NP hanya boleh angka';
            }
        }
        if (empty($_POST["notelp"]))
        {
            $error_notelp = "Nomor Telepon tidak boleh kosong";
        }
        else
        {
            $notelp = cek_input($_POST["notelp"]);
            if (!is_numeric($notelp))
            {
                $error_notelp = 'Nomor Telepon hanya boleh angka';
            }
        }
        if (empty($_POST["email"]))
        {
          $error_email = "Email tidak boleh kosong";
        }
        else 
        {
          $email = cek_input($_POST["email"]);
          if (!filter_var($email, FILTER_VALIDATE_EMAIL))
          {
              $error_email = "Format email Invalid";
          }
        }
        if (empty($_POST["kps"]))
        {
            $error_kps="Tidak boleh kosong";
        }
        else
        {
            $kps = cek_input($_POST["kps"]);
        }
        if (empty($_POST["nokps"]))
        {
            $error_nokps="Tidak boleh kosong";
        }
        else
        {
            $nokps = cek_input($_POST["nokps"]);
        }
        if (empty($_POST["kwn"]))
        {
            $error_kwn="Tidak boleh kosong";
        }
        else
        {
            $kwn = cek_input($_POST["kwn"]);
        }
        if (empty($_POST["negara"]))
        {
          $error_negara = "Negara tidak boleh kosong";
        }
        else
        {
          $negara = cek_input($_POST["negara"]);
          if (!preg_match("/^[a-zA-Z]*$/",$negara))
          {
              $error_negara = "Inputan Hanya boleh huruf dan spasi";
          }
        }
        // Cek Konektivitas
        $host = "localhost";
        $username = "root";
        $password = "";
        $namadb = "data_siswa";
        try {
            $conn = mysqli_connect($host, $username, $password, $namadb) or die("Koneksi gagal dibangun");
            $sql = "INSERT INTO siswa (tgl, jp, tglmsk, nis, npu, paud, tk, skhun, ijazah, hobi, cita, nama, jk, nisn, nik, tl, tgll, agama, bk, jalan, rt, rw, dusun, desa, kecamatan, kodepos, tinggal, transportasi, nohp, notelp, email, kps, kwn, nokps, negara) 
                    VALUES ('$tgl', '$jp', '$tglmsk', '$nis', '$npu', '$paud', '$tk', '$skhun', '$ijazah', '$hobi', '$cita', '$nama', '$jk', '$nisn', '$nik', '$tl', '$tgll', '$agama', '$bk', '$jalan', '$rt', '$rw', '$dusun', '$desa', '$kecamatan', '$kodepos', '$tinggal', '$transportasi', '$nohp', '$notelp', '$email', '$kps', '$kwn', '$nokps', '$negara')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo '<script>alert("Data berhasil disimpan");</script>';

            // Alihkan ke halaman selanjutnya
            header("Location: halaman_utama.php");
            exit();
        } catch (Exception $e) {
            echo $e ;
        }
    }

    function cek_input($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <h1 align="center">FORMULIR PESERTA DIDIK</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="post">
                        <!-- Header 1 -->
                        <div class="p-3 mb-2 bg-dark text-white">REGISTRASI PESERTA DIDIK</div>

                        <!-- Jenis Daftar Radio Button -->
                        <p> <b> Tanggal: <?php echo $tgl = date("Y-m-d"); ?> </b></p>
                        <div class="form-group row">
                            <label for="jp" class="col-sm-3 col-form-label">Jenis Daftar</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="baru" name="jp" class="custom-control-input" value="Siswa Baru">
                                    <label class="custom-control-label" for="baru">Siswa Baru</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="pindahan" name="jp" class="custom-control-input" value="Pindahan">
                                    <label class="custom-control-label" for="pindahan">Pindahan</label>
                                </div>
                                <span class="warning"><?php echo $error_jp; ?></span>
                            </div>

                        </div>

                        <!-- Tanggal Masuk -->
                        <div class="form-group row">
                            <label for="tglmsk" class="col-sm-3 col-form-label">Tanggal Masuk Sekolah</label>
                            <div class="col-sm-5">
                                <input type="date" name="tglmsk" class="form-control" <?php echo ($error_tglmsk != "" ? "is-invalid" : ""); ?> id="tglmsk" value="<?php echo $tglmsk; ?>">
                            </div>
                            <span class="warning"><?php echo $error_tglmsk; ?></span>
                        </div>

                        <!-- NIS -->
                        <div class="form-group row">
                            <label for="nis" class="col-sm-3 col-form-label">NIS</label>
                            <div class="col-sm-5">
                                <input type="text" name="nis" class="form-control" <?php echo ($error_nis != "" ? "is-invalid" : ""); ?> id="nis" placeholder="Silahkan isi NIS" value="<?php echo $nis; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nis; ?></span>
                        </div>

                        <!-- Nomor Peserta -->
                        <div class="form-group row">
                            <label for="npu" class="col-sm-3 col-form-label">Nomor Peserta Ujian</label>
                            <div class="col-sm-5">
                                <input type="text" name="npu" class="form-control" <?php echo ($error_npu != "" ? "is-invalid" : ""); ?> id="npu" placeholder="Silahkan isi Nomor Peserta Ujian" value="<?php echo $npu; ?>">

                            </div>
                            <span class="warning"><?php echo $error_npu; ?></span>
                        </div>

                        <!-- PAUD -->
                        <div class="form-group row">
                            <label for="paud" class="col-sm-3 col-form-label">Apakah pernah PAUD</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <input type="radio" name="paud" value="Ya"> Ya
                                &nbsp;&nbsp;
                                <input type="radio" name="paud" value="Tidak"> Tidak
                                <br>
                            </div>
                            <span class="warning"><?php echo $error_paud; ?></span>
                        </div>

                        <!-- TK -->
                        <div class="form-group row">
                            <label for="paud" class="col-sm-3 col-form-label">Apakah pernah TK</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <input type="radio" name="tk" value="Ya"> Ya
                                &nbsp;&nbsp;
                                <input type="radio" name="tk" value="Tidak"> Tidak
                                <br>
                            </div>
                            <span class="warning"><?php echo $error_tk; ?></span>
                        </div>

                        <!-- SKHUN -->
                        <div class="form-group row">
                            <label for="skhun" class="col-sm-3 col-form-label">No. Seri SKHUN</label>
                            <div class="col-sm-5">
                                <input type="text" name="skhun" class="form-control" <?php echo ($error_skhun != "" ? "is-invalid" : ""); ?> id="skhun" placeholder="Silahkan 16 Digit SKHUN SD" pattern="[0-9]{16}" value="<?php echo $skhun; ?>">
                            </div>
                            <span class="warning"><?php echo $error_skhun; ?></span>
                        </div>

                        <!-- Ijazah -->
                        <div class="form-group row">
                            <label for="ijazah" class="col-sm-3 col-form-label">No. Seri Ijazah</label>
                            <div class="col-sm-5">
                                <input type="text" name="ijazah" class="form-control" <?php echo ($error_ijazah != "" ? "is-invalid" : ""); ?> id="ijazah" placeholder="Silahkan 16 Digit Ijazah SD" pattern="[0-9]{16}" value="<?php echo $ijazah; ?>">
                            </div>
                            <span class="warning"><?php echo $error_ijazah; ?></span>
                        </div>

                        <!-- Hobi -->
                        <div class="form-group row">
                            <label for="hobi" class="col-sm-3 col-form-label">Hobi</label>
                            <select id="hobi" name="hobi" class="form-control col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="">-Pilih Hobi</option>
                                <option value="Olah raga">Olah Raga</option>
                                <option value="Kesenian">Kesenian</option>
                                <option value="Membaca">Membaca</option>
                                <option value="Menulis">Menulis</option>
                                <option value="Traveling">Traveling</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <br>
                            <span class="warning"><?php echo $error_hobi; ?></span>
                        </div>

                        <!-- Cita -->
                        <div class="form-group row">
                            <label for="cita" class="col-sm-3 col-form-label">Cita-cita</label>
                            <select id="cita" name="cita" class="form-control col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="">-Pilih Cita-Cita</option>
                                <option value="PNS">PNS</option>
                                <option value="TNI/POLRI">TNI / POLRI</option>
                                <option value="Guru/Dosen">Guru / Dosen</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Politikus">Politikus</option>
                                <option value="Seni/Lukis">Seni / Lukis / Artis</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <br>
                            <span class="warning"><?php echo $error_cita; ?></span>
                        </div>

                        <!-- Header 2 -->
                        <div class="p-3 mb-2 bg-dark text-white">REGISTRASI PESERTA DIDIK</div>
                        <br>

                        <!-- Nama -->
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-5">
                                <input type="text" name="nama" class="form-control" <?php echo ($error_nama != "" ? "is-invalid" : ""); ?>" id="nama" placeholder="Silahkan isi Nama Anda" value="<?php echo $nama; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nama; ?></span>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="form-group row">
                            <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="laki-laki" name="jk" class="custom-control-input" value="Laki-laki">
                                    <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="perempuan" name="jk" class="custom-control-input" value="Perempuan">
                                    <label class="custom-control-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                            <span class="warning"><?php echo $error_jk; ?></span>
                        </div>

                        <!-- NISN -->
                        <div class="form-group row">
                            <label for="nisn" class="col-sm-3 col-form-label">NISN</label>
                            <div class="col-sm-5">
                                <input type="text" name="nisn" class="form-control" <?php echo ($error_nisn != "" ? "is-invalid" : ""); ?> id="nisn" placeholder="Silahkan isi NISN Anda" value="<?php echo $nisn; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nisn; ?></span>
                        </div>

                        <!-- NIK -->
                        <div class="form-group row">
                            <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-5">
                                <input type="text" name="nik" class="form-control" <?php echo ($error_nik != "" ? "is-invalid" : ""); ?> id="nik" placeholder="Silahkan isi NIK Anda" value="<?php echo $nik; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nik; ?></span>
                        </div>

                        <!-- Tempat Lahir -->
                        <div class="form-group row">
                            <label for="tl" class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-5">
                                <input type="text" name="tl" class="form-control" <?php echo ($error_tl != "" ? "is-invalid" : ""); ?> id="tl" placeholder="Silahkan isi Tempat Lahir Anda" value="<?php echo $tl; ?>">
                            </div>
                            <span class="warning"><?php echo $error_tl; ?></span>
                        </div>

                        <!-- Tanggal Lahir (Date) -->
                        <div class="form-group row">
                            <label for="tgll" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-5">
                                <input type="date" name="tgll" class="form-control" <?php echo ($error_tgll != "" ? "is-invalid" : ""); ?> id="tgll" placeholder="Tanggal Lahir" value="<?php echo $tgll; ?>">
                            </div>
                            <span class="warning"><?php echo $error_tgll; ?></span>
                        </div>

                        <!-- Agama (Dropdown) -->
                        <div class="form-group row">
                            <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                            <select name="agama" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                               <option value="">-Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen/Protestan">Kristen / Protestan</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khong Hu Chu">Khong Hu Chu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <span class="warning"><?php echo $error_agama; ?></span>
                        </div>

                        <!-- Khusus (Dropdown) -->
                        <div class="form-group row">
                            <label for="bk" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
                            <select name="bk" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="">-Berebutuhan Khusus ?</option>
                                <option value="Tidak">Tidak</option>
                                <option value="Netra">Netra</option>
                                <option value="Rungu">Rungu</option>
                                <option value="Grahita Ringan">Grahita Ringan</option>
                                <option value="Grahita Sedang">Grahita Sedang</option>
                                <option value="Daksa Ringan">Daksa Ringan</option>
                                <option value="Daksa Sedang">Daksa Sedang</option>
                                <option value="Laras">Laras</option>
                                <option value="Wicara">Wicara</option>
                                <option value="Tuna Ganda">Tuna Ganda</option>
                                <option value="Hiper Aktif">Hiper Aktif</option>
                                <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                <option value="Bakat Istimewa">Bakat Istimewa</option>
                                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                <option value="Narkoba">Narkoba</option>
                                <option value="Indigo">Indigo</option>
                                <option value="Down Syndrome">Down Syndrome</option>
                                <option value="Autis">Autis</option>
                            </select>
                            <span class="warning"><?php echo $error_bk; ?></span>
                        </div>

                        <!-- Alamat -->
                        <div class="form-group row">
                            <label for="jalan" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-5">
                                <textarea name="jalan" class="form-control" <?php echo ($error_jalan != "" ? "is-invalid" : ""); ?> id="jalan" placeholder="Silahkan Isi Alamat Rumah Anda" value="<?php echo $jalan; ?>"></textarea>
                            </div>
                            <span class="warning"><?php echo $error_jalan; ?></span>
                        </div>

                        <!-- RT -->
                        <div class="form-group row">
                            <label for="rt" class="col-sm-3 col-form-label">RT</label>
                            <div class="col-sm-5">
                                <input type="text" name="rt" class="form-control" <?php echo ($error_rt != "" ? "is-invalid" : ""); ?> id="rt" placeholder="RT" value="<?php echo $rt; ?>">
                            </div>
                            <span class="warning"><?php echo $error_rt; ?></span>
                        </div>

                        <!-- RW -->
                        <div class="form-group row">
                            <label for="rw" class="col-sm-3 col-form-label">RW</label>
                            <div class="col-sm-5">
                                <input type="text" name="rw" class="form-control" <?php echo ($error_rw != "" ? "is-invalid" : ""); ?> id="rw" placeholder="RW" value="<?php echo $rw; ?>">
                            </div>
                            <span class="warning"><?php echo $error_rw; ?></span>
                        </div>

                        <!-- Dusun -->
                        <div class="form-group row">
                            <label for="dusun" class="col-sm-3 col-form-label">Dusun</label>
                            <div class="col-sm-5">
                                <input type="text" name="dusun" class="form-control" <?php echo ($error_dusun != "" ? "is-invalid" : ""); ?> id="dusun" placeholder="Nama Dusun" value="<?php echo $dusun; ?>">
                            </div>
                            <span class="warning"><?php echo $error_dusun; ?></span>
                        </div>

                        <!-- Kelurahan -->
                        <div class="form-group row">
                            <label for="desa" class="col-sm-3 col-form-label">Nama Kelurahan / Desa</label>
                            <div class="col-sm-5">
                                <input type="text" name="desa" class="form-control" <?php echo ($error_desa != "" ? "is-invalid" : ""); ?> id="desa" placeholder="Kelurahan/Desa" value="<?php echo $desa; ?>">
                            </div>
                            <span class="warning"><?php echo $error_desa; ?></span>
                        </div>

                        <!-- Kecamatan -->
                        <div class="form-group row">
                            <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                            <div class="col-sm-5">
                                <input type="text" name="kecamatan" class="form-control" <?php echo ($error_kecamatan != "" ? "is-invalid" : ""); ?> id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>">
                            </div>
                            <span class="warning"><?php echo $error_kecamatan; ?></span>
                        </div>

                        <!-- Kode pos -->
                        <div class="form-group row">
                            <label for="kodepos" class="col-sm-3 col-form-label">Kode Pos</label>
                            <div class="col-sm-5">
                                <input type="text" name="kodepos" class="form-control" <?php echo ($error_kodepos != "" ? "is-invalid" : ""); ?> id="kodepos" placeholder="Kodepos" value="<?php echo $kodepos; ?>">
                            </div>
                            <span class="warning"><?php echo $error_kodepos; ?></span>
                        </div>

                        <!-- Tempat Tinggal (Dropdown) -->
                        <div class="form-group row">
                            <label for="tinggal" class="col-sm-3 col-form-label">Tempat Tinggal</label>
                            <select name="tinggal" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="">-Pilih tempat tinggal</option>
                                <option value="Orang Tua">Bersama Orang Tua</option>
                                <option value="Wali">Wali</option>
                                <option value="Kos">Kos</option>
                                <option value="Asrama">Asrama</option>
                                <option value="Panti Asuhan">Panti Asuhan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <span class="warning"><?php echo $error_tinggal; ?></span>
                        </div>

                        <!-- Transportasi (Dropdown) -->
                        <div class="form-group row">
                            <label for="transportasi" class="col-sm-3 col-form-label">Moda Transportasi</label>
                            <select name="transportasi" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="">-Pilih Transportasi</option>
                                <option value="Jalan Kaki">Jalan Kaki</option>
                                <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                <option value="Kendaraan Umum">Kendaraan Umum</option>
                                <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                                <option value="Kereta Api">Kereta Api</option>
                                <option value="Ojek">Ojek</option>
                                <option value="Andong / Bendi / Becak">Andong / Bendi / Becak</option>
                                <option value="Perahu Penyebrangan">Perahu Penyebrangan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <span class="warning"><?php echo $error_transportasi; ?></span>
                        </div>

                        <!-- Nomor HP -->
                        <div class="form-group row">
                            <label for="nohp" class="col-sm-3 col-form-label">Nomor HP</label>
                            <div class="col-sm-5">
                                <input type="text" name="nohp" class="form-control" <?php echo ($error_nohp != "" ? "is-invalid" : ""); ?> id="nohp" placeholder="No HP" value="<?php echo $nohp; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nohp; ?></span>
                        </div>

                        <!-- Nomor Telp -->
                        <div class="form-group row">
                            <label for="notelp" class="col-sm-3 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-5">
                                <input type="text" name="notelp" class="form-control" <?php echo ($error_notelp != "" ? "is-invalid" : ""); ?> id="notelp" placeholder="Nomor Telepon" value="<?php echo $notelp; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nohp; ?></span>
                        </div>

                        <!-- Email -->
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-5">
                                <input type="text" name="email" class="form-control" <?php echo ($error_email != "" ? "is-invalid" : ""); ?>" id="email" placeholder="Email" value="<?php echo $email; ?>">
                            </div>
                            <span class="warning"><?php echo $error_email; ?></span>
                        </div>
                        

                        <!-- KPS -->
                        <div class="form-group row">
                            <label for="kps" class="col-sm-3 col-form-label">Penerima KPS/PKH/KIP</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="Ya" name="kps" class="custom-control-input" value="Ya">
                                    <label class="custom-control-label" for="Ya">Ya</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="Tidak" name="kps" class="custom-control-input" value="Tidak">
                                    <label class="custom-control-label" for="Tidak">Tidak</label>
                                </div>
                            </div>
                            <span class="warning"><?php echo $error_kps; ?></span>
                        </div>

                        <!-- NO KPS -->
                        <div class="form-group row">
                            <label for="nokps" class="col-sm-3 col-form-label">Nomor KPS/PKH/KIP</label>
                            <div class="col-sm-5">
                                <input type="text" name="nokps" class="form-control" <?php echo ($error_nokps != "" ? "is-invalid" : ""); ?> id="notelp" placeholder="Nomor KPS/PKH/KIP" value="<?php echo $nokps; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nokps; ?></span>
                        </div>

                        <!-- KWN -->
                        <div class="form-group row">
                            <label for="kwn" class="col-sm-3 col-form-label">Kewarganegaraan</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="Indonesia (WNI)" name="kwn" class="custom-control-input" value="Indonesia (WNI)">
                                    <label class="custom-control-label" for="Indonesia (WNI)">Indonesia (WNI)</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="Asing (WNA)" name="kwn" class="custom-control-input" value="Asing (WNA)">
                                    <label class="custom-control-label" for="Asing (WNA)">Asing (WNA)</label>
                                </div>
                            </div>
                            <span class="warning"><?php echo $error_kwn; ?></span>
                        </div>
                        <!-- NEGARA -->

                        <div class="form-group row">
                            <label for="negara" class="col-sm-3 col-form-label">Nama Negara</label>
                            <div class="col-sm-5">
                                <input type="text" name="negara" class="form-control" <?php echo ($error_negara != "" ? "is-invalid" : ""); ?> id="negara" placeholder="negara" value="<?php echo $negara; ?>">
                            </div>
                            <span class="warning"><?php echo $error_negara; ?></span>
                        </div>

                        <!-- Button Sign In -->
                        <div class="form-group row">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>