<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Add your CSS file here -->
</head>
<body>
    <div class="container">
        <div class="alert alert-success">
            <h1>Payment Successful!</h1>
            <p>Your payment has been processed successfully. Thank you for your purchase!</p>
        </div>
        <a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
    </div>
</body>
</html>
