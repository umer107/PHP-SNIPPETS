<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //Load composer's autoloader
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

    ?>
<?php
function format_email($info, $format){
 
    //set the root
    $root = $_SERVER['DOCUMENT_ROOT'].'/emailconfirmation';
 
    //grab the template content
    $template = file_get_contents($root.'/signup_template.'.$format);
             
    //replace all the tags
    $template = preg_replace('/USERNAME/', $info['username'], $template);
    $template = preg_replace('/EMAIL/', $info['email'], $template);
    $template = preg_replace('/KEY/', $info['key'], $template);
    $template = preg_replace('/SITEPATH/','http://localhost', $template);
         
    //return the html of the template
    return $template;
 
}
function send_email($info){
		
	//format each email
	$body = format_email($info,'html');
	$body_plain_txt = format_email($info,'txt');


    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'saadnasir9595@gmail.com';                 // SMTP username
        $mail->Password = 'sp15-bse-008';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->SMTPOptions = array (
        'ssl' => array (
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
        );
        //Recipients
        $mail->setFrom('noreply@localhost.com', 'LocalHost');
        $mail->addAddress($info['email'], $info['username']);     // Add a recipient
                                                           // Name is optional
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Welcome to Localhost';
        $mail->Body    = $body;
        $mail->AltBody = $body_plain_txt;
        if($mail->send()){
            return true;
        }
        else{
            return false;
        }
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
function resetlink($info){
    	$emailBody = "<div>" . $info["username"] . ",<br><br><p>Click this link to recover your password<br><a href='" ."http://localhost/emailconfirmation/resetpassword.php?name=" . $info["username"] . "'>" . "http://localhost/emailconfirmation/resetpassword.php?name=" . $info["username"] . "</a><br><br></p>Regards,<br> Admin.</div>";

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'saadnasir9595@gmail.com';                 // SMTP username
        $mail->Password = 'sp15-bse-008';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->SMTPOptions = array (
        'ssl' => array (
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
        );
        //Recipients
        $mail->setFrom('noreply@localhost.com', 'LocalHost');
        $mail->addAddress($info['email'], $info['username']);     // Add a recipient
                                                           // Name is optional
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Reset Password';
        $mail->msgHTML($emailBody);
        if($mail->send()){
            return true;
        }
        else{
            return false;
        }
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>