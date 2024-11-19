<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail Produk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="{{ asset('assets/home/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/templatemo.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/custom.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<!-- Load fonts style after rendering the layout styles -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
<link rel="stylesheet" href="{{ asset('assets/home/css/fontawesome.min.css') }}">

<!-- Slick -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/home/css/slick.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/home/css/slick-theme.css') }}">

<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->

<style>
    .rating-input {
        display: none; /* Menyembunyikan radio button */
    }

    .rating-input + label {
        cursor: pointer;
        font-size: 30px;
        transition: transform 0.3s ease;
    }

    /* Mengubah warna bintang yang dipilih */
    .rating-input:checked ~ .d-flex label {
        color: gold;
    }

    /* Hover effect untuk bintang */
    .rating-input + label:hover,
    .rating-input + label:hover ~ label {
        transform: scale(1.2); /* Efek zoom pada hover */
    }

    /* Mengubah warna bintang yang dipilih */
    .rating-input:checked + label,
    .rating-input:checked + label ~ label {
        color: gold;
    }

/* Kontainer utama komentar */
.comment-section {
    display: flex;
    justify-content: flex-start; /* Default: align to the left */
    margin-top: 40px;
}

/* Jika ingin posisi tengah */
.comment-section.center {
    justify-content: center;
}

/* Jika ingin posisi kanan */
.comment-section.right {
    justify-content: flex-end;
}

/* Mengatur lebar section */
.comment-section .comment-container {
    max-width: 1330px;
    width: 100%;
}

#comment-list .media {
    border-bottom: 1px solid #e0e0e0;
    padding-bottom: 10px;
    margin-bottom: 10px;
}

#comment-list .media img {
    margin-right: 15px;
}

#comment-list .media h6 {
    font-weight: bold;
}

#comment-form textarea {
    resize: none;
}



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
    <img src="assets/home/img/logo2.pngg" alt="Logo" class="logo-img">
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
    <!-- Close Header -->

    



    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                <!-- Gambar Utama -->
<div class="card mb-3">
    <img class="card-img img-fluid" src="{{ asset('storage/' . $product->foto) }}" alt="Card image cap" id="product-detail">
</div>

                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
<div class="carousel-item active">
    <div class="row">
        @foreach(json_decode($product->foto_lainnya, true) as $index => $foto)
            <div class="col-4">
                <a href="javascript:void(0);" onclick="changeMainImage('{{ asset('storage/' . $foto) }}')">
                    <img class="card-img img-fluid" src="{{ asset('storage/' . $foto) }}" alt="Product Image {{ $index + 1 }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
<!--/.First slide-->


                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{ asset('assets/home/img/hh4.jpg') }}" alt="Product Image 4">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Second slide-->
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
    <div class="card">
        <div class="card-body">
            <!-- Display product name and price -->
            <h1 class="h2">{{ $product->nama_produk }}</h1>
            <p class="h3 py-2">Rp.{{ number_format($product->harga, 0, ',', '.') }}</p>
            
            <!-- Display product rating -->
<p class="py-2">
    @php
        $starCount = round($averageRating); // Bulatkan rata-rata rating
    @endphp
    @for ($i = 1; $i <= 5; $i++)
        <i class="fa fa-star {{ $i <= $starCount ? 'text-warning' : 'text-secondary' }}"></i>
    @endfor
    <span class="list-inline-item text-dark">
        Rating {{ number_format($averageRating, 1) }} | {{ $commentCount }} Comments
    </span>
</p>


            <!-- Display product brand and description -->
            <ul class="list-inline">
                <li class="list-inline-item">
                    <h6>Brand:</h6>
                </li>
                <li class="list-inline-item">
                    <p class="text-muted"><strong>Asus</strong></p>
                </li>
            </ul>

            <h6>Description:</h6>
            <p>
    <span id="short-description">
        {{ Str::limit($product->deskripsi, 300) }}
    </span>
    <span id="full-description" style="display: none;">
        {{ $product->deskripsi }}
    </span>

    @if(strlen($product->deskripsi) > 300)
        <a href="javascript:void(0);" id="toggle-description" onclick="toggleDescription()">Baca Selengkapnya</a>
    @endif
</p>


            
            

            <!-- Add to cart form -->
            <form action="" method="GET">
                <input type="hidden" name="product-title" value="{{ $product->nama_produk }}">
                <div class="row">
                    <div class="col-auto">
                        
                    </div>
                    <div class="col-auto">
                        <ul class="list-inline pb-3">
                            <li class="list-inline-item text-right">
                                Jumlah
                                <input type="hidden" name="product-quantity" id="product-quantity" value="1">
                            </li>
                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col d-grid">
                        <button type="submit" class="btn btn-success btn-lg" href="{{ route('cart.add', $product->id_produk) }}" name="submit" value="addtocart">Tambah ke keranjang</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
     
