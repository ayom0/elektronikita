<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/users/css/login.css">
    
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .bx-show {
    content: '\eb41'; /* Ikon mata terbuka */
}

    </style>
</head>
<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="field input-field">
        <input type="email" name="email" placeholder="Email" class="input" required>
    </div>

    <div class="field input-field">
    <input type="password" name="password" placeholder="Password" class="password" id="password" required>
    <i class='bx bx-hide eye-icon' id="togglePassword"></i>
</div>


<div class="form-link">
    <a href="{{ route('password.request') }}" class="forgot-pass">Forgot password?</a>
</div>



    <div class="field button-field">
        <button type="submit">Login</button>
    </div>
</form>


                <div class="form-link">
                    <span>Don't have an account? <a href="{{ url('/register') }}" class="link signup-link">Signup</a></span>
                </div>
            </div>

            <div class="line"></div>


            <div class="media-options">
            <a href="{{ route('google.login') }}" class="field google">
    <i class='bx bxl-google google-icon'></i>
    <span>Register with Google</span>
</a>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        // Ambil elemen password dan ikon toggle
const passwordInput = document.getElementById('password');
const togglePassword = document.getElementById('togglePassword');

// Tambahkan event listener pada ikon toggle
togglePassword.addEventListener('click', function () {
    // Periksa tipe input saat ini
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);

    // Toggle ikon mata
    this.classList.toggle('bx-hide');
    this.classList.toggle('bx-show');
});

    </script>
</body>
</html>