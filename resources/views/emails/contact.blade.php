<!DOCTYPE html>
<html>
<head>
    <title>New Website Inquiry</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    {{-- @if(!empty($data['service']))
        <p><strong>Service:</strong> {{ $data['service'] }}</p>
    @endif --}}
    <p><strong>Message:</strong><br>{{ nl2br(e($data['message'])) }}</p>
</body>
</html>