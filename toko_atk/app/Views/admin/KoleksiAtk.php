<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Koleksi Atk</h2>
<?php if(session('sukses')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>Berhasil</strong> <?php session('sukses');?>
    </div>
</div>
<?php endif;?>

<?php if(session('error')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>Gagal!</strong> <?php session('error');?>
    </div>
</div>
<?php endif;?>


<div class="">
    <a href="<?= base_url('admin/KoleksiAtk/tambah')?>" class="btn btn-primary">Tambah Barang</a>
</div>
<div class="mb-5">
    <table class="table table-stripped">
        <head>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama barang</th>
                <th scope="col">Kategori</th>
                <th scope="col">gambar</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
            <thead>
                <tbody>
                    <?php foreach($barang as $AtkModel): ?>
                    <tr>
                        <th scope="row"><?= $AtkModel['id_atk']?></th>
                        <td><?= $AtkModel['nama_barang']?></td>
                        <td><?= $AtkModel['kategori']?></td>
                        <td>
                        <img src="<?= base_url('uploads/' . $AtkModel['gambar']); ?>" alt="<?= $AtkModel['nama_barang']; ?>" width="100" height="100">




                        </td>
                        <td>
                            <?= number_format($AtkModel['harga'], 0, ',', '.') ?>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/KoleksiAtk/edit/') .  $AtkModel['id_atk']?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url('admin/KoleksiAtk/hapus/') . $AtkModel['id_atk'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>

                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </thead>
        </head>
    </table>
</div>

<?= $this->endSection();?>