<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Product Management</title>
    <link rel="stylesheet" href="assets/admin/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Your existing CSS for sidebar, main content, table, and modal here */
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <h2>Admin Panel</h2>
        </div>
        <ul>
            <li><a href="#user-management">User Management</a></li>
            <li><a href="#payments">Payments</a></li>
            <li><a href="#kategori">Kategori</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#shipping">Shipping</a></li>
            <li><a href="#landing-pages">Landing Pages</a></li>
        </ul>
    </div>

    <div class="main-content" id="mainContent">
        <button id="toggleSidebarBtn">☰</button>
        <div id="products" class="content-section">
            <h2>Product Management</h2>
            <button id="addProductBtn">Add New Product</button>
            <!-- Tabel Produk -->
<table>
    <thead>
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id_produk }}</td>
            <td>{{ $product->nama_produk }}</td>
            <td>
                @if ($product->foto)
                    <img src="{{ asset('storage/' . $product->foto) }}" alt="{{ $product->nama_produk }}" style="width: 100px; height: auto;">
                @else
                    No Image
                @endif
            </td>
            <td>{{ $product->deskripsi }}</td>
            <td>{{ number_format($product->harga, 2, ',', '.') }}</td>
            <td>{{ $product->category->kategori }}</td>
            <td class="actions">
                <button class="edit" 
                        data-id="{{ $product->id_produk }}" 
                        data-nama="{{ $product->nama_produk }}" 
                        data-deskripsi="{{ $product->deskripsi }}" 
                        data-harga="{{ $product->harga }}" 
                        data-id-kategori="{{ $product->id_kategori }}" 
                        data-foto="{{ $product->foto }}">
                    <i class="fas fa-pencil-alt"></i>
                </button>
                <form action="{{ route('products.destroy', $product->id_produk) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="delete"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

        </div>
    </div>

    <!-- Modal for Add Product -->
<div id="addProductModal" class="modal">
    <div class="modal-content">
        <button class="close-btn">&times;</button>
        <form id="addProductForm" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="add-nama-produk">Nama Produk:</label>
                <input type="text" id="add-nama-produk" name="nama_produk" required>
            </div>
            <div class="form-group">
                <label for="add-foto">Foto:</label>
                <input type="file" id="add-foto" name="foto" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="add-deskripsi">Deskripsi:</label>
                <textarea id="add-deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label for="add-harga">Harga:</label>
                <input type="number" id="add-harga" name="harga" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="add-id-kategori">Kategori:</label>
                <select id="add-id-kategori" name="id_kategori" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id_kategori }}">{{ $category->kategori }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Add Product</button>
        </form>
    </div>
</div>

<!-- Modal for Edit Product -->
<div id="editProductModal" class="modal">
    <div class="modal-content">
        <button class="close-btn">&times;</button>
        <form id="editProductForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="edit-nama-produk">Nama Produk:</label>
                <input type="text" id="edit-nama-produk" name="nama_produk" required>
            </div>
            <div class="form-group">
                <label for="edit-foto">Foto:</label>
                <input type="file" id="edit-foto" name="foto" accept="image/*">
            </div>
            <div class="form-group">
                <label for="edit-deskripsi">Deskripsi:</label>
                <textarea id="edit-deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label for="edit-harga">Harga:</label>
                <input type="number" id="edit-harga" name="harga" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="edit-id-kategori">Kategori:</label>
                <select id="edit-id-kategori" name="id_kategori" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id_kategori }}">{{ $category->kategori }}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" id="edit-product-id" name="id_produk">
            <button type="submit">Edit Product</button>
        </form>
    </div>
</div>


    <script>
        // Open modal for adding a new product
        document.getElementById('addProductBtn').addEventListener('click', function() {
            document.getElementById('addProductModal').style.display = 'block';
            document.getElementById('addProductForm').reset();
        });

        // Open modal for editing a product
        document.querySelectorAll('.edit').forEach(function(button) {
            button.addEventListener('click', function() {
                var productId = this.getAttribute('data-id');
                var nama = this.getAttribute('data-nama');
                var harga = this.getAttribute('data-harga');
                var kategoriId = this.getAttribute('data-kategori-id');

                document.getElementById('edit-nama-produk').value = nama;
                document.getElementById('edit-harga').value = harga;
                document.getElementById('edit-id-kategori').value = kategoriId;
                document.getElementById('edit-product-id').value = productId;

                document.getElementById('editProductForm').action = "{{ url('products') }}/" + productId;
                document.getElementById('editProductModal').style.display = 'block';
            });
        });

        // Close modal when clicking outside of the modal content
        window.addEventListener('click', function(event) {
            var addModal = document.getElementById('addProductModal');
            var editModal = document.getElementById('editProductModal');
            if (event.target == addModal) {
                addModal.style.display = 'none';
            } else if (event.target == editModal) {
                editModal.style.display = 'none';
            }
        });

        // Close modal when clicking the close button
        document.querySelectorAll('.close-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                this.closest('.modal').style.display = 'none';
            });
        });

        // Toggle sidebar
        document.getElementById('toggleSidebarBtn').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            var mainContent = document.getElementById('mainContent');
            sidebar.classList.toggle('closed');
            mainContent.classList.toggle('collapsed');
            this.classList.toggle('collapsed');
        });
    </script>
</body>
</html>
