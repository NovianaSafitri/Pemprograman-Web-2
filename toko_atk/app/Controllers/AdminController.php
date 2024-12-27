<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AtkModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProdukModel;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function KoleksiAtk()
    {
        $AtkModel = model('AtkModel');
        $data['barang'] = $AtkModel->findAll();

        return view('admin/KoleksiAtk', $data);
    }

    public function KoleksiAtkTambah()
    {
        return view('admin/KoleksiAtk-tambah');
    }

    public function createAtk()
    {
        $data = $this->request->getPost();
        $file = $this->request->getFile('gambar');

        if ($file && !$file->hasMoved()) {
            $path = $file->store();
            $data['gambar'] = $path;
        }

        $AtkModel = model('AtkModel');

        if ($AtkModel->insert($data, false)) {
            return redirect()->to('/admin/KoleksiAtk')->with('sukses', 'Data berhasil disimpan');
        } else {
            return redirect()->to('/admin/KoleksiAtk')->with('error', 'Data gagal disimpan!');
        }
    }

    // Fungsi untuk menampilkan halaman edit produk
    public function edit($id_atk)
    {
        // Load model
        $AtkModel = new \App\Models\AtkModel();
    
        // Ambil data barang berdasarkan ID
        $data['barang'] = $AtkModel->find($id_atk);
    
        // Jika data tidak ditemukan
        if (!$data['barang']) {
            return redirect()->to('/admin/KoleksiAtk')->with('error', 'Barang tidak ditemukan');
        }
    
        // Tampilkan form edit
        return view('admin/KoleksiAtk-edit', $data);
    }
    
    public function update($id_atk)
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_barang' => 'required',
            'kategori'    => 'required',
            'harga'       => 'required|numeric',
            'gambar'      => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]'
        ]);
    
        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }
    
        // Load model
        $AtkModel = new \App\Models\AtkModel();
    
        // Data untuk di-update
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'kategori'    => $this->request->getPost('kategori'),
            'harga'       => $this->request->getPost('harga'),
        ];
    
        // Jika ada gambar baru yang diunggah
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar && $fileGambar->isValid()) {
            $fileName = $fileGambar->getRandomName();
            $fileGambar->move('file-images', $fileName);
            $data['gambar'] = $fileName;
        }
    
        // Update data
        if ($AtkModel->update($id_atk, $data)) {
            return redirect()->to('/admin/KoleksiAtk')->with('sukses', 'Data berhasil diperbarui');
        } else {
            return redirect()->to('/admin/KoleksiAtk')->with('error', 'Data gagal diperbarui');
        }
    }
    


    // Fungsi untuk menghapus produk
    public function hapus($id_atk)
    {
        // Load model
        $model = new AtkModel();

        // Cari data berdasarkan ID
        $barang = $model->find($id_atk);

        if ($barang) {
            // Hapus gambar jika ada
            $gambar = $barang['gambar'];
            if ($gambar && file_exists('public/file-images/' . $gambar)) {
                unlink('public/file-images/' . $gambar);
            }

            // Hapus data dari database
            $model->delete($id_atk);

            // Set pesan sukses
            session()->setFlashdata('sukses', 'Data berhasil dihapus.');
        } else {
            // Jika data tidak ditemukan
            session()->setFlashdata('error', 'Data tidak ditemukan.');
        }

        // Redirect kembali ke halaman utama
        return redirect()->to(base_url('admin/KoleksiAtk'));
    }



    public function transaksi()
    {
        return view('admin/transaksi');
    }

    public function transaksiUbahStatus()
    {
        return view('admin/transaksi-ubah-status');
    }

    public function transaksiHapus()
    {
        return view('admin/transaksi-hapus');
    }

    public function pelanggan()
    {
        return view('admin/pelanggan');
    }

    public function pelangganHapus()
    {
        return view('admin/pelanggan-hapus');
    }

    public function images($folder, $file)
    {
        return $this->response->download(WRITEPATH . 'uploads/' . $folder . '/' . $file, null);
    }
}