<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>New Contact Form Submission</title>
  <style>
    body { font-family: Arial, sans-serif; color: #333; }
    .container {
      max-width: 600px; margin: auto; border-radius: 10px;
      border: 1px solid #ddd; padding: 20px; background-color: #fafafa;
    }
    .header {
      background: linear-gradient(to right, #ff2274, #be0cdc);
      color: white; padding: 10px 20px; border-radius: 10px;
    }
    .content { margin: 20px 0; }
    .footer { font-size: 12px; color: #888; margin-top: 20px; }
    .label { font-weight: bold; }
  </style>
</head>
<body>
  <div class="container">
    <div class="header"><h2>You've Got a New Inquiry via Contact Form</h2></div>
    <div class="content">
      <p><span class="label">Name:</span> <?= htmlspecialchars($name) ?></p>
      <p><span class="label">Email:</span> <?= htmlspecialchars($email) ?></p>
      <p><span class="label">Subject:</span> <?= htmlspecialchars($subject) ?></p>
      <p><span class="label">Phone:</span> <?= htmlspecialchars($phone) ?></p>
      <p><span class="label">Message:</span></p>
      <p><?= nl2br(htmlspecialchars($message)) ?></p>
    </div>
    <div class="footer">This message was sent from your website contact form.</div>
  </div>
</body>
</html>
