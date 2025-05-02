<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/autoload.php';

// Clean output buffer just in case
while (ob_get_level()) ob_end_clean();
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'mail.pvedubai.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'form@pvedubai.com';
        $mail->Password = 'Hr};^_8zy!GJ';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->addReplyTo($_POST['email'], $_POST['name']);
        $mail->setFrom('form@pvedubai.com', 'PVE Dubai Form');
        $mail->addAddress('rosy@pvedubai.com');

        $mail->isHTML(true);
        $mail->Subject = $_POST['subject'] ?? 'Contact Form Submission';
        $mail->Body = "
            <strong>Name:</strong> {$_POST['name']}<br>
            <strong>Email:</strong> {$_POST['email']}<br>
            <strong>Phone:</strong> {$_POST['phone']}<br>
            <strong>Message:</strong><br>{$_POST['message']}
        ";

        $mail->send();
        echo json_encode(['success' => true, 'message' => 'Message sent successfully.']);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => "Mailer Error: {$mail->ErrorInfo}"]);
    }
}
?>
