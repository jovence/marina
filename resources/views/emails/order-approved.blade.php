d.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Approved - Great Choice!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            color: #2c5282;
            text-align: center;
            padding: 20px 0;
        }
        .order-details {
            background: #f7fafc;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .thank-you {
            text-align: center;
            color: #2c5282;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🎉 Great News! Your Order is Approved 🎉</h1>
    </div>

    <p>Dear {{ $order->user->name }},</p>

    <p>Fantastic news! Your order has been approved and is being processed. We're excited to have you as our valued customer!</p>

    <div class="order-details">
        <h3>📦 Order Details:</h3>
        <ul>
            <li><strong>Order ID:</strong> #{{ $order->id }}</li>
            <li><strong>Product:</strong> {{ $order->product->title }}</li>
            <li><strong>Status:</strong> Approved ✅</li>
        </ul>
    </div>

    <p>We're working hard to ensure your order meets our quality standards. You'll receive another notification when your order is ready!</p>

    <p>Have questions? Don't hesitate to reach out to our customer support team - we're here to help!</p>

    <div class="thank-you">
        <p><strong>Thank you for choosing us! We truly appreciate your trust.</strong></p>
        <p>Looking forward to serving you again! 🌟</p>
    </div>

    <hr>
    <p style="font-size: 12px; text-align: center; color: #666;">
        reply to our customer services at this address customercrm.cmr@gmail.com
    </p>
</body>
</html>