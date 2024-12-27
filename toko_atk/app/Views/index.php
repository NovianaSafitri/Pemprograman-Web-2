<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Atk Cerdas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
  </head>
  <body>

    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-end">
                <a href="<?= base_url()?>chart" class="btn btn-info">Keranjang belanja <span class="badge text-bg-warning">4</span></a>
            </div>
        </div>
        <div class="row welcome-section mb-5">
          <div class="col-6">
                <h1>Selamat datang di toko atk cerdas</h1>
                <p>Kami menyediakan alat tulis kantor yang lengkap</p>
                <a href="#" class="btn btn-success">Lihat Produk</a>
          </div>
          <div class="col-6">
            <h1>Temukan atk yang anda inginkan</h1>
            <Form action="">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Judul buku">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Pengarang">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Penerbit">
            </div>
            <div class="mb-3">
            <button class="btn btn-primary">Cari</button>
          </div>  
        </form>
        </div>
    </div>

    <h2>Atk Seller</h2>
    <div class="row mb-5 g-3">
        <div class="col-3">
            <div class="card">
                <img src="<?= base_url() ?>file-images/kertas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Pulpen</h5>
                  <p class="card-text">Rp.10,000,-</p>
                  <a href="#" class="btn btn-primary">Add to chart</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="<?= base_url() ?>file-images/pensil.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Pensil</h5>
                  <p class="card-text">Rp.5,000,-</p>
                  <a href="#" class="btn btn-primary">Add to chart</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="<?= base_url() ?>file-images/penghapus.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Penghapus</h5>
                  <p class="card-text">Rp.4,000,-</p>
                  <a href="#" class="btn btn-primary">Add to chart</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="<?= base_url() ?>file-images/spidol.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Spidol</h5>
                  <p class="card-text">Rp.18,000,-</p>
                  <a href="#" class="btn btn-primary">Add to chart</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="<?= base_url() ?>file-images/stabilo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Stabilo</h5>
                  <p class="card-text">Rp.15,000,-</p>
                  <a href="#" class="btn btn-primary">Add to chart</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="<?= base_url() ?>file-images/pensilwarna.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Pensil Warna</h5>
                  <p class="card-text">Rp.25,000,-</p>
                  <a href="#" class="btn btn-primary">Add to chart</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="<?= base_url() ?>file-images/kertas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Kertas HVS (A4,A5,F4)</h5>
                  <p class="card-text">Rp.10,000,-</p>
                  <a href="#" class="btn btn-primary">Add to chart</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img src="<?= base_url() ?>file-images/buku.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Buku catatan (notebook)</h5>
                  <p class="card-text">Rp.35,000,-</p>
                  <a href="#" class="btn btn-primary">Add to chart</a>
                </div>
              </div>
        </div>
    </div>

    <footer class="footer py-3">
        <div class="Container ">
        Copyright 2024. Toko Atk Cerdas kelas B. All Rights reserved
        </div> 
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>