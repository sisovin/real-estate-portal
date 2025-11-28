<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
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
            background: linear-gradient(135deg, #f89d13 0%, #f87124 100%);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 0 0 8px 8px;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: bold;
            color: #f89d13;
            display: block;
            margin-bottom: 5px;
        }
        .field-value {
            background: white;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #e9ecef;
        }
        .subject-badge {
            display: inline-block;
            background: #f89d13;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>VenueHub</h1>
        <p>New Contact Form Submission</p>
    </div>

    <div class="content">
        <p><strong>Hello VenueHub Team,</strong></p>
        <p>You have received a new contact form submission. Here are the details:</p>

        <div class="field">
            <span class="field-label">Subject:</span>
            <span class="subject-badge">{{ ucfirst(str_replace('_', ' ', $subject)) }}</span>
        </div>

        <div class="field">
            <span class="field-label">Name:</span>
            <div class="field-value">{{ $first_name }} {{ $last_name }}</div>
        </div>

        <div class="field">
            <span class="field-label">Email:</span>
            <div class="field-value"><a href="mailto:{{ $email }}">{{ $email }}</a></div>
        </div>

        @if($phone)
        <div class="field">
            <span class="field-label">Phone:</span>
            <div class="field-value"><a href="tel:{{ $phone }}">{{ $phone }}</a></div>
        </div>
        @endif

        <div class="field">
            <span class="field-label">Message:</span>
            <div class="field-value">{{ nl2br($message) }}</div>
        </div>

        @if($newsletter)
        <div class="field">
            <span class="field-label">Newsletter:</span>
            <div class="field-value">✓ Subscribed to newsletter</div>
        </div>
        @endif

        <div class="field">
            <span class="field-label">Submitted:</span>
            <div class="field-value">{{ $submitted_at->format('F j, Y \a\t g:i A') }}</div>
        </div>

        <p style="margin-top: 30px;">
            <strong>Next Steps:</strong><br>
            • Review the inquiry and respond within 24 hours<br>
            • If this is a venue partnership inquiry, forward to the partnerships team<br>
            • If this is a support request, create a support ticket<br>
            • Update CRM with the contact information
        </p>

        <div class="footer">
            <p>This email was sent from the VenueHub contact form at {{ url('/') }}</p>
            <p>&copy; {{ date('Y') }} VenueHub. All rights reserved.</p>
        </div>
    </div>
</body>
</html>