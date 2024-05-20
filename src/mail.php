<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $formData = json_decode(file_get_contents("php://input"), true);

    // Extract form fields
    $name = $formData["name"];
    $email = $formData["email"];
    $guests = $formData["guests"];

    // Send confirmation email to guest
    $guestSubject = "RSVP Confirmation";
    $guestMessage = "Dear $name,\n\nThank you for RSVPing for the event. You have successfully registered $guests guests.";
    $guestHeaders = "From: your_email@example.com"; // Replace with your email

    mail($email, $guestSubject, $guestMessage, $guestHeaders);

    // Send notification email to host
    $hostEmail = "garabet.aslo7@gmail.com"; // Replace with host's email
    $hostSubject = "New RSVP Received";
    $hostMessage = "Hello,\n\nA new RSVP has been received:\nName: $name\nEmail: $email\nNumber of Guests: $guests";
    $hostHeaders = "From: your_email@example.com"; // Replace with your email

    mail($hostEmail, $hostSubject, $hostMessage, $hostHeaders);

    // Respond to the client
    echo "success";
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>