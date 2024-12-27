<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Barang</title>
</head>
<body>
    <h1>Hapus Barang</h1>
    <p>Apakah Anda yakin ingin menghapus barang <strong><?= $barang['nama_produk'] ?></strong>?</p>

    <form action="<?= base_url('/admin/KoleksiAtk/hapus/' . $barang['id_atk']) ?>" method="post">
        <?= csrf_field() ?>
        <button type="submit">Hapus</button>
        <a href="<?= base_url('/admin/KoleksiAtk') ?>">Batal</a>
    </form>
</body>
</html>
