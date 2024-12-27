<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Tambah Barang</h2>

<div class="w-50">
    <form action="<?= base_url('admin/KoleksiAtk/tambah')?>" method="POST" 
    enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang">
        </div>
        <div class="mb-3">
            <label for="kategori">Kategori</label>
            <input type="text" class="form-control" name="kategori" id="kategori">
        </div>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/KoleksiAtk')?>" class="btn btn-secondary">kembali</a>
            <button type="submit" class="btn btn-primary">simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection();?>