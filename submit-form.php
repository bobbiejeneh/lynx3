<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Free Quote and Free Samples Request</title>
    <style>
        /* Add your styles here */
    </style>
</head>
<body>
    <form method="post" action="submit-form.php" name="signup" onsubmit="return validateForm()">
        <!-- Add your form elements here -->
    </form>
    
    <script>
        function validateForm() {
            /* Add your form validation code here */
        }
    </script>
    
 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = trim($_POST["name"]);
            $email = trim($_POST["email"]);
            $phone = trim($_POST["phone"]);
            $company = trim($_POST["company"]);
            $message = trim($_POST["message"]);

            $to = "bobbiejeneh@gmail.com";
            $subject = "Free Quote and Free Samples Request";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\nMessage: $message";
            $headers = "From: $email";

            if (mail($to, $subject, $body, $headers)) {
                header("Location: https://bobbiejeneh.clickfunnels.com/thank-you1680393404101");
                exit();
            } else {
                header("Location: https://bobbiejeneh.clickfunnels.com/optin1680382214592");
                exit();
            }
        }
    ?>
</body>
</html>