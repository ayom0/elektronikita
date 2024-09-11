<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 700px;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .form-group {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .form-group label {
            width: 30%;
            font-weight: bold;
            color: #333;
        }
        .form-group input {
            width: 65%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }
        .form-group input:focus {
            border-color: #306EE8;
        }
        .form-group input[readonly] {
            background-color: #f0f0f0;
            cursor: not-allowed;
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-primary {
            background-color: #306EE8;
            color: white;
        }
        .btn-primary:hover {
            background-color: #2554b0;
        }
        .btn-secondary {
            background-color: #333;
            color: white;
        }
        .btn-secondary:hover {
            background-color: #444;
        }
        .btn-logout {
            background-color: red;
            color: white;
        }
        .btn-logout:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Profil Pengguna</h2>
    @if(session('success'))
        <div class="alert alert-success" style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" value="{{ $user->email }}" readonly>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" value="••••••••" readonly>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="address" value="{{ $user->address }}">
        </div>
        <div class="form-group">
            <label for="nomorHp">Nomor HP</label>
            <input type="text" id="nomorHp" value="{{ $user->phone_number }}" readonly>
        </div>
        <div class="btn-container">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" onclick="window.location.href=''">Halaman Pesanan</button>
            <button type="button" class="btn btn-logout" onclick="logout()">Logout</button>
        </div>
    </form>
</div>

<script>
    function logout() {
        event.preventDefault();
        document.getElementById('logout-form').submit();
    }
</script>

<form id="logout-form" action="" method="POST" style="display: none;">
    @csrf
</form>

</body>
</html>
