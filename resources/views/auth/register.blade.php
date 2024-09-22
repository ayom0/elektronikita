<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Register Form</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/users/css/register.css">
    
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<section class="container forms">
    <div class="form signup">
        <div class="form-content">
            <header>Register</header>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="field input-field">
                    <input type="email" name="email" placeholder="Email" class="input" required>
                </div>
                <div class="field input-field">
                    <input type="password" name="password" placeholder="Create password" class="password" required>
                </div>
                <div class="field input-field">
                    <input type="password" name="password_confirmation" placeholder="Confirm password" class="password" required>
                </div>
                <div class="field input-field">
                    <input type="text" name="phone_number" placeholder="Phone Number" class="input" required>
                </div>
                <div class="field input-field">
                    <input type="text" name="address" placeholder="Address" class="input">
                </div>
                <div class="field button-field">
                    <button type="submit">Register</button>
                </div>
            </form>
            <div class="form-link">
                <span>Already have an account? <a href="{{ url('/login') }}" class="link login-link">Login</a></span>
            </div>
        </div>
        <div class="line"></div>
        
        <div class="media-options">
            <a href="#" class="field google">
                <i class='bx bxl-google google-icon'></i>
                <span>Register with Google</span>
            </a>
        </div>
    </div>
</section>


    <!-- JavaScript -->
    <script src="assets/users/js/script.js"></script>
</body>
</html>
