<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #f8f9fa; padding: 20px; border-radius: 5px; }
        .content { background: white; padding: 20px; border: 1px solid #ddd; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #555; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
        </div>
        
        <div class="content">
            <div class="field">
                <span class="label">From:</span>
                {{ $name }} ({{ $email }})
            </div>
            
            <div class="field">
                <span class="label">Subject:</span>
                {{ $subject }}
            </div>
            
            <div class="field">
                <span class="label">Message:</span>
                <div style="margin-top: 10px; padding: 15px; background: #f8f9fa; border-radius: 5px;">
                    {!! nl2br(e($messageContent)) !!}
                </div>
            </div>
            
            <div class="field" style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #ddd;">
                <small>This email was sent from your website's contact form.</small>
            </div>
        </div>
    </div>
</body>
</html>