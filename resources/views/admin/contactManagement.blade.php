<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management</title>
    <link rel="stylesheet" href="assets/admin/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Your existing CSS for sidebar, main content, table, and modal here */

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
        <div id="contact-management" class="content-section">
            <h2>Contact Management</h2>
            <button id="addContactBtn">Add New Contact</button>
            <!-- Form Filter -->
<div class="filter-form">
<div class="filter-form">
    <form method="GET" action="{{ url('/contacts') }}" class="filter-form">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ request()->nama }}">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ request()->email }}">
        
        <button type="submit">Apply</button>
        <a href="{{ url('/contacts') }}">Reset</a>
    </form>
</div>

    
</div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>{{ $contact->message }}</td>
                        <td class="actions">
                            <button class="edit" 
                                    data-id="{{ $contact->id }}" 
                                    data-name="{{ $contact->name }}" 
                                    data-email="{{ $contact->email }}" 
                                    data-address="{{ $contact->address }}" 
                                    data-message="{{ $contact->message }}">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
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

    <!-- Modal for Add Contact -->
    <div id="addContactModal" class="modal">
        <div class="modal-content">
            <button class="close-btn">&times;</button>
            <form id="addContactForm" action="{{ route('contacts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="add-name">Name:</label>
                    <input type="text" id="add-name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="add-email">Email:</label>
                    <input type="email" id="add-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="add-address">Address:</label>
                    <input type="text" id="add-address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="add-message">Message:</label>
                    <textarea id="add-message" name="message" required></textarea>
                </div>
                <button type="submit">Add Contact</button>
            </form>
        </div>
    </div>

    <!-- Modal for Edit Contact -->
    <div id="editContactModal" class="modal">
        <div class="modal-content">
            <button class="close-btn">&times;</button>
            <form id="editContactForm" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="edit-name">Name:</label>
                    <input type="text" id="edit-name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="edit-email">Email:</label>
                    <input type="email" id="edit-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="edit-address">Address:</label>
                    <input type="text" id="edit-address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="edit-message">Message:</label>
                    <textarea id="edit-message" name="message" required></textarea>
                </div>
                <input type="hidden" id="edit-contact-id" name="contact_id">
                <button type="submit">Edit Contact</button>
            </form>
        </div>
    </div>

    <script>
        // Open modal for adding a new contact
        document.getElementById('addContactBtn').addEventListener('click', function() {
            document.getElementById('addContactModal').style.display = 'block';
            document.getElementById('addContactForm').reset();
        });

        // Open modal for editing a contact
        document.querySelectorAll('.edit').forEach(function(button) {
            button.addEventListener('click', function() {
                var contactId = this.getAttribute('data-id');
                var contactName = this.getAttribute('data-name');
                var contactEmail = this.getAttribute('data-email');
                var contactAddress = this.getAttribute('data-address');
                var contactMessage = this.getAttribute('data-message');

                document.getElementById('edit-name').value = contactName;
                document.getElementById('edit-email').value = contactEmail;
                document.getElementById('edit-address').value = contactAddress;
                document.getElementById('edit-message').value = contactMessage;
                document.getElementById('edit-contact-id').value = contactId;

                document.getElementById('editContactForm').action = "{{ url('contacts') }}/" + contactId;
                document.getElementById('editContactModal').style.display = 'block';
            });
        });

        // Close modal when clicking outside of the modal content
        window.addEventListener('click', function(event) {
            var addModal = document.getElementById('addContactModal');
            var editModal = document.getElementById('editContactModal');
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
