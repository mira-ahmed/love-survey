
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['q1']);
    $email = htmlspecialchars($_POST['q2']);
    $age = htmlspecialchars($_POST['q3']);
    $answer = htmlspecialchars($_POST['answers']);
    $question5 = htmlspecialchars($_POST['question5']);
    $dates = isset($_POST['dates']) ? implode(", ", $_POST['dates']) : 'None';
    $comments = htmlspecialchars($_POST['comments']);

    // Example: Send email
    $to = "mariaamm.ahmedd@gmail.com";
    $subject = "Survey Response";
    $message = "Love-survey's submition";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirect or display a thank you message
    echo "Thank you for your submission!";
}
?>
