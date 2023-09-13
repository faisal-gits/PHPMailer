## PHPMailer Email Sending Script Documentation

### Introduction

This documentation provides an overview of a PHP script using PHPMailer to send emails via SMTP (Simple Mail Transfer Protocol). The script allows you to send emails securely using SSL encryption and SMTP authentication. Below, you will find details on how to set up and use this script for sending emails.

### Prerequisites

Before using this script, ensure that you have the following prerequisites in place:

1. **PHP Environment**: You need a working PHP environment installed on your server.

2. **PHPMailer Library**: Download and include the PHPMailer library (`PHPMailerAutoload.php`) in the same directory as your script or specify the correct path to it.

3. **SMTP Server**: You should have access to an SMTP server that supports SSL encryption.

### Script Configuration

Before you can send emails using this script, you must configure it with the necessary information:

1. **From Email (`$mail->setFrom`)**: Set the sender's email address. Replace `'from@email.com'` with the desired email address.

2. **To Email (`$mail->addAddress`)**: Set the recipient's email address. Replace `'to@email.com'` with the recipient's email address.

3. **Email Subject (`$mail->Subject`)**: Specify the subject of the email.

4. **Email Body (`$mail->Body`)**: Define the content of the email.

5. **SMTP Configuration**:
   - **SMTPSecure (`$mail->SMTPSecure`)**: Use `'ssl'` for SSL encryption or `'tls'` for TLS encryption, depending on your SMTP server's requirements.
   - **SMTP Host (`$mail->Host`)**: Enter the hostname of your SMTP server.
   - **SMTP Authentication (`$mail->SMTPAuth`)**: Set this to `true` if your SMTP server requires authentication.
   - **SMTP Port (`$mail->Port`)**: Specify the appropriate SMTP port for SSL (465) or TLS (usually 587).

6. **SMTP Credentials**:
   - **Username (`$mail->Username`)**: Provide the email ID used for SMTP authentication.
   - **Password (`$mail->Password`)**: Enter the password associated with the SMTP email ID.

7. **HTML Email (`$mail->IsHTML`)**: Set this to `true` if your email content is in HTML format; otherwise, set it to `false`.

8. **Debugging (`$mail->SMTPDebug`)**: For debugging purposes, you can set this to `2` to enable debugging output. Remove or set it to `0` in production to hide debug information.

### Sending the Email

To send the email, execute the script. The email will be sent using the configured SMTP server and settings. After sending the email, the script will display a success message or an error message if any issues occur during the sending process.

### Error Handling

If an error occurs while sending the email, the script will display a "Mailer Error" message, including details about the error (`$mail->ErrorInfo`). You should use this information for debugging and troubleshooting any issues that may arise.

### Conclusion

This PHP script using PHPMailer allows you to send emails securely via SMTP with SSL encryption and authentication. It can be customized to suit your specific email sending needs, and the provided documentation should guide you through the setup and usage of the script.