<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Password</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/users/css/login.css">
    
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Confirm Password</header>
                <p class="text">This is a secure area of the application. Please confirm your password before continuing.</p>

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <!-- Password -->
                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Password" class="input" required autocomplete="current-password">
                    </div>

                    @if ($errors->has('password'))
                        <p class="error">{{ $errors->first('password') }}</p>
                    @endif

                    <div class="field button-field">
                        <button type="submit">Confirm</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Forgot your password? <a href="{{ route('password.request') }}" class="link forgot-link">Reset it here</a></span>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
