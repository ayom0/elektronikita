<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pesanan</title>

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/home/css/templatemo.css">
    <link rel="stylesheet" href="assets/home/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/home/css/fontawesome.min.css">
    <style>
      body {
    font-family: 'Poppins', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    color: #333;
}

.order-container {
    width: 80%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
}

.order-title {
    color: #306EE8;
    text-align: center;
    margin-bottom: 30px;
    font-size: 24px;
    font-weight: 600;
}

.order-card {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 10px;
    transition: background-color 0.3s ease;
}

.order-card:hover {
    background-color: #f9f9f9;
}

.order-details {
    display: flex;
    align-items: center;
}

.order-image {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 10px;
    margin-right: 20px;
}

.order-info {
    display: flex;
    flex-direction: column;
}

.order-info h3 {
    margin: 0;
    color: #306EE8;
    font-size: 18px;
    font-weight: 500;
}

.order-info p {
    margin: 5px 0;
}

.order-status {
    padding: 5px 10px;
    border-radius: 5px;
    font-weight: bold;
    text-align: center;
    background-color: #306EE8;
    color: #fff;
    width: 100px;
}

.dikirim {
    background-color: #28a745;
}

.diproses {
    background-color: #ffc107;
}

.subtotal {
    font-size: 18px;
    font-weight: bold;
    color: #306EE8;
}

.btn-profile {
    display: block;
    margin: 30px auto;
    padding: 12px 20px;
    background-color: #306EE8;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.btn-profile:hover {
    background-color: #2554b0;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
}

/* Mengatur container logo */
.logo-container {
    display: flex;
    align-items: center;  /* Untuk memastikan logo berada di tengah secara vertikal */
    justify-content: center; /* Agar logo berada di tengah secara horizontal, jika diperlukan */
    text-decoration: none; /* Menghapus garis bawah pada link */
    padding: 20px; /* Bisa disesuaikan untuk memberi ruang sekitar logo */
}

/* Mengatur logo */
.logo-img {
    height: 70px;  /* Sesuaikan ukuran logo */
    max-width: 100%; /* Menjaga aspek rasio gambar */
    object-fit: contain; /* Menjaga agar gambar tidak terdistorsi */
}


    </style>
</head>
<body>
        <!-- Start Top Nav -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">ElektronikKita@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">089231372</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand logo-container" href="index.html">
    <img src="assets/home/img/logo2.png" alt="Logo" class="logo-img">
</a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon position-relative text-decoration-none" href="{{ url('/cart') }}">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="{{ url('/profile') }}">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <div class="order-container">
    <h2 class="order-title">Pesanan Saya</h2>

    @foreach($pesanan as $order)
<div class="order-card">
    <div class="order-details">
        <img src="{{ asset('storage/' . $order->product->foto) }}" alt="Gambar Produk" class="order-image">
        
        <div class="order-info">
            <h3 class="product-name">{{ $order->product->nama_produk }}</h3>
            <p class="product-price">Harga: Rp {{ number_format($order->product->harga, 0, ',', '.') }}</p>
            <!-- Perbaiki bagian ini -->
            <p class="product-quantity">Jumlah: {{ $order->quantity }}</p>
            <p class="product-subtotal">Sub Total: Rp {{ number_format($order->subtotal, 0, ',', '.') }}</p>
        </div>
    </div>
    <div class="order-status {{ strtolower($order->status) }}">
    {{ ucfirst($order->status) }}
</div>

</div>
@endforeach




        


    <button class="btn-profile" onclick="kembaliKeProfil()">Kembali ke Profil</button>
</div>



<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">ElektronikKita</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">0812323434</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">ElektronikKita@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Laptop</a></li>
                        <li><a class="text-decoration-none" href="#">Handphone</a></li>
                        <li><a class="text-decoration-none" href="#">aksesoris</a></li>
                        <li><a class="text-decoration-none" href="#">Pc rakitan</a></li>
                        <li><a class="text-decoration-none" href="#">TV</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Info Toko</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Alamat Emails</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2021 Company Name 
                            | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->


    <!-- Start Script -->
    <script src="assets/home/js/jquery-1.11.0.min.js"></script>
    <script src="assets/home/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/home/js/bootstrap.bundle.min.js"></script>
    <script src="assets/home/js/templatemo.js"></script>
    <script src="assets/home/js/custom.js"></script>
    <!-- End Script -->

<script>
    function kembaliKeProfil() {
        // Redirect ke halaman profil
        window.location.href = "{{ url('/profile') }}";
    }
</script>

</body>
</html>
