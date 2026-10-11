<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation - Amazing Palace</title>
    <style>
        body {
            font-family: 'Montserrat', 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f9f7f2;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        .header {
            background-color: #0a2463;
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .logo {
            display: inline-block;
            margin-bottom: 15px;
        }
        .crown-icon {
            background-color: #d4af37;
            color: #0a2463;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 24px;
        }
        .h1 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 28px;
            font-weight: bold;
            margin: 0 0 10px 0;
        }
        .subtitle {
            font-size: 16px;
            opacity: 0.9;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .content {
            padding: 30px;
        }
        .section {
            margin-bottom: 30px;
            border-bottom: 2px solid #e8f0f7;
            padding-bottom: 20px;
        }
        .section:last-child {
            border-bottom: none;
        }
        .h2 {
            font-family: 'Cormorant Garamond', Georgia, serif;
            font-size: 22px;
            color: #0a2463;
            margin-bottom: 15px;
            border-left: 4px solid #d4af37;
            padding-left: 10px;
        }
        .booking-details {
            background-color: #e8f0f7;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .detail-row {
            display: flex;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #d1dbe8;
        }
        .detail-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .detail-label {
            font-weight: bold;
            color: #0a2463;
            min-width: 160px;
        }
        .detail-value {
            color: #333;
        }
        .highlight-box {
            background-color: #fff9e6;
            border: 2px solid #d4af37;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }
        .instruction-list {
            margin: 0;
            padding-left: 20px;
        }
        .instruction-list li {
            margin-bottom: 10px;
        }
        .contact-info {
            background-color: #0a2463;
            color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            margin-top: 30px;
        }
        .contact-info a {
            color: #d4af37;
            text-decoration: none;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 14px;
            border-top: 1px solid #eee;
            margin-top: 30px;
        }
        .btn {
            display: inline-block;
            background: linear-gradient(to right, #d4af37, #f7ef8a);
            color: #0a2463;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            margin: 10px 5px;
            text-align: center;
            border: none;
            cursor: pointer;
        }
        .btn-secondary {
            background: transparent;
            border: 2px solid #0a2463;
            color: #0a2463;
        }
        .text-center {
            text-align: center;
        }
        .mt-4 { margin-top: 20px; }
        .mb-4 { margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="crown-icon">👑</div>
            <h1 class="h1">Amazing Palace</h1>
            <div class="subtitle">Adult Family Home</div>
        </div>

        <!-- Content -->
        <div class="content">
            <!-- Greeting -->
            <div class="section">
                <h2 class="h2">Booking Confirmation</h2>
                <p>Dear {{ $booking->first_name }},</p>
                <p>Thank you for scheduling your {{ $booking->type_label }} at Amazing Palace. Your appointment has been confirmed.</p>
                <p>We look forward to welcoming you to our facility and showing you the exceptional care we provide.</p>
            </div>

            <!-- Booking Details -->
            <div class="section">
                <h2 class="h2">Appointment Details</h2>
                <div class="booking-details">
                    @foreach($details as $label => $value)
                    <div class="detail-row">
                        <div class="detail-label">{{ $label }}:</div>
                        <div class="detail-value">{{ $value }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Preparation Instructions -->
            <div class="section">
                <h2 class="h2">Preparation & What to Bring</h2>
                <div class="highlight-box">
                    <p><strong>To make the most of your visit:</strong></p>
                    <ul class="instruction-list">
                        @foreach($instructions as $instruction)
                        <li>{{ $instruction }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Location -->
            <div class="section">
                <h2 class="h2">Location</h2>
                <p><strong>Address:</strong><br>
                {{ config('facility.name') }}<br>
                {{ config('facility.address_line') }}</p>
                <p><a href="https://www.google.com/maps/search/?api=1&query={{ rawurlencode(config('facility.address_line')) }}">Open in Maps</a></p>
            </div>

            <!-- Changes -->
            <div class="section text-center">
                <p>Need to change or cancel your appointment? Call us on
                    <a href="tel:{{ config('facility.phone_tel') }}">{{ config('facility.phone') }}</a>
                    or reply to this email.</p>
            </div>

            <!-- Contact Information -->
            <div class="contact-info">
                <h3 style="margin-top: 0; color: #d4af37;">Need Assistance?</h3>
                <p>Email: <a href="mailto:{{ config('facility.email') }}">{{ config('facility.email') }}</a></p>
                <p>Phone: <a href="tel:{{ config('facility.phone_tel') }}">{{ config('facility.phone') }}</a></p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>© {{ date('Y') }} Amazing Palace Adult Family Home. All rights reserved.</p>
            <p>This email was sent to {{ $booking->email }}. If you believe you received this in error, please contact us.</p>
        </div>
    </div>
</body>
</html>
