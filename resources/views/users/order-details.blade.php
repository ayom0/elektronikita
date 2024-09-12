<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details - ElektronikKita</title>

    <link rel="shortcut icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="assets/home/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/home/css/custom.css">

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

    <!-- Footer (Reuse your existing footer code) -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="assets/home/js/jquery-1.11.0.min.js"></script>
    <script src="assets/home/js/bootstrap.bundle.min.js"></script>
    <script src="assets/home/js/custom.js"></script>
</body>
</html>
