<!-- resources/views/payment/cancel.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Canceled</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f9fafb;
            color: #333;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        a {
            background-color: #3b82f6;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
    <h1>Payment Canceled</h1>
    <p>Your payment has been canceled. If this was a mistake, please try again.</p>
    <a href="{{ route('home') }}">Return Home</a>
</body>
</html>
