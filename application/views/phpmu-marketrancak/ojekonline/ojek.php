<!DOCTYPE html>
<!-- saved from url=(0045)https://demo.indosaya.com/ojekonline/ojek.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover, shrink-to-fit=no">
<meta name="author" content="indosaya">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#03b611">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="stylesheet" type="text/css" href="./Ojek Motor _ Mobil _ Ojek Online_files/slick.min.css">
<link rel="stylesheet" type="text/css" href="./Ojek Motor _ Mobil _ Ojek Online_files/slick-theme.min.css">
<link href="<?= base_url()?>asset/aset/Ojek Motor _ Mobil _ Ojek Online_files/icofont.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url()?>asset/aset/Ojek Motor _ Mobil _ Ojek Online_files/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url()?>asset/aset/Ojek Motor _ Mobil _ Ojek Online_files/style.css" rel="stylesheet">
<link href="<?= base_url()?>asset/aset/Ojek Motor _ Mobil _ Ojek Online_files/custom.css" rel="stylesheet">
<link href="<?= base_url()?>asset/aset/Ojek Motor _ Mobil _ Ojek Online_files/responsive.css" rel="stylesheet">
<link href="<?= base_url()?>asset/aset/Ojek Motor _ Mobil _ Ojek Online_files/demo.css" rel="stylesheet">
<link href="<?= base_url()?>asset/aset/Ojek Motor _ Mobil _ Ojek Online_files/font-awesome.min.css" rel="stylesheet">

<title>Ojek Motor / Mobil | Ojek Online</title>
<meta name="description" content="Paket Ojek Online adalah Paket Website lengkap untuk Delivery  Kurir, OjekTaxi, Toko Online
">

<link rel="icon" href="https://demo.indosaya.com/ojekonline/isi/icon.png">
<link rel="apple-touch-icon" href="https://demo.indosaya.com/ojekonline/isi/icon.png">
<meta name="msapplication-TileImage" content="isi/icon.png">

<style>.bg-warna
{
	background:#03b611;
}
.tombolfs
{
	color:#fff;
	padding:5px 10px;
	background:#03b611;
}

.hc-offcanvas-nav h2 {
	background: #03b611;
    color: #fff;
}

.slick-dots li button::before
{
	color:#03b611 !important;
}

.produksatuan-body .tomboltoko
{
	margin-right:1em;
	padding:3px 8px;
	border:solid 1px #03b611;
	color:#03b611 !important;
}

.produksatuan-body .detailtoko span
{
	color:#03b611;
	margin-right:.5em
}

.form-title
{
	background:#03b611;
}

.tombol-link
{
	color:#03b611;
}
.cart-subtotaljumlah
{
	color:#03b611;
	font-weight:bold;
}
.tombol-cart
{
	background:#03b611;
}
.nav-tabs .nav-link.active
{
	border-bottom:solid 3px #03b611;
	border-color:#03b611 !important;
}
a.selected {
  color: #03b611 !important;
}</style>

<meta property="og:url" content="demo.indosaya.com/ojekonline"><meta property="og:type" content="article"><meta property="og:title" content="Ojek Online"><meta property="og:description" content="&lt;p&gt;Paket Ojek Online adalah Paket Website lengkap untuk Delivery / Kurir, Ojek/Taxi, Toko Online&lt;/p&gt;
"><meta property="og:image" content="demo.indosaya.com/ojekonline/isi/banner-homepage.jpg">
<script language="JavaScript">
	if (top.location != location)
	{
		top.location = self.location;
	}
	
	function showid(idread)
	{
		if (document.getElementById(idread))
		{
			if (document.getElementById(idread).style.display == 'none')
			{
				document.getElementById(idread).style.display = 'inline';
			}
			else
			{
				document.getElementById(idread).style.display = 'none';
			}
		}
	}
	
	function kosong(idkosong)
	{
		document.getElementById(idkosong).value='';
	}
	
	function goBack()
	{
		window.history.back();
	}
	
				function cekwa()
			{
				var wa = 'https://web.whatsapp.com/send';
				if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
				{
					wa = 'whatsapp://send';
				}
				
				$.post("proses.php",
				{
					'cekwa':wa
				},
				function(data){
					if(data!="")
					{
						location.reload();
					}
				});
			}
			cekwa();
	</script>	</head>
	<body class="fixed-bottom-padding">
		<div class="osahan-home-page">
			<div id="ojekonlinetop"></div>
