<?php
    include 'koneksi.php';
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $caption = $_POST['caption'];
        $iduser = $_POST['iduser'];
        $gambar = $_POST['gambar'];
        
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");
        
        $query = "INSERT INTO tb_post (waktu, caption, gambar, id_user) VALUES ('$waktu', '$caption', '$gambar', '$iduser')";
        
        $simpan_data = $koneksi->query($query);
        
        if ($simpan_data) {
            $data['pesan'] = 'Data berhasil disimpan';
            $data['hasil'] = 'true';
        } else {
            $data['pesan'] = 'Data gagal disimpan';
            $data['hasil'] = 'false';
        }
        
        echo json_encode($data);
    }
?>