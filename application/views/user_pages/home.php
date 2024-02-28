<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku Perpustakaan</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
        <header class="blog-header py-3" style="background-color: #000000; color: #fff;">
            <div class="header-img">
                <div class="container">
                    <div class="row flex-nowrap justify-content-between align-items-center">
                        <div class="col-3 pt-1">
                            <input type="text" id="filter" placeholder="Cari disini...." class="form-control shadow-none">
                        </div>

                        <div class="col-4 text-center">
                            <a class="blog-header-logo text-light" href="#">Perpustakaan Digital</a>

                        </div>
                        <div class="col-4 d-flex justify-content-end align-items-center">
                            <button id="toggleButton" class="btn btn-light d-block d-md-none"><i class="fas fa-bars"></i></button>


                            <!-- <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/profile') . $user['image'] ?>">
                            </a>
                            Dropdown - User Information
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div> -->

                        </div>
                    </div>



                    <div class="sidebar">
                        <div class="nav-scroller">
                            <nav class="nav d-flex justify-content-between">
                                <a class="p-2 text-light" href="#">Bisnis</a>
                                <a class="p-2 text-light" href="#">Fiksi</a>
                                <a class="p-2 text-light" href="#">Komik</a>
                                <a class="p-2 text-light" href="#">Non-fiksi</a>
                                <a class="p-2 text-light" href="#">Ekonomi</a>
                                <a class="p-2 text-light" href="#">Teknologi</a>
                                <a class="p-2 text-light" href="#">Motivasi</a>
                                <a class="p-2 text-light" href="#">Novel</a>
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline p-2 text-light"><?= $user['nama_lengkap']; ?></span>
                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="30px">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Profile
                                        </a>
                                        <!-- <a class="dropdown-item" href="#">
                                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Settings
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Activity Log
                                        </a> -->
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?= base_url('logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-1">
            <h1 class="main-title">Selamat Datang
                <?= isset($user['nama_lengkap']) ? strtoupper($user['nama_lengkap']) : 'No Named' ?>
            </h1>
            <h3 class="pb-3 font-italic border-bottom">Daftar Buku</h3>

            <div class="row">
                <?php foreach ($buku as $item) : ?>
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="<?= base_url() . './uploads/' . $item->gambar ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" id="judul"><?= $item->judul ?></h5>
                                <div class="table-responsive">
                                    <div class="table">
                                        <table align="center">
                                            <tbody>
                                                <tr>
                                                    <td id="penulis">Penulis</td>
                                                    <td>:</td>
                                                    <td><small class="text-muted"><?= $item->penulis ?></small></td>
                                                </tr>
                                                <tr>
                                                    <td>Penerbit</td>
                                                    <td>:</td>
                                                    <td><small class="text-muted"><?= $item->penerbit ?></small></td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun Terbit</td>
                                                    <td>:</td>
                                                    <td><small class="text-muted"><?= $item->tahun_terbit ?></small></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="button text-center">
                                <a href="<?= base_url('#') ?>" class="delete-button">
                                    <button type="button" class="btn btn-success">
                                        Pinjam Buku
                                    </button>
                                </a>
                                <a href="<?= base_url('#') ?>" class="delete-button">
                                    <button type="button" class="btn btn-primary">
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
        <hr />
        <nav class="navbar navbar-expand-sm navbar-light d-flex justify-content-between" style="background-color: #e3f2fd;">
            <a class="p-2 text-muted" href="#">&copy; Muhaman Aldi Saputra</a>
        </nav>

        <script src="<?= base_url('assets/js/search.js') ?>"></script>


        <script>
            // JavaScript function to toggle the sidebar
            function toggleSidebar() {
                var sidebar = document.querySelector('.sidebar');
                sidebar.classList.toggle('show');
            }

            // JavaScript event listener to trigger the toggle on button click
            var toggleButton = document.getElementById('toggleButton');
            if (toggleButton) {
                toggleButton.addEventListener('click', toggleSidebar);
            }
        </script>



        <script src="assets/jquery/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/jquery-easing/jquery.easing.min.js"></script>
        <script src="assets/js/sb-admin-2.min.js"></script>
        <script src="assets/datatables/jquery.datatables.min.js"></script>
        <script src="assets/datatables/datatables.bootstrap4.min.js"></script>
        <script src="assets/js/demo/datatables-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>

</body>

</html>