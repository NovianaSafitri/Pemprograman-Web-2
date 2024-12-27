<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Daftar Buku</h2>

<!-- Notifikasi sukses -->
<?php if (session('sukses')): ?>
    <div class="mb-3">
        <div class="alert alert-success">
            <strong>Berhasil!</strong> <?= session('sukses'); ?>
        </div>
    </div>
<?php endif; ?>

<!-- Notifikasi error -->
<?php if (session('error')): ?>
    <div class="mb-3">
        <div class="alert alert-danger">
            <strong>Gagal!</strong> <?= session('error'); ?>
        </div>
    </div>
<?php endif; ?>

<!-- Tombol tambah buku -->
<div class="mb-3">
    <a href="<?= base_url('admin/daftar-buku/tambah') ?>" class="btn btn-primary">Tambah Buku</a>
</div>

<!-- Tabel daftar buku -->
<div class="mb-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun</th>
                <th scope="col">Cover</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $buku): ?>
            <tr>
                <th scope="row"><?= esc($buku['id_buku']); ?></th>
                <td><?= esc($buku['judul']); ?></td>
                <td><?= esc($buku['pengarang']); ?></td>
                <td><?= esc($buku['penerbit']); ?></td>
                <td><?= esc($buku['tahun']); ?></td>
                <td>
                    <img src="<?= base_url('file-image/') . esc($buku['cover']); ?>" alt="Cover Buku" style="width:150px; height:auto;">
                </td>
                <td><?= esc(number_format($buku['harga'], 0, ',', '.')); ?></td>
                <td>
                    <a href="<?= base_url('admin/daftar-buku/edit/') . esc($buku['id_buku']); ?>" class="btn btn-success">Edit</a>
                    <a href="<?= base_url('admin/daftar-buku/hapus/') . esc($buku['id_buku']); ?>" class="btn btn-danger" 
                       onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>