<!-- Comments Section -->
<section class="bg-light comment-section center">
    <div class="container comment-container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Komentar Produk</h5>
                        <!-- Display Comments -->
                        <div id="comment-list">
                            @foreach ($komentars as $komentar)
                                <div class="media mb-3">
                                    <div class="media-body">
                                        <h6 class="mt-0">{{ $komentar->nama }}</h6> <!-- Menampilkan nama pengguna -->
                                        <p>{{ $komentar->isi_komentar }}</p>
                                        <p>
                                            <strong>Rating:</strong>
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $komentar->rating)
                                                    <span class="text-warning">&#9733;</span> <!-- Bintang terisi -->
                                                @else
                                                    <span class="text-secondary">&#9734;</span> <!-- Bintang kosong -->
                                                @endif
                                            @endfor
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Notifikasi -->
                        <div id="notification" class="alert alert-success mt-3" style="display: none;"></div>

                        <!-- Add Comment Form -->
                        <form id="comment-form" class="mt-4" action="{{ route('komentar.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id_produk" value="{{ $product->id_produk }}">
                            <div class="mb-3">
                                <label for="comment-name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="comment-name" name="nama" placeholder="Nama Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="comment-text" class="form-label">Komentar</label>
                                <textarea class="form-control" id="comment-text" name="isi_komentar" rows="3" placeholder="Tulis komentar Anda" required></textarea>
                            </div>
                            <div class="mb-3">
    <label class="form-label">Rating</label>
    <div class="d-flex">
        @for ($i = 1; $i <= 5; $i++)
            <input type="radio" id="rating{{ $i }}" name="rating" value="{{ $i }}" class="rating-input" required>
            <label for="rating{{ $i }}" class="text-warning">&#9733;</label>
        @endfor
    </div>
</div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Tambahkan Komentar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Produk yang terkait</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">

            <div class="row">
    @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card mb-4 product-wap rounded-0">
                <div class="card rounded-0">
                    <img class="card-img rounded-0 img-fluid" src="{{ asset('storage/' . $product->foto) }}" alt="{{ $product->nama_produk }}">
                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                        <ul class="list-unstyled">
                            
                                <a class="btn btn-success text-white mt-2" href="{{ route('product.details', ['id_produk' => $product->id_produk]) }}">
                                    <i class="far fa-eye"></i>
                                </a>
                            </li>
                            <li><a class="btn btn-success text-white mt-2" href="{{ route('cart.add', $product->id_produk) }}"><i class="fas fa-cart-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <a href="#" class="h3 text-decoration-none">{{ $product->nama_produk }}</a>
                    <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                        <li>
                            <i class="fas fa-star" style="color: gold;"></i>
                            <i class="fas fa-star" style="color: gold;"></i>
                            <i class="fas fa-star" style="color: gold;"></i>
                            <i class="fas fa-star" style="color: gold;"></i>
                            <i class="fas fa-star-half-alt" style="color: gold;"></i>
                        </li>
                    </ul>
                    <p class="text-center mb-0"><strong>Rp.{{ number_format($product->harga, 2, ',', '.') }}</strong></p>
                </div>
            </div>
        </div>
    @endforeach
</div>


     
                
               

               

               

                

                

                

                

                

                
            </div>


        </div>
    </section>
    <!-- End Article -->


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

    <!-- Start Slider Script -->
    <script src="assets/home/js/slick.min.js"></script>
    <script>
    function toggleDescription() {
        var shortDesc = document.getElementById("short-description");
        var fullDesc = document.getElementById("full-description");
        var toggleLink = document.getElementById("toggle-description");

        if (shortDesc.style.display === "none") {
            // Menampilkan deskripsi singkat dan menyembunyikan deskripsi lengkap
            shortDesc.style.display = "inline";
            fullDesc.style.display = "none";
            toggleLink.textContent = "Baca Selengkapnya";
        } else {
            // Menampilkan deskripsi lengkap dan menyembunyikan deskripsi singkat
            shortDesc.style.display = "none";
            fullDesc.style.display = "inline";
            toggleLink.textContent = "Urungkan";
        }
    }
</script>
<script>
    function changeMainImage(imageSrc) {
        // Ganti gambar utama dengan gambar yang dipilih
        document.getElementById('product-detail').src = imageSrc;
    }
</script>


    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
// Handle the form submission
document.getElementById('comment-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    let name = document.getElementById('comment-name').value;
    let comment = document.getElementById('comment-text').value;

    // Send data via AJAX to the Laravel controller
    fetch('/komentar/store', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Pastikan ini ada di file Blade Anda
        },
        body: JSON.stringify({
            nama: name,
            isi_komentar: comment,
            id_produk: {{ $product->id_produk }} // ID produk yang relevan
        })
    }).then(response => response.json())
    .then(data => {
        // Add the comment to the list if successfully saved
        if (data.success) {
            let commentList = document.getElementById('comment-list');
            let newComment = `
                <div class="media mb-3">
                    <div class="media-body">
                        <h6 class="mt-0">${name}</h6>
                        <p>${comment}</p>
                    </div>
                </div>
            `;
            commentList.innerHTML += newComment;

            // Clear form fields
            document.getElementById('comment-name').value = '';
            document.getElementById('comment-text').value = '';

            // Show success notification
            let notification = document.getElementById('notification');
            notification.textContent = 'Komentar berhasil ditambahkan!';
            notification.style.display = 'block';

            // Optional: Hide notification after a few seconds
            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000); // Hide after 3 seconds
        }
    }).catch(error => console.log(error));
});

        

    </script>
    <!-- End Slider Script -->

</body>

</html>