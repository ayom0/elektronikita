<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/admin/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    <style>

/* Your existing CSS for sidebar, main content, table, and modal here */
h2 {
    color: black;
}

       /* Styling untuk form filter */
.filter-form {
    display: flex;
    align-items: center;
    gap: 15px;
    max-width: 100%; /* Memungkinkan form untuk memanjang sepanjang lebar kontainer */
    padding: 10px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: auto; /* Pastikan form memanjang sesuai ukuran kontainer */
}

.filter-form label {
    font-weight: bold;
    margin-right: 10px;
    font-size: 14px;
}

.filter-form select,
.filter-form input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    width: 200px; /* Memberikan lebar tetap pada input dan select */
}

.filter-form button {
    padding: 8px 15px;
    border: none;
    background-color: #4CAF50;
    color: white;
    font-size: 14px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
    margin-left: 10px;
}

.filter-form button:hover {
    background-color: #45a049;
}
        /* Your existing CSS for sidebar, main content, table, and modal here */
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
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <h2>Admin Panel</h2>
        </div>
        <ul>
        <li><a href="{{ url('/dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="{{ url('/usermanagement') }}"><i class="fas fa-users"></i> User</a></li>
        <li><a href="{{ url('/products') }}"><i class="fas fa-box"></i> Product</a></li>
        <li><a href="{{ url('/categories') }}"><i class="fas fa-tags"></i> Category</a></li>
        <li><a href="{{ url('/komentars') }}"><i class="fas fa-comments"></i> Komentar</a></li>
        <li><a href="{{ url('/orders') }}"><i class="fas fa-shopping-cart"></i> Transaksi</a></li>
        <li><a href="{{ url('/contacts') }}"><i class="fas fa-envelope"></i> Contact</a></li>
        <li><a href="{{ url('/PesananManagement') }}"><i class="fas fa-clipboard-list"></i> Pesanan</a></li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
        </ul>
    </div>

    <div class="main-content" id="mainContent">
        <button id="toggleSidebarBtn">☰</button>
        <div id="komentar-management" class="content-section">
            <h2>Komentar Management</h2>
            <button id="addKomentarBtn">Add New Komentar</button>
             <!-- Form Filter -->
    <form method="GET" action="{{ route('komentars.index') }}"  class="filter-form">
        <input type="text" name="nama" placeholder="Nama" value="{{ request('nama') }}">
        <input type="number" name="id_user" placeholder="ID User" value="{{ request('id_user') }}">
        <input type="number" name="rating" placeholder="Rating" value="{{ request('rating') }}">
        <input type="number" name="id_produk" placeholder="ID Produk" value="{{ request('id_produk') }}">
        <button type="submit">Apply</button>
        <a href="{{ route('komentars.index') }}">Reset</a>
    </form>
    
            <table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Isi Komentar</th>
            <th>Produk</th>
            <th>User</th>
            <th>Rating</th> <!-- Tambahkan kolom rating -->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($komentars as $komentar)
        <tr>
            <td>{{ $komentar->nama }}</td>
            <td>{{ $komentar->isi_komentar }}</td>
            <td>{{ $komentar->id_produk }}</td> <!-- Produk ID -->
            <td>{{ $komentar->id_user }}</td> <!-- User ID -->
            <td>{{ $komentar->rating }}</td> <!-- Tampilkan rating -->
            <td class="actions">
                <button class="edit" 
                        data-id="{{ $komentar->id_komentar }}" 
                        data-nama="{{ $komentar->nama }}" 
                        data-isi="{{ $komentar->isi_komentar }}" 
                        data-produk="{{ $komentar->id_produk }}" 
                        data-user="{{ $komentar->id_user }}"
                        data-rating="{{ $komentar->rating }}"> <!-- Tambahkan data-rating -->
                    <i class="fas fa-pencil-alt"></i>
                </button>
                <form action="{{ route('komentars.destroy', $komentar->id_komentar) }}" method="POST" style="display:inline;">
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

    <!-- Modal for Add Komentar -->
    <div id="addKomentarModal" class="modal">
        <div class="modal-content">
            <button class="close-btn">&times;</button>
            <form id="addKomentarForm" action="{{ route('komentars.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="add-nama">Nama:</label>
                    <input type="text" id="add-nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="add-isi">Isi Komentar:</label>
                    <textarea id="add-isi" name="isi_komentar" required></textarea>
                </div>
                <div class="form-group">
                    <label for="add-produk">ID Produk:</label>
                    <input type="number" id="add-produk" name="id_produk" required>
                </div>
                <div class="form-group">
                    <label for="add-user">ID User:</label>
                    <input type="number" id="add-user" name="id_user" required>
                </div>
                <div class="form-group">
    <label for="add-rating">Rating:</label>
    <input type="number" id="add-rating" name="rating" min="1" max="5" required>
</div>

                <button type="submit">Add Komentar</button>
            </form>
        </div>
    </div>

    <!-- Modal for Edit Komentar -->
    <div id="editKomentarModal" class="modal">
        <div class="modal-content">
            <button class="close-btn">&times;</button>
            <form id="editKomentarForm" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="edit-nama">Nama:</label>
                    <input type="text" id="edit-nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="edit-isi">Isi Komentar:</label>
                    <textarea id="edit-isi" name="isi_komentar" required></textarea>
                </div>
                <div class="form-group">
                    <label for="edit-produk">ID Produk:</label>
                    <input type="number" id="edit-produk" name="id_produk" required>
                </div>
                <div class="form-group">
                    <label for="edit-user">ID User:</label>
                    <input type="number" id="edit-user" name="id_user" required>
                </div>
                <div class="form-group">
    <label for="edit-rating">Rating:</label>
    <input type="number" id="edit-rating" name="rating" min="1" max="5" required>
</div>

                <input type="hidden" id="edit-komentar-id" name="komentar_id">
                <button type="submit">Edit Komentar</button>
            </form>
        </div>
    </div>

    <script>
        // Open modal for adding a new komentar
        document.getElementById('addKomentarBtn').addEventListener('click', function() {
            document.getElementById('addKomentarModal').style.display = 'block';
            document.getElementById('addKomentarForm').reset();
        });

        // Open modal for editing a komentar
        document.querySelectorAll('.edit').forEach(function(button) {
            button.addEventListener('click', function() {
                var komentarId = this.getAttribute('data-id');
                var komentarNama = this.getAttribute('data-nama');
                var komentarIsi = this.getAttribute('data-isi');
                var komentarProduk = this.getAttribute('data-produk');
                var komentarUser = this.getAttribute('data-user');
                var komentarRating = this.getAttribute('data-rating');

                document.getElementById('edit-nama').value = komentarNama;
                document.getElementById('edit-isi').value = komentarIsi;
                document.getElementById('edit-produk').value = komentarProduk;
                document.getElementById('edit-user').value = komentarUser;
                document.getElementById('edit-rating').value = komentarRating;
                document.getElementById('edit-komentar-id').value = komentarId;

                document.getElementById('editKomentarForm').action = "{{ url('komentars') }}/" + komentarId;
                document.getElementById('editKomentarModal').style.display = 'block';
            });
        });

        // Close modal when clicking outside of the modal content
        window.addEventListener('click', function(event) {
            var addModal = document.getElementById('addKomentarModal');
            var editModal = document.getElementById('editKomentarModal');
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
