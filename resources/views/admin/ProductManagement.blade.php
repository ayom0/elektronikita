<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Product Management</title>
    <link rel="stylesheet" href="assets/admin/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    <style>
        /* Your existing CSS and additional styling */

        /* Modal Styling */
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
            border-radius: 10px;
            position: relative;
            text-align: center;
            animation: slideIn 0.5s;
        }

        .close-btn {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-btn:hover,
        .close-btn:focus {
            color: #306EE8;
            text-decoration: none;
        }

        /* Additional Styling */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #306EE8;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transform: translateX(0);
            transition: transform 0.3s ease;
        }

        .sidebar.closed {
            transform: translateX(-100%);
        }

        .sidebar .logo h2 {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 20px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background 0.3s, padding-left 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #235ab2;
            padding-left: 25px;
        }

        .main-content {
            margin-left: 270px; 
            padding: 30px;
            transition: margin-left 0.3s ease;
        }

        .main-content.collapsed {
            margin-left: 70px; 
        }

        #toggleSidebarBtn {
            background-color: #306EE8;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1100;
            transition: left 0.3s ease;
        }

        #toggleSidebarBtn.collapsed {
            left: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: #fafafa;
            border-radius: 10px;
            overflow: hidden;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #306EE8;
            color: white;
        }

        td {
            color: #333;
        }

        td.actions {
            text-align: center;
        }

        td.actions button {
            margin: 0 5px;
            padding: 5px 10px;
            border-radius: 5px;
        }

        td.actions button.edit {
            background-color: #28a745;
        }

        td.actions button.delete {
            background-color: #dc3545;
        }

        td.actions button:hover {
            transform: scale(1.05);
        }

        td.actions button.edit:hover {
            background-color: #218838;
        }

        td.actions button.delete:hover {
            background-color: #c82333;
        }

        @keyframes bounceIn {
    0% {
        transform: scale(0.5);
        opacity: 0;
    }
    60% {
        transform: scale(1.2);
        opacity: 1;
    }
    100% {
        transform: scale(1);
    }
}

.rating li {
    font-size: 20px;
    cursor: pointer;
    color: #ddd;
    transition: color 0.3s;
}

.rating li.selected i.fa-star {
    color: #ffd700;
    animation: bounceIn 0.5s ease forwards;
}

.rating li.hover i.fa-star {
    color: #ffd700;
}

.rating.display-only {
    cursor: default; /* Mencegah perubahan cursor */
}

.rating.display-only li {
    pointer-events: none; /* Mencegah interaksi dengan bintang */
    color: #ddd; /* Warna default untuk bintang */
}

.rating.display-only li i.fa-star.text-warning {
    color: #ffd700; /* Warna bintang yang aktif */
}

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
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
            <li><a href="#products">Products</a></li>
            <li><a href="#shipping">Shipping</a></li>
            <li><a href="#landing-pages">Landing Pages</a></li>
        </ul>
    </div>

    <div class="main-content" id="mainContent">
        <button id="toggleSidebarBtn">☰</button>
        <h2>Product Management</h2>

        <!-- Buttons for CRUD operations -->
        <button onclick="openModal('addProductModal')">Add Product</button>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Rating</th>
                    <th>Color</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dynamic rows will be populated here -->
                <tr>
                    <td><img src="product_image_url.jpg" alt="Product Image" width="50"></td>
                    <td>Product Title</td>
                    <td>Rp 100,000</td>
                    <td>
    <ul class="rating display-only">
        <li><i class="text-warning fa fa-star"></i></li>
        <li><i class="text-warning fa fa-star"></i></li>
        <li><i class="text-warning fa fa-star"></i></li>
        <li><i class="text-muted fa fa-star"></i></li>
        <li><i class="text-muted fa fa-star"></i></li>
    </ul>
