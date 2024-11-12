<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elektronikita</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" >
    <link rel="stylesheet" href="assets/home/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/home/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/home/css/templatemo.css">
    <link rel="stylesheet" href="assets/home/css/custom.css">

    <style>
        .update-form {
            display: flex;
            align-items: center;
        }

        .quantity-input {
            max-width: 100px;
        }

        .update-form .btn {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
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
   <!-- navigation -->
   <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">Elektronikita@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">0897237</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                </div>
            </div>
        </div>
    </nav>

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

   <!-- cart -->
<section id="cart" class="container my-5 pt-5">
    <div class="mt-5 py-2 text-center">
        <h2 class="font-weight-bold">Keranjang</h2>
        <hr>
    </div>
    <div class="cart-content">
        <table width="100%">
            <thead>
                <tr>
                    <td>Hapus</td>
                    <td>Gambar</td>
                    <td>Barang</td>
                    <td>Harga</td>
                    <td>Jumlah</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                @forelse($cart as $item)
                    <tr>
                        <td><a href="{{ route('cart.remove', $item['id_produk']) }}" class="text-danger"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="{{ asset('storage/' . $item['foto']) }}" width="100"></td>
                        <td>{{ $item['nama_produk'] }}</td>
                        <td>Rp{{ number_format($item['harga'], 2, ',', '.') }}</td>
                        <td>
                            <form action="{{ route('cart.update', $item['id_produk']) }}" method="POST" class="update-form">
                                @csrf
                                <div class="d-flex align-items-center">
                                    <input type="number" name="quantity" value="{{ $item['jumlah'] }}" min="1" class="form-control quantity-input">
                                    <button type="submit" class="btn btn-primary ms-2">Update</button>
                                </div>
                            </form>
                        </td>
                        <td>Rp{{ number_format($item['harga'] * $item['jumlah'], 2, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Keranjang kosong</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>

<!-- Total Keranjang -->
<section id="cart-add" class="container">
    <div class="row">
        <div id="subtotal" class="col-md-6">
            <h3>Total keranjang</h3>
            <table>
                <tr>
                    <td>Subtotal keranjang</td>
                    <td>Rp{{ number_format($subtotal, 2, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Ongkir</td>
                    <td>Rp{{ number_format($ongkir, 2, ',', '.') }}</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>Rp{{ number_format($total, 2, ',', '.') }}</strong></td>
                </tr>
            </table>
            <a href="/checkout" class="normal">
    <button class="normal">Proses ke checkout</button>
</a>

        </div>
    </div>
</section>

   <!-- Start Footer -->
   <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Elektronikita</h2>
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
                          
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Start Script -->
    <script src="assets/home/js/jquery-1.11.0.min.js"></script>
    <script src="assets/home/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/home/js/bootstrap.bundle.min.js"></script>
    <script src="assets/home/js/templatemo.js"></script>
    <script src="assets/home/js/custom.js"></script>
    <!-- End Script -->
</body>
</html>
