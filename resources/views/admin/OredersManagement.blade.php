<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Management</title>
    <link rel="stylesheet" href="assets/admin/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
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
            <li><a href="#orders">Orders</a></li> <!-- Added Orders link -->
        </ul>
    </div>

    <div class="main-content" id="mainContent">
        <button id="toggleSidebarBtn">☰</button>
        <div id="orders" class="content-section">
            <h2>Orders Management</h2>
            <button id="addOrderBtn">Add New Order</button>
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Recipient Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Subtotal</th>
                        <th>Shipping Cost</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->recipient_name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->message }}</td>
                        <td>{{ $order->subtotal }}</td>
                        <td>{{ $order->shipping_cost }}</td>
                        <td>{{ $order->total }}</td>
                        <td class="actions">
                            <button class="edit" 
                                    data-id="{{ $order->id }}" 
                                    data-user-id="{{ $order->user_id }}"
                                    data-recipient-name="{{ $order->recipient_name }}" 
                                    data-email="{{ $order->email }}" 
                                    data-message="{{ $order->message }}" 
                                    data-subtotal="{{ $order->subtotal }}" 
                                    data-shipping-cost="{{ $order->shipping_cost }}" 
                                    data-total="{{ $order->total }}">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
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

    <!-- Modal for Add Order -->
    <div id="addOrderModal" class="modal">
        <div class="modal-content">
            <button class="close-btn">&times;</button>
            <form id="addOrderForm" action="{{ route('orders.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="add-user-id">User ID:</label>
                    <input type="text" id="add-user-id" name="user_id" required>
                </div>
                <div class="form-group">
                    <label for="add-recipient-name">Recipient Name:</label>
                    <input type="text" id="add-recipient-name" name="recipient_name" required>
                </div>
                <div class="form-group">
                    <label for="add-email">Email:</label>
                    <input type="email" id="add-email" name="email">
                </div>
                <div class="form-group">
                    <label for="add-message">Message:</label>
                    <textarea id="add-message" name="message"></textarea>
                </div>
                <div class="form-group">
                    <label for="add-subtotal">Subtotal:</label>
                    <input type="number" id="add-subtotal" name="subtotal" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="add-shipping-cost">Shipping Cost:</label>
                    <input type="number" id="add-shipping-cost" name="shipping_cost" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="add-total">Total:</label>
                    <input type="number" id="add-total" name="total" step="0.01" required>
                </div>
                <button type="submit">Add Order</button>
            </form>
        </div>
    </div>

    <!-- Modal for Edit Order -->
    <div id="editOrderModal" class="modal">
        <div class="modal-content">
            <button class="close-btn">&times;</button>
            <form id="editOrderForm" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="edit-user-id">User ID:</label>
                    <input type="text" id="edit-user-id" name="user_id" required>
                </div>
                <div class="form-group">
                    <label for="edit-recipient-name">Recipient Name:</label>
                    <input type="text" id="edit-recipient-name" name="recipient_name" required>
                </div>
                <div class="form-group">
                    <label for="edit-email">Email:</label>
                    <input type="email" id="edit-email" name="email">
                </div>
                <div class="form-group">
                    <label for="edit-message">Message:</label>
                    <textarea id="edit-message" name="message"></textarea>
                </div>
                <div class="form-group">
                    <label for="edit-subtotal">Subtotal:</label>
                    <input type="number" id="edit-subtotal" name="subtotal" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="edit-shipping-cost">Shipping Cost:</label>
                    <input type="number" id="edit-shipping-cost" name="shipping_cost" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="edit-total">Total:</label>
                    <input type="number" id="edit-total" name="total" step="0.01" required>
                </div>
                <button type="submit">Update Order</button>
            </form>
        </div>
    </div>

    <script>
        // Toggle sidebar visibility
        document.getElementById('toggleSidebarBtn').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('hidden');
            document.getElementById('mainContent').classList.toggle('expanded');
        });

        // Show Add Order Modal
        document.getElementById('addOrderBtn').addEventListener('click', function() {
            document.getElementById('addOrderModal').style.display = 'block';
        });

        // Show Edit Order Modal
        document.querySelectorAll('.edit').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const userId = this.getAttribute('data-user-id');
                const recipientName = this.getAttribute('data-recipient-name');
                const email = this.getAttribute('data-email');
                const message = this.getAttribute('data-message');
                const subtotal = this.getAttribute('data-subtotal');
                const shippingCost = this.getAttribute('data-shipping-cost');
                const total = this.getAttribute('data-total');

                const form = document.getElementById('editOrderForm');
                form.action = `/orders/${id}`;
                form.querySelector('#edit-user-id').value = userId;
                form.querySelector('#edit-recipient-name').value = recipientName;
                form.querySelector('#edit-email').value = email;
                form.querySelector('#edit-message').value = message;
                form.querySelector('#edit-subtotal').value = subtotal;
                form.querySelector('#edit-shipping-cost').value = shippingCost;
                form.querySelector('#edit-total').value = total;

                document.getElementById('editOrderModal').style.display = 'block';
            });
        });

        // Close Modals
        document.querySelectorAll('.close-btn').forEach(button => {
            button.addEventListener('click', function() {
                this.closest('.modal').style.display = 'none';
            });
        });

        // Close modals when clicking outside
        window.addEventListener('click', function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        });
    </script>
</body>
</html>

