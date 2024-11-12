<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/users/css/login.css">
    
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Forgot Password</header>
                <p class="text">Forgot your password? No problem. Just enter your email address below, and we will send you a password reset link.</p>

                <!-- Status Sesi -->
                @if (session('status'))
                    <p class="status-message">{{ session('status') }}</p>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <!-- Alamat Email -->
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" class="input" value="{{ old('email') }}" required autofocus>
                    </div>

                    @if ($errors->has('email'))
                        <p class="error">{{ $errors->first('email') }}</p>
                    @endif

                    <div class="field button-field">
                        <button type="submit">Email Password Reset Link</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Remembered your password? <a href="{{ route('login') }}" class="link login-link">Login</a></span>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
