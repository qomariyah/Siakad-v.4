<?php
//file proses cetak laporan
    
    // memanggil file library phpjasperxml
    include_once('library/phpjasperxml/class/tcpdf/tcpdf.php');
    include_once("library/phpjasperxml/class/PHPJasperXML.inc.php");
    
    // sintak untuk koneksi database
    $server_db="localhost";
    $user_db="root";
    $pass_db="";
    $nama_db="dbsiakad_161530018";

    // menggunakan file library
    $PHPJasperXML = new PHPJasperXML();
    
    // memanggil file report/laporan yg sudah dibuat
    $PHPJasperXML->load_xml_file("report/rpMahasiswa1.jrxml");
    // cek data koneksi database
    $PHPJasperXML->transferDBtoArray($server_db, $user_db, $pass_db,$nama_db);
    
    // setting standar halaman
    $PHPJasperXML->outpage("I");
    //page output method I:standard output  D:Download file


?>