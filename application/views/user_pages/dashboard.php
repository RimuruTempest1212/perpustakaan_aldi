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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline p-2 text-light"><?= $user['nama_lengkap']; ?></span>
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
      <img src="<?= base_url('assets/')?>img/perpustakaan-nyaman.jpg" class="d-block w-100" alt="...">
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
      <img src="<?= base_url('assets/')?>img/p.jpg" class="d-block w-100" alt="...">
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
      <img src="<?= base_url('assets/')?>img/estetik.jpg" class="d-block w-100" alt="...">
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

<section id="upcome" class="pt-4 pb-5">
    <div class="container">
        <div class="row trend_1">
            <div class="col-md-6 col-6">
                <div class="trend_1l">
                    <h4 class="mb-0"><i class="fa fa-book align-middle col_red me-1"></i> Latest <span class="col_red">R-books</span></h4>
                </div>
            </div>
            <div class="col-md-6 col-6">
                <div class="trend_1r text-end">
                    <h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
                </div>
            </div>
        </div>
        <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach (array_chunk($buku, 4) as $index => $chunk) : ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <div class="trend_2i row">
                            <?php foreach ($chunk as $item) : ?>
                                <div class="col-md-3 col-6">
                                    <div class="trend_2im clearfix position-relative">
                                        <div class="trend_2im1 clearfix">
                                            <div class="grid">
                                                <figure class="effect-jazz mb-0">
                                                    <a href="#"><img src="<?= base_url() . './uploads/' . $item->gambar ?>" class="w-100" alt="img25"></a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
                                            <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-book"></i></a></span>
                                        </div>
                                    </div>
                                    <div class="trend_2ilast bg_grey p-3 clearfix">
                                        <!-- Tampilkan informasi buku di sini -->
                                        <h5><a class="col_red" href="#"><?= $item->judul?></a></h5>
                                        <table >
                                            <tbody>
                                                <tr>
                                                    <td id="penulis">Penulis</td>
                                                    <td>:</td>
                                                    <td><small class="text-muted"><?= $item->penulis ?></small></td>
                                                </tr>
                                                <tr>
                                                        <td id="penulis">Penerbit</td>
                                                        <td>:</td>
                                                        <td><small class="text-muted"><?= $item->penerbit ?></small></td>
                                                    </tr>
                                                    <tr>
                                                        <td id="penulis">Tahun Terbit</td>
                                                        <td>:</td>
                                                        <td><small class="text-muted"><?= $item->tahun_terbit ?></small></td>
                                                    </tr>
                                                   
                                                <!-- Tambahkan info buku lainnya sesuai kebutuhan -->
                                            </tbody>
                                        </table>
                                        
                                        <h6><a class="col_red" href="">Rating</a></h6>
                                        <span class="col_red">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                        <p class="mb-0">1 Views</p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


<section id="upcome" class="pt-4 pb-5">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-book align-middle col_red me-1"></i> Upcoming <span class="col_red">Events</span></h4>
   </div>
  </div>
  <div class="col-md-6 col-6">
   <div class="trend_1r text-end">
     <h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
   </div>
  </div>
 </div>
 <div class="row trend_2 mt-4">
   <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="trend_2i row">
	    <div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/12.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-book"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Semper</a></h5>
			<p class="mb-2">A father travels from Oklahoma to France to help his...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">1 Views</p>
		  </div>  
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/13.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-book"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Dapibus</a></h5>
			<p class="mb-2">A father travels from Oklahoma to France to help his...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">1 Views</p>
		  </div>  
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/14.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-book"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Ipsum</a></h5>
			<p class="mb-2">A father travels from Oklahoma to France to help his...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">1 Views</p>
		  </div>  
		</div>
		
	  </div>
    </div>
    <div class="carousel-item">
      <div class="trend_2i row">
	    
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/15.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-book"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Dapibus</a></h5>
			<p class="mb-2">A father travels from Oklahoma to France to help his...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">1 Views</p>
		  </div>  
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/16.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-book"></i></a></span>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Ipsum</a></h5>
			<p class="mb-2">A father travels from Oklahoma to France to help his...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">1 Views</p>
		  </div>  
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/17.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix text-center position-absolute w-100 top-0">
		     <span class="fs-1"><a class="col_red" href="#"><i class="fa fa-book"></i></a></span>
		   </div>
		  </div>

		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#">Lorem</a></h5>
			<p class="mb-2">A father travels from Oklahoma to France to help his...</p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">1 Views</p>
		  </div>  
		</div>
	  </div>
    </div>
    
  </div>

