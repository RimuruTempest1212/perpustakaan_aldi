<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



    <title><?= $title; ?></title>

    <!-- Custom fonts for this template -->
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url('assets/datatables/datatables.bootstrap4.min.css') ?>" rel="stylesheet">

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="<?= base_url('https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css') ?>">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href=<?= base_url('admin') ?>>

                <div class="sidebar-brand-text mx-3">Daftar Buku</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href=<?= base_url('admin') ?>>
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pages
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href=<?= base_url('card') ?>>Cards</a>
                    </div>
                </div>
            </li>



            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href=<?= base_url('charts') ?>>
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Data Buku -->
            <li class="nav-item ">
                <a class="nav-link" href=<?= base_url('daftarbuku') ?>>
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Buku</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href=<?= base_url('pinjamanbuku') ?>>
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pinjaman Buku</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link active" href=<?= base_url('data_user') ?>>
                    <i class="fas fa-fw fa-table"></i>
                    <span>user</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href=<?= base_url('kategori') ?>>
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kategori</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">



                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>

                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $name_user['nama_lengkap']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/default.jpg') ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('admin/dashboard/profile') ?>">
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

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $subtitle; ?></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
                            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">
                                Tambah User
                            </button>

                        </div>
                        <?= $this->session->flashdata('success') ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead align="center">
                                        <tr>
                                            <th>NO</th>
                                            <th>Profile</th>
                                            <th>Email</th>
                                            <th>Username</th>

                                            <th>Nama Lengkap</th>
                                            <th>alamat</th>
                                            <th>Status Account</th>
                                            <th>Status Active</th>
                                            <th>Tanggal Buat Account</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($user as $item) : ?>
                                            <tr>

                                                <td><?php echo $item->user_id ?></td>
                                                <td align="center"><img src="<?php echo base_url() . './profile/' . $item->image ?>" width="100"></td>
                                                <td><?php echo $item->email ?></td>
                                                <td><?php echo $item->username ?></td>

                                                <td><?php echo $item->nama_lengkap ?></td>
                                                <td><?php echo $item->alamat ?></td>
                                                <td><?php echo $item->role_id ?></td>
                                                <td><?php echo $item->is_active ?></td>
                                                <td><?= date('d F Y', $item->date_created) ?></td>
                                                
                                                <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $item->user_id ?>">
                                                        Edit
                                                    </button>
                                                </td><td>
                                                    <a href="<?= base_url('admin/Data_User/delete_user/' . $item->user_id) ?>" class="delete-button">
                                                        <button type="button" class="btn btn-danger">
                                                            Hapus
                                                        </button>
                                                    </a>

                                                </td>

                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Button trigger modal -->




            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah User -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <?php echo form_open_multipart('insert_user_proses','id="userForm"'); ?>

                    <div class="form-gorup">
                        <img id="editPreviewImage" src="<?= base_url('profile/') ?>" alt="Preview image" style="max-width: 100px; display: none;">
                        <label for="">Foto User</label>
                        <input type="file" name="image" id="image" class="form-control" require="">
                    </div>

                    <div class="form-gorup">
                        <label for="">Email</label>

                        <input type="text" name="email" id="" class="form-control" placeholder="Email?" require="">
                    </div>
                    <div class="form-gorup">
                        <label for="">Username</label>
                        <input type="text" name="username" id="" class="form-control" placeholder="Username?" require="">
                    </div>
                    <div class="form-gorup">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control" placeholder="Password?" require="">
                    </div>
                    <div class="form-gorup">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="" class="form-control" placeholder="Nama Lengkap?" require="">
                    </div>
                    <div class="form-gorup">
                        <label for="">alamat</label>
                        <input type="text" name="alamat" id="" class="form-control" placeholder="alamat?" require="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary saved-submit">Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit User -->

    <!-- Modal -->
    <?php $no = 0;
            foreach ($user as $item) : $no++; ?>
        <div class="modal fade" id="edit<?php echo $item->user_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <?php echo form_open_multipart('admin/Data_User/edit_user'); ?>
                        <input type="hidden" name="buku_id" readonly value="<?= $item->user_id; ?>">
                        <input type="hidden" name="image_old" value="<?= $item->image; ?>">

                        <div class="form-gorup">
                            
                            <img id="previewImage" src="<?= base_url('uploads/') ?>" alt="Preview image" style="max-width: 100px; display: none;">
                            <label for="">Foto User</label>
                            <input type="file" name="image" id="image" class="form-control" alue="<?= $item->image; ?>">
                        </div>
                        <br>
                        <img src="<?php echo base_url() . './profile/' . $item->image ?>" width="100">
                        <div class="form-gorup">
                            <label for="">Email</label>
                            <input type="text" name="email" id="" class="form-control" value="<?= $item->email; ?>">
                        </div>
                        <div class="form-gorup">
                            <label for="">Username</label>
                            <input type="text" name="username" id="" class="form-control" value="<?= $item->username; ?>" readonly>
                        </div>
                        <div class="form-gorup">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="" class="form-control" value="<?= $item->nama_lengkap; ?>">
                        </div>
                        <div class="form-gorup">
                            <label for="">alamat</label>
                            <input type="text" name="alamat" id="" class="form-control" value="<?= $item->alamat; ?>">
                        </div>
                        <div class="form-gorup">
                            <label for="">Role ID</label>
                            <input type="number" name="role_id" id="" class="form-control" value="<?= $item->role_id; ?>">
                        </div>
                        <div class="form-gorup">
                            <label for="">Status Active</label>
                            <input type="number" name="is_active" id="" class="form-control" value="<?= $item->is_active; ?>">
                        </div>
                        <div class="form-gorup">
                            <label for="">Tanggal pembuatan Akun</label>
                            <input type="text" name="date_created" id="" class="form-control" value="<?= date('d F Y', $item->date_created) ?>" readonly> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- Button trigger modal -->




    <!-- Bootstrap core JavaScript-->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/datatables/jquery.datatables.min.js"></script>
    <script src="assets/datatables/datatables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>

    <script src="<?= base_url('assets/js/alert_user.js') ?>"></script>



    <script>
        // Fungsi untuk menampilkan image yang diunggah
        function previewImage(input) {
            var preview = document.getElementById('previewImage');
            preview.style.display = 'block';

            var reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }

        // Menambahkan event listener untuk memanggil fungsi previewImage saat ada perubahan pada input file
        document.getElementById('image').addEventListener('change', function() {
            previewImage(this);
        });
    </script>

    <script>
        // Fungsi untuk menampilkan image yang diinput pada modal edit buku
        function editPreviewImage(input) {
            var preview = document.getElementById('editPreviewImage');
            preview.style.display = 'block';

            var reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }

        // Menambahkan event listener untuk memanggil fungsi editPreviewImage saat terjadi perubahan pada input file
        document.getElementById('image').addEventListener('change', function() {
            editPreviewImage(this);
        });
    </script>

</body>

</html>