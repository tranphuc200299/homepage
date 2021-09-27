<?php
mb_internal_encoding("UTF-8");

$to = 'info@stayble.jp';
$subject = '「民泊撤退」のLPサイトからお問い合わせ';

$name = "";
$address = "";
$unitaddress = "";
$type = "";
$date1 = "";
$date2 = "";
$email = "";
$phone = "";
$message = "";

if( isset($_POST['name']) ){
    $name = $_POST['name'];

    $body .= "お名前: ";
    $body .= $name." 様";
    $body .= "\n\n";
}
if( isset($_POST['subject']) ){
    $subject = $_POST['subject'];
}
if( isset($_POST['address']) ){
    $address = $_POST['address'];

    $body .= "";
    $body .= "ご住所: ";
    $body .= $address;
    $body .= "\n\n";
}
if( isset($_POST['unitaddress']) ){
    $unitaddress = $_POST['unitaddress'];

    $body .= "";
    $body .= "対象物件ご住所: ";
    $body .= $unitaddress;
    $body .= "\n\n";
}
if( isset($_POST['type']) ){
    $type = $_POST['type'];

    $body .= "";
    $body .= "建物区分: ";
    $body .= $type;
    $body .= "\n\n";
}
if( isset($_POST['email']) ){
    $email = $_POST['email'];

    $body .= "";
    $body .= "メール: ";
    $body .= $email;
    $body .= "\n\n";
}
if( isset($_POST['phone']) ){
    $phone = $_POST['phone'];

    $body .= "";
    $body .= "Phone: ";
    $body .= $phone;
    $body .= "\n\n";
}
if( isset($_POST['date1']) ){
    $date1 = $_POST['date1'];

    $body .= "";
    $body .= "お見積り希望日（希望1）: ";
    $body .= $date1;
    $body .= "\n\n";
}
if( isset($_POST['date2']) ){
    $date2 = $_POST['date2'];

    $body .= "";
    $body .= "お見積り希望日（希望2）: ";
    $body .= $date2;
    $body .= "\n\n";
}
if( isset($_POST['message']) ){
    $message = $_POST['message'];

    $body .= "";
    $body .= "お問い合わせ内容: ";
    $body .= $message;
    $body .= "\n\n";
}

$headers = 'From: ' .$email . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
mb_send_mail($to, $subject, $body, $headers);
    echo '<div class="status-icon valid"><i class="fa fa-check"></i></div>';
}
else{
    echo '<div class="status-icon invalid"><i class="fa fa-times"></i></div>';
}
