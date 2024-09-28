<!DOCTYPE html>
<html lang="en">

<head>
    <title>shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/home/css/templatemo.css">
    <link rel="stylesheet" href="assets/home/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/home/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

--><style>
/* Custom Styles for Shop Page */
body {
    background-color: #f9f9f9;
}

/* Card Styling */
.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Header and Navigation Styling */
.navbar {
    background-color: #fff;
    border-bottom: 1px solid #e1e1e1;
}

.navbar-brand {
    color: #306EE8;
    font-weight: bold;
}

.navbar-nav .nav-link {
    color: #333;
    font-weight: 500;
}

.navbar-nav .nav-link:hover {
    color: #306EE8;
}

/* Category Menu */
.templatemo-accordion a {
    color: #333;
    transition: color 0.3s ease;
}

.templatemo-accordion a:hover {
    color: #306EE8;
}

/* Footer Styling */
footer {
    background-color: #333;
    color: #fff;
}

footer a {
    color: #306EE8;
}

footer a:hover {
    text-decoration: underline;
}

/* Footer Icons */
.footer-icons .list-inline-item {
    border: 1px solid #fff;
}

.footer-icons .list-inline-item a {
    color: #fff;
}

.footer-icons .list-inline-item a:hover {
    color: #306EE8;
}

/* Subscribe Button */
.input-group-text.btn-success {
    background-color: #306EE8;
    border: none;
    color: #fff;
}

.input-group-text.btn-success:hover {
    background-color: #2454c4;
}

/* Custom Styles for Category Menu */
.category-menu {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.category-menu h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

.category-menu ul {
    padding-left: 0;
    list-style: none;
}


.category-menu li {
    margin-bottom: 15px;
}

.category-menu a {
    color: #333;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.category-menu a:hover {
    color: #306EE8;
}

.category-menu .collapse {
    transition: height 0.3s ease;
}

.category-menu .collapse.show {
    height: auto;
}

.category-menu .collapse ul {
    padding-left: 1rem;
    margin: 0;
}

.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animated {
    animation: fadeInUp 0.6s ease-in-out;
}


/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animated {
    animation: fadeInUp 0.6s ease-in-out;
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

    <!-- Modal -->
    



<!-- Start Content -->
<div class="container py-5">
        <div class="row">

        <div class="col-lg-3">
    <div class="category-menu animated">
        <h1 class="h2 pb-4">Kategori</h1>
        <ul class="list-unstyled templatemo-accordion">
            <li class="pb-3">
                <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                    Laptop
                    <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                </a>
                <ul class="collapse show list-unstyled pl-3">
                    <li><a class="text-decoration-none" href="{{ url('/shop') }}">Gaming Notebook</a></li>
                    <li><a class="text-decoration-none" href="{{ url('/shopNotebook') }}">Notebook</a></li>
                </ul>
            </li>
            <li class="pb-3">
                <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                    Monitor
                    <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                </a>
                <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                    <li><a class="text-decoration-none" href="{{ url('/shopMonitorGaming') }}">Gaming</a></li>
                    <li><a class="text-decoration-none" href="{{ url('/shopMonitorSmart') }}">Smart</a></li>
                </ul>
            </li>
            <li class="pb-3">
                <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                    Aksesoris
                    <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                </a>
                <ul id="collapseThree" class="collapse list-unstyled pl-3">
                    <li><a class="text-decoration-none" href="#">Headphone</a></li>
                    <li><a class="text-decoration-none" href="#">Mouse</a></li>
                    <li><a class="text-decoration-none" href="#">Keyboard</a></li>
                    <li><a class="text-decoration-none" href="#">Meja/Kursi</a></li>
                </ul>
            </li>
            <li class="pb-3">
                <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                    Komponen PC
                    <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                </a>
                <ul id="collapseFour" class="collapse list-unstyled pl-3">
                    <li><a class="text-decoration-none" href="{{ url('/shopVGA') }}">VGA</a></li>
                    <li><a class="text-decoration-none" href="{{ url('/shopCPU') }}">CPU</a></li>
                    <li><a class="text-decoration-none" href="{{ url('/shopCasing') }}">Casing</a></li>
                    <li><a class="text-decoration-none" href="{{ url('/shopPSU') }}">PSU</a></li>
                    <li><a class="text-decoration-none" href="{{ url('/shopRAM') }}">Ram/Rom</a></li>
                    <li><a class="text-decoration-none" href="{{ url('/shopCooler') }}">Cooler</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Cooler PC</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                    </div>
                </div>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="{{ asset('storage/' . $product->foto) }}" alt="{{ $product->nama_produk }}">
                                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white" href="#"><i class="far fa-heart"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="#"><i class="far fa-eye"></i></a></li>
                                            <li><a class="btn btn-success text-white mt-2" href="{{ route('cart.add', $product->id_produk) }}"><i class="fas fa-cart-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="h3 text-decoration-none">{{ $product->nama_produk }}</a>
                                    <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                        <li>{{ $product->category->nama_kategori ?? 'Uncategorized' }}</li>
                                    </ul>
                                    <p></p>
                                    <p class="text-center mb-0"><strong>Rp.{{ number_format($product->harga, 2, ',', '.') }}</strong></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div div="row">
                    
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

   


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
    <script>
        // Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Add 'animated' class to elements on page load
window.addEventListener('load', () => {
    document.querySelectorAll('.card, .templatemo-accordion a').forEach(el => {
        el.classList.add('animated');
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var categoryMenuLinks = document.querySelectorAll(".templatemo-accordion a");
    categoryMenuLinks.forEach(function(link) {
        link.addEventListener("click", function() {
            var collapseElement = link.nextElementSibling;
            if (collapseElement && collapseElement.classList.contains("collapse")) {
                collapseElement.classList.toggle("show");
                // Toggle icon rotation
                var icon = link.querySelector(".fa-chevron-circle-down");
                if (icon) {
                    icon.classList.toggle("fa-rotate-180");
                }
            }
        });
    });
});


    </script>
    <!-- End Script -->
</body>

</html>