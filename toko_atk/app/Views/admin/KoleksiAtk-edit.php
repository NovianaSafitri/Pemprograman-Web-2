<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Edit Barang</h2>

<div class="w-50">
    <form action="<?= base_url('admin/KoleksiAtk/update/' . $barang['id_atk']); ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="<?= esc($barang['nama_barang']); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="form-control" value="<?= esc($barang['kategori']); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" value="<?= esc($barang['harga']); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Barang</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
            <?php if (!empty($barang['gambar'])): ?>
                <small>File saat ini: <?= esc($barang['gambar']); ?></small>
            <?php endif; ?>
        </div>

        <a href="<?= base_url('admin/KoleksiAtk'); ?>" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>

<?= $this->endSection(); ?>
