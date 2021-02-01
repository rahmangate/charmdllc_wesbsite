<?php
    $to      = 'info@charmdllc.com';
    $subject = 'charmdllc contact us';
    $message = $_POST['Question_or_Comment'];
    $email_address = $_POST['Email_Address'];
    $fullname = $_POST['Full_Name'];
    $address = $_POST['Address'];
    $phone = $_POST['Phone'];
    $headers = array(
        'From' => $email_address.','. $fullname.','. $phone.','. $address ,
        'Reply-To' => $email_address
    );

    $success = mail($to, $subject, $message, $headers);
    if($success){
        echo json_encode({"message":"Mail sent successfully"})
    }else{
        echo json_encode({"error":"Failed to send email."})
    }
?>