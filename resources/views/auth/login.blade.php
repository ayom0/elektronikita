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
        <input type="password" name="password" placeholder="Password" class="password" required>
        <i class='bx bx-hide eye-icon'></i>
    </div>

    <div class="form-link">
        <a href="#" class="forgot-pass">Forgot password?</a>
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
                <a href="#" class="field google">
                    <img src="#" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
