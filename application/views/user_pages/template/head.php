<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title;?></title>
	<link href="<?= base_url('assets/')?>css/bootstrap.min.css" rel="stylesheet" >
	<link href="<?= base_url('assets/')?>css/font-awesome.min.css" rel="stylesheet" >
	<link href="<?= base_url('assets/')?>css/global.css" rel="stylesheet">
	<link href="<?= base_url('assets/')?>css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyCkfi70Y76iUZ/6B1Q5JupyUbbhDFFcUN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
	<script src="<?= base_url('assets/')?>js/bootstrap.bundle.min.js"></script>
    <style>
        .trend_1r {
        margin-bottom: 20px; /* Sesuaikan dengan jarak yang diinginkan */
    }

        

    .trend_2im1 img {
        height: 200px; /* Sesuaikan dengan tinggi yang diinginkan */
        width: auto;
        max-width: 100%;
        display: block;
        margin: 0 auto;
        
    }
	.mr-2{
		font-weight: bold;
		color: red;
		font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	}

    #carouselExampleCaptions img {
    max-height: 500px; /* Sesuaikan tinggi yang diinginkan */
    width: auto; /* Agar lebar ikut disesuaikan agar tidak terlalu memanjang */
    margin: auto; /* Agar gambar terpusat */
    display: block; /* Menghilangkan efek whitespace pada inline-block */
}

  
</style>
</head>
<body>

<section id="top">
    <div class="container">
        <div class="row top_1">
            <div class="col-md-3">
                <div class="top_1l pt-1">
                    <h3 class="mb-0"><a class="text-white" href="index.html"><i class="fa fa-book col_red me-1"></i> R-Books</a></h3>
                </div>
            </div>
            <div class="col-md-5">
                <div class="top_1m">
                    <div class="input-group">
                        <input type="text" class="form-control bg-black" placeholder="Search Site...">
                        <span class="input-group-btn">
                            <button class="btn btn text-white bg_red rounded-0 border-0" type="button">Search</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top_1r text-end">
                    <ul class="social-network social-circle mb-0">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/Rimuru121204" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>

                    </ul>
        </div>
                <ul class="top_1r text-end">
                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="mr-2 "><?= $user['nama_lengkap']; ?></span>
                                    <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="30px">
                    </a>
                    <ul class="dropdown-menu drop_1 dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!-- <li><a class="dropdown-item" href="about.html">About Us</a></li>
                        <li><a class="dropdown-item" href="services.html">Services</a></li>
                        <li><a class="dropdown-item" href="team.html">Team</a></li> -->
                        <li><a class="dropdown-item border-0" href="<?= site_url('logout') ?>">Logout</a></li>
                    </ul>
                    </li>
                    <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline p-2 text-light"><?= $user['nama_lengkap']; ?></span>
                                    <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="30px">
                                </a>
                                
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
                                    <a class="dropdown-item" href="<?= site_url('logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li> -->
                            </ul>
                     
                 
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section id="header">
<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
  <div class="container">
    <a class="navbar-brand text-white fw-bold" href="index.html"><i class="fa fa-book col_red me-1"></i> R-Books</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="about.html">Daftar Buku</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jadwal Rilis
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="blog.html">Ongoin</a></li>
            <li><a class="dropdown-item border-0" href="blog_detail.html">Old Book</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="services.html">Request</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="team.html">Cara Liatbuku/download</a>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categori
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="about.html">Novel</a></li>
            <li><a class="dropdown-item" href="services.html">Puisi</a></li>
			<li><a class="dropdown-item" href="team.html">Buku Pelajaran</a></li>
            <li><a class="dropdown-item" href="team.html">Majalah</a></li>
            <li><a class="dropdown-item border-0" href="contact.html">Komik</a></li>
          </ul>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="contact.html">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>

<section id="center" class="center_home">
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/')?>img/perpustakaan-nyaman.jpg" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption d-md-block">
       <h1 class="font_60"> Entertainment R-Books</h1>
	   <h6 class="mt-3">
	    <span class="col_red me-3">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-half-o"></i>
		</span>
		 4.5 (Imdb)      Year : 2022
		 <a class="bg_red p-2 pe-4 ps-4 ms-3 text-white d-inline-block" href="#">Action</a>
	   </h6>
	   <p class="mt-3">Four waves of increasingly deadly alien attacks have left most of Earth in ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
	   <p class="mb-2"><span class="col_red me-1 fw-bold">Starring:</span> Eget Nulla Semper Porta Dapibus Diam Ipsum</p>
	   <!-- <p class="mb-2"><span class="col_red me-1 fw-bold">Genres:</span> Music</p>
	   <p><span class="col_red me-1 fw-bold">Runtime:</span> 1h 32m</p>	 -->
	   <!-- <h6 class="mt-4"><a class="button" href="#"><i class="fa fa-play-circle align-middle me-1"></i> Watch Trailer</a></h6> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/')?>img/p.jpg" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption d-md-block">
       <h1 class="font_60"> Lorem Semper Nulla</h1>
	   <h6 class="mt-3">
	    <span class="col_red me-3">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-half-o"></i>
		</span>
		 4.5 (Imdb)      Year : 2022
		 <a class="bg_red p-2 pe-4 ps-4 ms-3 text-white d-inline-block" href="#">Action</a>
	   </h6>
	   <p class="mt-3">Four waves of increasingly deadly alien attacks have left most of Earth in ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
	   <p class="mb-2"><span class="col_red me-1 fw-bold">Starring:</span> Eget Nulla Semper Porta Dapibus Diam Ipsum</p>
	   <!-- <p class="mb-2"><span class="col_red me-1 fw-bold">Genres:</span> Music</p>
	   <p><span class="col_red me-1 fw-bold">Runtime:</span> 1h 32m</p>	 -->
	   <!-- <h6 class="mt-4"><a class="button" href="#"><i class="fa fa-play-circle align-middle me-1"></i> Watch Trailer</a></h6> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/')?>img/estetik.jpg" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption d-md-block">
       <h1 class="font_60"> Eget Diam Ipsum</h1>
	   <h6 class="mt-3">
	    <span class="col_red me-3">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star-half-o"></i>
		</span>
		 4.5 (Imdb)      Year : 2022
		 <a class="bg_red p-2 pe-4 ps-4 ms-3 text-white d-inline-block" href="#">Action</a>
	   </h6>
	   <p class="mt-3">Four waves of increasingly deadly alien attacks have left most of Earth in ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
	   <p class="mb-2"><span class="col_red me-1 fw-bold">Starring:</span> Eget Nulla Semper Porta Dapibus Diam Ipsum</p>
	   <!-- <p class="mb-2"><span class="col_red me-1 fw-bold">Genres:</span> Music</p>
	   <p><span class="col_red me-1 fw-bold">Runtime:</span> 1h 32m</p>	 -->
	   <!-- <h6 class="mt-4 mb-0"><a class="button" href="#"><i class="fa fa-play-circle align-middle me-1"></i> Watch Trailer</a></h6> -->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>