</div>
 </div>
</div>
</section>

<section id="popular" class="pt-4 pb-5 bg_grey">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-12">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-book align-middle col_red me-1"></i> Trending <span class="col_red">Events</span></h4>
   </div>
  </div>
 </div>
 <div class="row popular_1 mt-4">
   <ul class="nav nav-tabs  border-0 mb-0">
    <li class="nav-item">
        <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
            <span class="d-md-block">JUST ARRIVED</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
            <span class="d-md-block">POPULAR EVENTS</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
            <span class="d-md-block">TV SHOWS</span>
        </a>
    </li>
	<li class="nav-item">
        <a href="#settings_o" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
            <span class="d-md-block">FREE MOVIES</span>
        </a>
    </li>
	
</ul>
 </div>
 <div class="popular_2 row mt-4">
   <div class="tab-content">
    <div class="tab-pane active" id="home">
	  <div class="popular_2i row">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/18.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Semp Porta</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.2  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 49m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/19.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Eget Diam</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.3  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 2h 29m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
	  <div class="popular_2i row mt-4">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/20.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Quis Sem</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.4  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 59m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/21.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Ipsum Lorem</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.6  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 48m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
    </div>
    <div class="tab-pane" id="profile">
       <div class="popular_2i row">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/22.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Semp Porta</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.2  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 49m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/23.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Eget Diam</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.3  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 2h 29m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
	  <div class="popular_2i row mt-4">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/24.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Quis Sem</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.4  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 59m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/25.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Ipsum Lorem</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.6  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 48m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
    </div>
    <div class="tab-pane" id="settings">
       <div class="popular_2i row">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/26.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Semp Porta</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.2  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 49m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/27.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Eget Diam</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.3  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 2h 29m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
	  <div class="popular_2i row mt-4">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/28.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Quis Sem</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.4  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 59m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/29.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Ipsum Lorem</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.6  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 48m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
    </div>
	
	<div class="tab-pane" id="settings_o">
	    <div class="popular_2i row">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/18.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Semp Porta</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.2  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 49m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/19.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Eget Diam</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.3  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 2h 29m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
	  <div class="popular_2i row mt-4">
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/20.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Quis Sem</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.4  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 59m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="popular_2i1 row">
		 <div class="col-md-4 col-4">
		  <div class="popular_2i1lm position-relative clearfix">
		   <div class="popular_2i1lm1 clearfix">
		      <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/21.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
		    <ul>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
			 <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
			</ul>
		   </div>
		  </div>
		 </div>
		 <div class="col-md-8 col-8">
		  <div class="popular_2i1r">
		   <h5><a class="col_red" href="#">Ipsum Lorem</a></h5>
		   <h6>Action, Thriller</h6>
		   <h6> Imdb 8.6  <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> Year : 2022 <span class="ms-2">Runtime: 1h 48m</span></h6>
		   <p>Four waves of increasingly deadly alien attacks have left most of  ruin. Cassie is on the run, desperately trying to save her younger brother.</p>
		   <h6 class="mb-0"><a class="button" href="#"> More Info - Trailer</a></h6>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
    </div>
	
</div>
 </div>
</div>
</section>

<section id="choice" class="pt-4 pb-5">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-book align-middle col_red me-1"></i> Director's  <span class="col_red">Choice</span></h4>
   </div>
  </div>
  <div class="col-md-6 col-6">
   <div class="trend_1r text-end">
     <h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
   </div>
  </div>
 </div>
 <div class="row trend_2 mt-4">
   <div id="carouselExampleCaptions3" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="trend_2i row">
	    <div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/12.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/13.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Lorem</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">1 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/14.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Porta</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">4 Views</p>
		   </div>
		  </div>
		    
		</div>
		
	  </div>
    </div>
    <div class="carousel-item">
      <div class="trend_2i row">
	    
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/15.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Porta</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">4 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/16.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Dapibus</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">6 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col-md-4">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/17.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Nulla</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">5 Views</p>
		   </div>
		  </div>

		    
		</div>
	  </div>
    </div>
    
  </div>

