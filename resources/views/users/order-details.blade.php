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
    </style>
</head>
<body>
    <!-- Navigation (Reuse your existing navigation code) -->
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

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                ElektronikKita
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
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
    <!-- Close Header -->

    <!-- Order Details -->
    <section id="order-details" class="container my-5 pt-5">
        <div class="order-details">
            <h3 class="text-center">Detail Pesanan</h3>
            <form action="{{ route('order.submit') }}" method="POST">
                @csrf

                <!-- Email (pre-filled) -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
                </div>

                <!-- Recipient Name (required) -->
                <div class="form-group">
                    <label for="recipient_name">Nama Penerima</label>
                    <input type="text" id="recipient_name" name="recipient_name" class="form-control" required>
                </div>

                <!-- Address (pre-filled) -->
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ $user->address }}" readonly>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="assets/home/js/jquery-1.11.0.min.js"></script>
    <script src="assets/home/js/bootstrap.bundle.min.js"></script>
    <script src="assets/home/js/custom.js"></script>
</body>
</html>