</td>
                    <td>Red</td>
                    <td class="actions">
                        <button class="edit" onclick="openModal('editProductModal')"><i class="fas fa-edit"></i></button>
                        <button class="delete" onclick="openModal('deleteProductModal')"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modals -->
    <div id="addProductModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('addProductModal')">&times;</span>
            <h2>Add Product</h2>
            <form>
                <div class="form-group">
                    <label for="productImage">Product Image</label>
                    <input type="file" id="productImage">
                </div>
                <div class="form-group">
                    <label for="productTitle">Title</label>
                    <input type="text" id="productTitle" placeholder="Enter product title">
                </div>
                <div class="form-group">
                    <label for="productPrice">Price</label>
                    <input type="text" id="productPrice" placeholder="Enter product price">
                </div>
                <div class="rating-container">
        <ul id="editRating" class="rating">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
        </ul>
        <input type="hidden" id="editRatingInput" value="0">
    </div>
                <div class="form-group">
                    <label for="productColor">Color</label>
                    <input type="text" id="productColor" placeholder="Enter product color">
                </div>
                <button type="submit">Add Product</button>
            </form>
        </div>
    </div>

    <div id="editProductModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('editProductModal')">&times;</span>
            <h2>Edit Product</h2>
            <form>
                <div class="form-group">
                    <label for="editProductImage">Product Image</label>
                    <input type="file" id="editProductImage">
                </div>
                <div class="form-group">
                    <label for="editProductTitle">Title</label>
                    <input type="text" id="editProductTitle" placeholder="Enter product title">
                </div>
                <div class="form-group">
                    <label for="editProductPrice">Price</label>
                    <input type="text" id="editProductPrice" placeholder="Enter product price">
                </div>
                <div class="rating-container">
        <ul id="addRating" class="rating">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
        </ul>
        <input type="hidden" id="addRatingInput" value="0">
    </div>
                <div class="form-group">
                    <label for="editProductColor">Color</label>
                    <input type="text" id="editProductColor" placeholder="Enter product color">
                </div>
                <button type="submit">Save Changes</button>
            </form>
        </div>
    </div>

    <div id="deleteProductModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('deleteProductModal')">&times;</span>
            <h2>Delete Product</h2>
            <p>Are you sure you want to delete this product?</p>
            <button onclick="confirmDelete()">Yes, Delete</button>
            <button onclick="closeModal('deleteProductModal')">Cancel</button>
        </div>
    </div>

    <!-- Modal JS functions -->
    <script>
        // Open modal
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'block';
        }

        // Close modal
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            });
        }

        // Confirm delete action
        function confirmDelete() {
            alert('Product has been deleted.');
            closeModal('deleteProductModal');
        }

        // Toggle sidebar
    document.getElementById('toggleSidebarBtn').addEventListener('click', function() {
        var sidebar = document.getElementById('sidebar');
        var mainContent = document.getElementById('mainContent');
        sidebar.classList.toggle('closed');
        mainContent.classList.toggle('collapsed');
        this.classList.toggle('collapsed');
    });

    //Rating
    document.querySelectorAll('.rating').forEach(function(ratingElement) {
    let stars = ratingElement.querySelectorAll('li');

    stars.forEach((star, index) => {
        star.addEventListener('click', function() {
            // Reset all stars
            stars.forEach((s, i) => {
                if (i <= index) {
                    s.classList.add('selected');
                    s.style.animation = 'bounceIn 0.5s ease forwards';
                } else {
                    s.classList.remove('selected');
                }
            });

            // Update hidden input value
            let ratingValue = index + 1;
            if (ratingElement.id === 'addRating') {
                document.getElementById('addRatingInput').value = ratingValue;
            } else if (ratingElement.id === 'editRating') {
                document.getElementById('editRatingInput').value = ratingValue;
            }
        });

        star.addEventListener('mouseover', function() {
            stars.forEach((s, i) => {
                if (i <= index) {
                    s.classList.add('hover');
                } else {
                    s.classList.remove('hover');
                }
            });
        });

        star.addEventListener('mouseleave', function() {
            stars.forEach((s) => {
                s.classList.remove('hover');
            });
        });
    });
});

    </script>
</body>
</html>

