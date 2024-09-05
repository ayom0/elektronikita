<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #306EE8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }
        .container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            color: #333;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .container:hover {
            transform: scale(1.05);
        }
        h2 {
            color: #306EE8;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            color: #306EE8;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.3s ease;
        }
        .form-group input:focus {
            border-color: #306EE8;
        }
        .form-group input[readonly] {
            background-color: #f4f4f4;
            cursor: not-allowed;
        }
        .btn {
            display: inline-block;
            padding: 12px;
            margin: 10px 0;
            text-align: center;
            color: #fff;
            background-color: #306EE8;
            border: none;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
            border-radius: 8px;
            font-size: 16px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn:hover {
            background-color: #2554b0;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }
        .btn-logout {
            background-color: #ff4b5c;
        }
        .btn-logout:hover {
            background-color: #e03e4e;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Profil Pengguna</h2>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" value="user@example.com">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" value="••••••••" readonly>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" value="Jl. Contoh No. 123, Jakarta">
    </div>
    <div class="form-group">
        <label for="nomorHp">Nomor HP:</label>
        <input type="text" id="nomorHp" value="+62 812 3456 7890">
    </div>
    <button class="btn" onclick="simpan()">Simpan</button>
    <button class="btn" onclick="kePesanan()">Halaman Pesanan</button>
    <button class="btn btn-logout" onclick="logout()">Logout</button>
</div>

<script>
    function simpan() {
        // Logika untuk menyimpan perubahan
        alert("Perubahan telah disimpan!");
        // Contoh: Mengambil nilai input dan simpan ke database
        const email = document.getElementById('email').value;
        const alamat = document.getElementById('alamat').value;
        const nomorHp = document.getElementById('nomorHp').value;
        
        console.log("Email:", email);
        console.log("Alamat:", alamat);
        console.log("Nomor HP:", nomorHp);
    }

    function kePesanan() {
        // Arahkan ke halaman pesanan
        window.location.href = "pesanan.html";
    }

    function logout() {
        alert("Anda telah logout!");
        window.location.href = "login.html";
    }
</script>

</body>
</html>
