<?php

require_once "Buku.php";
require_once "Database/Database.php";

class ListBuku {
    
    public function getData() {
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "SELECT * FROM buku";
        $query = $koneksi->query($sql);

        $daftar_buku = [];

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                // Pastikan semua kunci ada sebelum diakses
                $judul = isset($row['Judul']) ? $row['Judul'] : 'Unknown Title';
                $pengarang = isset($row['Pengarang']) ? $row['Pengarang'] : 'Unknown Author';
                $penerbit = isset($row['Penerbit']) ? $row['Penerbit'] : 'Unknown Publisher';
                $tahun = isset($row['Tahun']) ? $row['Tahun'] : 'Unknown Year';
                $id = isset($row['ID']) ? $row['ID'] : 0;

                $buku = new Buku($judul, $pengarang, $penerbit, $tahun);
                $buku->setId($id);
                array_push($daftar_buku, $buku);
            }
        }
        return $daftar_buku;
    }

    public function getKolomTabel() {
        return array('ID', 'Judul', 'Pengarang', 'Penerbit', 'Tahun', 'Ubah');
    }

    public function simpan($buku) {
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "INSERT INTO buku (judul, pengarang, penerbit, tahun) VALUES ('".$buku->getJudul()."', '".$buku->getPengarang()."', '".$buku->getPenerbit()."', '".$buku->getTahun()."')";
        $query = $koneksi->query($sql);

        return $query;
    }

    public function hapus($id) {
        $db = new Database();
        $koneksi = $db->getKoneksi();
    
        // Validasi ID
        if (!empty($id) && is_numeric($id)) {
            $sql = "DELETE FROM buku WHERE id = " . intval($id); // Gunakan intval untuk keamanan
    
            if ($koneksi->query($sql) === TRUE) {
                return "Data berhasil dihapus!"; // Jika berhasil
            } else {
                // Jika gagal, ambil pesan error
                return "Data gagal dihapus! Error: " . $koneksi->error;
            }
        } else {
            return "ID tidak valid untuk menghapus buku.";
        }
    }
    

    public function update($buku) {
        $db = new Database();
        $koneksi = $db->getKoneksi();
        $sql = "UPDATE buku SET judul='".$buku->getJudul()."', pengarang='".$buku->getPengarang()."', penerbit='".$buku->getPenerbit()."', tahun='".$buku->getTahun()."' WHERE id = '".$buku->getId()."'";
        $koneksi->query($sql); // Menjalankan query
    }

    public function getBukuById($id) {
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "SELECT * FROM buku WHERE id=" . intval($id); // Gunakan intval untuk keamanan
        $query = $koneksi->query($sql);

        if ($query->num_rows > 0) {
            $data = $query->fetch_assoc();

            // Pastikan semua kunci ada sebelum diakses
            $judul = isset($data['judul']) ? $data['judul'] :
            $pengarang = isset($data['pengarang']) ? $data['pengarang'] :
            $penerbit = isset($data['penerbit']) ? $data['penerbit'] :
            $tahun = isset($data['tahun']) ? $data['tahun'] :
            $id = isset($data['id']) ? $data['id'] : 0;

            $buku = new Buku($judul, $pengarang, $penerbit, $tahun);
            $buku->setId($id);

            return $buku; // Mengembalikan objek Buku
        }

        return false; // Kembalikan false jika tidak ada data
    }
}