</div>
 </div>
</div>
</section>

<section id="play">
<div class="play_m clearfix">
 <div class="container">
 <div class="row trend_1">
  <div class="col-md-12">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-book align-middle col_red me-1"></i> Top   <span class="col_red">10 Playlist</span></h4>
   </div>
  </div>
 </div>
 <div class="play1 row mt-4 bg_grey pt-3 pb-3">
  <div class="col-md-9">
   <div class="play1l">
     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/2.jpg" class="w-100" height="450" alt="abc"></a>
				  </figure>
			  </div>
   </div>
  </div>
  <div class="col-md-3 ps-0">
   <div class="play1r">
     <div class="play1ri">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/4.jpg" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
	 </div>
	 <div class="play1ri mt-3">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/5.jpg" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
	 </div>
	 <div class="play1ri mt-3">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/6.jpg" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
	 </div>
	 <div class="play1ri mt-3">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/7.jpg" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
	 </div>
	 <div class="play1ri mt-3">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/8.jpg" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
	 </div>
	 <div class="play1ri mt-3">
	  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/9.jpg" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
	 </div>
   </div>
  </div>
 </div>
 <div class="play2 row mt-4">
  <div class="col-md-4 p-0">
   <div class="play2l">
     <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/31.jpg" height="515" class="w-100"  alt="abc"></a>
				  </figure>
			  </div>
   </div>
  </div>
        <div class="col-md-8 p-0">
        <div class="play2r  bg_grey p-4">
            <h5><span class="col_red">BEST MOVIE OF THE MONTH :</span> LIAM NEESON <span class="col_red">BLACKLIGHT</span><br>
        THEY’RE GONNA NEED MORE MEN</h5>
            <h5 class="mt-3">Thriller</h5>
            <hr class="line">
            <p class="mt-3">A humble businessman with a buried past seeks justice when his daughter is killed in an act of terrorism. A cat-and-mouse conflict ensues with a government official, whose past may hold clues to the killers' identities.</p>
            <div class="play2ri row mt-4">
            <div class="col-md-6">
                <div class="play2ril">
                <h6 class="fw-normal">
        Running Time: <span class="pull-right">1 hr 50 min</span></h6>
                <hr class="hr_1">
                <h6 class="fw-normal">
        Genre: <span class="pull-right">Action, Thriller</span></h6>
                <hr class="hr_1">
                <h6 class="fw-normal">
        Director: <span class="pull-right">Eget Nulla</span></h6>
                <hr class="hr_1">
                <h6 class="fw-normal">
        Stars: <span class="pull-right">Semp Port, Dapibus Diam</span></h6>
                <hr class="hr_1">
                <h6 class="fw-normal">
        Release Date: <span class="pull-right">2023</span></h6>
                <hr class="hr_1 mb-0">
                </div>
            </div>
            <div class="col-md-6">
                <div class="play2rir">
                <h6 class="fw-normal">Imdb - 9.2</h6>
                <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 92%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                    <h6 class="fw-normal mt-3">Semper - 7.3</h6>
                    <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 73%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                    <h6 class="fw-normal mt-3">Dapibus - 9.0</h6>
                    <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                    <h6 class="fw-normal mt-3">Ipsum - 8.3</h6>
                    <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                    <h6 class="fw-normal mt-3">Lorem - 7.9</h6>
                    <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
		</div>
	   </div>
	  </div>
   </div>
  </div>
 </div>
</div>
</div>
</section>

