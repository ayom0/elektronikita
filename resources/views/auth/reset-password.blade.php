<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/users/css/login.css">
    
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Reset Password</header>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <!-- Token Reset Password -->
                    <input type="hidden" name="token" value="{{ request()->route('token') }}">

                    <!-- Alamat Email -->
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" class="input" value="{{ old('email', request()->email) }}" required autofocus>
                    </div>
                    @if ($errors->has('email'))
                        <p class="error">{{ $errors->first('email') }}</p>
                    @endif

                    <!-- Password Baru -->
                    <div class="field input-field">
                        <input type="password" name="password" placeholder="New Password" class="input" required>
                    </div>
                    @if ($errors->has('password'))
                        <p class="error">{{ $errors->first('password') }}</p>
                    @endif

                    <!-- Konfirmasi Password Baru -->
                    <div class="field input-field">
                        <input type="password" name="password_confirmation" placeholder="Confirm New Password" class="input" required>
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <p class="error">{{ $errors->first('password_confirmation') }}</p>
                    @endif

                    <div class="field button-field">
                        <button type="submit">Reset Password</button>
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
