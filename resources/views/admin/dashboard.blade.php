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

        .card-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .card {
            width: 16%; /* Reduced width for smaller cards */
            padding: 15px; /* Reduced padding for smaller cards */
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card h2 {
            font-size: 18px; /* Adjusted font size for card title */
            margin-bottom: 10px;
        }

        .card p {
            font-size: 14px; /* Adjusted font size for card text */
            margin: 0;
        }

        /* Transaction chart styling */
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

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <button id="toggleSidebarBtn">☰</button>
        <h1>Dashboard Overview</h1>

        <!-- Dashboard Cards -->
        <div class="card-container">
    <div class="card">
        <h2>Users</h2>
        <p>{{ $userCount }}</p> <!-- Display the total number of users -->
    </div>
    <div class="card">
        <h2>Products</h2>
        <p>{{ $productCount }}</p> <!-- Display the total number of products -->
    </div>
    <div class="card">
        <h2>Orders</h2>
        <p>{{ $orderCount }}</p>
    </div>
    <div class="card">
    <h2>Contact</h2>
    <p>{{ $contactCount }}</p> <!-- Display the total number of contacts -->
</div>

    <div class="card">
    <h2>Komentar</h2>
    <p>{{ $commentCount }}</p> <!-- Display the total number of comments -->
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

        // Transaction Chart using Chart.js
var ctx = document.getElementById('transactionChart').getContext('2d');
var transactionChart = new Chart(ctx, {
    type: 'line', // Chart type
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], // X-axis labels (months)
        datasets: [{
            label: 'Transactions per Month',
            data: @json($transactionData), // Use the data from the controller
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Background color for line
            borderColor: 'rgba(54, 162, 235, 1)', // Border color for line
            borderWidth: 2, // Line width
            fill: true // Fill the area below the line
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
