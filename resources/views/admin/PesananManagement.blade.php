<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Manajemen Pesanan</title>
    <link rel="stylesheet" href="assets/admin/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
        }
        .close-btn {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .order-card {
            display: flex;
            justify-content: space-between;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .order-details {
            display: flex;
            align-items: center;
        }
        .order-image {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }
        .order-status {
            align-self: center;
            padding: 5px 10px;
            border-radius: 5px;
            color: #fff;
        }
        .dikirim {
            background-color: #28a745; /* Green */
        }
        .editOrderBtn {
            background-color: transparent; /* No background */
            border: none; /* Remove border */
            cursor: pointer; /* Pointer cursor */
            font-size: 18px; /* Font size */
            padding: 8px; /* Padding */
            display: flex; /* Flex display */
            align-items: center; /* Center icon */
        }
        .editOrderBtn i {
            color: #007bff; /* Pencil icon color */
            font-size: 20px; /* Icon size */
        }
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <h2>Admin Panel</h2>
        </div>
        <ul>
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/usermanagement') }}">Usermanagement</a></li>
            <li><a href="{{ url('/products') }}">ProductManagement</a></li>
            <li><a href="{{ url('/categories') }}">CategoryManagement</a></li>
            <li><a href="{{ url('/komentars') }}">komentarManagement</a></li>
            <li><a href="{{ url('/orders') }}">TransaksiManagement</a></li>
            <li><a href="{{ url('/contacts') }}">contactManagement</a></li>
            <li><a href="{{ url('/PesananManagement') }}">PesananManagement</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a></li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
        </ul>
    </div>

    <div class="main-content" id="mainContent">
        <button id="toggleSidebarBtn">☰</button>
        <div id="order-management" class="content-section">
            <h2>Manajemen Pesanan</h2>
            <button id="addOrderBtn">Tambah Pesanan</button>

            <div class="order-card" data-order-id="1">
                <div class="order-details">
                    <img src="{{ asset('assets/home/img/rogstrix1.jpg') }}" alt="Gambar Produk" class="order-image">
                    <div class="order-info">
                        <h3 class="product-name">Nama Barang 1</h3>
                        <p class="product-price">Harga: Rp 150,000</p>
                        <p class="product-quantity">Jumlah: 2</p>
                        <p class="product-subtotal">Sub Total: Rp 300,000</p>
                    </div>
                </div>
                <div class="order-status dikirim">Dikirim</div>
                <button class="editOrderBtn">
                    <i class="fas fa-pencil-alt"></i> <!-- Pencil icon -->
                </button> <!-- Edit Button -->
            </div>

            <!-- Repeat order-card div for more orders as needed -->

        </div>
    </div>

    <!-- Modal for Add Order -->
    <div id="addOrderModal" class="modal">
        <div class="modal-content">
            <button class="close-btn">&times;</button>
            <form id="addOrderForm" action="#" method="POST">
                <div class="form-group">
                    <label for="order-product-name">Nama Barang:</label>
                    <input type="text" id="order-product-name" name="product_name" required>
                </div>
                <div class="form-group">
                    <label for="order-price">Harga:</label>
                    <input type="number" id="order-price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="order-quantity">Jumlah:</label>
                    <input type="number" id="order-quantity" name="quantity" required>
                </div>
                <div class="form-group">
                    <label for="order-status">Status:</label>
                    <select id="order-status" name="status" required>
                        <option value="dikirim">Dikirim</option>
                        <option value="proses">Proses</option>
                        <option value="dibatalkan">Dibatalkan</option>
                    </select>
                </div>
                <button type="submit">Tambah Pesanan</button>
            </form>
        </div>
    </div>

    <!-- Modal for Edit Order -->
    <div id="editOrderModal" class="modal">
        <div class="modal-content">
            <button class="close-btn">&times;</button>
            <form id="editOrderForm" action="#" method="POST">
                <div class="form-group">
                    <label for="edit-order-product-name">Nama Barang:</label>
                    <input type="text" id="edit-order-product-name" name="product_name" required>
                </div>
                <div class="form-group">
                    <label for="edit-order-price">Harga:</label>
                    <input type="number" id="edit-order-price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="edit-order-quantity">Jumlah:</label>
                    <input type="number" id="edit-order-quantity" name="quantity" required>
                </div>
                <div class="form-group">
                    <label for="edit-order-status">Status:</label>
                    <select id="edit-order-status" name="status" required>
                        <option value="dikirim">Dikirim</option>
                        <option value="proses">Proses</option>
                        <option value="dibatalkan">Dibatalkan</option>
                    </select>
                </div>
                <button type="submit">Simpan Perubahan</button>
            </form>
        </div>
    </div>

    <script>
        // Open modal for adding a new order
        document.getElementById('addOrderBtn').addEventListener('click', function() {
            document.getElementById('addOrderModal').style.display = 'block';
            document.getElementById('addOrderForm').reset();
        });

        // Open modal for editing an order
        document.querySelectorAll('.editOrderBtn').forEach(function(button) {
            button.addEventListener('click', function() {
                var orderCard = this.closest('.order-card');
                var productName = orderCard.querySelector('.product-name').innerText;
                var price = orderCard.querySelector('.product-price').innerText.replace('Harga: Rp ', '');
                var quantity = orderCard.querySelector('.product-quantity').innerText.replace('Jumlah: ', '');
                var status = orderCard.querySelector('.order-status').innerText.trim().toLowerCase();

                document.getElementById('edit-order-product-name').value = productName;
                document.getElementById('edit-order-price').value = price;
                document.getElementById('edit-order-quantity').value = quantity;
                document.getElementById('edit-order-status').value = status;
                
                document.getElementById('editOrderModal').style.display = 'block';
            });
        });

        // Close modal when clicking outside of the modal content
        window.addEventListener('click', function(event) {
            var addModal = document.getElementById('addOrderModal');
            var editModal = document.getElementById('editOrderModal');
            if (event.target == addModal) {
                addModal.style.display = 'none';
            }
            if (event.target == editModal) {
                editModal.style.display = 'none';
            }
        });

        // Close modal when clicking on the close button
        document.querySelectorAll('.close-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                this.closest('.modal').style.display = 'none';
            });
        });
    </script>
</body>
</html>
