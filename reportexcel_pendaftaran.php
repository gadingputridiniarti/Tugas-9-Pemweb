<?php 
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Nomor');
$sheet->setCellValue('B1', 'Tanggal');
$sheet->setCellValue('C1', 'Jenis Pendaftaran');
$sheet->setCellValue('D1', 'Tanggal Masuk Sekolah');
$sheet->setCellValue('E1', 'NIS');
$sheet->setCellValue('F1', 'Nomor Peserta Ujian');
$sheet->setCellValue('G1', 'Apakah pernah PAUD');
$sheet->setCellValue('H1', 'Apakah pernah TK');
$sheet->setCellValue('I1', 'No Seri SKHUN Sebelumnya');
$sheet->setCellValue('J1', 'No Seri Ijazah Sebelumnya');
$sheet->setCellValue('K1', 'Hobi');
$sheet->setCellValue('L1', 'Cita-cita');
$sheet->setCellValue('M1', 'Nama Lengkap');
$sheet->setCellValue('N1', 'Jenis kelamin');
$sheet->setCellValue('O1', 'NISN');
$sheet->setCellValue('P1', 'NIK');
$sheet->setCellValue('Q1', 'Tempat Lahir');
$sheet->setCellValue('R1', 'Tanggal Lahir');
$sheet->setCellValue('S1', 'Agama');
$sheet->setCellValue('T1', 'Berkebutuhan Khusus');
$sheet->setCellValue('U1', 'Alamat Jalan');
$sheet->setCellValue('V1', 'RT');
$sheet->setCellValue('W1', 'RW');
$sheet->setCellValue('X1', 'Nama Dusun');
$sheet->setCellValue('Y1', 'Nama Kelurahan/Desa');
$sheet->setCellValue('Z1', 'Kecamatan');
$sheet->setCellValue('AA1', 'Kode Pos');
$sheet->setCellValue('AB1', 'Tempat Tinggal');
$sheet->setCellValue('AC1', 'Moda Transportasi');
$sheet->setCellValue('AD1', 'Nomor HP');
$sheet->setCellValue('AE1', 'Nomor Telepon');
$sheet->setCellValue('AF1', 'E-mail Pribadi');
$sheet->setCellValue('AG1', 'Penerima KPS/PKH/KIP');
$sheet->setCellValue('AH1', 'No KPS/KKS/PKH/KIP');
$sheet->setCellValue('AI1', 'Kewarganegaraan');
$sheet->setCellValue('AJ1', 'Nama Negara');

$query = mysqli_query($koneksi,"select * from siswa");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['tgl']);
    $sheet->setCellValue('C'.$i, $row['jp']);
    $sheet->setCellValue('D'.$i, $row['tglmsk']);
    $sheet->setCellValue('E'.$i, $row['nis']);
    $sheet->setCellValue('F'.$i, $row['npu']);
    $sheet->setCellValue('G'.$i, $row['paud']);
    $sheet->setCellValue('H'.$i, $row['tk']);
    $sheet->setCellValue('I'.$i, $row['skhun']);
    $sheet->setCellValue('J'.$i, $row['ijazah']);
    $sheet->setCellValue('K'.$i, $row['hobi']);
    $sheet->setCellValue('L'.$i, $row['cita']);
    $sheet->setCellValue('M'.$i, $row['nama']);
    $sheet->setCellValue('N'.$i, $row['jk']);
    $sheet->setCellValue('O'.$i, $row['nisn']);
    $sheet->setCellValue('P'.$i, $row['nik']);
    $sheet->setCellValue('Q'.$i, $row['tl']);
    $sheet->setCellValue('R'.$i, $row['tgll']);
    $sheet->setCellValue('S'.$i, $row['agama']);
    $sheet->setCellValue('T'.$i, $row['bk']);
    $sheet->setCellValue('U'.$i, $row['jalan']);
    $sheet->setCellValue('V'.$i, $row['rt']);
    $sheet->setCellValue('W'.$i, $row['rw']);
    $sheet->setCellValue('X'.$i, $row['dusun']);
    $sheet->setCellValue('Y'.$i, $row['desa']);
    $sheet->setCellValue('Z'.$i, $row['kecamatan']);
    $sheet->setCellValue('AA'.$i, $row['kodepos']);
    $sheet->setCellValue('AB'.$i, $row['tinggal']);
    $sheet->setCellValue('AC'.$i, $row['transportasi']);
    $sheet->setCellValue('AD'.$i, $row['nohp']);
    $sheet->setCellValue('AE'.$i, $row['notelp']);
    $sheet->setCellValue('AF'.$i, $row['email']);
    $sheet->setCellValue('AG'.$i, $row['kps']);
    $sheet->setCellValue('AH'.$i, $row['nokps']);
    $sheet->setCellValue('AI'.$i, $row['kwn']);
    $sheet->setCellValue('AJ'.$i, $row['negara']);
    $i++;
}

$styleArray = [
            'borders'=> [
                'allBorders'=> [
                    'borderStyle'=> \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
$i = $i - 1;
$sheet->getStyle('A1:AJ'.$i)->applyFromArray($styleArray);


$writer = new Xlsx($spreadsheet);
$writer->save('Report Peserta Didik.xlsx');
?>