<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Manajemen Pesanan</title>
    <link rel="stylesheet" href="assets/admin/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* CSS existing di sini */
        /* Modal styles */
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
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/usermanagement') }}">Usermanagement</a></li>
            <li><a href="{{ url('/products') }}">ProductManagement</a></li>
            <li><a href="{{ url('/categories') }}">CategoryManagement</a></li>
            <li><a href="{{ url('/komentars') }}">Komentar Management</a></li>
            <li><a href="{{ url('/orders') }}">Transaksi Management</a></li>
            <li><a href="{{ url('/contacts') }}">Contact Management</a></li>
            <li><a href="{{ url('/PesananManagement') }}">Pesanan Management</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    <div class="main-content" id="mainContent">
        <button id="toggleSidebarBtn">☰</button>
        <div id="order-management" class="content-section">
            <h2>Manajemen Pesanan</h2>
           

            <!-- Pesanan Table -->
            <table>
                <thead>
                    <tr>
                        <th>id_user</th>
                        <th>id_transaksi</th>
                        <th>product</th>
                        <th>quantity</th>
                        <th>harga</th>
                        <th>subtotal</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksis as $transaksi)
                    <tr>
                        <td>{{ $transaksi->user_id }}</td>
                        <td>{{ $transaksi->id_transaksi }}</td>
                        <td>{{ $transaksi->product->nama_produk }}</td>
                        <td>{{ $transaksi->quantity }}</td>
                        <td>{{ $transaksi->product->harga }}</td>
                        <td>{{ $transaksi->subtotal }}</td>
                        <td>
                            <div class="order-status {{ strtolower($transaksi->status) }}">
                                {{ ucfirst($transaksi->status) }}
                            </div>
                        </td>
                        <td class="actions">
                            <button class="edit" 
                                    data-id="{{ $transaksi->id_transaksi }}" 
                                    data-status="{{ $transaksi->status }}">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <form action="{{ route('PesananManagement.destroy', $transaksi->id_transaksi) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="delete" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal untuk edit status -->
        <div class="modal" id="editModal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <h2>Edit Status Pesanan</h2>
                <form id="editForm" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="transaksiId">
                    <div>
                        <label for="status">Status:</label>
                        <select name="status" id="status">
                            <option value="pending">Pending</option>
                            <option value="dikirim">Dikirim</option>
                            <option value="selesai">Selesai</option>
                            <option value="batal">Batal</option>
                        </select>
                    </div>
                    <button type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Close modal when clicking the close button
        document.querySelectorAll('.close-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                this.closest('.modal').style.display = 'none';
            });
        });

        // Open edit modal and populate data
        document.querySelectorAll('.edit').forEach(function(button) {
            button.addEventListener('click', function() {
                var id = this.getAttribute('data-id');
                var status = this.getAttribute('data-status');
                document.getElementById('transaksiId').value = id;
                document.getElementById('status').value = status;

                // Set form action to update route
                document.getElementById('editForm').action = '/PesananManagement/' + id;

                var modal = document.getElementById('editModal');
                modal.style.display = 'block';
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
