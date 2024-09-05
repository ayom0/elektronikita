<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Kategori Management</title>
    <link rel="stylesheet" href="assets/admin/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    <style>
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
        <div id="kategori" class="content-section">
            <h2>Kategori Management</h2>
            <button id="addKategoriBtn">Add New Kategori</button>
            <table>
                <thead>
                    <tr>
                        <th>ID Kategori</th>
                        <th>Kategori</th>
                        <th>Jenis Kategori</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id_kategori }}</td>
                        <td>{{ $category->kategori }}</td>
                        <td>{{ $category->jenis_kategori }}</td>
                        <td class="actions">
                            <button class="edit" 
                                    data-id="{{ $category->id_kategori }}" 
                                    data-kategori="{{ $category->kategori }}" 
                                    data-jenis-kategori="{{ $category->jenis_kategori }}">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <form action="{{ route('categories.destroy', $category->id_kategori) }}" method="POST" style="display:inline;">
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

    <!-- Modal for Add Kategori -->
    <div id="addKategoriModal" class="modal">
        <div class="modal-content">
            <button class="close-btn">&times;</button>
            <form id="addKategoriForm" action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="add-kategori">Kategori:</label>
<input type="text" id="add-kategori" name="kategori" required>

    </div>
    <div class="form-group">
        <label for="add-jenis-kategori">Jenis Kategori:</label>
        <input type="text" id="add-jenis-kategori" name="jenis_kategori" required>
    </div>
    <button type="submit">Add Kategori</button>
</form>

        </div>
    </div>

    <!-- Modal for Edit Kategori -->
    <div id="editKategoriModal" class="modal">
        <div class="modal-content">
            <button class="close-btn">&times;</button>
            <form id="editKategoriForm" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="edit-kategori">Kategori:</label>
                    <input type="text" id="edit-kategori" name="kategori" required>
                </div>
                <div class="form-group">
                    <label for="edit-jenis-kategori">Jenis Kategori:</label>
                    <input type="text" id="edit-jenis-kategori" name="jenis_kategori" required>
                </div>
                <input type="hidden" id="edit-kategori-id" name="id_kategori">
                <button type="submit">Edit Kategori</button>
            </form>
        </div>
    </div>

    <script>
        // Open modal for adding a new kategori
        document.getElementById('addKategoriBtn').addEventListener('click', function() {
            document.getElementById('addKategoriModal').style.display = 'block';
            document.getElementById('addKategoriForm').reset();
        });

        // Open modal for editing a kategori
       
document.querySelectorAll('.edit').forEach(function(button) {
    button.addEventListener('click', function() {
        var kategoriId = this.getAttribute('data-id');
        var kategori = this.getAttribute('data-kategori');
        var jenisKategori = this.getAttribute('data-jenis-kategori');

        document.getElementById('edit-kategori').value = kategori;
        document.getElementById('edit-jenis-kategori').value = jenisKategori;
        document.getElementById('edit-kategori-id').value = kategoriId;

        document.getElementById('editKategoriForm').action = "{{ url('categories') }}/" + kategoriId;
        document.getElementById('editKategoriModal').style.display = 'block';
    });
});



        // Close modal when clicking outside of the modal content
        window.addEventListener('click', function(event) {
            var addModal = document.getElementById('addKategoriModal');
            var editModal = document.getElementById('editKategoriModal');
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
