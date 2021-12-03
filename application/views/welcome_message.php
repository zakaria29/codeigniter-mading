<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Telkom Malang</title>
    <link rel="stylesheet" href="assets/moklet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
		<a class="navbar-brand" href="#">SMK Telkom Malang</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/ci-mading/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url("artikel")?>">Artikel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url("berita")?>">Berita</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="<?=base_url("pengumuman")?>">Pengumuman</a>
				</li>
			
			</ul>
		</div>
	</nav>
    <div class="main">
        <!-- bagian the real informatic school -->
        <div class="col-lg-6 col-md-6" id="informatic_school">
            <div class="content">
                <h3>
                    The Real <br />
                    Informatics Schools
                </h3>
    
                <h5>
                    Pelopor SMK bidang Teknologi dan <br />
                    Informatika di Indonesia
                </h5>
    
                <button id="join">
                    Join Now
                </button>
            </div>
        </div>

        <!-- bagian mas-mas -->
        <div class="col-lg-6 col-md-6" id="person">
            <img src="https://smktelkom-mlg.sch.id/assets/frontend/images/lanang_loro.png" 
            alt="Lanang Loro" width="100%">
        </div>


        <div class="col-lg-12 col-md-12" id="why">
            <h1>Kenapa harus moklet?</h1>
            <h6>Alasan kenapa kalian semua harus bergabung dengan SMK Telkom Malang.</h6>

            <div class="why-icon col-lg-3 col-md-6">
                <i class="fa fa-desktop"></i>
                <h5>Fasilitas Lengkap</h5>
                <h6>Penunjang belajar dengan kualitas premium.</h6>
            </div>

            <div class="why-icon col-lg-3 col-md-6">
                <i class="fa fa-building"></i>
                <h5>Lingkungan Nyaman</h5>
                <h6>Berada di lingkungan yang asri, aman, dan kondusif.</h6>
            </div>

            <div class="why-icon col-lg-3 col-md-6">
                <i class="fa fa-users"></i>
                <h5>Pengajar Kompeten</h5>
                <h6>Guru yang up-to-date dengan perkembangan industri.</h6>
            </div>

            <div class="why-icon col-lg-3 col-md-6">
                <i class="fa fa-home"></i>
                <h5>Kerjasama Luas</h5>
                <h6>Memperbesar kesempatan bekerja sebelum lulus.</h6>
            </div>
        </div>

        <!-- div nya sambutan -->
        <div class="col-lg-6 col-md-6" id="sambutan">
            Sambutan
            <h2>Kepala Sekolah</h2>
            <p>
                Selamat datang di website SMK Telkom Malang yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang sekolah kami. Tentunya dalam penyajian informasi masih banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik demi kemajuan lebih lanjut.
            </p>
            <p>
                Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya, sehingga dapat menjalin silaturahmi yang erat disegala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus demi anak bangsa.
            </p>
        </div>

        <div class="col-lg-6 col-md-6">
            <img src="https://smktelkom-mlg.sch.id/assets/frontend/images/img1.png" 
            alt="Agoes Windarto" width="100%">
        </div>

        <div class="col-lg-6 col-md-6" id="video_profil">
            <iframe width="100%" height="315"
            src="https://www.youtube.com/embed/lQyCbSp-tvs" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </div>

        <div class="col-lg-6 col-md-6" id="deskripsi_video">
            Kuy, nonton!
            <h2>Video Profil Moklet</h2>
            <p>
                Video profil sekolah memperkenalkan kepada kalian hal-hal berkaitan dengan lingkungan sekolah, fasilitas umum sekolah, fasilitas pembelajaran, ruang belajar, kegiatan siswa dan masih banyak lagi.
            </p>
            <p>
                Biar kalian tidak penasaran apa saja yang ada di dalam SMK Telkom Malang, segera tonton video profilnya.
            </p>
        </div>

        <div class="col-lg-12 col-md-12" id="siswa_kami">
            <h2>Siswa Kami Lebih dari 1000+</h2>
            <h6>
                Mayoritas siswa kami tidak hanya dari Malang, namun juga dari berbagai daerah.
                <br>
                Semuanya berkesempatan bergabung dengan kami.
            </h6>

            
        </div>
    </div>
</body>
</html>