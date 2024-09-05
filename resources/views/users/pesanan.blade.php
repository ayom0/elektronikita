<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pesanan</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }
        h2 {
            color: #306EE8;
            text-align: center;
            margin-bottom: 30px;
        }
        .order-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }
        .order-item:hover {
            background-color: #f0f0f0;
        }
        .order-details {
            display: flex;
            align-items: center;
        }
        .order-details img {
            width: 100px;
            border-radius: 10px;
            margin-right: 20px;
        }
        .order-info {
            display: flex;
            flex-direction: column;
        }
        .order-info h3 {
            margin: 0;
            color: #306EE8;
        }
        .order-info p {
            margin: 5px 0;
        }
        .order-status {
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
            background-color: #306EE8;
            color: #fff;
            width: 150px;
        }
        .subtotal {
            font-size: 18px;
            font-weight: bold;
            color: #306EE8;
        }
        .btn {
            display: block;
            margin: 30px auto;
            padding: 12px 20px;
            background-color: #306EE8;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn:hover {
            background-color: #2554b0;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Pesanan Saya</h2>
    
    <div class="order-item">
        <div class="order-details">
            <img src="https://via.placeholder.com/100" alt="Gambar Produk">
            <div class="order-info">
                <h3>Nama Barang 1</h3>
                <p>Harga: Rp 150,000</p>
                <p>Jumlah: 2</p>
                <p class="subtotal">Sub Total: Rp 300,000</p>
            </div>
        </div>
        <div class="order-status">Dikirim</div>
    </div>

    <div class="order-item">
        <div class="order-details">
            <img src="https://via.placeholder.com/100" alt="Gambar Produk">
            <div class="order-info">
                <h3>Nama Barang 2</h3>
                <p>Harga: Rp 200,000</p>
                <p>Jumlah: 1</p>
                <p class="subtotal">Sub Total: Rp 200,000</p>
            </div>
        </div>
        <div class="order-status">Diproses</div>
    </div>

    <button class="btn" onclick="kembaliKeProfil()">Kembali ke Profil</button>
</div>

<script>
    function kembaliKeProfil() {
        // Redirect ke halaman profil
        window.location.href = "profil.html";
    }
</script>

</body>
</html>
