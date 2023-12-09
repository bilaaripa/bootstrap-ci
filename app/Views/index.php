<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Jual Beli Sayur</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/styles.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-dark">
    <a class="navbar-brand" href="#">Jual Beli Sayur</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Keluar</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Pesanan
                        </a>
                    </li>
                    <!-- Tambahkan lebih banyak item menu sesuai kebutuhan -->
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="main-content">
                <h2>Dashboard</h2>
                <div class="row" id="product-list">
                    <!-- Tambahkan card untuk setiap sayuran -->
					<div class="row">
						<div class="col-md-4 mb-4">
							<div class="card">
								<img src="images/wortel.jpg" class="card-img-top" alt="Sayuran 1">
								<div class="card-body">
									<h5 class="card-title">Wortel</h5>
									<p class="card-text">Deskripsi singkat tentang wortel.</p>
									<p class="card-text"><strong>Harga:</strong> $2.00/kg</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-4">
							<div class="card">
								<img src="images/brokoli.jpg" class="card-img-top" alt="Sayuran 2">
								<div class="card-body">
									<h5 class="card-title">Brokoli</h5>
									<p class="card-text">Deskripsi singkat tentang brokoli.</p>
									<p class="card-text"><strong>Harga:</strong> $3.50/kg</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-4">
							<div class="card">
								<img src="images/bayam.jpg" class="card-img-top" alt="Sayuran 3">
								<div class="card-body">
									<h5 class="card-title">Bayam</h5>
									<p class="card-text">Deskripsi singkat tentang bayam.</p>
									<p class="card-text"><strong>Harga:</strong> $2.50/kg</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-4">
							<div class="card">
								<img src="images/wortel.jpg" class="card-img-top" alt="Sayuran 1">
								<div class="card-body">
									<h5 class="card-title">Wortel</h5>
									<p class="card-text">Deskripsi singkat tentang wortel.</p>
									<p class="card-text"><strong>Harga:</strong> $2.00/kg</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-4">
							<div class="card">
								<img src="images/brokoli.jpg" class="card-img-top" alt="Sayuran 2">
								<div class="card-body">
									<h5 class="card-title">Brokoli</h5>
									<p class="card-text">Deskripsi singkat tentang brokoli.</p>
									<p class="card-text"><strong>Harga:</strong> $3.50/kg</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-4">
							<div class="card">
								<img src="images/bayam.jpg" class="card-img-top" alt="Sayuran 3">
								<div class="card-body">
									<h5 class="card-title">Bayam</h5>
									<p class="card-text">Deskripsi singkat tentang bayam.</p>
									<p class="card-text"><strong>Harga:</strong> $2.50/kg</p>
								</div>
							</div>
						</div>
						<!-- Tambahkan lebih banyak blok card sesuai dengan jumlah sayuran yang Anda miliki -->
					</div>

                </div>
            </div>
        </main>
    </div>
</div>

<!-- Bootstrap JS dan file JS tambahan jika diperlukan -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- File JavaScript tambahan jika diperlukan -->
<script src="scripts.js"></script>

</body>
</html>
