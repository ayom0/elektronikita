<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details - ElektronikKita</title>

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
        .order-details {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 8px;
        }
        .order-details h3 {
            color: #306EE8;
        }
        .order-details .btn-pay {
            background-color: white;
            color: #306EE8;
            border: 2px solid #306EE8;
            font-weight: bold;
        }
        .order-details .btn-pay:hover {
            background-color: #306EE8;
            color: white;
        }
        .order-details .form-control {
            border-radius: 0.25rem;
        }
        .order-summary {
            margin-top: 2rem;
            border-top: 2px solid #306EE8;
            padding-top: 1rem;
        }
        .order-summary p {
            font-size: 1.1rem;
            font-weight: bold;
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
    <!-- Navigation -->
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
    <!-- End Navigation -->

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand logo-container" href="index.html">
    <img src="assets/home/img/logo2.png" alt="Logo" class="logo-img">
</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
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
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Order Details -->
    <section id="order-details" class="container my-5 pt-5">
        <div class="order-details">
            <h3 class="text-center">Detail Pesanan</h3>
            <form action="{{ route('checkout.process') }}" method="POST">
                @csrf

                <!-- Email (pre-filled) -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" 
                           value="{{ auth()->check() ? auth()->user()->email : '' }}" readonly>
                </div>

                <!-- Recipient Name (required) -->
                <div class="form-group">
                    <label for="recipient_name">Nama Penerima</label>
                    <input type="text" id="recipient_name" name="recipient_name" class="form-control" required>
                </div>

                <!-- Address (pre-filled) -->
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" id="address" name="address" class="form-control" 
                           value="{{ auth()->check() ? auth()->user()->address : '' }}" readonly>
                </div>

                <!-- Message for Courier (optional) -->
                <div class="form-group">
                    <label for="message">Pesan ke Kurir (Optional)</label>
                    <textarea id="message" name="message" class="form-control" rows="3"></textarea>
                </div>

                <!-- Purchased Items -->
                <h4>Barang yang Dibeli</h4>
                <div class="items-list">
                    @foreach($cart as $item)
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <img src="{{ asset('storage/' . $item['foto']) }}" width="80" alt="{{ $item['nama_produk'] }}">
                            <div>
                                <p>{{ $item['nama_produk'] }}</p>
                                <p>Rp{{ number_format($item['harga'], 2, ',', '.') }} x {{ $item['jumlah'] }}</p>
                            </div>
                            <p class="font-weight-bold">Rp{{ number_format($item['harga'] * $item['jumlah'], 2, ',', '.') }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- Order Summary -->
                <div class="order-summary">
                    <p>Subtotal: Rp{{ number_format($subtotal, 2, ',', '.') }}</p>
                    <p>Ongkir: Rp{{ number_format($ongkir, 2, ',', '.') }}</p>
                    <p>Total: Rp{{ number_format($total, 2, ',', '.') }}</p>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-pay">Bayar</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">ElektronikKita</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">089231372</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">ElektronikKita@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 pt-5">
                    <h5 class="text-light">Quick Links</h5>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="index.html">Home</a></li>
                        <li><a class="text-decoration-none" href="about.html">About</a></li>
                        <li><a class="text-decoration-none" href="shop.html">Shop</a></li>
                        <li><a class="text-decoration-none" href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 pt-5">
                    <h5 class="text-light">Follow Us</h5>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <a class="text-decoration-none" href="https://fb.com/templatemo" target="_blank" rel="sponsored">Facebook</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="https://www.instagram.com/" target="_blank">Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Scripts -->
    <script src="assets/home/js/jquery.min.js"></script>
    <script src="assets/home/js/bootstrap.bundle.min.js"></script>
    <script src="assets/home/js/templatemo.js"></script>
    <script src="assets/home/js/custom.js"></script>
</body>
</html>