<input id="judulwebsite" type="hidden" value="Ojek Online">
		<div class="py-2 px-3 bg-white shadow-sm fixed-top">
			<div class="d-flex align-items-center justify-content-between">
				<a class="font-weight-bold text-success text-decoration-none" href="https://demo.indosaya.com/ojekonline/home.php"><i class="icofont-rounded-left back-page"></i></a>
				<span class="text-dark font-weight-bold" style="overflow: hidden; white-space: nowrap;">Ojek Motor / Mobil</span>
				<a class="toggle ml-3 text-dark" href="https://demo.indosaya.com/ojekonline/ojek.php#"><i class="icofont-navigation-menu"></i></a>
			</div>
		</div>
			
			<div class="osahan-body">
										<div class="pt-4 mt-4">
							<div class="promo-slider">
								<!--<div class="osahan-slider-item mt-2 mx-2"><a href="https://demo.indosaya.com/ojekonline/ojek.php"><img src="./Ojek Motor _ Mobil _ Ojek Online_files/slideojek-1-slide-taxi-1.jpg" class="slide-img img-fluid mx-auto rounded" alt="Slide Taxi 1"></a></div>		-->					</div>
						</div>
							</div>
			
			<div class="osahan-body containerform">
				<div class="py-3">
										<form action="https://demo.indosaya.com/ojekonline/ojek.php" method="post" novalidate="">
												<div class="osahan-card bg-white shadow-sm mb-2">
								<div class="osahan-card-header">
									<h2 class="mb-0">
										<button class="d-flex p-3 align-items-center border-0 btn btn-outline-success bg-white text-decoration-none text-success w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" fdprocessedid="9o3o7l">
										<i class="icofont-location-pin mr-3"></i> Data Jemput
										</button>
									 </h2>
								</div>
								<div class="osahan-card-body border-top p-3">
																		
																				<div class="col-md-12 form-group">
												<label class="form-label">Pilih Alamat Jemputpppppp <span class="text-danger">*</span></label>
												<select id="pilihalamatjemput" class="form-control" fdprocessedid="y6htxr">
													<option value="0">Pilih Alamat</option>
													<option value="153">Radja - Indonesia (089513997871)</option>												</select>
											</div>
																		
									<div class="col-md-12 form-group">
										<label class="form-label">Alamat Jemput <span class="text-danger">*</span></label>
										<div class="input-group">
											<input name="alamatjemput" id="alamatjemput" type="text" value="" onclick="setalamatjemput()" class="form-control" required="" fdprocessedid="2htsb9">
											<div class="input-group-append"><button id="button-addon2" type="button" onclick="showid(&#39;vmapjemput&#39;)" class="btn btn-outline-secondary" fdprocessedid="ixrb2"><i class="icofont-pin"></i></button></div>
										</div>
										<div id="vmapjemput" style="display:none;">
											<div id="mapjemput" class="mapjemput"></div>
										</div>
									</div>
									
									<div class="col-md-12 form-group">
										<label class="form-label">Keterangan Alamat Jemput</label>
										<input name="dalamatjemput" id="dalamatjemput" type="text" value="" class="form-control" fdprocessedid="cjuyp">
									</div>
									
									<div class="col-md-12 form-group">
										<label class="form-label">No hp Jemput</label>
										<input name="nohppesan" id="nohppesan" type="text" value="089513997871" class="form-control" fdprocessedid="hip3gd">
									</div>
								</div>
							</div>
							
							<div class="osahan-card bg-white shadow-sm mb-2">
								<div class="osahan-card-header">
									<h2 class="mb-0">
										<button class="d-flex p-3 align-items-center border-0 btn btn-outline-success bg-white text-decoration-none text-success w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" fdprocessedid="k7gw9">
										<i class="icofont-location-pin mr-3"></i> Data Tujuan
										</button>
									 </h2>
								</div>
								<div class="osahan-card-body border-top p-3">
																													<div class="col-md-12 form-group">
												<label class="form-label">Pilih Alamat Tujuan <span class="text-danger">*</span></label>
												<select id="pilihalamatantar" class="form-control" fdprocessedid="uc368r">
													<option value="0">Pilih Alamat</option>
													<option value="153">Radja - Indonesia (089513997871)</option>												</select>
											</div>
																		
									<div class="col-md-12 form-group">
										<label class="form-label">Alamat Tujuan <span class="text-danger">*</span></label>
										<div class="input-group">
											<input name="alamatantar" id="alamatantar" type="text" value="" onclick="setalamatantar()" class="form-control" required="" fdprocessedid="myoee">
											<div class="input-group-append"><button id="button-addon2" type="button" onclick="showid(&#39;vmapantar&#39;)" class="btn btn-outline-secondary" fdprocessedid="bnwj0i"><i class="icofont-pin"></i></button></div>
										</div>
										<div id="vmapantar" style="display:none;">
											<div id="mapantar"></div>
										</div>
									</div>
									
									<div class="col-md-12 form-group">
										<label class="form-label">Keterangan Alamat Tujuan</label>
										<input name="dalamatantar" id="dalamatantar" type="text" value="" class="form-control" fdprocessedid="731fre">
									</div>
								</div>
							</div>
							
							<div class="fixed-bottom pd-f bg-white d-flex align-items-center border-top">
								<input type="submit" name="setalamat" value="Lanjutkan Pemesanan" class="btn btn-success btn-block" fdprocessedid="9qvcn9">
							</div>
										</form>
				</div>
			</div>
		</div>
		
		<nav id="main-nav">
			<ul class="second-nav">
				<li><a href="https://demo.indosaya.com/ojekonline/index.php"><i class="icofont-ui-home mr-2"></i> Home</a></li>
				<li><a href="https://demo.indosaya.com/ojekonline/about.php"><i class="icofont-page mr-2"></i> About Us</a></li>
				<li><a href="https://demo.indosaya.com/ojekonline/caraorder.php"><i class="icofont-list mr-2"></i> Cara Order</a></li>
				<li><a href="https://demo.indosaya.com/ojekonline/artikel.php"><i class="icofont-read-book mr-2"></i> Artikel</a></li>
				<li>
					<a href="https://demo.indosaya.com/ojekonline/akun.php"><i class="icofont-user mr-2"></i> Akun</a><a href="https://demo.indosaya.com/ojekonline/user/ubahpass.php"><i class="icofont-lock mr-2"></i> Ubah Password</a><a href="https://demo.indosaya.com/ojekonline/user/logout.php"><i class="icofont-sign-out mr-2"></i> Log Out</a>					
				</li>
			</ul>
			<ul class="bottom-nav">
				<li class="email">
					<a class="text-success" href="https://demo.indosaya.com/ojekonline/index.php">
						<p class="h5 m-0"><i class="icofont-home text-success"></i></p>
						Home
					</a>
				</li>
				<li class="github">
					<a href="https://demo.indosaya.com/ojekonline/cart.php">
						<p class="h5 m-0"><i class="icofont-cart"></i></p>
						CART
					</a>
				</li>
				<li class="ko-fi">
					<a href="https://web.whatsapp.com/send?phone=6282138000085&amp;text=Selamat%20Siang%20Ojek%20Online">
						<p class="h5 m-0"><i class="icofont-headphone"></i></p>
						Help
					</a>
				</li>
			</ul>
		</nav>

		
<script src="./Ojek Motor _ Mobil _ Ojek Online_files/jquery.min.js.download"></script>
</body></html>