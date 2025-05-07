<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

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

        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $subject = $_POST['subject'] ?? 'Contact Form Submission';
        $message = $_POST['message'] ?? '';

        $mail->addReplyTo($email, $name);
        $mail->setFrom('form@pvedubai.com', 'PVE Dubai Form');
        $mail->addAddress('rosy@pvedubai.com');
        $mail->isHTML(true);
        $mail->Subject = $subject;

        // Load template
        ob_start();
        include __DIR__ . '/email-template.php';
        $mail->Body = ob_get_clean();

        $mail->send();
        echo json_encode(['success' => true, 'message' => 'Message sent successfully.']);

    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => "Mailer Error: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
