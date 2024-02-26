<!doctype html>
<html lang="en">
<head>
<title>Daftar Buku Perpustakaan</title>
<!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link rel="stylesheet" href="<?= base_url('assets/css/home.css')?>">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
<header class="blog-header py-3" style="background-color: #343a40; color: #fff;">
    <div class="container">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-muted" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
                        <circle cx="10.5" cy="10.5" r="7.5"></circle>
                        <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                    </svg>
                </a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-light" href="#">Perpustakaan Digital</a>
            </div>
            <div class="hr">
                <hr>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="btn btn-sm btn-outline-light" href="#">Login</a>
            </div>
        </div>
        <div class="sidebar ">
            <div class="nav-scroller ">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 text-light" href="#">Bisnis</a>
                    <a class="p-2 text-light" href="#">Fiksi</a>
                    <a class="p-2 text-light" href="#">Komik</a>
                    <a class="p-2 text-light" href="#">Non-fiksi</a>
                    <a class="p-2 text-light" href="#">Ekonomi</a>
                    <a class="p-2 text-light" href="#">Teknologi</a>
                    <a class="p-2 text-light" href="#">Motivasi</a>
                    <a class="p-2 text-light" href="#">Novel</a>
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <h3 class="pb-3 font-italic border-bottom">Daftar Buku</h3>
    <div class="row">
        <?php foreach ($buku as $item) : ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="<?= base_url() . './uploads/' . $item->gambar ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item->judul ?></h5>
                        <p class="card-text"><small class="text-muted"><?= $item->penerbit ?></small></p>
                    </div>
                    <div class="button text-center">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $item->buku_id ?>">
                            Pinjam Buku
                        </button>
                        <a href="<?= base_url('Buku/delete_buku/' . $item->buku_id) ?>" class="delete-button">
                            <button type="button" class="btn btn-danger">
                                Lihat Buku
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<nav aria-label="Page navigation example">
<ul class="pagination justify-content-center">
<li class="page-item disabled">
<a class="page-link" href="#" tabindex="-1">Previous</a>

<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item">
<a class="page-link" href="#">Next</a>
</li>
</ul>
</nav>
<hr/>
<nav class="navbar navbar-expand-sm navbar-light d-flex justify-content-between" style="background-color: #e3f2fd;">
<a class="p-2 text-muted" href="#">&copy; Ilham Setia Bhakti - 2022</a>
</nav>
</body>
</html>