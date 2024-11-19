<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard1</title>
    <link rel="stylesheet" href="assets/admin/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js -->
    <style>
        /* Sidebar styling */

        /* Main content styling */
        .main-content {
            margin-left: 290px; /* Increased for better spacing */
            padding: 20px;
            transition: all 0.3s ease;
        }

        .main-content.collapsed {
            margin-left: 80px; /* Adjusted for collapsed state */
        }

        .main-content h1 {
            font-size: 24px;
            color: #333;
        }

        /* Card container styling */
        /* Styling untuk card-container */
.card-container {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

/* Styling untuk setiap card */
.card {
    width: 16%;
    padding: 15px;
    background-color: #007bff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    color: white; /* Pastikan teks warna putih */
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* Styling untuk card-content */
.card-content {
    display: flex;
    align-items: center;
    justify-content: flex-start; /* Mengatur elemen di sisi kiri */
    gap: 30px; /* Memberikan jarak antara ikon dan teks */
}

/* Ukuran dan posisi icon */
.card i {
    font-size: 40px;
}

/* Styling untuk judul card (h2) */
.card h2 {
    font-size: 20px;
    /* Mengatur margin kiri */
    color: white; /* Mengubah warna teks h2 menjadi putih */
    text-align: center; /* Menjaga teks terpusat */
}

/* Styling untuk angka di bawah judul card (p) */
.card p {
    font-size: 19px;
         /* Mengatur margin kiri */
    font-weight: bold; /* Mengatur ketebalan angka menjadi bold */
    text-align: center; /* Menjaga teks terpusat */
}




/* Styling untuk chart */
.chart-container {
    margin-top: 40px;
    width: 100%;
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto;
}


        /* Modal styling */
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
    <!-- Sidebar -->
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
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <button id="toggleSidebarBtn">☰</button>
        <h1>Dashboard Overview</h1>

        <!-- Dashboard Cards -->
        <div class="card-container">
            <div class="card">
                <div class="card-content">
                    <i class="fas fa-users"></i>
                    <div>
                        <h2>Users</h2>
                        <p>{{ $userCount }}</p> <!-- Display the total number of users -->
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <i class="fas fa-box"></i>
                    <div>
                        <h2>Products</h2>
                        <p>{{ $productCount }}</p> <!-- Display the total number of products -->
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <i class="fas fa-shopping-cart"></i>
                    <div>
                        <h2>Orders</h2>
                        <p>{{ $orderCount }}</p> <!-- Display the total number of orders -->
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <i class="fas fa-comments"></i>
                    <div>
                        <h2>Komentar</h2>
                        <p>{{ $commentCount }}</p> <!-- Display the total number of comments -->
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h2>Contact</h2>
                        <p>{{ $contactCount }}</p> <!-- Display the total number of contacts -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Transaction Chart -->
        <div class="chart-container">
            <canvas id="transactionChart"></canvas>
        </div>
    </div>

    <script>
        // Toggle sidebar
        document.getElementById('toggleSidebarBtn').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            var mainContent = document.getElementById('mainContent');
            sidebar.classList.toggle('closed');
            mainContent.classList.toggle('collapsed');
            this.classList.toggle('collapsed');
        });

        // Transaction Chart using Chart.js (Bar chart)
        var ctx = document.getElementById('transactionChart').getContext('2d');
        var transactionChart = new Chart(ctx, {
            type: 'bar', // Chart type changed to bar
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], // X-axis labels (months)
                datasets: [{
                    label: 'Transactions per Month',
                    data: @json($transactionData), // Use the data from the controller
                    backgroundColor: 'rgba(54, 162, 235, 0.6)', // Background color for bars
                    borderColor: 'rgba(54, 162, 235, 1)', // Border color for bars
                    borderWidth: 1, // Border width
                    fill: false // No fill under the bars
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true, // Y-axis starts at zero
                        min: 0, // Minimum value
                        max: 1000000000, // Maximum value
                        ticks: {
                            callback: function(value) {
                                return 'Rp. ' + value.toLocaleString(); // Format the Y-axis labels
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
