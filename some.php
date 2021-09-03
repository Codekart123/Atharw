<?php if (isset($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    if (!empty($first_name) && !empty($address) && !empty($contact)) {
        $to = 'rsmrutikant8@gmail.com';
        $subject = 'Contact Form Submitted';
        $body = "Name: " . $first_name . "\n\n" . "Address: " . $address . "\n\n" . "Contact No: " . $contact . "\n\n";
        $headers = 'From: ' . $email;
    }
}
