
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
    $subject = "Survey Form Submission";
    $message = "Name: $name\nEmail: $email\nAge: $age\nAnswer: $answer\nQuestion 5: $question5\nDates: $dates\nComments: $comments";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Sorry, there was a problem sending your submission.";
    }
}
?>
    
