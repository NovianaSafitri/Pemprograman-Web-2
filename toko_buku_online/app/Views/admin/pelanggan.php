<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Pelanggan</h2>
<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">No. Hp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th scope="row">James Smith</th>
                <th scope="row">08235723462</th>
                <th scope="row">Jl. KM. 16 Simp Sungai Duren, Muaro Jambi</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn btn-danger">Hapus</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection();