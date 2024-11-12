<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Product Management</title>
    <link rel="stylesheet" href="assets/admin/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

.filter-form {
    margin-bottom: 20px;
    display: flex;
    gap: 10px;
}
.filter-form input,
.filter-form select{
    padding: 5px;
    
}

.filter-form button {
    padding: 5px;
    background-color: #4CAF50;
    
}
        
        .pagination {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}

.pagination a {
    text-decoration: none;
    color: #306EE8;
    padding: 8px 16px;
    border: 1px solid #306EE8;
    border-radius: 4px;
}

.pagination .disabled {
    color: #ccc;
    padding: 8px 16px;
}

.pagination span {
    margin: 0 10px;
}

        .product-description {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            max-width: 200px; /* Anda bisa menyesuaikan lebar ini */
            display: inline-block;
        }

        .read-more {
        color: #306EE8; /* Warna biru */
        cursor: pointer;
        text-decoration: underline;
    }

        .full-description {
            display: none; /* Sembunyikan deskripsi lengkap secara default */
        }

        .filter-sort {
    margin-bottom: 20px;
    display: flex;
    gap: 10px;
    align-items: center;
}
.filter-sort form select,
.filter-sort form input[type="text"] {
    padding: 8px;
    font-size: 14px;
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
            <li><a href="{{ url('/usermanagement') }}">User</a></li>
            <li><a href="{{ url('/products') }}">Product</a></li>
            <li><a href="{{ url('/categories') }}">Category</a></li>
            <li><a href="{{ url('/komentars') }}">komentar</a></li>
            <li><a href="{{ url('/orders') }}">Transaksi</a></li>
            <li><a href="{{ url('/contacts') }}">contact</a></li>
            <li><a href="{{ url('/PesananManagement') }}">Pesanan</a></li>
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
        <div id="products" class="content-section">
            <h2>Product Management</h2>
            <button id="addProductBtn">Add New Product</button>
            <div class="filter-section">
    <form action="{{ route('products.index') }}" method="GET" class="filter-form">
        <label for="sort">Urutkan Berdasarkan:</label>
        <select name="sort" id="sort">
            <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Terbaru</option>
            <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Terlama</option>
        </select>

        <label for="category">Kategori:</label>
        <select name="category" id="category">
            <option value="">Semua</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id_kategori }}" {{ request('category') == $category->id_kategori ? 'selected' : '' }}>
                    {{ $category->kategori }}
                </option>
            @endforeach
        </select>

        <label for="name">Nama Produk:</label>
        <input type="text" name="name" id="name" value="{{ request('name') }}" placeholder="Cari nama produk...">

        <button type="submit">Terapkan</button>
    </form>
</div>

            <!-- Tabel Produk -->
<table>
    <thead>
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Foto</th>
            <th>Foto Lainnya</th>
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
        <td>
    @if ($product->foto_lainnya)
        @foreach (json_decode($product->foto_lainnya) as $fotoLainnya)
            <img src="{{ asset('storage/' . $fotoLainnya) }}" alt="Foto lainnya" style="width: 50px; height: auto;">
        @endforeach
    @else
        No foto
    @endif
</td>
        <td>
    <span class="product-description">{{ Str::limit($product->deskripsi, 20) }}</span>
    @if (strlen($product->deskripsi) > 20) <!-- Cek apakah deskripsi lebih panjang dari 100 karakter -->
        <span class="full-description">{{ $product->deskripsi }}</span>
        <span class="read-more">Read More</span>
    @endif
</td>









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
<!-- Tambahkan navigasi pagination -->
<div class="pagination">
    @if ($products->onFirstPage())
        <span class="disabled">Sebelumnya</span>
    @else
        <a href="{{ $products->previousPageUrl() }}">Sebelumnya</a>
    @endif

    <span>Halaman {{ $products->currentPage() }} dari {{ $products->lastPage() }}</span>

    @if ($products->hasMorePages())
        <a href="{{ $products->nextPageUrl() }}">Selanjutnya</a>
    @else
        <span class="disabled">Selanjutnya</span>
    @endif
</div>


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
    <label for="add-foto-lainnya">Foto Lainnya:</label>
    <input type="file" id="add-foto-lainnya" name="foto_lainnya[]" accept="image/*" multiple>
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
    <label for="edit-foto-lainnya">Foto Lainnya:</label>
    <input type="file" id="edit-foto-lainnya" name="foto_lainnya[]" accept="image/*" multiple>
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

document.querySelectorAll('.read-more').forEach(function(link) {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah tindakan default tautan
        const fullDescription = this.previousElementSibling; // Elemen deskripsi lengkap
        const shortDescription = this.previousElementSibling.previousElementSibling; // Elemen deskripsi singkat

        // Menampilkan atau menyembunyikan deskripsi
        if (fullDescription.style.display === 'none' || fullDescription.style.display === '') {
            fullDescription.style.display = 'inline'; // Tampilkan deskripsi lengkap
            shortDescription.style.display = 'none'; // Sembunyikan deskripsi singkat
            this.textContent = 'Read Less'; // Ubah teks menjadi 'Read Less'
        } else {
            fullDescription.style.display = 'none'; // Sembunyikan deskripsi lengkap
            shortDescription.style.display = 'inline'; // Tampilkan deskripsi singkat
            this.textContent = 'Read More'; // Kembalikan teks menjadi 'Read More'
        }
    });
});






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
        var kategoriId = this.getAttribute('data-id-kategori'); // Pastikan data-id-kategori adalah atribut yang benar

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
    if (event.target === addModal) {
        addModal.style.display = 'none';
    } else if (event.target === editModal) {
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