<section id="stream" class="pb-5 pt-4">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fa fa-book align-middle col_red me-1"></i> Movie   <span class="col_red">Streaming Services</span></h4>
   </div>
  </div>
  <div class="col-md-6 col-6">
   <div class="trend_1r text-end">
     <h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
   </div>
  </div>
 </div>
 <div class="row trend_2 mt-4">
   <div id="carouselExampleCaptions4" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="trend_2i row">
	    <div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/4.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/5.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/6.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/7.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/8.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
	  </div>
    </div>
    <div class="carousel-item">
      <div class="trend_2i row">
	    <div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/9.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/10.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/11.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/4.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="<?= base_url('assets/')?>img/5.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
	  </div>
    </div>
    
  </div>

</div>
 </div>
</div>
</section>

<section id="footer">
<div class="footer_m clearfix">
 <div class="container">
   <div class="row footer_1">
    <div class="col-md-4">
	 <div class="footer_1i">
	   <h3><a class="text-white" href="index.html"><i class="fa fa-book col_red me-1"></i> R-Books</a></h3>
	   <p class="mt-3">Lorem ipsum dolor sit amet consect etur adi pisicing elit sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet consect etur. </p>
	   <h6 class="fw-normal"><i class="fa fa-map-marker fs-5 align-middle col_red me-1"></i> 5311 Ceaver Sidge Td.
Pakland, DE 13507</h6>
        <h6 class="fw-normal mt-3"><i class="fa fa-envelope fs-5 align-middle col_red me-1"></i> info@gmail.com</h6>
		<h6 class="fw-normal mt-3 mb-0"><i class="fa fa-phone fs-5 align-middle col_red me-1"></i>  +123 123 456</h6>
	 </div>
	</div>
	<div class="col-md-4">
	 <div class="footer_1i">
	  <h4>Flickr <span class="col_red">Stream</span></h4>
      <div class="footer_1i1 row mt-4">
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/4.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/5.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/6.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/7.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	  </div>
	  <div class="footer_1i1 row mt-3">
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/8.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/9.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/10.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	   <div class="col-md-3 col-3">
	    <div class="footer_1i1i">
		  <div class="grid clearfix">
				  <figure class="effect-jazz mb-0">
					<a href="#"><img src="<?= base_url('assets/')?>img/11.jpg" height="70" class="w-100" alt="abc"></a>
				  </figure>
			  </div>
		</div>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="col-md-4">
	 <div class="footer_1i">
	  <h4>Sign  <span class="col_red">Newsletter</span></h4>
      <p class="mt-3">Subscribe to our newsletter list to get latest news and updates from us</p>
	  <div class="input-group">
				<input type="text" class="form-control bg-black" placeholder="Email">
				<span class="input-group-btn">
					<button class="btn btn text-white bg_red rounded-0 border-0" type="button">
						 Subscribe</button>
				</span>
		</div>
		<ul class="social-network social-circle mb-0 mt-4">
			<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
			<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>
			<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
		</ul>
	 </div>
	</div>
   </div>
</div>
</div>
</section>

<section id="footer_b" class="pt-3 pb-3 bg_grey">
<div class="container">
   <div class="row footer_1">
     <div class="col-md-8">
	  <div class="footer_1l">
	   <p class="mb-0">© 2013 Your Website Name. All Rights Reserved | Design by <a class="col_red" href="http://www.templateonweb.com">TemplateOnWeb</a></p>
	  </div>
	 </div>
	 <div class="col-md-4">
	  <div class="footer_1r">
	   <ul class="mb-0">
	    <li class="d-inline-block me-2"><a href="#">Home</a></li>
		<li class="d-inline-block me-2"><a href="#">Features</a></li>
		<li class="d-inline-block me-2"><a href="#">Pages</a></li>
		<li class="d-inline-block me-2"><a href="#">Portfolio</a></li>
		<li class="d-inline-block me-2"><a href="#">Blog</a></li>
		<li class="d-inline-block"><a href="#">Contact</a></li>
	   </ul>
	  </div>
	 </div>
   </div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-6Vp2l1Jz9weabC9wjA2IIF+TS7I9/AdQ2a7PNEC12NfUodop/FO6g1PibvjFCfrb" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyCkfi70Y76iUZ/6B1Q5JupyUbbhDFFcUN" crossorigin="anonymous"></script>

<script>
window.onscroll = function() {myFunction()};

var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;

function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}
</script>

</body>

</html>